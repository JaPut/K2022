<?php 
require_once('./config/database.php');
require_once('./class/realclass.php'); 
$realdb = new real();
if(isset($_GET['R_que']))
{
    global $realdb;
    $idq = $_GET['R_que'];
    $xx3 = $idq;
    global $xx3;
}
// $resvajid = $ID;
$result2 = $realdb->view_realque1atb();
$result33 = $realdb->view_qcomm();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kas notiek</title>
    <meta content="improvizācija" name="JP">
    <meta content="" name="mindofspace">
    <meta content="" name="free">
    <link href="../img/JP.JPG" rel="icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="./lib/bootstrap/css/bootstrap.min.css" rel="stylesheet"> 
    <link href="./css/questyle.css" rel="stylesheet">
    <link href="./lib/bootstrap/font-awesome/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
    <div class="fixed">
        <a href="index.php#whatdo"><i class="fa fa-home fa-lg" style="font-size:36px"></i></a>
    </div>
   <p>Konkrētas atbildes uz vispārīgiem jautājumiem. Vismaz viena ir pareiza. Kādam. Varbūt.</p>
    <div class="header">

    <?php
        if (mysqli_num_rows($result2) < 1) {
            echo "<div>Par šo pagaidām Nekā nav. Būs. Drīz. </div>";
        }
        $xx3 = $idq;
          global $xx3;
    ?>

        <p class="spin3"><?php echo $xx3?></p>
        <p>  <a href='javascript:;' id="btnn4" onclick='myFunctionQ();'><i class="fa fa-comment" style="color:36px"></i><a></p>
    </div>
   
    <?php
        while ($data = mysqli_fetch_assoc($result2)) {
    ?>
    
    <div class="mainmessage"><p class="spin2"><?php echo $data['atbilde']?></p>
    <div class="inliner"><?php echo $data['autors']?></div>
    <a class="button1" id="btnn3" href="quecomments.php?que=<?php echo $xx3 ?>&ansid=<?php echo $data['id']?>">Viedokļi</a>
</div>
 
 <?php
		}
    ?>
   <br> 
   
    <div class="row">
        <div class="oneline"><button class="button1" id="btnn" >Pievieno aktuālu atbildi</button></div>
    </div>  

<div class="space"></div>
<br>

<div id="myDIV">
 
    <?php   
        global $xx3;
        $realdb->Store_idRealque(); 
                      
    ?>

    <div class="myDIV">
        <form method="POST" id="usrform">
                <input type='hidden' name='jautajums' value='<?php echo "$xx3";?>'/>
                <div class="inline">Pareizā atbilde ir: </div>
                <div class="inline" size="50"><input type="text" name="autors" required placeholder="Tas būs par ..." ></div>
                <br style="clear: both;">
                <textarea name="atbilde" required placeholder="Teikšu tā ..."></textarea>
                <div class="butr"><button name="idque_save"> Saglabāt </button></div>
                <div class="butr"><button onClick="window.location.reload();">Labāk nevajag </button></div>
        </form>
    </div>
 </div>

<br>

<div id="myDIV3">
    <div class="space"><br></div>

    <?php   
        global $xx3;
        $realdb->Store_quecomm(); 
                      
    ?>

    <div class="myDIV">
        <form method="POST" id="usrform">
        <input type='hidden' name='name_que' value='<?php echo "$xx3";?>'/>
                <div class="inline">Es esmu: </div>
                <div class="inline" size="50"><input type="text" name="qcomm_author" required placeholder="Šobrīd esmu ..." ></div>
                <div class="inline"> , un teikšu tā: </div>
                <br style="clear: both;">
                <textarea name="qcomm_text" required placeholder="Teikšu tā ..."></textarea>
                <div class="butr"><button name="quecomm_sav" class="but"> Saglabāt </button></div>
                <div class="butr"><button class="but" onClick="window.location.reload();">Labāk nevajag </button></div>
        </form>
    </div>
 </div>
<div class="space"></div>
<br>

<div id="myDIV2">
 <?php
        while ($data = mysqli_fetch_assoc($result33)) {
    ?>

    <div class="comessage">
  

        <div class="inline" style="font-weight:bold; text-decoration:underline;"></div>
        <div class="inline"><?php echo $data['name']?> uzrakstīja tā:</div>

 

        <br style="clear: both;">
        <div class="comtext"><?php echo $data['text']?></div>
        
       
    </div>

   <?php
		}
    ?>
  
  <div class="butr"><button class="but" onClick="window.location.reload();">Aizvērt </button></div>

</div>
    
<div id="footer" class="footer">
    <p> <a href="../adm/zina.php" style="text-decoration: underline; color: #000;">Developed by JP 2021._Contact</a> </p>
</div>   
<script src="js/main.js">
</script>


   

    
</body>
</html>