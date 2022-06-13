<?php 

    require_once('../config/database.php');
    $db = new operations();

// Downloads files

if (isset($_GET['file_id'])) {
    $id = $_GET['file_id'];

    // fetch file to download from database
    $sql = "SELECT * FROM pics WHERE id=$id";
    $result = mysqli_query($db->conn, $sql);

    $file = mysqli_fetch_assoc($result);
    $filepath = './uploads/' . $file['name'];

    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('uploads/' . $file['name']));
        ob_clean(); flush();
        readfile('uploads/' . $file['name']);

        // Now update downloads count
        $newCount = $file['downloads'] + 1;
        $updateQuery = "UPDATE pics SET downloads=$newCount WHERE id=$id";
        mysqli_query($db->conn, $updateQuery);
        exit;
    }

}

?>

