<?php

session_name("fancyform");
session_start();


$_SESSION['n1'] = rand(1,20);
$_SESSION['n2'] = rand(1,20);
$_SESSION['expect'] = $_SESSION['n1']+$_SESSION['n2'];


$str='';
if($_SESSION['errStr'])
{
	$str='<div class="error">'.$_SESSION['errStr'].'</div>';
	unset($_SESSION['errStr']);
}

$success='';
if($_SESSION['sent'])
{
	$success='<h1>Thank you!</h1>';
	
	$css='<style type="text/css">#contact-form{display:none;}</style>';
	
	unset($_SESSION['sent']);
}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" 
	"http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>C3LOOPS</title>
	<link rel="shortcut icon" href="grafik/c3loops/icon.ico" />
	<link rel=StyleSheet href="stilmall.css" TYPE="text/css">
	<link rel="stylesheet" type="text/css" href="jqtransformplugin/jqtransform.css" />
<link rel="stylesheet" type="text/css" href="formValidator/validationEngine.jquery.css" />
<link rel="stylesheet" type="text/css" href="demo.css" />

<?=$css?>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript" src="jqtransformplugin/jquery.jqtransform.js"></script>
<script type="text/javascript" src="formValidator/jquery.validationEngine.js"></script>

<script type="text/javascript" src="script.js"></script>

<script type="text/javascript" src="js/jquery-1.3.1.min.js"></script>
<script type="text/javascript" src="js/jquery.scrollTo.js"></script>



<script>

$(document).ready(function() {

	$('a.panel').click(function () {

		$('a.panel').removeClass('selected');
		$(this).addClass('selected');
		
		current = $(this);
		
		$('#wrapper').scrollTo($(this).attr('href'), 800);		
		
		return false;
	});

	$(window).resize(function () {
		resizePanel();
	});
	
});

function resizePanel() {

	width = $(window).width();
	height = $(window).height();

	mask_width = width * $('.item').length;
		
	$('#debug').html(width  + ' ' + height + ' ' + mask_width);
		
	$('#wrapper, .item').css({width: width, height: height});
	$('#mask').css({width: mask_width, height: height});
	$('#wrapper').scrollTo($('a.selected').attr('href'), 0);
		
}

</script>
</head>
<body>


<div id="wrapper">
	<div id="mask">

		<div id="item1" class="item">
			<div id="indexbg"><img src="grafik/c3loops/index-bg.png"></div>
			<a name="item1"></a>
			
			<!-- webshop image map -->
			<div class="webshop">
			<img id="Image-Maps_9201210161051085" src="grafik/c3loops/webshop.png" usemap="#Image-Maps_9201210161051085" border="0" width="306" height="594" alt="" />
<map id="_Image-Maps_9201210161051085" name="Image-Maps_9201210161051085">
<area shape="poly" coords="3,593,12,592,28,592,45,590,59,590,83,585,100,579,113,573,133,566,152,556,170,547,190,530,202,518,221,507,233,492,244,476,257,459,265,444,275,427,282,406,290,386,296,364,299,348,305,322,305,308,302,282,304,268,302,255,301,234,297,224,292,207,286,185,278,172,271,158,260,138,248,117,236,104,221,89,209,74,193,62,181,55,159,42,139,30,117,18,102,14,78,8,62,3,42,0,22,0,8,2,0,0,0,34,16,36,37,35,61,39,79,45,102,51,120,58,141,71,161,83,181,99,198,112,209,132,225,151,238,164,252,197,259,222,264,248,266,275,268,297,267,324,262,352,254,374,252,396,236,426,227,443,212,457,195,474,180,488,163,509,147,517,119,531,103,540,74,548,58,553,40,555,23,556,0,557," href="http://www.image-maps.com/" alt="" title=""   />
 
