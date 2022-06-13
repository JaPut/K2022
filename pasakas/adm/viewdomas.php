<?php session_start(); /* Starts the session */

if(!isset($_SESSION['UserData']['Username'])){
	header("location:login.php");
	exit;
}
?>
<?php 
    require_once('../config/database.php');
    require_once('../class/class.php'); 
    $db = new operations();
    
    $result2=$db->view_biology();
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/indexview.css">
    <title>Redaction</title>
</head>
<body>

                        <table class="table table-bordered">
                            <tr>
                                <td style="width: 2%"> ID </td>
                                <td style="width: 7%"> sadaļa </td>
                                <td style="width: 9%"> title </td>
                                <td style="width: 4%"> date </td>
                                <td style="width: 39%"> text </td>
                                <td style="width: 10%"> text2 </td>
                                <td style="width: 10%"> text3 </td>
                                <td style="width: 10%"> text4 </td>
                                <td style="width: 7%"> author </td>
                                <td style="width: 2%"></td>
                                <td style="width: 2%"></td>
                            </tr>
                            <tr>
                                <?php 
                                    while($data = mysqli_fetch_assoc($result2))
                                    {
                                ?>
                                    
                    <td><div class="tdh"><?php echo $data['id'] ?></div></td>
                    <td><div class="tdh"><?php echo $data['part'] ?></div></td>
                    <td><div class="tdh"><?php echo $data['title'] ?></div></td>
                    <td><div class="tdh"><?php echo $data['date'] ?></div></td>
                    <td><div class="tdh"><?php echo $data['article'] ?></div></td>
                    <td><div class="tdh"><?php echo $data['article2'] ?></div></td>
                    <td><div class="tdh"><?php echo $data['article3'] ?></div></td>
                    <td><div class="tdh"><?php echo $data['article4'] ?></div></td>
                    <td><div class="tdh"><?php echo $data['author'] ?></div></td>
                    <td><div class="tdh"><a href="editdomas.php?U_ID=<?php echo $data['id'] ?>">Edit</a></div></td>
                    <td><div class="tdh"><a href="del.php?D_ID10=<?php echo $data['id'] ?>&table=domas">Del</a></div></td>
                           
                                </tr>
                            <?php
                                    }
                                ?>
                        </table>
<br>
                        <form> <button type="submit" formaction="indexadm.php">index</button>     </form>  
<br>
                        
                        <a href="logout.php">Click here</a> to Logout.                        
</body>
</html>