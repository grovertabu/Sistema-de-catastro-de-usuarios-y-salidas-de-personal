<?php    
    include("../../modelo/tipo_salida.php");  
    include("../../modelo/funciones.php");
    
        $tipo_salida = new tipo_salida();
        if($tipo_salida->eliminar(security($_GET[id])))
        {
            echo "Acci&oacute;n completada con &eacute;xito";
        }
        else
        {
            echo "Ocurri&oacute; un error.";
        }
?>