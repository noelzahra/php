<html>
    <head>
        <title>Self-processing</title>
    </head>
    <body>

           <?php
           if ($_SERVER['REQUEST_METHOD'] === 'GET') {
           ?>    
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <input type="number" name="table" placeholder="Table Number">
            <input type="Submit">
        </form>
           
           <?php
           } else {
               if (array_key_exists('table', $_POST)) {
                   //do table
                   $table = $_POST['table'];
                   for($i = 1; $i <= 10; $i++){
                       echo "$i &times; $table = " . $i * $table . "<br>";
                   }
               } else {
                   echo 'ERROR: you haven\'t inputted anything';
               }
           }
           ?>
           
    </body>
</html>



<?php

/* 
 * GET method show the form
 * POST method collects
 */


