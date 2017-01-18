<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>

<title>Systemsys Ltd : 
<?= $title ?>
</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="styles_new.css">

<style type="text/css">td img {display: block;}</style>
<!--Fireworks 8 Dreamweaver 8 target.  Created Wed Jun 21 16:11:11 GMT+0100 ( ) 2006-->
<script language="JavaScript1.2" type="text/javascript">
<!--
function MM_findObj(n, d) { //v4.01
	var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
		d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
		if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
		for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
		if(!x && d.getElementById) x=d.getElementById(n); return x;
}
/* Functions that swaps images. */
function MM_swapImage() { //v3.0
	var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
	if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
function MM_swapImgRestore() { //v3.0
	var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

/* Functions that handle preload. */
function MM_preloadImages() { //v3.0
	var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
	var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
	if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

//-->
</script>

</head>

<body bgcolor="#FFFFFF" onload="MM_preloadImages('images/nav_logo_f2.gif','images/nav_home_f2.gif','images/nav_contact_f2.gif','images/nav_consultancy_f2.gif','images/nav_6steps_f2.gif','images/nav_training_f2.gif','images/nav_feedback_f2.gif','images/nav_example_f2.gif','images/nav_links_f2.gif');<?= $onload; ?>">

<table class="main-table" border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td width="88" valign="top" class="sidebar"><img src="images/sidebar_repeat.jpg" alt="" width="88" height="180" /><br /><img src="images/sidebar.jpg" alt="Business Improvement and Standards" width="88" height="588" /><img src="/images/decision_200.gif" alt="'Systemsys Ltd' decision making graphic" width="200" height="160" id="logo">
		<p>&nbsp;</p></td>
		<td valign="top" bgcolor="#FFD619"><table width="95%" border="0" cellspacing="0" cellpadding="0" style="margin:10px 10px 10px 10px;">
			<tr>
				<td align="center" valign="top" style="padding:5px; width:100px;"><p>&nbsp;</p>
					<p><img src="images/dotclear.gif" width="110" height="140" alt=""></p>
					<p>&nbsp;</p>

<?php
// $sidebar = icons|diagrams|blank
switch ($sidebar ) {
	case 'icons': ?>
	<p><img src="images/icon_topmanagement.gif" alt="Icon depicting five people at a board meeting, with the caption 'Top Management" width="133" height="87"></p>
	<p>&nbsp;</p>
	<p><img src="images/icon_auditor.gif" alt="Icon depicting two people shaking hands in agreement" width="94" height="99"></p>
	<p>&nbsp;</p>
	<p><img src="images/icon_leadassessor.gif" alt="Icon depicting two people shaking hands in agreement, with a globe behind them" width="110" height="121"></p>
	<p>&nbsp;</p>
	<p><img src="images/icon_coretools.gif" alt="Icon depicting a figure fixing a conveyor belt" width="105" height="89"></p>
	<p>&nbsp;</p>
	<p><img src="images/icon_certificate.png" alt="SYS Certificate headed 'Your Name'" width="117" height="146"></p>
	<p>&nbsp;</p>
	<p><img src="images/icon_customersatisfaction.gif" alt="Icon depicting a figure pointing to a bar/line graph showing an upward trend" width="101" height="103"></p>

	<?php break; 

	case 'diagrams': ?>
	<p><img src="images/diagram_oval.gif" alt="System map diagram" width="110" height="70"></p>
	<p><img src="images/arrow_down.gif" alt="" width="15" height="24"></p>
	<p><img src="images/diagram_flow.gif" alt="Process map diagram" width="133" height="85"></p>
	<p><img src="images/arrow_down.gif" alt="" width="15" height="24"></p>
	<p><img src="images/diagram_form.gif" alt="A sample audit form" width="120" height="164"></p>
	<p>&nbsp;</p>
		
					<?php break;

	default: 
	break;
}
?>

					</td>
				<td valign="top" style="border:1px solid #FF0000; background:white; padding:5px;">
				
				<?php include('inc_nav.php'); ?>
