<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $buscar = (isset($_POST['buscar']) && $_POST != "")? $_POST['buscar']: 'No especifico';
        $timezone = (isset($_POST['timezone']) && $_POST != "")? $_POST['timezone']: 'No especifico';
        $modo = (isset($_POST['modo']) && $_POST != "")? $_POST['modo']: 'No especifico';
        $a = 0;
        echo $buscar.'<br/>'. $timezone.'<br/>'. $modo. '<br/>';
        $i = rand(4, 8);
        while($a <= $i)
        {
            $num = rand(97, 122);
            $char = chr($num);
            echo $char;
            $a++;
        }
                echo '<table>'
                    echo '
                    <thead>
                        <tr>
                            <th>Libro'. $num. ($num + 413).'</th>
                        </tr>
                    </thead>
                    ';
                    echo'
                    <tbody>
                        <tr>
                            <td>'.
                                while($a <= $i)
                                {
                                    $num = rand(97, 122);
                                    $char = chr($num);
                                    echo $char;
                                    $a++;
                                }
                            .'</td>
                        </tr>
                    </tbody>
                    ';
                echo '</table>';
    ?>
</body>
</html>