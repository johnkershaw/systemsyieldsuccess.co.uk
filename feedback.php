<?php
$title='Selection of Customers and feedback examples (click logo to read feedback)';

$sidebar = 'icons';
$onload = "MM_preloadImages('images/logos_birkbys_f2.gif','images/logos_electron_f2.gif','images/logos_e2v_f2.gif','images/logos_goonvean_f2.gif','images/logos_knorrbremse_f2.gif','images/logos_sys_f2.gif','images/logos_tgl_f2.gif','images/logos_tiautomotive_f2.gif','images/logos_webber_f2.gif','images/logos_ttelectronics_f2.gif');";

include ('inc_header.php');
?>
<style type="text/css">
<!--
.linkedimages a img {
	border: 1px solid #012F86;
	background: #FFFFFF;
	padding: 5px;
}
.linkedimages a:hover img {
	border: 1px solid #012F86;
	background: #FFFFFF;
	padding: 5px;
}-->
</style>

<div align="left">

<h1><?= $title ?></h1>

<?php switch ( $_REQUEST['company'] ) {
case 'birkbys' : 
?>

<table>
	<tr>
		<td valign="top">
			<p>
				<img name="logos_birkbys" src="images/logos_birkbys.gif" width="171" height="81" border="0" id="logos_birkbys" alt="Birkby's Plastics Limited" />
			</p>
		</td>
		<td>
			<blockquote>
				"...thank you for the outstanding service received from Systems Yield Success...these sessions have been invaluable to our company...we look forward to working with you in the future."
				<br />
				<br />
				<i>Bill Rouse, Birkby's Plastics Ltd</i>
				<br />
				<br />
				<a href="files/Feedback_Birkbys.pdf">Read full letter</a> (PDF)
			</blockquote>
		</td>
	</tr>
</table>

<?php
	break;
	
case 'e2v' : 
?>
<table>
	<tr>
		<td valign="top">
			<p>
				<img name="logos_ev2" src="images/logos_e2v.gif" width="131" height="42" border="0" id="logos_ev2" alt="e2v technologies">
			</p>
		</td>
		<td>
			<blockquote>
				"My views of 'SYS's' service are:
				<br />
				<br />
				<ul>
					<li>Good responsiveness and flexibility</li>
					<li>Excellent quality of information delivery (verbal &amp; written)</li>
					<li>Experienced-based and authoritative question response."</li>
				</ul>
				<br />
				<br />
				<i>Tim Discombe, e2v</i>

			</blockquote>
		</td>
	</tr>
</table>

<?php
	break;
	
case 'electron' : 
?>
<table>
	<tr>
		<td valign="top">
			<p>
				<img name="logos_electron" src="images/logos_electron.gif" width="232" height="61" border="0" id="logos_electron" alt="electron technical solution">
			</p>
		</td>
		<td>
			<blockquote><p>&lsquo;SYS was recommended to us by one of our major customers.</p>
				<p>Myself and two other delegates from Electron attended a course and found Alan&rsquo;s training to be of an exceptionally high standard.</p>
				<p>We chose SYS to help us become approved to the automotive standard ISO/TS16949 which was one of our main company objectives.</p>
				<p>SYS helped us to modify, upgrade and simplify our quality systems and 
				during our readiness review, <b>our third party assessor said that Electron was 
				the best prepared company he had visited for a stage 1 review</b> - we had Alan to thank for that.</p>
				<p>We find his wealth of automotive industry knowledge and experience invaluable.</p>
				<p>We were then approved to ISO/TS16949 and without hesitation we would use SYS again in future should the opportunity arise.&rsquo;</p>
				</p>

				<br />
				<br />
				<i>Keith Anders, Quality Manager Electron Technical Solutions Ltd</i>

			</blockquote>
		</td>
	</tr>
</table>

<?php
	break;
	
case 'goonvean' : 
?>
<table>
	<tr>
		<td valign="top">
			<p>
				<img name="logos_goonvean" src="images/logos_goonvean.gif"  width="146" height="102" border="0" id="logos_goonvean" alt="Goonvean" />
			</p>
		</td>
		<td>
			<blockquote>
				"Professional presentation, well planned. Good Interaction with trainees.
				<br />
				<br />
				Our Internal Auditing since the Training has been much more Effective."
				<br />
				<br />
				<i>Robert Houghton, Goonvean</i>

			</blockquote>
		</td>
	</tr>
</table>

<?php
	break;
	
case 'knorrbremse' : 
?>
<table>
	<tr>
		<td valign="top">
			<p>
				<img name="logos_knorrbremse" src="images/logos_knorrbremse.gif" width="194" height="54" border="0" id="logos_knorrbremse" alt="Knorr-Bremse - Systems for Commercial Vehicles" />
			</p>
		</td>
		<td>
			<blockquote>
				"The feedback I have received from all new auditors is good, they all found the training very informative and enjoyable.
				<br />
				<br />
				All have applied the techniques they were shown and continue to perform internal audits with excellent results."
				<br />
				<br />
				<i>Tony Willis, Knorr-Bremse - Systems for Commercial Vehicles Ltd</i>

			</blockquote>
		</td>
	</tr>
</table>

<?php
	break;
	
case 'tiautomotive' : 
?>
<table>
	<tr>
		<td valign="top">
			<p>
				<img name="logos_tiautomotive" src="images/logos_tiautomotive.gif" width="171" height="50" border="0" id="logos_tiautomotive" alt="TI Automotive" />
			</p>
		</td>
		<td>
			<blockquote>
			"Good Technical Knowledge and working practices.
				<br />
				<br />
				Ability to communicate and be understood.
				<br />
				<br />
				 Very satisfied with the service so far &amp;
				 hope to see you again for further courses."
				<br />
				<br />
				<i>Pauline Maclean, TI Automotive</i>

			</blockquote>
		</td>
	</tr>
</table>

<?php
	break;
	
case 'ttelectronics' : 
?>
<table>
	<tr>
		<td valign="top">
			<p>
				<img name="logos_ttelectronics" src="images/logos_ttelectronics.gif" width="197" height="70" border="0" id="logos_ttelectronics" alt="TT Electronics" />
			</p>
		</td>
		<td>
			<blockquote>
				"...without this training and your sustained support... we would not have been able to achieve our best ever result at our recent TS16949 continual assessment..."
				<br />
				<br />
				<i>Andrew Bell, Quality Manager, TT Eelctronics</i>
				<br />
				<br />
				<a href="files/Feedback_TT.pdf">Read full letter</a> (PDF)

			</blockquote>
		</td>
	</tr>
</table>

<?php
	break;
	
case 'webber' : 
?>
<table>
	<tr>
		<td valign="top">
			<p>
				<img name="logos_webber" src="images/logos_webber.gif" width="144" height="87" border="0" id="logos_webber" alt="Webber Solenoid Valves" />
			</p>
		</td>
		<td>
			<blockquote>
				"Clear, concise format.<br />
				Worked Examples.
				<br />
				<br />
				Tutor has hands on experience.<br />
				Course Content reflects Real World."
				<br />
				<br />
				<i>Martin Hemmings, IMI Webber</i>

			</blockquote>
		</td>
	</tr>
</table>

<?php
	break;
	
case 'sys' : 
?>
<table>
	<tr>
		<td valign="top">
			<p><img name="logos_sys" src="images/logos_sys.gif" width="130" height="107" border="0" id="logos_sys" alt="Systemsys Ltd"></p>
		</td>
		<td valign="top">
			<blockquote>
				A survey was undertaken of customers' perceptions of the service that they have received from
SYS.  Over 85% of respondents rated the support as the top score of 5
out of 5, 'Very Satisfied.'
				<br />
				<br />
				Any areas for improvement have been tackled such as the use of specific terms, leading to a detailed glossary now being provided for all delegates.
				<br />
				<br />

			<p align="center"><img src="images/customer_satisfaction_graph.gif" width="382" height="168" border="0" alt="[Graph showing 85% of customers gave 5 out of 5 for satisfaction, whilst the remaining 15% gave 4 out of 5]"></p>
			</blockquote>
		</td>
	</tr>
</table>

<?php
	break;
	
case 'tgl' : 
?>
<table>
	<tr>
		<td valign="top">
			<p><img name="logos_sys" src="images/logos_tgl.gif" width="186" height="74" border="0" id="logos_sys" alt="Tibbetts Group Limited"></p>
		</td>
		<td valign="top">
			<blockquote>
				"The Systems Yield Success process approach enabled us to link all the aspects of our business together."
				<br />
				<br />
				"The training given was concise and delivered in a way which was easily understood by all staff within our Company."
				<br />
				<br />
				<i>Gary Parkin,<br />
				Operations and Quality Manager<br />
				The Tibbetts Group Ltd</i>
				<br />
				<br />
				<a href="files/Feedback_TGL.pdf">Read full letter</a> (PDF)
			</blockquote>
		</td>
	</tr>
</table>

<?php
	break;
	
	default:
?>

<!--The following section is an HTML table which reassembles the sliced image in a browser.-->
<!--Copy the table section including the opening and closing table tags, and paste the data where-->
<!--you want the reassembled image to appear in the destination document. -->
<!--======================== BEGIN COPYING THE HTML HERE ==========================-->
<div align="center">
<table border="0" cellpadding="0" cellspacing="0" width="600">
<!-- fwtable fwsrc="logos.png" fwbase="logos.gif" fwstyle="Dreamweaver" fwdocid = "1326568535" fwnested="0" -->
  <tr>
   <td><img src="images/spacer.gif" width="146" height="1" border="0" alt="" /></td>
   <td><img src="images/spacer.gif" width="25" height="1" border="0" alt="" /></td>
   <td><img src="images/spacer.gif" width="26" height="1" border="0" alt="" /></td>
   <td><img src="images/spacer.gif" width="46" height="1" border="0" alt="" /></td>
   <td><img src="images/spacer.gif" width="136" height="1" border="0" alt="" /></td>
   <td><img src="images/spacer.gif" width="90" height="1" border="0" alt="" /></td>
   <td><img src="images/spacer.gif" width="96" height="1" border="0" alt="" /></td>
   <td><img src="images/spacer.gif" width="35" height="1" border="0" alt="" /></td>
   <td><img src="images/spacer.gif" width="1" height="1" border="0" alt="" /></td>
  </tr>

  <tr>
   <td rowspan="2" colspan="2"><a href="feedback.php?company=birkbys" onmouseout="MM_swapImgRestore();" onmouseover="MM_swapImage('logos_birkbys','','images/logos_birkbys_f2.gif',1);"><img name="logos_birkbys" src="images/logos_birkbys.gif" width="171" height="81" border="0" id="logos_birkbys" alt="Birkby's Plastics Limited" /></a></td>
   <td rowspan="4" colspan="3"><img name="logos_r1_c3" src="images/logos_r1_c3.gif" width="208" height="157" border="0" id="logos_r1_c3" alt="" /></td>
   <td colspan="3"><a href="feedback.php?company=electron" onmouseout="MM_swapImgRestore();" onmouseover="MM_swapImage('logos_electron','','images/logos_electron_f2.gif',1);"><img name="logos_electron" src="images/logos_electron.gif" width="221" height="61" border="0" id="logos_electron" alt="Electron Technical Solutions" /></a></td>
   <td><img src="images/spacer.gif" width="1" height="61" border="0" alt="" /></td>
  </tr>
  <tr>
   <td rowspan="2"><img name="logos_r2_c6" src="images/logos_r2_c6.gif" width="90" height="42" border="0" id="logos_r2_c6" alt="" /></td>
   <td rowspan="2" colspan="2"><a href="feedback.php?company=e2v" onmouseout="MM_swapImgRestore();" onmouseover="MM_swapImage('logos_e2v','','images/logos_e2v_f2.gif',1);"><img name="logos_e2v" src="images/logos_e2v.gif" width="131" height="42" border="0" id="logos_e2v" alt="" /></a></td>
   <td><img src="images/spacer.gif" width="1" height="20" border="0" alt="" /></td>
  </tr>
  <tr>
   <td rowspan="3"><a href="feedback.php?company=goonvean" onmouseout="MM_swapImgRestore();" onmouseover="MM_swapImage('logos_goonvean','','images/logos_goonvean_f2.gif',1);"><img name="logos_goonvean" src="images/logos_goonvean.gif" width="146" height="102" border="0" id="logos_goonvean" alt="Goonvean" /></a></td>
   <td rowspan="5"><img name="logos_r3_c2" src="images/logos_r3_c2.gif" width="25" height="222" border="0" id="logos_r3_c2" alt="" /></td>
   <td><img src="images/spacer.gif" width="1" height="22" border="0" alt="" /></td>
  </tr>
  <tr>
   <td colspan="2"><a href="feedback.php?company=knorrbremse" onmouseout="MM_swapImgRestore();" onmouseover="MM_swapImage('logos_knorrbremse','','images/logos_knorrbremse_f2.gif',1);"><img name="logos_knorrbremse" src="images/logos_knorrbremse.gif" width="186" height="54" border="0" id="logos_knorrbremse" alt="Knorr-Bremse - Systems for Commercial Vehicles" /></a></td>
   <td rowspan="7"><img name="logos_r4_c8" src="images/logos_r4_c8.gif" width="35" height="320" border="0" id="logos_r4_c8" alt="" /></td>
   <td><img src="images/spacer.gif" width="1" height="54" border="0" alt="" /></td>
  </tr>
  <tr>
   <td rowspan="5" colspan="2"><img name="logos_r5_c3" src="images/logos_r5_c3.gif" width="72" height="196" border="0" id="logos_r5_c3" alt="" /></td>
   <td rowspan="2"><a href="feedback.php?company=sys" onmouseout="MM_swapImgRestore();" onmouseover="MM_swapImage('logos_sys','','images/logos_sys_f2.gif',1);"><img name="logos_sys" src="images/logos_sys.gif" width="136" height="111" border="0" id="logos_sys" alt="Systems Yield Success" /></a></td>
   <td rowspan="2" colspan="2"><img name="logos_r5_c6" src="images/logos_r5_c6.gif" width="186" height="111" border="0" id="logos_r5_c6" alt="" /></td>
   <td><img src="images/spacer.gif" width="1" height="26" border="0" alt="" /></td>
  </tr>
  <tr>
   <td rowspan="2"><img name="logos_r6_c1" src="images/logos_r6_c1.gif" width="146" height="120" border="0" id="logos_r6_c1" alt="" /></td>
   <td><img src="images/spacer.gif" width="1" height="85" border="0" alt="" /></td>
  </tr>
  <tr>
   <td rowspan="4"><img name="logos_r7_c5" src="images/logos_r7_c5.gif" width="136" height="155" border="0" id="logos_r7_c5" alt="" /></td>
   <td rowspan="2" colspan="2"><a href="feedback.php?company=tgl" onmouseout="MM_swapImgRestore();" onmouseover="MM_swapImage('logos_tgl','','images/logos_tgl_f2.gif',1);"><img name="logos_tgl" src="images/logos_tgl.gif" width="186" height="74" border="0" id="logos_tgl" alt="Tibbetts Group Limited" /></a></td>
   <td><img src="images/spacer.gif" width="1" height="35" border="0" alt="" /></td>
  </tr>
  <tr>
   <td rowspan="2" colspan="2"><a href="feedback.php?company=tiautomotive" onmouseout="MM_swapImgRestore();" onmouseover="MM_swapImage('logos_tiautomotive','','images/logos_tiautomotive_f2.gif',1);"><img name="logos_tiautomotive" src="images/logos_tiautomotive.gif" width="171" height="50" border="0" id="logos_tiautomotive" alt="TI Automotive" /></a></td>
   <td><img src="images/spacer.gif" width="1" height="39" border="0" alt="" /></td>
  </tr>
  <tr>
   <td rowspan="2" colspan="2"><a href="feedback.php?company=webber" onmouseout="MM_swapImgRestore();" onmouseover="MM_swapImage('logos_webber','','images/logos_webber_f2.gif',1);"><img name="logos_webber" src="images/logos_webber.gif" width="186" height="81" border="0" id="logos_webber" alt="Webber Solenoid Valves" /></a></td>
   <td><img src="images/spacer.gif" width="1" height="11" border="0" alt="" /></td>
  </tr>
  <tr>
   <td colspan="3"><a href="feedback.php?company=ttelectronics" onmouseout="MM_swapImgRestore();" onmouseover="MM_swapImage('logos_ttelectronics','','images/logos_ttelectronics_f2.gif',1);"><img name="logos_ttelectronics" src="images/logos_ttelectronics.gif" width="197" height="70" border="0" id="logos_ttelectronics" alt="TT Electronics" /></a></td>
   
   <td><img name="logos_r10_c4" src="images/logos_r10_c4.gif" width="46" height="70" border="0" id="logos_r10_c4" alt="" /></td>
   <td><img src="images/spacer.gif" width="1" height="70" border="0" alt="" /></td>
  </tr>
<!--   This table was automatically created with Macromedia Fireworks   -->
<!--   http://www.macromedia.com   -->
</table>
</div>
<!--========================= STOP COPYING THE HTML HERE =========================-->

<?php } ?>

<p align="center"><small>
<a href="feedback.php?company=birkbys">Birkbys</a> - 
<a href="feedback.php?company=e2v">e2v</a> - 
<a href="feedback.php?company=electron">Electron</a> - 
<a href="feedback.php?company=goonvean">Goonvean</a> - 
<a href="feedback.php?company=knorrbremse">Knorr Bremse</a> - 
<a href="feedback.php?company=tiautomotive">TI Automotive</a> - 
<a href="feedback.php?company=ttelectronics">TT Electronics</a> - 
<a href="feedback.php?company=webber">Webber</a> - 
<a href="feedback.php?company=sys">Systemsys Ltd</a> - 
<a href="feedback.php?company=tgl">TGL</a>
</small></p>

<br /><br />

<p>For further information, please contact <a href="mailto:info@systemsyieldsuccess.co.uk">info@systemsyieldsuccess.co.uk</a></p>

<br />
</div>

<?php include ('inc_footer.php'); ?>
