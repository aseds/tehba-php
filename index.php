<html>
<head>
  <link rel="stylesheet" type="text/css" href="styles/style.css">
</head>
  
<body>

<?php if(true): ?>
<!--  <p>this is home</p> -->
<?php endif ?>

<?php // connect to tehba_db
  require_once('helpers/helpers.php');
  $dbInformation = [
    'host'=>'localhost',
    'dbName'=>'tehba_db',
    'dbUser'=>'root',
    'dbPassword'=>'crims@nfed@ra'
  ];
  connectToDB($dbInformation);
?>
    
  <div id="whole" class="center">
      <div id="right">
        <div id="logo"></div>
      <a href="admin.php">admin</a>
      <a href="phpmyadmin">phpmyadmin</a>
      </div>
    
    
      <div id="left">
        <div class="row1">
          <?php // put three .normal divs here. an img and a paragraph in each, too. ?>
          <div class="normal"><img src="http://www.tehraner.com/images/sara-abri-mohsen-gallery-21jan15.jpg">
            <p>hi hello this is something here</p>
          </div>
          <div class="normal"></div>
          <div class="normal"></div>
        </div>
        <div class="row2">
          <?php // put a .wide here. ?>
          <div class="wide"></div>
        </div>
        <div class="row3"> 
          <?php // put three .normal's here. put two .little's in the first one ?>
          <div class="normal">
            <div class="little"></div>
            <div class="little"></div>
          </div>
          <div class="normal"></div>
          <div class="normal"></div>
        </div>
        <div class="row4">
          <?php // put two .half's here ?>
          <div class="half"></div>
          <div class="half"></div>
        </div>
      </div>
    </div>
  
</body>  
</html>
