<?php
$title='Contact Us';

$sidebar = '';
include ('inc_header.php');
?>
<div align="left">

<h1><?= $title ?></h1>

<div align="left"> 

<div style="width:50%; float:right">
	<p><b>Telephone:</b> 0044 + (0)7947 676705</p>

	<p><b>Address of the company's registered office:</b> 22 Alderman Way, Weston-under-Wetherley, Warwickshire. CV33 9GB </p>

	<ul>
		<li><b>General Information:</b> 
			<a href="mailto:info@systemsys.co.uk">info@systemsys.co.uk</a></li>
		<li><b>Sales:</b> 
			<a href="mailto:sales@systemsys.co.uk">sales@systemsys.co.uk</a></li>
		<li><b>Customer Support:</b> 
			<a href="mailto:support@systemsys.co.uk">support@systemsys.co.uk</a></li>
		<li><b>Webmaster:</b> 
			<a href="mailto:webmaster@systemsys.co.uk">webmaster@systemsys.co.uk</a></li>
	</ul>
	<div align="center"><img src="images/alan.jpg" alt="Photo of Alan in a tux"></div>
</div>

<?php if ($_REQUEST['status'] == 'sent') {

echo '<p>Thank you for completing the form.</p>
<p>We will be in touch shortly.</p>';

} else { ?>

	<form id="contact" name="contact" method="post" action="/mela.php">
		<input type="hidden" name="subject" value="Email from systemsyieldsuccess.co.uk" />
		<input type="hidden" name="recipient" value="systemsyieldsuccess-info,systemsyieldsuccess-web" />
		<!-- input type="hidden" name="required" value="name,email,telephone,address" -->
		<input type="hidden" name="template_url" value="http://www.systemsyieldsuccess.co.uk/contact_template.txt" />
		<input type="hidden" name="redirect" value="http://www.systemsyieldsuccess.co.uk/contact_us.php?status=sent" />
		<p>
		<label for="title">Title: <br />
		<SELECT name="title" >
			<option  value="MR">Mr</option>
			<option  value="MRS">Mrs</option>
			<option  value="MISS">Miss</option>
			<option  value="MS">Ms</option>
			<option  value="DAME">Dame</option>
			<option  value="DR">Doctor</option>
			<option  value="LADY">Lady</option>
			<option  value="LORD">Lord</option>
			<option  value="PROF">Professor</option>
			<option  value="REV">Reverend</option>
			<option  value="SIR">Sir</option>
			<option  value="SISTER">Sister</option>
		</SELECT><br />
		</label>
		</p>

		<p><label for="firstname">First name: <br />
		<input type="text" name="firstname" size="20" /></label></p>
		
		<p><label for="lastname">Last name: <br />
		<input type="text" name="lastname" size="20" /></label></p>

		<p><label>Company: <br />
		<input type="text" name="company" size="30" /><br />
		</label></p>

		<p><label>Job Title: <br />
		<input type="text" name="jobtitle" size="30" /><br />
		</label></p>

		<p><label>Tel: <br />
		<input type="text" name="tel" size="20" /><br />
		</label></p>

		<p><label>Mobile: <br />
		<input type="text" name="mobile" size="20" /><br />
		</label></p>

		<p><label>Email: <br />
		<input type="text" name="email" size="30" /><br />
		</label></p>
		<p>
			<label>Address (inc postcode):<br />
			<textarea name="address" cols="30" rows="4"></textarea>
			</label>
		</p>

		<p>
			<label>Request:<br />
			<textarea name="request" cols="40" rows="8"></textarea>
			</label>
		</p>
		<p>
			<input type="submit" name="Submit" value="Send" />
		</p>
	</form>
	
<p>Discounts available if you reference this code from the website, 'SYSw1692a'. Contact us for the latest competition details. </p>
	
<p>Ask to be sent the latest Systemsys Ltd Update News letter, with all the current news.</p>

<p>Registered in England and Wales. Company's registered number; 7379908.</p>

<?php } ?>
	
</div>

<?php include ('inc_footer.php'); ?>