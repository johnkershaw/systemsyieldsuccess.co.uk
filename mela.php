<?
/*
##########################################################################
# PLEASE DO NOT REMOVE THIS HEADER!!!
#
# COPYRIGHT NOTICE
#
# FormMail.php v3.1
# Copyright 2000,2001 Ai Graphics and Joe Lumbroso (c) All rights reserved.
# Created 07/06/00   Last Modified 11/12/00
# Joseph Lumbroso, http://www.aigraphics.com
#                  http://www.lumbroso.com/scripts/
##########################################################################
#
# This cannot and will not be inforced but I would appreciate a link back
# to any of these sites:
# http://www.dtheatre.com
# http://www.aigraphics.com
# http://www.lumbroso.com/scripts/
#
# THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
# IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
# FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL
# THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR
# OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE,
# ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR
# OTHER DEALINGS IN THE SOFTWARE.
#
# 27th Mar 2003 <john@kershaw.org> Changed check_referer function to
# test referers array using stristr (so can specify just '181818')
#
# 27th Mar 2003 <john@kershaw.org> Added 'Reply-To' header to 
# avoid SpamAssassin's accusations of 'Hotmail' spoofing
#
# 27th Mar 2003 <john@kershaw.org> Fixed 'checkbox' -> 'Yes'
#
# 27th Mar 2003 <john@kershaw.org> Added template-based email.
#
#
##########################################################################
*/

// referers.. domains/ips that you will allow forms to
// reside on.
/*
$referers = array (
	'kcbg'
);
*/

extract($_POST);

if ($referers)
   check_referer($referers);

// check for a recipient email address and check the validity of it
// Thanks to Bradley miller (bradmiller@accesszone.com) for pointing
// out the need for multiple recipient checking and providing the code.

// JK Added $acceptable_recipients array so can set use
// JK <input type=hidden name=recipient value=1>
// JK to send to the matching email address

$acceptable_recipients = array(
	'systemsyieldsuccess-info' => 'info@systemsyieldsuccess.co.uk',
	'systemsyieldsuccess-web' => 'sys-web@kershaw.org',
);

$recipient_in = split(',',$recipient);
for ($i=0;$i<count($recipient_in);$i++) {
   $recipient_to_test = trim($recipient_in[$i]);
   if (array_key_exists($recipient_to_test, $acceptable_recipients)) {
   	$recipient_to_test = $acceptable_recipients[$recipient_to_test];   	
   }
   if (eregi("^[_\\.0-9a-z-]+@([0-9a-z][0-9a-z-]+\\.)+[a-z]{2,3}$", $recipient_to_test)) {
   		$recipient_in[$i] = $recipient_to_test;
   } else {
      print_error("<b>I NEED VALID RECIPIENT EMAIL ADDRESS ($recipient_to_test) TO CONTINUE</b>");
   }
}
$recipient = implode(',', $recipient_in);

// This is because I originally had it require but too many people
// were used to Matt's Formmail.pl which used required instead.
if ($required)
   $require = $required;
// handle the required fields

if ($require) {
   // seperate at the commas
   $require = ereg_replace( " +", "", $require);
   $required = split(",",$require);
   for ($i=0;$i<count($required);$i++) {
      $string = trim($required[$i]);
      // check if they exist
      if((!(${$string})) || (!(${$string}))) {
         // if the missing_fields_redirect option is on: redirect them
         if ($missing_fields_redirect) {
            header ("Location: $missing_fields_redirect");
            exit;
         }
         $require;
         $missing_field_list .= "<b>Missing required item: $required[$i]</b><br>\n";
      }
   }
   // send error to our mighty error function
   if ($missing_field_list)
      print_error($missing_field_list,"missing");
}

// check the email fields for validity
if (($email) || ($EMAIL)) {
   $email = trim($email);
   if ($EMAIL)
      $email = trim($EMAIL);
   if (!eregi("^[_\.0-9a-z-]+@([0-9a-z][0-9a-z-]+\.)+[a-z]{2,3}$", $email)) {
      print_error("your <b>email address</b> is invalid");
   }
   $EMAIL = $email;
}

// check the name fields if exist
if (($name) || ($NAME)) {
   $name = trim($name);
   if ($NAME)
      $name = trim($NAME);
   $NAME = $name;
}

