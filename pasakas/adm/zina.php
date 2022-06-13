<?php 
    require_once('../config/database.php'); 
    require_once('../class/class.php'); 
    require_once('../class/realclass.php'); 
    $db = new operations();
    $realdb = new real();
    $db->Store_Zina();
    // $xxx = '63';
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/zinastyle.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script type="text/javascript" src="../js/function.js"></script>
<h3>Saziņas forma</h3>

<div class="fixed">
        <a href=../launch/index.php><i class="fa fa-home fa-lg" style="font-size:36px"></i></a>
        </div>

<div class="container">
  <form method="POST" id="zina_save">
  <label for="subject">Mani sauc par:
    </label>
  <input type="text" name="zinnesis" placeholder="Atsaucos uz vārdu...">
    <label for="subject">Uzrakstīt es vēlos sekojošo:
    </label>
    <textarea id="subject" name="zinaa" placeholder="Lai miers šai mājai....."></textarea>

    <input type="submit" name="xxx" zina_save" value="Nosūtīt">
    <input type="button" value="pievienot failu" name="save" class="button2">
  </form>
</div>

<?php                 
        $realdb->upload_pic();           
    ?>

<div class="containerr" id="containerr">
      <div class="roww" id="roww">
        <form class="ff" id="myform" method="post" enctype="multipart/form-data" >
          <h3>Pievienot failu</h3>
          <input type="file" name="myfile"> <br>
          <button type="submit" name="savep">upload</button>
        </form>
      </div>
    </div>
   


  </body>
</html>