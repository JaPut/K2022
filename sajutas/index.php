<?php 
require_once('./config/database.php');
require_once('./class/sajclass.php'); 
$feeldb = new feel();
global $feeldb;
$result88=$feeldb->view_text();
$feeldb->store_life();
 
?>


<html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Bezatbildīga rīcība</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="sajutas">
  <meta content="" name="prats">
  <meta content="brivi" name="">
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script type="text/javascript" src="js/main.js"></script>

</head>

<body id="body">
  <a name="top"></a> 
 
  <div id="slide4" class="slide header">
      <h1>Sākums.</h1>
      <p>Neviens nav izbēdzis no sākuma.<br>Tāpat kā no beigām neviens neizbēgs.<br>Neviens tevi neprasīja vai tu gribi sākties.<br>
      Bet rezultāts ir tāds, ka tu tagad esi tur kur esi.<br>To, kas notiek starp sākumu un beigām sauc par Dzīvi.<br>
      Dzīves vienīgais noteikums - izstāties nedrīkst, citādi - beigas.<br>
      <br><h1>Dzīve.</h1>
  </div>
  <div id="slide5" class="slide header">
 
<p> 

  <?php
      while ($data = mysqli_fetch_assoc($result88)) {
?>

 <?php echo $data['text'] ?> //

<?php      
}
?>

</p>
<button class="but1" id="btnn">Dzīves<br>turpinājums</button><br>

<div id="myDIV">
  <div class="myDIV">
            <form method="POST" id="life">
                <div class="inline" size="50"><input type="text" name="author" required placeholder="sauc mani Vārdā ..." ></div>
                <div class="inl"><p>dzīve ir īsa, atlikušo zīmju skaits -  </small></p><p id="charNum">255</p></div>
                <textarea name="life_text" id="field" maxlength="255" required placeholder="un par Dzīvi Rakstīšu es tā ..."></textarea>
                <br>
                <div class="bb"><button name="life_sav"> Saglabāt </button>
                <button onClick="window.location.reload();">Šoreiz labāk nevajag </button></div>
          </form>
      
    </div>
  </div>

</div>
  <div id="slide6" class="slide header"><br>
     
      <p><br>Neviens negrib beigties<br>Neviena beigas ir kaut kam sākums.<br> Tavas beigas beigas arī būs kaut kā sākums.<br>Tāpat kā tavs sākums kādreiz bija Neviena beigas.<br>Tavā sākumā Neviens pavisam noteikti negribēja beigties.
      <br>Nav tāda brīža kurā beidzas beigas un kurā sākas sākums.<br>Nevienu sākumā nemaz neinteresē tavas beigas.<br>Neviens sākumā nemaz negribēja sākties.<br>Sākuma nav, tāpat kā arī beigu  nav.
      <br>Ir kaut kas aiz un pirms. </p>
      <h1>Beigas.</h1>
     <div class="talak" id="talak">Kas tālāk =>...</div>
  </div>
  
  <div class="fixed">
    <span style="color: Mediumslateblue;">
    <a href=../mostoppage/index.html><i class="fa fa-home fa-lg" id="grey" style="font-size:36px"></i></a>
    </span>
    </div>
  <div class="fixed1">
    <span style="color: Mediumslateblue;">
    <a href=../mostoppage/index.html><i class="fa fa-home fa-lg" id="grey" style="font-size:36px"></i></a>
    </span>
    </div>
 
<script src="js/main.js"></script>
</body>
</html>
