<?php 
require_once('../config/database.php');
require_once('../class/class.php'); 
$db = new operations();
$db->view_newest();
$result=$db->view_newest();

  if(isset($_GET['R_category']))
{
    global $db;
    $ID = $_GET['R_category'];
}

?>

<html>
    <head>
        <title>pasakas_MoS</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="description" content="Elegant Accordion with jQuery and CSS3" />
        <meta name="keywords" content="pasaka"/>
        <link rel="icon" href="../images/bio.png">
        <link rel="stylesheet" href="../css/style.css" type="text/css" media="screen"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="icon">
    </head>
    <body>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script type="text/javascript" src="../js/function.js"></script>
<div class="title"><div class="titlet" id="blink">īsās Pasakas?</div></div>

    <div id="popDiv" class="ontop">
        <div id="popupb">
        <div class="poptextb">
          <p>Uzmanību!!! Realitāte dažreiz mēdz būt reāli nepatīkama, reizēm neskaidra. Ieteikums palikt PasakāS.</p><br>
          <a href=../../real/index.php><div class="realty"><p>Nospiežot šo apliecinu, ka apzināti atgriežos realitātē.</p></div></a>
        </div>
        <div onClick="hide('popDiv')" class="popupCloseButton">&times;<a href="#" onClick="hide('popDiv')"></div>
        </div>
        </div>
        <div id="popDiv1" class="ontop">
        <div id="popup">
        <div class="poptext"> <p>Bērnībā mūs saista viss jaunais, nezināmais. Mēs iepazīstam pasauli, mēģinām uzzināt un apgūt pēc iespējas
         vairāk. Kopumā interesanti pavadām laiku. Laika ir pietiekami un iet tas lēnām – “līdz nākošajai dzimšanas dienai ak vai cik daudz
          laika…” . Laiks arī ir iedots pietiekami, uzzināt un mēģināt saprast vajag tiešām daudz. Tad mēs sākam kļūt pieauguši, mūs mazāk 
          interesē jaunas lietas, parādās savas iecienītās grāmatas,  filmas, mūzika, mīļākie ēdieni, nodarbošanās, cilvēki, politiskie uzskati. 
          Mēs arvien retāk izmēģinām jaunas lietas, turamies pie jau pārbaudītām. Tā dzīvot ir vieglāk un drošāk, vilties un sajust sāpes tā
           var mazāk. Bet maksa par to ir nežēlīga – mūsu laiks. Darot mūsu ierastās lietas tas vairs nav vajadzīgs tik daudz.
            Un jo vairāk mēs darām ierastās lietas, jo mazāk laika vajag lai tās izdarītu. Maz laikam ir slikta īpašība, tas paiet ātri – 
            “pagājušā dzimšanas diena taču bija pirms mēneša…”. Tā tas ir, tā tam būs būt un nekur no tā mēs nevaram likties. Bet pamēģināt varam.
             Variantu ir daudz un viens no jaukākajiem veidiem kā (gan uz pavisam īsu brīdi) izkāpt no šī trakā paātrinājuma skrējiena uz nezināmo 
             ir pasakas. Vislabāk ir tās rakstīt. Bet arī lasīšana ir iespēja.</p></div>
        <div onClick="hide('popDiv1')" class="popupCloseButton">&times;<a href="#" onClick="hide('popDiv1')"></a></div>
        </div>
           </div>
            <div id="popDiv2" class="ontop">
              <div id="popup">
              <div class="poptext"> <p>Pasaka par to, kas te notiek. Ja Jūs šeit esat nokļuvuši, tam nav nekāda sakara ar apzinātu izvēli vai Brīvo gribu 
                (nu vismaz Jūsējo vai manējo pilnīgi noteikti nē). Tā tam bija jābūt un tā nu tas ir noticis. Un nekad nekas vairs nebūs tā kā agrāk. 
                Sensitīvi personas dati (ja kāds uzskata, ka viņam tādi ir) šeit netiek ne prasīti, ne uzkrāti, ne apstrādāti. Ne te kāds to grib, 
                ne kādam te to vajag. Gribiet lasiet, negribiet nelasiet. Ja kas ienāk prātā, rakstiet ko gribat, šeit viss ir pareizi. Ja būs kas nelikumīgs vai kaut kas galīgi garām,
                 tad gan nāksies izdzēst. Viss uzrakstītais ir radies reālu vērojumu iespaidā, bet neskatoties uz to, visi tēli izdomāti, sakritības 
                 nejaušas. lielākā daļa no gramatikas, stila un noformējuma kļūdām vairāk vai mazāk ir apzinātas. Labākās pasakas vēl tikai top.
                  Pasaku spēle tiek veidota. Arī īsai filmai vajadzētu būt, kādreiz...</p></div>
             <div onClick="hide('popDiv2')" class="popupCloseButton">&times;<a href="#" onClick="hide('popDiv2')"></a></div>
              </div>
