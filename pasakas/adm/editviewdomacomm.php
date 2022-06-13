<?php 
    require_once('../config/database.php'); 
    require_once('../class/class.php'); 
    $domadb = new operations();
    $domadb->update9();
    $id = $_GET['U_ID'];
    $result99 = $domadb->get_record9($id);
    $data = mysqli_fetch_assoc($result99);
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
                                <input type="text" name="domastitle" class="form-control mb-2" required value="<?php echo $data['domastitle']; ?>"size="35" >
                                <input type="text" name="name" class="form-control mb-2" required value="<?php echo $data['name']; ?>">
                                <textarea cols="70" rows="5" name="text" class="form-control mb-2" required value=""><?php echo $data['text']; ?></textarea>
                        </div>
                    <div class="card-footer">
                            <button class="btn btn-success" name="btn_updatexx"> Update </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>