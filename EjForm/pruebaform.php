<html>
<head>
	<title>Test Form Parameters</title>
</head>
<body>
	<h1>Enviado por POST</h1>
<?php 
    foreach($_POST as $key => $value){        
        if(is_array($value)){ 
             
            foreach($value as $clave => $valor){ 
                 
                echo $key . '[' . $clave . "] = " . $valor ."<br/>"; 
            } 
             
        } else { 
             
            echo $key." = ".$value."<br/>"; 
        } 
    }    
?>

	<hr/>
	<h1>Enviado por GET</h1>
<?php 	 
    foreach($_GET as $key => $value){        
        if(is_array($value)){ 
             
            foreach($value as $clave => $valor){ 
                 
                echo $key . '[' . $clave . "] = " . $valor ."<br/>"; 
            } 
             
        } else { 
             
            echo $key." = ".$value."<br/>"; 
        } 
    }          
?>

	<hr/>
	<h1>Archivo</h1>

<?php
if ($_FILES["archivo"]["error"] > 0)
  {
  echo "Error: " . $_FILES["archivo"]["error"] . "<br/>";
  }
else
  {
  echo "Nombre: " . $_FILES["archivo"]["name"] . "<br/>";
  echo "Tipo: " . $_FILES["archivo"]["type"] . "<br/>";
  echo "Tamaño: " . ($_FILES["archivo"]["size"] / 1024) . " kB<br/>";
  echo "Guardado en: " . $_FILES["archivo"]["tmp_name"] . "<br/>";;
  
  $filecontents = file_get_contents($_FILES["archivo"]["tmp_name"]);
  echo $filecontents;
  }
?>	
	
</body>
</html>
