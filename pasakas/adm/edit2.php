<?php 
    require_once('../config/database.php'); 
    $db = new operations();
    $db->update2();
    $id = $_GET['U_ID'];
    $result2 = $db->get_record2($id);
    $data = mysqli_fetch_assoc($result2);
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
                        <?php $db->Store_Comm(); ?>
                        <div class="card-body">
                            <form method="POST">
                                <input type="text" name="ID" value="<?php echo $data['id']; ?>">
                                <input type="text" name="name" placeholder="name" class="form-control mb-2" required value="<?php echo $data['name']; ?>">
                                <input type="text" name="comm_text" placeholder="comm_text" class="form-control mb-2" required value="<?php echo $data['comm_text']; ?>">
                        </div>
                    <div class="card-footer">
                            <button class="btn btn-success" name="btn_update2"> Update </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>