<?php 
require_once('./config/database.php');
require_once('./class/realclass.php'); 
$realdb = new real();
// if(isset($_GET['que']))
// {
    global $realdb;
    $que = $_GET['que'];
    $ansid = $_GET['ansid'];
// }
global $xxx;
global $yyy;
$xxx = $que;
$yyy = $ansid;
// $res=$realdb->view_biologybytitle();
$res2=$realdb->view_atbildi();
$answer = $res2->fetch_array()['atbilde'] ?? '';
$author = $res2->fetch_array()['jautajums'] ?? '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kā tad īsti ir</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <link rel="stylesheet" href="./css/commentstyle.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
</head>
<body>

    <div class="header">
        <h2>Atbilžu kritika.</h2>
    </div>

    <div class="row"> 
        <h2 class="txt1"><?php echo $que?></h2>
    </div>
      
    <div class="row1">
        <p class="txt"><?php echo $answer?></p>
        <p class="txt2"><?php echo $author?></p>
    </div>
       


<div id="myDIV2">
    <div class="space"><br></div>



<?php 
          global $zzz;
          $zzz = $yyy;
          $res22=$realdb->view_atbildescomm();
        
          while ($data2 = mysqli_fetch_assoc($res22)) {
         
    ?>

   <div class="myDIV2">
     <div class="comessage">
  

     <b><div class="inline"><?php echo $data2['name']?></b> <small>spriež tā - </small></div>
        <div class="inline"><?php echo $data2['text']?></div>
      
  
    </div>
    </div> 
          
      <?php
		}
    ?> 
  
  <?php                 
        $realdb->store_atbildecomm();           
    ?>

<div class="space"><br></div>
<button class="butatb" id="butatb">Arī man ir ko piebilst </button>
<div class="myDIVans" id="myDIVans">
    <form method="POST" id="usrform">
        <div class="piebilde">Mana piebilde par šo visu ir tāda - </div>
        <input type="hidden" name='comm_id' value='<?php echo $zzz?>'/>
        <div  class="inline">sauc mani par: </div>
        <div class="inline" ><input type="text" size="50" name="name" required placeholder="cienījamais tāds un tāds..." ></div>
        <br style="clear: both;">
        <textarea name="text" rows="5" cols="60" required placeholder="un Rakstīšu es tā ..."></textarea>
        <br>
        <br><button name="atbildecomm_save" > Saglabāt </button>
        <button id="myDIVansc">Labāk nevajag </button>
    </form>
</div>

















</div>
        
 <div class="fixed">
            <span style="color: Mediumslateblue;">
            <a href="que1.php?R_que=<?php echo $xxx?>"><i class="fa fa-home fa-lg" id="grey" style="font-size:36px"></i></a>
            </span>
            </div> 
            <script src="js/main.js">
</script>
    </body>