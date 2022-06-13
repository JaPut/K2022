<?php 
require_once('./config/database.php');
require_once('./class/domasclass.php'); 
$domasdb = new domas();
if(isset($_GET['domastitle']))
{
    global $domasdb;
    $domastitle = $_GET['domastitle'];
    $title = $_GET['title'];
}
global $xxx;
$xxx = $domastitle;
$res=$domasdb->view_biologybytitle();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kas tas</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="description" content="xxx" />
    <meta name="keywords" content="xxx"/>
    <link rel="stylesheet" href="css/biologystyle.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script type="text/javascript" src="js/accord.js"></script>
</head>
<body>

<div class="header">
    <h2><?php echo $title?></h2>
</div>

    <?php
        global $xxx;
        $xxx = $domastitle;
        while ($data = mysqli_fetch_assoc($res)) {
    ?>

<div class="row" id="goto">
    <div class="card">
            <h2><?php echo $data['title']?></h2>
            <p class="txt"><?php echo $data['article']?></p>
            <p class="txt"><?php echo $data['article2']?></p>
            <p class="txt"><?php echo $data['article3']?></p>
            <p class="txt"><?php echo $data['article4']?></p>
            <h6 class="autors"><?php echo $data['author']?>_<?php echo $data['date']?></p>
    </div>
</div>

    <?php
        global $xxx;
        $xxx = $domastitle;
      	}
    ?>

    <?php 
        global $xxx;
        $xxx = $domastitle;
        $res22=$domasdb->view_domascomm();
        while ($data2 = mysqli_fetch_assoc($res22)) {
    ?>

    <div class="myDIV2">
        <div class="comessage">
            
            <div class="inline"><?php echo $data2['text']?></div>
           
        </div> <div class="autors2"><?php echo $data2['name']?>_<?php echo $data2['date']?></div>
    </div> 
          
    <?php
	    }
    ?> 
  
    <?php                 
        $domasdb->store_domascomm();           
    ?>

<div class="space"><br></div>
<button class="butatb" id="butatb">Arī man ir ko piebilst </button>
<div class="myDIVans" id="myDIVans">
    <form method="POST" id="usrform">
        <div class="piebilde">Mana piebilde par šo visu ir tāda - </div>
        <input type="hidden" name='title' value='<?php echo $xxx?>'/>
        <div  class="inline">sauc mani par: </div>
        <div class="inline" ><input type="text" size="50" name="name" required placeholder="cienījamais tāds un tāds..." ></div>
        <br style="clear: both;">
        <textarea name="text" rows="5" cols="60" required placeholder="un Rakstīšu es tā ..."></textarea>
       <br>
        <br><button name="domascomm_save" > Saglabāt </button>
        <button id="myDIVansc">Labāk nevajag </button>
    </form>
</div>


<div class="fixed">
    <span style="color: Mediumslateblue;">
        <a href=./index.html><i class="fa fa-home fa-lg" id="grey" style="font-size:36px"></i></a>
    </span>
</div>
<script src="js/accord.js">
</script>
</body>