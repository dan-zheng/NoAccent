<!DOCTYPE html>
<html>

<head>
    <title>No Accent</title>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href='comments-o.ico'/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=0">
    <link rel='stylesheet' href='bower_components/bootstrap/dist/css/bootstrap.min.css'>
    <link rel='stylesheet' href='bower_components/font-awesome/css/font-awesome.min.css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/header.css" type="text/stylesheet">
    <link rel="stylesheet" href="css/fonts.css" type="text/stylesheet">
    <link rel="stylesheet" href="css/whale.css" type="text/stylesheet">
    <link rel="stylesheet" href="css/index.css" type="text/stylesheet">

    <style>
        #tagged-text { display: none; }
        #tagged-title { display: none; }
    </style>

    <script type="text/javascript" src='bower_components/jquery/dist/jquery.min.js'></script>
    <script type="text/javascript" src='bower_components/bootstrap/dist/js/bootstrap.min.js'></script>
    <script type="text/javascript" src='js/index.js'></script>
</head>

<nav class='navbar navbar-inverse navbar-fixed-top noselect'>
    <div class='container'>
        <div class='navbar-header page-scroll'>
            <button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#bs-example-navbar-collapse-1' aria-expanded='false'>
                <span class='sr-only'>Toggle navigation</span>
                <span class='icon-bar'></span>
                <span class='icon-bar'></span>
                <span class='icon-bar'></span>
            </button>
            <a class='navbar-brand page-scroll' href='index.php'>
                <i class='icon-picker fa fa-comments-o'></i>No Accent!
            </a>
        </div>
        <div class='collapse navbar-collapse' id='bs-example-navbar-collapse-1'>
            <ul class='nav navbar-nav navbar-right'>
                <li><a class="page-scroll" href='#page-top'>Home</a></li>
                <li><a class="page-scroll" id='nav-about' href='#about'>About</a>
                <li><a class="page-scroll" id='nav-contact' href='#demo'>Demo</a></li>
            </ul>
        </div>
    </div>
</nav>

<body>
    <section id='page-top'>
        <div class='container text-center'>
          <div class='section-module'>
              <h1 class='section-center section-divider text-center' id='title'><img id='cat' src='cat-nobg.png'></img>No Accent!</h1>
              <h3 class='section-divider' id='subtitle'>A foreign accent correction app.</h3>
          </div>
        </div>
    </section>

    <section id='about' class='white-bg'>
        <div class="container">
            <div class='section-module'>
                <div class="row section-divider">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">Our Team</h2>
                        <h3 class="section-subheading text-muted">We're awesome.</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="team-member">
                            <img src="img/team/yinghua.jpg" class="img-responsive img-circle" alt="">
                            <h4>Yinghua Yang</h4>
                            <p class="text-muted">Designer</p>
                            <ul class="list-inline social-buttons">
                                <li><a href="https://github.com/yinghuayang" target="_blank"><i class="fa fa-github"></i></a>
                                </li>
                                <li><a href="http://www.yangyinghua.xyz" target="_blank"><i class="fa fa-user"></i></a>
                                </li>
                                <li><a href="https://www.facebook.com/yinghua.yang.cn" target="_blank"><i class="fa fa-facebook"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="team-member">
                            <img src="img/team/richard.jpg" class="img-responsive img-circle" alt="">
                            <h4>Richard Wei</h4>
                            <p class="text-muted">iOS Developer</p>
                            <ul class="list-inline social-buttons">
                                <li><a href="https://github.com/xinranmsn" target="_blank"><i class="fa fa-github"></i></a>
                                <li><a href="http://rwei.me" target="_blank"><i class="fa fa-user"></i></a>
                                </li>
                                <li><a href="https://www.facebook.com/xinranmsn1" target="_blank"><i class="fa fa-facebook"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="team-member">
                            <img src="img/team/dan.png" class="img-responsive img-circle" alt="">
                            <h4>Dan Zheng</h4>
                            <p class="text-muted">Web Developer</p>
                            <ul class="list-inline social-buttons">
                                <li><a href="https://github.com/Dan-Zheng" target="_blank"><i class="fa fa-github"></i></a>
                                </li>
                                <li><a href="http://danzheng.me" target="_blank"><i class="fa fa-user"></i></a>
                                </li>
                                <li><a href="https://www.facebook.com/VoidQuery" target="_blank"><i class="fa fa-facebook"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id='demo'>
        <div class='container text-center'>
            <div class='section-module'>
                <h2 class='section-center section-title'>Demo</h1>
                <div class='wrap'>
                    <iframe src="https://player.vimeo.com/video/139043174" width="800px" height="480px" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> <p><a href="https://vimeo.com/139043174">Accent!</a> from <a href="https://vimeo.com/user33161213">杨英华&#039;s work I</a> on <a href="https://vimeo.com">Vimeo</a>.</p>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
