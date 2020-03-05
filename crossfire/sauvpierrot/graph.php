<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Viz.js</title>
  </head>
  <body bgcolor="white">
<br>
<br>
<br>
<br>
    <?php
//echo str_replace('---','"',$_GET['graph_string']);
?>
    <script type="text/vnd.graphviz" id="cluster">
<?php
//echo $_GET['graph_string'];//str_replace('---','"',$text);
echo str_replace('---','"',$_GET['graph_string']);
?>
</script>
    
        
    <script src="viz.js"></script>
    <script>
      
      function inspect(s) {
        return "<pre>" + s.replace(/</g, "&lt;").replace(/>/g, "&gt;").replace(/\"/g, "&quot;") + "</pre>"
      }
      
      function src(id) {
        return document.getElementById(id).innerHTML;
      }
      
      function example(id, format, engine) {
        var result;
        try {
          result = Viz(src(id), format, engine);
          if (format === "svg")
            return result;
          else
            return inspect(result);
        } catch(e) {
          return inspect(e.toString());
        }
      }
      document.body.innerHTML  +='<div id="container">';
     document.getElementById('container').innerHTML += example("cluster", "svg");
      document.body.innerHTML  +='</div>';      
 
      
    </script>
	<div id="container">
	<script>
	// document.body.innerHTML += example("cluster", "svg");
	// example("cluster", "svg"));
	</script>
	
	</div>
	<br>

<br>
<h1 align = "right" class="enligne" ><img class="enligne" src= "pic\images\logo.jpg" alt="logo"  style="width:119.4px;height:79.8px"> Hetnet Architecture</h1> 


</pre>
    
  

</body></html>