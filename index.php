<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Add to Google Calender</title>
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="https://raw.github.com/iamceege/tooltipster/master/js/jquery.tooltipster.js"></script>

<style>
body {margin:0; padding:0;}
.main-webinar-container {width:298px; overflow:hidden; border-radius:8px; float:left; padding:8px; margin:8px;  background-color:#666;  	
background-image: -ms-linear-gradient(bottom, #444444 0%, #999999 100%);
background-image: -moz-linear-gradient(bottom, #444444 0%, #999999 100%);
background-image: -o-linear-gradient(bottom, #444444 0%, #999999 100%);
background-image: -webkit-gradient(linear, left bottom, left top, color-stop(0, #444444), color-stop(1, #999999));
background-image: -webkit-linear-gradient(bottom, #444444 0%, #999999 100%);
background-image: linear-gradient(to top, #444444 0%, #999999 100%);

box-shadow: 0px 5px 9px 1px rgba(54, 54, 54, 0.75);
-moz-box-shadow: 0px 5px 9px 1px rgba(54, 54, 54, 0.75);
-webkit-box-shadow: 0px 5px 9px 1px rgba(54, 54, 54, 0.75);}

.main-webinar-container:hover {background-color:#888;  	
background-image: -ms-linear-gradient(bottom, #666666 0%, #444444 100%);
background-image: -moz-linear-gradient(bottom, #666666 0%, #444444 100%);
background-image: -o-linear-gradient(bottom, #666666 0%, #444444 100%);
background-image: -webkit-gradient(linear, left bottom, left top, color-stop(0, #666666), color-stop(1, #444444));
background-image: -webkit-linear-gradient(bottom, #666666 0%, #444444 100%);
background-image: linear-gradient(to top, #666666 0%, #444444 100%);

box-shadow: 0px 0px 24px 4px rgba(30, 30, 30, 0.75);
-moz-box-shadow: 0px 0px 24px 4px rgba(30, 30, 30, 0.75);
-webkit-box-shadow: 0px 0px 24px 4px rgba(30, 30, 30, 0.75);}

.grey-bkg-border {background-color:#333; border-radius:6px; padding:1%; margin:0 0 10px 0; height:auto; box-shadow: inset 0px 0px 6px 1px rgba(119, 119, 119, 0.7);-moz-box-shadow: inset 0px 0px 6px 1px rgba(119, 119, 119, 0.7);
-webkit-box-shadow: inset 0px 0px 6px 1px rgba(119, 119, 119, 0.7);}

.img-container {background-color:#FFF; min-height:240px; width:292px; padding:0px; z-index:9; overflow:hidden;}

.no-img {background-color:#333;  height:auto; width:293px; padding:0px; z-index:9; overflow:hidden;}

.webinar-1 {background-image:url(images/imagePoints/webinar_1.jpg); background-size:70% 80%; background-position:center; z-index:99; background-repeat: no-repeat; background-origin:content-box;}
.webinar-2 {background-image:url(images/imagePoints/webinar_2.jpg); background-size:70% 80%; background-position:center; z-index:99; background-repeat: no-repeat; background-origin:content-box;}
.webinar-3 {background-image:url(images/imagePoints/webinar_3.png); background-size:70% 80%; background-position:center; z-index:99; background-repeat: no-repeat; background-origin:content-box;}

#webinarTitle {min-height:47px;font-family:Arial, Helvetica, sans-serif; font-size:18px; font-weight:bold; color:#000; padding:5px 2px 10px 10px; background-color:#CCC; line-height:1.3em;}

.webinar_date {padding:8px 0 8px 10px; border-top:thin solid #999; color:#EEE; border-bottom:thin solid #EEE; font-family:Arial, Helvetica, sans-serif; font-size:16px; background-color:#444;}

#presenter_box {max-height:82px; min-height:82px; height:auto;  overflow:hidden;  background-color:#999; padding:2px; border-top:thin solid #999; border-bottom:thin solid #444; box-shadow:0px 5px 4px 0px rgba(119, 119, 119, 0.7);
-moz-box-shadow: 0px 3px 4px 0px rgba(119, 119, 119, 0.7);
-webkit-box-shadow: 0px 3px 4px 0px rgba(119, 119, 119, 0.7);}

#presenter_img {float:left; border:thin solid #999; margin:.5%; width:75px; background-color:#666;}

.presenter_name {float:left; width:90%; color:#000; padding:.5% 0 .5% 2%; font-size:16px; font-family:Arial, Helvetica, sans-serif; line-height:1.2em;}

#presenter_name {float:left; color:#000; padding:.5% 0 .5% 2%; font-size:16px; font-family:Arial, Helvetica, sans-serif; line-height:1.2em;}


/**/.webinar_description {padding:8px 0 8px 10px; border-top:thin solid #999; border-bottom:thin solid #CCC; background-color:#EEE; display:none;}


#icon_container1 {height:50px; width:auto; background-color:transparent; padding:5px 5px 0 5px; border-top:thin solid #999; margin:5px 0 0 0;}

#icon_container2 {float:left; width:75px; vertical-align:middle; color:#CCC; padding:2% 2% 0 2%; cursor:pointer;}

#icon_container3 {float:right; width:75px; vertical-align:middle; color:#CCC; padding:2% 2% 0 2%; cursor:pointer;}

</style>
</head>

<body>
   <div align="left" style=" width:auto; clear:both; height:auto; margin:0 0px 0px 0px; float:left;  padding:10px 0px 0px 5px; background-color:#3d3d3d;">
 <script>
        $(document).ready(function() {
            $('.tooltip').tooltipster();
			interactive: 'true';
			timer: 3500;
			touchDevices:'true';
        });
    </script>
 <?php 
//This is the timezone function set up for the US. 
//
session_start();
if(!isset($_SESSION['timezone']))
{
    if(!isset($_REQUEST['offset']))
    {
    ?>
    <script>
    var d = new Date()
    var offset= -d.getTimezoneOffset()/60;
    location.href = "<?php echo $_SERVER['PHP_SELF']; ?>?offset="+offset;
    </script>
    <?php   
    }
    else
    {
        $zonelist = array('Kwajalein' => -12.00, 'Pacific/Midway' => -11.00, 'Pacific/Hawaii' => -10.00, 'America/Alaska Time' => -9.00, 'America/Pacific' => -8.00, 'America/Mountian' => -7.00, 'America/Centeral' => -6.00, 'America/Eastern' => -5.00, //'America/Tegucigalpa' => -6.00,  
'America/Caracas' => -4.30, 'America/Halifax' => -4.00, 'America/St_Johns' => -3.30, 'America/Argentina/Buenos_Aires' => -3.00, 'America/Sao_Paulo' => -3.00, 'Atlantic/South_Georgia' => -2.00, 'Atlantic/Azores' => -1.00, 'Europe/Dublin' => 0, 'Europe/Belgrade' => 1.00, 'Europe/Minsk' => 2.00, 'Asia/Kuwait' => 3.00, 'Asia/Tehran' => 3.30, 'Asia/Muscat' => 4.00, 'Asia/Yekaterinburg' => 5.00, 'Asia/Kolkata' => 5.30, 'Asia/Katmandu' => 5.45, 'Asia/Dhaka' => 6.00, 'Asia/Rangoon' => 6.30, 'Asia/Krasnoyarsk' => 7.00, 'Asia/Brunei' => 8.00, 'Asia/Seoul' => 9.00, 'Australia/Darwin' => 9.30, 'Australia/Canberra' => 10.00, 'Asia/Magadan' => 11.00, 'Pacific/Fiji' => 12.00, 'Pacific/Tongatapu' => 13.00);
        $index = array_keys($zonelist, $_REQUEST['offset']);
        $_SESSION['timezone'] = $index[0];
    }
}
date_default_timezone_set($_SESSION['timezone']);

$users_timezone = $_SESSION['timezone'] ;

//###echo $_SESSION['timezone'];

if ($users_timezone == ('Pacific/Hawaii'))
			{$webinarBegin = ('T130000Z');
			$webinarEnd = ('T143000Z');};

if ($users_timezone == ('America/Alaska'))
			{$webinarBegin = ('T130000Z');
			$webinarEnd = ('T143000Z');};
				
if ($users_timezone == ('America/Pacific'))
			{$webinarBegin = ('T160000Z');
			$webinarEnd = ('T163000Z');};
			
if ($users_timezone == ('America/Mountian'))
			{$webinarBegin = ('T170000Z');
			$webinarEnd = ('T183000Z');};
						
if ($users_timezone == ('America/Centeral'))
			{$webinarBegin = ('T180000Z');
			$webinarEnd = ('T193000Z');};
			
if ($users_timezone == ('America/Eastern'))
			{$webinarBegin = ('T200000Z');
			$webinarEnd = ('T213000Z');};		
	
//rest of your code goes here



$xml = simplexml_load_file("2013_google_calender.xml");

//echo $xml->getName() . "<br>";

foreach($xml->children() as $webinar)
  {
  	  $imgclass		      = $webinar->{'imgclass'};
	  $imageurl 	      = $webinar->{'imageurl'};
	  $webinartitle		  = $webinar->{'webinartitle'};
	  $webinardate	      = $webinar->{'webinardate'};
	  $webinartime        = $webinar->{'webinartime'};
	  $webinardescription = $webinar->{'webinardescription'};
	  $pimage             = $webinar->{'pimage'};
	  $pname              = $webinar->{'pname'};
	  $ptitle             = $webinar->{'ptitle'};
	  $pbio               = $webinar->{'pbio'};
	  $googlecalender     = $webinar->{'googlecalender'};
 
 //<div style='height:auto; width:100%;'><div id='txt_black'>". $webinardate ."</div>
//<div id='txt_black' style='margin:0 0 10px 0;'>". $webinartime . "</div>
 $Addtocalender = " 

<div style='width:120px; float:left;'>
<a href='http://www.google.com/calendar/event?action=TEMPLATE&text=". $webinartitle . "&dates=" . $googlecalender ."" . $webinarBegin ."/" . $googlecalender ."". $webinarEnd ."&details=details' target='_blank'><img src='//www.google.com/calendar/images/ext/gc_button3.gif' border=0></a></div></div>";
  
?>

 <style>
.<?php echo $imgclass ;?> {background-image:url(http://nano4me.org/webinar/webinar_images/<?php echo $imageurl ;?>); background-size:100% 100%; background-position:center; z-index:99; background-repeat: no-repeat; background-origin:content-box;}

</style>
<!--Main Webinar container-->
<div class="main-webinar-container">

<div class="grey-bkg-border">
<!--white image container-->
<?php if ($imageurl == '') { ?>
<div class="no-img"></div>
<?php } else {?><div class="img-container <?php echo $imgclass ;?>"></div><?php };?>

<div id="webinarTitle"><?php echo $webinartitle ;?>

</div>

<div class="webinar_date"><?php echo $webinardate ;?></div>


<div id="presenter_box">

<?php if ($pimage == '') {echo '<div></div>';} else{?>
<span id="presenter_img" >
<img src="<?php echo $pimage;?>" height="75" width="75"></span>
<?php } ;?>

<div class="presenter_name" style="width:70%;">
<span style="font-size:90%;">Presenter:</span><br>
<?php if ($pname) {?>
<strong style="font-size:100%;"><?php echo $pname;?></strong><br>
<span style="width:auto; font-size:90%;"><?php echo $ptitle;?></span>
<?php } else { echo '<span style="font-size:15px;">Coming Soon</span>';} ;?>
</div>

</div>

<div id="icon_container1">

<!--
<?php if ($webinardescription == '') { echo '<span></span>';} else{?>
<div id="icon_container2">
<a style="font-size:13px;" class="fancybox2" rel="gallery2" data-fancybox-type="iframe"  href="#<?php echo $webinardescription;?>.html">
<button style="padding:2px; font-size:13px; font-weight:bold;">Description</button></a></div>
<?php };?>-->


<div id="icon_container2"  title="">
<?php echo $Addtocalender ;?>
</div>
<!--
<?php if ($pbio == '') {} else{?>
<div id="icon_container2">
<span  id="txtlink" style="font-size:16px;">
<a id="txtlink" style="font-size:150%;" class="fancybox" rel="gallery" data-fancybox-type="iframe"  href="#<?php echo $pbio;?>.html">Bio</a></span>
</div><?php };?>-->

<!--
<div id="icon_container3">
<a href="#" target="_self" style=""><button class="ui-widget-shadow" style="font-size:13px; padding:2px 6px; font-weight:bold;">Register</button></a></div>-->
</div>

</div>



<!--Link to profile http://www.linkedin.com/profile/view?id=-->
<?php
  }
?> </div><!-- end of outside container-->
</div>
</body>
</html>
