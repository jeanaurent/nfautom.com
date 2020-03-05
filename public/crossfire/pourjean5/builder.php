<!DOCTYPE html>
<html>
   <head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <title>CrossFire Builder</title>
	    <link rel="stylesheet" type="text/css" href="tableauL.css" />
		<link rel="stylesheet" type="text/css" href="tableauL2.css" />
		<link rel="stylesheet" type="text/css" href="drawing.css" />
	    <link rel="stylesheet" media="screen and (max-width: 1281px)" href="tableauLs3.css" /> <!-- Pour ceux qui ont une résolution inférieure à 640px -->
		<link rel="stylesheet" media="screen and (min-width: 1900px)" href="tableauLHD.css" /> <!-- reso HD -->
 </head>
   <body class="noselect" onload="Init()" id="test_fade">
	     <script>
<!--====================fonction pierrot=========================-->
//document.onselectstart=new Function("return false")
//document.oncontextmenu=new Function("return false")
//document.ondragstart =new Function("return false")
//function ImpEcrOff() { SetInterval("window.clipboardData.setData('text','')",20); } //fonction qui est aussi dans le Onload sur le <body> ??

//Cache tout ce qui a la class IP
function Hide_ip(){
	console.log('==== fct Hide_ip =====');
     var _elements =	document.getElementsByClassName('show_IP');
    for( var i = 0; i < _elements.length; i++){
		// alert(_elements[i].tagName);
        if (_elements[i].tagName == 'TD'){
				 _elements[i].className = 'hide_IP';
				}
				else{
					 _elements[i].className = 'hide_IP entity';
				}
       
     }
}
function Show_ip(){
		console.log('==== fct Show_ip =====');
     var _elements =	document.getElementsByClassName('hide_IP');
     for( var i = 0; i < _elements.length; i++){
		//alert(_elements[i].tagName);
        if (_elements[i].tagName == 'TD'){
				_elements[i].className = 'show_IP';
				}
				else{
					_elements[i].className = 'show_IP entity';
				}
      }
}
function Show_EU(){
		console.log('==== fct Show_EU =====');
		EU = true;
       var _elements =	document.getElementsByClassName('hide_EU');
       for( var i = 0; i < _elements.length; i++){
		   // alert(_elements[i].tagName);
			if (_elements[i].tagName == 'TD'){
				_elements[i].className = 'show_EU';
				}
				else{
					_elements[i].className = 'show_EU entity';
				}
       }
}
function Hide_EU(){
		console.log('==== fct Hide_EU =====');
       EU = false;
	   var _elements =	document.getElementsByClassName('show_EU');
       for( var i = 0; i < _elements.length; i++){
        // alert(_elements[i].tagName);
		if (_elements[i].tagName == 'TD'){
				_elements[i].className = 'hide_EU';
				}
				else{
					_elements[i].className = 'hide_EU entity';
				}
       }
}
var EU=false;
var IP=false;

function ip_activated(id){//on recoit l'id dun RUM appeler a sa creation
	//on retrouve l'entite qui correspond a cet id
	var elem = document.getElementsByClassName('entity');
	var i;

	for (i=0; i<elem.length;i++){

				if(id == elem[i].getAttribute('id_cell')){
	
					if(T_unit[T_unit[id].input].ipserv_activ == true){ //ipsrviceactivated on the parent ?
						elem[i].setAttribute("class", "entity show_IP");
					}
					else{
						elem[i].setAttribute("class", "entity hide_IP");
					}
					break;
				}
	}
	return true;
}

function update_ip(id,row,is_checked) {
console.log('==== fct update ip ====='); 
//on cherche toutes les entites (unit + ip)
//alert('on rentre dans update IP');

if (is_checked == true){
	T_unit[id].ipserv_activ = true;
					}else{
	T_unit[id].ipserv_activ = false;
}
//alert('output1 : ' + T_unit[id].output);
					
var elem = document.getElementsByClassName('entity');
var i;
	if (typeof T_unit[T_unit[id].output1] !== 'undefined'){
		if(T_unit[T_unit[id].output1].type == 'RU_Master'){
			for (i=0; i<elem.length;i++){
				if(T_unit[id].output1 == elem[i].getAttribute('id_cell')){
					//on trouve la cellule de la sortie de notre EU
					//on change son etat
					if (is_checked == true){
						elem[i].setAttribute("class", "entity show_IP");
						T_unit[id].ipserv_activ = true;
					}else{
						elem[i].setAttribute("class", "entity hide_IP");
						T_unit[id].ipserv_activ = false;
					}
				}			
			}
		}
	}
	if (typeof T_unit[T_unit[id].output2] !== 'undefined'){
		if(T_unit[T_unit[id].output2].type == 'RU_Master'){
			for (i=0; i<elem.length;i++){
				if(T_unit[id].output2 == elem[i].getAttribute('id_cell')){
					//on trouve la cellule de la sortie de notre EU
					//on change son etat
					if (is_checked == true){
						elem[i].setAttribute("class", "entity show_IP");
						T_unit[id].ipserv_activ = true;
					}else{
						elem[i].setAttribute("class", "entity hide_IP");
						T_unit[id].ipserv_activ = false;
					}
				}			
			}
		}
	}
		if (typeof T_unit[T_unit[id].output3] !== 'undefined'){
		if(T_unit[T_unit[id].output3].type == 'RU_Master'){
			for (i=0; i<elem.length;i++){
				if(T_unit[id].output3 == elem[i].getAttribute('id_cell')){
					//on trouve la cellule de la sortie de notre EU
					//on change son etat
					if (is_checked == true){
						elem[i].setAttribute("class", "entity show_IP");
						T_unit[id].ipserv_activ = true;
					}else{
						elem[i].setAttribute("class", "entity hide_IP");
						T_unit[id].ipserv_activ = false;
					}
				}			
			}
		}
	}
	if (typeof T_unit[T_unit[id].output4] !== 'undefined'){
		if(T_unit[T_unit[id].output4].type == 'RU_Master'){
			for (i=0; i<elem.length;i++){
				if(T_unit[id].output4 == elem[i].getAttribute('id_cell')){
					//on trouve la cellule de la sortie de notre EU
					//on change son etat
					if (is_checked == true){
						elem[i].setAttribute("class", "entity show_IP");
						T_unit[id].ipserv_activ = true;
					}else{
						elem[i].setAttribute("class", "entity hide_IP");
						T_unit[id].ipserv_activ = false;
					}
				}			
			}
		}
	}
		if (typeof T_unit[T_unit[id].output5] !== 'undefined'){
		if(T_unit[T_unit[id].output5].type == 'RU_Master'){
			for (i=0; i<elem.length;i++){
				if(T_unit[id].output5 == elem[i].getAttribute('id_cell')){
					//on trouve la cellule de la sortie de notre EU
					//on change son etat
					if (is_checked == true){
						elem[i].setAttribute("class", "entity show_IP");
						T_unit[id].ipserv_activ = true;
					}else{
						elem[i].setAttribute("class", "entity hide_IP");
						T_unit[id].ipserv_activ = false;
					}
				}			
			}
		}
	}
	if (typeof T_unit[T_unit[id].output6] !== 'undefined'){
		if(T_unit[T_unit[id].output6].type == 'RU_Master'){
			for (i=0; i<elem.length;i++){
				if(T_unit[id].output6 == elem[i].getAttribute('id_cell')){
					//on trouve la cellule de la sortie de notre EU
					//on change son etat
					if (is_checked == true){
						elem[i].setAttribute("class", "entity show_IP");
						T_unit[id].ipserv_activ = true;
					}else{
						elem[i].setAttribute("class", "entity hide_IP");
						T_unit[id].ipserv_activ = false;
					}
				}			
			}
		}
	}	
	//if(T_unit[T_unit[id].output3].type == 'RU_Master'){}
//if(T_unit[T_unit[id].output4].type == 'RU_Master'){}
//if(T_unit[T_unit[id].output5].type == 'RU_Master'){}
//if(T_unit[T_unit[id].output6].type == 'RU_Master'){}

//if (IP==false)
//	{
//	  Show_ip();
//	  Show_ip();
//	  Show_ip();
//	  IP = true;
//	  EU = true;
//	  Show_EU();
//	  Show_EU();
//	  Show_EU();	
//	}
//else
//	{
//	  Hide_ip();
//	  Hide_ip();
//	  Hide_ip();
//	  IP=false;	
//	}
	
//	draw_it();
}
function update_EU() { 
		                 console.log('==== fct update EU =====');
  if (EU==false)
		{   
	  Show_EU();
      Show_EU();
      Show_EU();
      Show_EU();
      EU=true;	
		}
   else {
       EU=false;
       Hide_EU();
       Hide_EU();
       Hide_EU();
       Hide_EU();       
	   IP=false;
	   Hide_ip();
	   Hide_ip();
	   Hide_ip();
	   Hide_ip();		
	   }
	   	draw_it();
}
		 
		 
<!--==================== end fonction pierrot=========================-->		  
	  
/* var hauteur_str = 100;
var size = 1;
var position = -27;*/
function ZoomOut(){
 	if (size > 0.5) {
	size -= 0.1;

	var _elements =	document.getElementsByClassName("main_table");
	position -= 19;
	console.log('position : ' + position);
	for( var i = 0; i < _elements.length; i++){
		_elements[i].style.transform = 'scaleY(' + size + ')';
		_elements[i].style.top = position + "px";
	}
	
	 console.log('position : ' + position);
		//console.log('position : ' + (5000 + parseInt(position)) + "px");
	
		
		 
	 hauteur_str -= 10;
	var ht = document.getElementById("canvas").height;
	console.log ('hauteur du canvas : ' + ht);
	document.getElementById("canvas").style.height = (parseInt(hauteur_str) * ht)/100 + "px";	
	document.getElementById("canvas").style.width = window.innerWidth+"px";	
 
	document.getElementById("myTable").style.position = "relative";	
	//document.getElementById("myTable").style.top = "0px";
	}
}
var redescend = 38;
function ZoomIn(){
 	if (size < 1) {
		size += 0.1;

		var _elements =	document.getElementsByClassName("main_table");
		for( var i = 0; i < _elements.length; i++){
			_elements[i].style.transform = 'scaleY(' + size + ')';
			_elements[i].style.top = position + redescend + "px";
		}
	
	position += 19;
	document.getElementById("stretch").style.transform = 'scaleY(' + size + ')';
	document.getElementById("stretch").style.top = position + redescend + "px";
	}
}

var T_rum = new Array(); // tableau qui rassemble tous les RUM dun AUM, en global pour pouboir lutiliser ds plusieurs fonctions

var Gather_RUM_on_AUM = function(id){
	// on parcourt ls sortie du AUM
	// en remplissant un tableau d'ID quil faudra mettre a jour apres graphiquement
	var n = 0;
	var current_EU = 0; //var pour simplifier le code : indice de l'EU quon parcourt
	if(T_unit[id].output1!= "-1"){ 	
	if(T_unit[T_unit[id].output1].type == "RU_Master") {
										T_rum[n]= T_unit[id].output1;n++;
									}
									else if(T_unit[T_unit[id].output1].type == "Expansion1") {//il faut regarder les sorties de l'expansion1
										current_EU = T_unit[id].output1;
										if(T_unit[current_EU].output1 != "-1") { T_rum[n] = T_unit[current_EU].output1;n++;}
										if(T_unit[current_EU].output2 != "-1") { T_rum[n] = T_unit[current_EU].output2;n++;}
										if(T_unit[current_EU].output3 != "-1") { T_rum[n] = T_unit[current_EU].output3;n++;}
										if(T_unit[current_EU].output4 != "-1") { T_rum[n] = T_unit[current_EU].output4;n++;}
										if(T_unit[current_EU].output5 != "-1") { T_rum[n] = T_unit[current_EU].output5;n++;}
										if(T_unit[current_EU].output6 != "-1") { T_rum[n] = T_unit[current_EU].output6;n++;}
									}
								}
		if(T_unit[id].output2!= "-1"){ 	if(T_unit[T_unit[id].output2].type == "RU_Master") {
										T_rum[n]= T_unit[id].output2;n++;
									}
									else if(T_unit[T_unit[id].output2].type == "Expansion1") {//il faut regarder les sorties de l'expansion1
										current_EU = T_unit[id].output2;
										if(T_unit[current_EU].output1 != "-1") { T_rum[n] = T_unit[current_EU].output1;n++;}
										if(T_unit[current_EU].output2 != "-1") { T_rum[n] = T_unit[current_EU].output2;n++;}
										if(T_unit[current_EU].output3 != "-1") { T_rum[n] = T_unit[current_EU].output3;n++;}
										if(T_unit[current_EU].output4 != "-1") { T_rum[n] = T_unit[current_EU].output4;n++;}
										if(T_unit[current_EU].output5 != "-1") { T_rum[n] = T_unit[current_EU].output5;n++;}
										if(T_unit[current_EU].output6 != "-1") { T_rum[n] = T_unit[current_EU].output6;n++;}
									}
								}
			if(T_unit[id].output3!= "-1"){ 	if(T_unit[T_unit[id].output3].type == "RU_Master") {
										T_rum[n]= T_unit[id].output3;n++;
									}
									else if(T_unit[T_unit[id].output3].type == "Expansion1") {//il faut regarder les sorties de l'expansion1
										current_EU = T_unit[id].output3;
										if(T_unit[current_EU].output1 != "-1") { T_rum[n] = T_unit[current_EU].output1;n++;}
										if(T_unit[current_EU].output2 != "-1") { T_rum[n] = T_unit[current_EU].output2;n++;}
										if(T_unit[current_EU].output3 != "-1") { T_rum[n] = T_unit[current_EU].output3;n++;}
										if(T_unit[current_EU].output4 != "-1") { T_rum[n] = T_unit[current_EU].output4;n++;}
										if(T_unit[current_EU].output5 != "-1") { T_rum[n] = T_unit[current_EU].output5;n++;}
										if(T_unit[current_EU].output6 != "-1") { T_rum[n] = T_unit[current_EU].output6;n++;}
									}
								}
			if(T_unit[id].output4!= "-1"){ 	if(T_unit[T_unit[id].output4].type == "RU_Master") {
										T_rum[n]= T_unit[id].output4;n++;
									}
									else if(T_unit[T_unit[id].output4].type == "Expansion1") {//il faut regarder les sorties de l'expansion1
										current_EU = T_unit[id].output4;
										if(T_unit[current_EU].output1 != "-1") { T_rum[n] = T_unit[current_EU].output1;n++;}
										if(T_unit[current_EU].output2 != "-1") { T_rum[n] = T_unit[current_EU].output2;n++;}
										if(T_unit[current_EU].output3 != "-1") { T_rum[n] = T_unit[current_EU].output3;n++;}
										if(T_unit[current_EU].output4 != "-1") { T_rum[n] = T_unit[current_EU].output4;n++;}
										if(T_unit[current_EU].output5 != "-1") { T_rum[n] = T_unit[current_EU].output5;n++;}
										if(T_unit[current_EU].output6 != "-1") { T_rum[n] = T_unit[current_EU].output6;n++;}
									}
								}
			if(T_unit[id].output5!= "-1"){ 	if(T_unit[T_unit[id].output5].type == "RU_Master") {
										T_rum[n]= T_unit[id].output5;n++;
									}
									else if(T_unit[T_unit[id].output5].type == "Expansion1") {//il faut regarder les sorties de l'expansion1
										current_EU = T_unit[id].output5;
										if(T_unit[current_EU].output1 != "-1") { T_rum[n] = T_unit[current_EU].output1;n++;}
										if(T_unit[current_EU].output2 != "-1") { T_rum[n] = T_unit[current_EU].output2;n++;}
										if(T_unit[current_EU].output3 != "-1") { T_rum[n] = T_unit[current_EU].output3;n++;}
										if(T_unit[current_EU].output4 != "-1") { T_rum[n] = T_unit[current_EU].output4;n++;}
										if(T_unit[current_EU].output5 != "-1") { T_rum[n] = T_unit[current_EU].output5;n++;}
										if(T_unit[current_EU].output6 != "-1") { T_rum[n] = T_unit[current_EU].output6;n++;}
									}
								}
			if(T_unit[id].output6!= "-1"){ 	if(T_unit[T_unit[id].output6].type == "RU_Master") {
										T_rum[n]= T_unit[id].output6;n++;
									}
									else if(T_unit[T_unit[id].output6].type == "Expansion1") {//il faut regarder les sorties de l'expansion1
										current_EU = T_unit[id].output6;
										if(T_unit[current_EU].output1 != "-1") { T_rum[n] = T_unit[current_EU].output1;n++;}
										if(T_unit[current_EU].output2 != "-1") { T_rum[n] = T_unit[current_EU].output2;n++;}
										if(T_unit[current_EU].output3 != "-1") { T_rum[n] = T_unit[current_EU].output3;n++;}
										if(T_unit[current_EU].output4 != "-1") { T_rum[n] = T_unit[current_EU].output4;n++;}
										if(T_unit[current_EU].output5 != "-1") { T_rum[n] = T_unit[current_EU].output5;n++;}
										if(T_unit[current_EU].output6 != "-1") { T_rum[n] = T_unit[current_EU].output6;n++;}
									}
								}
	}

