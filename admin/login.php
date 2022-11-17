<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label>Username </label>
        <input type="text" name="username">
        <label> Password </label>  
        <input type="password" name="password"> 
        <input type="submit" value="Log In" name="submit">
    </form>
    <?php
    include "db.php";
        if(isset($_POST["submit"])){
            $password = $_POST["password"];
            $username = $_POST["username"];
            $stmt =  $pdo->prepare("SELECT * FROM users WHERE username=:username");
            $stmt->bindParam(":username",$username);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            if($result){
                if(password_verify($password, $result["password"])){
                    session_start();
                    $_SESSION['logged_in'] = true;
                    header("Location:dashboard.php");
                }else{
                    echo "Login unsuccesful";
                }
            }
            
        }
    ?>
</body>
</html>