</div>
    <div class="img">
        <p class="imgtx">Vārdus nevajag daudz, vajag īstos. Tāpēc Īsas pasakas par svarīgo. </p>
    </div>
    <div class="avoid">
        <p class="imgav">Everyone has a story...</p>
    </div>

        <div class="reference">
              <p><strong>Kāpēc pasakas - </strong>
              Pasaka ir sacerējums prozā, kas stāsta par izdomātiem notikumiem un parādībām. Pasaku tēli ierasti ir izdomātas būtnes,
              kuras reāli dabā nepastāv. Pasakās mēdz darboties arī cilvēki, bet tas, ko viņi ir izdarījuši, dzīvē parasti
              nav noticis. Tā kā var diezgan droši secināt, ka pasakas ir lielākā daļa no tā, ko mēs ikdienā stāstām viens otram.
              Ja patīk klausīties pasakas vai sen neviens nav stāstījis, tad šeit ir iespēja tās palasīt. <strong>Kāpēc īsas - </strong>
              Vienkārši, laikmetam atbilstoši, tādi TikTok formāta sižeti, tikai izteikti vārdos. Katru izlasīt var pāris minūtēs. Katrai var
              pierakstīt savu turpinājumu. Pasakās mēdz būt arī morāle un mācība. Šajās nav! Lasiet droši.
          </p>
          <br>
          <div>&#9884 &#9884 &#9884</div>
       
        <?php 
        $result=$db->view_newest();
        if (mysqli_num_rows($result) < 1) {
           echo "<div>Nekā nav</div>";
        }
        while ($data = mysqli_fetch_assoc($result)) {
        ?>
      
              <div class="invisible"><p><strong>Jaunākā pasaka sākas tā: </strong><div class="fragments"><?php echo $data['content'] ?>
              </div><a class="links" href="../content/read.php?R_ID=<?php echo $data['ID'] ?>">Lasīt tālāk</a></p></div>
              <?php
		        }
        ?>    
              </div>
            <div class="reference3">
              <a href="#" onClick="pop('popDiv')">
                <div class="svarigi">Realitāte</div></a>
            </div>  
            <div class="reference4">
              <a href="#" onClick="pop('popDiv1')">
                <div class="svarigi">vienkārši tāpat</div></a>
            </div>
            <div class="reference5">
              <a href="#" onClick="pop('popDiv2')">
                <div class="svarigi">Varbūt SVARĪGI</div></a>
            </div>
  </div>
  <div class="reference6">
<p class="temas">Pasaku sajūtas</h1>
<br>

</div>
<div class="arrow-down"></div>
<br><br>
<div class="reference7">
<a href="../tema/temaread.php?R_category=Sat[R]aucošās" class="accordion-toggle" id="accordion-toggle">SatRaucošās</a>
<a href="../tema/temaread.php?R_category=Sat[R]aucošās" class="accordion-toggle" id="accordion-togglem">Satraucošās pasakas.</a>

<a href="../tema/temaread.php?R_category=Nenopietnas" class="accordion-toggle" id="accordion-toggle">ne<span1>n</span1>opietnās</a>
<a href="../tema/temaread.php?R_category=Nenopietnas" class="accordion-toggle" id="accordion-togglem">neNopietnās pasakas.</a>

<a href="../tema/temaread.php?R_category=Nesaprotamas" class="accordion-toggle" id="accordion-toggle">neSAPROTAMāS</a>
<a href="../tema/temaread.php?R_category=Nesaprotamas" class="accordion-toggle" id="accordion-togglem">Nesaprotamās pasakas.</a>

<a href="../tema/temaread.php?R_category=Pamācošās" class="accordion-toggle" id="accordion-toggle">Prātīgās</a>
<a href="../tema/temaread.php?R_category=Pamācošās" class="accordion-toggle" id="accordion-togglem">Prātīgās pasakas.</a>


 <div class="footer"> <a href="../../real/index.php"
               style="text-decoration: underline; color: #000;">Realitāte__ir__šeit </a>
               &copy JP 2020  <a href="../adm/zina.php" 
               style="text-decoration: underline; color: #000;">_mindOfSpace_sAziņai___ </a>
          </div>  
        </div>
  <div class="fixed">
        <a href=../../mostoppage/index.html><i class="fa fa-home fa-lg" style="font-size:36px"></i></a>
        </div> 
    </body>
</html>