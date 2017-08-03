<!DOCTYPE>
<html>
<head>
<title>Generate Qr</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<style>
.border-container{
	border: 1px solid #cfcfcf;
	padding: 20px;
	box-shadow: 10px 10px 10px #ececec;
	margin-top: 40px;
}
</style>
</head>
<body>
<div class="container border-container">
<div class="page-header">
  <h1>Create QR Code</h1>
</div>
<?php
$qr = $_POST['qr'];
if(!empty($qr)) {

echo'
<form class="form-horizontal" action="" method="POST">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Contents</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="qr" name="qr" value="'.$qr.'">
      <span id="helpBlock" class="help-block">Enter URL, text, number, geolocation, or others</span>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Generate</button>
    </div>
  </div>
</form>
<br>
';
echo '<img class="img-responsive img-thumbnail" src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl='.$qr.'&choe=UTF-8" style="margin: 0 auto;display: block;">';
echo '<br><a href="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl='.$qr.'&choe=UTF-8"><button type="submit" class="btn btn-primary" style="margin: 0 auto;display: block;">Save</button></a>';
}else{

echo'
<form class="form-horizontal" action="" method="POST">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Contents</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="qr" name="qr" placeholder="Inside Qr">
      <span id="helpBlock" class="help-block">Enter URL, text, number, geolocation, or others</span>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Generate</button>
    </div>
  </div>
</form>
<br>
';
}
?>
<br>
<hr>
<footer style="text-align:center;">
Copyright 2017 | <a href="http://abedputra.com">abedputra.com</a>
</footer>
</div>
</body>
</html>
