<?php
$title='File Uploader';

$sidebar = 'icons';
include ('inc_header.php');
?>
<div align="left">
				
	<h1><?= $title ?>: </h1>
	
	<br />
	<h2>Select a file to upload</h2>

<?php  
/***********************************************  
* Snippet Name : File Uploader                *  
* Scripted By  : Hermawan Haryanto            *  
* Website      : http://hermawan.com *  
* Email        : hermawan@codewalkers.com        *  
* License      : GPL (General Public License) *  
***********************************************/   
$numoffile = 1;  
// Fix path of your file to be uploaded, don't forget to CHMOD 777 to this folder  
$file_dir  = "/home/systems/web/files/";  
if ($_POST) {  
	if ($_POST['code'] == "makeitso") {
		for ($i=0;$i<$numoffile;$i++) {  
			if (trim($_FILES['myfiles']['name'][$i])!="") {  
				$newfile = $file_dir.$_FILES['myfiles']['name'][$i];  
				move_uploaded_file($_FILES['myfiles']['tmp_name'][$i], $newfile);  
				$j++;  
			}  
		}  
	} else {
	
	}
}  
if (isset($j)&&$j>0) print "Your file has been uploaded.<br>";  
print "<form method='post' enctype='multipart/form-data'>";  
for($i=0;$i<$numoffile;$i++) {  
	print "<input type='file' name='myfiles[]' size='30'><br>";  
}  
print "Authorisation: <input type='text' name='code' value=''>";  
print "<input type='submit' name='action' value='Upload'>";  
print "</form>";  
?>  
<br />
<p>View raw <a href="files/dates.csv">dates.csv</a> file | View finished <a href="dates.php">dates.php</a> page.</p>

</div>
					
<?php include ('inc_footer.php'); ?>