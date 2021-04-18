
<?php
include_once "sum.php";
include_once "difference.php";
include_once "multiplication.php";
include_once "division.php";
include_once "display.php";
if(isset($_POST['button']))
{
    if (!empty($_POST['a']))
    {
        if (!empty($_POST['b']))
        {
            switch ($_POST['wyb'])
            {
                case "Sum":
                    echo Sum($_POST['a'],$_POST['b']);
                    break;
                case "Multiplication":
                    echo Multiplication($_POST['a'],$_POST['b']);
                    break;
                case "Difference":
                    echo Difference($_POST['a'],$_POST['b']);
                    break;
                case "Division":
                    echo Division($_POST['a'],$_POST['b']);
                    break;

            }

        }
    }
}


?>




