<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Gin's Juice</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <script src="/scripts/jquery-1.10.2.js"></script>

    <!-- Le styles -->
    <link href="/components/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Over+the+Rainbow' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Inika' rel='stylesheet' type='text/css'>
    <link href="/components/flexslider/flexslider.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/stylesheets/tweetMap-1.1.0.min.css">
    <style type="text/css">
        body {
            padding-top: 20px;
            padding-bottom: 40px;
            font-size: 18px;
        }

        h1 {
            font-family: 'Over the Rainbow', cursive;
            font-size: 50px;
        }

        h4 {
            font-family: 'Inika', serif;
            font-size: 32px;
            text-align: center;
            line-height: .9em;
        }

        /* Custom container */
        .container-narrow {
            margin: 0 auto;
            max-width: 980px;
        }

        .container-narrow > hr {
            margin: 30px 0;
        }

            /* Main marketing message and sign up button */
        .jumbotron {
            margin: 60px 0;
            text-align: center;
        }

        .jumbotron h1 {
            font-size: 72px;
            line-height: 1;
        }

        .jumbotron .btn {
            font-size: 21px;
            padding: 14px 24px;
        }

        .nav-pills li.social-icons a {
            font-size: 25px;
        }

        .nav-pills li a {
            font-size: 28px;
            color: rgba(95,168,77, 1);
        }



        .nav-pills a.active {
            text-decoration: underline;
        }

        .nav-pills .active a:hover {
            text-decoration: underline;
        }



            /* Supporting marketing content */
        .marketing {
            margin: 60px 0;
        }

        .marketing p + h4 {
            margin-top: 28px;
        }

        #alert
        {
            overflow: hidden;
            z-index: 999;
            width: 100%;
            text-align: center;
            position: absolute;
            top: 0;
            left: 0;
            background-color: #ff6600;
            height: 5px;
            opacity: 1;
        }

        .well
        {
            background-color: #D15000;
        }
    </style>
    <link href="/components/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="/components/bootstrap/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
          href="/components/bootstrap/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
          href="/components/bootstrap/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72"
          href="/components/bootstrap/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="/components/bootstrap/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="/components/bootstrap/ico/favicon.png">
</head>

<body>
<div id="alert"></div>
<div class="container">

    <?php require('_menu.php'); ?>

    <hr />