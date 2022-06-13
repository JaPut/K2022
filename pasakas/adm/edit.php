<?php 
    require_once('../config/database.php'); 
    $db = new operations();
    $db->update();
    $id = $_GET['U_ID'];
    $result = $db->get_record($id);
    $data = mysqli_fetch_assoc($result);
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
                                <input type="text" name="ID" value="<?php echo $data['ID']; ?>">
                                <input type="text" name="category" placeholder="Category" class="form-control mb-2" required value="<?php echo $data['category']; ?>">
                                <input type="text" name="user" placeholder="Author" class="form-control mb-2" required value="<?php echo $data['author']; ?>">
                                <input type="text" name="text" placeholder="Text" class="form-control mb-2" required value="<?php echo $data['text']; ?>">
                                <input type="text" name="content" placeholder="Content" class="form-control mb-2" required value="<?php echo $data['content']; ?>">
                                <input type="text" name="link" placeholder="Link" class="form-control mb-2" value="<?php echo $data['link']; ?>">
                        </div>
                    <div class="card-footer">
                            <button class="btn btn-success" name="btn_update"> Update </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>