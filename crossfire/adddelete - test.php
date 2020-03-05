<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8" />
      <title>Test jQuery</title>
	  <link rel="stylesheet" type="text/css" href="tableauL.css">
	     <script>
		var global_AU = 1;
		var global_EU = 1;
		
		var cmpt_unit = 2;
		var cmpt_row = 2;
		var compt_row = 0; 
				
	  //une ligne par chassis
	 
	  //tablo general - 10 Max
	  tablo = new Array();
	  //limite a 4 EU avec 6 RUM/RUS1/RUS2(/IP)
	  //EU de l'AU 1
	  tab_EUa_1 =new Array('v',new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.')); 
	  tab_EUa_2 =new Array('v',new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'));
	  tab_EUa_3 =new Array('v',new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'));
	  tab_EUa_4 =new Array('v',new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'));
	  tab_EUa_5 =new Array('v',new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'));
	  tab_EUa_6 =new Array('v',new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'));
	  //EU de l'AU 2
	  tab_EUb_1 =new Array('v',new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.')); 
	  tab_EUb_2 =new Array('v',new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'));
	  tab_EUb_3 =new Array('v',new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'));
	  tab_EUb_4 =new Array('v',new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'));
	  tab_EUb_5 =new Array('v',new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'));
	  tab_EUb_6 =new Array('v',new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'));
	  //EU de l'AU 3
	  tab_EUc_1 =new Array('v',new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.')); 
	  tab_EUc_2 =new Array('v',new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'));
	  tab_EUc_3 =new Array('v',new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'));
	  tab_EUc_4 =new Array('v',new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'));
	  tab_EUc_5 =new Array('v',new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'));
	  tab_EUc_6 =new Array('v',new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'));
	  //EU de l'AU 4
	  tab_EUd_1 =new Array('v',new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.')); 
	  tab_EUd_2 =new Array('v',new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'));
	  tab_EUd_3 =new Array('v',new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'));
	  tab_EUd_4 =new Array('v',new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'));
	  tab_EUd_5 =new Array('v',new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'));
	  tab_EUd_6 =new Array('v',new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'));
	  //EU de l'AU 5
	  tab_EUe_1 =new Array('v',new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.')); 
	  tab_EUe_2 =new Array('v',new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'));
	  tab_EUe_3 =new Array('v',new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'));
	  tab_EUe_4 =new Array('v',new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'));
	  tab_EUe_5 =new Array('v',new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'));
	  tab_EUe_6 =new Array('v',new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'));
	  //EU de l'AU 6
	  tab_EUf_1 =new Array('v',new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.')); 
	  tab_EUf_2 =new Array('v',new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'));
	  tab_EUf_3 =new Array('v',new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'));
	  tab_EUf_4 =new Array('v',new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'));
	  tab_EUf_5 =new Array('v',new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'));
	  tab_EUf_6 =new Array('v',new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'));
	  //EU de l'AU 7
	  tab_EUg_1 =new Array('v',new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.')); 
	  tab_EUg_2 =new Array('v',new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'));
	  tab_EUg_3 =new Array('v',new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'));
	  tab_EUg_4 =new Array('v',new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'));
	  tab_EUg_5 =new Array('v',new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'));
	  tab_EUg_6 =new Array('v',new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'));
	  //EU de l'AU 8
	  tab_EUh_1 =new Array('v',new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.')); 
	  tab_EUh_2 =new Array('v',new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'));
	  tab_EUh_3 =new Array('v',new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'));
	  tab_EUh_4 =new Array('v',new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'));
	  tab_EUh_5 =new Array('v',new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'));
	  tab_EUh_6 =new Array('v',new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'));
	  //EU de l'AU 9
	  tab_EUi_1 =new Array('v',new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.')); 
	  tab_EUi_2 =new Array('v',new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'));
	  tab_EUi_3 =new Array('v',new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'));
	  tab_EUi_4 =new Array('v',new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'));
	  tab_EUi_5 =new Array('v',new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'));
	  tab_EUi_6 =new Array('v',new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'));
	  //EU de l'AU 10
	  tab_EUj_1 =new Array('v',new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.')); 
	  tab_EUj_2 =new Array('v',new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'));
	  tab_EUj_3 =new Array('v',new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'));
	  tab_EUj_4 =new Array('v',new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'));
	  tab_EUj_5 =new Array('v',new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'));
	  tab_EUj_6 =new Array('v',new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'),new Array('M','.','.'));
	  
	   //M1/ S1/ S2/ EU[10]/RU/ S1/ S2/IP[10]
	  tablo[0] = new Array('O','O','O',new Array(tab_EUa_1,tab_EUa_2,tab_EUa_3,tab_EUa_4,tab_EUa_5,tab_EUa_6));
	  tablo[1] = new Array('O','O','O',new Array(tab_EUb_1,tab_EUb_2,tab_EUb_3,tab_EUb_4,tab_EUb_5,tab_EUb_6));
	  tablo[2] = new Array('O','O','O',new Array(tab_EUc_1,tab_EUc_2,tab_EUc_3,tab_EUc_4,tab_EUc_5,tab_EUc_6));
	  tablo[3] = new Array('O','O','O',new Array(tab_EUd_1,tab_EUd_2,tab_EUd_3,tab_EUd_4,tab_EUd_5,tab_EUd_6));
	  tablo[4] = new Array('O','O','O',new Array(tab_EUe_1,tab_EUe_2,tab_EUe_3,tab_EUe_4,tab_EUe_5,tab_EUe_6));
	  tablo[5] = new Array('O','O','O',new Array(tab_EUf_1,tab_EUf_2,tab_EUf_3,tab_EUf_4,tab_EUf_5,tab_EUf_6));
	  tablo[6] = new Array('O','O','O',new Array(tab_EUg_1,tab_EUg_2,tab_EUg_3,tab_EUg_4,tab_EUg_5,tab_EUg_6));
	  tablo[7] = new Array('O','O','O',new Array(tab_EUh_1,tab_EUh_2,tab_EUh_3,tab_EUh_4,tab_EUh_5,tab_EUh_6));
	  tablo[8] = new Array('O','O','O',new Array(tab_EUi_1,tab_EUi_2,tab_EUi_3,tab_EUi_4,tab_EUi_5,tab_EUi_6));
	  tablo[9] = new Array('O','O','O',new Array(tab_EUj_1,tab_EUj_2,tab_EUj_3,tab_EUj_4,tab_EUj_5,tab_EUj_6));

	  //document.write(tablo[0] + '\n' + tablo[1] + '\n' + tablo[2] + '\n' + tablo[3] + '\n' + tablo[4] + '\n' + tablo[5] + '\n' + tablo[6] + '\n' + tablo[7] + '\n' + tablo[8] + '\n' + tablo[9]);
	  //Exemple de remplissage du tablo
	  //tablo[9][3][0] = 'X'; //Ajout dune EU pour le 10e chassis : en dot AU10 ->EU1
	  //tablo[9][7][1] = 'X'; //Ajout dune IP pour le 10e chassis
	  
	  
	  
 	   
var size = 1;
var redescend = 13;
function ZoomIn() {
if (size < 1) {
//alert(remonte);
size += 0.1;
	//document.body.style.webkitTransform = 'scale(' + size + ')';        // Chrome, Opera, Safari
	//document.body.style.msTransform = 'scale(' + size + ')';          // IE 9
	//document.body.style.transform = 'scale(' + size + ')';				//Mozilla
	//document.get('tableid').style.transform = 'scale(' + size + ')';
	//document.getElementById("zoomm").style.transform = 'scaleY(' + size + ')';
var _elements =	document.getElementsByClassName('AU');
	for( var i = 0; i < _elements.length; i ++){
    _elements[i].style.transform = 'scaleY(' + size + ')';
	_elements[i].style.top = redescend + 'px';
}
	redescend += 13;
	//alert(remonte);
	//alert('asd');
	}
}
var change_module = function(){
var nb_mod_m=0;
if (document.getElementById("mod1_AUM1_VVV").selectedIndex !== 0) {nb_mod_m+=1;}
//alert(document.getElementById("mod2_AUM1_VVV").selectedIndex);
if (document.getElementById("mod2_AUM1_VVV").selectedIndex !== 0) {nb_mod_m+=1;}
//alert(document.getElementById("mod2_AUM1_VVV").selectedIndex);
if (document.getElementById("mod3_AUM1_VVV").selectedIndex !== 0) {nb_mod_m+=1;}
//alert(document.getElementById("mod2_AUM1_VVV").selectedIndex);
if (document.getElementById("mod4_AUM1_VVV").selectedIndex !== 0) {nb_mod_m+=1;}
//alert(document.getElementById("mod2_AUM1_VVV").selectedIndex);

if (nb_mod_m == 0){document.getElementById("img_AUM").src="pic/images/AU_0_mod.png"};
if (nb_mod_m == 1){document.getElementById("img_AUM").src="pic/images/AU_1_mod.png"};
if (nb_mod_m == 2){document.getElementById("img_AUM").src="pic/images/AU_2_mod.png"};
if (nb_mod_m == 3){document.getElementById("img_AUM").src="pic/images/AU_3_mod.png"};
if (nb_mod_m == 4){document.getElementById("img_AUM").src="pic/images/AU_4_mod.png"};

var nb_mod_s1=0;
if (document.getElementById("mod1_AUS1_VVV").selectedIndex != 0) {nb_mod_s1+=1;}
//alert(document.getElementById("mod2_AUM1_VVV").selectedIndex);
if (document.getElementById("mod2_AUS1_VVV").selectedIndex != 0) {nb_mod_s1+=1;}
//alert(document.getElementById("mod2_AUM1_VVV").selectedIndex);
if (document.getElementById("mod3_AUS1_VVV").selectedIndex != 0) {nb_mod_s1+=1;}
//alert(document.getElementById("mod2_AUM1_VVV").selectedIndex);
if (document.getElementById("mod4_AUS1_VVV").selectedIndex != 0) {nb_mod_s1+=1;}
//alert(document.getElementById("mod2_AUM1_VVV").selectedIndex);

if (nb_mod_s1 == 0){document.getElementById("img_AUS1").src="pic/images/AU_0_mod.png"};
if (nb_mod_s1 == 1){document.getElementById("img_AUS1").src="pic/images/AU_1_mod.png"};
if (nb_mod_s1 == 2){document.getElementById("img_AUS1").src="pic/images/AU_2_mod.png"};
if (nb_mod_s1 == 3){document.getElementById("img_AUS1").src="pic/images/AU_3_mod.png"};
if (nb_mod_s1 == 4){document.getElementById("img_AUS1").src="pic/images/AU_4_mod.png"};

var nb_mod_s2=0;
if (document.getElementById("mod1_AUS2_VVV").selectedIndex != 0) {nb_mod_s2+=1;}
//alert(document.getElementById("mod2_AUM1_VVV").selectedIndex);
if (document.getElementById("mod2_AUS2_VVV").selectedIndex != 0) {nb_mod_s2+=1;}
//alert(document.getElementById("mod2_AUM1_VVV").selectedIndex);
if (document.getElementById("mod3_AUS2_VVV").selectedIndex != 0) {nb_mod_s2+=1;}
//alert(document.getElementById("mod2_AUM1_VVV").selectedIndex);
if (document.getElementById("mod4_AUS2_VVV").selectedIndex != 0) {nb_mod_s2+=1;}
//alert(document.getElementById("mod2_AUM1_VVV").selectedIndex);

if (nb_mod_s2 == 0){document.getElementById("img_AUS2").src="pic/images/AU_0_mod.png"};
if (nb_mod_s2 == 1){document.getElementById("img_AUS2").src="pic/images/AU_1_mod.png"};
if (nb_mod_s2 == 2){document.getElementById("img_AUS2").src="pic/images/AU_2_mod.png"};
if (nb_mod_s2 == 3){document.getElementById("img_AUS2").src="pic/images/AU_3_mod.png"};
if (nb_mod_s2 == 4){document.getElementById("img_AUS2").src="pic/images/AU_4_mod.png"};
}

function change_remote(){
if(document.getElementById('low_RUM1_WWW').checked) {
 document.getElementById("photo_ru_master").src="pic/images/remot_lp.png"
}
if(document.getElementById('high_RUM1_WWW').checked) {
 document.getElementById("photo_ru_master").src="pic/images/remot_hp.png"
}
 if(document.getElementById('low_RUS1_WWW').checked) {
 document.getElementById("photo_ru_slave1").src="pic/images/remot_lp.png"
}
if(document.getElementById('high_RUS1_WWW').checked) {
 document.getElementById("photo_ru_slave1").src="pic/images/remot_hp.png"
}
if(document.getElementById('low_RUS2_WWW').checked) {
 document.getElementById("photo_ru_slave2").src="pic/images/remot_lp.png"
}
if(document.getElementById('high_RUS2_WWW').checked) {
 document.getElementById("photo_ru_slave2").src="pic/images/remot_hp.png"
}
}

	  
	  
	  
	  	var template_AU = 'xxx ECHEC xxx';
		var template_EU1 = 'xxx ECHEC xxx';
		var template_EU2 = 'xxx ECHEC xxx';
		var template_RU = 'xxx ECHEC xxx';
		 template_AU = '<?php echo str_replace("\t", "", file_get_contents("new_au.txt")); ?>';
		 template_EU1 = '<?php echo str_replace("\t", "", file_get_contents("new_eu1.txt")); ?>';
		 template_EU2 = '<?php echo str_replace("\t", "", file_get_contents("new_eu2.txt")); ?>';
		 template_RU = '<?php echo str_replace("\t", "", file_get_contents("new_ru.txt")); ?>';

		 console.log('------ LOADING AU TEMPLATE ------- : ' + template_AU);
		 console.log('------ LOADING EU TEMPLATE ------- : ' + template_EU1);
		 console.log('------ LOADING EU TEMPLATE ------- : ' + template_EU2);
		 console.log('------ LOADING RU TEMPLATE ------- : ' + template_RU);

				   
				   
		//declaration de la class unit (simulation dun objet)
		var type;
		function Unit(p_id, p_type, p_activate, p_input, p_output1, p_output2, p_output3, p_output4, p_output5, p_output6) {
			
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
				console.log('>> UNIT CrEATED :   ' + this.id + '                    // ' + p_input);
			//Methode de la class
			this.Activation = function(on_off) { //"true" or "false"
				this.activated = on_off;
				
			//	if (activate = "false") { //
					//on desactive tous les enfants
			//		ActiveDeactiv(document.getElementById(output1));
			//		ActiveDeactiv(document.getElementById(output2));
			//		ActiveDeactiv(document.getElementById(output3));
			//		ActiveDeactiv(document.getElementById(output4));
			//		ActiveDeactiv(document.getElementById(output5));
			//		ActiveDeactiv(document.getElementById(output6));
			//	}
            }
			
		}
		
		var new_unit = new Unit("-1","-1","-1","-1","-1","-1","-1","-1","-1","-1");
		new_unit.Activation("false");
		//new_unit.activated = "true"; // both work
		console.log("Activation: " + new_unit.activated);
		
		//creation du tablo d'objet
		var T_unit = new Array; // tablo dynamique qui ne sarrete pas de grandir, un element supprime disparait du tablo mais nest jamais remplace
		
		var nb_unit=0;
		//on ajoute une unit au post 0;
		var AddUnitTtablo = function(id_tab,id, type, activ, inpt, outpt1, outpt2, outpt3, outpt4, outpt5, outpt6) {
			T_unit[id_tab] = new Unit(id, type, activ, inpt, outpt1, outpt2, outpt3, outpt4, outpt5, outpt6);
			nb_unit++;
			console.log('            ---> added to T_Unit');
			
			//***** display tablo
			/* var l = 0;
			var x = document.createElement("div");  // Creates a new <div> node
			x.textContent = '';
			for(l=0;l<nb_unit;l++){
				x.textContent += T_unit[l] + '\n';	 */
			//}
			//ligne de separation
			//document.body.appendChild(x);           // Adds to the document	
			//var y = document.createElement("div");  // Creates a new <div> node
			//y.textContent = '\n' + "________________________________________________________________________________________________" + '\n';
			//document.body.appendChild(y);
		}
		
	var GenerateGraph = function() {
		console.log('console.log');
		console.log('cmpt_unit : ' + cmpt_unit);
			var j = 0;
			var str_graph = '';
			
			str_graph = 'digraph{';
			str_graph+='rankdir=LR;';
			for (j=1; j<cmpt_unit; j++){
				console.log(T_unit[j].activated);
				if (T_unit[j].activated == "true"){
					if (T_unit[j].input != ''){
						if (typeof T_unit[T_unit[j].input] !== 'undefined'){str_graph +=  T_unit[T_unit[j].input].id + ' -> ' + T_unit[j].id + ' ';}
						//str_graph += T_unit[j].id + ' -> ' + T_unit[j].output1 + ' ';
						//str_graph += T_unit[j].id + ' -> ' + T_unit[j].output2 + ' ';
						//str_graph += T_unit[j].id + ' -> ' + T_unit[j].output3 + ' ';
						//str_graph += T_unit[j].id + ' -> ' + T_unit[j].output4 + ' ';
						//str_graph += T_unit[j].id + ' -> ' + T_unit[j].output5 + ' ';
						//str_graph += T_unit[j].id + ' -> ' + T_unit[j].output6 + ' ';
					}
				}
			}
			str_graph += '}';
			console.log(str_graph);
			return str_graph;
		}
				   
	function switchaff() { 
		listenonaff = document.getElementsByClassName('nonaff'); 
		listeaff = document.getElementsByClassName('aff') 
		
		if (listenonaff.length == 0) { 
			while(listeaff.length>0) { 
				listeaff[0].className = 'nonaff'; 
			} 
		document.getElementById('tablo').id = "tablohidden"; 
		} 
		else { 
			while(listenonaff.length>0) { 
				listenonaff[0].className = 'aff'; 
			} 
			document.getElementById('tablohidden').id = "tablo"; 
		} 
	} 

	function ipservice() { 
	listenonip = document.getElementsByClassName('nonip'); 
	listeip = document.getElementsByClassName('ip') 

	if (listenonip.length == 0) { 
		while(listeip.length>0) { 
			listeip[0].className = 'nonip'; 
		} 
	document.getElementById('tabloip').id = "tabloiphidden"; 
	} 
	else { 
		while(listenonip.length>0){ 
			listenonip[0].className = 'ip'; 
		} 
	document.getElementById('tabloiphidden').id = "tabloip"; 
	} 
} 

	var ActiveDeactiv = function ActiveDeactiv(id,row,id_tab){// on se sert de l'id du bouton pour changer sa couleur	
		
		//console.log("cellule_" + String(id_tab));
		//var bodyunit = document.getElementById("cellule_" + String(id) + "_" + String(row));
		var bodyunit = document.getElementById("cellule_" + String(id_tab));
		var father = '';
				
	    if (bodyunit.className=='body_unit_inactive'){
			console.log('============ Activation de id_tab : ' + id_tab + '====================');	
		
			// SOLUTION 1 : recherche du father dynamiquement
			//T_unit[id_tab].activated = "true";
			//bodyunit.className='body_unit';
			//if (T_unit[id_tab].type !== "AU_Master"){
			//	father =Fetch_Father(row, id_tab); //on recupere l'id du father
			
			// SOLUTION 2 : on connait deja le pere, on regarde s'il est active
			if (T_unit[id_tab].type == "AU_Master"){// si cest un AU+Master on n'attend pas que l'input soit active
				console.log(" *** Activation du AU Master (No father)");
				T_unit[id_tab].activated = "true";
				bodyunit.className='body_unit';
				document.getElementById(id).checked = true;
			}else{	
				console.log("****Activation NON AU_Master");
				console.log('-- father is : ' + T_unit[id_tab].input);
				if (typeof T_unit[T_unit[id_tab].input] !== 'undefined'){
					console.log("-- father defined");
					if (T_unit[T_unit[id_tab].input].activated == 'true'){
						console.log("-- father is activated");
				
						bodyunit.className='body_unit';
						document.getElementById(id).checked = true;
						T_unit[id_tab].activated = "true";
						console.log('-- father is : ' + T_unit[id_tab].input);
					
						if (Save_Output(T_unit[id_tab].input,id_tab)){//on a trouve le pere, on verifie quon puisse bien enregistrer l'unit comme une output du pere
							//T_unit[id_tab].input = father;
							console.log('>> Output recorded');
						}else{	document.getElementById(id).checked = false; alert('This unit is limited to 6 output');	}
					}else {	document.getElementById(id).checked = false; alert('Father unit is not activated');	}
				}
			}
	   }else{
		   
			console.log('============ DESActivation de id_tab : ' + id_tab + '====================');	
			
			T_unit[id_tab].activated = "false";
			//T_unit[id_tab].input = '';//provient de solution 1
			bodyunit.className='body_unit_inactive';
			console.log("id_tab : " + id_tab);
			Deactiv_Enfant(id_tab);
			console.log("id : " + id);
			if (document.getElementById(id) !== null){document.getElementById(id).checked = false;}
			console.log("free output for : " + id_tab);
			if(Free_Output(id_tab)){
				console.log('>> Output free with success');
			}
			else{
				console.log('>> FAILURE ! free output');
			}
		}		
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
			 console.log('================== Desactive Enfants : ' + id_tab + ' ===================');
			var id_button = 0;
			
			if (typeof T_unit[T_unit[id_tab].output1] !== 'undefined') {
				console.log('desactiv output1 : ' + T_unit[id_tab].output1);
				id_button = id_tab2id_div (T_unit[id_tab].output1);
				if (T_unit[T_unit[id_tab].output1].activated == 'true'){
					ActiveDeactiv(id_button,0,T_unit[id_tab].output1);}
			}else{console.log('     > no output1');}					//row is usefull only for activation
					
					
			if (typeof T_unit[T_unit[id_tab].output2] !== 'undefined') {
				console.log('desactiv output2 : ' + T_unit[id_tab].output2);
				id_button = id_tab2id_div (T_unit[id_tab].output2);
				if (T_unit[T_unit[id_tab].output2].activated == 'true'){
					ActiveDeactiv(id_button,0,T_unit[id_tab].output2);} 
			}else{console.log('     > no output2');}					//row is usefull only for activation
					

			if (typeof T_unit[T_unit[id_tab].output3] !== 'undefined') {
				console.log('desactiv output3 : ' + T_unit[id_tab].output3);
				id_button = id_tab2id_div (T_unit[id_tab].output3);
				if (T_unit[T_unit[id_tab].output3].activated == 'true'){
					ActiveDeactiv(id_button,0,T_unit[id_tab].output3);}
			}else{console.log('     > no output3');}					//row is usefull only for activation
			
					

			if (typeof T_unit[T_unit[id_tab].output4] !== 'undefined') {
				console.log('desactiv output4 : ' + T_unit[id_tab].output4);
				id_button = id_tab2id_div (T_unit[id_tab].output4);
				if (T_unit[T_unit[id_tab].output4].activated == 'true'){
					ActiveDeactiv(id_button,0,T_unit[id_tab].output4);}
			}else{console.log('     > no output4');}					//row is usefull only for activation
			
					

			if (typeof T_unit[T_unit[id_tab].output5] !== 'undefined') {
				console.log('desactiv output5 : ' + T_unit[id_tab].output5);
				id_button = id_tab2id_div (T_unit[id_tab].output5);
				if (T_unit[T_unit[id_tab].output5].activated == 'true'){
					ActiveDeactiv(id_button,0,T_unit[id_tab].output5);}
			}else{console.log('     > no output5');}					//row is usefull only for activation
			
					

			if (typeof T_unit[T_unit[id_tab].output6] !== 'undefined') {
				console.log('desactiv output6 : ' + T_unit[id_tab].output6);
				id_button = id_tab2id_div (T_unit[id_tab].output6);
				if (T_unit[T_unit[id_tab].output6].activated == 'true'){
					ActiveDeactiv(id_button,0,T_unit[id_tab].output6);} 
			}else{console.log('     > no output6');}					//row is usefull only for activation
			
		}
		 
	var Save_Output = function(father,id_tab){
		 console.log('================== Save Output ===================');
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
	
	function AddNewAU(RowNumber){
		console.log('============ NEW AU MASTER =================');
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
			
			var AU_M = "AU"+compt_row+"_M";
			cmpt_unit++; 
			var id_AUM = cmpt_unit;
			new_AU = new_AU.replace('XXXAUM',String(cmpt_unit));
			new_AU = new_AU.replace('XXXAUM',String(cmpt_unit));	//la 2e ligne est pour l'id_tab	
			new_AU = new_AU.replace('XXXAUM',String(cmpt_unit));	//la 2e ligne est pour lacellule du body_unit				
			T_unit[cmpt_unit] = new Unit(AU_M, "AU_Master", "false", "-1", outpt1, outpt2, outpt3, outpt4, outpt5, outpt6); console.log('            ---> added to T_Unit');
			
			var AU_S1 =  "AU"+compt_row+"_S1";
			cmpt_unit++; 
			new_AU = new_AU.replace('XXXAUS1',String(cmpt_unit));
			new_AU = new_AU.replace('XXXAUS1',String(cmpt_unit));//la 2e ligne est pour l'id_tab	
			new_AU = new_AU.replace('XXXAUS1',String(cmpt_unit));			
			T_unit[cmpt_unit] = new Unit(AU_S1, "AU_Slave", "false", id_AUM, outpt1, outpt2, outpt3, outpt4, outpt5, outpt6); console.log('            ---> added to T_Unit');
			
			var AU_S2 = "AU"+compt_row+"_S2";
			cmpt_unit++; 
			new_AU = new_AU.replace('XXXAUS2',String(cmpt_unit));
			new_AU = new_AU.replace('XXXAUS2',String(cmpt_unit));//la 2e ligne est pour l'id_tab
			new_AU = new_AU.replace('XXXAUS2',String(cmpt_unit));			
			T_unit[cmpt_unit] = new Unit(AU_S2, "AU_Slave", "false", id_AUM, outpt1, outpt2, outpt3, outpt4, outpt5, outpt6); console.log('            ---> added to T_Unit');
			
			/* var EU_1 = "EU"+compt_row+"_1";
			cmpt_unit++;
			var id_EU1 = cmpt_unit;			
			new_AU = new_AU.replace('XXXEU1', String(cmpt_unit));
			new_AU = new_AU.replace('XXXEU1', String(cmpt_unit));//la 2e ligne est pour l'id_tab
			new_AU = new_AU.replace('XXXEU1', String(cmpt_unit));			
			T_unit[cmpt_unit] = new Unit(EU_1, "Expansion", "false", id_AUM, outpt1, outpt2, outpt3, outpt4, outpt5, outpt6); console.log('            ---> added to T_Unit');
			
			var EU_2 = "EU"+compt_row+"_2";
			cmpt_unit++; 
			var id_EU2 = cmpt_unit;	
			new_AU = new_AU.replace('XXXEU2', String(cmpt_unit));
			new_AU = new_AU.replace('XXXEU2', String(cmpt_unit));
			new_AU = new_AU.replace('XXXEU2', String(cmpt_unit));
			T_unit[cmpt_unit] = new Unit(EU_2, "Expansion", "false", id_EU1, outpt1, outpt2, outpt3, outpt4, outpt5, outpt6); console.log('            ---> added to T_Unit');
 */			
			
			var RU_M = "RU"+compt_row+"_M";
			cmpt_unit++; 
			var id_RUM = cmpt_unit;
			new_AU = new_AU.replace('XXXRUM', String(cmpt_unit));
			new_AU = new_AU.replace('XXXRUM', String(cmpt_unit));
			new_AU = new_AU.replace('XXXRUM', String(cmpt_unit));
			T_unit[cmpt_unit] = new Unit(RU_M, "RU_Master", "false", id_AUM, outpt1, outpt2, outpt3, outpt4, outpt5, outpt6); console.log('            ---> added to T_Unit');
			
			var RU_S1 = "RU"+compt_row+"_S1";
			cmpt_unit++; 
			new_AU = new_AU.replace('XXXRUS1', String(cmpt_unit));
			new_AU = new_AU.replace('XXXRUS1', String(cmpt_unit));
			new_AU = new_AU.replace('XXXRUS1', String(cmpt_unit));
			T_unit[cmpt_unit] = new Unit(RU_S1, "RU_Slave", "false", id_RUM, outpt1, outpt2, outpt3, outpt4, outpt5, outpt6); console.log('            ---> added to T_Unit');
			
			var RU_S2 = "RU"+compt_row+"_S2";
			cmpt_unit++;  
			new_AU = new_AU.replace('XXXRUS2',cmpt_unit);
			new_AU = new_AU.replace('XXXRUS2', String(cmpt_unit));
			new_AU = new_AU.replace('XXXRUS2', String(cmpt_unit));
			T_unit[cmpt_unit] = new Unit(RU_S2, "RU_Slave", "false", id_RUM, outpt1, outpt2, outpt3, outpt4, outpt5, outpt6); console.log('            ---> added to T_Unit');
			
			
			new_AU = new_AU.replace(/WWW/g, compt_row);
			compt_row++;
			new_AU = new_AU.replace(/VVV/g,cmpt_row);//indice des boutons
			new_AU = new_AU.replace(/RRR/g,cmpt_row);//indice des boutons
				
			//alert(new_AU);					
			var idElt = 'ROW_' + String(RowNumber); 
	       console.log('Insert at row : ' + idElt);
			$(new_AU).insertAfter(document.getElementById(idElt));
		}
	
	function AddNewEU1(RowNumber){
		console.log('============ NEW EU 1 =================');
		parseInt(compt_row);
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
			
			var EU_1 = "EU"+compt_row+"_1";
			cmpt_unit++;
			var id_EU1 = cmpt_unit;			
			new_EU = new_EU.replace('XXXEU1', String(cmpt_unit));
			new_EU = new_EU.replace('XXXEU1', String(cmpt_unit));//la 2e ligne est pour l'id_tab
			new_EU = new_EU.replace('XXXEU1', String(cmpt_unit));
			var father = Fetch_Father(compt_row);
			console.log('father de EU1 added : ' + father);
			T_unit[cmpt_unit] = new Unit(EU_1, "Expansion", "false", father, outpt1, outpt2, outpt3, outpt4, outpt5, outpt6); console.log('            ---> added to T_Unit');
			
			var EU_2 = "EU"+compt_row+"_2";
			cmpt_unit++; 
			var id_EU2 = cmpt_unit;	
			new_EU = new_EU.replace('XXXEU2', String(cmpt_unit));
			new_EU = new_EU.replace('XXXEU2', String(cmpt_unit));
			new_EU = new_EU.replace('XXXEU2', String(cmpt_unit));
			T_unit[cmpt_unit] = new Unit(EU_2, "Expansion", "false", id_EU1, outpt1, outpt2, outpt3, outpt4, outpt5, outpt6); console.log('            ---> added to T_Unit');
			
			var RU_M = "RU"+compt_row+"_M";
			cmpt_unit++; 
			var id_RUM = cmpt_unit;
			new_EU = new_EU.replace('XXXRUM', String(cmpt_unit));
			new_EU = new_EU.replace('XXXRUM', String(cmpt_unit));
			new_EU = new_EU.replace('XXXRUM', String(cmpt_unit));
			T_unit[cmpt_unit] = new Unit(RU_M, "RU_Master", "false", id_EU2, outpt1, outpt2, outpt3, outpt4, outpt5, outpt6); console.log('            ---> added to T_Unit');
			
			var RU_S1 = "RU"+compt_row+"_S1";
			cmpt_unit++; 
			new_EU = new_EU.replace('XXXRUS1', String(cmpt_unit));
			new_EU = new_EU.replace('XXXRUS1', String(cmpt_unit));
			new_EU = new_EU.replace('XXXRUS1', String(cmpt_unit));
			T_unit[cmpt_unit] = new Unit(RU_S1, "RU_Slave", "false", id_RUM, outpt1, outpt2, outpt3, outpt4, outpt5, outpt6); console.log('            ---> added to T_Unit');
			
			var RU_S2 = "RU"+compt_row+"_S2";
			cmpt_unit++;  
			new_EU = new_EU.replace('XXXRUS2',cmpt_unit);
			new_EU = new_EU.replace('XXXRUS2', String(cmpt_unit));
			new_EU = new_EU.replace('XXXRUS2', String(cmpt_unit));
			T_unit[cmpt_unit] = new Unit(RU_S2, "RU_Slave", "false", id_RUM, outpt1, outpt2, outpt3, outpt4, outpt5, outpt6); console.log('            ---> added to T_Unit');
			
			
			new_EU = new_EU.replace(/WWW/g, compt_row);
			compt_row++;
			new_EU = new_EU.replace(/VVV/g,cmpt_row);//indice des boutons
			new_EU = new_EU.replace(/RRR/g,cmpt_row);//indice des boutons
				
			//alert(new_EU);					
			var idElt = 'ROW_' + String(RowNumber); 
	       console.log('Insert at row : ' + idElt);
			$(new_EU).insertAfter(document.getElementById(idElt));
		}
	
	function AddNewEU2(RowNumber){
		console.log('============ NEW EU 2 =================');
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
			
			var EU_2 = "EU"+compt_row+"_2";
			cmpt_unit++; 
			var id_EU2 = cmpt_unit;	
			new_EU = new_EU.replace('XXXEU2', String(cmpt_unit));
			new_EU = new_EU.replace('XXXEU2', String(cmpt_unit));
			new_EU = new_EU.replace('XXXEU2', String(cmpt_unit));
			var father = Fetch_Father(compt_row);
			console.log('father de EU2 added : ' + father);
			T_unit[cmpt_unit] = new Unit(EU_2, "Expansion", "false", father, outpt1, outpt2, outpt3, outpt4, outpt5, outpt6); console.log('            ---> added to T_Unit');
			
			var RU_M = "RU"+compt_row+"_M";
			cmpt_unit++; 
			var id_RUM = cmpt_unit;
			new_EU = new_EU.replace('XXXRUM', String(cmpt_unit));
			new_EU = new_EU.replace('XXXRUM', String(cmpt_unit));
			new_EU = new_EU.replace('XXXRUM', String(cmpt_unit));
			T_unit[cmpt_unit] = new Unit(RU_M, "RU_Master", "false", id_EU2, outpt1, outpt2, outpt3, outpt4, outpt5, outpt6); console.log('            ---> added to T_Unit');
			
			var RU_S1 = "RU"+compt_row+"_S1";
			cmpt_unit++; 
			new_EU = new_EU.replace('XXXRUS1', String(cmpt_unit));
			new_EU = new_EU.replace('XXXRUS1', String(cmpt_unit));
			new_EU = new_EU.replace('XXXRUS1', String(cmpt_unit));
			T_unit[cmpt_unit] = new Unit(RU_S1, "RU_Slave", "false", id_RUM, outpt1, outpt2, outpt3, outpt4, outpt5, outpt6); console.log('            ---> added to T_Unit');
			
			var RU_S2 = "RU"+compt_row+"_S2";
			cmpt_unit++;  
			new_EU = new_EU.replace('XXXRUS2',cmpt_unit);
			new_EU = new_EU.replace('XXXRUS2', String(cmpt_unit));
			new_EU = new_EU.replace('XXXRUS2', String(cmpt_unit));
			T_unit[cmpt_unit] = new Unit(RU_S2, "RU_Slave", "false", id_RUM, outpt1, outpt2, outpt3, outpt4, outpt5, outpt6); console.log('            ---> added to T_Unit');
			
			
			new_EU = new_EU.replace(/WWW/g, compt_row);
			compt_row++;
			new_EU = new_EU.replace(/VVV/g,cmpt_row);//indice des boutons
			new_EU = new_EU.replace(/RRR/g,cmpt_row);//indice des boutons
				
			//alert(new_EU);					
			var idElt = 'ROW_' + String(RowNumber); 
	       console.log('Insert at row : ' + idElt);
			$(new_EU).insertAfter(document.getElementById(idElt));
		}
		
	function AddNewRU(RowNumber){
	console.log('============ NEW RU Master =================');
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
			
			var RU_M = "RU"+compt_row+"_M";
			cmpt_unit++; 
			var id_RUM = cmpt_unit;
			new_RU = new_RU.replace('XXXRUM', String(cmpt_unit));
			new_RU = new_RU.replace('XXXRUM', String(cmpt_unit));
			new_RU = new_RU.replace('XXXRUM', String(cmpt_unit));
			var father = Fetch_Father(compt_row);
			console.log('father de RU Master added : ' + father);
			T_unit[cmpt_unit] = new Unit(RU_M, "RU_Master", "false", father, outpt1, outpt2, outpt3, outpt4, outpt5, outpt6); console.log('            ---> added to T_Unit');
			
			var RU_S1 = "RU"+compt_row+"_S1";
			cmpt_unit++; 
			new_RU = new_RU.replace('XXXRUS1', String(cmpt_unit));
			new_RU = new_RU.replace('XXXRUS1', String(cmpt_unit));
			new_RU = new_RU.replace('XXXRUS1', String(cmpt_unit));
			T_unit[cmpt_unit] = new Unit(RU_S1, "RU_Slave", "false", id_RUM, outpt1, outpt2, outpt3, outpt4, outpt5, outpt6); console.log('            ---> added to T_Unit');
			
			var RU_S2 = "RU"+compt_row+"_S2";
			cmpt_unit++;  
			new_RU = new_RU.replace('XXXRUS2',cmpt_unit);
			new_RU = new_RU.replace('XXXRUS2', String(cmpt_unit));
			new_RU = new_RU.replace('XXXRUS2', String(cmpt_unit));
			T_unit[cmpt_unit] = new Unit(RU_S2, "RU_Slave", "false", id_RUM, outpt1, outpt2, outpt3, outpt4, outpt5, outpt6); console.log('            ---> added to T_Unit');
			
			
			new_RU = new_RU.replace(/WWW/g, compt_row);
			compt_row++;
			new_RU = new_RU.replace(/VVV/g,cmpt_row);//indice des boutons
			new_RU = new_RU.replace(/RRR/g,cmpt_row);//indice des boutons
				
			//alert(new_RU);					
			var idElt = 'ROW_' + String(RowNumber); 
	       console.log('Insert at row : ' + idElt);
			$(new_RU).insertAfter(document.getElementById(idElt));
		}

	var Add_Unit = function(id, type,activ, inpt){
			/* var	outpt1=''; 
			var outpt2='';
			var outpt3='';
			var outpt4='';
			var	outpt5='';
			var outpt6='';
								
			//output static lors de linsert // ca marche sans ?
			AddUnitTtablo(id, type, "false", inpt, outpt1, outpt2, outpt3, outpt4, outpt5, outpt6);	
 */		}

	var Fetch_Father= function(RowNumber, id_unit){
			var t = document.getElementById("myTable");
			var trs = t.getElementsByTagName("tr");
			var tds = null;
			var strg_ligne;
			var father = "";
			//var bodyunit = "";
			var current_id = 0;
			
			for (var l=trs.length-1; l>0; l--) //0 est lentete du tablo / on remonte le tablo a lenvers
			{
				tds = trs[l].getElementsByTagName("td");
				strg_ligne='';
				//for (var n=tds.length-1; n>=0;n--) /depart du haut du tablo
				for (var n=tds.length-1; n>=0;n--) //on remonte les case du tablo a partir de la rangee cliquee
				{
					current_id = tds[n].id;
					strg_ligne+= current_id + " .. ";
					if(id_unit !== current_id){//est-ce que c'est l'id de l'unit en question
						//bodyunit = document.getElementById("cellule_" + String(current_id));
						if (typeof T_unit[current_id] !== 'undefined') {//estce que le type a ete defini
							if(T_unit[current_id].type == "Expansion" || T_unit[current_id].type == "RU_Master" || T_unit[current_id].type == "AU_Master"){ // Master/EU ?
								if(T_unit[current_id].activated == "true"){ //Active ?
									father = current_id;
									break;
								}
							}
						}
					}
				}
				console.log("ligne " + l + " : " + strg_ligne);
				
				if(father !== '') {break;}//pour faire le second break et sortir de la secnd loop
			}
		
		console.log("index father : " + father + " - id father : " + T_unit[current_id].id);
		return father;
		}	
	
	var Init = function Init(){
			console.log('=== Initialisation ===');
			//ImpEcrOff();
			cmpt_unit = 0;
			AddNewAU(0);
			console.log('===fin Initialisation ===');
		}
		
	//document.onselectstart=new Function("return false");
	//document.oncontextmenu=new Function("return false");
	//document.ondragstart =new Function("return false");
	
	</script>
   </head>
   <body class="noselect" onload="Init()">
	<div class="zoom" align="center">
		<a input type="button" onclick="ZoomIn()"  value="zoom in"   id="but_zoomin"><img src="pic/images/zoomin.png" width="90%"></a>
		<a input type="button" onclick="ZoomOut()" value="zoom out" id="but_zoomout"><img src="pic/images/zoomout.png" width="90%"></a>
	</div>	
		<a INPUT TYPE="button" onClick="history.go(0)" VALUE="Refresh" class="reset">reset</a>  
		<h1><img src= "pic/images/logo.jpg" alt="logo" style="width:119.4px;height:79.8px">Interactive System Builder</h1>
	<div class="but_haut">
		<a href="#Expand" id="expand" class="button1"  onclick = "switchaff()">+</a><b>Add Expansion Unit</b>  
		<a href="#Add_IP" id="add_ip" class="button1" onclick= "ipservice()">+</a><b>Add IP Services</b>    
		<input type="button" id="btn_makegraph" class="button2" value="Show sample"><input type="button" id="btn_send_string_graph" class="button3" value="Check Score"> 
	</div>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script> <!-- jQuery est inclus ! -->

   <script>
   
   
       $(document).ready(function(){
		   
	   // $('#btn_send_string_graph').click(function(){self.location.href="generate_graph.php?graph_string="+str_graph;}); 
	    
	   var str_graph;
	   //CONVERTIR en Graph
	   $('#btn_makegraph').click(function(){//convertit tablo en string  DOT
	   console.log('============ GENERATION DU GRAPH =================');
	   str_graph = GenerateGraph();
/* 	   var i = 0;
	   var k =0;
	   //varaible differentes du graph, ici on redefinit les id pour quil se suive ce qui nest pas le cas dans le tablo
	   var numAU = 0;
	   var numEU = 0;
	   var numRU = 0;
	    
		var AU_master;
		var AU_slave1;
		var AU_slave2;
		var EU;
		var RU_master;
		var RU_slave1;
		var RU_slave2;
		
		var str_sub_graph='';
		
	   for(i=0;i<9;i++){//parcourt des chassis
			if (tablo[i][0] == 'X'){//il y a un Master?
			
					AU_master = '';
					AU_slave1 = '';
					AU_slave2 = '';
					EU = '';
					RU_master = '';
					RU_slave1 = '';
					RU_slave2 = '';
					
					str_sub_graph='';
					/* str_graph+='subgraph cluster_0 {';
					str_graph+='style=filled; ';
					str_graph+='color=lightgrey; ';
					str_graph+='node [style=filled,color=red]; ';
					str_graph+= ' AU0_Master -> AU1_Slave ; ';
					str_graph+='label = "process #1"; ';
					str_graph+='} '; 
					
					//enlever les rond
					//str_graph+='node [shape=plaintext];';
					
					str_graph+='node [style=filled,color=white]; ';
			
				AU_master = 'AU' + String(numAU) + '_Master';
				//str_graph+=AU_master + '[shape=Msquare];';
				str_graph+=AU_master + ' [label=< <TABLE BORDER=---0--- CELLBORDER=---1--- CELLSPACING=---0--- COLOR=---RED--- ><TR><TD><B> AU MASTER</B></TD></TR><TR><TD> MOD 700Mhz</TD></TR><TR><TD> MOD 500Mhz</TD></TR><TR><TD> MOD 900Mhz</TD></TR><TR><TD> MOD 200Mhz</TD></TR></TABLE> >];';
				
				numAU++;
				str_graph+=' ';
				str_graph+='rankdir=LR;';
				//str_graph+='node [style=filled,color=firebrick1]; ';
								
				if (tablo[i][1] == 'X'){//il y a un SL1?
				AU_slave1 = 'AU' + String(numAU) + '_Slave';
				//str_graph+=AU_slave1 + '[shape=Msquare];';
				str_graph+=AU_slave1 + ' [label=< <TABLE BORDER=---0--- CELLBORDER=---1--- CELLSPACING=---0--- COLOR=---RED--- ><TR><TD><B> AU SLAVE 1</B></TD></TR><TR><TD> MOD 700Mhz</TD></TR><TR><TD> MOD 500Mhz</TD></TR><TR><TD> MOD 900Mhz</TD></TR><TR><TD> MOD 200Mhz</TD></TR></TABLE> >];';
				str_graph+=AU_master + ' -> ' + AU_slave1;
				numAU++;
				str_graph+=' ';

				str_sub_graph+= AU_master + ' -> ' + AU_slave1;
				str_sub_graph+=' ';			
				}
				
				if (tablo[i][2] == 'X'){//il y a un SL2?
				AU_slave2 = 'AU' + String(numAU) + '_Slave';
				//str_graph+=AU_slave2 + '[shape=Msquare];';
				str_graph+=AU_slave2 + ' [label=< <TABLE BORDER=---0--- CELLBORDER=---1--- CELLSPACING=---0--- COLOR=---RED--- ><TR><TD><B> AU SLAVE 2</B></TD></TR><TR><TD> MOD 700Mhz</TD></TR><TR><TD> MOD 500Mhz</TD></TR><TR><TD> MOD 900Mhz</TD></TR><TR><TD> MOD 200Mhz</TD></TR></TABLE> >];';
								str_graph+=AU_slave1 + ' -> ' + AU_slave2;
				numAU++;
				str_graph+=' ';
				
				//str_sub_graph+=' -> ' + AU_slave2;
				//str_sub_graph+=' ';
				}
				str_graph+='node [style=filled,color=darkorange]; ';
				for(k=0;k<6;k++){//parcourt des EU
					if (tablo[i][3][k][0] === 'T'){//il y a un EU
						EU = 'EU' + String(numEU);
						str_graph+='node [style=filled,color=darkorange]; ';
						str_graph+=EU + '[shape=Msquare];';
						str_graph+='node [style=filled,color=lightskyblue2]; ';
						//on relie les ascendant
						if (AU_slave2 != ''){
							str_graph+=AU_slave2 + ' -> ' + EU;}
						else{
							if (AU_slave1 != ''){
								str_graph+=AU_slave1 + ' -> ' + EU;}
							else{
								str_graph+=AU_master + ' -> ' + EU;}
						}
						str_graph+=' ';
						
						for(var j=0;j<6;j++){			//parcourt des RU
							if (tablo[i][3][k][j][0] == 'Z'){	//il y a un RU Master
								RU_master = 'RU' + String(numRU) + '_Master';
								str_graph+=RU_master + ' [label=< <TABLE BORDER=---0--- CELLBORDER=---1--- CELLSPACING=---0--- COLOR=---BLUE--- ><TR><TD><B> RU Master </B></TD></TR><TR><TD> High Power </TD></TR></TABLE> >];';
				
								
								if (EU != ''){
									str_graph+= EU + ' -> ' + RU_master;
								}
								else {
									str_graph+= AU_master + ' -> ' + RU_master;
								}
								numRU++;
								str_graph+=' ';
							}
							
							if (tablo[i][3][k][j][1] == 'Z'){	//il y a un Slave1
								RU_slave1 = 'RU' + String(numRU) + '_Slave';
								str_graph+=RU_slave1 + ' [label=< <TABLE BORDER=---0--- CELLBORDER=---1--- CELLSPACING=---0--- COLOR=---BLUE--- ><TR><TD><B> RU Slave 1</B></TD></TR><TR><TD> Low Power </TD></TR></TABLE> >];';
								//if (EU != ''){
								//	str_graph+= EU + ' -> ' + RU_master;
								//}
								//else {
									str_graph+= RU_master + ' -> ' + RU_slave1;
								//}
								numRU++;
								str_graph+=' ';
							}
							
							if (tablo[i][3][k][j][1] == 'Z'){	//il y a un Slave1
								RU_slave1 = 'RU' + String(numRU) + '_Slave';
								str_graph+=RU_slave1 + ' [label=< <TABLE BORDER=---0--- CELLBORDER=---1--- CELLSPACING=---0--- COLOR=---BLUE--- ><TR><TD><B> RU Slave 2</B></TD></TR><TR><TD> Low Power </TD></TR></TABLE> >];';

								//if (EU != ''){
								//	str_graph+= EU + ' -> ' + RU_master;
								//}
								//else {
									str_graph+= RU_master + ' -> ' + RU_slave1;
								//}
								numRU++;
								str_graph+=' ';
							}
						}				
						numEU++;
					}
				}
				
				
				
				if (tablo[i][5] == 'X'){//il y a un RU Slave1
				RU_slave1 = 'RU' + String(numRU) + '_Slave';
				str_graph+= RU_master + ' -> ' + RU_slave1;
				numRU++;
				str_graph+=' ';
				}
				
				if (tablo[i][6] == 'X'){//il y a un RU Slave2
				RU_slave2 = 'RU' + String(numRU) + '_Slave';
				str_graph+= RU_slave1 + ' -> ' + RU_slave2;
				numRU++;
				str_graph+=' ';
				}
				
				//if (tablo[i][7] = 'X'){//il y a un IP
				//QUE FAIRE ?
				//}
										
				if (str_sub_graph != ''){
					str_graph+='subgraph cluster_0 {';
					str_graph+='style=filled; ';
					str_graph+='color=lightgrey; ';
					str_graph+='node [style=filled,color=white]; ';
					str_graph+='label = ---process 1---; ';
					//str_graph+= ' IP Service; ';
					str_graph+='IPService [label=< <TABLE BORDER=---0--- CELLBORDER=---1--- CELLSPACING=---0--- COLOR=---green--- ><TR><TD><B> IP SERVICE </B></TD></TR><TR><TD> 3G </TD></TR><TR><TD> WIFI </TD></TR></TABLE> >];';

					
					str_graph+='} ';	
				}else {
					str_sub_graph = '';
				}

			}//fin du IF chassis exist
	   } */
		
		console.log(str_graph);	   
		
		//calcul des parametres
		console.log('============ CALCULATE IP SERVICE =================');
					var AU_master = 0;
					var AU_slave1 =  0;
					var AU_slave2 =  0;
					var EU =  0;
					var RU_master =  0;
					var RU_slave1 =  0;
					var RU_slave2 =  0;
					var numAU = 0;
					var numEU = 0;
					var numRU = 0;
					var Spectrum_Allocation =parseInt(numRU*10);
					var Network_Capacity = parseInt(numEU*15);
					var HetNet_Integration = parseInt(numEU+numRU*11);
					var Cost_Effective = parseInt(numRU+numEU*10);
					var Energy_Efficient = parseInt(numEU+numAU+numRU+8);
					var Maximum_Coverage = parseInt(numRU+numEU);
					var future_Proof = parseInt(numRU *10);
		
	   console.log("generate_graph.php?graph_string="+str_graph+"&Spectrum_Allocation="+Spectrum_Allocation+"&Network_Capacity="+Network_Capacity+"&HetNet_Integration="+HetNet_Integration+"&Cost_Effective="+Cost_Effective+"&Energy_Efficient="+Energy_Efficient+"&Maximum_Coverage="+Maximum_Coverage+"&future_Proof="+future_Proof);	   
		self.location.href="generate_graph.php?graph_string="+str_graph+"&Spectrum_Allocation="+Spectrum_Allocation+"&Network_Capacity="+Network_Capacity+"&HetNet_Integration="+HetNet_Integration+"&Cost_Effective="+Cost_Effective+"&Energy_Efficient="+Energy_Efficient+"&Maximum_Coverage="+Maximum_Coverage+"&future_Proof="+future_Proof;
	   });
	   

	});


   </script>
  
   
<table class="main_table" width="100%" id="myTable">
<tr id="ROW_0">
	<td class ="bord_arrondi" align="center" colspan="2" bgcolor="#c00000">
												<a id="modal_AU" href="#openModal1">ACCESS UNIT</a>
												<div id="openModal1" class="modalDialog">
												<div>
												<a href="#close_modal" title="Close" class="close_modal">X</a>
												ACCESS UNIT
												<img src="pic/images/AU chassis_big.png" alt="AU Chassis" width="100%">
												</div>
												</div>
	</td>
	<td class="bord_arrondi nonaff"  colspan="2" align="center" bgcolor="#f16726"> 
												<a id="modal_EU" href="#openModal2">EXPANSION UNIT </a>
												<div id="openModal2" class="modalDialog">
												<div>
												<a href="#close_modal" title="Close" class="close_modal">X</a>
												EXPANSION UNIT
												<img src="pic/images/EU (Reduced)_big.png" alt="EU Chassis" width="100%">
												</div>
												</div>
	 </td>
	<td class = "bord_arrondi" align="center" colspan="4" bgcolor="#00a2ff"> 
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
</body>
</html>