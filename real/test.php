<?php 
require_once('./config/database.php');
require_once('./class/realclass.php'); 
$realdb = new real();

$resvajid = 11;

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
  

    <div id="myDIVa">
        <div class="space"><br></div>

    <?php   
        $resvajid = 11;
        global $resvajid;
    ?>
    
        <div class="myDIV">
            <form method="POST" id="usrform">
               
                <div id="butright"><button name="realcomm_sav" class="butright"> Saglabāt </button></div>
               
            </form>
    </div>
 </div>

</body>
</html>