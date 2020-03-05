<!DOCTYPE html>
<html>
<head>
	<title>bar</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" type="text/css" href="bar.css">
	<link rel="stylesheet" media="screen and (max-width: 1281px)" href="bars3.css" /> <!-- Pour ceux qui ont une résolution inférieure à 640px -->
	<link rel="stylesheet" media="screen and (min-width: 1900px)" href="barHD.css" /> <!-- reso HD -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.2.min.js"></script>


 	  <script type="text/javascript">
//document.onselectstart=new Function("return false")
//document.oncontextmenu=new Function("return false")
//document.ondragstart =new Function("return false")
//function ImpEcrOff() { SetInterval("window.clipboardData.setData('text','')",20); }

	</script>
</head>
<body onload="preloadImage()">

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script> <!-- jQuery est inclus ! -->
 <div style="display:none">
  <canvas  id="canvas" style="border:2px solid black;" width="500" height="500"></canvas>
  </div>
  
  
  
<script>
var img= new Image();

function Get_SVG(){
	//taille du canvas et celle de liframe, avec une hauteur reduite de 100
	var hauteur = window.frames[0].document.body.scrollHeight;
	console.log(hauteur);
	var largeur = window.frames[0].document.body.scrollWidth;
	console.log(largeur);
	var canvas = document.getElementById('canvas');
	 var ctx = canvas.getContext('2d');
	canvas.width = largeur+100;
	canvas.height = hauteur+50;
	
	//background du graph
	ctx.fillStyle="#ffffff";
	ctx.fillRect(0,0,canvas.width,canvas.height); 

	var x = canvas.width / 2;
var y = canvas.height / 2;
var xlogo= canvas.width -60;
var ylogo= canvas.height -45;
var xcadre= canvas.width -8;
var ycadre= canvas.height -8;

	ctx.font = "16pt Calibri,Geneva,Arial";
	ctx.textAlign = 'center';
	ctx.fillStyle = "rgb(192,0,0)";
	ctx.fillText("-CrossFire Architecture HetNet-", x,28); 
				
	ctx.beginPath();
    ctx.strokeStyle="grey";   
    ctx.lineWidth="1";   
    ctx.rect(4,4,xcadre,ycadre);
    ctx.stroke(); 
// var logo_image = new Image();
  //logo_image.src = 'pic/images/logo.png';
  //logo_image.onload = function(){
  //  ctx.drawImage(logo_image, xlogo, ylogo);
 // }
    var me = this;
    logo = document.createElement('img');
    logo.onload = function() {
        ctx.drawImage(logo, xlogo, ylogo, 50, 35);
    }
    logo.src = 'pic/images/logo_canvas.png';
	//donnees basic pour charge un SVG dans un CANVAS
/* var data = window.frames[0].document.getElementById("container_svg").innerHTML;
	var DOMURL = self.URL || self.webkitURL || self;
	img = new Image();
	var svg = new Blob([data], {type: "image/svg+xml;base64"});
	var url = DOMURL.createObjectURL(svg);
	img.onload = function() {
    ctx.drawImage(img, 100, 50);
	};
	//img.src = url;
*/
	//Donnees plus complete permettant un meilleur encodage du SVG et sa traduction en base64
	var html = window.frames[0].document.getElementById("container_svg").innerHTML;
	var imgsrc = 'data:image/svg+xml;base64,' + btoa(html);
	context = canvas.getContext("2d");
	var image = new Image;
	image.src = imgsrc;
	image.onload = function () {
	context.drawImage(image, 100, 50);
	var canvasdata = canvas.toDataURL("image/png");
	document.getElementById('message').value  = canvasdata;
}
	//test dajout simple de forme et image (seule la forme marche)
	//img.src = 'data:image/svg+xml;base64,' + 
	//           btoa('<svg xmlns="http://www.w3.org/2000/svg" height="100" width="100"><circle cx="50" cy="50" r="40" stroke="black" stroke-width="3" fill="red"/></svg>');
	//img.src = 'pic\images\logo_canvas.png'
	}
	//on sauve le fichier sur le server dans le formulaire

function send(){
	Get_SVG();
	setTimeout(toform, 2000);
}

function toform(){
	document.getElementById("form1").submit();//on laisse un peu de temps pour lencodage
}


