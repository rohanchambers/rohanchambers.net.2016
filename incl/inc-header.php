<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?=$browserTitle?></title>
    <meta name="author" content="Rohan Chambers">
    <meta name="description" content="This website is primarily designed to be an online portfolio presence for Rohan Chambers, a freelance Web Designer / Front End Developer based in London." />
    <meta name="keywords" content="rohan chambers, rohan, chambers, freelance front end developer, front end developer, london front end developer, html5 developer, web developer, web designer, html5, css3, responsive web design" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!--(if target dev)><!-->
    <link rel="stylesheet" href="/bower_components/normalize-css/normalize.css">
    <link rel="stylesheet" href="/assets/css/styles.css">
    <!--<!(endif)-->
    <!--(if target dist)>
    <link rel="stylesheet" href="/assets/css/compiled.min.css">
    <!(endif)-->
    <!--(if target dev)><!-->
    <script src="/assets/js/vendor/modernizr-custom.js"></script>
    <!--<!(endif)-->

    <!-- Open graph tags -->
    <meta property="og:image"           content="">
    <meta property="og:title"           content="">
    <meta property="og:description"     content="">
    <meta property="og:url"             content="">
    <meta property="og:image:width"     content="600">
    <meta property="og:image:height"    content="600">
    <meta property="og:image:type"      content="image/jpg">
    <meta property="fb:app_id"          content="">

    <meta name="twitter:card"           content="summary">
    <meta name="twitter:site"           content="">
    <meta name="twitter:title"          content="">
    <meta name="twitter:description"    content="">
    <meta name="twitter:creator"        content="">
    <meta name="twitter:image:src"      content="">
    <meta name="twitter:domain"         content="">
</head>
<body id="<?=$pageName?>">
    <div id="home"></div>
    <div class="container">
        <header id="header-main" class="row">
            <div id="logo">
                <a href="/">Rohan Chambers</a>
                <img src="/assets/img/global/rohanchambers.jpg" alt="Rohan Chambers" title="Rohan Chambers" />
            </div>

            <button class="c-hamburger c-hamburger--htx">
                <span>Toggle menu</span>
            </button>

            <nav role="navigation" id="nav-main" class="">
                <ul>
                    <li class="<?=$activeHome?>"><a href="/index-dev.php#home">Home <span>Welcome</span></a></li>
                    <!-- <li class="desktop-nav-mini"><a href="/index-dev.php#about">Intro <span>Bio</span></a></li> -->
                    <li class="desktop-nav-mini"><a href="/index-dev.php#what-i-do">What I do <span>My work</span></a></li>
                    <li class="desktop-nav"><a href="index-dev.php#services">Services <span>What I do</span></a></li>
                    <li class="desktop-nav-mini"><a href="/index-dev.php#skills">Skills <span>My work</span></a></li>
                    <li class=""><a href="/index-dev.php#contact">Contact <span>Get in touch</span></a></li>
                    <li class="<?=$activePortfolio?>"><a href="/portfolio-dev.php">Portfolio <span>My work</span></a></li>                    
                    <li class="desktop-nav last"><a href="http://blog.rohanchambers.net/">Blog <span>Various</span></a></li>
                </ul>
            </nav>
        </header>
    </div>