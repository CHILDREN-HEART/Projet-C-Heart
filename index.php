<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <link
            href=""
            rel="stylesheet"
        />
        <title>page d'accueil</title>
        <link
            rel="stylesheet"
            href="pagedaccueil.css"
        />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1"
        />
        <link
            rel="stylesheet"
            href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
        />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <header>
            <div class="entete">
                <div class="c">Child heart</div>
                <div class="inscription">
                    <a
                        class="mot3"
                        href="inscription/"
                        >Inscription</a
                    >
                </div>
                <a
                    href="connexion/index.php"
                    class="img2"
                    ><img
                        src="../assets/64572.png"
                        class="line"
                        alt="logo connection"
                /></a>
                <link
                    rel="stylesheet"
                    href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic"
                />
            </div>
        </header>
        <div style="height: 100%"></div>
        <div style="height: 200px"></div>
        <div class="carroussel">
            <div class="container">
                <div
                    id="myCarousel"
                    class="carousel slide"
                    data-ride="carousel"
                >
                    <ol class="carousel-indicators">
                        <li
                            data-target="#myCarousel"
                            data-slide-to="0"
                            class="active"
                        ></li>
                        <li
                            data-target="#myCarousel"
                            data-slide-to="1"
                        ></li>
                        <li
                            data-target="#myCarousel"
                            data-slide-to="2"
                        ></li>
                    </ol>

                    <div class="carousel-inner">
                        <div class="item active">
                            <img
                                class="img3"
                                src="../assets/main.jpg"
                                alt="car1"
                            />
                            <div class="carousel-caption">
                                <p class="text1">
                                    C-Heart <br />
                                    Pour le bien etre de l’enfance
                                </p>
                            </div>
                        </div>

                        <div class="item">
                            <img
                                src="../assets/main.jpg"
                                alt="car2"
                            />
                            <div class="carousel-caption">
                                <p class="text2">Notre objectif est de vous informer sur l’état de santé de votre enfant lorsqu’il est dans son environnement scolaire</p>
                            </div>
                        </div>
                        <div class="item">
                            <img
                                src="../assets/main.jpg"
                                alt="car3"
                            />
                            <div class="carousel-caption">
                                <p class="text3">Nous vous informons sur la fréquence cardiaque et la température de votre enfant.</p>
                            </div>
                        </div>
                    </div>

                    <a
                        class="left carousel-control"
                        href="#myCarousel"
                        data-slide="prev"
                    >
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a
                        class="right carousel-control"
                        href="#myCarousel"
                        data-slide="next"
                    >
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>

        <footer>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="faq/index.php">FAQ</a></li>
                <li class="list-inline-item"><a href="forum/index.php">Forum</a></li>
                <li class="list-inline-item"><a href="#">Quizz</a></li>
            </ul>
            <p class="copyright">C-HEART ©2022</p>
        </footer>

        <script src="pagedaccueil.js"></script>
    </body>
</html>