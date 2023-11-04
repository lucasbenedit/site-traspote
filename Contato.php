<!DOCTYPE html>
<html>

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
                    <li><a href="index.html">Inicio</a></li>
                    <form action="index.html" method="POST"></form>
                    <li><a href="serviços.php">Serviços</a></li>
                    <form action="serviços.php" method="POST"></form>
                    <li><a href="sobrenós.php">Sobre nõs </a></li>
                    <li><a href="Contato.php">Contato</a></li>
                    <form action="Contato.php" method="POST"></form>
                    <button><a href="login.php">entrar</a></button>

                    </div>
        </header>

        <head>
            <title>Login</title>
        </head>


        <button><a href="login.php">entrar</a></button>


        <head>
            <title>Caixa de Contato</title>
            <style>
                .container {
                    width: 300px;
                    padding: 20px;
                    background-color: #f2f2f2;
                    border: 1px solid #ccc;
                }

                .container input[type=text],
                .container textarea {
                    width: 100%;
                    padding: 12px 20px;
                    margin: 8px 0;
                    display: inline-block;
                    border: 1px solid #ccc;
                    box-sizing: border-box;
                }

                .container input[type=submit] {
                    background-color: #4CAF50;
                    color: white;
                    padding: 12px 20px;
                    border: none;
                    cursor: pointer;
                }

                .container input[type=submit]:hover {
                    background-color: #45a049;
                }
            </style>
        </head>

        <body>
            <center>
                <div class="container">
                    <h2>Entre em Contato</h2>
                    <form>
                        <label for="name">Nome:</label>
                        <input type="text" id="name" name="name" required>

                        <label for="email">Email:</label>
                        <input type="text" id="email" name="email" required>

                        <label for="message">Mensagem:</label>
                        <textarea id="message" name="message" required></textarea>

                        <input type="submit" value="Enviar">


                        <form action="enviar_email.php" method="post">
                        </form>
                </div>
            </center>
            <style>
                .social-icon {
                    width: 30px;
                    height: 30px;
                }
            </style>
            </head>
            <center>

                <body>


                    <a href="https://www.facebook.com/profile.php?id=100064181527121" target="_blank">
                        <img src="img/Facebook.png" alt="Facebook" class="social-icon">
                    </a>

                    <a href="https://www.twitter.com/seu_perfil" target="_blank">
                        <img src="img/twitter.png" alt="Twitter" class="social-icon">
                    </a>

                    <a href="https://www.instagram.com/tiowilliam_tiarosangela/" target="_blank">
                        <img src="img/Instagram.png" alt="Instagram" class="social-icon">
                    </a>

                    <a href="https://web.whatsapp.com/" target="_blank">
                        <img src="img/whatsapp.png" alt="whatsapp" class="social-icon">
                    </a>
                </body>
            </center>

        </body>
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



</html>