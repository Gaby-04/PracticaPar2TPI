<?php $op=$_POST['op'];

switch ($op) {
    case "Seleccione una especie.":
        header('Location: ../index.php');
        break;
    case "1":
        header('Location: ../mamiferos.php');
        break;
    case "2":
        header('Location: ../aves.php');
        break;
    case "3":
        header('Location: ../rectiles.php');
        break;
    case "4":
        header('Location: ../peces.php');
        break;

        ///  header('Location: ../index.php?Controller=page&action=showPeces');
  }