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
    $result=$db->adview_record();
    $result2=$db->adview_record2();
    $result3=$db->adview_record3();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/indexview.css">
    <!-- <link rel="stylesheet" href="../css/bootstrap.css"> -->
    <title>Redaction</title>
</head>
<body>
                        <table class="table table-bordered">
                            <tr>
                            <td style="width: 3%"> ID </td>
                                <td style="width: 5%"> category </td>
                                <td style="width: 10%"> author </td>
                                <td style="width: 10%"> text </td>
                                <td style="width: 55%"> content </td>
                                <td style="width: 5%"> link </td>
                                </tr>
                            <tr>
                                <?php 
                                    while($data = mysqli_fetch_assoc($result))
                                    {
                                ?>
                         
                    <td><div class="tdh"><?php echo $data['ID'] ?></div></td>
                    <td><div class="tdh"><?php echo $data['category'] ?></div></td>
                    <td><div class="tdh"><?php echo $data['author'] ?></div></td>
                    <td><div class="tdh"><?php echo $data['text'] ?></div></td>
                    <td><div class="tdh"><?php echo $data['content'] ?></div></td>
                    <td><div class="tdh"><?php echo $data['link'] ?></div></td>
                    <td><div class="tdh"><a href="edit.php?U_ID=<?php echo $data['ID'] ?>">Edit</a></div></td>
                    <td><div class="tdh"><a href="del.php?D_ID=<?php echo $data['ID'] ?>">Del</a></div></td>
                          
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