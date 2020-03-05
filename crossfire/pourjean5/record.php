<?php
//generation du php
define("FPDF_FONTPATH","font/"); 
//lien vers le dossier " font " 
require("fpdf.php"); 
//lien vers le fichier contenant la classe FPDF

$pdf = new FPDF("P","pt","A4"); 
//création d'une instance de classe, P pour portrait, pt pour point en unité de mesure, A4 pour le format
$pdf ->Open(); //indique que l'on crée un fichier PDF
$pdf ->AddPage(); //permet d'ajouter une page
$pdf ->SetFont('Helvetica','B',14); //choix de la police
$pdf ->SetXY(240, 40); // indique des coordonnées pour placer un élément
$pdf->Image('pic/images/logo.png'); 
$pdf ->SetXY(250, 110);
$pdf ->Cell(250,90,"Units and Modules",0,0, "L"); 
//création d'une cellule
//AU chassis, LPRU chassis, HPRU chassis, AU module, LPRU module, HPRU module and EU
$pdf ->SetFont('Helvetica','B',11); //choix de la police
$pdf ->Text(80,195, " Mme/Mr.: ". $_POST['name'] . " Company: Zenic8"); //insertion d'une ligne de texte
$pdf ->Text(100,200+30, " - Units -"); //insertion d'une ligne de texte
$pdf ->Text(100,220+30, "   - Access Unit ( ):                X " . $_POST['Access_Unit']);
 //insertion d'une ligne de texte
$pdf ->Text(100,235+30, "   - Remote Unit Low Power ( ):      X " . $_POST['Remote_Unit_Low_Power']); //insertion d'une ligne de texte
$pdf ->Text(100,250+30, "   - Remote Unit High Power ( ) :    X " . $_POST['Remote_Unit_High_Power']); //insertion d'une ligne de texte
$pdf ->Text(100,265+30, "   - Expansion Unit ( ) :            X " . $_POST['Expansion_Unit']); //insertion d'une ligne de texte
$pdf ->Text(100,295+30, " - Modules (AU)-"); //insertion d'une ligne de texte
$pdf ->Text(100,315+30, "   - 700 MHz ( ) :                   X " . $_POST['AU700']); //insertion d'une ligne de texte
$pdf ->Text(100,330+30, "   - 800 MHz ( ) :                   X " . $_POST['AU800']); //insertion d'une ligne de texte
$pdf ->Text(100,345+30, "   - 850 MHz ( ) :                   X " . $_POST['AU850']); //insertion d'une ligne de texte
$pdf ->Text(100,360+30, "   - 900 MHz ( ) :                   X "  . $_POST['AU900']); //insertion d'une ligne de texte
$pdf ->Text(100,375+30, "   - 1700 MHz ( ) :                  X "  . $_POST['AU1700']); //insertion d'une ligne de texte
$pdf ->Text(100,390+30, "   - 1800 MHz ( ) :                  X " . $_POST['AU1800']); //insertion d'une ligne de texte
$pdf ->Text(100,405+30, "   - 1900 MHz ( ) :                  X "  . $_POST['AU1900']); //insertion d'une ligne de texte
$pdf ->Text(100,420+30, "   - 2100 MHz ( ) :                  X "  . $_POST['AU2100']); //insertion d'une ligne de texte
$pdf ->Text(100,435+30, "   - 2300 MHz ( ) :                  X "  . $_POST['AU2300']); //insertion d'une ligne de texte
$pdf ->Text(100,450+30, "   - 2600 MHz ( ) :                  X " . $_POST['AU2600']); //insertion d'une ligne de texte
$pdf ->Text(100,480+30, " - Modules (RU LP)-"); //insertion d'une ligne de texte
$pdf ->Text(100,500+30, "   - 700 MHz ( ) :                   X " . $_POST['RU700']); //insertion d'une ligne de texte
$pdf ->Text(100,515+30, "   - 800 MHz ( ) :                   X " . $_POST['RU800']); //insertion d'une ligne de texte
$pdf ->Text(100,530+30, "   - 850 MHz ( ) :                   X " . $_POST['RU850']); //insertion d'une ligne de texte
$pdf ->Text(100,545+30, "   - 900 MHz ( ) :                   X " . $_POST['RU900']); //insertion d'une ligne de texte
$pdf ->Text(100,560+30, "   - 1700 MHz ( ) :                  X " . $_POST['RU1700']); //insertion d'une ligne de texte
$pdf ->Text(100,575+30, "   - 1800 MHz ( ) :                  X " . $_POST['RU1800']); //insertion d'une ligne de texte
$pdf ->Text(100,590+30, "   - 1900 MHz ( ) :                  X " . $_POST['RU1900']); //insertion d'une ligne de texte
$pdf ->Text(100,605+30, "   - 2100 MHz ( ) :                  X " . $_POST['RU2100']); //insertion d'une ligne de texte
$pdf ->Text(100,620+30, "   - 2300 MHz ( ) :                  X " . $_POST['RU2300']); //insertion d'une ligne de texte
$pdf ->Text(100,635+30, "   - 2600 MHz ( ) :                  X " . $_POST['RU2600']); //insertion d'une ligne de texte


