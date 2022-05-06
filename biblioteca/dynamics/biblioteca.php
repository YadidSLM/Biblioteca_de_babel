<?php
    $buscar = (isset($_POST['buscar']) && $_POST != "")? $_POST['buscar']: 'No especifico';
    $timezone = (isset($_POST['timezone']) && $_POST != "")? $_POST['timezone']: 'No especifico';
    echo $buscar;
?>