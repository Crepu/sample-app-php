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
<div id="header">
<div id="logo"><img width="300px" src="../img/logo-sonda.png" /></div>
</div>

<div class="code_container">
<div class="code">
<ul class="nav nav-pills">
  <li class="nav-item">
    <a class="nav-link active" href="/">App Server</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/dbserver">DB Server</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/lbserver">LB Server</a>
  </li>
</ul>
</div>
<div> 
<object type="text/html" data="http://137.135.126.29/haproxy-status" width="800px" height="600px" style="overflow:auto;border:5px ridge blue">
</object>
</div>
</div>
</div>
</body>
</html>