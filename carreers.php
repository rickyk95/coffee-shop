<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/0fd643744a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/carreers.css">
    <title>Carreers</title>
</head>
<body>
    <?php include "partials/navbar.php";?>

<div id="feature-mobile">
        <h1>Carreers</h1>
</div>
<div id="feature-container">
        <div class="feature">
                <div class="header-text">
                    <h1> Build a carreer you love </h1>
                </div>
                
                <div class="header-image"><img src="images/carreers.jpg"alt="">
                </div>
        </div>
 </div>


    <div id="steps">
        <div class="step"> 
            <span> <h2> 1 </h2> </span>
            <h2> Email us your resume </h2>
        </div>
        <div class="step"> 
            <span> <h2> 2 </h2> </span>
            <h2> Meet us </h2>
        </div>
        <div class="step"> 
            <span> <h2> 3 </h2> </span>
            <h2> Join the team </h2>
        </div>
    </div>


    <div id="job-openings">
        <div class="job">
            <div class="job-icon">
            <i class="fa-solid fa-mug-saucer"></i>
            </div>
            <div class="job-description">
                <h2>Barista</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reprehenderit amet placeat quidem sunt, fuga vel est. Voluptate excepturi id a, nemo eos alias, corporis, consequatur optio molestias molestiae assumenda magni!</p>
            </div>
        </div>

        <div class="job">
            <div class="job-icon">
            <i class="fa-solid fa-computer"></i>
            </div>
            <div class="job-description">
                <h2>Front-End Developer</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reprehenderit amet placeat quidem sunt, fuga vel est. Voluptate excepturi id a, nemo eos alias, corporis, consequatur optio molestias molestiae assumenda magni!</p>
            </div>
        </div>

        <div class="job">
            <div class="job-icon">
                <i class="fa-solid fa-cart-shopping"></i>
            </div>
            <div class="job-description">
                <h2>Ecommerce Developer</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reprehenderit amet placeat quidem sunt, fuga vel est. Voluptate excepturi id a, nemo eos alias, corporis, consequatur optio molestias molestiae assumenda magni!</p>
            </div>
        </div>
        <div class="job">
            <div class="job-icon">
            <i class="fa-brands fa-artstation"></i>
            </div>
            <div class="job-description">
                <h2>Graphic Designer</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reprehenderit amet placeat quidem sunt, fuga vel est. Voluptate excepturi id a, nemo eos alias, corporis, consequatur optio molestias molestiae assumenda magni!</p>
            </div>
        </div>
        <div class="job">
            <div class="job-icon">
            <i class="fa-brands fa-salesforce"></i>
            </div>
            <div class="job-description">
                <h2>Salesforce Specialist</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reprehenderit amet placeat quidem sunt, fuga vel est. Voluptate excepturi id a, nemo eos alias, corporis, consequatur optio molestias molestiae assumenda magni!</p>
            </div>
        </div>

        <div class="job">
            <div class="job-icon">
            <i class="fa-brands fa-adversal"></i>
            </div>
            <div class="job-description">
                <h2>Ads Specialist</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reprehenderit amet placeat quidem sunt, fuga vel est. Voluptate excepturi id a, nemo eos alias, corporis, consequatur optio molestias molestiae assumenda magni!</p>
            </div>
        </div>

    </div>

    <div id="job-form-header">
        <h1>Get in touch</h1>
    </div>

    <div id="job-form">
        <form action="" method="POST">
            <label>Name</label>
            <input type="text">
            <label>Last Name</label>
            <input type="text">
            <label>Cover Letter</label>
            <textarea type="text"></textarea>
            <label>Email</label>
            <input type="email">
            <input type="submit" value="Apply">
        </form>
    </div>

    <?php include "footer.php"; ?>

    <!-- <script src="js/carreers-animation.js"></script> -->
    

</body>
</html>