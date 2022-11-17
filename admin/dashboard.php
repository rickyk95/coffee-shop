<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/dashboard.css"> 
    <title>Dashboard</title>
</head>
<body>

<?php
 session_start();
 if(isset($_SESSION['logged_in'])) :
?>

<div id="form-container">
    <form action="" method="POST"  enctype="multipart/form-data">
        <label>Title </label>
        <input type="text" name="title">
        <label> Author </label>
        <input type="text" name="author">
        <label> Post Meta Description (SEO) </label>
        <textarea name="meta_description"></textarea>
        <label> Post Summary (Summary of article) </label>
        <textarea name="summary"></textarea>
        <label> Post </label>
        <label> Article Header Image: (1920x 1080px) </label>
        <input type="file" name="image-file">
        <label> Article Feature Image: (400px 400px) </label>
        <input type="file" name="image-file-feature">
        <div id="editor"></div>
        <input type="text" name="body_content" id="body_content" >
        <input type="submit" name="submit" value="Submit">
    </form>
</div>

<?php else : include "failed_login.php";?>

<?php endif?>

    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<!-- Initialize Quill editor -->
<script>
    var quill = new Quill('#editor', {
        theme: 'snow'
    });
    const postContent = document.querySelector("#body_content");
    quill.on('text-change', function(delta, oldDelta, source) {
        if (source == 'api') {
        console.log("API trigger.");
        } else if (source == 'user') {
        let x = quill.root.innerHTML
            console.log(x)
        postContent.value=x
    }})
  </script>

    <?php 
       include "db.php";

       if(!empty($_POST['submit'])){
            print_r($_POST);
            $title = $_POST['title'];
            $author = $_POST['author'];
            $body = $_POST['body_content'];
            $meta_description = $_POST['meta_description'];
            $summary = $_POST['summary'];
            $stmt = $pdo->prepare("INSERT INTO coffee_shop_posts (title,body,author,image_header,image_feature,meta_description,summary) VALUES (:title,:body_content,:author,:image_header,:image_feature,:meta_description,:summary)");
            $stmt->bindParam(":title",$title);
            $stmt->bindParam(":author",$author);
            $stmt->bindParam(":body_content", $body);
            $stmt->bindParam(":image_header", $image_header);
            $stmt->bindParam(":image_feature", $image_feature);
            $stmt->bindParam(":meta_description",$meta_description);
            $stmt->bindParam(":summary",$summary);
            $image_header = $_FILES['image-file']['name'];
            $img_temp = $_FILES['image-file']['tmp_name'];
            $image_feature = $_FILES['image-file-feature']['name'];
            $img_temp_feature = $_FILES['image-file-feature']['tmp_name'];
            $stmt->execute();
            if(move_uploaded_file($img_temp,'../images/articles/header/'. $image_header)){
                echo "Image uploaded successfully buddy";
              }
              if(move_uploaded_file($img_temp_feature,'../images/articles/feature/'. $image_feature)){
                echo "Image uploaded successfully buddy";
              }
       }
    ?>
</body>
</html>