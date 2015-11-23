<!DOCTYPE html>
<html>

<head>
    <title>NoAccent!</title>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href='comments-o.ico'/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=0">
    <link rel='stylesheet' href='bower_components/bootstrap/dist/css/bootstrap.min.css'>
    <link rel='stylesheet' href='bower_components/font-awesome/css/font-awesome.min.css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/header.css" type="text/stylesheet">
    <link rel="stylesheet" href="css/fonts.css" type="text/stylesheet">
    <link rel="stylesheet" href="css/index.css" type="text/stylesheet">

    <style>
        #tagged-text { display: none; }
        #tagged-title { display: none; }
    </style>

    <script type="text/javascript" src='bower_components/jquery/dist/jquery.min.js'></script>
    <script type="text/javascript" src='bower_components/bootstrap/dist/js/bootstrap.min.js'></script>
    <script type="text/javascript" src='js/index.js'></script>
</head>

<?php include("header.php");?>

<body id='home'>
    <section>
        <div class='container text-center'>
            <div class='section-module'>
                <h1 class='section-center section-divider text-center' id='title'><img class='cat' src='cat-nobg.png'></img>NoAccent!</h1>
                <h3 class='section-divider' id='subtitle'>A foreign accent correction app.</h3>
                <h4 class='section-divider'>(featuring Groupon the Space Cat!)</h4>
                <ul class="section-divider list-inline big-icon">
                    <li><a href="https://github.com/Dan-Zheng/No-Accent" target="_blank"><i class="fa fa-github"></i></a>
                    </li>
                    <li><a href="http://devpost.com/software/accent" target="_blank"><i class="fa fa-code"></i></a>
                    </li>
                </ul>
          </div>
        </div>
    </section>

    <section id='about' class='dark-bg'>
        <div class='container'>
            <div class='section-module'>
                <h2 class='section-divider text-center'>About</h2>
                <h3 class='white section-center text-center section-divider'>Our app, explained.<img class='cat-small' src='cat-nobg.png'></h3>
                <h3 class='purple heavy section-paragraph section-center section-divider text-center'>Why?</h3>
                <h4 class="white">
                    <ul class="list-space section-paragraph">
                        <li>For a foreigner, learning to speak a new language can be challenging and intimidating.</li>
                        <li>Correcting an accent isn't easy, and sometimes people are treated differently based on their accents.</li>
                        <li>If you do have an accent, your friends might be too polite to correct you.</li>
                    </ul>
                </h4>
                <h3 class='purple heavy section-paragraph section-center section-divider text-center'>What?</h3>
                <h4 class="white">
                    <ul class="list-space section-paragraph">
                        <li><span class='purple'>NoAccent!</span> helps users correct their accents by using visual and audio input to provide suggestions for improvement.</li>
                    </ul>
                </h4>
                <h3 class='purple heavy section-paragraph section-center section-divider text-center'>How?</h3>
                <h4 class="white">
                    <ul class="list-space">
                        <li><span class='purple'>NoAccent!</span> focuses on correcting pronunciation at the smallest level, one word at a time! <span class='green'>Space Cat, an authentic speaker of English, lends us a hand!</span></li>
                        <li>The app interface features a list of commonly mispronounced English words. Users can pick a word from the list that they want to practice.</li>
                        <li>From there, <span class='purple'>NoAccent!</span> records a user's mouth movements while he/she pronounces the word.</li>
                        <li>Then, two views of the user's mouth are generated: a frontal view and a lateral view.</li>
                        <li>The frontal view overlays an animation of the mouth movement of <span class='green'>Space Cat</span> over the user's mouth movement for the word.</li>
                        <li>The app also provides a lateral view that analyzes sound frequencies to approximates the user's lip and tongue positions and compares positional differences between the user and <span class='green'>Space Cat</span>.</li>
                    </ul>
                </h4>
            </div>
        </div>
    </section>

    <section id='team'>
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
                            <p class="text-muted">Designer/Linguist</p>
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

    <section id='demo' class='dark-bg'>
        <div class='container text-center'>
            <div class='section-module'>
                <h2 class='text-center section-heading'>Demo</h2>
                <h3 class='white text-center section-title'>Here are some images of our app.</h3>
                <div class='text-center wrap'>
                    <!--<iframe id='demo-video' src="https://player.vimeo.com/video/139043174" width="960px" height="540px" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>-->
                    <img class='auto-resize section-divider' src='img/front.png'></img>
                    <img class='auto-resize section-divider' src='img/lateral.png'></img>
                </div>
            </div>
        </div>
    </section>

    <section id='tech'>
        <div class='container'>
            <div class='section-module'>
                <h2 class='text-center section-heading'>Technologies</h2>
                <h3 class='text-center section-title'>A list of our technologies.</h3>
                <h4>
                    <ul class="list-space section-title">
                        <li><span class='purple'>Xcode/Swift:</span> iOS development</li>
                        <li><span class='purple'>HTML/CSS/JS, Bootstrap:</span> website</li>
                        <li><span class='purple'>Praat:</span> spectrograms (visual representations of audio input)</li>
                    </ul>
                    <div class='text-center'>
                        <img class='force-resize section-divider' src='img/praat_beef.png'></img>
                        <img class='force-resize section-divider' src='img/praat_bed.png'></img>
                    </div>

                </h4>
            </div>
        </div>
    </section>

    <footer class='section-center'>
    <p>
        Made with <i class='fa fa-heart'></i> at <a href='http://wildhacks.org/'>WildHacks 2015</a>.
        <img class='cat-footer' src='cat-nobg.png'></img>
    </p>
    </footer>
</body>

</html>
