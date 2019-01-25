<?xml version="1.0" encoding="ISO-8859-1"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>3-Tier Sample App</title>
    <link rel="stylesheet" type="text/css" href="style.css" /> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
 
</head>

<body>
<div class="container">
  <div class="row mt-sm-3">
    <div id="col-sm-2">
      <img width="300px" src="../img/logo-sonda.png" />
    </div>
  </div>
  <div class="row mb-sm-2">
    <div class="col-sm-12">
      <ul class="nav nav-pills">
        <li class="nav-item">
          <a class="nav-link" href="..">App Server</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href=".">DB Server</a>
        </li>
      </ul>
    </div>
  </div>
  <div class="row">
    <form action="add.php">
    <div class="col-sm-4">
        <input type="text" name="name">
    </div>
    <div class="col-sm-4">
        <input type="text" name="value">
    </div>
    <div class="col-sm-4">
        <input type="submit" name="Enviar" value="Enviar">
    </div>
    </form>
    <div class="col-sm-12">
    <?php
    include '../config/db.php';

    mysql_connect($hostname_DB,$username_DB,$password_DB);
    mysql_select_db($database_DB) or die( "Unable to select database");
    $query="SELECT * FROM app_test";
    $result=mysql_query($query);
    $num=mysql_numrows($result);
    mysql_close();
    echo "<b><center> Database ($database_DB) Output From Host ($hostname_DB)</center></b><br><br>";
    $i=0;
    while ($i < $num) {
    $name=mysql_result($result,$i,"name");
    $value=mysql_result($result,$i,"value");
    echo "<b>$name:$value</b><br><hr><br>";
    $i++;
    }
    ?>
    </div>
  </div>
</div>
</body>
</html>
