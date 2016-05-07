<?php
$title='Guide to Meeting &amp; benefitting from ISO 9001 &amp; ISO/TS16949';

$sidebar = '';
include ('inc_header.php');

if ($_REQUEST['page'] == '') {
	$page = '';
} else {
	$page = $_REQUEST['page'];
}

$pages_array = array(
	'system_map' => array(
	link => 'What do you do, and how?', 
	desc => 'System Map', 
	stage => 'Steps 1 &amp; 2: ', 
	example => 'example.php'
	),
	'process_map' => array(
	link => 'Streamline your processes', 
	desc => 'Process Map', 
	stage => 'Steps 3 &amp; 4: ', 
	example => 'example.php?page=8&file=gif_9.htm'
	),
	'visual_monitor' => array(
	link => 'Prove you\'re improving', 
	desc => 'Visual Monitor', 
	stage => 'Steps 5 &amp; 6: ', 
	example => 'files/Manufacturing%20CS%203%20QOSs.pdf'
	),
);

function section_nav($page, $pages_array) {
	
	$file = $_SERVER['PHP_SELF'];
	echo '<h1>Guide to improving your business using BUSINESS MANAGEMENT SYSTEMS</h1>';

	echo '<a href="/files/sys_guide.pdf"><img src="images/guide_contents_469x500.png"></a>';
	
	/*
	echo '<ul>';
	
	foreach ($pages_array as $key => $value) {
		echo '<li> ' . $value['stage'];
		if ($page == $key) {
			echo '<b>' . $value['link'] . ' (' . $value['desc'] . ') <a href="' . $value['example'] . '" target="_example">example</a> </b>';
		} else {
			echo '<a href="' . $file . '?page=' . $key . '">' . $value['link'] 
			. '</a> (' . $value['desc'] . ') <a href="' . $value['example'] . '" target="example">example</a> </li>';
		}			
	}	
	echo '</ul>';
	*/
	echo '<p><a href="glossary.php">Glossary of terms</a></p>';
}

$pages_keys = array_keys($pages_array);

?>
<div align="left">

<?php section_nav($page, $pages_array); ?>

<?php if ($page == '') { ?>	

<a name="intro"></a> 

<div class="section">

<h2 class="section">Quality Management Standards</h2>

<div class="key-step">

<p class="key-requirement">Has your company been forced to obtain approval to Quality management standards such as ISO9001 and ISO/TS 16949?  Have you achieved the certificate without any benefit?</p>

<p class="key-meaning">To be competitive in the global market place, British industry needs to get added value from everything that it does. Implemented effectively, these standards will increase profitability and provide greater customer satisfaction.  The start point should always be your business processes. These pages take you through how to go about implementing systems to obtain these real benefits.</p>

</div>
</div>

<?php } ?>

<?php if ($page == 'system_map') { ?>	

<a name="system_map"></a> 

<div class="section">

<h2 class="section">Steps 1 &amp; 2: What do you do, and how? (System Map)</h2>
<a name="step1"></a>

<div class="key-step">
<p class="key-requirement"> a. Identify the processes needed for your management system throughout company.</p>

<p class="key-meaning">What do you do in your business? What are the key activities, that if you get them wrong, will impact on your effectiveness?</p>

<p class="key-action">1. LIST YOUR KEY PROCESSES</p>

</div>

<br>
<a name="step2"></a>

<div class="key-step">
<p class="key-requirement"> b. Determine the sequence &amp; interaction of your processes.</p>

<p class="key-meaning">How do these key processes interact with each other? Which other processes do they support?</p>

<p class="key-action">2. THEN PRODUCE YOUR level 1 'SYSTEM MAP'.</p>

</div>

<br>
<table>
<tr>
<td valign="middle"> <img src="images/arrow_orange.gif" alt="[large green arrow pointing from left to right]" width="136" height="71">
</td>
<td valign="middle">

<h2>Outcome of steps 1 &amp; 2: System Map</h2>
</td>
</tr>
</table>
<p><img src="images/system_map2.gif" alt="[Diagram depicting various forms of management within an organisation]" width="670" height="413"></p>

</div>

<p>&nbsp;</p>

<?php } ?>

<?php if ($page == 'process_map') { ?>	

<a name="process_map"></a>

<div class="section">

<h2 class="section">Steps 3 &amp; 4: Streamline your processes (Process Map)</h2>
<a name="step3"></a>

<div class="key-step">
<p class="key-requirement"> c. Determine how you will ensure that these processes are effective.</p>

<p class="key-meaning">How are you going to define what you do?</p>

<p class="key-action">3. ANALYSE THE RISKS IN WHAT YOU DO. PRODUCE YOUR KEY level 2 'PROCESS MAPS'. PROCESS MAP</p>

</div>

<br>
<a name="step4"></a>

<div class="key-step">
<p class="key-requirement"> d. Ensure availability of resources &amp; information to support your processes.</p>

<p class="key-meaning">What do you need to operate effectively?</p>

<p class="key-action">4. PUT IN PLACE RESOURCE &amp; INFORMATION SYSTEMS FOR EACH OF YOUR PROCESSES.</p>

</div>

<br>
<table>
<tr>
<td valign="middle"> <img src="images/arrow_yellow.gif" alt="[large green arrow pointing from left to right]" width="136" height="71">
</td>
<td valign="middle">

<h2>Outcome of steps 3 &amp; 4: Process Map</h2>
</td>
</tr>
</table>
<p><img src="images/process_map2b.gif" alt="[Diagram depicting the various processes found within an organisation]" width="735" height="588"></p>

</div>

<p>&nbsp;</p>

<?php } ?>

<?php if ($page == 'visual_monitor') { ?>	

<a name="visual_monitor"></a>

<div class="section">

<h2 class="section">Steps 5 &amp; 6: Prove you're improving (Visual Monitor)</h2>
		<a name="step5"></a> 

		<div class="key-step"> 
			<p class="key-requirement"> e. Monitor, measure and analyse your processes.</p>

			<p class="key-meaning">Implement a monitoring system, with measures to show how you are performing</p>

			<p class="key-action">5. USE A VISUAL FORMAT TO DISPLAY RESULTS, WITH KEY PERFORMANCE INDICATORS (KPIs) &amp; TARGETS VISUAL MONITOR</p>

		</div>

		<br>
		<a name="step6"></a>

		<div class="key-step"> 
			<p class="key-requirement"> f. Implement actions necessary to achieve planned results.</p>

			<p class="key-meaning">Where are you not achieving the targets set?</p>

			<p class="key-action">6. TAKE ACTIONS &amp; UPDATE VISUAL MONITOR</p>

		</div>

		<table>
			<tr> 
				<td valign="middle"> <img src="images/arrow_green.gif" alt="[large green arrow pointing from left to right]" width="136" height="71"> 
				</td>
				<td valign="middle"> 

					<h2>Outcome of steps 5 &amp; 6: Visual Monitor</h2>
				</td>
			</tr>
		</table>
		
		<p><img src="images/visual_monitor.gif" alt="[Graph depicting achievement of target over a period of months]" width="478" height="246"></p>

	</div>

	<?php } ?>

<?php if ($page != '') {
	section_nav($page, $pages_array);
} ?>
	
</div>

<?php include ('inc_footer.php'); ?>