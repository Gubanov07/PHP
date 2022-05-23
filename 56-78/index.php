<?php
    require_once 'image.php';
    $img = (new Image())->setAttrs(['src' => 'Milk_cropped.png', 'width' =>'300', 'height'=>'200']);
    echo $img->open();
?>