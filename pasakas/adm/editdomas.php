<?php 
    require_once('../config/database.php'); 
    $db = new operations();
    $db->update5();
    $id = $_GET['U_ID'];
    $result2 = $db->get_record5($id);
    $data = mysqli_fetch_assoc($result2);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
    <title>Update Operation</title>
    <style>
    input {width: 100%;}
    </style>
</head>

<body>
                    <div class="card-header">
                        <h2> Update Record </h2>
                    </div>
                        <?php $db->Store_Comm(); ?>
                        <div class="card-body">
                            <form method="POST">
                                <label for="fname">ID:</label>
                                <input type="text" name="ID" value="<?php echo $data['id']; ?>">
                                <label for="fname">Part:</label>
                                <input type="text" name="part" placeholder="part" class="form-control mb-2" required value="<?php echo $data['part']; ?>">
                                <label for="fname">Virsraksts:</label>
                                <input type="text" name="title" placeholder="title" class="form-control mb-2" required value="<?php echo $data['title']; ?>">
                                <label for="fname">Datums:</label>
                                <input type="text" name="date" placeholder="date" class="form-control mb-2" required value="<?php echo $data['date']; ?>">
                                <label for="fname">Teksts:</label>
                                <input type="text" size="500" name="article" placeholder="article" required value="<?php echo $data['article']; ?>">
                                <label for="fname">Teksts2:</label>
                                <input type="text" name="article2" placeholder="article2" class="form-control mb-2" value="<?php echo $data['article2']; ?>">
                                <label for="fname">Teksts3:</label>
                                <input type="text" name="article3" placeholder="article3" class="form-control mb-2" value="<?php echo $data['article3']; ?>">
                                <label for="fname">Teksts4:</label>
                                <input type="text" name="article4" placeholder="article4" class="form-control mb-2" value="<?php echo $data['article4']; ?>">
                                <label for="fname">Autors:</label>
                                <input type="text" name="author" placeholder="author" class="form-control mb-2" required value="<?php echo $data['author']; ?>">
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