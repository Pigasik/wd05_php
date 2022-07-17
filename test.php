
<?php
// echo "GET";
// echo "<pre>";
// print_r($_GET);
// echo "</pre>";

// echo "POST";
// echo "<pre>";
// print_r($_POST);
// echo "</pre>";

// echo "FILES";
// echo "<pre>";
// print_r($_FILES);
// echo "</pre>";

// echo "REQUEST";
// echo "<pre>";
// print_r($_REQUEST);
// echo "</pre>";

include_once 'db.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    $title = $_POST['title'];
    $content = $_POST['content'];
    $filePath = '';
    if (!empty($_FILES) && isset($_FILES['img'])){
        $filePath = "img/".$_FILES['img']['name'];
        move_uploaded_file($_FILES['img']['tmp_name'], __DIR__.'/'.$filePath);
    }
    $sql = "INSERT INTO posts (title, content, img) VALUES ('$title', '$content', '$filePath');";
    mysqli_query($connection, $sql);
}
?>