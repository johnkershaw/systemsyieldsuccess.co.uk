<?php
$title='Schedule of Open Courses with availability';

$sidebar = 'icons';
include ('inc_header.php');
?>
<div align="left">
				
	<h1><?= $title ?>: </h1>
	
	
<?php
$dates_str = "";
$row = 1;
if (($handle = fopen("files/dates.csv", "r")) !== FALSE) {
	
$data = fgetcsv($handle, 1000, ";"); // get first line for h2
$dates_str .= "
	<h2>" . $data[0] . "</h2>
	<table border='1' cellspacing='0' cellpadding='4'>\n
	<tr><th>DATES</th><th>VENUES *</th><th>1st Place **</th><th>COURSE</th><th>DAYS</th></tr>\n
	";
    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
        $num = count($data);
        $dates_str .=  "<!-- $num fields in line $row: -->\n";
        $row++;
        $dates_str .=  "<tr" 
        . (($row % 2 == 0) ? " bgcolor='#DDDDDD'" : "") 
        . ">";

        // for ($c=0; $c < $num; $c++) {
        		$date   = trim($data[0]);
        		$venue  = trim($data[1]);
        		$cost   = "&pound;" . trim($data[2]);
        		$course = trim($data[3]);
						
            $dates_str .=  "<td align='right'>"   . $date . "</td>\n";
            $dates_str .=  "<td align='left'>" 	  . $venue . "</td>\n";
            $dates_str .=  "<td align='center'>" 	. $cost . "</td>\n";
            $dates_str .=  "<td align='left'>" 	  . $course . "</td>\n";
            $dates_str .=  "<td align='center'>" 	. $data[4] . "</td>\n";
        // }
        $dates_str .=  "</tr>";
    }
    $dates_str .=  "</table>";
    fclose($handle);
    echo $dates_str;
}
?>
	
	<p>* Locations are determined by your requirements. <br />
	** Contact us now to; discuss the course, multiple delegate discounts, or make a booking. <br />
	Note: <i>All courses are also run on an in-house basis to meet your exact timing needs</i></p> 
	
</div>
					
<?php include ('inc_footer.php'); ?>