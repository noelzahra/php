<html>
    <head>
        <title>Passing an array with key value pairs</title>
    </head>
    <body>
        <h4>Passing input values as an array</h4>
        
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <input type="text" name="table" placeholder="Numbers(comma sep)">
            <select name="months[]" multiple>
                <option value="1">January</option>
                <option value="2">February</option>
            </select>
        
            <input type="Submit">
        </form>
        
        <?php
          var_dump($_POST);
          
          if(array_key_exists('table', $_POST)) {
              $tables = explode(',', $_POST['table']);
              var_dump($tables);
          }
        ?>
    </body>
</html>


