<?php 
require_once('./config/database.php');
require_once('./class/realclass.php'); 
$realdb = new real();
if(isset($_GET['R_ID']))
{
    global $realdb;
    $ID = $_GET['R_ID'];
}
$resvajid = $ID;
$result=$realdb->view_resvaj();
$results22 = $realdb->view_realcomm();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kas notiek</title>
    <meta content="" name="JP">
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
        <a href="index.php#needstit"><i class="fa fa-home fa-lg" style="font-size:36px"></i></a>
    </div>
    <div class="header">

    <?php
        while ($data = mysqli_fetch_assoc($result)) {
    ?>

    <p class="spin3"><?php echo $data['vajresnos']?></p>
    </div>
    <div class="mainmessage"><p class="spin2"><?php echo $data['content']?></p>
    <div class="vardat"><?php echo $data['name']?>_<?php echo $data['time']?></div></div> 
    <br>                 
    <?php
		}
    ?>
    <div class="space"></div>
<button class="but" id="btnn" >Uzraksti savu pieredzi</button>

    <div id="myDIV">
        <div class="space"><br></div>

    <?php   
        global $resvajid;
        $realdb->Store_Realcomm(); 
                      
    ?>
    
        <div class="myDIV">
            <form method="POST" id="usrform">
                <input type='hidden' name='rcomm_id' value='<?php echo "$resvajid";?>'/>
                <div class="inline">Es - </div>
                <div class="inline" size="150"><input type="text" name="rcomm_author" required placeholder="Ko sauc par ..." ></div>
                <div class="inline"> - domāju tā: </div>
                <br style="clear: both;">
                <textarea name="rcomm_text" required placeholder="Teikšu tā ..."></textarea>
                <div class="butr"><button name="realcomm_sav" class="but"> Saglabāt </button></div>
                <div class="butr"><button class="but" onClick="window.location.reload();">Šoreiz labāk nevajag </button></div>
            </form>
    </div>
 </div>
<div class="space"></div>
<br>
    <?php
    $resvajid = $ID;
    global $resvajid;
        while ($data = mysqli_fetch_assoc($results22)) {
    ?>
        
    <div class="comessage">
        <div class="inline" style="font-weight:bold;"><i class="fa fa-user" aria-hidden="true"></i>: <?php echo $data['name'] ?></div>
        <div class="inline"></div>
        <br style="clear: both;">
        <div class="comtext"><?php echo $data['text'] ?></div>
        <div class="inliner"><?php echo $data['realcomm_time'] ?></div>
    </div>
      
    <?php
		}
    ?>

<div class="footer">
    <p> <a href="../adm/zina.php" style="text-decoration: underline; color: #000;">Developed by JP 2021._Contact</a> </p>
</div>   
<script src="js/main.js">
</script>
</body>
</html>