var change_module_AUM = function(id,row){// id du div, donc de lunit
	console.log('id_cell : ' + id);
	var nb_mod_m=0;
	console.log(" - row : " + row);
	var _elements = document.getElementsByClassName("listbox");

	for( var i = 0; i < _elements.length; i ++){
		console.log("row : " + _elements[i].getAttribute('row_number'));
		if (_elements[i].getAttribute('id_cell') == id){
			
			if (_elements[i].selectedIndex !== 0) {nb_mod_m+=1;}
			if (i %4 == 0){T_unit[id].slot_mod1=_elements[i].value;} //on doit reactualiser tous les modules a chaque fois
			if (i %4 == 1){T_unit[id].slot_mod2=_elements[i].value;}
			if (i %4 == 2){T_unit[id].slot_mod3=_elements[i].value;}
			if (i %4 == 3){T_unit[id].slot_mod4=_elements[i].value;}
		}
	}

	//on change pic du master
	if (nb_mod_m == 0){	document.getElementById("img_AUM_"+row).src="pic/images/AU_0_mod.png";}
	if (nb_mod_m == 1){	document.getElementById("img_AUM_"+row).src="pic/images/AU_1_mod.png";}
	if (nb_mod_m == 2){	document.getElementById("img_AUM_"+row).src="pic/images/AU_2_mod.png";}
	if (nb_mod_m == 3){	document.getElementById("img_AUM_"+row).src="pic/images/AU_3_mod.png";}
	if (nb_mod_m == 4){	document.getElementById("img_AUM_"+row).src="pic/images/AU_4_mod.png";}
	
	//cherche RUM lie a cet AUM
	Gather_RUM_on_AUM(id); //on a tous les ID des RUM de l'AUM
	//on recupere le ROW pour mettre a jour image //	"ru_unit entity"  id="XXXRUM" row_number = "WWW">
	var elem_rum = document.getElementsByClassName('ru_unit');
	//alert(elem_rum.length);
	for (var k = 0; k<elem_rum.length;k++){
		for(var j = 0; j<T_rum.length;j++){
			if(elem_rum[k].id == T_rum[j]){
				//on a trouve un RUM exit de l'AUM courante
				// on recupere le row
				var row_rum = elem_rum[k].getAttribute('row_number');
				
				//et on met RUM a jour
				if (T_unit[T_rum[j]].highlow_power== "Low Power"){
				//update master
				if (nb_mod_m == 0){	document.getElementById("photo_ru_master_"+row_rum).src="pic/images/AU_0_mod.png";}
				if (nb_mod_m == 1){	document.getElementById("photo_ru_master_"+row_rum).src="pic/images/AU_1_mod.png";}//update image RUM
				if (nb_mod_m == 2){	document.getElementById("photo_ru_master_"+row_rum).src="pic/images/AU_2_mod.png";}//update image RUM
				if (nb_mod_m == 3){	document.getElementById("photo_ru_master_"+row_rum).src="pic/images/AU_3_mod.png";}//update image RUM
				if (nb_mod_m == 4){	document.getElementById("photo_ru_master_"+row_rum).src="pic/images/AU_4_mod.png";}//update image RUM
				}else if (T_unit[T_rum[j]].highlow_power== "High Power"){
				//update master
				//et RU slave1
				/* if (nb_mod_m == 0){	document.getElementById("photo_ru_slave1_"+row_rum).src="pic/images/AU_0_mod.png";}
				if (nb_mod_m == 1){	document.getElementById("photo_ru_slave1_"+row_rum).src="pic/images/AU_1_mod.png";}//update image RUM
				if (nb_mod_m == 2){	document.getElementById("photo_ru_slave1_"+row_rum).src="pic/images/AU_2_mod.png";}//update image RUM
				if (nb_mod_m == 3){	document.getElementById("photo_ru_slave1_"+row_rum).src="pic/images/AU_3_mod.png";}//update image RUM
				if (nb_mod_m == 4){	document.getElementById("photo_ru_slave1_"+row_rum).src="pic/images/AU_4_mod.png";}//update image RUM
				 */}
			}
		}
	}
}

var change_module_AUS1 = function(id,row){
	var nb_mod_s1=0;
	console.log(" - row : " + row);
	var _elements = document.getElementsByClassName("listbox");
	
	for( var i = 0; i < _elements.length; i ++){
		console.log("row : " + _elements[i].getAttribute('row_number'));
		if (_elements[i].getAttribute('id_cell') == id){
			//console.log('i vaut :' + i %4);
			if (_elements[i].selectedIndex !== 0) {nb_mod_s1+=1;}
			if (i %4 == 0){T_unit[id].slot_mod1=_elements[i].value;} //on doit reactualiser tous les modules a chaque fois
			if (i %4 == 1){T_unit[id].slot_mod2=_elements[i].value;}
			if (i %4 == 2){T_unit[id].slot_mod3=_elements[i].value;}
			if (i %4 == 3){T_unit[id].slot_mod4=_elements[i].value;}
		}
	}
	
	
	//cherche RUM lie a cet AUM
	Gather_RUM_on_AUM(T_unit[id].input); //on a tous les ID des RUM de l'AUM (ici on envoit id du pere car on est ds un slave)
	//on recupere le ROW pour mettre a jour image //	"ru_unit entity"  id="XXXRUM" row_number = "WWW">
	var elem_rum = document.getElementsByClassName('ru_unit'); //on recupe les master. car les slaves sont ds le meme row
	//alert(elem_rum.length);
	for (var k = 0; k<elem_rum.length;k++){
		for(var j = 0; j<T_rum.length;j++){
			if(elem_rum[k].id == T_rum[j]){
				//on a trouve un RUM exit de l'AUM courante
				// on recupere le row
				var row_rum = elem_rum[k].getAttribute('row_number');
				//et on met RUM a jour
			if (T_unit[T_rum[j]].highlow_power== "Low Power"){
				if (nb_mod_s1 == 0){	document.getElementById("photo_ru_slave1_"+row_rum).src="pic/images/AU_0_mod.png";}
				if (nb_mod_s1 == 1){	document.getElementById("photo_ru_slave1_"+row_rum).src="pic/images/AU_1_mod.png";}//update image RUM
				if (nb_mod_s1 == 2){	document.getElementById("photo_ru_slave1_"+row_rum).src="pic/images/AU_2_mod.png";}//update image RUM
				if (nb_mod_s1 == 3){	document.getElementById("photo_ru_slave1_"+row_rum).src="pic/images/AU_3_mod.png";}//update image RUM
				if (nb_mod_s1 == 4){	document.getElementById("photo_ru_slave1_"+row_rum).src="pic/images/AU_4_mod.png";}//update image RUM
			}else if (T_unit[T_rum[j]].highlow_power== "High Power"){
				/* //update slave2
				if (nb_mod_s1 == 0){	document.getElementById("photo_ru_slave2_"+row_rum).src="pic/images/AU_0_mod.png";}
				if (nb_mod_s1 == 1){	document.getElementById("photo_ru_slave2_"+row_rum).src="pic/images/AU_1_mod.png";}//update image RUM
				if (nb_mod_s1 == 2){	document.getElementById("photo_ru_slave2_"+row_rum).src="pic/images/AU_2_mod.png";}//update image RUM
				if (nb_mod_s1 == 3){	document.getElementById("photo_ru_slave2_"+row_rum).src="pic/images/AU_3_mod.png";}//update image RUM
				if (nb_mod_s1 == 4){	document.getElementById("photo_ru_slave2_"+row_rum).src="pic/images/AU_4_mod.png";}//update image RUM
				//et RU slave3
				if (nb_mod_s1 == 0){	document.getElementById("photo_ru_slave3_"+row_rum).src="pic/images/AU_0_mod.png";}
				if (nb_mod_s1 == 1){	document.getElementById("photo_ru_slave3_"+row_rum).src="pic/images/AU_1_mod.png";}//update image RUM
				if (nb_mod_s1 == 2){	document.getElementById("photo_ru_slave3_"+row_rum).src="pic/images/AU_2_mod.png";}//update image RUM
				if (nb_mod_s1 == 3){	document.getElementById("photo_ru_slave3_"+row_rum).src="pic/images/AU_3_mod.png";}//update image RUM
				if (nb_mod_s1 == 4){	document.getElementById("photo_ru_slave3_"+row_rum).src="pic/images/AU_4_mod.png";}//update image RUM
			 */}
			
			}
		}
	}
	
	if (nb_mod_s1 == 0){document.getElementById("img_AUS1_"+row).src="pic/images/AU_0_mod.png";}
	if (nb_mod_s1 == 1){document.getElementById("img_AUS1_"+row).src="pic/images/AU_1_mod.png";}
	if (nb_mod_s1 == 2){document.getElementById("img_AUS1_"+row).src="pic/images/AU_2_mod.png";}
	if (nb_mod_s1 == 3){document.getElementById("img_AUS1_"+row).src="pic/images/AU_3_mod.png";}
	if (nb_mod_s1 == 4){document.getElementById("img_AUS1_"+row).src="pic/images/AU_4_mod.png";}
}
var change_module_AUS2 = function(id,row){
	var nb_mod_s2=0;
	console.log(" - row : " + row);
	var _elements = document.getElementsByClassName("listbox");
	
	for( var i = 0; i < _elements.length; i ++){
		if (_elements[i].getAttribute('id_cell') == id){
			if (_elements[i].selectedIndex !== 0) {nb_mod_s2+=1;}
			if (i %4 == 0){T_unit[id].slot_mod1=_elements[i].value;} //on doit reactualiser tous les modules a chaque fois
			if (i %4 == 1){T_unit[id].slot_mod2=_elements[i].value;}
			if (i %4 == 2){T_unit[id].slot_mod3=_elements[i].value;}
			if (i %4 == 3){T_unit[id].slot_mod4=_elements[i].value;}
		}
	} 
	//cherche RUM lie a cet AUM
	Gather_RUM_on_AUM(T_unit[id].input); //on a tous les ID des RUM de l'AUM (ici on envoie ID du pere car on est ds un slave)
	//on recupere le ROW pour mettre a jour image //	"ru_unit entity"  id="XXXRUM" row_number = "WWW">
	var elem_rum = document.getElementsByClassName('ru_unit');
	//alert(elem_rum.length);
	for (var k = 0; k<elem_rum.length;k++){
		for(var j = 0; j<T_rum.length;j++){
			if(elem_rum[k].id == T_rum[j]){
				//on a trouve un RUM exit de l'AUM courante
				// on recupere le row
				var row_rum = elem_rum[k].getAttribute('row_number');
				//et on met RUM a jour
			if (T_unit[T_rum[j]].highlow_power== "Low Power"){
				if (nb_mod_s2 == 0){	document.getElementById("photo_ru_slave2_"+row_rum).src="pic/images/AU_0_mod.png";}
				if (nb_mod_s2 == 1){	document.getElementById("photo_ru_slave2_"+row_rum).src="pic/images/AU_1_mod.png";}//update image RUM
				if (nb_mod_s2 == 2){	document.getElementById("photo_ru_slave2_"+row_rum).src="pic/images/AU_2_mod.png";}//update image RUM
				if (nb_mod_s2 == 3){	document.getElementById("photo_ru_slave2_"+row_rum).src="pic/images/AU_3_mod.png";}//update image RUM
				if (nb_mod_s2 == 4){	document.getElementById("photo_ru_slave2_"+row_rum).src="pic/images/AU_4_mod.png";}//update image RUM
			}else if (T_unit[T_rum[j]].highlow_power== "High Power"){
				document.getElementById("photo_ru_slave2_"+row_rum).src="pic/images/remot_hp.png"
			/* 	//update slave4
				if (nb_mod_s2 == 0){	document.getElementById("photo_ru_slave4_"+row_rum).src="pic/images/AU_0_mod.png";}
				if (nb_mod_s2 == 1){	document.getElementById("photo_ru_slave4_"+row_rum).src="pic/images/AU_1_mod.png";}//update image RUM
				if (nb_mod_s2 == 2){	document.getElementById("photo_ru_slave4_"+row_rum).src="pic/images/AU_2_mod.png";}//update image RUM
				if (nb_mod_s2 == 3){	document.getElementById("photo_ru_slave4_"+row_rum).src="pic/images/AU_3_mod.png";}//update image RUM
				if (nb_mod_s2 == 4){	document.getElementById("photo_ru_slave4_"+row_rum).src="pic/images/AU_4_mod.png";}//update image RUM
				//et RU slave5
				if (nb_mod_s2 == 0){	document.getElementById("photo_ru_slave5_"+row_rum).src="pic/images/AU_0_mod.png";}
				if (nb_mod_s2 == 1){	document.getElementById("photo_ru_slave5_"+row_rum).src="pic/images/AU_1_mod.png";}//update image RUM
				if (nb_mod_s2 == 2){	document.getElementById("photo_ru_slave5_"+row_rum).src="pic/images/AU_2_mod.png";}//update image RUM
				if (nb_mod_s2 == 3){	document.getElementById("photo_ru_slave5_"+row_rum).src="pic/images/AU_3_mod.png";}//update image RUM
				if (nb_mod_s2 == 4){	document.getElementById("photo_ru_slave5_"+row_rum).src="pic/images/AU_4_mod.png";}//update image RUM
			 */}
			
			}
		}
	}
	
	if (nb_mod_s2 == 0){document.getElementById("img_AUS2_"+row).src="pic/images/AU_0_mod.png";}
	if (nb_mod_s2 == 1){document.getElementById("img_AUS2_"+row).src="pic/images/AU_1_mod.png";}
	if (nb_mod_s2 == 2){document.getElementById("img_AUS2_"+row).src="pic/images/AU_2_mod.png";}
	if (nb_mod_s2 == 3){document.getElementById("img_AUS2_"+row).src="pic/images/AU_3_mod.png";}
	if (nb_mod_s2 == 4){document.getElementById("img_AUS2_"+row).src="pic/images/AU_4_mod.png";}
}

function change_ip(ip_service, active){
	console.log(active);
	if(ip_service == 1){ if(active==true){small_cell++;}else {small_cell--;}}
	console.log(small_cell);
		if(ip_service == 2){ if(active==true){enterprise++;}else {enterprise--;}}
		console.log(enterprise);
		if(ip_service == 3){ if(active==true){corporate++;}else {corporate--;}}
	console.log(corporate);
		if(ip_service == 4){ if(active==true){surveillance++;}else {surveillance--;}}
	console.log(surveillance);
		if(ip_service == 5){ if(active==true){building++;}else {building--;}}
	console.log(building);
		if(ip_service == 6){ if(active==true){traffic++;}else {traffic--;}}
	console.log(traffic);
}

function limit_slave_hplp(id,row){
	Check_state_Unit();
		if( T_unit[id].highlow_power== "Low Power"){
			// 2 slaves
			//alert(T_unit[id].output1);
			//alert(T_unit[id].output2);
			//alert(T_unit[id].output3);
		document.getElementById('low_RUS1_'+row).checked = true;
		document.getElementById('low_RUS2_'+row).checked = true;
			
			if (typeof T_unit[T_unit[id].output1] !== 'undefined'){
				T_unit[T_unit[id].output1].highlow_power =  "Low Power";}

			if (typeof T_unit[T_unit[id].output2] !== 'undefined'){
				T_unit[T_unit[id].output2].highlow_power =  "Low Power";}
			
			if (typeof T_unit[T_unit[id].output3] !== 'undefined'){
				T_unit[T_unit[id].output3].highlow_power =  "Low Power";
				if(T_unit[T_unit[id].output3].activated == true){
					ActiveDeactiv(0,row,T_unit[id].output3);}}//output fill empty slot in priority
			
			if (typeof T_unit[T_unit[id].output4] !== 'undefined'){
				T_unit[T_unit[id].output4].highlow_power =  "Low Power";
				if(T_unit[T_unit[id].output4].activated == true){
					ActiveDeactiv(0,row,T_unit[id].output4);}}
			
			if (typeof T_unit[T_unit[id].output5] !== 'undefined'){
				T_unit[T_unit[id].output5].highlow_power =  "Low Power";
				if(T_unit[T_unit[id].output5].activated == true){
					ActiveDeactiv(0,row,T_unit[id].output5);}}
			
			change_module_AUS1(id,row);//on sait pas si cest un slave 1 ou 2 donc on appelle les 2 fonctions
			change_module_AUS2(id,row);
		}					
		else{// 5 slaves
		if (typeof T_unit[T_unit[id].output1] !== 'undefined'){T_unit[T_unit[id].output1].highlow_power =  "High Power";}
		if (typeof T_unit[T_unit[id].output2] !== 'undefined'){T_unit[T_unit[id].output2].highlow_power =  "High Power";}
		if (typeof T_unit[T_unit[id].output3] !== 'undefined'){T_unit[T_unit[id].output3].highlow_power =  "High Power";}
		if (typeof T_unit[T_unit[id].output4] !== 'undefined'){T_unit[T_unit[id].output4].highlow_power =  "High Power";}
		if (typeof T_unit[T_unit[id].output5] !== 'undefined'){T_unit[T_unit[id].output5].highlow_power =  "High Power";}
		
		document.getElementById('high_RUS1_'+row).checked = true;
		document.getElementById('high_RUS2_'+row).checked = true;
		document.getElementById('high_RUS3_'+row).checked = true;
		document.getElementById('high_RUS4_'+row).checked = true;
		document.getElementById('high_RUS5_'+row).checked = true;
		}
	
}

