<?php 
    /*
        UNA DE LAS FUNCIONALIDADES DE UN NAMESPACE ES DAR LA POSIBILIDAD DE UTILIZAR DOS O MAS CLASES 
        CON EL MISMO NOMBRE, DENTRO DE UN MISMO ARCHIVO
    */

    use folder1\Human;
    use folder2\Human as Human2;

    require_once("./folder1/human.php");
    require_once("./folder2/human.php");

    $humano1 = new Human;
    $humano1->Greeting();

    $humano2 = new Human2;
    $humano2->Greeting();
?>