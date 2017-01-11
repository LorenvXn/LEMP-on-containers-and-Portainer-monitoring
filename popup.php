<!DOCTYPE html>
<html>
<style>
  div {
    background: #000000;
    width: 500px;
  }
</style>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.css">
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
</head>
<body>

<div data-role="page">
  <div data-role="header">
  </div>

  <div id="pageone" data-role="main" class="ui-content">
    <a href="#myPopup" data-rel="popup" data-position-to="window">
    <img src="pics/dracula.jpg" alt="Skaret View" style="width:400px;"></a>

    <div data-role="popup" id="myPopup">
      <p>Enlarged photo</p> 
      <a href="#pageone" data-rel="back" </a>
	<img src="pics/dracula.jpg" style="width:900px;height:1000px;" alt="wooo">
    </div>
  </div>

</div> 

</body>
</html>