function change_remote(row,id){
//need to get id_cell ici aussi  comme dans les modules et veirifer si cest active
var _elements = document.getElementsByClassName("Hi_Lo_power");
	for( var i = 0; i < _elements.length; i ++){
		console.log("row : " + _elements[i].getAttribute('row_number'));
		if (_elements[i].getAttribute('row_number') == row){
			break;//on sarrete quand on a trouve le i qui correspond a notre row et a notre id
		}
	}
	console.log('row : ' + row +' and id : ' + id);

	// on cherche lunite en question, 
	// et on regarde quelle unite avec ce row est checke, comme ca on sait si lunit est en HP ou LP
	//ne fonctinne que parce que chaque low et high ont un seul id
	console.log('low_RUM1_'+row)

	//update dans T_unit
	if( T_unit[id].highlow_power== "Low Power"){T_unit[id].highlow_power= "High Power"}
	else{T_unit[id].highlow_power= "Low Power"}
	
	//limit des slaves
	limit_slave_hplp(id,row);
	
	if (typeof document.getElementById('low_RUM1_'+row) !== 'null'){
		console.log('on arrive la ?')
		if(document.getElementById('low_RUM1_'+row).checked) { document.getElementById("photo_ru_master_"+row).src="pic/images/remot_lp.png"
	}
	if(document.getElementById('high_RUM1_'+row).checked) { document.getElementById("photo_ru_master_"+row).src="pic/images/remot_hp.png"
	}
	}
if (typeof document.getElementById('low_RUS1_'+row) !== 'undefined'){ 
 if(document.getElementById('low_RUS1_'+row).checked) { document.getElementById("photo_ru_slave1_"+row).src="pic/images/remot_lp.png"
 }
if(document.getElementById('high_RUS1_'+row).checked) { document.getElementById("photo_ru_slave1_"+row).src="pic/images/remot_hp.png"
 }
}
if (typeof document.getElementById('low_RUS1_'+row) !== 'undefined'){ 
if(document.getElementById('low_RUS2_'+row).checked) { document.getElementById("photo_ru_slave2_"+row).src="pic/images/remot_lp.png"
 }
if(document.getElementById('high_RUS2_'+row).checked) { document.getElementById("photo_ru_slave2_"+row).src="pic/images/remot_hp.png"
 }
}
if (typeof document.getElementById('low_RUS3_'+row) !== 'undefined'){ 
if(document.getElementById('low_RUS3_'+row).checked) { document.getElementById("photo_ru_slave3_"+row).src="pic/images/remot_lp.png"
 }
if(document.getElementById('high_RUS3_'+row).checked) { document.getElementById("photo_ru_slave3_"+row).src="pic/images/remot_hp.png"
 }
}
if (typeof document.getElementById('low_RUS4_'+row) !== 'undefined'){ 
if(document.getElementById('low_RUS4_'+row).checked) { document.getElementById("photo_ru_slave4_"+row).src="pic/images/remot_lp.png"
 }
if(document.getElementById('high_RUS4_'+row).checked) { document.getElementById("photo_ru_slave4_"+row).src="pic/images/remot_hp.png"
 }
}
if (typeof document.getElementById('low_RUS5_'+row) !== 'undefined'){ 
if(document.getElementById('low_RUS5_'+row).checked) { document.getElementById("photo_ru_slave5_"+row).src="pic/images/remot_lp.png"
 }
if(document.getElementById('high_RUS5_'+row).checked) { document.getElementById("photo_ru_slave5_"+row).src="pic/images/remot_hp.png"
 }
}
}   		
   		
	var small_cell = 0;//1
	var enterprise = 0;//2
	var corporate = 0;//3
	var surveillance=0;//4
	var building=0;//5
	var traffic = 0;//6
	
	var global_AU = 1;
	var global_EU = 1;
	var nb_unit=0;
	var nb_network = 0; //combien D'AU_M
	var	nb_RUM= 0;
	var nb_EU= 0;
	
	//-- Indice des rows --
	var cmpt_unit = 2;
	var cmpt_row = 2;
	var compt_row = 0; 
				
	//--TEMPLATE --
  	var template_AU = 'xxx ECHEC xxx';	template_AU = '<?php echo str_replace("\t", "", file_get_contents("new_au.txt")); ?>';	 	console.log('------ LOADING AU TEMPLATE ------- : ' + template_AU);
	var template_EU1 = 'xxx ECHEC xxx';	template_EU1 = '<?php echo str_replace("\t", "", file_get_contents("new_eu1.txt")); ?>';	console.log('------ LOADING EU TEMPLATE ------- : ' + template_EU1);
	var template_RU = 'xxx ECHEC xxx';	template_RU = '<?php echo str_replace("\t", "", file_get_contents("new_ru.txt")); ?>';		console.log('------ LOADING RU TEMPLATE ------- : ' + template_RU);
	   			   
	//declaration de la class unit (simulation dun objet)
	var type;
	function Unit(p_id, p_type, p_activate, p_input, p_output1, p_output2, p_output3, p_output4, p_output5, p_output6, p_label) {
			
		this.id = p_id;
		this.type = p_type;
		this.activated = p_activate;
		this.input = p_input;
		this.output1 = p_output1;
		this.output2 = p_output2;
		this.output3 = p_output3;
		this.output4 = p_output4;
		this.output5 = p_output5;
		this.output6 = p_output6;
		this.label = p_label;
		
		//pas dinitialisation
		this.slot_mod1 = "blank"; //slots of modules
		this.slot_mod2 = "blank";
		this.slot_mod3 = "blank";
		this.slot_mod4 = "blank";
		this.highlow_power = "Low Power";
		this.ipserv_activ = false;
		console.log('>> UniT CrEaTeD :   ' + this.id + '                    // ' + p_input);
	
	//Methode de la class
		this.Activation = function(on_off) { //"true" or "false"
			this.activated = on_off;
        }		
	}
	
	
	//creation du tablo d'objet
	var T_unit = new Array; // tablo dynamique qui ne sarrete pas de grandir, un element supprime disparait du tablo mais nest jamais remplace
		
	// for spectrum allocation
	//var NB_diff_mod = 0;no need
	var M700 = 	new Array('700',0);
	var M800 = 	new Array('800',0);
	var M850 = 	new Array('850',0);
	var M900 = 	new Array('900',0);
	var M1700 = new Array('1700',0);
	var M1800 = new Array('1800',0);
	var M1900 = new Array('1900',0);
	var M2100 = new Array('2100',0);
	var M2300 = new Array('2300',0);
	var M2600 =	new Array('2600',0);
	var T_module = new Array(M700,M800,M850,M900,M1700,M1800,M1900,M2100,M2300,M2600);
	var Avail_mod = 0.1;//le 0.1 evite les operation arithmetique absurde
	var diff_mod = 0.1;
	var nb_blank = 0.1;
	var nb_lp = 0.1;//initialisation
	var nb_hp = 0.1;
	var nb_EU = 0;
	
	var get_Network_Capacity = function() {
	var Net_Cap = 0;
	var nb_mod_used = 0;
	for (var i = 0;i<10;i++){
		Net_Cap += T_module[i][1]/Avail_mod;
		nb_mod_used += T_module[i][1];
	}
	
	//on profite de la boucle pour obtenir le nombre de blanc aussi
	
	nb_blank = Avail_mod-nb_mod_used;
	Net_Cap = Net_Cap/diff_mod * 100;
	return Net_Cap;
}
	
	var get_NB_diff_Mod = function(){
	//on reinitialise les valeurs de decompte avant tout
	Avail_mod = 0;
	diff_mod = 0;
	for (var j = 0;j<10;j++){
		T_module[j][1]=0;
	}
	
	for (var k = 1; k<cmpt_unit-1;k++){//on parcourt la liste des units, ligne 0 est lentete
		if (T_unit[k].activated ==true){
			if(T_unit[k].type == "AU_Master" || T_unit[k].type == "AU_Slave"){
				 Avail_mod+=4 ; 
				
				console.log('mod1 : ' + T_unit[k].slot_mod1);
				console.log('mod2 : ' + T_unit[k].slot_mod2);
				console.log('mod3 : ' + T_unit[k].slot_mod3);
				console.log('mod4 : ' + T_unit[k].slot_mod4);
				
				//switch impossible... le break stop la boucle
				//slot 1
				if (parseInt(T_unit[k].slot_mod1)== 700){ M700[1] ++; console.log('passe ici');}
				if (parseInt(T_unit[k].slot_mod1)== 800){ M800[1] ++; console.log('passe ici');}
				if (parseInt(T_unit[k].slot_mod1)== 850){ M850[1] ++; console.log('passe ici');}
				if (parseInt(T_unit[k].slot_mod1)== 900){ M900[1] ++; console.log('passe ici');}
				if (parseInt(T_unit[k].slot_mod1)== 1700){ M1700[1] ++; console.log('passe ici');}
				if (parseInt(T_unit[k].slot_mod1)== 1800){ M1800[1] ++; console.log('passe ici');}
				if (parseInt(T_unit[k].slot_mod1)== 1900){ M1900[1] ++; console.log('passe ici');}
				if (parseInt(T_unit[k].slot_mod1)== 2100){ M2100[1] ++; console.log('passe ici');}
				if (parseInt(T_unit[k].slot_mod1)== 2300){ M2300[1] ++; console.log('passe ici');}
				if (parseInt(T_unit[k].slot_mod1)== 2600){ M2600[1] ++; console.log('passe ici');}
				//slot 2
				if (parseInt(T_unit[k].slot_mod2)== 700){ M700[1] ++; console.log('passe ici');}
				if (parseInt(T_unit[k].slot_mod2)== 800){ M800[1] ++; console.log('passe ici');}
				if (parseInt(T_unit[k].slot_mod2)== 850){ M850[1] ++; console.log('passe ici');}
				if (parseInt(T_unit[k].slot_mod2)== 900){ M900[1] ++; console.log('passe ici');}
				if (parseInt(T_unit[k].slot_mod2)== 1700){ M1700[1] ++; console.log('passe ici');}
				if (parseInt(T_unit[k].slot_mod2)== 1800){ M1800[1] ++; console.log('passe ici');}
				if (parseInt(T_unit[k].slot_mod2)== 1900){ M1900[1] ++; console.log('passe ici');}
				if (parseInt(T_unit[k].slot_mod2)== 2100){ M2100[1] ++; console.log('passe ici');}
				if (parseInt(T_unit[k].slot_mod2)== 2300){ M2300[1] ++; console.log('passe ici');}
				if (parseInt(T_unit[k].slot_mod2)== 2600){ M2600[1] ++; console.log('passe ici');}
				//slot 3
				if (parseInt(T_unit[k].slot_mod3)== 700){ M700[1] ++; console.log('passe ici');}
				if (parseInt(T_unit[k].slot_mod3)== 800){ M800[1] ++; console.log('passe ici');}
				if (parseInt(T_unit[k].slot_mod3)== 850){ M850[1] ++; console.log('passe ici');}
				if (parseInt(T_unit[k].slot_mod3)== 900){ M900[1] ++; console.log('passe ici');}
				if (parseInt(T_unit[k].slot_mod3)== 1700){ M1700[1] ++; console.log('passe ici');}
				if (parseInt(T_unit[k].slot_mod3)== 1800){ M1800[1] ++; console.log('passe ici');}
				if (parseInt(T_unit[k].slot_mod3)== 1900){ M1900[1] ++; console.log('passe ici');}
				if (parseInt(T_unit[k].slot_mod3)== 2100){ M2100[1] ++; console.log('passe ici');}
				if (parseInt(T_unit[k].slot_mod3)== 2300){ M2300[1] ++; console.log('passe ici');}
				if (parseInt(T_unit[k].slot_mod3)== 2600){ M2600[1] ++; console.log('passe ici');}
				//slot 4
				if (parseInt(T_unit[k].slot_mod4)== 700){ M700[1] ++; console.log('passe ici');}
				if (parseInt(T_unit[k].slot_mod4)== 800){ M800[1] ++; console.log('passe ici');}
				if (parseInt(T_unit[k].slot_mod4)== 850){ M850[1] ++; console.log('passe ici');}
				if (parseInt(T_unit[k].slot_mod4)== 900){ M900[1] ++; console.log('passe ici');}
				if (parseInt(T_unit[k].slot_mod4)== 1700){ M1700[1] ++; console.log('passe ici');}
				if (parseInt(T_unit[k].slot_mod4)== 1800){ M1800[1] ++; console.log('passe ici');}
				if (parseInt(T_unit[k].slot_mod4)== 1900){ M1900[1] ++; console.log('passe ici');}
				if (parseInt(T_unit[k].slot_mod4)== 2100){ M2100[1] ++; console.log('passe ici');}
				if (parseInt(T_unit[k].slot_mod4)== 2300){ M2300[1] ++; console.log('passe ici');}
				if (parseInt(T_unit[k].slot_mod4)== 2600){ M2600[1] ++; console.log('passe ici');}				
			}
			
			//on check les RU aussi
			if(T_unit[k].type == "RU_Master" || T_unit[k].type == "RU_Slave"){
				if (T_unit[k].highlow_power== "High Power"){nb_hp++;}
				if (T_unit[k].highlow_power== "Low Power"){nb_lp++;}
			}
		}
	}


		for (var i = 0;i<10;i++){
			console.log(T_module[i][0] + ': ' + T_module[i][1]);
			if(T_module[i][1] !== 0){diff_mod++;}
		}
		console.log(" There are differents modules : " + diff_mod);
		return diff_mod;
	}
		
	var GenerateGraph = function() {
		var j = 0;
		var str_graph = '';
		var mod1 = "";
		var mod2 = "";
		var mod3 = "";
		var mod4 = "";
				
		str_graph = 'digraph{';		
		
		str_graph+='rankdir=LR;';
		str_graph+='graph [fontname = ---helvetica---];';
		str_graph+='node [fontname = ---helvetica---];';
		str_graph+='edge [fontname = ---helvetica---];	';	
			
		str_graph+='subgraph HetNet {';
		str_graph+='style=filled; ';
		str_graph+='color=lightgrey; ';
		str_graph+='node [color=lightblue]; ';
		str_graph+='label = ---HetNet---; ';
					
		for (j=1; j<cmpt_unit+1; j++){		//on range les unit a leur place dans le tableau donc il faut aller jusqua cmp_unit et le lire	
				if (T_unit[j].activated == true){
					console.log('AACTTIVVATTEEDD');
					if (T_unit[j].input !== ''){
						if (typeof T_unit[T_unit[j].input] !== 'undefined'){
							console.log(T_unit[T_unit[j].input].type);
							//str_graph +=  T_unit[T_unit[j].input].type + ' -> ' + T_unit[j].type + ' ';
							if (T_unit[T_unit[j].input].type =="AU_Master"){
				
								if(T_unit[T_unit[j].input].slot_mod1 !== 'blank'){mod1 = T_unit[T_unit[j].input].slot_mod1 + ' MHz';}else{mod1 = ' *** ';}							
								if(T_unit[T_unit[j].input].slot_mod2 !== 'blank'){mod2 = T_unit[T_unit[j].input].slot_mod2 + ' MHz';}else{mod2 = ' *** ';}							
								if(T_unit[T_unit[j].input].slot_mod3 !== 'blank'){mod3 = T_unit[T_unit[j].input].slot_mod3 + ' MHz';}else{mod3 = ' *** ';}							
								if(T_unit[T_unit[j].input].slot_mod4 !== 'blank'){mod4 = T_unit[T_unit[j].input].slot_mod4 + ' MHz';}else{mod4 = ' *** ';}							
					
								str_graph+='node [shape=Msquare, color=red]; '
								str_graph+=T_unit[T_unit[j].input].label +'[label=< <TABLE BORDER=---0--- CELLBORDER=---1--- CELLSPACING=---0--- COLOR=---RED--- ><TR><TD><B> AU MASTER</B></TD></TR><TR><TD><font point-size=---10--- >' + mod1 + '</font></TD></TR><TR><TD><font point-size=---10--- >' + mod2 + '</font></TD></TR><TR><TD><font point-size=---10--- >' + mod3 + '</font></TD></TR><TR><TD><font point-size=---10--- >' + mod4 + '</font></TD></TR></TABLE> >];';
							}
							if (T_unit[T_unit[j].input].type =="AU_Slave"){
								
								if(T_unit[T_unit[j].input].slot_mod1 !== 'blank'){mod1 = T_unit[T_unit[j].input].slot_mod1 + ' MHz';}else{mod1 = ' *** ';}							
								if(T_unit[T_unit[j].input].slot_mod2 !== 'blank'){mod2 = T_unit[T_unit[j].input].slot_mod2 + ' MHz';}else{mod2 = ' *** ';}							
								if(T_unit[T_unit[j].input].slot_mod3 !== 'blank'){mod3 = T_unit[T_unit[j].input].slot_mod3 + ' MHz';}else{mod3 = ' *** ';}							
								if(T_unit[T_unit[j].input].slot_mod4 !== 'blank'){mod4 = T_unit[T_unit[j].input].slot_mod4 + ' MHz';}else{mod4 = ' *** ';}							
					
							str_graph+='node [shape=box,color=red]; '
							str_graph+=T_unit[T_unit[j].input].label +'[label=< <TABLE BORDER=---0--- CELLBORDER=---1--- CELLSPACING=---0--- COLOR=---RED--- ><TR><TD><B> AU SLAVE</B></TD></TR><TR><TD><font point-size=---10--- >' + mod1 + '</font></TD></TR><TR><TD><font point-size=---10--- >' + mod2 + '</font></TD></TR><TR><TD><font point-size=---10--- >' + mod3 + '</font></TD></TR><TR><TD><font point-size=---10--- >' + mod4 + '</font></TD></TR></TABLE> >]; ';
							}					
							if (T_unit[T_unit[j].input].type =="Expansion1"){ 
								str_graph+='node [shape=box,color=yellow]; ';
								str_graph+=T_unit[T_unit[j].input].label +'[label=< <TABLE BORDER=---0--- CELLBORDER=---1--- CELLSPACING=---0--- COLOR=---yellow--- ><TR><TD><B> Expansion </B></TD></TR><TR><TD><font point-size=---10--- >1st level</font></TD></TR></TABLE> >]; ';
							}
							if (T_unit[T_unit[j].input].type =="Expansion2"){
								str_graph+='node [shape=box,color=yellow]; ';
								str_graph+=T_unit[T_unit[j].input].label +'[label=< <TABLE BORDER=---0--- CELLBORDER=---1--- CELLSPACING=---0--- COLOR=---yellow--- ><TR><TD><B> Expansion </B></TD></TR><TR><TD><font point-size=---10--- >2nd level</font></TD></TR></TABLE> >]; ';
			
							}
							if (T_unit[T_unit[j].input].type =="RU_Master"){ 
								str_graph+='node [shape=Msquare, color=lightblue]; ';
								str_graph+=T_unit[T_unit[j].input].label +'[label=< <TABLE BORDER=---0--- CELLBORDER=---1--- CELLSPACING=---0--- COLOR=---LIGHTBLUE--- ><TR><TD><B> RU Master </B></TD></TR><TR><TD><font point-size=---10--- >' + T_unit[T_unit[j].input].highlow_power + '</font></TD></TR></TABLE> >]; ';
							}
							if (T_unit[T_unit[j].input].type =="RU_Slave"){ 
								str_graph+='node [shape=box, color=lightblue]; ';
								str_graph+=T_unit[T_unit[j].input].label +'[label=< <TABLE BORDER=---0--- CELLBORDER=---1--- CELLSPACING=---0--- COLOR=---LIGHTBLUE--- ><TR><TD><B> RU Slave </B></TD></TR><TR><TD><font point-size=---10--- >' + T_unit[T_unit[j].input].highlow_power + '</font></TD></TR></TABLE> >]; ';
							}
							//str_graph +=  ' -> ' ;

							/////////////////////////////////
							if (T_unit[j].type =="AU_Master"){
								
								if(T_unit[j].slot_mod1 !== 'blank'){mod1 = T_unit[j].slot_mod1 + ' MHz';}else{mod1 = ' *** ';}							
								if(T_unit[j].slot_mod2 !== 'blank'){mod2 = T_unit[j].slot_mod2 + ' MHz';}else{mod2 = ' *** ';}							
								if(T_unit[j].slot_mod3 !== 'blank'){mod3 = T_unit[j].slot_mod3 + ' MHz';}else{mod3 = ' *** ';}							
								if(T_unit[j].slot_mod4 !== 'blank'){mod4 = T_unit[j].slot_mod4 + ' MHz';}else{mod4 = ' *** ';}							
					
								str_graph+='node [shape=Msquare,color=red]; '
								str_graph+=T_unit[j].label +'[label=< <TABLE BORDER=---0--- CELLBORDER=---1--- CELLSPACING=---0--- COLOR=---RED--- ><TR><TD><B> AU MASTER</B></TD></TR><TR><TD><font point-size=---10--- >' + mod1 + '</font></TD></TR><TR><TD><font point-size=---10--- >' + mod2 + '</font></TD></TR><TR><TD><font point-size=---10--- >' + mod3 + '</font></TD></TR><TR><TD><font point-size=---10--- >' + mod4 + '</font></TD></TR></TABLE> >];';
								}
							
							if (T_unit[j].type =="AU_Slave"){ 
								
								if(T_unit[j].slot_mod1 !== 'blank'){mod1 = T_unit[j].slot_mod1 + ' MHz';}else{mod1 = ' *** ';}							
								if(T_unit[j].slot_mod2 !== 'blank'){mod2 = T_unit[j].slot_mod2 + ' MHz';}else{mod2 = ' *** ';}							
								if(T_unit[j].slot_mod3 !== 'blank'){mod3 = T_unit[j].slot_mod3 + ' MHz';}else{mod3 = ' *** ';}							
								if(T_unit[j].slot_mod4 !== 'blank'){mod4 = T_unit[j].slot_mod4 + ' MHz';}else{mod4 = ' *** ';}							
					
								str_graph+='node [shape=box,color=red]; '
								str_graph+=T_unit[j].label +'[label=< <TABLE BORDER=---0--- CELLBORDER=---1--- CELLSPACING=---0--- COLOR=---RED--- ><TR><TD><B> AU SLAVE</B></TD></TR><TR><TD><font point-size=---10--- >' + mod1 + '</font></TD></TR><TR><TD><font point-size=---10--- >' + mod2 + '</font></TD></TR><TR><TD><font point-size=---10--- >' + mod3 + '</font></TD></TR><TR><TD><font point-size=---10--- >' + mod4 + '</font></TD></TR></TABLE> >];';

							}
							if (T_unit[j].type =="Expansion1"){ 
								str_graph+=' node [shape=box,color=yellow]; ';
								str_graph+=T_unit[j].label +'[label=< <TABLE BORDER=---0--- CELLBORDER=---1--- CELLSPACING=---0--- COLOR=---yellow--- ><TR><TD><B> Expansion </B></TD></TR><TR><TD><font point-size=---10--- >1st level</font></TD></TR></TABLE> >];';
							}
							if (T_unit[j].type =="Expansion2"){ 
								str_graph+='node [shape=box,color=yellow]; ';
								str_graph+=T_unit[j].label +'[label=< <TABLE BORDER=---0--- CELLBORDER=---1--- CELLSPACING=---0--- COLOR=---yellow--- ><TR><TD><B> Expansion </B></TD></TR><TR><TD><font point-size=---10--- >2nd level</font></TD></TR></TABLE> >];';						
							}
							if (T_unit[j].type =="RU_Master"){
								str_graph+='node [shape = Msquare, color=lightblue]; ';
								str_graph+=T_unit[j].label +'[label=< <TABLE BORDER=---0--- CELLBORDER=---1--- CELLSPACING=---0--- COLOR=---LIGHTBLUE--- ><TR><TD><B> RU Master </B></TD></TR><TR><TD><font point-size=---10--- >' + T_unit[j].highlow_power + '</font></TD></TR></TABLE> >];';
							}
							if (T_unit[j].type =="RU_Slave"){
								str_graph+='node [shape=box, color=lightblue]; ';
								str_graph+=T_unit[j].label +'[label=< <TABLE BORDER=---0--- CELLBORDER=---1--- CELLSPACING=---0--- COLOR=---LIGHTBLUE--- ><TR><TD><B> RU Slave </B></TD></TR><TR><TD><font point-size=---10--- >' + T_unit[j].highlow_power + '</font></TD></TR></TABLE> >];';
								}
							//str_graph +=  T_unit[T_unit[j].input].label;
							
							
							//on inverse le sens si on a des AU slave et AU Master
							if (T_unit[T_unit[j].input].type == 'AU_Master' && T_unit[j].type == 'AU_Slave' ){
								str_graph +=   T_unit[j].label + ' -> ' + T_unit[T_unit[j].input].label + ' ;';
								console.log (T_unit[j].label + ' -> ' + T_unit[T_unit[j].input].label + ' ;')
							} else {
								str_graph +=  T_unit[T_unit[j].input].label + ' -> ' + T_unit[j].label + ' ;';
								console.log( T_unit[T_unit[j].input].label + ' -> ' + T_unit[j].label + ' ;')
							}
							
						}

					}
				}
			
			}
			str_graph+='};';
			str_graph += '}';
			//alert(str_graph);
			console.log(str_graph);
			return str_graph;
		}
		
	
				   
