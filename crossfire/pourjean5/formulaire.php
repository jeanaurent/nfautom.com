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
		<input name="Access_Unit" id="Access_Unit" type="hidden"  value="<? $_post['Access_Unit']; ?>" class="form-control" />
		<input name="Remote_Unit_Low_Power" id="Remote_Unit_Low_Power" type="hidden"  value="<? $_post['Remote_Unit_Low_Power']; ?>" class="form-control" />
		<input name="Remote_Unit_High_Power" id="Remote_Unit_High_Power" type="hidden"  value="<? $_post['Remote_Unit_High_Power']; ?>" class="form-control" />
		<input name="Expansion_Unit" id="Expansion_Unit" type="hidden"  value="<? $_post['Expansion_Unit']; ?>" class="form-control" />
		<input name="AU700" id="AU700" type="hidden"  value="<? $_post['AU700']; ?>" class="form-control" />
		<input name="AU800" id="AU800" type="hidden"  value="<? $_post['AU800']; ?>" class="form-control" />
		<input name="AU850" id="AU850" type="hidden"  value="<? $_post['AU850']; ?>" class="form-control" />
		<input name="AU900" id="AU900" type="hidden"  value="<? $_post['AU900']; ?>" class="form-control" />
		<input name="AU1700" id="AU1700" type="hidden"  value="<? $_post['AU1700']; ?>" class="form-control" />
		<input name="AU1800" id="AU1800" type="hidden"  value="<? $_post['AU1800']; ?>" class="form-control" />
		<input name="AU1900" id="AU1900" type="hidden"  value="<? $_post['AU1900']; ?>" class="form-control" />
		<input name="AU2100" id="AU2100" type="hidden"  value="<? $_post['AU2100']; ?>" class="form-control" />
		<input name="AU2300" id="AU2300" type="hidden"  value="<? $_post['AU2300']; ?>" class="form-control" />
		<input name="AU2600" id="AU2600" type="hidden"  value="<? $_post['AU2600']; ?>" class="form-control" />
		<input name="RU700" id="RU700" type="hidden"  value="<? $_post['RU700']; ?>" class="form-control" />
		<input name="RU800" id="RU800" type="hidden"  value="<? $_post['RU800']; ?>" class="form-control" />
		<input name="RU850" id="RU850" type="hidden"  value="<? $_post['RU850']; ?>" class="form-control" />
		<input name="RU900" id="RU900" type="hidden"  value="<? $_post['RU900']; ?>" class="form-control" />
		<input name="RU1700" id="RU1700" type="hidden"  value="<? $_post['RU1700']; ?>" class="form-control" />
		<input name="RU1800" id="RU1800" type="hidden"  value="<? $_post['RU1800']; ?>" class="form-control" />
		<input name="RU1900" id="RU1900" type="hidden"  value="<? $_post['RU1900']; ?>" class="form-control" />
		<input name="RU2100" id="RU2100" type="hidden"  value="<? $_post['RU2100']; ?>" class="form-control" />
		<input name="RU2300" id="RU2300" type="hidden"  value="<? $_post['RU2300']; ?>" class="form-control" />
		<input name="RU2600" id="RU2600" type="hidden"  value="<? $_post['RU2600']; ?>" class="form-control" />


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