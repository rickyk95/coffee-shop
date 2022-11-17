<!DOCTYPE html>
<html lang="en">
<head>
<?php
    include 'admin/db.php';
    $title = $_GET['title'];
    $stmt = $pdo->prepare("SELECT * FROM coffee_shop_posts WHERE title=:title");
    $stmt->bindParam(':title',$title);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    $meta_description = explode(" ",$result['meta_description']);
    $final_string = '';
    function addMetaDescription($meta_description,$final_string){
        foreach($meta_description as $index => $char){
            if($index === sizeOf($meta_description)){
                    break;
            }
            if($index !== 0){
                $final_string .= " " . $char;
            }else{
                $final_string .= $char;
            }
        }
        return$final_string;
    }
    // echo addMetaDescription($meta_description,$final_string);

    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo addMetaDescription($meta_description,$final_string);?>">
    <link rel="stylesheet" href="css/article.css">
    <title><?php echo $_GET['title'] ?> </title>
</head>
<body>

<?php include "partials/navbar.php"?>
        <div class="title-container">
            <h1 class="title" ><?php echo $result['title']?></h1>
        </div>
        <div class="meta-description-container">
            <div class="meta-description">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum quidem illum dolorem similique animi modi ipsa harum non ratione quibusdam, incidunt eligendi inventore, tempora placeat atque veritatis perferendis quia cupiditate!
            </div>
        </div>

        <div class="post-image-container">
            <img class="post-image" src="./images/articles/header/<?php echo $result['image_header'] ?>">
        </div>
    <div class="body">
        <?php echo $result['body'];?>;
    </div>

    
    
</body>
</html>