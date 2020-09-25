<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    
    <title> Mon Portfolio en ligne </title>

    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600&display=swap" rel="stylesheet" type="text/css">

    <!-- css -->
    <link rel="stylesheet" href="css/style.css"> 
</head>
<!--contenu du site-->
<body>
    <!-- header -->
    <header class="container-fluid header">
        <div class="container">
            <a href="#" class="logo"> Mon portfolio </a>
            <nav class="menu">
                <a href="#"> Accueil </a>
                <a href="#about"> A propos </a>
                <a href="#portfolio"> Portfolio </a>
                <a href="#contact"> Contact </a>
            </nav>
        </div>
    </header>
    <!-- end header-->

    <!-- bannière -->
    <section class="conainer-fluid banner">
        <div class="ban">
            <img src="img/ban.jpg" alt="bannière du site" />
        </div>
        <div class="inner-banner">
            <h1> Bienvenue sur mon portfolio </h1>
            <button class="btn btn-custom"> Contactez moi !</button>
        </div>
    </section>
    <!-- end bannière -->

    <!-- à propos -->
    <section class="container-fluid about">
        <div class="container">
            <div>
                <h2 id="about"> A propos de moi </h2>
            </div>
            <hr class="separator">
            <div class="row">
               <article class="col-md-4 col-lg-4 col-xs-4 col-sm-12">
                    <h2> Etudes </h2>
                    <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laborum beatae debitis distinctio voluptatibus aperiam. Corporis alias explicabo dolore praesentium quis, vero aut eligendi eius ipsum commodi. Quos impedit ut ipsam.
                    </p>
                </article>
                <article class="col-md-4 col-lg-4 col-xs-4 col-sm-12">
                    <h2> Expérience </h2>
                    <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laborum beatae debitis distinctio voluptatibus aperiam. Corporis alias explicabo dolore praesentium quis, vero aut eligendi eius ipsum commodi. Quos impedit ut ipsam.
                    </p>
                </article>
                <article class="col-md-4 col-lg-4 col-xs-4 col-sm-12">
                    <h2> Hobbies </h2>
                    <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laborum beatae debitis distinctio voluptatibus aperiam. Corporis alias explicabo dolore praesentium quis, vero aut eligendi eius ipsum commodi. Quos impedit ut ipsam.
                    </p>
                </article>
                
              </div>
        </div>
        
    </section>
    <!-- end à propos -->

    <!-- portfolio -->
    <section class="container-fluid portfolio">
      
        <div class="container">
            <div id="portfolio">
                <h2> Mon portfolio </h2>
                <hr class="separator">
            </div>
        <div class="row">
            </article>
        </div>
    </section>
    <!-- end portfolio -->

    <!-- footer / contact -->
    <footer class="container-fluid footer">
        <div class="container">
            <h2 id="contact"> Contactez moi !</h2>
                <hr class="separator">
            <div class="row">
                <div class="span6">
                    <form class="formulaireContact">
                        <div class="controls controls-row">
                            <input id="name" name="name" type="text" class="span3" placeholder="Name"> 
                            <input id="email" name="email" type="email" class="span3" placeholder="Email address">
                        </div>
                        <div class="controls">
                            <textarea id="message" name="message" class="span6" placeholder="Your Message" rows="5"></textarea>
                        </div>
                          
                        <div class="controls">
                            <button id="contact-submit" type="submit" class="btn btn-custom input-medium pull-right">Send</button>
                        </div>
                    </form>
                </div>
            </div>
            <p>
                Copyright (c) 2016 Copyright Holder All Rights Reserved.
            </p>        
        </div>
    </footer>
</body>
</html>