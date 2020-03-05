<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Viz.js</title>
  </head>
  <body bgcolor="white">
  
<br>
<br>   	 <div id="container_svg">
	</div>
<br>
<br>


    <script type="text/vnd.graphviz" id="cluster">
	<?php
		echo str_replace('---','"',$_POST['graph_string']);
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
    //  document.body.innerHTML  +='<div id="container">';
     document.getElementById('container_svg').innerHTML += example("cluster", "svg");
    //  document.body.innerHTML  +='</div>';      
 
      
    </script>

	<br>

<br>


</pre>
    
  

</body></html>