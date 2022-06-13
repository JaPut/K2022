<?php session_start(); /* Starts the session */

if(!isset($_SESSION['UserData']['Username'])){
	header("location:login.php");
	exit;
}
?>

<?php 
    include 'download.php';
    require_once('../config/database.php'); 
    require_once('../class/realclass.php'); 
    $realdb = new real();
    $realdb->download_pic();
    $realdb->upload_pic();
    $resultpic=$realdb->view_pic();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="../css/indexview.css">
  <title>Download files</title>
</head>
<body>

<table>
<thead>
    <th>ID</th>
    <th>Filename</th>
    <th>size (in mb)</th>
    <th>Downloads</th>
    <th>Action</th>
    <th>Action</th>
    <th>Img</th>
</thead>

<?php
    while($row = $resultpic->fetch_assoc() ) 
       {
    
?>
    
    <form method="POST">
    
    <tr>
      <td><?php echo $row['id']; ?></td>
      <td><?php echo $row['name']; ?></td>
      <td><?php echo floor($row['size'] / 1000) . ' KB'; ?></td>
      <td><?php echo $row['downloads']; ?></td>
      <td><a href="viewpic.php?file_id=<?php echo $row['id'] ?>">Download</a></td>
      <td><input type="button" class="button_active" onclick="location.href='del.php?D_ID11=<?php echo $row['id'] ?>'"  value="Delete"></td>
      <td><?php echo "<img src='../adm/uploads/".$row['name']."' >"; ?></td>
    </tr>
    </form>


    <?php
                                    }
                                ?> 


</table>
<form> <button type="submit" formaction="indexadm.php">index</button>     </form>



  
</body>
</html>