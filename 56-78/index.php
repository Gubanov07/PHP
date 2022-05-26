<?php
require_once 'Input.php';
require_once 'Form.php';
    $form = (new Form)->setAttrs(['action' => '', 'method' 
        => 'GET']); 
    
    echo $form->open();
        echo (new Input)->setAttr('name', 'year')->
            open(); 
        echo (new Input)->setAttr('type', 'submit')->
            open(); 
    echo $form->close();
?>