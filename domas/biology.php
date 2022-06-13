<?php 
require_once('./config/database.php');
require_once('./class/domasclass.php'); 
$domasdb = new domas();
if(isset($_GET['bb']))
{
    global $domasdb;
    global $type;
    $type = $_GET['bb'];
    $title = $_GET['cc'];
}
$res=$domasdb->view_biology();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kat kā tā var būt</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="izpratne" content="smadzenes" />
    <meta name="bioloģija" content="domāšana"/>
    <link rel="stylesheet" href="css/biologystyle.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script type="text/javascript" src="js/accord.js"></script>
</head>
<body>
<div class="header">
  <?php echo $title?>
</div>

   <?php
    while ($data = mysqli_fetch_assoc($res)) {
  ?>

  <div class="card">
    <h2 class="border"><?php echo $data['title']?></h2>
      <!-- <p class="txt"><?php echo $type?></p> -->
      <p class="txt"><?php echo $data['article']?></p>
      <p class="txt"><?php echo $data['article2']?></p>
      <p class="txt"><?php echo $data['article3']?></p>
      <p class="txt"><?php echo $data['article4']?></p>
      <h6 class="autors"><?php echo $data['author']?>_<?php echo $data['date']?></p>
      <a class="button1" id="btnn3" href="comments.php?domastitle=<?php echo $data['title']?>&title=<?php echo $title?> ">citi Viedokļi</a>
  </div>

  <?php
		}
  ?>

<div class="fixed">
  <span style="color: Mediumslateblue;">
  <a href=./index.html><i class="fa fa-home fa-lg" id="grey" style="font-size:36px"></i></a>
  </span>
</div> 
</body>
</html>