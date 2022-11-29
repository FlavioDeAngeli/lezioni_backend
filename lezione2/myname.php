<!DOCTYPE html>
<head>    
    <title><?php echo 'Nome Pagina';?></title>
</head>
<body>
    <?php
    /*
    This is a
    multiline comment
    */

    //this is another comment

    #this is another comment

    $name = "Flavio";
    $testo = 'Il mio nome è ';

    echo $testo.$name; //this print my name

    echo "<br>Il mio nome è " . $name; //this also print my name

    function print_my_name($name) {
        echo "<br><strong>Ciao " . $name . "!</strong>";
    }

    print_my_name($name);

    ?>
    
</body>
</html>