</map>
			</div> 
			
			<!-- slut webshop image map -->
			
				<a href="#item6" class="panel">
				  <div class="hacks"> <span> <img src="grafik/c3loops/popup-hacks.png"> </span>
				    <img src="grafik/c3loops/hacks.png">
			      </div>
				</a> 
				
				
				<a href="#item4" class="panel">
				  <div class="about"> <span> <img src="grafik/c3loops/popup-about.png"> </span>
				    <img src="grafik/c3loops/about.png">
				  </div>
				</a> 
				
				
				<a href="#item2" class="panel">
				<div class="news"> <span> <img src="grafik/c3loops/popup-news.png"> </span>
				<img src="grafik/c3loops/news.png">
				</div>
				</a> 
				
				<a href="#item3" class="panel">
				<div class="contact"> <span> <img src="grafik/c3loops/popup-contact.png"> </span>
				<img src="grafik/c3loops/contact.png">
				</div>
				</a> 
				
				<a href="#item5" class="panel">
				<div class="media"> <span> <img src="grafik/c3loops/popup-media.png"> </span>
				<img src="grafik/c3loops/media.png">
				</div>
				</a> 
				
				<div class="logo"></div>
				<div class="hack-media"></div>
				<div class="innerstaringen"></div>
		</div>
		
		<div id="item2" class="item">
			<a name="item2"></a>
			<a href="#item1" class="panel"><img src="grafik/c3loops/back.png"></a>
			<div id="news-page"> <img src="grafik/c3loops/news-page.png"> </div>
		</div>
		
		<div id="item3" class="item">
			<a name="item3"></a>
			<a href="#item1" class="panel"><img src="grafik/c3loops/back.png"></a>
					
		</div>

		<div id="item4" class="item">
			<a name="item4"></a>
			 <a href="#item1" class="panel"><img src="grafik/c3loops/back.png"></a>
			<div id="about-page"> <img src="grafik/c3loops/about-page.png"> </div>
		</div>
		
		<div id="item5" class="item">
			<a name="item5"></a>
			 <a href="#item1" class="panel"><img src="grafik/c3loops/back.png"></a>
			 <div id="media-page"> <img src="grafik/c3loops/media-page.png"> </div>
			 
		</div>

		<div id="item6" class="item">
		<a name="item6"></a>
		<a href="#item1" class="panel"><img src="grafik/c3loops/back.png"></a>
		
		<table>
		<tr>
		<td>
		
		 <div id="main-container">

	<div id="form-container">
    <h1>Contact</h1>
    <h2>We will reply as soon as possible</h2>
    
    <form id="contact-form" name="contact-form" method="post" action="submit.php">
      <table width="100%" border="0" cellspacing="0" cellpadding="5">
        <tr>
          <td width="15%"><label for="name">Name</label></td>
          <td width="70%"><input type="text" class="validate[required,custom[onlyLetter]]" name="name" id="name" value="<?=$_SESSION['post']['name']?>" /></td>
          <td width="15%" id="errOffset">&nbsp;</td>
        </tr>
        <tr>
          <td><label for="email">Email</label></td>
          <td><input type="text" class="validate[required,custom[email]]" name="email" id="email" value="<?=$_SESSION['post']['email']?>" /></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td><label for="subject">Subject</label></td>
          <td><select name="subject" id="subject">
            <option value="" selected="selected"> - Choose -</option>
            <option value="Question">Question</option>
            <option value="Business proposal">Business proposal</option>
            <option value="Advertisement">Advertising</option>
            <option value="Complaint">Complaint</option>
          </select>          </td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td valign="top"><label for="message">Message</label></td>
          <td><textarea name="message" id="message" class="validate[required]" cols="35" rows="5"><?=$_SESSION['post']['message']?></textarea></td>
          <td valign="top">&nbsp;</td>
        </tr>
        <tr>
          <td><label for="captcha"><?=$_SESSION['n1']?> + <?=$_SESSION['n2']?> =</label></td>
          <td><input type="text" class="validate[required,custom[onlyNumber]]" name="captcha" id="captcha" /></td>
          <td valign="top">&nbsp;</td>
        </tr>
        <tr>
          <td valign="top">&nbsp;</td>
          <td colspan="2"><input type="submit" name="button" id="button" value="Submit" />
          <input type="reset" name="button2" id="button2" value="Reset" />
          
          <?=$str?>          <img id="loading" src="img/ajax-load.gif" width="16" height="16" alt="loading" /></td>
        </tr>
      </table>
      </form>
      <?=$success?>
    </div>
	</div>
	
	</td>
	</tr>
	</table>
</div>

</body>
</html>