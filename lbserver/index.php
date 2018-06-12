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
          <a class="nav-link" href="../dbserver">DB Server</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href=".">LB Server</a>
        </li>
      </ul>
    </div>
  </div>
  <div class="row">
    <?php 
      $url = "http://$_SERVER[SERVER_NAME]/haproxy-status</br>";
      echo "<object type='text/html' data='$url' width='800px' height='600px' style='overflow:auto;border:5px ridge blue'></object>";
      ?>
  </div>
</div>
</body>
</html>