</script>
	<div class="title_logo">	
		<img src= "pic/images/logo.png" alt="logo" width="8%">
			<h1>CrossFire System</h1>
			
	<div class="but_haut">   	 
		 <form method="post" id="form1" name="form" action="formulaire.php" target="_blank">
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
			
			<input name="message" id="message" type="hidden"  value="qweqwe" class="form-control" />
			<input type="button" id="submitbtn" class="button3" Onclick = "send()" value="Send Result"/>
			<input type="button" onclick="window.close()" class="button2" value="Go Back"/>
			<input type="button" class="button4" onclick="window.location='index.html';" value="Start Over"/> 
		</form>
	</div><!--<div class="but_haut">-->
		
	<!--<</div>	-->	 
	</div>
	

	


<table class="main_table" border="0" width="100%">

<tr>
	<td class = bord_arrondi align="center" bgcolor="#c00000">SYSTEM TOPOLOGY</td>
	<td class = bord_arrondi align="center" bgcolor="#f16726"> SCORE CARDS  </td>
</tr>
<tr>

<td>

<?php
$g = $_POST['str_graph'];
//echo $g;
$Spectrum_Allocation = $_POST['Spectrum_Allocation'];
$Network_Capacity = $_POST['Network_Capacity'];
$HetNet_Integration = $_POST['HetNet_Integration'];
$Cost_Effective = $_POST['Cost_Effective'];
$Energy_Efficient = $_POST['Energy_Efficient'];
$Maximum_Coverage = $_POST['Maximum_Coverage'];
$future_Proof = $_POST['future_Proof'];

$score_tot = ($Spectrum_Allocation + $Network_Capacity + $HetNet_Integration + $Cost_Effective + $Energy_Efficient + $Maximum_Coverage + $future_Proof)/ 7;  

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

<form id="moodleform" target="iframe" method="post" action="graph.php">
    <input type="hidden" name="graph_string" value="<?php echo $g;?>"/>
</form>
<div class="container">

<iframe  name="iframe" width="100%" height="550px"  onload="document.getElementById('preloadCache').style.display='none';"></iframe>
<script type="text/javascript">
    document.getElementById('moodleform').submit();
</script>
</div>
	<DIV id=preloadCache style="Z-INDEX: 123; left:28%; WIDTH: 15%; TOP: 49%; HEIGHT: 5%; position:fixed">
		<TABLE height="100%" cellSpacing=0 cellPadding=0 width="100%" border=0>
		<TBODY><TR><TD align=middle bgColor=transparent>
		<DIV id=preloadPercent><img src="pic/images/loading.gif" width="20%"></br><FONT color=#999999 style="padding-top:13%">Loading</FONT></DIV><BR>
		</TD></TR></TBODY></TABLE>
</div>
</td>



<td class="score_card">
	<div class="score_card_body">
		<ul> <!--BAR-PARAMETERS-->
			<li>Spectrum Allocation<div id="data-one" class="bar" style="width: <? echo $Spectrum_Allocation ?>%"><div class="txt_bar"><? echo $Spectrum_Allocation ?>%</div></div></li>
			<li>Network Capacity<div id="data-two" class="bar" style="width: <? echo $Network_Capacity ?>%"><div class="txt_bar"><? echo $Network_Capacity ?>%</div></div></li>
			<li>HetNet Integration<div id="data-three" class="bar" style="width: <? echo $HetNet_Integration ?>%"><div class="txt_bar"><? echo $HetNet_Integration ?>%</div></div></li>
			<li>Cost Effective<div id="data-four" class="bar" style="width: <? echo $Cost_Effective ?>%"><div class="txt_bar"><? echo $Cost_Effective ?>%</div></div></li>
			<li>Energy Efficient<div id="data-five" class="bar" style="width: <? echo $Energy_Efficient ?>%"><div class="txt_bar"><? echo $Energy_Efficient ?>%</div></div></li>
			<li>Maximum Coverage<div id="data-six" class="bar" style="width: <? echo $Maximum_Coverage ?>%"><div class="txt_bar"><? echo $Maximum_Coverage ?>%</div></div></li>
			<li>Future Proof<div id="data-seven" class="bar" style="width: <? echo $future_Proof ?>%"><div class="txt_bar"><? echo $future_Proof ?>%</div></div></li>
		</ul>
	</div> 
<div class="total_score">TOTAL SCORE:<div class="score_final"><? echo round($score_tot); ?>%</div>
<!--<div class="view_ranking">To view your ranking, you need to enter your details by <a onclick="send()" class="click_here">clicking here</a></div>-->
</div>	
</td>


<!--score_card_body-->
<!--score_card-->
</tr>


</body>
</html>