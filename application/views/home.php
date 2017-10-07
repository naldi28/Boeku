<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
<head>
    <title>BoeKu | Indonesia Membaca</title>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="img/fav.png"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    <link href="assets/css/bootstrap.css" type="text/css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link href="assets/css/app.css" type="text/css" rel="stylesheet">
</head>
<body>

    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a href="#"><img src="assets/img/logo.png" class="navbar-logo"></a>
            </div>
            
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#video" class="navbar-link" data-toggle="collapse" data-target=".navbar-collapse.in">Video</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    
    <div class="page-header">
        <div class="content">
            <h1 class="title" style="color: #ffffff;"><b>BOE</b>KU</h1>
            <h2 style="color: #ffffff; text-align: center;"><strong>#IndonesiaMembaca</strong></h2>
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <a href="http://bit.ly/boeku">
                <button type="button" class="btn btn-default btn-md btn-block" style="color: #fdd304"><strong>Isi Survei Kami</strong></button>      
                </a>          
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
    
    <div class="yt-video" id="video">
        <iframe src="https://www.youtube-nocookie.com/embed/gJ7ACbDhlPM?rel=0" frameborder="0" allowfullscreen></iframe>
    </div>
    
    <script src="assets/js/jquery-2.2.4.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script>
        $('a.navbar-link').on('click', function(event){
            event.preventDefault();

            $('html, body').animate({
                scrollTop: $( $.attr(this, 'href') ).offset().top
            }, 500);
        });
    </script>
</body>
</html>