// check zipcodes for validity
if (($ZIP_CODE) || ($zip_code)) {
   $zip_code = trim($zip_code);
   if ($ZIP_CODE)
      $zip_code = trim($ZIP_CODE);
   if (!ereg("(^[0-9]{5})-([0-9]{4}$)", trim($zip_code)) && (!ereg("^[a-zA-Z][0-9][a-zA-Z][[:space:]][0-9][a-zA-Z][0-9]$", trim($zip_code))) && (!ereg("(^[0-9]{5})", trim($zip_code)))) {
      print_error("your <b>zip/postal code</b> is invalid");
   }
}

// check phone for validity
if (($PHONE_NO) || ($phone_no)) {
   $phone_no = trim($phone_no);
   if ($PHONE_NO)
      $phone_no = trim($PHONE_NO);
   if (!ereg("(^(.*)[0-9]{3})(.*)([0-9]{3})(.*)([0-9]{4}$)", $phone_no)) {
      print_error("your <b>phone number</b> is invalid");
   }
}

// check phone for validity
if (($FAX_NO) || ($fax_no)) {
   $fax_no = trim($fax_no);
   if ($FAX_NO)
      $fax_no = trim($FAX_NO);
   if (!ereg("(^(.*)[0-9]{3})(.*)([0-9]{3})(.*)([0-9]{4}$)", $fax_no)) {
      print_error("your <b>fax number</b> is invalid");
   }
}

// prepare the content
$content = parse_form($HTTP_POST_VARS);

// check for a file if there is a file upload it
if ($file_name) {
   if (!ereg("/$", $path_to_file))
      $path_to_file = $path_to_file."/";
   $location = $path_to_file.$file_name;
   copy($file,$location);
   unlink($file);
   $content .= "Uploaded File: ".$path_to_file.$file_name."\n";
}

// if the env_report option is on: get evironmental variables
if ($env_report) {
   $env_report = ereg_replace( " +", "", $env_report);
   $env_reports = split(",",$env_report);
   $content .= "------ evironmental variables ------\n";
   for ($i=0;$i<count($env_reports);$i++) {
      $string = trim($env_reports[$i]);
      if ($env_reports[$i] == "REMOTE_HOST")
         $content .= "REMOTE HOST: ".$REMOTE_HOST."\n";
      else if ($env_reports[$i] == "REMOTE_USER")
         $content .= "REMOTE USER: ". $REMOTE_USER."\n";
      else if ($env_reports[$i] == "REMOTE_ADDR")
         $content .= "REMOTE ADDR: ". $REMOTE_ADDR."\n";
      else if ($env_reports[$i] == "HTTP_USER_AGENT")
         $content .= "BROWSER: ". $HTTP_USER_AGENT."\n";
   }
}

// if the subject option is not set: set the default
if (!$subject)
   $subject = "Form submission";

// send it off
mail_it(stripslashes($content), stripslashes($subject), $name, $email, $recipient);

// if the redirect option is set: redirect them
if ($redirect) {
   header ("Location: $redirect");
   exit;
} else {
   print "Thank you for your submission\n";
}

// <----------    THE END    ----------> //





// function to check the referer for security reasons.
// contributed by some one who's name got lost.. Thanks
// goes out to him any way.
function check_referer($referers){
	if (count($referers)){
		$found = false;
		$temp = explode("/", getenv("HTTP_REFERER"));
		$referer = $temp[2];
		for ($x=0; $x < count($referers); $x++){
			if (stristr($referer, $referers[$x])){
				$found = true;
			}
		}
		
		if (!$found){
			print_error("You are coming from an <b>unauthorized domain .</b> (".getenv("HTTP_REFERER").")");
			$subject = "FormMail (".getenv("HTTP_REFERER");
			$content = "[FormMail.php] Illegal Referer:".getenv("HTTP_REFERER");
			$name = "formmail.php error";
			$email = "formmail@kershaw.org";
			$recipient = "error_log@kershaw.org";
			mail_it($content, $subject, $name, $email, $recipient);
			// error_log("[FormMail.php] Illegal Referer. (".getenv("HTTP_REFERER").")", 0);
		}
	
		return $found;
	
	} else {
		return false; // Was 'true' but not a good idea, if empty, it will allow it.
	}
}

