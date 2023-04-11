<?php session_start(); /* Starts the session */

if(!isset($_SESSION['UserData']['Username'])){
	header("location:login.php");
	exit;
}
?>
<?php 
    require_once('../config/database.php'); 
    require_once('../class/class.php'); 
    require_once('../class/realclass.php'); 
    $db = new operations();
    $realdb = new real();
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="../css/indexview.css">
    <title>view_Edit</title>
   
</head>
<body>
<br>  
<?php $db->Store_Record(); 
    $dbname = "table1";
?>
                        
<form method="POST" id="myForm">
<label for="cars">Pasakas saturs:</label>
    <select type="tet" name="category">
        <option value="Nenopietnas">nenopietnās</option>
        <option value="Sat[R]aucošās">satraucošās</option>
        <option value="Nesaprotamas">nesaprotamās</option>
        <option value="Pamācošās">pamācošās</option>
        <option></option>
    </select>
    <select type="tet" name="category1">
        <option value="Nenopietnas">nenopietnās</option>
        <option value="Sat[R]aucošās">satraucošās</option>
        <option value="Nesaprotamas">nesaprotamās</option>
        <option value="Pamācošās">pamācošās</option>
        <option></option>
    </select>
                            
    <input type="text" name="author" placeholder="Autors">
    <input type="text" name="text" placeholder="Nosaukums" required>
    <input type="text" name="content" placeholder="Saturs" required>
    <input type="text" name="link" placeholder="Links">
    <button name="btn_save"> Save </button>
</form>
    <br>



                        <?php $realdb->Store_vajres(); 
                      
                        ?>
                        
<form method="POST" id="myForm">
<label>Vajadzības:</label>
<select type="tet" name="vajres">
    <option value="realvaj">Reālas vajadzības</option>
    <option value="izdvaj">Izdomātas vajadzības</option>
    <option value="konres">Konkrēti resursi</option>
    <option value="nores">Nosacīti resursi</option>
    <option></option>
</select>
    <input type="text" name="vajresnos" placeholder="Vajadzības nosaukums" required>
    <input type="text" name="content" placeholder="Saturs" required>
    <input type="text" name="names" placeholder="Vārds" required>
        <button name="vajres_saves"> Save </button>
</form>
    <br>






    <?php                 
    $realdb->Store_Realque();           
    ?>
                        
    <form method="POST" id="myForm">
    <label>Jautājumi:</label>
    <select type="tet" name="jautajums">
        <option value="Kas notiek">Kas notiek</option>
        <option value="Kā tas notiek">Kā tas notiek</option>
        <option value="Ko darīt">Ko darīt</option>
        <option value="Kas vainīgs">Kas vainīgs</option>
        <option value="Ko var ietekmēt">Ko var ietekmēt</option>
        <option value="Kas tagad būs">Kas tagd būs</option>
        <option value="Kas tagad būs">Kāpēc tas notiek</option>
        <option></option>
    </select>
        <input type="text" name="atbilde" placeholder="atbilde" required>
        <input type="text" name="autors" placeholder="anonīms">
            <button name="realque_save"> Save </button>
    </form>
    <br>

    <?php                 
    $realdb->Store_facts();           
    ?>
                        
    <form method="POST" id="myForm">
    <label for="cars">Fakti:</label>
        <input type="text" name="facts" placeholder="fakts" required>
            <button name="facts_save"> Save </button>
    </form>
    <br>

<?php
    $db->store_domas(); 
?>

<form method="POST">
    <label>Fakti:</label>
    <select type="tet" name="veids">
    <option value="biologija">Bioloģija</option>
    <option value="teorija">Teorija</option>
    <option value="prakse">Prakse</option>
    <option value="mental">Ticība</option>
    <option></option>
  </select>
    <input type="text" name="title" placeholder="Virsraksts" required>
    <input type="text" name="article" placeholder="Saturs" required>
    <input type="text" name="article2" placeholder="Saturs2">
    <input type="text" name="article3" placeholder="Saturs3">
    <input type="text" name="article4" placeholder="Saturs4">
    <input type="text" name="author" placeholder="autors" required>
        <button name="domas_save"> Save </button>
</form>
    <br>


<br>
          <div class="butn">
                       <button type="submit" onclick="location.href = 'view.php'"; class="batn" >pasakas</button>        
                       <button type="submit" onclick="location.href = 'viewcom.php'"; class="batn" >pasakasComm</button>        
                       <button type="submit" onclick="#"; class="batn" >x</button>        
                       <button type="submit" onclick="location.href = 'viewzina.php'"; class="batn" >zina</button>
                       <button type="submit" onclick="#"; class="batn" >x</button>
                       <button type="submit" onclick="location.href = 'viewresvaj.php'"; class="batn" >resursiVaj</button>        
                       <button type="submit" onclick="location.href = 'viewresvajcom.php'"; class="batn" >resursiVajComm</button>        
                       <button type="submit" onclick="location.href = 'viewque.php'"; class="batn" >jautājumi</button>        
                       <button type="submit" onclick="location.href = 'viewquecom.php'"; class="batn" >jautājumiComm</button>        
                       <button type="submit" onclick="location.href = 'viewfact.php'"; class="batn" >fakti</button>
                       <button type="submit" onclick="location.href = 'viewpic.php'"; class="batn" >bildes</button>
                       <button type="submit" onclick="location.href = 'viewpublicpic.php'"; class="batn" >webbildes</button>
                       <button type="submit" onclick="#"; class="batn" >x</button>
                       <button type="submit" onclick="location.href = 'viewdzive.php'"; class="batn" >dzīve</button>
                       <button type="submit" onclick="#"; class="batn" >x</button>
                       <button type="submit" onclick="location.href = 'viewdomas.php'"; class="batn" >bioloģija</button>        
                       <button type="submit" onclick="location.href = 'viewdomas.php'"; class="batn" >teorija</button>        
                       <button type="submit" onclick="location.href = 'viewdomas.php'"; class="batn" >prakse</button>        
                       <button type="submit" onclick="location.href = 'viewdomas.php'"; class="batn" >ticība</button>        
                       <button type="submit" onclick="location.href = 'viewdomascomm.php'"; class="batn" >domascomm</button>        
    
                                </div>
                                <br><br>
                       <a href="logout.php">Click here</a> to Logout. _
                       <a href="../launch/index.php">Click here</a> to Pasakas. _
                       <a href="../../domas/index.html">Click here</a> to Domas. _
                       <a href="../../sajutas/index.php">Click here</a> to Sajūtas. _
                       <a href="../../real/index.php">Click here</a> to Realitāte.
                    </body>
</html>