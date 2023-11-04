<body>
    <title>trasporte</title>
    <style>
        body {
            padding: 0;
            margin: 0;
            background: url("img/fundo-01.jpg");
            background-size: cover;
            font-family: trebuchet MS;
        }

        header.top {
            height: 75px;
            background-image: url("img/Logo.png");
            background-repeat: no-repeat;
            background-size: 90px;
            background-position: 50px 10px;
            background-color: #000000;
        }

        ul.MENU {
            list-style: none;
            padding: 0;
            margin: 0;
            width: 80%;
            margin-left: 20%;
            height: 50px;
            padding-top: 0px;
        }

        header.top nav::after {
            clear: both;
            content: '';
        }

        ul.MENU li {
            float: left;
            font-size: 14px;
            padding: 0 1%;
            text-align: center;
            width: 14.66666666666667%;
        }

        ul.MENU li a {
            margin: 30px 0;
            text-decoration: none;

            font-weight: 100;
            cursor: pointer;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #eed028;
            display: block;
        }

        ul.MENU li a:hover {
            font-weight: 400;
        }

        section {
            width: 1200px;
            margin: 10px auto;
            margin-top: 40px;
            position: relative;
        }

        section article {
            display: snone;
            background: #000000;
            min-height: 450px;
            /*transition: all 0.8s;
    box-shadow: 10px 8px 5px #DDD;*/
            position: absolute;
            top: 0;
            z-index: 1;
            opacity: 0;
            border-radius: 10px;
        }

        section article.first {
            box-shadow: none;
            background: none;
            color: #FFF;
        }

        section article.show {
            display: inherit !important;
            -webkit-animation: swing 1s ease;
            animation: swing 1s ease;
            -webkit-animation-iteration-count: 1;
            animation-iteration-count: 1;
            z-index: 10;
            opacity: 1;
            margin-top: 40px;
        }

        section article.first h2 {
            font-size: 6em;
            margin: 0;
            text-shadow: 4px 4px #AAA;
        }

        section article.first p {
            font-size: 2em;
            text-shadow: 2px 2px #AAA;
        }

        section article.cars header {
            border-radius: 10px 10px 0 0;
            background: #F5F5F5;
            padding: 10px;
        }

        section article.cars div.description {
            width: 50%;
            float: left;
            padding: 20px;
        }

        section article.cars img {
            width: 30%;
            margin: 0 5%;
        }

        footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            text-align: center;
            color: #fff;
        }

        @keyframes swing {
            0% {
                filter: alpha(opacity=0);
                opacity: 0;
                margin-top: 0;
            }

            100% {
                filter: alpha(opacity=100);
                opacity: 1;
                z-index: 10;
                margin-top: 40px;
            }

        }
    </style>
    </head>

    <body>
        <header class="top">
            <nav>
                <ul class="MENU">
                    <li><a href="index.html">Início</a></li>
                    <li><a href="serviços.php">Serviços</a></li>
                    <form action="serviços.php" method="POST"></form>
                    <li><a href="sobrenós.php">Sobre Nós</a></li>
                    <li><a href="Contato.php">Contato</a></li>
                    </div>
                    <form action="pesquisar2.https" method="get">
                        <input type="text" name="q" placeholder="pesquisar2.https">
                        <input type="submit" value="Buscar">
                        <button><a href="login.php">entrar</a></button>
                        </padding:>
        </header>

        <head>
            <title>Login</title>
        </head>


        <button><a href="login.php">entrar</a></button>

        <head>
            <title>Slideshow de Imagens</title>
            <style>
                .slideshow {
                    position: relative;
                    width: 100%;
                    height: 400px;
                    overflow: hidden;
                }

                .slideshow img {
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
                    transition: opacity 1s ease-in-out;
                }

                .slideshow img:not(:first-child) {
                    opacity: 0;
                }
            </style>
        </head>

        <body>
            <div class="slideshow">


                <img src="img/tra1.jpg" style="width: 300px; height: 300px;">
                <img src="img/tras2.jpg" style="width: 300px; height: 300px;">
                <img src="img/tras3.png" style="width: 300px; height: 300px;">
                <img src="img/tras4.png" style="width: 300px; height: 300px;">
            </div>


            <script>
                function startSlideshow() {
                    var images = document.querySelectorAll('.slideshow img');
                    var currentIndex = 0;

                    setInterval(function() {
                        images[currentIndex].style.opacity = '0';
                        currentIndex = (currentIndex + 1) % images.length;
                        images[currentIndex].style.opacity = '1';
                    }, 3000);
                }

                startSlideshow();
            </script>
            <style>
                /* Estilos para o rodapé */
                footer {
                    background-color: #000000;
                    padding: 0%;
                    text-align: center;
                    font-size: 14px;
                    color: #ffffff;

                }
            </style>

            <body>
                <footer>

                    <p1>© 2023 Nome da Empresa. Todos os direitos reservados.</p1>

                </footer>



                </div>
            </body>