<?php session_start(); /* Starts the session */

if(!isset($_SESSION['UserData']['Username'])){
	header("location:login.php");
	exit;
}
?>
<?php 
    require_once('../config/database.php'); 
    require_once('../class/class.php'); 
    $domadb = new operations();
   
    $res=$domadb->view_domacomm();
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
                                <td style="width: 15%"> Tēma </td>
                                <td style="width: 10%"> Autors </td>
                                <td> Komentārs </td>
                                <td style="width: 7%"> Laiks </td>
                                <td style="width: 3%"> Edit </td>
                                <td style="width: 3%"> Del </td>
                            </tr>
                            <tr>
                                <?php 
                                    while($data = mysqli_fetch_assoc($res))
                                    {
                                ?>
                                   
                          
                    <td><div class="tdh"><?php echo $data['domastitle'] ?></div></td>
                    <td><div class="tdh"><?php echo $data['name'] ?></div></td>
                    <td><div class="tdh"><?php echo $data['text'] ?></div></td>
                    <td><div class="tdh"><?php echo $data['date'] ?></div></td>
                    <td><div class="tdh"><a href="editviewdomacomm.php?U_ID=<?php echo $data['id'] ?>">Edit</a></div></td>
                    <td><div class="tdh"><a href="del.php?D_ID10=<?php echo $data['id'] ?>&table=domascomments">Del</a></div></td>
                            
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