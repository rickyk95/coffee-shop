<head>
    <style>
        footer{
    height:30vh;
    background-color:black;
    color:white;
    display:flex;
    justify-content:space-evenly;
    align-items:center;
}

.column{
    text-align:center;
}

.column h2{
    text-align:center;
}

footer a{
    color:white;
}

.arrow-up-column{
    text-align:center;
}
.fa-circle-arrow-up{
    font-size:3rem;
    cursor:pointer;
    margin-top:1.5vh;
}

.fa-circle-arrow-up:hover{
    color:maroon;
}

@media screen and (max-width:612px){

    footer{
        flex-direction:column;
        height:auto;
    }

    .column {
        width:100%;
    }

    .column h2, .column h3{
        text-align:center;
        margin:2vh 0;
    }
  
}
    </style>
</head>

<footer>
    <div class="column arrow-up-column">
        <h2>Got to top </h2>
        <i class="fa-solid fa-circle-arrow-up"></i>
    </div>
        <div class="column">
            <h2>What We Offer</h2>
            <a href="newsletter.php">
                <h3>Newsletter</h3>
            </a><a href="shop.php">
                <h3>Shop</h3>
            </a>
        </div>
        <div class="column">
            <h2>Contact</h2>
            <a href="contact.php">
                <h3>Contact us</h3>
            </a><a href="carreers.php">
                <h3>Carreers</h3>
            </a><a href="">
                <h3>Find Us</h3>
            </a>
    </div>
</footer>

<script src="js/scrollUp.js"></script>