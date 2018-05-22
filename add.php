<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <pre><?php print_r($_POST) ?></pre>

    <?php

  $mysqli=new mysqli("localhost", "koroleva3", "", "Personal"); 
  
  $query = "insert into Pers (id, name, call) 
  
   
      values (null, '".$_POST['name']."', '".$_POST['telephone']."')";
       $mysqli->query("set names utf8;"); 
      if($mysqli->query($query))
        echo "<script>alert('Пользователь добавлен');</script>";
      else
        echo "<script>alert('Произошла ошибка');</script>";
  
  ?>
  
      </body>
</html>