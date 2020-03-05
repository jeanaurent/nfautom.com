<?php
 
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