<form action="">
    <input type="text" name="nome" />
    <input type="date" name="nasc" />
    <input type="submit" value="OK" />
</form>

<?php

    $gatos = array("Thor", "Frajola", "Lucifer");

    foreach ($gatos as $index => $gato) {
        echo "<br>";
        echo $gato . " é o gato n: " . $index;
        echo "<br>";
    }

    if(isset($_GET)) {
        foreach ($_GET as $index => $value) {
            echo "<br>";
            echo "Nome do campo: " . $index;
            echo "<br>";
            echo "Valor: " . $value;
            echo "<br>"; 
        }
    }

?>