var ActiveDeactiv = function ActiveDeactiv(id,row,id_tab){// on se sert de l'id du bouton pour changer sa couleur	
		//body for inactivation
		var bodyunit = document.getElementById("cellule_" + String(id_tab));
		var father = '';
		
		//on trouve le checkbox correspondant a cette unit
		var elem_chkbox = document.getElementsByClassName('but_checkbox');
		for(var k=0;k<elem_chkbox.length;k++){
			if (typeof elem_chkbox[k] !== 'undefined'){
					if(elem_chkbox[k].getAttribute('id_tab')==id_tab){
						break;}}
		}
		
		//unit for disparition: disparition se fait ici dans la desactivation. l'apparition se fait lors du clic car on a besoin de lunit gaphique(lelement) pour le faire apparaitre
		var elem_unit = document.getElementsByClassName('entity');
		for(var x=0;x<elem_unit.length;x++){
			if (typeof elem_unit[x] !== 'undefined'){
				if(elem_unit[x].getAttribute('id')==id_tab){
					break;}}
		}

			
	    if (bodyunit.className=='body_unit_inactive'){
			console.log('======== Activation de id_tab : ' + id_tab + '==============');	
		
			// SOLUTION 1 : recherche du father dynamiquement
			//T_unit[id_tab].activated = "true";
			//bodyunit.className='body_unit';
			//if (T_unit[id_tab].type !== "AU_Master"){
			//	father =Fetch_Father(row, id_tab); //on recupere l'id du father
			
			// SOLUTION 2 : on connait deja le pere, on regarde s'il est active
			if (T_unit[id_tab].type == "AU_Master"){// si cest un AU+Master on n'attend pas que l'input soit active
				console.log(" *** Activation du AU Master (No father)");
				T_unit[id_tab].activated = true;
				bodyunit.className='body_unit';
				elem_chkbox[k].checked = true;
			}else{	
				console.log("****Activation NON AU_Master");
				if (T_unit[id_tab].type == "Expansion1"  || T_unit[id_tab].type == "Expansion2" ){nb_EU++;}
				if (typeof T_unit[T_unit[id_tab].input] !== 'undefined'){
					//alert("-- father defined : " + T_unit[id_tab].input);
					
					if (T_unit[T_unit[id_tab].input].activated == true){
						console.log("-- father is activated");		

						//test sorti pour eviter lajout de lhtml
						//if (Save_Output(T_unit[id_tab].input,id_tab)){//on a trouve le pere, on verifie quon puisse bien enregistrer l'unit comme une output du pere
						//T_unit[id_tab].input = father;
						console.log('>> Output recorded');
						bodyunit.className='body_unit';
						elem_chkbox[k].checked = true;
						T_unit[id_tab].activated = true;
						console.log('-- father is : ' + T_unit[id_tab].input);
						//}else{	
						//alert('This unit is limited to 6 output');
						//return = false; 
					}else {	elem_chkbox[k].checked = false; alert('Father unit is not activated');	}
				}
			}
	   }else{
		   
			console.log('======== DESActivation de id_tab : ' + id_tab + '==============');	
			if (T_unit[id_tab].type == "Expansion1"  || T_unit[id_tab].type == "Expansion2" ){
				update_ip(id_tab,row,false); // on efface les IP servicess
				nb_EU--;}
			if (T_unit[id_tab].type == "RU_Master"){
					var elem_IP = document.getElementsByClassName('entity');
					for (var n=0; n<elem_IP.length;n++){
						if(id_tab == elem_IP[n].getAttribute('id_cell')){
							elem_IP[n].setAttribute("class", "entity hide_IP");
							T_unit[id_tab].ipserv_activ = false;
						}
					}			
			nb_RUM--;}// on efface les IP servicess
							
				
			Deactiv_Enfant(id_tab);
			T_unit[id_tab].activated = false;
			
			bodyunit.className='body_unit_inactive';

			if (elem_chkbox[k] !== null){
				//alert(elem_chkbox[k]);
				//elem_chkbox[k].style.display = "none";
				
				//bodyunit.style.display = "none";
				elem_chkbox[k].checked = false;
			}
			console.log("free output for : " + id_tab);
			Free_Output(id_tab);
			Free_Output_parent(id_tab);
			elem_unit[x].style.display = "none";
		}
		draw_it();
	}
	
	var Free_Output_parent = function(id_tab){
		 if (typeof T_unit[T_unit[id_tab].input] != 'undefined') {
			if (T_unit[T_unit[id_tab].input].output1 == id_tab){T_unit[T_unit[id_tab].input].output1=-1;}
			if (T_unit[T_unit[id_tab].input].output2 == id_tab){T_unit[T_unit[id_tab].input].output2=-1;}
			if (T_unit[T_unit[id_tab].input].output3 == id_tab){T_unit[T_unit[id_tab].input].output3=-1;}
			if (T_unit[T_unit[id_tab].input].output4 == id_tab){T_unit[T_unit[id_tab].input].output4=-1;}
			if (T_unit[T_unit[id_tab].input].output5 == id_tab){T_unit[T_unit[id_tab].input].output5=-1;}
			if (T_unit[T_unit[id_tab].input].output6 == id_tab){T_unit[T_unit[id_tab].input].output6=-1;}
			}
		 return true; // pas de slot free pour les output;
	 }
	 
	 	var Free_Output = function(id_tab){
		 if (typeof T_unit[id_tab] != 'undefined') {
			console.log('Father output1 : ' + T_unit[id_tab].output1);
			T_unit[id_tab].output1 = '-1';
			console.log('Father output2 : ' + T_unit[id_tab].output2);
			T_unit[id_tab].output2 = '-1';
			console.log('Father output3 : ' + T_unit[id_tab].output3);
			T_unit[id_tab].output3 = '-1';
			console.log('Father output4 : ' + T_unit[id_tab].output4);
			T_unit[id_tab].output4 = '-1';
			console.log('Father output5 : ' + T_unit[id_tab].output5);
			T_unit[id_tab].output5 = '-1';
			console.log('Father output6 : ' + T_unit[id_tab].output6);
			T_unit[id_tab].output6 = '-1';
		}
		 return true; // pas de slot free pour les output;
	 }
	 
	var id_tab2id_div = function (id_tab){
		console.log ("convert id_tab : " + id_tab + " to id_button.")
		var x = document.getElementsByClassName("but_checkbox");
		var i;
		for (i = 0; i < x.length; i++) {
			console.log ("bouton : " + x[i].id + " with id_tab : " + x[i].getAttribute('id_tab'));
			if (x[i].getAttribute('id_tab') == id_tab){
				console.log ("bouton trouve : " + x[i].id);
				return x[i].id;
			}
		}
		return "-1";
	}
	
	var Deactiv_Enfant = function(id_tab){
			 console.log('============ Desactive Enfants : ' + id_tab + ' =============');
			var id_button = 0;
			
			if (typeof T_unit[T_unit[id_tab].output1] !== 'undefined') {
				console.log('desactiv output1 : ' + T_unit[id_tab].output1);
				id_button = id_tab2id_div (T_unit[id_tab].output1);
				if (T_unit[T_unit[id_tab].output1].activated == true){
					ActiveDeactiv(id_button,0,T_unit[id_tab].output1);}
			}else{console.log('     > no output1');}					//row is usefull only for activation
					
					
			if (typeof T_unit[T_unit[id_tab].output2] !== 'undefined') {
				console.log('desactiv output2 : ' + T_unit[id_tab].output2);
				id_button = id_tab2id_div (T_unit[id_tab].output2);
				if (T_unit[T_unit[id_tab].output2].activated == true){
					ActiveDeactiv(id_button,0,T_unit[id_tab].output2);} 
			}else{console.log('     > no output2');}					//row is usefull only for activation
					

			if (typeof T_unit[T_unit[id_tab].output3] !== 'undefined') {
				console.log('desactiv output3 : ' + T_unit[id_tab].output3);
				id_button = id_tab2id_div (T_unit[id_tab].output3);
				if (T_unit[T_unit[id_tab].output3].activated == true){
					ActiveDeactiv(id_button,0,T_unit[id_tab].output3);}
			}else{console.log('     > no output3');}					//row is usefull only for activation
			
					

			if (typeof T_unit[T_unit[id_tab].output4] !== 'undefined') {
				console.log('desactiv output4 : ' + T_unit[id_tab].output4);
				id_button = id_tab2id_div (T_unit[id_tab].output4);
				if (T_unit[T_unit[id_tab].output4].activated == true){
					ActiveDeactiv(id_button,0,T_unit[id_tab].output4);}
			}else{console.log('     > no output4');}					//row is usefull only for activation
			
					

			if (typeof T_unit[T_unit[id_tab].output5] !== 'undefined') {
				console.log('desactiv output5 : ' + T_unit[id_tab].output5);
				id_button = id_tab2id_div (T_unit[id_tab].output5);
				if (T_unit[T_unit[id_tab].output5].activated == true){
					ActiveDeactiv(id_button,0,T_unit[id_tab].output5);}
			}else{console.log('     > no output5');}					//row is usefull only for activation
			
					

			if (typeof T_unit[T_unit[id_tab].output6] !== 'undefined') {
				console.log('desactiv output6 : ' + T_unit[id_tab].output6);
				id_button = id_tab2id_div (T_unit[id_tab].output6);
				if (T_unit[T_unit[id_tab].output6].activated == true){
					ActiveDeactiv(id_button,0,T_unit[id_tab].output6);} 
			}else{console.log('     > no output6');}					//row is usefull only for activation
			
		}
		 
	var Save_Output = function(father,id_tab){
		 console.log('============ Save Output =============');
		 if (typeof T_unit[father] !== 'undefined') {
			console.log('Father output1 : ' + T_unit[father].output1);
			if (T_unit[father].output1 == '-1'){T_unit[father].output1 = id_tab; return true;}
			console.log('Father output2 : ' + T_unit[father].output2);
			if (T_unit[father].output2 == '-1'){T_unit[father].output2 = id_tab; return true;}
			console.log('Father output3 : ' + T_unit[father].output3);
			if (T_unit[father].output3 == '-1'){T_unit[father].output3 = id_tab; return true;}
			console.log('Father output4 : ' + T_unit[father].output4);
			if (T_unit[father].output4 == '-1'){T_unit[father].output4 = id_tab; return true;}
			console.log('Father output5 : ' + T_unit[father].output5);
			if (T_unit[father].output5 == '-1'){T_unit[father].output5 = id_tab; return true;}
			console.log('Father output6 : ' + T_unit[father].output6);
			if (T_unit[father].output6 == '-1'){T_unit[father].output6 = id_tab; return true;}
			return false;
		 }
		 return true; // pas de slot free pour les output;
	 }
	  
	 function AddNewAU_Slave(button_RowNumber){
			console.log('======== NEW AU SLAVE ============');
			
			var elements = document.getElementsByClassName('unit_slave');
			var id_tab = 0;
			
			//on a quun ru_unit par ligne
			for (var i = 0; i<cmpt_unit; i++){
				if (typeof elements[i] !== 'undefined'){
					//alert(button_RowNumber);
					//alert('elements[i].id : ' + elements[i].id + 'elements[i].row_number : ' + elements[i].getAttribute('row_number'));
					if (elements[i].getAttribute('row_number') == button_RowNumber){
						//alert('oui');
						if (elements[i].style.display == "none"){
							elements[i].style.display = "";	console.log('on a trouve le 1 er RU Slave');
							var father = T_unit[elements[i].id].input;
							Save_Output(father,elements[i].id)
							ActiveDeactiv(0,button_RowNumber,elements[i].id);//i + 2 donne le numero du row						
							break;
						}
					}
				}
			}	
			console.log('fin de la boucle');
		draw_it();			
			
	}
		
	function AddNewRU_Slave(button_RowNumber){
			console.log('======== NEW RU SLAVE ============');
			var elements = document.getElementsByClassName('ru_unit_slave');
			var id_tab = 0;
			
			//on a quun ru_unit par ligne
			for (var i = 0; i<cmpt_unit; i++){
				if (typeof elements[i] !== 'undefined'){
					//alert('elements[i].id : ' + elements[i].id + 'elements[i].row_number : ' + elements[i].getAttribute('row_number'));
					if (elements[i].getAttribute('row_number') == button_RowNumber){
						if (elements[i].style.display == "none"){
							elements[i].style.display = "";	console.log('on a trouve le 1 er RU Slave');
							Save_Output(T_unit[elements[i].id].input,elements[i].id);
							ActiveDeactiv(0,button_RowNumber,elements[i].id);//i + 2 donne le numero du row						
							
							//on verifie que le pere de l'element respecte la limit de slave
							limit_slave_hplp(T_unit[elements[i].id].input,button_RowNumber);
							break;
						}
					}
				}
			}	
			console.log('pas trouve');
			

draw_it();			
		
	}
		
	function AddNewRU_Master(button_RowNumber,type_recherche){
			console.log('======== NEW RU MASTER ============');
			type_recherche = type_recherche || null;
			
			//alert("on ajoute au row : " + button_RowNumber);
			//alert("type recherche : " + type_recherche)
			var id_tab = 0;
			
			

			var elements = document.getElementsByClassName('ru_unit');
			//on a quun ru_unit par ligne
			for (var i = 0; i<cmpt_unit; i++){
				if (typeof elements[i] !== 'undefined'){
					//alert('elements[i].id : ' + elements[i].id + 'elements[i].row_number : ' + elements[i].getAttribute('row_number'));
					if (elements[i].getAttribute('row_number') == button_RowNumber){
						console.log('ici');
						if (elements[i].style.display == "none"){
							console.log('RU Master deja en place');
							
							Save_Output(T_unit[elements[i].id].input,elements[i].id);
							
							elements[i].style.display = "";
							parseInt(button_RowNumber);
							ActiveDeactiv(0,button_RowNumber,elements[i].id);//i + 3 donne le numero du row
							ip_activated(elements[i].id);
							change_module_AUM(elements[i].id,button_RowNumber);
							break;
						}
					}
				}
			}
		console.log('fin de la boucle');
		
		
		//Sauver la sortie ici ou pas ?
		if (i == cmpt_unit)	{
			AddNewRU(button_RowNumber,type_recherche);
			console.log('On ajoute New RU');}				
		
		draw_it();
	}
	 
	function AddNewAU(button_RowNumber){
		console.log('======== NEW AU MASTER ============');
		parseInt(compt_row);
		compt_row++;
			
		var new_AU=template_AU; 		// on recupe le template dajout de ligne
										//on change les indice dans la chaine HTML dajout dune ligne du tablo		
			
			//on cree une Unit dans le programme
			var	outpt1='-1'; 
			var outpt2='-1';
			var outpt3='-1';
			var outpt4='-1';
			var	outpt5='-1';
			var outpt6='-1';
			
			nb_network++; // une nouvelle branche
			nb_RUM++;
			
			var AU_M_label = "AU"+button_RowNumber+"_M";
			var AU_M = cmpt_unit;
			cmpt_unit++;
			var id_AUM = cmpt_unit;
			new_AU = new_AU.replace('XXXAUM',String(cmpt_unit));
			new_AU = new_AU.replace('XXXAUM',String(cmpt_unit));
			new_AU = new_AU.replace('XXXAUM',String(cmpt_unit));
			new_AU = new_AU.replace('XXXAUM',String(cmpt_unit));
			new_AU = new_AU.replace('XXXAUM',String(cmpt_unit));
			new_AU = new_AU.replace('XXXAUM',String(cmpt_unit));
			new_AU = new_AU.replace('XXXAUM',String(cmpt_unit));
			new_AU = new_AU.replace('XXXAUM',String(cmpt_unit));
			new_AU = new_AU.replace('XXXAUM',String(cmpt_unit));
			new_AU = new_AU.replace('XXXAUM',String(cmpt_unit));	//la 2e ligne est pour l'id_tab	
			new_AU = new_AU.replace('XXXAUM',String(cmpt_unit));	//la 2e ligne est pour lacellule du body_unit				
			T_unit[cmpt_unit] = new Unit(id_AUM, "AU_Master", false, -1, outpt1, outpt2, outpt3, outpt4, outpt5, outpt6, AU_M_label); 
			
			var AU_S1_label =  "AU"+button_RowNumber+"_S1";
			cmpt_unit++;
			var id_AUS1 = cmpt_unit;
			new_AU = new_AU.replace('XXXAUS1',String(cmpt_unit));
			new_AU = new_AU.replace('XXXAUS1',String(cmpt_unit));
			new_AU = new_AU.replace('XXXAUS1',String(cmpt_unit));
			new_AU = new_AU.replace('XXXAUS1',String(cmpt_unit));
			new_AU = new_AU.replace('XXXAUS1',String(cmpt_unit));
			new_AU = new_AU.replace('XXXAUS1',String(cmpt_unit));//la 2e ligne est pour l'id_tab	
			new_AU = new_AU.replace('XXXAUS1',String(cmpt_unit));			
			T_unit[cmpt_unit] = new Unit(id_AUS1, "AU_Slave", false, id_AUM, outpt1, outpt2, outpt3, outpt4, outpt5, outpt6, AU_S1_label);
			
			var AU_S2_label = "AU"+button_RowNumber+"_S2";
			cmpt_unit++;
			var id_AUS2 = cmpt_unit;
			new_AU = new_AU.replace('XXXAUS2',String(cmpt_unit));
			new_AU = new_AU.replace('XXXAUS2',String(cmpt_unit));
			new_AU = new_AU.replace('XXXAUS2',String(cmpt_unit));
			new_AU = new_AU.replace('XXXAUS2',String(cmpt_unit));
			new_AU = new_AU.replace('XXXAUS2',String(cmpt_unit));
			new_AU = new_AU.replace('XXXAUS2',String(cmpt_unit));//la 2e ligne est pour l'id_tab
			new_AU = new_AU.replace('XXXAUS2',String(cmpt_unit));			
			T_unit[cmpt_unit] = new Unit(id_AUS2, "AU_Slave", false, id_AUM, outpt1, outpt2, outpt3, outpt4, outpt5, outpt6, AU_S2_label);
			
			nb_EU++;
			//cette EU est hidden est desactive a la base
			var EU_1_label = "EU"+button_RowNumber+"_"+nb_EU+"__1";
			cmpt_unit++;
			var id_EU1 = cmpt_unit;			
			new_AU = new_AU.replace('XXXEU1', String(cmpt_unit));
			new_AU = new_AU.replace('XXXEU1', String(cmpt_unit));//la 2e ligne est pour l'id_tab
			new_AU = new_AU.replace('XXXEU1', String(cmpt_unit));
			new_AU = new_AU.replace('XXXEU1', String(cmpt_unit));
			new_AU = new_AU.replace('XXXEU1', String(cmpt_unit));
			new_AU = new_AU.replace('XXXEU1', String(cmpt_unit));
			new_AU = new_AU.replace('XXXEU1', String(cmpt_unit));
			//var father = Fetch_Father(compt_row,id_EU1,"AU_Master",button_RowNumber);
			//console.log('father de EU1 added : ' + father);
			T_unit[cmpt_unit] = new Unit(id_EU1, "Expansion1", false, id_AUM, outpt1, outpt2, outpt3, outpt4, outpt5, outpt6,EU_1_label);

			
			
			var RU_M_label = "RU"+button_RowNumber+"_"+nb_RUM+"__M";
			cmpt_unit++; 
			var id_RUM = cmpt_unit;
			new_AU = new_AU.replace('XXXRUM', String(cmpt_unit));
			new_AU = new_AU.replace('XXXRUM', String(cmpt_unit));
			new_AU = new_AU.replace('XXXRUM', String(cmpt_unit));
			new_AU = new_AU.replace('XXXRUM', String(cmpt_unit));
			new_AU = new_AU.replace('XXXRUM', String(cmpt_unit));
			new_AU = new_AU.replace('XXXRUM', String(cmpt_unit));
			new_AU = new_AU.replace('XXXRUM', String(cmpt_unit));
			T_unit[cmpt_unit] = new Unit(id_RUM, "RU_Master", false, id_AUM, outpt1, outpt2, outpt3, outpt4, outpt5, outpt6,RU_M_label);
			
			var RU_S1_label = "RU"+button_RowNumber+"_"+nb_RUM+"__S1";
			cmpt_unit++; 
			var id_RUS1 = cmpt_unit;
			new_AU = new_AU.replace('XXXRUS1', String(cmpt_unit));
			new_AU = new_AU.replace('XXXRUS1', String(cmpt_unit));
			new_AU = new_AU.replace('XXXRUS1', String(cmpt_unit));
			new_AU = new_AU.replace('XXXRUS1', String(cmpt_unit));
			new_AU = new_AU.replace('XXXRUS1', String(cmpt_unit));
			new_AU = new_AU.replace('XXXRUS1', String(cmpt_unit));
			new_AU = new_AU.replace('XXXRUS1', String(cmpt_unit));
			T_unit[cmpt_unit] = new Unit(id_RUS1, "RU_Slave", false, id_RUM, outpt1, outpt2, outpt3, outpt4, outpt5, outpt6,RU_S1_label);
			
			var RU_S2_label = "RU"+button_RowNumber+"_"+nb_RUM+"__S2";
			cmpt_unit++;
			var id_RUS2 = cmpt_unit;
			new_AU = new_AU.replace('XXXRUS2', String(cmpt_unit));
			new_AU = new_AU.replace('XXXRUS2', String(cmpt_unit));
			new_AU = new_AU.replace('XXXRUS2', String(cmpt_unit));
			new_AU = new_AU.replace('XXXRUS2', String(cmpt_unit));
			new_AU = new_AU.replace('XXXRUS2', String(cmpt_unit));
			new_AU = new_AU.replace('XXXRUS2', String(cmpt_unit));
			new_AU = new_AU.replace('XXXRUS2', String(cmpt_unit));
			T_unit[cmpt_unit] = new Unit(id_RUS2, "RU_Slave", false, id_RUM, outpt1, outpt2, outpt3, outpt4, outpt5, outpt6,RU_S2_label);
			
			var RU_S3_label = "RU"+button_RowNumber+"_"+nb_RUM+"__S3";
			cmpt_unit++;
			var id_RUS3 = cmpt_unit;
			new_AU = new_AU.replace('XXXRUS3', String(cmpt_unit));
			new_AU = new_AU.replace('XXXRUS3', String(cmpt_unit));
			new_AU = new_AU.replace('XXXRUS3', String(cmpt_unit));
			new_AU = new_AU.replace('XXXRUS3', String(cmpt_unit));
			new_AU = new_AU.replace('XXXRUS3', String(cmpt_unit));
			new_AU = new_AU.replace('XXXRUS3', String(cmpt_unit));
			new_AU = new_AU.replace('XXXRUS3', String(cmpt_unit));
			T_unit[cmpt_unit] = new Unit(id_RUS3, "RU_Slave", false, id_RUM, outpt1, outpt2, outpt3, outpt4, outpt5, outpt6,RU_S3_label);
			
			var RU_S4_label = "RU"+button_RowNumber+"_"+nb_RUM+"__S4";
			cmpt_unit++;
			var id_RUS4 = cmpt_unit;
			new_AU = new_AU.replace('XXXRUS4', String(cmpt_unit));
			new_AU = new_AU.replace('XXXRUS4', String(cmpt_unit));
			new_AU = new_AU.replace('XXXRUS4', String(cmpt_unit));
			new_AU = new_AU.replace('XXXRUS4', String(cmpt_unit));
			new_AU = new_AU.replace('XXXRUS4', String(cmpt_unit));
			new_AU = new_AU.replace('XXXRUS4', String(cmpt_unit));
			new_AU = new_AU.replace('XXXRUS4', String(cmpt_unit));
			T_unit[cmpt_unit] = new Unit(id_RUS4, "RU_Slave", false, id_RUM, outpt1, outpt2, outpt3, outpt4, outpt5, outpt6,RU_S4_label);

			var RU_S5_label = "RU"+button_RowNumber+"_"+nb_RUM+"__S5";
			cmpt_unit++;
			var id_RUS5 = cmpt_unit;
			new_AU = new_AU.replace('XXXRUS5', String(cmpt_unit));
			new_AU = new_AU.replace('XXXRUS5', String(cmpt_unit));
			new_AU = new_AU.replace('XXXRUS5', String(cmpt_unit));
			new_AU = new_AU.replace('XXXRUS5', String(cmpt_unit));
			new_AU = new_AU.replace('XXXRUS5', String(cmpt_unit));
			new_AU = new_AU.replace('XXXRUS5', String(cmpt_unit));
			new_AU = new_AU.replace('XXXRUS5', String(cmpt_unit));
			T_unit[cmpt_unit] = new Unit(id_RUS5, "RU_Slave", false, id_RUM, outpt1, outpt2, outpt3, outpt4, outpt5, outpt6,RU_S5_label);

			
			new_AU = new_AU.replace(/WWW/g, compt_row); // indice du row des RUM de EU
			console.log('www : ' + compt_row);
			var num_nouv_row = compt_row;
			compt_row++;
			new_AU = new_AU.replace(/VVV/g, compt_row);//indice du row des EU
			console.log('VVV : ' + compt_row);
			compt_row++;
			new_AU = new_AU.replace(/UUU/g, compt_row);//indice du rang des RUM du Master
			console.log('UUU : ' + compt_row);
			
			compt_row++;
			new_AU = new_AU.replace(/RRR/g, compt_row);//indice du rang du button AU
			console.log('RRR : ' + compt_row);
			
			//alert(new_AU);
		//alert(RowNumber);			
		parseInt(button_RowNumber);
		//RowNumber = parseInt(RowNumber);
		//alert(RowNumber);
		
		var idElt = 'ROW_' + String(button_RowNumber); 
	       console.log('Insert at row : ' + idElt);
			$(new_AU).insertAfter(document.getElementById(idElt));
			//window.scrollBy(0,300);
			
			hide_unit(id_AUS1,'unit_slave');
			hide_unit(id_AUS2,'unit_slave');
			hide_unit(id_EU1,'eu_unit');
			hide_unit(id_RUM,'ru_unit');			
			hide_unit(id_RUS1,'ru_unit_slave');
			hide_unit(id_RUS2,'ru_unit_slave');
			hide_unit(id_RUS3,'ru_unit_slave');
			hide_unit(id_RUS4,'ru_unit_slave');
			hide_unit(id_RUS5,'ru_unit_slave');
			
			ActiveDeactiv(0,num_nouv_row, id_AUM);
			
			if (EU==true){Show_EU();}else{Hide_EU();}
			
			draw_it();
		}
		
		function Check_state_Unit(){//function de debuggage
			for (var k= 1;k <=cmpt_unit;k++){
				console.log('Unit : ' + T_unit[k].id + ' -- type : ' + T_unit[k].type + ' -- Input : ' + T_unit[k].input + ' -- ouput1 : ' + T_unit[k].ouput1 + ' -- ouput2 : ' + T_unit[k].ouput2 + ' -- ouput3 : ' + T_unit[k].ouput3 + ' -- ouput4 : ' + T_unit[k].ouput4)
			}
			
		}
		
		
		
		function draw_it(){
			Check_state_Unit();//pr debug	
			 var j=0;
	
	 //on clear le canvas
	 
	   var canvas = document.getElementById("canvas");
		var ctx = canvas.getContext("2d");
		ctx.clearRect ( 0 , 0 , canvas.width, canvas.height );
	 for (j=1; j<cmpt_unit; j++){// 0 is undefined !!!
				//if (T_unit[j].activated == "true"){
					console.log('Current Unit : ' + T_unit[j].id + ' -- son input : ' + T_unit[j].input + ' : ');
					if (T_unit[j].input !== ''){
						if (typeof T_unit[T_unit[j].input] !== 'undefined'){
							//on regarde le type de linput pour choisir la fonction a utiliser
							console.log('id Enfant : ' + T_unit[j].id);
							console.log('type du father : ' + T_unit[T_unit[j].input].type);
							//alert(T_unit[T_unit[j].input].type);
							//alert(T_unit[j].type);
							if(T_unit[T_unit[j].input].type == "AU_Master"){
									if(T_unit[j].type !== "AU_Master" && T_unit[j].type !== "AU_Slave"){ // les slave n'ont pas de cable ki vont au master
										if(T_unit[j].input > 0){
										console.log('Trace Cable : input : ' + T_unit[j].input);
										draw_cable_AUM(T_unit[j].input,T_unit[j].id);
						//alert('canvas');
										}
									}
								}
							if(T_unit[T_unit[j].input].type == "Expansion1" && T_unit[T_unit[j].input].activated == true){
								if(T_unit[j].activated == true){ // les slave n'ont pas de cable ki vont au master
										draw_cable_EU1(T_unit[j].input,T_unit[j].id);
								}
							}
							
							if(T_unit[T_unit[j].input].type == "Expansion2"  && T_unit[T_unit[j].input].activated == true){
								if(T_unit[j].activated == true){ 
										draw_cable_EU2(T_unit[j].input,T_unit[j].id);
								}
					
							}
						}
					}
			
	}
		}
		
	function hide_unit(id_unit,class_unit){//pour les RU Slave : 'ru_unit_slave' / pour RUM : 'ru_unit / EU1 : eu unit
		console.log('Hide : ' + id_unit + 'class : ' + class_unit);
			var elements_ = document.getElementsByClassName(class_unit);
			for (var i = 0; i<cmpt_unit; i++){
				if (typeof elements_[i] !== 'undefined'){
					console.log("element a cache ? " + elements_[i].id)
					if (elements_[i].id == id_unit){ //on hi
						elements_[i].style.display = "none";
					}
				}
			}
	}
	
	
	function SLOT_EU_DISPO_sur_AUM(button_RowNumber){
			
			var elements = document.getElementsByClassName('eu_unit');
			var id_tab = 0;
			for (var i = 0; i<cmpt_unit; i++){
				if (typeof elements[i] !== 'undefined'){
					if (elements[i].getAttribute('row_number') == button_RowNumber){
						//alert('oui');
						if (elements[i].style.display == "none"){
							return true;
						}
					}
				}
			}	
			console.log('pas trouve');
			return false;			
	}
	
	
	function SAVE_EU_sur_AUM(button_RowNumber){
			var elements = document.getElementsByClassName('eu_unit');
			var id_tab = 0;

			for (var i = 0; i<cmpt_unit; i++){
				if (typeof elements[i] !== 'undefined'){
					if (elements[i].getAttribute('row_number') == button_RowNumber){
						if (elements[i].style.display == "none"){
							//slot dispo pret a accepter le nouvel EU, mais on doit regarder si pere a des outputs dispo
							//on sauve l'output du pere
							if (Save_Output(T_unit[elements[i].id].input,elements[i].id)){//on a trouve le pere, on verifie quon puisse bien enregistrer l'unit comme une output du pere
								elements[i].style.display = "";
								ActiveDeactiv(0,button_RowNumber,elements[i].id);
								draw_it();
								return elements[i].id;
							}else{
								//alert('Units accept 6 outputs maximum.');
								draw_it();								
								return -1;
							}						
						}
					}
				}
			}	
			console.log('pas trouve');
			return "";			
	}
	
	
	function get_nb_slaves(id){
		return 2;
	}
	
	
	
	function AddNewEU1(button_RowNumber){
		
		console.log('======== NEW EU 1 ============');
		parseInt(compt_row);
		Show_EU();
		Show_EU();
		Show_EU();
		Show_EU();
		Show_EU();
		Show_EU();
		Show_EU();
		

		var SLOT_EU_DISPO = SLOT_EU_DISPO_sur_AUM(button_RowNumber-1);
		var SLOT_RU_DISPO = SLOT_RU_DISPO_sur_AUM(button_RowNumber-1);
		var id_newEU;
		var elements;
		var i;
		elements = document.getElementsByClassName('ru_unit');
		
		
		if ( SLOT_EU_DISPO == true){ //il y a un slot available pour une EU
			id_newEU = SAVE_EU_sur_AUM(button_RowNumber-1);// on recupere lindice de la nouvelle EU (pour nos input)
			if (id_newEU == -1){return;} // records failer
			if(SLOT_RU_DISPO == true){	//oui, mais il faut changer linput du RUM quand meme
				for (i = 0; i<=cmpt_unit; i++){	
					if (typeof elements[i] !== 'undefined'){
						if (elements[i].getAttribute('row_number') == button_RowNumber-1){
							T_unit[elements[i].id].input=id_newEU;
						}
					}
				}
			}else{ //il y a un RU, on le cherche et on le decale
				for (i = 0; i<=cmpt_unit; i++){	if (typeof elements[i] !== 'undefined'){if (elements[i].getAttribute('row_number') == button_RowNumber-1){
							if (elements[i].style.display == ""){
								var highlow_current_RUM = 	T_unit[elements[i].id].highlow_power;	//recherche highlow_power
								var nb_slaves_current_RUM = get_nb_slaves(elements[i].id);			//nb slave attache								
								ActiveDeactiv(0,button_RowNumber-1,elements[i].id);//on desactive celui en cours
								elements[i].style.display = "none"; // on le cache
								T_unit[elements[i].id].input=id_newEU;//on prepare linput du RU pour la prochaine activation
							}	
						}
					}
				}				
				AddNewRU(button_RowNumber,"AU_Master")
			}
		}//au est sur le row en dessous
		else{
		compt_row++;
			
		var new_EU=template_EU1; 		// on recupe le template dajout de ligne
										//on change les indice dans la chaine HTML dajout dune ligne du tablo		
			//on cree une Unit dans le programme
			var	outpt1='-1'; 
			var outpt2='-1';
			var outpt3='-1';
			var outpt4='-1';
			var	outpt5='-1';
			var outpt6='-1';
			
			nb_RUM++;
			nb_EU++;

			var EU_1_label = "EU"+button_RowNumber+"_"+nb_EU+"__1";
			cmpt_unit++;
			var id_EU1 = cmpt_unit;		
		
			new_EU = new_EU.replace('XXXEU1', String(cmpt_unit));
			new_EU = new_EU.replace('XXXEU1', String(cmpt_unit));//la 2e ligne est pour l'id_tab
			new_EU = new_EU.replace('XXXEU1', String(cmpt_unit));
			new_EU = new_EU.replace('XXXEU1', String(cmpt_unit));
			new_EU = new_EU.replace('XXXEU1', String(cmpt_unit));
			new_EU = new_EU.replace('XXXEU1', String(cmpt_unit));
			new_EU = new_EU.replace('XXXEU1', String(cmpt_unit));
			var father = Fetch_Father(compt_row,id_EU1,"AU_Master",button_RowNumber);
			console.log('father de EU1 added : ' + father);
			if (Save_Output(father,id_EU1)){//on a trouve le pere, on verifie quon puisse bien enregistrer l'unit comme une output du pere
				//on ajoute l'unit au tableau
				T_unit[cmpt_unit] = new Unit(id_EU1, "Expansion1", false, father, outpt1, outpt2, outpt3, outpt4, outpt5, outpt6,EU_1_label);
			}else{
				//alert('Units accept 6 outputs maximum.'); 
				cmpt_unit--, nb_RUM--;compt_row--;
				return;
			}
			
			var EU_2_label = "EU"+button_RowNumber+"_"+nb_EU+"__2";
			cmpt_unit++;
			var id_EU2 = cmpt_unit;	
			new_EU = new_EU.replace('XXXEU2', String(cmpt_unit));
			new_EU = new_EU.replace('XXXEU2', String(cmpt_unit));
			new_EU = new_EU.replace('XXXEU2', String(cmpt_unit));
			new_EU = new_EU.replace('XXXEU2', String(cmpt_unit));
			new_EU = new_EU.replace('XXXEU2', String(cmpt_unit));
			new_EU = new_EU.replace('XXXEU2', String(cmpt_unit));
			new_EU = new_EU.replace('XXXEU2', String(cmpt_unit));
			new_EU = new_EU.replace('XXXEU2', String(cmpt_unit));
			T_unit[cmpt_unit] = new Unit(id_EU2, "Expansion2", false, id_EU1, outpt1, outpt2, outpt3, outpt4, outpt5, outpt6,EU_2_label);
			
			var RU_M_label = "RU"+button_RowNumber+"_"+nb_RUM+"__M";
			cmpt_unit++; 
			var id_RUM = cmpt_unit;
			new_EU = new_EU.replace('XXXRUM', String(cmpt_unit));
			new_EU = new_EU.replace('XXXRUM', String(cmpt_unit));
			new_EU = new_EU.replace('XXXRUM', String(cmpt_unit));
			new_EU = new_EU.replace('XXXRUM', String(cmpt_unit));
			new_EU = new_EU.replace('XXXRUM', String(cmpt_unit));
			new_EU = new_EU.replace('XXXRUM', String(cmpt_unit));
			new_EU = new_EU.replace('XXXRUM', String(cmpt_unit));
			new_EU = new_EU.replace('XXXRUM', String(cmpt_unit));
			T_unit[cmpt_unit] = new Unit(id_RUM, "RU_Master", false, id_EU1, outpt1, outpt2, outpt3, outpt4, outpt5, outpt6,RU_M_label);
			
			var RU_S1_label = "RU"+button_RowNumber+"_"+nb_RUM+"__S1";
			cmpt_unit++;
			var id_RUS1 = cmpt_unit;
			new_EU = new_EU.replace('XXXRUS1', String(cmpt_unit));
			new_EU = new_EU.replace('XXXRUS1', String(cmpt_unit));
			new_EU = new_EU.replace('XXXRUS1', String(cmpt_unit));
			new_EU = new_EU.replace('XXXRUS1', String(cmpt_unit));
			new_EU = new_EU.replace('XXXRUS1', String(cmpt_unit));
			new_EU = new_EU.replace('XXXRUS1', String(cmpt_unit));
			new_EU = new_EU.replace('XXXRUS1', String(cmpt_unit));
			new_EU = new_EU.replace('XXXRUS1', String(cmpt_unit));
			T_unit[cmpt_unit] = new Unit(id_RUS1, "RU_Slave", false, id_RUM, outpt1, outpt2, outpt3, outpt4, outpt5, outpt6,RU_S1_label);
			
			var RU_S2_label = "RU"+button_RowNumber+"_"+nb_RUM+"__S2";
			cmpt_unit++;  
			var id_RUS2 = cmpt_unit;
			new_EU = new_EU.replace('XXXRUS2',cmpt_unit);
			new_EU = new_EU.replace('XXXRUS2', String(cmpt_unit));
			new_EU = new_EU.replace('XXXRUS2', String(cmpt_unit));
			new_EU = new_EU.replace('XXXRUS2', String(cmpt_unit));
			new_EU = new_EU.replace('XXXRUS2', String(cmpt_unit));
			new_EU = new_EU.replace('XXXRUS2', String(cmpt_unit));
			new_EU = new_EU.replace('XXXRUS2', String(cmpt_unit));
			new_EU = new_EU.replace('XXXRUS2', String(cmpt_unit));
			T_unit[cmpt_unit] = new Unit(id_RUS2, "RU_Slave", false, id_RUM, outpt1, outpt2, outpt3, outpt4, outpt5, outpt6, RU_S2_label);
			
			var RU_S3_label = "RU"+button_RowNumber+"_"+nb_RUM+"__S3";
			cmpt_unit++;
			var id_RUS3 = cmpt_unit;
			new_EU = new_EU.replace('XXXRUS3', String(cmpt_unit));
			new_EU = new_EU.replace('XXXRUS3', String(cmpt_unit));
			new_EU = new_EU.replace('XXXRUS3', String(cmpt_unit));
			new_EU = new_EU.replace('XXXRUS3', String(cmpt_unit));
			new_EU = new_EU.replace('XXXRUS3', String(cmpt_unit));
			new_EU = new_EU.replace('XXXRUS3', String(cmpt_unit));
			new_EU = new_EU.replace('XXXRUS3', String(cmpt_unit));
			T_unit[cmpt_unit] = new Unit(id_RUS3, "RU_Slave", false, id_RUM, outpt1, outpt2, outpt3, outpt4, outpt5, outpt6,RU_S3_label);
			
			var RU_S4_label = "RU"+button_RowNumber+"_"+nb_RUM+"__S4";
			cmpt_unit++;
			var id_RUS4 = cmpt_unit;
			new_EU = new_EU.replace('XXXRUS4', String(cmpt_unit));
			new_EU = new_EU.replace('XXXRUS4', String(cmpt_unit));
			new_EU = new_EU.replace('XXXRUS4', String(cmpt_unit));
			new_EU = new_EU.replace('XXXRUS4', String(cmpt_unit));
			new_EU = new_EU.replace('XXXRUS4', String(cmpt_unit));
			new_EU = new_EU.replace('XXXRUS4', String(cmpt_unit));
			new_EU = new_EU.replace('XXXRUS4', String(cmpt_unit));
			T_unit[cmpt_unit] = new Unit(id_RUS4, "RU_Slave", false, id_RUM, outpt1, outpt2, outpt3, outpt4, outpt5, outpt6,RU_S4_label);

			var RU_S5_label = "RU"+button_RowNumber+"_"+nb_RUM+"__S5";
			cmpt_unit++;
			var id_RUS5 = cmpt_unit;
			new_EU = new_EU.replace('XXXRUS5', String(cmpt_unit));
			new_EU = new_EU.replace('XXXRUS5', String(cmpt_unit));
			new_EU = new_EU.replace('XXXRUS5', String(cmpt_unit));
			new_EU = new_EU.replace('XXXRUS5', String(cmpt_unit));
			new_EU = new_EU.replace('XXXRUS5', String(cmpt_unit));
			new_EU = new_EU.replace('XXXRUS5', String(cmpt_unit));
			new_EU = new_EU.replace('XXXRUS5', String(cmpt_unit));
			T_unit[cmpt_unit] = new Unit(id_RUS5, "RU_Slave", false, id_RUM, outpt1, outpt2, outpt3, outpt4, outpt5, outpt6,RU_S5_label);	
			
			new_EU = new_EU.replace(/WWW/g, compt_row); // rang des unit
			console.log('www : ' + compt_row);
			var num_nouv_row = compt_row;
			compt_row++;
			new_EU = new_EU.replace(/UUU/g, compt_row);//indice du rang des button EU
			console.log('VVV : ' + compt_row);
			compt_row++;
			new_EU = new_EU.replace(/VVV/g, compt_row);//indice du rang des button EU
			console.log('VVV : ' + compt_row);
			compt_row++;
			new_EU = new_EU.replace(/RRR/g, compt_row);//indice du rang du button AU
			console.log('RRR : ' + compt_row);
				
							
		parseInt(button_RowNumber);
		//alert(parseInt(RowNumber));
		
			var idElt = 'ROW_' + String(parseInt(button_RowNumber)); 
	       console.log('Insert at row : ' + idElt);
		   
			$(new_EU).insertAfter(document.getElementById(idElt));

		
			console.log('father pour tracer trait : ' + father + 'enfant pour tracer trait : ' + id_EU1);
		
			//window.scrollBy(0,300);le
			hide_unit(id_RUS1,'ru_unit_slave');
			hide_unit(id_RUS2,'ru_unit_slave');
			hide_unit(id_RUS3,'ru_unit_slave');
			hide_unit(id_RUS4,'ru_unit_slave');
			hide_unit(id_RUS5,'ru_unit_slave');
			//hide_unit(id_EU1,'eu_unit');
			hide_unit(id_RUM,'ru_unit');
			ActiveDeactiv(0,num_nouv_row, id_EU1);
		}	// if EU DEJA sur AU
		draw_it();
	}
	
	function AddNewEU2(button_RowNumber){
		console.log('======== NEW EU 2 ============');
		parseInt(compt_row);
		compt_row++;
			
		var new_EU=template_EU2; 		// on recupe le template dajout de ligne
										//on change les indice dans la chaine HTML dajout dune ligne du tablo		
			
			//on cree une Unit dans le programme
			var	outpt1='-1'; 
			var outpt2='-1';
			var outpt3='-1';
			var outpt4='-1';
			var	outpt5='-1';
			var outpt6='-1';
			
			nb_EU++;
			nb_RUM++;
			
			var EU_2_label = "EU"+button_RowNumber+"_"+nb_EU+"__2";
			cmpt_unit++; 
			var id_EU2 = cmpt_unit;	
			new_EU = new_EU.replace('XXXEU2', String(cmpt_unit));
			new_EU = new_EU.replace('XXXEU2', String(cmpt_unit));
			new_EU = new_EU.replace('XXXEU2', String(cmpt_unit));
			new_EU = new_EU.replace('XXXEU2', String(cmpt_unit));
			new_EU = new_EU.replace('XXXEU2', String(cmpt_unit));
			new_EU = new_EU.replace('XXXEU2', String(cmpt_unit));
			new_EU = new_EU.replace('XXXEU2', String(cmpt_unit));
			new_EU = new_EU.replace('XXXEU2', String(cmpt_unit));
			var father = Fetch_Father(compt_row, id_EU2, "Expansion1",button_RowNumber);
			console.log('father de EU2 added : ' + father);
			T_unit[cmpt_unit] = new Unit(id_EU2, "Expansion2", false, father, outpt1, outpt2, outpt3, outpt4, outpt5, outpt6,EU_2_label);
			
			var RU_M_Label = "RU"+button_RowNumber+"_"+nb_RUM+"__M";
			cmpt_unit++; 
			var id_RUM = cmpt_unit;
			new_EU = new_EU.replace('XXXRUM', String(cmpt_unit));
			new_EU = new_EU.replace('XXXRUM', String(cmpt_unit));
			new_EU = new_EU.replace('XXXRUM', String(cmpt_unit));
			new_EU = new_EU.replace('XXXRUM', String(cmpt_unit));
			new_EU = new_EU.replace('XXXRUM', String(cmpt_unit));
			new_EU = new_EU.replace('XXXRUM', String(cmpt_unit));
			new_EU = new_EU.replace('XXXRUM', String(cmpt_unit));
			new_EU = new_EU.replace('XXXRUM', String(cmpt_unit));
			T_unit[cmpt_unit] = new Unit(id_RUM, "RU_Master", false, id_EU2, outpt1, outpt2, outpt3, outpt4, outpt5, outpt6, RU_M_Label);
			
			var RU_S1_label = "RU"+button_RowNumber+"_"+nb_RUM+"__S1";
			cmpt_unit++;
			var id_RUS1 = cmpt_unit;
			new_EU = new_EU.replace('XXXRUS1', String(cmpt_unit));
			new_EU = new_EU.replace('XXXRUS1', String(cmpt_unit));
			new_EU = new_EU.replace('XXXRUS1', String(cmpt_unit));
			new_EU = new_EU.replace('XXXRUS1', String(cmpt_unit));
			new_EU = new_EU.replace('XXXRUS1', String(cmpt_unit));
			new_EU = new_EU.replace('XXXRUS1', String(cmpt_unit));
			new_EU = new_EU.replace('XXXRUS1', String(cmpt_unit));
			new_EU = new_EU.replace('XXXRUS1', String(cmpt_unit));
			new_EU = new_EU.replace('XXXRUS1', String(cmpt_unit));
			new_EU = new_EU.replace('XXXRUS1', String(cmpt_unit));
			T_unit[cmpt_unit] = new Unit(id_RUS1, "RU_Slave", false, id_RUM, outpt1, outpt2, outpt3, outpt4, outpt5, outpt6, RU_S1_label);
			
			var RU_S2_label = "RU"+button_RowNumber+"_"+nb_RUM+"__S2";
			cmpt_unit++;  
			var id_RUS2 = cmpt_unit;
			new_EU = new_EU.replace('XXXRUS2',cmpt_unit);
			new_EU = new_EU.replace('XXXRUS2', String(cmpt_unit));
			new_EU = new_EU.replace('XXXRUS2', String(cmpt_unit));
			new_EU = new_EU.replace('XXXRUS2', String(cmpt_unit));
			new_EU = new_EU.replace('XXXRUS2', String(cmpt_unit));
			new_EU = new_EU.replace('XXXRUS2', String(cmpt_unit));
			new_EU = new_EU.replace('XXXRUS2', String(cmpt_unit));
			new_EU = new_EU.replace('XXXRUS2', String(cmpt_unit));
			new_EU = new_EU.replace('XXXRUS2', String(cmpt_unit));
			new_EU = new_EU.replace('XXXRUS2', String(cmpt_unit));
			T_unit[cmpt_unit] = new Unit(id_RUS2, "RU_Slave", false, id_RUM, outpt1, outpt2, outpt3, outpt4, outpt5, outpt6, RU_S2_label);
			
			
			new_EU = new_EU.replace(/WWW/g, compt_row); // rang des unit
			console.log('www : ' + compt_row);
			compt_row++;
			new_EU = new_EU.replace(/UUU/g, compt_row);//indice du rang des button EU
			console.log('VVV : ' + compt_row);
			compt_row++;
			new_EU = new_EU.replace(/VVV/g, compt_row);//indice du rang des button EU
			console.log('VVV : ' + compt_row);
			compt_row++;
			new_EU = new_EU.replace(/RRR/g, compt_row);//indice du rang du button AU
			console.log('RRR : ' + compt_row);
				
			//alert(new_EU);
		parseInt(button_RowNumber);			
			var idElt = 'ROW_' + String(button_RowNumber); 
	       console.log('Insert at row : ' + idElt);
			$(new_EU).insertAfter(document.getElementById(idElt));
			
			
			hide_unit(id_RUS1,'ru_unit_slave');
			hide_unit(id_RUS2,'ru_unit_slave');
			hide_unit(id_RUS3,'ru_unit_slave');
			hide_unit(id_RUS4,'ru_unit_slave');
			hide_unit(id_RUS5,'ru_unit_slave');
			hide_unit(id_RUM,'ru_unit');
						
			draw_it();
		}
		
	function SLOT_RU_DISPO_sur_AUM(button_RowNumber){
			var elements = document.getElementsByClassName('ru_unit');
			var id_tab = 0;
			for (var i = 0; i<=cmpt_unit; i++){
				if (typeof elements[i] !== 'undefined'){
					if (elements[i].getAttribute('row_number') == button_RowNumber){
						//alert('oui');
						if (elements[i].style.display == "none"){	
							return true;
						}
					}
				}
			}	
			console.log('pas trouve');
			return false;			
	}
	
		function SAVE_RU_sur_AUM(button_RowNumber){
			var elements = document.getElementsByClassName('ru_unit');
			var id_tab = 0;

			for (var i = 0; i<cmpt_unit; i++){
				if (typeof elements[i] !== 'undefined'){
					if (elements[i].getAttribute('row_number') == button_RowNumber){
						if (elements[i].style.display == "none"){
							//slot dispo pret a accepter le nouvel EU, mais on doit regarder si pere a des outputs dispo
							//on sauve l'output du pere
							var father = Fetch_Father(compt_row, elements[i].id, "Expansion1",button_RowNumber);
							
							//pour EU2
							//if (father == ""){father = Fetch_Father(compt_row, id_RUM, "Expansion1",button_RowNumber);}
							if (father == ""){father = Fetch_Father(compt_row, elements[i].id,  "AU_Master",button_RowNumber);}
							
							//save input
							T_unit[elements[i].id].input = father;
//alert('father is : ' + father);
							if (Save_Output(father,elements[i].id)){//on a trouve le pere, on verifie quon puisse bien enregistrer l'unit comme une output du pere
								elements[i].style.display = "";
								ActiveDeactiv(0,button_RowNumber,elements[i].id);
								ip_activated(elements[i].id);
								return elements[i].id;
							}else{
							//	alert('Units accept 6 outputs maximum.'); 
								return -1;
							}
						}
					}
				}
			}	
			console.log('pas trouve');
			return false;			
	}
		
	function AddNewRU(button_RowNumber, type_recherche){
	console.log('======== NEW RU Master ============');
	type_recherche = type_recherche || null;
	
	//on regarde si le premier rang est dispo
	var SLOT_EU_DISPO = SLOT_EU_DISPO_sur_AUM(button_RowNumber-2);
	//alert('slot EU dispo :' + SLOT_EU_DISPO);
	var SLOT_RU_DISPO = SLOT_RU_DISPO_sur_AUM(button_RowNumber-2);
//alert('slot RU dispo :' + SLOT_RU_DISPO);
	
	if (SLOT_RU_DISPO == true && SLOT_EU_DISPO == true){ //pas de RU et pas de EU sur l row 1
		SAVE_RU_sur_AUM(button_RowNumber-2);
		}
	else{
		parseInt(compt_row);
		compt_row++;
			
		var new_RU=template_RU; 		// on recupe le template dajout de ligne
										//on change les indice dans la chaine HTML dajout dune ligne du tablo		
			
			//on cree une Unit dans le programme
			var	outpt1='-1'; 
			var outpt2='-1';
			var outpt3='-1';
			var outpt4='-1';
			var	outpt5='-1';
			var outpt6='-1';
			
			nb_RUM++;
			
			var RU_M_label = "RU"+button_RowNumber+"_"+nb_RUM+"_M";
			cmpt_unit++; 
			var id_RUM = cmpt_unit;
			new_RU = new_RU.replace('XXXRUM', String(cmpt_unit));
			new_RU = new_RU.replace('XXXRUM', String(cmpt_unit));
			new_RU = new_RU.replace('XXXRUM', String(cmpt_unit));
			new_RU = new_RU.replace('XXXRUM', String(cmpt_unit));
			new_RU = new_RU.replace('XXXRUM', String(cmpt_unit));
			new_RU = new_RU.replace('XXXRUM', String(cmpt_unit));
			new_RU = new_RU.replace('XXXRUM', String(cmpt_unit));
			new_RU = new_RU.replace('XXXRUM', String(cmpt_unit));
			new_RU = new_RU.replace('XXXRUM', String(cmpt_unit));
			var father;
			 if (type_recherche !== null){
				 father = Fetch_Father(compt_row, id_RUM, type_recherche, button_RowNumber);
			 }
			else{
				father = Fetch_Father(compt_row, id_RUM, "Expansion1",button_RowNumber);
				if (father == ""){father = Fetch_Father(compt_row, id_RUM, "Expansion1",button_RowNumber);}
				if (father == ""){father = Fetch_Father(compt_row, id_RUM, "AU_Master",button_RowNumber);}
			}	
			//alert('father de RU Master added : ' + father);
			if (Save_Output(father,id_RUM)){//on a trouve le pere, on verifie quon puisse bien enregistrer l'unit comme une output du pere
				//on ajoute l'unit au tableau
				T_unit[cmpt_unit] = new Unit(id_RUM, "RU_Master", false, father, outpt1, outpt2, outpt3, outpt4, outpt5, outpt6, RU_M_label);
			}else{
			//	alert('Units accept 6 outputs maximum.'); 
				cmpt_unit--, nb_RUM--;compt_row--;
				return;
			}
			
			var RU_S1_label = "RU"+button_RowNumber+"_"+nb_RUM+"_S1";
			cmpt_unit++; 
			var id_RUS1 = cmpt_unit;
			new_RU = new_RU.replace('XXXRUS1', String(cmpt_unit));
			new_RU = new_RU.replace('XXXRUS1', String(cmpt_unit));
			new_RU = new_RU.replace('XXXRUS1', String(cmpt_unit));
			new_RU = new_RU.replace('XXXRUS1', String(cmpt_unit));
			new_RU = new_RU.replace('XXXRUS1', String(cmpt_unit));
			new_RU = new_RU.replace('XXXRUS1', String(cmpt_unit));
			new_RU = new_RU.replace('XXXRUS1', String(cmpt_unit));
			new_RU = new_RU.replace('XXXRUS1', String(cmpt_unit));
			new_RU = new_RU.replace('XXXRUS1', String(cmpt_unit));
			new_RU = new_RU.replace('XXXRUS1', String(cmpt_unit));
			T_unit[cmpt_unit] = new Unit(id_RUS1, "RU_Slave", false, id_RUM, outpt1, outpt2, outpt3, outpt4, outpt5, outpt6, RU_S1_label); 
			
			var RU_S2_label = "RU"+button_RowNumber+"_"+nb_RUM+"_S2";
			cmpt_unit++;  
			var id_RUS2 = cmpt_unit;
			new_RU = new_RU.replace('XXXRUS2',cmpt_unit);
			new_RU = new_RU.replace('XXXRUS2', String(cmpt_unit));
			new_RU = new_RU.replace('XXXRUS2', String(cmpt_unit));
			new_RU = new_RU.replace('XXXRUS2', String(cmpt_unit));
			new_RU = new_RU.replace('XXXRUS2', String(cmpt_unit));
			new_RU = new_RU.replace('XXXRUS2', String(cmpt_unit));
			new_RU = new_RU.replace('XXXRUS2', String(cmpt_unit));
			new_RU = new_RU.replace('XXXRUS2', String(cmpt_unit));
			new_RU = new_RU.replace('XXXRUS2', String(cmpt_unit));
			new_RU = new_RU.replace('XXXRUS2', String(cmpt_unit));
			new_RU = new_RU.replace('XXXRUS2', String(cmpt_unit));
			T_unit[cmpt_unit] = new Unit(id_RUS2, "RU_Slave", false, id_RUM, outpt1, outpt2, outpt3, outpt4, outpt5, outpt6, RU_S2_label);
			
			var RU_S3_label = "RU"+button_RowNumber+"_"+nb_RUM+"__S3";
			cmpt_unit++;
			var id_RUS3 = cmpt_unit;
			new_RU = new_RU.replace('XXXRUS3', String(cmpt_unit));
			new_RU = new_RU.replace('XXXRUS3', String(cmpt_unit));
			new_RU = new_RU.replace('XXXRUS3', String(cmpt_unit));
			new_RU = new_RU.replace('XXXRUS3', String(cmpt_unit));
			new_RU = new_RU.replace('XXXRUS3', String(cmpt_unit));
			new_RU = new_RU.replace('XXXRUS3', String(cmpt_unit));
			new_RU = new_RU.replace('XXXRUS3', String(cmpt_unit));
			T_unit[cmpt_unit] = new Unit(id_RUS3, "RU_Slave", false, id_RUM, outpt1, outpt2, outpt3, outpt4, outpt5, outpt6,RU_S3_label);
			
			var RU_S4_label = "RU"+button_RowNumber+"_"+nb_RUM+"__S4";
			cmpt_unit++;
			var id_RUS4 = cmpt_unit;
			new_RU = new_RU.replace('XXXRUS4', String(cmpt_unit));
			new_RU = new_RU.replace('XXXRUS4', String(cmpt_unit));
			new_RU = new_RU.replace('XXXRUS4', String(cmpt_unit));
			new_RU = new_RU.replace('XXXRUS4', String(cmpt_unit));
			new_RU = new_RU.replace('XXXRUS4', String(cmpt_unit));
			new_RU = new_RU.replace('XXXRUS4', String(cmpt_unit));
			new_RU = new_RU.replace('XXXRUS4', String(cmpt_unit));
			T_unit[cmpt_unit] = new Unit(id_RUS4, "RU_Slave", false, id_RUM, outpt1, outpt2, outpt3, outpt4, outpt5, outpt6,RU_S4_label);

			var RU_S5_label = "RU"+button_RowNumber+"_"+nb_RUM+"__S5";
			cmpt_unit++;
			var id_RUS5 = cmpt_unit;
			new_RU = new_RU.replace('XXXRUS5', String(cmpt_unit));
			new_RU = new_RU.replace('XXXRUS5', String(cmpt_unit));
			new_RU = new_RU.replace('XXXRUS5', String(cmpt_unit));
			new_RU = new_RU.replace('XXXRUS5', String(cmpt_unit));
			new_RU = new_RU.replace('XXXRUS5', String(cmpt_unit));
			new_RU = new_RU.replace('XXXRUS5', String(cmpt_unit));
			new_RU = new_RU.replace('XXXRUS5', String(cmpt_unit));
			T_unit[cmpt_unit] = new Unit(id_RUS5, "RU_Slave", false, id_RUM, outpt1, outpt2, outpt3, outpt4, outpt5, outpt6,RU_S5_label);

			
			new_RU = new_RU.replace(/WWW/g, compt_row); // rang des unit
			console.log('www : ' + compt_row);
			var num_nouv_row = compt_row;
			compt_row++;
			new_RU = new_RU.replace(/UUU/g, compt_row);//indice du rang des button EU
			console.log('VVV : ' + compt_row);
			compt_row++;
			new_RU = new_RU.replace(/VVV/g, compt_row);//indice du rang des button EU
			console.log('VVV : ' + compt_row);
			compt_row++;
			new_RU = new_RU.replace(/RRR/g, compt_row);//indice du rang du button AU
			console.log('RRR : ' + compt_row);
				
			//alert(new_RU);		
					parseInt(button_RowNumber);
			var idElt = 'ROW_' + String(parseInt(button_RowNumber)); 
	       console.log('Insert at row : ' + idElt);
			$(new_RU).insertAfter(document.getElementById(idElt));
			
			
			hide_unit(id_RUS1,'ru_unit_slave');
			hide_unit(id_RUS2,'ru_unit_slave');
			hide_unit(id_RUS3,'ru_unit_slave');
			hide_unit(id_RUS4,'ru_unit_slave');
			hide_unit(id_RUS5,'ru_unit_slave');
			ActiveDeactiv(0,num_nouv_row, id_RUM);
			ip_activated(id_RUM);
			
			if (EU==true){Show_EU();}else{Hide_EU();}
			
	}	
			draw_it();
	} 

	var Fetch_Father = function(RowNumber, id_unit,type_recherche,clicked_button_RowNumber){
		
			var t = document.getElementById("myTable");
			var trs = t.getElementsByTagName("tr");
			var tds = null;
			var strg_ligne;
			var father = "";
			//var bodyunit = "";
			var current_id = 0;
			
			//on recherche le row qui correspond au bouton clique et on recherche le father a partir de ce row
			for (var z=trs.length-1; z>0; z--) //0 est lentete du tablo / on remonte le tablo a lenvers
			{
				//alert('id du row parcouru : ' + trs[z].id + ' et id du row quon cherche : ROW_' + clicked_button_RowNumber)
				if (trs[z].id == 'ROW_' + clicked_button_RowNumber){ 
					console.log('z vaut : ' + z);
					break;
				}
			}
			
			for (var l=z; l>0; l--) //0 est lentete du tablo / on remonte le tablo a lenvers en partant de lindice trouve avant
			//for (var l=trs.length-1; l>0; l--) //0 est lentete du tablo / on remonte le tablo a lenvers
			{
				tds = trs[l].getElementsByTagName("td");
				strg_ligne='';
				//for (var n=tds.length-1; n>=0;n--) /depart du haut du tablo
				for (var n=tds.length-1; n>=0;n--) //on remonte le tablo entierement en sens inverse
				//for (var n=RowNumber; n>=0;n--) //on remonte les case du tablo a partir de la rangee cliquee
				{
					
					if (tds[n].hasAttribute('id_cell') == true) {//estce que ce TD est definit a une unit ? seul les td avec unit on un id egale au row
						current_id = tds[n].getAttribute('id_cell');
						strg_ligne+= current_id + " .. ";
						if(id_unit !== current_id){//est-ce que c'est l'id de l'unit en question
							//bodyunit = document.getElementById("cellule_" + String(current_id));
							if (typeof T_unit[current_id] !== 'undefined') {//estce que le type a ete defini
								if(T_unit[current_id].type == "Expansion1" || T_unit[current_id].type == "Expansion2" || T_unit[current_id].type == "RU_Master" || T_unit[current_id].type == "AU_Master"){ // Master/EU ?
									console.log('on recherche un :' + type_recherche);
									if(T_unit[current_id].activated == true){
										if(T_unit[current_id].type == type_recherche){ //specific type
											father = current_id;
											break;
										}else if (T_unit[current_id].type == "AU_Master"){
											//alert('we are at the end of the tree, there is no father for this unit and this type');
											return ''; //pas besoin de continuer la recherche
										}
									}
								}
							}
						}
					}
				}
				console.log("ligne " + l + " : " + strg_ligne);
				
				if(father !== '') {break;}//pour faire le second break et sortir de la secnd loop
				
			}
		
		return father;
		}
	
	//verifier si le td a un id_cell ds ce cas il y a une cellule
	function testAttribute ( _elem_, _attrName ){
   var elem = _elem_;
   var found = false;
   var i = 0;
   if ( elem != null && elem.attributes != null ){
        while ( !found && i < elem.attributes.length ){
           if ( elem.attributes[i].name == _attrName )
              found = true;
           else
              i++;
        }
   }

  if ( found )
     return elem.attributes[i].value;
  else
     return null;
}
	
	
	
	function Init_canvas(){
	//var canvas = document.getElementById("canvas");
	//canvas.width = window.width-300;
	//canvas.height = 2000;
	console.log("on charge le canvas avec une largeur de :" + window.innerWidth);
	var new_canvas = '<div ><canvas  id="canvas" width="' + window.innerWidth + '" height = "8000" class="canvas_div"></canvas></div>';
	console.log(document.getElementById('test_fade').id);
	$(new_canvas).insertAfter(document.getElementById('test_fade'));
}	
	
	var Init = function Init(){
		
			console.log('== Initialisation ==');	
			//ImpEcrOff();
			cmpt_unit = 0;
			Init_canvas();
			AddNewAU(0);
			preloadImage();
			Show_ip();
			Hide_ip();
			Hide_EU();
			Hide_EU();
			Hide_EU();
			Hide_EU();
			Hide_EU();
			Hide_EU();
			Hide_ip();
			
			document.getElementById('screensaver').style.display = 'none';
			//ActiveDeactiv(1,1,1); //(1, number_row,id_unit)
			draw_it();
			
			console.log('==fin Initialisation ==');
			
			
		}
		
	//document.onselectstart=new Function("return false");
	//document.oncontextmenu=new Function("return false");
	//document.ondragstart =new Function("return false");
	
	</script>
	<div class="title_logo">	
		<img src= "pic/images/logo.png" alt="logo" width="8%">
			<h1>Interactive System Builder</h1>
	<div class="but_haut">   
	<form method="post" id="form1" name="form" action="generate_graph.php" target="_blank">
		<input name="str_graph" id="str_graph" type="hidden"  value="qweqwe" class="form-control" /> 			
		<input name="Spectrum_Allocation" id="Spectrum_Allocation" type="hidden"  value="qweqwe" class="form-control" />
		<input name="Network_Capacity" id="Network_Capacity" type="hidden"  value="qweqwe" class="form-control" />
		<input name="HetNet_Integration" id="HetNet_Integration" type="hidden"  value="qweqwe" class="form-control" />
		<input name="Cost_Effective" id="Cost_Effective" type="hidden"  value="qweqwe" class="form-control" />
		<input name="Energy_Efficient" id="Energy_Efficient" type="hidden"  value="qweqwe" class="form-control" />
		<input name="Maximum_Coverage" id="Maximum_Coverage" type="hidden"  value="qweqwe" class="form-control" />
		<input name="future_Proof" id="future_Proof" type="hidden"  value="qweqwe" class="form-control" />
		<input name="small_cell" id="small_cell" type="hidden"  value="qweqwe" class="form-control" />
		<input name="enterprise" id="enterprise" type="hidden"  value="qweqwe" class="form-control" />
		<input name="surveillance" id="surveillance" type="hidden"  value="qweqwe" class="form-control" />
		<input name="corporate" id="corporate" type="hidden"  value="qweqwe" class="form-control" />
		<input name="building" id="building" type="hidden"  value="qweqwe" class="form-control" />
		<input name="traffic" id="traffic" type="hidden"  value="qweqwe" class="form-control" />
		
		<input name="Access_Unit" id="Access_Unit" type="hidden"  value="qweqwe" class="form-control" />
		<input name="Remote_Unit_Low_Power" id="Remote_Unit_Low_Power" type="hidden"  value="qweqwe" class="form-control" />
		<input name="Remote_Unit_High_Power" id="Remote_Unit_High_Power" type="hidden"  value="qweqwe" class="form-control" />
		<input name="Expansion_Unit" id="Expansion_Unit" type="hidden"  value="qweqwe" class="form-control" />
		<input name="AU700" id="AU700" type="hidden"  value="qweqwe" class="form-control" />
		<input name="AU800" id="AU800" type="hidden"  value="qweqwe" class="form-control" />
		<input name="AU850" id="AU850" type="hidden"  value="qweqwe" class="form-control" />
		<input name="AU900" id="AU900" type="hidden"  value="qweqwe" class="form-control" />
		<input name="AU1700" id="AU1700" type="hidden"  value="qweqwe" class="form-control" />
		<input name="AU1800" id="AU1800" type="hidden"  value="qweqwe" class="form-control" />
		<input name="AU1900" id="AU1900" type="hidden"  value="qweqwe" class="form-control" />
		<input name="AU2100" id="AU2100" type="hidden"  value="qweqwe" class="form-control" />
		<input name="AU2300" id="AU2300" type="hidden"  value="qweqwe" class="form-control" />
		<input name="AU2600" id="AU2600" type="hidden"  value="qweqwe" class="form-control" />
		<input name="RU700" id="RU700" type="hidden"  value="qweqwe" class="form-control" />
		<input name="RU800" id="RU800" type="hidden"  value="qweqwe" class="form-control" />
		<input name="RU850" id="RU850" type="hidden"  value="qweqwe" class="form-control" />
		<input name="RU900" id="RU900" type="hidden"  value="qweqwe" class="form-control" />
		<input name="RU1700" id="RU1700" type="hidden"  value="qweqwe" class="form-control" />
		<input name="RU1800" id="RU1800" type="hidden"  value="qweqwe" class="form-control" />
		<input name="RU1900" id="RU1900" type="hidden"  value="qweqwe" class="form-control" />
		<input name="RU2100" id="RU2100" type="hidden"  value="qweqwe" class="form-control" />
		<input name="RU2300" id="RU2300" type="hidden"  value="qweqwe" class="form-control" />
		<input name="RU2600" id="RU2600" type="hidden"  value="qweqwe" class="form-control" />


		<input type="button" id="submitbtn" class="button3" onClick = "send()" value="Check My Score"/>
		<input type="button" id="btn_msakegraph" onClick="history.go(0)" class="button2" value="Reset"/>	
		<input type="button" class="button4" onclick="window.location='index.html';" value="Start Over"/>		
	</form>
	</div>	
