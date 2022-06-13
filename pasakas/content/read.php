<?php 
require_once('../config/database.php');
require_once('../class/class.php'); 
$db = new operations();
$db->Store_Comm();
if(isset($_GET['R_ID']))
{
    global $db;
    $ID = $_GET['R_ID'];
}
?>

<html>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PasakaS</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/textstyles.css" type="text/css" media="screen"/>
    <script type="text/javascript" src="../js/function.js"></script>
    <title>Main</title>
<body>
<div class="fixed">
        <a href=../launch/index.php><i class="fa fa-home fa-lg" style="font-size:36px"></i></a>
        </div>
 
        <?php 
       
       $xxx = $ID;
       global $xxx;
       
        $result=$db->view_record();

        if (mysqli_num_rows($result) < 1) {
            echo "<div>Nekā nav</div>";
        }
       
                while ($data = mysqli_fetch_assoc($result)) {
                                           
            
        ?>
        
        
    <div class="mainmessage">
       <!-- <div class="separatemessage"><?php echo $data['ID'] ?></div> -->
        <div class="separatemessaget"><a>šo uzrakstīja:</a><?php echo $data['author'] ?></div>
       <div class="separatemessagen"><?php echo $data['text'] ?>.</div>
       <div class="separatemessaged"><?php echo $data['content'] ?></div>
    </div>
    <div class="space">
              <br>
          </div>
<br><br>
</div>
                <div class="space"></div>
              <br>

<button class="button" id="btnn" onclick="myFunction()">Uzraksti kaut ko</button>

<div id="myDIV">
<div class="space"><br></div>

    <?php $x1 = $ID;
    global $x1;
    ?>
                    <div class="myDIV">
                        <div>
                        
                            <form method="POST" id="usrform">
                            <input type='hidden' name='comm_id' value='<?php echo "$x1";?>'/>
                </div>
                            <div class="inline">Es, kurš sevi šobrīd dēvē par </div>
                            <div class="inline" size="50"><input type="text" name="comm_author" required placeholder="Mani var saukt par ..." ></div>
                            <div class="inline"> vēlos uzrakstīt: </div>
                            <br style="clear: both;">
                            <textarea name="comm_text" required placeholder="Teiksim tā..."></textarea>
                        <div id="butright"><button name="comm_save" class="butright"> Saglabāt </button></div>
                        <div id="butleft"><button class="butleft"><a href="../launch/index.php" style="text-decoration:none;"> Varbūt citreiz </a></button></div>
                        </form>
                </div>
          </div>
 </div>
                <div class="space"></div>
              <br>
 <?php
        $result2 = $db->view_record2();
       
            while ($data = mysqli_fetch_assoc($result2)) {
                              
        ?>
        
    <div class="comessage">
    <div class="inline"><?php echo $data['comm_time'] ?>
       
       </div><div class="inline" style="font-weight:bold; text-decoration:underline;"><?php echo $data['name'] ?></div>
       <div class="inline">rakstīja tā:</div>
       <br style="clear: both;">
       <div class="comtext"><?php echo $data['comm_text'] ?></div>
     </div>
      
        <?php
		        }
        ?>
<br><br>
      
        <?php
		       
                    } 
        ?>

<div class="footer">
          <p>Developed by JP 2020. <a href="../adm/zina.php" style="text-decoration: underline; color: #000;">Contact</a> </p>
        </div>   








</body>
</html>