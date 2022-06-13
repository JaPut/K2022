<?php session_start(); /* Starts the session */

if(!isset($_SESSION['UserData']['Username'])){
	header("location:login.php");
	exit;
}
?>
<?php 
    require_once('../config/database.php'); 
    require_once('../class/realclass.php'); 
    $db = new real();
   
    $result3=$db->adview_resvaj();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="stylesheet" href="../css/bootstrap.css"> -->
    <link rel="stylesheet" href="../css/indexview.css">
    <title>Redaction</title>
</head>
<body>

                        <table class="table table-bordered">
                            <tr>
                                <td style="width: 2%"> ID </td>
                                <td style="width: 9%"> VajRes nosaukums </td>
                                <td> Saturs </td>
                                <td style="width: 8%"> Autors </td>
                            </tr>
                            <tr>
                                <?php 
                                    while($data = mysqli_fetch_assoc($result3))
                                    {
                                ?>
                                   
                          
                    <td><div class="tdh"><?php echo $data['id'] ?></div></td>
                    <td><div class="tdh"><?php echo $data['vajresnos'] ?></div></td>
                    <td><div class="tdh"><?php echo $data['content'] ?></div></td>
                    <td><div class="tdh"><?php echo $data['name'] ?></div></td>
                    <td><div class="tdh"><a href="editviewresvaj.php?U_ID=<?php echo $data['id'] ?>">Edit</a></div></td>
                    <td><div class="tdh"><a href="del.php?D_ID4=<?php echo $data['id'] ?>">Del</a></div></td>
                            
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