</div>
		
	<script src="js/jquery-1.11.2.js"></script> <!-- jQuery est inclus ! -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script> <!-- jQuery est inclus ! -->
 
	
	<!-- BARRE DE CHARGEMENT  ! -->
	<DIV id=preloadCache style="Z-INDEX: 123; left:43%; right:43%; WIDTH: 15%; TOP: 45%; HEIGHT: 5%; position:fixed">
		<TABLE height="100%" cellSpacing=0 cellPadding=0 width="100%" border=0>
		<TBODY>
		<TR>
		<TD align=middle bgColor=transparent>
		<DIV id=preloadPercent><img src="pic/images/loading.gif" width="20%"></br><FONT color=#999999 style="padding-top:13%">Loading</FONT></DIV><BR>
		</TD>
		</TR>
		</TBODY>
		</TABLE>
</div>


   <script>
    //******************************* BARRE DE CHARGEMENT *******************************************
	var ie = false; //document.all?true: // On test le navigateur pour IE 
	// Appel de la function preloadImage() au chargement de la page. Peut etre remplacer par <body onload="preloadImage()">

	function addZero(chiffre){ // Function qui ajoute un zero devant les chiffres
		if (chiffre < 10) { chiffre = "0"+chiffre; }
		if (chiffre < 100) { chiffre = chiffre; }
		return chiffre; 
	}

	var i=0; // On initialise le comptage des images a 0.
	function preloadImage(){
		var myContent = document.getElementsByTagName("img") // On repere les images contenu dans la page
		
		for (var i=0;i<myContent.length-1;i++){
			//percent = Math.ceil(i*100/myContent.length);
			//alert(document.getElementById("preloadPercent"));
			if (myContent.item(i).complete == true) {document.getElementById("preloadPercent").innerHTML = "Loading ...";}
		//else {i--}
		}
		setTimeout(finish_load(),3000); // on attends 3 secondes d plus
			 // Si le client n'est pas IE on vire tout simplement le cache
		
	}
	
	function finish_load(){
		document.getElementById("preloadCache").style.display = "none";
	}

	var opacity = 100 // Opacity de depart
	

 
 //********************************* canvas **************************************

 
   //******************************* SCREEN SAVER *******************************************
