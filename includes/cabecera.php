<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>kacosegovia.com - Aprendiendo PHP</title>
        <link rel="icon" href="data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'%3E%3Cpath fill='%23000' d='M256 0C114.62 0 0 114.62 0 256s114.62 256 256 256 256-114.62 256-256S397.38 0 256 0zm0 472.32C132.48 472.32 39.68 379.52 39.68 256 39.68 132.48 132.48 39.68 256 39.68 379.52 39.68 472.32 132.48 472.32 256 472.32 379.52 379.52 472.32 256 472.32zm0-66.048l-78.992-78.912 35.248-35.264 43.744 43.744 125.056-125.056 35.248 35.264z'%3E%3C/path%3E%3C/svg%3E" type="image/svg+xml">
        <meta content="Aprendiendo PHP" name="description">
        <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
        <style>
            body {
                font-family: 'Open Sans', 'Helvetica', sans-serif;
                color: #000;
                padding: 0;
                margin: 0;
                line-height: 1.4;
                background-color: #fcfcfc; 
            }
            h1, h2, h3, h4, h5, h6, p {
                padding: 0;
                margin: 0;
                color:#333333;
            }
            h1 {
                font-size: 30px;
                font-weight: 700!important;
                color:#333;
            }
            #h1-cookies {
                margin-left: auto !important;
                margin-right: auto !important;
            }
            h2 {
                font-size: 24px;
                font-weight: 600;
            }
            h3 {
                font-size: 22px;
                font-weight: 500;
                line-height: 28px;
                margin-left: 5px;
            }
            hr {
                margin-top: 35px;
                margin-bottom: 35px;
                border: 0;
                border-top: 1px solid #bfbebe;
            }
            a {
                color: #676767;
                text-decoration: none;
                cursor: pointer;
                -webkit-transition: all .3s ease-in-out;
                -moz-transition: all .3s ease-in-out;
                -ms-transition: all .3s ease-in-out;
                -o-transition: all .3s ease-in-out;
                transition: all .3s ease-in-out;
            }
            a:hover {
                text-decoration: none;
                color: #000 !important;
            }
            .nav-li-a {
                color: white;
                margin-left: 3px;
                padding-top: 11px;
                padding-bottom: 11px;
                font-size: 15px;
                padding-left: 5px;
                padding-right: 5px;
            }
            .navbar-nav>li>a i {
                margin-right: 5px;
            }
            .navbar {
                position: relative;
                min-height: 40px;
                margin-bottom: 20px;
                border-radius: 1px !important;
                border: 1px solid transparent;
            }
            .navbar-inverse {
                background-color: #464646;
            }
            .navbar-brand {
                display: flex;
                color: #eaeaea;
                float: left;
                height: 40px;
                padding: 15x 15px;
                line-height: 18px;
                align-items: center;
            }
            .navbar-brand img {
                margin-right: 8px;
            }
            #nav-span {
                font-size: 23px;
                padding-left: 8px;
            }
            .email-with-margin {
                margin-right: 13px;
            }.input-label {
                margin: 8px;
            }
            @media (min-width: 768px) {
                .content {
                    padding: 30px;
                    border: 2px solid #ccc;
                    margin: auto;
                    margin-top: 60px;
                    margin-bottom: 30px;
                    border-radius: 8px;
                }
                .page-content {
                    display: flex;
                    flex-direction: column;
                    align-items: stretch;
                    min-height: 80vh;
                }
                .content-wrapper {
                    display: flex;
                    flex-wrap: wrap;
                    justify-content: space-between;
                    flex: 0 0 calc(33.33% - 10px);
                }
                .exercise-table {
                    border-collapse: collapse;
                }
                .exercise-table td {
                    border: 2px double black;
                    padding: 10px;
                }
                #content-exercises {
                    padding: 45px;
                }
            }
            @media (max-width: 767px) {
                .content {
                    padding: 15px;
                    border: 1px solid #ccc;
                    margin: 15px;
                    border-radius: 8px;
                }
                .page-content {
                    display: flex;
                    flex-direction: column;
                    align-items: stretch;
                    min-height: 73vh;
                    padding-bottom: 10px;
                }
                .content-wrapper {
                    display: flex;
                    flex-direction: column;
                    align-items: stretch;
                }
                .exercise6-table {
                    width: 100%;
                    border-collapse: collapse;
                    margin:-14px !important;
                }
                .exercise6-table td {
                    border: .5px double black;
                    padding: 1px;
                }
                #h1-cookies {
                    margin-bottom: 35px;
                }
            }
            .footer {
                font-size: 13px;
                color: #555 !important;
                margin-bottom: 45px;
                margin-top: 25px;
                padding: 0;
                background-color: #eaeaea;
                text-align: center;
                line-height: 1.4;
            }
            .p-recibir {
                font-weight: 300;
                font-size: 16px; 
                margin-left: 15px;
                margin-top: 5px;
            }
            .p-recibirtwo {
                font-weight: 300;
                font-size: 16px; 
                margin-left: 30px;
                margin-top: 5px;
            }
            .p-recibir-index {
                font-weight: 300;
                font-size: 16px; 
                margin-left: 15px;
                margin-top: 5px;
            }
            .button {
                display: inline-block;
                padding: 6px 12px;
                background-color: #464646;
                color: #fcfcfc;
                text-decoration: none;
                border-radius: 8px;
                border: solid 1px;
                cursor: pointer;
            }
            .button:hover {
                background-color: #676767;
            }
            .custom-table {
                table-layout: fixed;
            }
            .custom-table td {
                width: 150px;
                padding: 2px;
                padding-left: 10px;
            }
            .custom-table th {
                width: 130px;
                padding: 2px;
                padding-left: 10px;
            }
            .custom-table tr {
                height: 20px; /* Altura aproximada de las filas */
            }
            #content-cookies {                
                text-align: center;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button class="navbar-toggle" data-target="#myNavbar" data-toggle="collapse" type="button">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/Udemy.yo/index.php" rel="nofollow">
                        <img src="/Udemy.yo/img/php.png" width="40" alt="aprendiendo PHP">
                        <span id = "nav-span">kacosegovia.com</span>
                    </a>
                </div>                
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a class="nav-li-a" href="/Udemy.yo/index.php"><i aria-hidden="true" class="fa fa-home"></i>Inicio</a></li>
                        <li><a class="nav-li-a" href="/Udemy.yo/funciones/funciones.php"><i aria-hidden="true" class="fa fa-briefcase"></i>Funciones</a></li>
                        <li><a class="nav-li-a" href="/Udemy.yo/cookies/cookies.php"><i aria-hidden="true" class="fa fa-briefcase"></i>Cookies</a></li>
                        <li><a class="nav-li-a" href="/Udemy.yo/ejercicios/ejercicios.php"><i aria-hidden="true" class="fa fa-briefcase"></i>Ejercicios</a></li>
                        <li><a class="nav-li-a" href="/Udemy.yo/formulario.php"><i aria-hidden="true" class="fa fa-check-square-o"></i>Regístrate</a></li>
                    </ul>
                </div>
            </div>
        </nav>