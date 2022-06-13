<?php 
    require_once('../config/database.php'); 
    require_once('../class/class.php'); 
    $db = new operations();
    if(isset($_GET['R_category']))
{
    global $db;
    $ID = $_GET['R_category'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta httram p-equiv="X-UA-Compatible" content="ie=edge">
    <title>PasakaS_Tēmas</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="description" content="Elegant Accordion with jQuery and CSS3" />
    <meta name="keywords" content="jquery, slide out,accordion, css3, fadeout, fadein, elegant, fancy, box shadow"/>
    <link rel="stylesheet" href="../css/tema.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script type="text/javascript" src="../js/accord.js"></script>
</head>
<body>
    <div class="header">
      <?php
      $xx2 = $ID;
          global $xx2;
        ?>
        <p class="spin3"><?php echo $xx2?> pasakas</p>
      </div>
      
      <div class="row">
        <div class="leftcolumn">
      <?php
         $res=$db->view_recordcat();
         while ($data = mysqli_fetch_assoc($res)) {
         global $data;
  ?>
       <div class="card">
       <a class="links" href="../content/read.php?R_ID=<?php echo $data['ID'] ?>"> <h2>"<?php echo $data['text']?>"</h2></a>
          <div class="space">
              <br>
          </div>
        
          <div class="space">
              <br>
          </div>
            <h6> <?php echo $data['time'], " šo uzrakstīja: ", $data['author']?></h6>
          </div>
        <?php
        
		        }
        ?>
        
      </div>
      <div class="fixed">
        <a href=../launch/index.php><i class="fa fa-home fa-lg" style="font-size:36px"></i></a>
        </div>
        <div class="footer">
          <p>Developed by JP 2020. <a href="../adm/zina.php" style="text-decoration: underline; color: #000;">Contact</a> </p>
        </div>   
</body>
</html>