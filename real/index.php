<?php 
  require_once('./config/database.php');
  require_once('./class/realclass.php'); 
  $realdb = new real();
  $result=$realdb->view_realvaj();
  $result2=$realdb->view_izdvaj();
  $result3=$realdb->view_konres();
  $result4=$realdb->view_nosres();
  $result5=$realdb->view_realque1();
  $result6=$realdb->view_realque2();
  $result7=$realdb->view_realque3();
  $result8=$realdb->view_realque4();
  $result9=$realdb->view_realque5();
  $result10=$realdb->view_realque6();
  $result77 = $realdb->view_facts();
  $resultpic = $realdb->view_pic();

  if(isset($_GET['R_que']))
  {
      global $db;
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>realitāte_MoS</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="realitāte" name="JP">
  <meta content="mācības" name="mindofspace">
  <meta content="idejas" name="jautri">
  <link href="img/JP.JPG" rel="icon">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link href="./css/style.css" rel="stylesheet">
  <link href="./lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="./lib/bootstrap/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <script src="./js/main.js"></script>
</head>

<body id="body">
<header id="header">
  <div class="container">
    <nav id="menu" class="menu">
      <a href="#body">[Sākums]</a>
      <a href="#about">Kā tas strādā</a>
      <a href="#needstit">Resursi&Vajadzības</a>
      <a href="#whatdo">Aktuāli jautājumi</a>
      <a href="#phy">Fakti</a>
      <a href="#slide">Bildes</a>
      <a href="#footer">Saziņa</a>
    </nav>
  </div>
</header>

<!-- main informative block -->
<div class="general">
  <div class="alf"></div>
    <div class="title">Interaktīvs pasākums vieglajā valodā savu vajadzību un resursu apzināšanai kā arī
      to iespējami efektīvai(-gai) izmantošanai.
    </div>
    <div class="quote">"Ar dzīvi ir tāpat kā ar pasaku, nav svarīgi cik gara, svarīgi cik laba."</div>
    <div class="question">
      <br># šī ir sadaļa par dzīves <abbr title="domāts - praktisko">praktisko</abbr> pusi, par to kurā jākustās. Ja vēl nav skaidrs kas un kādēļ, tad vēl jāpadomā un iedvesmu var rast <a href=../domas/index.html>Pārdomu sadaļu</a>.
      <br># šeit tiek nosauktas vārdā mūsu vajadzības un resursi to realizēšanai.
      <br># papildus apskatīti eksistenciāli jautājumi, tādi kā - "kas notiek?", "ko darīt?", "kas vainīgs?".
      Tos, sev īstajā brīdī uzdodot, <i><abnevis izpratni par modeļiem.br title="lai kas tas arī būtu">pārējais</abbr></i> ir jau vienkārši izdarāms. Jāķeras tik klāt.
      <br># ikdienā pats galvenais jautājums ir "ko darīt". Kas jādara citiem, parasti vienmēr ir skaidrs, šeit var ar to padalīties.
      Vai arī pameklēt idejas iedvesmai.
      </div>
    <div class="disc">&copy Attēlam nav pat ilustratīvas nozīmes.</div>
    <div><a class="poga2" href="../pasakas/launch/index.php">labāk Pasakas</a></div>
</div>

<!-- about -->
<div id="about" class="about">
    <h1>Kā tas strādā</h1><br>
    <hr><br><br>
  <div class="inlineblock">
    <input type="submit" value="Kas to var" id="kas" class="button"/>
    <input type="submit" value="Kā tas strādā" id="ka" class="button"/>
    <input type="submit" value="Kāpēc to darīt" id="kapec" class="button"/>
    <input type="submit" value="Noteikumi" id="kadaveida" class="button"/>
  </div>
  <div class="que"><i class="fa fa-question-circle-o" aria-hidden="true"></i></div>
    <div class="hide1">
      <p>- Apzinot SAVAS vajadzības un PIEEJAMOS resursus. -</p>
      <p>- Pieejamie resursi ir jānošķir no nepiejamajiem. Vienkārši. -</p>
      <p>- Savas vajadzības jānošķir no citu vajadzībām. Sarežģīti. -</p>
      <p>- Vajadzība tiek apmierināta izmantojot resursus. Elementāra sistēma un fundamentāls princips - 
        mainot vienu elementu, otrs arī mainīsies. Noteikti.-</p>
      <p>- Vienu resursu lietošana lai radītu vajadzību un pēc tam to apmierinātu,
        izmantojot citus resursus. Iedarbīgi.-</p>
    </div>  
    <div class="hide2">
      <p>- Cilvēks ir radīts kustībai.Tikai kustoties var apmierināt savas vajadzības. Un vajadzības ir jāapmierina, tur neko nevar darīt. Ne Cilvēks
        pats to izvēlējās, un ne viņš tur ko var mainīt. -</p>
      <p>- Cilvēks savas vajadzības var izvēlēties. -</p>
      <p>- Ne vienmēr. Tikai dažreiz. Bet var. -</p>
      <p>- Tāpēc ir vērts pamēģināt. -</p>
    </div> 
    <div class="hide3">
      <p>1. Jebkādā veidā, arī cilvēka godu un cieņu (lai kas tas arī būtu) aizskarošā veidā*.</p>
      <p>2. Atbildot uz saviem jautājumiem un uzdodot savus jautājumus. Tikai tā un tādā secībā.</p>
      <p>3. Jāatbild tikai uz uzdotiem jautājumiem. Katram ir tiesības nezināt, ko viņš negrib zināt**.</p><br>
      <spin class="smals">*Sākumā savu godu un cieņu. To godu un cieņu kuru aizsargā likums aizskart nedrīkst.</spin>
      <div class="smals">**Tas nestrādā, diemžēl...</div>
    </div>
    <div class="hide4">
      <p>To var Jebkurš. Gandrīz jebkurš. Varbūt.</p>
      <p> Galvenais - PATS. Patstāvīgi. </p>
      <p> Citi aizvedīs tur kur viņiem izdevīgi. </p>
      <p> Svešie vispār nekur nevedīs. Atstās tepat. Tas ir vēl sliktāk. </p>
    </div>
  </div>
</div>

  
 <!-- select needs -->
<div id="needstit" class="needstit">
  <div class="spontit">Informācijas apkopojums un viedokļi</div><br>
    <button id="needs1" class="spon1">Objektīvās vajadzības</button>
    <button id="needs2" class="spon2">Subjektīvās vajadzības</button>
    <button id="spon1" class="spon3">Reālie resursi</button>
    <button id="spon2" class="spon4">Iedomātie resursi</button>
</div>
  <br>
 
 <!-- needs -->
  <div id="needs" class="needs">
    <div id="needsr" class="spong">
      <h1>Reālās vajadzības</h1><br>

      <?php
            while ($data = mysqli_fetch_assoc($result)) {
      ?>
        <a href="vajres.php?R_ID=<?php echo $data['vajresnos'] ?>"><div class="spongline"><i class="fa fa-life-ring" aria-hidden="true"></i> <?php echo $data['vajresnos']?></div></a>
      <?php      
      }
      $realdb->Store_vajres();
      ?>

      <br>
      <div class="myDIV00" id="myDIV00">
      <form method="POST">
          <fieldset>
            <legend>objektīvās Vajadzības pievienošana</legend>
            <div class="form-control">
              <label>Es esmu - </label>
              <input type="name" id="name" name="names" placeholder="cienījamais" required />
              <label>un mans Resurss ir - </label>
              <input
                type="name"
                name="vajresnos"
                maxlength="29"
                placeholder="....."
                required
              />
            </div>
            <input type='hidden' name='vajres' value='realvaj'/>
            <div class="form-control">
              <label for="message">Apraksts* <sub>nav obligāts</sub></label>
              <textarea
                id="message"
                name="content"
                cols="30"
                rows="1"
                placeholder="..........."
              ></textarea>
            </div>
            <input type="submit" value="Pievienot" name="vajres_saves" class="submit-btn" />
          </fieldset> 
        </form>
      </div>
      
        <input type="submit" class="buttons" value="Aizvērt" id="aizvsp"/>
        <input type="submit" class="buttons" id="btnn4" value="Pievienot savu vajadzību" id="aizvsp" />
    </div>
  
    <div id="needsf" class="spong">
      <h1>Izdomātas vajadzības</h1><br>

      <?php
        while ($data = mysqli_fetch_assoc($result2)) {
      ?>
        <a href="vajres.php?R_ID=<?php echo $data['vajresnos'] ?>"><div class="spongline"><i class="fa fa-life-ring" aria-hidden="true"></i> <?php echo $data['vajresnos']?></div></a>
      <?php      
        }
      ?>

      <br>
      <div class="myDIV11" id="myDIV11">
      <form method="POST">
          <fieldset>
            <legend>subjektīvās Vajadzības pievienošana</legend>
            <div class="form-control">
              <label>Es esmu - </label>
              <input type="name" id="name" name="names" placeholder="cienījamais" required />
              <label>un mans Resurss ir - </label>
              <input
                type="name"
                name="vajresnos"
                maxlength="29"
                placeholder="....."
                required
              />
            </div>
            <input type='hidden' name='vajres' value='izdvaj'/>
            <div class="form-control">
              <label for="message">Apraksts* <sub>nav obligāts</sub></label>
              <textarea
                id="message"
                name="content"
                cols="30"
                rows="1"
                placeholder="..........."
              ></textarea>
            </div>
            <input type="submit" value="Pievienot" name="vajres_saves" class="submit-btn" />
          </fieldset> 
        </form>
      </div>
        <input type="submit" class="buttons" value="Aizvērt" id="aizvsp"/>
        <input type="submit" class="buttons" id="btnn5" value="Pievienot savu vajadzību" id="aizvsp" />
    </div>
  
    <div id="spong" class="spong">
      <h1>Cilvēka resursi</h1><br>

      <?php
            global $ID;
            while ($data = mysqli_fetch_assoc($result3)) {
      ?>
        <a href="vajres.php?R_ID=<?php echo $data['vajresnos'] ?>"><div class="spongline"><i class="fa fa-life-ring" aria-hidden="true"></i> <?php echo $data['vajresnos']?></div></a>
      <?php      
      }
      ?>

      <br>
      <div class="myDIV12" id="myDIV12">
        <form method="POST">
          <fieldset>
            <legend>reāla Resursa pievienošana</legend>
            <div class="form-control">
              <label>Es esmu - </label>
              <input type="name" id="name" name="names" placeholder="cienījamais" required />
              <label>un mans Resurss ir - </label>
              <input
                type="name"
                name="vajresnos"
                maxlength="29"
                placeholder="....."
                required
              />
            </div>
            <input type='hidden' name='vajres' value='konres'/>
            <div class="form-control">
              <label for="message">Apraksts* <sub>nav obligāts</sub></label>
              <textarea
                id="message"
                name="content"
                cols="30"
                rows="1"
                placeholder="..........."
              ></textarea>
            </div>
            <input type="submit" value="Pievienot" name="vajres_saves" class="submit-btn" />
          </fieldset> 
        </form>
      </div>
        <input class="buttons" value="Aizvērt" id="aizvsp"/>
        <input class="buttons" id="btnn6" value="Pievienot savu resursu" id="aizvsp" />
    </div>

    <div id="sponk" class="spong">
      <h1>Cilvēka iedomāti resursi</h1><br>

      <?php
        while ($data = mysqli_fetch_assoc($result4)) {
      ?>
        <a href="vajres.php?R_ID=<?php echo $data['vajresnos'] ?>"><div class="spongline"><i class="fa fa-life-ring" aria-hidden="true"></i> <?php echo $data['vajresnos']?></div></a>
      <?php      
        }
      ?>

      <br>
        <div class="myDIV13" id="myDIV13">
        <form method="POST">
          <fieldset>
            <legend>izdomāta Resursa pievienošana</legend>
            <div class="form-control">
              <label>Es esmu - </label>
              <input type="name" id="name" name="names" placeholder="cienījamais" required />
              <label>un mans Resurss ir - </label>
              <input
                type="name"
                name="vajresnos"
                maxlength="29"
                placeholder="....."
                required
              />
            </div>
            <input type='hidden' name='vajres' value='nores'/>
            <div class="form-control">
              <label for="message">Apraksts* <sub>nav obligāts</sub></label>
              <textarea
                id="message"
                name="content"
                cols="30"
                rows="1"
                placeholder="..........."
              ></textarea>
            </div>
            <input type="submit" value="Pievienot" name="vajres_saves" class="submit-btn" />
          </fieldset> 
        </form>
        </div>
            <input type="submit" class="buttons" value="Aizvērt" id="aizvsp"/>
            <input type="submit" class="buttons" id="btnn7" value="Pievienot savu resursu" id="aizvsp" />
    </div>
</div>
 
 <!-- what I do -->
<div id="whatdo" class="whatdo">
  <h1>Aktuāli jautājumi ar atbilžu variantiem.</h1>

    <?php
          $data = mysqli_fetch_assoc($result5)
    ?>

  <a href="que1.php?R_que=<?php echo $data['jautajums'] ?>"> 
  <div class="bloks">
      <div class="center">
        <h3><?php echo $data['jautajums'] ?></h3>
          <i class="fa fa-question-circle-o" style="font-size:18px"></i>
      </div>

    <?php
      while ($data = mysqli_fetch_assoc($result5)) {
    ?>
      <p class="fragments">- <?php echo $data['atbilde'] ?></p>
    <?php      
      }
    ?></a>
  </div>

    <?php
      $data = mysqli_fetch_assoc($result6) 
    ?>
  <a href="que1.php?R_que=<?php echo $data['jautajums'] ?>"> 
  <div class="bloks">
    <div class="center">
      <h3><?php echo $data['jautajums'] ?></h3>
      <i class="fa fa-question-circle-o" style="font-size:18px"></i>
    </div>  
    <?php
      while ($data = mysqli_fetch_assoc($result6)) {
    ?>
      <p>- <?php echo $data['atbilde'] ?></p>
    <?php      
      }
    ?></a>
  </div>

    <?php
      $data = mysqli_fetch_assoc($result7) 
    ?>
  <a href="que1.php?R_que=<?php echo $data['jautajums'] ?>"> 
  <div class="bloks">
    <div class="center">
      <h3><?php echo $data['jautajums'] ?></h3>
      <i class="fa fa-question-circle-o" style="font-size:18px"></i>
    </div>  
    <?php
      while ($data = mysqli_fetch_assoc($result7)) {
    ?>
      <p>- <?php echo $data['atbilde'] ?></p>
    <?php      
      }
    ?></a>
  </div>

    <?php
      $data = mysqli_fetch_assoc($result8) 
    ?>
  <a href="que1.php?R_que=<?php echo $data['jautajums'] ?>"> 
  <div class="bloks">
    <div class="center">
      <h3><?php echo $data['jautajums'] ?></h3>
      <i class="fa fa-question-circle-o" style="font-size:18px"></i>
   </div>  
    <?php
      while ($data = mysqli_fetch_assoc($result8)) {
    ?>
      <p>- <?php echo $data['atbilde'] ?></p>
    <?php      
      }
    ?></a>
  </div>

    <?php
      $data = mysqli_fetch_assoc($result9) 
    ?>
  <a href="que1.php?R_que=<?php echo $data['jautajums'] ?>"> 
  <div class="bloks">
    <div class="center">
      <h3><?php echo $data['jautajums'] ?></h3>
      <i class="fa fa-question-circle-o" style="font-size:18px"></i>
    </div>  
    <?php
      while ($data = mysqli_fetch_assoc($result9)) {
    ?>
      <p>- <?php echo $data['atbilde'] ?></p>
    <?php      
      }
    ?> </a>
  </div>

    <?php
      $data = mysqli_fetch_assoc($result10) 
    ?>
  <a href="que1.php?R_que=<?php echo $data['jautajums'] ?>"> 
  <div class="bloks"> 
    <div class="center">
      <h3><?php echo $data['jautajums'] ?></h3>
      <i class="fa fa-question-circle-o" style="font-size:18px"></i>
    </div>  
    <?php
      while ($data = mysqli_fetch_assoc($result10)) {
    ?>
      <p>- <?php echo $data['atbilde'] ?></p>
      <?php      
      }
    ?></a>
  </div>
      
</div>

 <!-- phylosophy -->
<div id="phy" class="phy">
  <div class="aks">(de)motivējoši apgalvojumi. Aktuālajai situācijai atbilst vismaz 1.</div><br>
    <div class="fakts"><br>
      <p>- beigās visam būs Beigas;</p>
      <div id="aks" class="aks1">un Vēl daži fakti...</div>
    </div>


    <div id="fakti" class="fakti">
      <p>
        <?php
          while ($data = mysqli_fetch_assoc($result77)) {
        ?>
      
          - <?php echo $data['facts'] ?>; //
      
        <?php      
          }
        ?>    
      </p>



      <input type="submit" value="Aizvērt neapstrīdamos faktus" id="aizv" class="button"/>
    </div>

  </div>
</div>

  
<div id="slide" class="slide">




  <?php      
    
      $realdb->upload_pic();
      ?>
  
 
  
<?php if($resultpic->num_rows > 0){ ?> 
   <?php while($row = $resultpic->fetch_assoc()){ ?> 
           <div id="slide" class="mySlides"><?php echo "<img src='../pasakas/adm/uploads/".$row['name']."' >"; ?></div>
        <?php } ?> 
<?php }else{ ?> 
    <p class="status error">Image(s) not found...</p> 
<?php } ?>



   
    
      <a class="lbutton" onclick="plusDivs(-1)"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i></a>
  <div class="centeri">Vizuālā informācija</div>
<a class="rbutton" onclick="plusDivs(+1)"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
  

    <button class="button button2" id="but2" >Pievienot vēl kādu bildi</button>
    
    
    
    
    <div class="myDIV14" id="myDIV14">
  
    <form method="POST" enctype="multipart/form-data">
  <input class="inl" type="file" id="myFile" name="myfile">
  <input class="inl" type="submit" name="savep" value="Pievienot" onclick="picalert()">
  
</form>
    
  </div>

   

    





   

</div>


 
<img src="./images/Dont-Waste-Your.png" alt="Show/Hide Image" id="myImg"/>

<!-- footer -->
<div id="footer" class="footer">
  <div class="footer-text-left">
    <a href="../pasakas/adm/zina.php" class="menus">Saziņa</a>
    <a href="../pasakas/launch/index.php" class="menus">Pasakas</a>
    <a href="../domas/index.html" class="menus">Pārdomas</a>
    <a href="../sajutas/index.php" class="menus">Sajūtas</a>
    <a href="https://cnn.com" class="menus">Labāk_nezināt</a>
    <a class="menuss1" id="tru2"><i class="fa fa-facebook-official" aria-hidden="tru"></i></a>
    <a class="menuss" id="tru1"><i class="fa fa-twitter" aria-hidden="true"></i></a>
    <a class="menuss" id="tru"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
    <a href="smile.html" class="menuss"><i class="fa fa-smile-o" aria-hidden="true"></i></a>
  </div>
</div>
  
<div class="fixed">
  <a href=../mostoppage/index.html><i class="fa fa-home fa-lg" style="font-size:36px"></i></a>
</div> 

<script src="js/main.js"></script>

</body>
</html>