// parse the form and create the content string which we will send
function parse_form($array) {
	// build reserved keyword array
	$reserved_keys[] = "MAX_FILE_SIZE";
	$reserved_keys[] = "required";
	$reserved_keys[] = "require";
	$reserved_keys[] = "path_to_file";
	$reserved_keys[] = "recipient";
	$reserved_keys[] = "subject";
	$reserved_keys[] = "bgcolor";
	$reserved_keys[] = "text_color";
	$reserved_keys[] = "link_color";
	$reserved_keys[] = "vlink_color";
	$reserved_keys[] = "alink_color";
	$reserved_keys[] = "title";
	$reserved_keys[] = "missing_fields_redirect";
	$reserved_keys[] = "redirect";
	$reserved_keys[] = "env_report";
	$reserved_keys[] = "template_url";
	$reserved_keys[] = "Send";
	$reserved_keys[] = "Submit";
	
	if (count($array))
	{
		$template_url = $array["template_url"];

		if($template_url && $template_url != "")
		{			
			// check the template file exists, if so, read it into a variable
			if (fopen($template_url, "r"))
			{
				$template_str = join("", file($template_url));
				$use_template = 1;
				$template_sample = substr($template_str, 0, 50); // JK

				$content = '';
				// $content = "Template file ($template_url) found:\n$template_sample\n"; // JK
			} else {
				$use_template = 0;
				$content = "Template file ($template_url) specified but not found - form results will not be formatted.\n";
			}
	
		} else {
			$use_template = 0;
		}
		
		// loop through values sent from form, swapping values into template placeholders
		while (list($key, $val) = each($array))
		{
			// exclude reserved keywords
			$reserved_violation = 0;
			for ($ri=0; $ri<count($reserved_keys); $ri++)
			{
				if ($key == $reserved_keys[$ri])
				{
					$reserved_violation = 1;
				}
			}
			
			// prepare content
			if ($reserved_violation != 1)
			{
				if ($use_template && stristr($template_str, "{{$key}}"))
				{
					if ($val) // swap in non-empty field values
					{
					$template_str = str_replace("{{" . $key . "}}", "$val", $template_str);
					}
				} else {
					$content .= "$key: $val\n";
				}
			}
		}
	}

	if ($use_template)
	{
		// strip out any remaining template placeholders (unchecked checkboxes don't return a variable)
		$template_str = preg_replace("/.*\{\{.+\}\}[\r\n]?/", "", $template_str);

		if ($content)
		{ // some fields were missing from the template
			error_log ("[FormMail.php] Fields missing from template: (".getenv("HTTP_REFERER").")\n\n$content", 1, "error_log@kershaw.org");
			$content = $template_str . "\n\n" . $content;
		} else {
			$content = $template_str; 
		}
	}
			
	// strip out any doubled newlines
	$content = preg_replace("/( *[\n]){2,}/", "\n\n", $content);

	// form returns 'checkbox' if ticked - change to something readable
	$content = str_replace("checkbox", "Yes", $content);

	return $content;
}

// mail the content we figure out in the following steps
function mail_it($content, $subject, $name, $email, $recipient)
{
	// don't set 'from' if from aol, hotmail or yahoo
	$from = (preg_match ("/aol|hotmail|yahoo/i", $email) ? 'mailserver@robinsoncarter.com' : $email);
	if ($name) {
		$subject .= " ($name)";
	}
	mail($recipient, $subject, $content, "From: $name <$from>\r\nReply-To: $name <$email>\r\nX-Mailer: DT_formmail");
}

// take in the body building arguments and build the body tag for page display
function build_body($title, $bgcolor, $text_color, $link_color, $vlink_color, $alink_color) {
   if ($title)
      echo "<title>$title</title>";
   if (!$bgcolor)
      $bgcolor = "#FFFFFF";
   if (!$text_color)
      $text_color = "#000000";
   if (!$link_color)
      $link_color = "#0000FF";
   if (!$vlink_color)
      $vlink_color = "#FF0000";
   if (!$alink_color)
      $alink_color = "#000088";
   if ($background)
      $background = "background=\"$background\"";
   echo "<body bgcolor=\"$bgcolor\" text=\"$text_color\" link=\"$link_color\" vlink=\"$vlink_color\" alink=\"$alink_color\" $background>\n\n";
}

// our mighty error function..
function print_error($reason,$type = 0) {
	$reason = str_replace("_", " ", $reason);

	build_body($title, $bgcolor, $text_color, $link_color, $vlink_color, $alink_color);
	// for missing required data
	if ($type == "missing") {
		?>
		<p>The form was not submitted for the following reason(s):</p>
		<p><?= $reason."\n" ?></p>
	 	<p>Please use your browser's back button to return to the form and try again.<?
	} else { // every other error
		?>
		The form was not submitted because of the following reason(s):<p>
		<p><?= $reason."\n" ?></p>
		<?
	}
	echo "<br><br>\n";
	exit;
}
?>
