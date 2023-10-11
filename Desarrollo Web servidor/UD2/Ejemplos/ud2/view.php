<?php
    $template = file_get_contents('./templates/template.html');
    
    foreach ($diccionario as $clave=>$valor) {
        $template = str_replace('{'.$clave.'}', $valor, $template);
    };
    
    echo $template;
?>

