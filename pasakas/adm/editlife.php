<?php 
    require_once('../config/database.php'); 
    $db = new operations();
    $db->update4();
    $id = $_GET['U_ID'];
    $result4 = $db->get_record4($id);
    $data = mysqli_fetch_assoc($result4);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Update Operation</title>
</head>
<body>
                    <div class="card-header">
                        <h2> Update Record </h2>
                    </div>
                        
                        <div class="card-body">
                            <form method="POST">
                                <input type="text" name="ID" value="<?php echo $data['id']; ?>">
                                <input type="text" name="author" placeholder="author" class="form-control mb-2" required value="<?php echo $data['author']; ?>">
                                <textarea type="text" name="text" placeholder="text" class="form-control mb-2" rows="4" cols="150"><?php echo $data['text']; ?></textarea>
                        </div>
                    <div class="card-footer">
                            <button class="btn btn-success" name="btn_update44"> Update </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>