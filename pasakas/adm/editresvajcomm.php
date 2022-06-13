<?php 
    require_once('../config/database.php'); 
    require_once('../class/realclass.php'); 
    $db = new real();
    $db->update5();
    $id = $_GET['U_ID'];
    $result3 = $db->get_record5($id);
    $data = mysqli_fetch_assoc($result3);
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
                                <input type="text" name="ID" value="<?php echo $data['id']; ?>" size="5">
                                <input type="text" name="relcomm_id" class="form-control mb-2" required value="<?php echo $data['relcomm_id']; ?>">
                                <input type="text" name="name" class="form-control mb-2" required value="<?php echo $data['name']; ?>">
                                <textarea cols="70" rows="5" name="text" class="form-control mb-2" required value=""><?php echo $data['text']; ?></textarea>
                        </div>
                    <div class="card-footer">
                            <button class="btn btn-success" name="btn_update55"> Update </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>