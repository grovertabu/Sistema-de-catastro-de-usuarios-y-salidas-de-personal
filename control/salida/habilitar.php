<?php    
    include("../../modelo/salida.php");  
    
        $salida = new salida();
        if($salida->habilitar($_GET[id]))
        {
            echo "Acci&oacute;n completada con &eacute;xito";
        }
        else
        {
            echo "Ocurri&oacute; un error.";
        }
    
    
?>