$pdf ->Output('pdf_users/newpdf.pdf'); //génère le PDF et l'affiche	


//email
	$to = $_POST['email'];
	$from = "no-reply@zenic8.com"; 
	$subject ="[CROSSFIRE] Your HetNet architecture"; 
	$message = "   Dear ". $_POST['name'] .
		"\n\n   Thank you for using the DIY DAS Builder" .
		"\n   In attached file, the graph of your own CROSSFIRE HETNET architecture." .
		"\n\n    Best Regards," .
		"\n    The Crossfire team" ;
	$headers = "From: $from";


	// boundary 
	$semi_rand = md5(time()); 
	$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x"; 
	 
	// headers for attachment 
	$headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\""; 
	 
	// multipart boundary 
	$message = "This is a multi-part message in MIME format.\n\n" . "--{$mime_boundary}\n" . "Content-Type: text/plain; charset=\"iso-8859-1\"\n" . "Content-Transfer-Encoding: 7bit\n\n" . $message . "\n\n"; 
	$message .= "--{$mime_boundary}\n";

//The Graph	
		$file_name = $_POST['nom_file']; 
		$temp_name = $_POST['nom_file'];
		//$file_type = ".png";
		//$path_parts = pathinfo($file_name);
		//$file = fopen($temp_name,"rb");
		//$data = fread($file,filesize($temp_name));
		//fclose($file);
		//$data = chunk_split(base64_encode($data));
		$name = $file_name;
		$message .= "Content-Type: image/jpeg; name=" .$_POST['nom_file']. "\r\n";
		$message .= "Content-Transfer-Encoding: base64\r\n";
		$message .= "Content-Disposition:attachement; filename=" .$_POST['nom_file']. "\r\n";
		$message .= "Content-ID: <image1>\r\n\r\n";
		$message .= chunk_split(base64_encode(file_get_contents('graph_users/' .$_POST['nom_file']))). "\r\n\n";
		$message .= "--{$mime_boundary}\n";
	
//1er PDF	
		$file_name = "CrossFire iBDA (1.0.2).pdf"; 
		$temp_name = "CrossFire iBDA (1.0.2).pdf";
		$file_type = ".pdf";
		$path_parts = pathinfo($file_name);
		$file = fopen($temp_name,"rb");
		$data = fread($file,filesize($temp_name));
		fclose($file);
		$data = chunk_split(base64_encode($data));
		$name = $file_name;
		$message .= "Content-Type: {\"application/octet-stream\"};\n" . " name=\"$name\"\n" . 
		"Content-Disposition: attachment;\n" . " filename=\"$name\"\n" . 
		"Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
		$message .= "--{$mime_boundary}\n";

//2nd PDF	
		$file_name = "CrossFire LP Datasheet (2.0.10).pdf"; 
		$temp_name = "CrossFire LP Datasheet (2.0.10).pdf";
		$file_type = ".pdf";
		$path_parts = pathinfo($file_name);
		$file = fopen($temp_name,"rb");
		$data = fread($file,filesize($temp_name));
		fclose($file);
		$data = chunk_split(base64_encode($data));
		$name = $file_name;
		$message .= "Content-Type: {\"application/octet-stream\"};\n" . " name=\"$name\"\n" . 
		"Content-Disposition: attachment;\n" . " filename=\"$name\"\n" . 
		"Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
		$message .= "--{$mime_boundary}\n";
		
