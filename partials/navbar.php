<head>
    <script src="https://kit.fontawesome.com/50233981bd.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/nav.css" >
</head>
<nav>
        <div class="logo-container">
            <a href="index.php"><img src="images/logo.png"></a>
        </div>
        <span class="toggle"> <i class="fa-solid fa-bars"></i></span>
        <ul class="nav-slide-up">
            <a href="index.php">
                <li>Home</li>
            </a><a href="menu.php">
                <li>Menu</li>
            </a><a href="shop.php">
                <li>Shop</li>
            </a><a href="contact.php">
                <li>Contact Us</li>
            </a>
        </ul>
 </nav>

 <script>
    const toggle = document.querySelector('.toggle');
    const ul = document.querySelector('nav ul');
    toggle.addEventListener('click',()=>{

        if(ul.classList.contains('nav-slide-up')){
            ul.classList.remove('nav-slide-up');
            ul.classList.add('nav-slide-down');
            
        }else{
            ul.classList.remove('nav-slide-down');
             ul.classList.add('nav-slide-up');
        }
    })
 </script>