var mousetimeout;
var screensaver_active = false;
var idletime = 60;

function show_screensaver(){
	console.log('on arrive dans le scren saver');
    $('#screensaver').fadeIn();
    screensaver_active = true;
    screensaver_animation();
}

function stop_screensaver(){
    $('#screensaver').fadeOut();
    screensaver_active = false;
			var player = document.querySelector('#audioPlayer');
		//player.stop();
		document.getElementById('screensaver').style.display = 'none';
}

function getRandomColor() {
    var letters = '0123456789ABCDEF'.split('');
    var color = '#';
    for (var i = 0; i < 6; i++ ) {
        color += letters[Math.round(Math.random() * 15)];
    }
    return color;
}

$(document).mousemove(function(){
    clearTimeout(mousetimeout);
	
    if (screensaver_active) {
        stop_screensaver();
    }

    mousetimeout = setTimeout(function(){
        show_screensaver();
    }, 1000 * idletime); // 5 secs			
});

function screensaver_animation(){
    if (screensaver_active) {
		console.log('screen saver');
		var player = document.querySelector('#audioPlayer');
		player.play();
		document.getElementById('screensaver').style.display = "";
//        $('#screensaver').animate({backgroundColor: getRandomColor()},400, screensaver_animation);
    }
}

//************************ FIN DU SCREEN SAVER ********************************************************

   function send(){
	   
	   console.log('======== GENERATION DU GRAPH ============');
	   var str_graph = GenerateGraph();
	    console.log(str_graph);
		
		
		//calcul des parametres
		console.log('======== CALCULATE IP SERVICE ============');				
					//var NB_diff_mod = 0;
					//var Avail_mod = 0;
					
					//Spectrum_Allocation = NB differents Modules / Available modules
					console.log('nb mod : ' + Avail_mod);
					var Spectrum_Allocation =get_NB_diff_Mod() / Avail_mod * 100; 		console.log('spectrum : ' + Spectrum_Allocation);
					if (isNaN(Spectrum_Allocation)){Spectrum_Allocation = 0;}
					Spectrum_Allocation = Spectrum_Allocation.toFixed(1);
					if(Spectrum_Allocation > 100){Spectrum_Allocation =100;}
					
					//Network_Capacity ; (mod1 * qty_mod1) + (mod2 * qty_mod2) + etc )/qty_mod_tot) 
					var Network_Capacity = get_Network_Capacity();						console.log('Network Capacity : ' + Network_Capacity);
					if (isNaN(Network_Capacity)){Network_Capacity = 0;}
					Network_Capacity = Network_Capacity.toFixed(1);
					if(Network_Capacity > 100){Network_Capacity = 100;}
					
					// how many activated ipservice
					var HetNet_Integration = 0;
					if (small_cell !== 0){ HetNet_Integration +=16.66;} //16.66 = 100/6 ip
					if (enterprise !== 0){ HetNet_Integration +=16.66;}
					if (surveillance !== 0){ HetNet_Integration +=16.66;}
					if (corporate !== 0){ HetNet_Integration +=16.66;}
					if (building !== 0){ HetNet_Integration +=16.66;}
					if (traffic !== 0){ HetNet_Integration +=16.66;}
					
					if (isNaN(HetNet_Integration)){HetNet_Integration=0;}
					HetNet_Integration = HetNet_Integration.toFixed(1);
					if(HetNet_Integration > 100){HetNet_Integration = 100;}
					
					//FAUX //LP = 10 HP = 30.   ((LP*NB_LP) + (HP*NB_HP))HP*100
					var Cost_Effective = ((nb_lp * 10)+(nb_hp * 30))/(nb_lp+nb_hp);
					console.log('nb_lp : ' + nb_lp + 'nb_hp : ' + nb_hp + 'Cost_Effective : ' + Cost_Effective);
					
					if (isNaN(Cost_Effective)){Cost_Effective = 0;}
					Cost_Effective = Cost_Effective.toFixed(1);
					if(Cost_Effective > 100){Cost_Effective = Cost_Effective / 2;}
					if(Cost_Effective > 100){Cost_Effective = Cost_Effective / 2;}
					if(Cost_Effective > 100){Cost_Effective = Cost_Effective / 2;}
					
					//Energy Effi; (nb_lp * AU = 70W;   nb_lp * HP = 500W;   nb_lp* LP=100W) / (nb_AU + nb_lp + nb_hp) * 440 ----- 220 = 70+ 500 +100 / 3 on met 300 car HP 2 fois plus puissante que LP 
					var Energy_Efficient = ((nb_lp * 100)+(nb_hp * 500)+ (cmpt_unit*70))/(cmpt_unit*440)*100;	console.log('Energy_Efficient : ' + Energy_Efficient);
					if(isNaN(Energy_Efficient)){Energy_Efficient = 0;}
					Energy_Efficient = Energy_Efficient.toFixed(1);
					if(Energy_Efficient > 100){Energy_Efficient = 100;}
					
					//(network capacity * nb_hp)/(network capacity * (nb_hp+nb_lp)) * 100
					var Maximum_Coverage = (Network_Capacity * nb_hp)/(Network_Capacity * (nb_hp+nb_lp)) * 100;	console.log('Maximum_Coverage : ' + Maximum_Coverage);
					if(isNaN(Maximum_Coverage)){Maximum_Coverage = 0;}
					Maximum_Coverage = Maximum_Coverage.toFixed(1);
					if(Maximum_Coverage>100){Maximum_Coverage = 100;}
					
					//Nbre de module BLANK * nbre de EU/(nb_EU*Avail_mod)*100
					var future_Proof = 0
					if (nb_EU !== 0){
						future_Proof = (nb_blank*nb_EU)/(nb_EU*Avail_mod)*100; console.log('future_Proof : ' + future_Proof);
						if(isNaN(future_Proof)){future_Proof=0;}
						future_Proof = future_Proof.toFixed(1);
					}else{future_Proof = 30;}
					if(future_Proof>100){future_Proof = 100;}

		
		
		document.getElementById('str_graph').value = str_graph;
		document.getElementById('Spectrum_Allocation').value = Spectrum_Allocation;
		document.getElementById('Network_Capacity').value = Network_Capacity;
		document.getElementById('HetNet_Integration').value = HetNet_Integration;
		document.getElementById('Cost_Effective').value = Cost_Effective;
		document.getElementById('Energy_Efficient').value = Energy_Efficient;
		document.getElementById('Maximum_Coverage').value = Maximum_Coverage;
		document.getElementById('future_Proof').value = future_Proof;
		document.getElementById('small_cell').value = small_cell;
		document.getElementById('enterprise').value = enterprise;
		document.getElementById('surveillance').value = surveillance;
		document.getElementById('corporate').value = corporate;
		document.getElementById('building').value = building;
		document.getElementById('traffic').value = traffic;
 
		//methode post, methode courante
		document.getElementById("form1").submit();//on laisse un peu de temps pour lencodage   	  	   
		
		//methode GET (non utilise)
		//console.log("generate_graph.php?graph_string="+str_graph+"&Spectrum_Allocation="+Spectrum_Allocation+"&Network_Capacity="+Network_Capacity+"&HetNet_Integration="+HetNet_Integration+"&Cost_Effective="+Cost_Effective+"&Energy_Efficient="+Energy_Efficient+"&Maximum_Coverage="+Maximum_Coverage+"&future_Proof="+future_Proof);	   
		//self.location.href="generate_graph.php?graph_string="+str_graph+"&Spectrum_Allocation="+Spectrum_Allocation+"&Network_Capacity="+Network_Capacity+"&HetNet_Integration="+HetNet_Integration+"&Cost_Effective="+Cost_Effective+"&Energy_Efficient="+Energy_Efficient+"&Maximum_Coverage="+Maximum_Coverage+"&future_Proof="+future_Proof+"&small_cell="+small_cell+"&enterprise="+enterprise+"&surveillance="+surveillance+"&corporate="+corporate+"&building="+building+"&traffic="+traffic;	   
	   }

	   </script>
  