//2e PDF	
		$file_name = "CrossFire HP Datasheet (1.0.8) (1).pdf"; 
		$temp_name = "CrossFire HP Datasheet (1.0.8) (1).pdf";
		$file_type = ".pdf";
		$path_parts = pathinfo($file_name);
		$file = fopen($temp_name,"rb");
		$data = fread($file,filesize($temp_name));
		fclose($file);
		$data = chunk_split(base64_encode($data));
		$name = $file_name;
		$message .= "Content-Type: {\"application/octet-stream\"};\n" . " name=\"$name\"\n" . 
		"Content-Disposition: attachment;\n" . " filename=\"$name\"\n" . 
		"Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
		$message .= "--{$mime_boundary}\n";
		
	// send
	 
	$ok = mail($to, $subject, $message, $headers); 
	if ($ok) { 
		// echo "<p>mail sent to $to!</p>"; 
	} else { 
		echo "<p>mail could not be sent!</p>"; 
	}
//	mail("jlcassier@gmail.com", $subject, $message, $headers);
//}	


# Chemin vers fichier texte
//$file ="/data_diydas.txt";
# Ouverture en mode écriture
//$fileopen=(fopen("$file",'a'));
# Ecriture de "Début du fichier" dansle fichier texte
//===time:	name:	email:	compagny:	phone:	image:	score:
//$time = time();
//$name = $_POST['name'];
//$email = $_POST['email'];
//$company = $_POST['company'];
//$phone = $_POST['telephone'];
//$nom_file = $_POST['nom_file'];
//$score = $_POST['score'];
//$str = $time."\t".$name."\t".$email."\t".$company."\t".$phone."\t".$nom_file."\t".$score;
//fwrite($fileopen,$str);
# On ferme le fichier proprement
//fclose($fileopen);
?>

<!DOCTYPE html>


<html>

<head>
<title>Crossfire end</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="refresh" content="10;url=http://diydas.com/" />
</head>

<style>
html{
/*background:url("./pic/images/pic_launch.png") center fixed no-repeat; width:100%;*/
background: #f9fcf7; /* Old browsers */
background: -moz-linear-gradient(top, #f9fcf7 0%, #f5f9f0 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#f9fcf7), color-stop(100%,#f5f9f0)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top, #f9fcf7 0%,#f5f9f0 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top, #f9fcf7 0%,#f5f9f0 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top, #f9fcf7 0%,#f5f9f0 100%); /* IE10+ */
background: linear-gradient(to bottom, #f9fcf7 0%,#f5f9f0 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f9fcf7', endColorstr='#f5f9f0',GradientType=0 ); /* IE6-9 */
}
h1{
top:250px;
color: #c00000;
text-align:center;
font-size : 29px;
font-family: Arial, Helvetica,sans-serif;
}
h2{
background: rgba(255,204,204,0.4);
padding:35px;
border-radius: 1em;
color: #c00000;
margin-left: 30%;
margin-right: 30%;
font-size: 16px; 
font-family: Arial, Helvetica,sans-serif;
text-align:justify;
font-style:italic; 
font-weight: normal;
position:absolute;
z-index:50;
	-webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
	box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
}
.lego{
position:relative;
margin-top:-700px;
left:15%;
opacity:0.1;
}
.logo{

top:50%;
    display: block;
    margin-left: auto;
    margin-right: auto }

}

</style>
<body>

<div>
<img src="pic/images/logo.png" class="logo" width="21%" alt="" align="center">
</div>

<h1>Thank you!</h1>
<h2>

<p>Thank you for using the Crossfire Interactive System Builder.</p>
<p>Your Hetnet architecture has been sent to your email.</p>

Our competent team is at your disposal and can provide adapted solutions to your specific needs of today and tomorrow.</p>
<p>For more information on Crossfire technology and all the panel of our products, please visit <a href="http://www.zenic8.com">Zenic8.com</a> or feel free to <a href="http://www.zenic8.com/contact.html"> contact us</a>.</p>

<p>the Crossfire Team,</p>
Zenic8 2015</h2>

<div>
<img src="pic/images/pic_launch.png" class="lego" width="70%" alt="" >
</div>

</body>
</html>