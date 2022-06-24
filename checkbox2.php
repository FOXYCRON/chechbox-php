<html>
   <head>
         <title> Checkbox </title>
   </head>
     <body>

   <?php

      if (isset($_REQUEST['check1'])) {
           $suma = $_REQUEST['valor1'] + $_REQUEST['valor2'];
            echo "La suma es: " . $suma . "<br>";
      }
        if (isset($_REQUEST['check2'])) {
            $resta =$_REQUEST['valor1'] - $_REQUEST['valor2'];
               echo "La resta es: " . $resta . "<br>";
      }
        if (isset($_REQUEST['check3'])) {
            $multi =$_REQUEST['valor1'] * $_REQUEST['valor2'];
               echo "La multiplicacion es: " . $multi . "<br>";
      }
        if (isset($_REQUEST['check4'])) {
            $divicion =$_REQUEST['valor1'] / $_REQUEST['valor2'];
               echo "La divicion es: " . $divicion . "<br>";
      }

    ?>

    </body>
</html>