<div id="screensaver" class="screensaver" style="display:none">
<img class= "logo_Zenic8" src="pic/images/logo_Zenic8.png">
<video id="audioPlayer" controls autoplay loop width = "100%">
<source src="pic/video/screensaver.mp4" />
</video>
</div>  
<table class="main_table" width="100%" id="myTable">
<tr id="ROW_0" >
	<td class ="bord_arrondi" align="center" colspan="1" bgcolor="#c00000">
												<a id="modal_AU" href="#openModal1">ACCESS UNIT</a>
												<div id="openModal1" class="modalDialog">
												<div>
												<a href="#close_modal" title="Close" class="close_modal">X</a>
												ACCESS UNIT
												<img src="pic/images/AU chassis_big.png" alt="AU Chassis" width="100%">
												</div>
												</div>
	</td>
	<td class="bord_arrondi hide_EU"  colspan="2" align="center" bgcolor="#f16726"> 
												<a id="modal_EU" href="#openModal2">EXPANSION UNIT </a>
												<div id="openModal2" class="modalDialog">
												<div>
												<a href="#close_modal" title="Close" class="close_modal">X</a>
												EXPANSION UNIT
												<img src="pic/images/EU (Reduced)_big.png" alt="EU Chassis" width="100%">
												</div>
												</div>
	 </td>
	<td class = "bord_arrondi" align="center" colspan="3" bgcolor="#00a2ff"> 
												<a id="modal_RU" href="#openModal3">REMOTE UNIT</a>
												<div id="openModal3" class="modalDialog">
												<div>
												<a href="#close_modal" title="Close" class="close_modal">X</a>
												REMOTE UNIT
												<img src="pic/images/RU_big1.png" alt="RU Chassis" width="100%">
												</div>
												</div>
	 </td>
