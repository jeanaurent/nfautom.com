<!DOCTYPE html>
<html>
<head>
	<title>bar</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" type="text/css" href="bar.css">
	<link rel="stylesheet" media="screen and (max-width: 640px)" href="bar640.css" /> <!-- Pour ceux qui ont une résolution inférieure à 640px -->
	<link rel="stylesheet" media="screen and (min-width: 1900px)" href="barHD.css" /> <!-- reso HD -->
 	  <script type="text/javascript">
//document.onselectstart=new Function("return false")
//document.oncontextmenu=new Function("return false")
//document.ondragstart =new Function("return false")
//function ImpEcrOff() { SetInterval("window.clipboardData.setData('text','')",20); }

	</script>
</head>
<body>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script> <!-- jQuery est inclus ! -->
 <div style = "display:none">
  <canvas  id="canvas" style="border:2px solid black;" width="500" height="500"></canvas>
  </div>
<script>
//alert(window.frames[0].document.body.innerHTML
///chargement iframe.
function chargement_iframe(){
	
   document.getElementById('chargement').style.display='none';
   document.getElementById('graphcharge').style.visibility='visible';

}

function Get_SVG(){
	var hauteur = window.frames[0].document.body.scrollHeight;
	console.log(hauteur);
	var largeur = window.frames[0].document.body.scrollWidth;
	console.log(largeur);
	var canvas = document.getElementById('canvas');
	canvas.width = largeur;
	canvas.height = hauteur-100;

//alert( document.getElementById("ifrm").innerHTML);
//alert(window.frames['ifrm'].document.getElementById("ifrm").innerHTML);
//alert(window.frames[0].document.getElementById("container").innerHTML);


var canvas = document.getElementById('canvas');
var ctx = canvas.getContext('2d');
ctx.fillStyle="#ffffff";
ctx.fillRect(0,0,canvas.width,canvas.height);


//	alert(window.frames[0].document.getElementById("container_svg"));
var data = window.frames[0].document.getElementById("container_svg").innerHTML;
//var xgraph = (canvas.width - xxx)/2;    manque la valeur xxx et yyy correspondant a la largeur et la hauter du graph
//var ygraph = (canvas.height - yyy)/2;
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

var DOMURL = window.URL || window.webkitURL || window;

//alert(window.frames[0].document.getElementById("container_svg"));
//var cont = window.frames[0].document.getElementsByClassName("container_svg");
// var data = cont[0].innerHTML;
    //do nothing


var img = new Image();
var svg = new Blob([data], {type: 'image/svg+xml;charset=utf-8'});
var url = DOMURL.createObjectURL(svg);
console.log(svg);
console.log(url);

img.src = url;
console.log(img);

img.onload = function () {
  ctx.drawImage(img,10, 50); //caler le xgraph et le ygraph ici
  DOMURL.revokeObjectURL(url);
}


}
//on sauve le fichier sur le server
function send(){
	Get_SVG();
document.getElementById('message').value = canvas.toDataURL('image/jpeg');

console.log(document.getElementById('message').value);

document.getElementById("form1").submit();//on laisse un peu de temps pour lencodage
}


</script>
	<div class="title_logo">	
		<img src= "pic/images/logo.png" alt="logo" width="8%">
			<h1>CrossFire System</h1>
			
	<div class="but_haut">   

		 
		 <form method="post" id="form1" name="form" action="formulaire.php">
	<input name="message" id="message" type="hidden"  value="qweqwe" class="form-control" />
	<input type="button" id="submitbtn" class="button3" Onclick = "send()" value="Send Result"/>
	
	<input type="button" onClick="history.go(-1)" class="button2" value="Go Back"/>
	
	<input type="button" class="button4" onclick="window.location='start.html';" value="Start Over"/> 
	
	
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

$Spectrum_Allocation = $_POST['Spectrum_Allocation'];
$Network_Capacity = $_POST['Network_Capacity'];
$HetNet_Integration = $_POST['HetNet_Integration'];
$Cost_Effective = $_POST['Cost_Effective'];
$Energy_Efficient = $_POST['Energy_Efficient'];
$Maximum_Coverage = $_POST['Maximum_Coverage'];
$future_Proof = $_POST['future_Proof'];

$score_tot = ($Spectrum_Allocation + $Network_Capacity + $HetNet_Integration + $Cost_Effective + $Energy_Efficient + $Maximum_Coverage + $future_Proof)/ 7;  
?>

<form       id="moodleform" target="iframe"  method="post" action="graph.php" >
    <input type="hidden" name="graph_string" value="<?php echo $g;?>"/>
</form>
<div class="container">
<div id="chargement" style="position:absolute;top:51%;left:46%;color:#c00000;">loading...
	<img src="pic/images/loading.gif" style="position:absolute;bottom:30px;left:10%" width="60%">
  </div>
   <iframe onload="chargement_iframe()" width="100%" height="540px" id="graphcharge"  name="iframe" style="visibility:hidden;"></iframe> 

<script type="text/javascript">
    document.getElementById('moodleform').submit();
</script>

<div >

</div>
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