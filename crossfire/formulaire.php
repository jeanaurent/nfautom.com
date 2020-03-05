<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" type="text/css" href="formulaire.css">
	  <link rel="stylesheet" media="screen and (max-width: 721px)" href="formulaires3.css" /> <!-- Pour ceux qui ont une résolution inférieure à 640px -->
	<link rel="stylesheet" media="screen and (min-width: 1900px)" href="formulaireHD.css" /> <!-- reso HD -->
	<script type="text/javascript">
//document.onselectstart=new Function("return false")
//document.oncontextmenu=new Function("return false")
//document.ondragstart =new Function("return false")
	</script>
<title> Form </title>
 </head>
 
 
 <?php // file: img.php
//$img=$_GET['str_pic_svg'];// on recupere la string de l'image
	
$upload_dir = 'graph_users/';//somehow_get_upload_dir();  //implement this function yourself
$img = $_POST['message'];
$img = str_replace('data:image/png;base64,', '', $img);
$img = str_replace(' ', '+', $img);
$data = base64_decode($img);
$nom_file = "image_name_" . time() .".png";
$file = $upload_dir.$nom_file;
$success = file_put_contents($file, $data);
//header('Location: '.$_POST['return_url']);

$Access = $_POST['Access'];
$Remote_Unit_Low_Power = $_POST['Remote_Unit_Low_Power'];
$Remote_Unit_High_Power = $_POST['Remote_Unit_High_Power'];
$Expansion_Unit = $_POST['Expansion_Unit'];
$AU700 = $_POST['AU700'];
$AU800 = $_POST['AU800'];
$AU850 = $_POST['AU850'];
$AU900 = $_POST['AU900'];
$AU1700 = $_POST['AU1700'];
$AU1800 = $_POST['AU1800'];
$AU1900 = $_POST['AU1900'];
$AU2100 = $_POST['AU2100'];
$AU2300 = $_POST['AU2300'];
$AU2600 = $_POST['AU2600'];
$RU700 = $_POST['RU700'];
$RU800 = $_POST['RU800'];
$RU850 = $_POST['RU850'];
$RU900 = $_POST['RU900'];
$RU1700 = $_POST['RU1700'];
$RU1800 = $_POST['RU1800'];
$RU1900 = $_POST['RU1900'];
$RU2100 = $_POST['RU2100'];
$RU2300 = $_POST['RU2300'];
$RU2600 = $_POST['RU2600'];

?>
 <body>

	<div class="title_logo">	
		<img src= "pic/images/logo.png" alt="logo" width="8%">
			<h1>My Contact Details</h1> 
			
			<div class="but_haut">   	 
				<input type="button" onclick="window.close()" class="button2" value="Go Back"/>
			</div>

	</div>
	<h2>Complete below form to receive your CrossFire design</h2>

 <!--new form by peter-->
	<form name="crossform" id="cross_form" method="post" action="record.php">
<div id="wrapping" class="clearfix">
	<div class="position_form">
    <section id="aligned" >
        <input type="text" name="name" id="name" placeholder="Your name" autocomplete="off" tabindex="1" class="txtinput1" required>
		<input type="text" name="company" id="company" placeholder="Your company" autocomplete="off" tabindex="2" class="txtinput2" required>
        <input type="email" name="email" id="email" placeholder="Your e-mail address" autocomplete="off" tabindex="3" class="txtinput3" required>
        <input type="tel" name="telephone" id="telephone" placeholder="Your mobile number(optional)" autocomplete="off" tabindex="4" class="txtinput4">
		<input type="text" name="system_name" id="system_name" placeholder="Your system name(optional)" autocomplete="off" tabindex="5" class="txtinput5">
		<input type="hidden" name="nom_file" id="nom_file"  tabindex="6" value="<? echo $nom_file; ?>" >
    </section>
	<section id="buttons">
		<input type="reset" name="reset" id="resetbtn" class="resetbtn" value="Reset">
		<input type="submit" name="submit" id="submitbtn" class="submitbtn" tabindex="7" value="Submit">
    <br style="clear:both;">
</section>
</div>
</div>
		<input name="Access" id="Access" type="hidden"  value="<?php echo $Access ?>" class="form-control" />
		<input name="Remote_Unit_Low_Power" id="Remote_Unit_Low_Power" type="hidden"  value="<?php echo $Remote_Unit_Low_Power ?>" class="form-control" />
		<input name="Remote_Unit_High_Power" id="Remote_Unit_High_Power" type="hidden"  value="<?php echo $Remote_Unit_High_Power ?>" class="form-control" />
		<input name="Expansion_Unit" id="Expansion_Unit" type="hidden"  value="<?php echo $Expansion_Unit ?>" class="form-control" />
		<input name="AU700" id="AU700" type="hidden"  value="<?php echo $AU700 ?>" class="form-control" />
		<input name="AU800" id="AU800" type="hidden"  value="<?php echo $AU800 ?>" class="form-control" />
		<input name="AU850" id="AU850" type="hidden"  value="<?php echo $AU850 ?>" class="form-control" />
		<input name="AU900" id="AU900" type="hidden"  value="<?php echo $AU900 ?>" class="form-control" />
		<input name="AU1700" id="AU1700" type="hidden"  value="<?php echo $AU1700 ?>" class="form-control" />
		<input name="AU1800" id="AU1800" type="hidden"  value="<?php echo $AU1800 ?>" class="form-control" />
		<input name="AU1900" id="AU1900" type="hidden"  value="<?php echo $AU1900 ?>" class="form-control" />
		<input name="AU2100" id="AU2100" type="hidden"  value="<?php echo $AU2100 ?>" class="form-control" />
		<input name="AU2300" id="AU2300" type="hidden"  value="<?php echo $AU2300 ?>" class="form-control" />
		<input name="AU2600" id="AU2600" type="hidden"  value="<?php echo $AU2600 ?>" class="form-control" />
		<input name="RU700" id="RU700" type="hidden"  value="<?php echo $RU700 ?>" class="form-control" />
		<input name="RU800" id="RU800" type="hidden"  value="<?php echo $RU800 ?>" class="form-control" />
		<input name="RU850" id="RU850" type="hidden"  value="<?php echo $RU850 ?>" class="form-control" />
		<input name="RU900" id="RU900" type="hidden"  value="<?php echo $RU900 ?>" class="form-control" />
		<input name="RU1700" id="RU1700" type="hidden"  value="<?php echo $RU1700 ?>" class="form-control" />
		<input name="RU1800" id="RU1800" type="hidden"  value="<?php echo $RU1800 ?>" class="form-control" />
		<input name="RU1900" id="RU1900" type="hidden"  value="<?php echo $RU1900 ?>" class="form-control" />
		<input name="RU2100" id="RU2100" type="hidden"  value="<?php echo $RU2100 ?>" class="form-control" />
		<input name="RU2300" id="RU2300" type="hidden"  value="<?php echo $RU2300 ?>" class="form-control" />
		<input name="RU2600" id="RU2600" type="hidden"  value="<?php echo $RU2600 ?>" class="form-control" />


  <div class="image_lego">
		<img src="pic/images/lego.PNG" width="100%">
  <!-- .Receive newsletter
		<div class="checkbox_position">
			<input type="checkbox" value="None" id="newsletter" name="check" checked />
			<label class="newsletter" for="newsletter">I would like to receive Crossfire Newsletters</label>
			<br>
			<input type="checkbox" value="None" id="brochure" name="brochure" checked />
			<label class="brochure" for="brochure">I would like to receive Crossfire brochures</label>
		</div>
		-->
  </div>

</form>
</body>

</html>