</tr>
</table> 

  <script type="application/x-javascript">

function getOffset( el ) {
    var _x = 0;
    var _y = 0;
    while( el && !isNaN( el.offsetLeft ) && !isNaN( el.offsetTop ) ) {
        _x += el.offsetLeft - el.scrollLeft;
        _y += el.offsetTop - el.scrollTop;
        el = el.offsetParent;
    }
    return { top: _y, left: _x };
}

function getPos(el) {
    // yay readability
    for (var lx=0, ly=0;
         el != null;
         lx += el.offsetLeft, ly += el.offsetTop, el = el.offsetParent);
    return {x: lx,y: ly};
}

function draw_cable_AUM(id_father,id_enfant){
	console.log("Draw AUM");
  var canvas = document.getElementById("canvas");
  var ctx = canvas.getContext("2d");
  console.log('==== !! trace AU cable !!======');
  ctx.fillStyle = "red";
  
  ctx.beginPath();

 /*  var elem_father =	document.getElementsByClassName('show_IP');
    for( var i = 0; i < _elements.length; i++){
    	console.log(i);
    	console.log('- for du Hide ip -');
        _elements[i].className = 'hide_IP';
     } */
  
  console.log('document.getElementById("cellule_'+id_father+') : ' + document.getElementById("cellule_"+id_father));
    console.log('document.getElementById("cellule_'+id_enfant+') : ' + document.getElementById("cellule_"+id_father));
  var father_x = getPos( document.getElementById("cellule_"+id_father) ).x;
  var father_y = getPos( document.getElementById("cellule_"+id_father) ).y-150;
  var enfant_x = getPos( document.getElementById("cellule_"+id_enfant) ).x;
  var enfant_y = getPos( document.getElementById("cellule_"+id_enfant) ).y-150;
 // alert(father_x);
 // alert(father_y);
  console.log('Father x : ' + father_x);
  console.log('Father y : ' + father_y);
  console.log('Enfant x : ' + enfant_x);
  console.log('Enfant y : ' + enfant_y);
  
  if(enfant_x!==0){//bug du canvas}
  var size_father = 100;//document.getElementById("cellule_"+id_father).offsetWidth;
  var size_enfant = 100;//document.getElementById("cellule_"+id_enfant).offsetWidth;
  var decalage = 110;
  ctx.moveTo(father_x+size_father, father_y+100);
  ctx.lineTo(father_x+size_father, father_y+100);
  //pour le debug
  //ctx.moveTo(father_x, father_y);
  //ctx.lineTo(enfant_x, enfant_y); 
  ctx.lineTo(father_x+size_father+decalage, father_y+100);
  ctx.lineTo(father_x+size_father+decalage, enfant_y+80);
  ctx.lineTo(enfant_x+50, enfant_y+80);
  ctx.strokeStyle='red';
  ctx.lineWidth = 5;
  ctx.stroke();
  
  ctx.moveTo(father_x+size_father, father_y+100);
  ctx.lineTo(father_x+size_father+decalage, father_y+100);
  ctx.lineTo(father_x+size_father+decalage, enfant_y+80);
  ctx.lineTo(enfant_x+50, enfant_y+80);
  ctx.strokeStyle='white';
  ctx.lineWidth = 1;
  ctx.stroke();
}
 }

 function draw_cable_EU1(id_father,id_enfant){
	 	console.log("Draw EU1");
  var canvas = document.getElementById("canvas");
  var ctx = canvas.getContext("2d");
  console.log('==== !! trace cable !!======');
  ctx.fillStyle = "red";
  
  ctx.beginPath();

  var father_x = getPos( document.getElementById("cellule_"+id_father) ).x;
  var father_y = getPos( document.getElementById("cellule_"+id_father) ).y-150;
  var enfant_x = getPos( document.getElementById("cellule_"+id_enfant) ).x;
  var enfant_y = getPos( document.getElementById("cellule_"+id_enfant) ).y-150;
  
  console.log('Father x : ' + father_x);
  console.log('Father y : ' + father_y);
  console.log('Enfant x : ' + enfant_x);
  console.log('Enfant y : ' + enfant_y);
  
  var size_father = 100;//document.getElementById("cellule_"+id_father).offsetWidth;
  var size_enfant = 100;//document.getElementById("cellule_"+id_enfant).offsetWidth;
  var decalage = 110;
  ctx.moveTo(father_x+size_father, father_y+80);
  ctx.lineTo(father_x+size_father+decalage, father_y+80);
  ctx.lineTo(father_x+size_father+decalage, enfant_y+80);
  ctx.lineTo(enfant_x+50, enfant_y+80);
  ctx.strokeStyle='lightblue';
  ctx.lineWidth = 5;
  ctx.stroke();
  
  ctx.moveTo(father_x+size_father, father_y+80);
  ctx.lineTo(father_x+size_father+decalage, father_y+80);
  ctx.lineTo(father_x+size_father+decalage, enfant_y+80);
  ctx.lineTo(enfant_x+50, enfant_y+80);
  ctx.strokeStyle='white';
  ctx.lineWidth = 1;
  ctx.stroke();
 }

  function draw_cable_EU2(id_father,id_enfant){
	  	console.log("Draw EU2");
  var canvas = document.getElementById("canvas");
  var ctx = canvas.getContext("2d");
  console.log('father id : ' + id_father);
  ctx.fillStyle = "red";
  
  ctx.beginPath();

  var father_x = getPos( document.getElementById("cellule_"+id_father) ).x;
  var father_y = getPos( document.getElementById("cellule_"+id_father) ).y-150;
  var enfant_x = getPos( document.getElementById("cellule_"+id_enfant) ).x;
  var enfant_y = getPos( document.getElementById("cellule_"+id_enfant) ).y-150;
  
  console.log('Father x : ' + father_x);
  console.log('Father y : ' + father_y);
  console.log('Enfant x : ' + enfant_x);
  console.log('Enfant y : ' + enfant_y);
  
 var size_father = 100;//document.getElementById("cellule_"+id_father).offsetWidth;
  var size_enfant = 100;//document.getElementById("cellule_"+id_enfant).offsetWidth;
  var decalage = 80;
  ctx.moveTo(father_x+size_father, father_y+100);
  ctx.lineTo(father_x+size_father+decalage, father_y+100);
  ctx.lineTo(father_x+size_father+decalage, enfant_y+100);
  ctx.lineTo(enfant_x+50, enfant_y+100);
  ctx.strokeStyle='green';
  ctx.lineWidth = 5;
  ctx.stroke();
  
 var size_father = document.getElementById("cellule_"+id_father).offsetWidth;
  var size_enfant = document.getElementById("cellule_"+id_enfant).offsetWidth;
  var decalage = 0;
  ctx.moveTo(father_x+size_father, father_y);
  ctx.lineTo(father_x+size_father+decalage, father_y);
  ctx.lineTo(father_x+size_father+decalage, enfant_y);
  ctx.lineTo(enfant_x+50, enfant_y);
  ctx.strokeStyle='white';
  ctx.lineWidth = 1;
  ctx.stroke();
 }
 

 
 
 //barre de progression
 
 
 </script>  	
 
</body>
</html>