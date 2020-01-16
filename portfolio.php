<?php
    $browserTitle = 'Rohan Chambers | Portfolio';
    $pageName = 'page-portfolio';
    $activePortfolio = 'active'
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?=$browserTitle?></title>
    <meta name="author" content="Rohan Chambers">
    <meta name="description" content="This website is primarily designed to be an online portfolio presence for Rohan Chambers, a freelance Web Designer / Front End Developer based in London." />
    <meta name="keywords" content="rohan chambers, rohan, chambers, freelance front end developer, front end developer, london front end developer, html5 developer, web developer, web designer, html5, css3, responsive web design" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    
    
    <link rel="stylesheet" href="/assets/css/compiled.min.css?20200116">
    
    

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

            <nav id="nav-main" class="">
                <ul>
                    <li class=""><a href="/">Home <span>Welcome</span></a></li>
                    <li class="desktop-nav-mobile"><a href="/index.php#what-i-do">What I do <span>What I do</span></a></li>
                    <li class="desktop-nav services"><a href="/index.php#services">Services <span>What I do</span></a></li>
                    <li class="desktop-nav-mini"><a href="/index.php#skills">Skills <span>My work</span></a></li>
                    <li class=""><a href="/index.php#contact">Contact <span>Get in touch</span></a></li>
                    <li class="<?=$activePortfolio?>"><a href="/portfolio">Portfolio <span>My work</span></a></li>
                    <li class="desktop-nav last"><a href="http://blog.rohanchambers.net/">Blog <span>Various</span></a></li>
                </ul>
            </nav>
        </header>
    </div>

	<section id="portfolio" class="container">
        <header>
            <h1>Portfolio</h1>
            <p>I've had the pleasure of working with some great clients / agencies / companies over the years.<br>
            To name a few: Harrods, Playboy UK, Honda UK, EA Games, Debenhams, London 2012 Olympics, BBC, Wunderman, Elvis communications, Collective London and We Are Social.
            Below are some of the more interesting projects I have worked on.</p>
        </header>

        <h2>Filter by:</h2>
            <div class="button-group filter-button-group">
                <a href="#" class="active" data-filter="*">Show all</a>
                <a href="#" data-filter=".web">Web</a>
                <a href="#" data-filter=".apps">Facebook Apps.</a>
                <a href="#" data-filter=".graphics">Graphics</a>
                <a href="#" data-filter=".video">3D / Video</a>
                <a href="#" data-filter=".freelance">Freelance</a>
            </div>

            <ul class="grid">
                <li class="grid-item all web freelance">
                    <a href="case-study/phoneresq/">
                        <img src="assets/img/portfolio/phoneResq.jpg" alt="Phone ResQ.">
                    </a>
                    <h3>Phone ResQ<span> | We repair and improve</span></h3>                    
                </li>
                <li class="grid-item all web freelance">
                    <a href="case-study/perfectPeaksBrews/">
                        <img src="assets/img/portfolio/ppb.jpg" alt="Heineken, Beauty of Brewing">
                        <h3>Perfect Peaks Brews<span></span></h3>
                    </a>
                </li>
                <li class="grid-item all web">
                    <a href="case-study/heineken/">
                        <img src="assets/img/portfolio/beautyofbeer.jpg" alt="Heineken, Beauty of Brewing">
                        <h3>Heineken<span> | The Beauty of Brewing</span></h3>
                    </a>
                </li>
                <li class="grid-item all web">
                    <a href="case-study/jaguar/livefearless">
                        <img src="assets/img/portfolio/jaguaruk_fearless.jpg" alt="Jaguar UK, Live Fearless">
                        <h3>Jaguar UK<span> | Live Fearless</span></h3>
                    </a>
                </li>
                <li class="grid-item all apps">
                    <a href="case-study/volvic/toughmudder">
                        <img src="assets/img/portfolio/toughmudder.jpg" alt="Toughmudder, Got the bottle">
                        <h3>Volvic, Toughmudder<span> | Got the bottle</span></h3>
                    </a>
                </li>
                <li class="grid-item all apps">
                    <a href="case-study/heinz/getwellsoup">
                        <img src="assets/img/portfolio/getwellsoup.jpg" alt="Heinz Get Well Soup">
                        <h3>Heinz<span> | Get Well Soup</span></h3>
                    </a>
                </li>
                <li class="grid-item all apps">
                    <a href="case-study/hotelsdotcom/">
                        <img src="assets/img/portfolio/hotelsdotcom.jpg" alt="Hotels.com Photo competition">
                        <h3>Hotels.com<span> | Photo Competition</span></h3>
                    </a>
                </li>
                <li class="grid-item all apps web">
                    <a href="case-study/cadbury/advent-calendar">
                        <img src="assets/img/portfolio/cadbury-advent-2.jpg" alt="Cadbury Advent Calendar">
                        <h3>Cadbury<span> | Advent Calendar</span></h3>
                    </a>
                </li>
                <li class="grid-item all apps">
                    <a href="case-study/heinz/">
                        <img src="assets/img/portfolio/heinzMovember.jpg" alt="Heinz HP Movember">
                        <h3>Heinz<span> | HP Movember</span></h3>
                    </a>
                </li>
                <li class="grid-item grid-item all apps">
                    <a href="case-study/bulmers/harvestimator">
                        <img src="assets/img/portfolio/bulmers-harvestimator2.jpg" alt="Bulmers Harvestimator">
                        <h3>Bulmers<span> | Harvestimator</span></h3>
                    </a>
                </li>
                <li class="grid-item all web">
                    <a href="case-study/netflix/">
                        <img src="assets/img/portfolio/spoilerfoiler.jpg" alt="Breaking Bad Spoiler Foiler">
                        <h3>Netflix<span> | Breaking Bad Spoiler Foiler</span></h3>
                    </a>
                </li>
                <li class="grid-item all apps">
                    <a href="case-study/pgtips/cuppaclub2">
                        <img src="assets/img/portfolio/pgtipscuppaclub2.jpg" alt="PG tips Cuppa Club 2">
                        <h3>PG tips<span> | Cuppa Club 2</span></h3>
                    </a>
                </li>
                <li class="grid-item all web">
                    <a href="case-study/moet/">
                        <img src="assets/img/portfolio/moetMomente.jpg" alt="Moet Momente">
                        <h3>Moet &amp; Chandon<span> | #MoetMomente</span></h3>
                    </a>
                </li>
                <li class="grid-item all apps">
                    <a href="case-study/volvic/">
                        <img src="assets/img/portfolio/volvic-postcards.jpg" alt="Volvic, Touch of Tropical Postcards">
                        <h3>Volvic<span> | Touch of Tropical Postcards</span></h3>
                    </a>
                </li>
                <li class="grid-item all apps">
                    <a href="case-study/tesco/thesocialwine">
                        <img src="assets/img/portfolio/enotria-thesocialwine.jpg" alt="Enotria, The Social Wine">
                        <h3>Tesco<span> | The Social Wine</span></h3>
                    </a>
                </li>
                <li class="grid-item all apps">
                    <a href="case-study/pgtips/cuppaclub">
                        <img src="assets/img/portfolio/cuppaclub.jpg" alt="PG tips, Cuppa Club">
                        <h3>PG tips<span> | Cuppa Club</span></h3>
                    </a>
                </li>
                <li class="grid-item all apps">
                    <a href="case-study/kleenex/vote">
                        <img src="assets/img/portfolio/kleenex-vote.jpg" alt="Kleenex Vote">
                        <h3>Kleenex<span> | Vote</span></h3>
                    </a>
                </li>
                <li class="grid-item all apps">
                    <a href="case-study/bulmers/begin">
                        <img src="assets/img/portfolio/bulmers-begin.jpg" alt="Bulmers, Begin with a Bulmers">
                        <h3>Bulmers<span> | Begin with a Bulmers</span></h3>
                    </a>
                </li>
                <li class="grid-item all apps">
                    <a href="case-study/kleenex/collection">
                        <img src="assets/img/portfolio/kleenex-collage.jpg" alt="Kleenex Collection">
                        <h3>Kleenex<span> | Collection</span></h3>
                    </a>
                </li>
                <li class="grid-item all web">
                    <a href="case-study/redbull/">
                        <img src="assets/img/portfolio/redbull.jpg" alt="Redbull Our Editions">
                        <h3>Redbull<span> | Editions</span></h3>
                    </a>
                </li>
                <li class="grid-item all apps">
                    <a href="case-study/jaguar/jaguar-desire">
                        <img src="assets/img/portfolio/jaguar_calendar.jpg" alt="Jaguar Desire Calendar">
                        <h3>Jaguar<span> | Desire Calendar (FB App.)</span></h3>
                    </a>
                </li>
                <li class="grid-item all apps">
                    <a href="case-study/tiger">
                        <img src="assets/img/portfolio/tiger.jpg" alt="Tiger Beer Zodia Pairs">
                        <h3>Tiger Beer<span> | Zodia Pairs (FB App.)</span></h3>
                    </a>
                </li>
                <li class="grid-item all apps">
                    <a href="case-study/evian">
                        <img src="assets/img/portfolio/evian.jpg" alt="Live young this January this January with Evian">
                        <h3>Evian<span> | Live young January (FB App.)</span></h3>
                    </a>
                </li>
                <li class="grid-item all apps">
                    <a href="case-study/lenovo">
                        <img src="assets/img/portfolio/lenovo.jpg" alt="Lenovo The Year of the Do">
                        <h3>Lenovo<span> | The Year of Do (FB App.)</span></h3>
                    </a>
                </li>
                <li class="grid-item all apps">
                    <a href="case-study/pgtips">
                        <img src="assets/img/portfolio/pgTips.jpg" alt="PG Tips Warm up Britain">
                        <h3>PG Tips<span> | Warm up Britain (FB App.)</span></h3>
                    </a>
                </li>
                <li class="grid-item all apps">
                    <a href="case-study/kleenex">
                        <img src="assets/img/portfolio/kleenex.jpg" alt="Kleenex Sparkle">
                        <h3>Kleenex<span> | Xmas Sparkle Comp. (FB App.)</span></h3>
                    </a>
                </li>
                <li class="grid-item all apps">
                    <a href="case-study/jaguar/jaguar_ftype">
                        <img src="assets/img/portfolio/jaguar_map.jpg" alt="F-TYPE Sketch">
                        <h3>Jaguar<span> | F-TYPE Sketch (FB App.)</span></h3>
                    </a>
                </li>
                <li class="grid-item all apps">
                    <a href="case-study/jaguar/jaguar_cricket">
                        <img src="assets/img/portfolio/jaguar_cricket.jpg" alt="Jaguar Cricket India">
                        <h3>Jaguar<span> | Jaguar Cricket India (FB App.)</span></h3>
                    </a>
                </li>
                <li class="grid-item grid-item all apps">
                    <a href="case-study/tesco/tescoWines">
                        <img src="assets/img/portfolio/tescoWines.jpg" alt="Tesco Live Christmas Wine Tasting and Q &amp; A">
                        <h3>Tesco<span> | Live Xmas Wine Tasting</span></h3>
                    </a>
                </li>
                <li class="grid-item all apps">
                    <a href="case-study/bulmers">
                        <img src="assets/img/portfolio/bulmers.jpg" alt="Bulmers, New Blends">
                        <h3>Bulmers<span> | New Blends (FB App.)</span></h3>
                    </a>
                </li>
                <li class="grid-item all web">
                    <a href="case-study/london2012/supportyourteam">
                        <img src="assets/img/portfolio/supportyourteam.jpg" alt="London 2012 Support your Team">
                        <h3>London 2012 Olympics<span> | Support your Team</span></h3>
                    </a>
                </li>
                <li class="grid-item all web">
                    <a href="case-study/london2012/pulse">
                        <img src="assets/img/portfolio/pulse.jpg" alt="London 2012 Pulse">
                        <h3>London 2012 Olympics<span> | Pulse</span></h3>
                    </a>
                </li>
                <li class="grid-item all web">
                    <a href="case-study/london2012/dashboard">
                        <img src="assets/img/portfolio/dashboard.jpg" alt="London 2012 Social Media Dashboard">
                        <h3>London 2012 Olympics<span> | SM Dashboard</span></h3>
                    </a>
                </li>
                <li class="grid-item all apps">
                    <a href="case-study/uefa/">
                        <img src="assets/img/portfolio/uefa.jpg" alt="Sheba UK">
                        <h3>UEFA Euro 2012<span> | Goal (FB App.)</span></h3>
                    </a>
                </li>
                <li class="grid-item all web">
                    <a href="case-study/sheba/">
                        <img src="assets/img/portfolio/sheba.jpg" alt="Sheba UK">
                        <h3>Sheba UK<span> | Follow your Passion</span></h3>
                    </a>
                </li>
                <li class="grid-item all web">
                    <a href="case-study/anglo-american/">
                        <img src="assets/img/portfolio/anglo-american.jpg" alt="Anglo American, Get the full story">
                        <h3>Anglo American <span> | Get the full story</span></h3>
                    </a>
                </li>
                <li class="grid-item all web">
                    <a href="case-study/honda/honda-dreamfactory">
                        <img src="assets/img/portfolio/honda-dreamfactory.jpg" alt="Honda Dream Factory">
                        <h3>Honda UK <span> | Honda Dream Factory</span></h3>
                    </a>
                </li>
                <li class="grid-item all web">
                    <a href="case-study/honda/honda-hub.php">
                        <img src="assets/img/portfolio/honda-hub.jpg" alt="Honda Hub">
                        <h3>Honda UK <span> | Honda Hub</span></h3>
                    </a>
                </li>
                <li class="grid-item all web">
                    <a href="case-study/harry-potter-part-2/">
                        <img src="assets/img/portfolio/harrypotter-part2.jpg" alt="Harry Potter Part-2">
                        <h3>EA <span> | Harry Potter Deathly Hallows Part 2</span></h3>
                    </a>
                </li>
                <li class="grid-item all web">
                    <a href="case-study/mycallaway/">
                        <img src="assets/img/portfolio/myCallaway.jpg" alt="MyCallaway">
                        <h3>Callaway <span> | MyCallaway.eu</span></h3>
                    </a>
                </li>
                <li class="grid-item all web">
                    <a href="case-study/honda/test-drive-prototype">
                        <img src="assets/img/portfolio/test-drive-prototype.jpg" alt="Bridging the Gap">
                        <h3>Honda UK <span> | Book a Test Drive Prototype</span></h3>
                    </a>
                </li>
                <li class="grid-item all web">
                    <a href="case-study/bridging-the-gap/">
                        <img src="assets/img/portfolio/bridging-the-gap.jpg" alt="Bridging the Gap">
                        <h3>Olympics London 2012 <span> | Bridging the gap</span></h3>
                    </a>
                </li>
                <li class="grid-item all web">
                    <a href="case-study/london2012/">
                        <img src="assets/img/portfolio/london2012.jpg" alt="London 2012 - Young Leaders">
                        <h3>Olympics London 2012 <span> | Young Leaders</span></h3>
                    </a>
                </li>
                <li class="grid-item all web">
                    <a href="case-study/honda/">
                        <img src="assets/img/portfolio/honda-jazz.jpg" alt="Honda Jazz">
                        <h3>Honda UK <span> | Honda Jazz, Facebook dev.</span></h3>
                    </a>
                </li>
                <li class="grid-item all web">
                    <a href="case-study/harry-potter-part-1/">
                        <img src="assets/img/portfolio/harrypotter-part1.jpg" alt="Harry Potter Part-1">
                        <h3>EA <span> | Harry Potter Deathly Hallows Part 1</span></h3>
                    </a>
                </li>
                <li class="grid-item grid-item all web">
                    <a href="case-study/etautz/">
                        <img src="assets/img/portfolio/etautz.jpg" alt="E.Tautz">
                        <h3>E.TAUTZ <span> | Fashion</span></h3>
                    </a>
                </li>
                <li class="grid-item all web">
                    <a href="case-study/honda/made-in-britain">
                        <img src="assets/img/portfolio/honda-made-in-britain.jpg" alt="Honda Made in Britain">
                        <h3>Honda UK <span> | Made in Britain, Facebook dev.</span></h3>
                    </a>
                </li>
                <li class="grid-item all web">
                    <a href="case-study/collective-blog/">
                        <img src="assets/img/portfolio/collective-blog.jpg" alt="Collective Internal Blog">
                        <h3>Collective London<span> | Internal Blog</span></h3>
                    </a>
                </li>
                <li class="grid-item all web freelance">
                    <a href="case-study/pringles/">
                        <img src="assets/img/portfolio/pringles.jpg" alt="Pringle Help the Oversharers">
                        <h3>Pringles <span> | Help the oversharers</span></h3>
                    </a>
                </li>
                <li class="grid-item all web freelance">
                    <a href="case-study/cadbury/">
                        <img src="assets/img/portfolio/cadbury-cakes.jpg" alt="Cadbury Cakes">
                        <h3>Cadbury <span> | Premiere foods</span></h3>
                    </a>
                </li>
                <li class="grid-item all web freelance">
                    <a href="case-study/kpmg/">
                        <img src="assets/img/portfolio/kpmg.jpg" alt="KPMG &amp; Burberry">
                        <h3>KPMG &amp; Burberry</h3>
                    </a>
                </li>
                <li class="grid-item all web freelance">
                    <a href="case-study/nokia/">
                        <img src="assets/img/portfolio/nokia.jpg" alt="Nokia">
                        <h3>Nokia <span> | Outdoor Series, Email Newsletter</span></h3>
                    </a>
                </li>
                <li class="grid-item all web freelance">
                    <a href="case-study/range-rover/">
                        <img src="assets/img/portfolio/landRover.jpg" alt="Land Rover">
                        <h3>Range Rover <span> | Facebook Page</span></h3>
                    </a>
                </li>
                <li class="grid-item all web freelance">
                    <a href="case-study/ford/">
                        <img src="assets/img/portfolio/fordEmail.jpg" alt="Ford">
                        <h3>Ford <span> | Email Newsletter</span></h3>
                    </a>
                </li>
                <li class="grid-item all web freelance">
                    <a href="case-study/bbc-6music">
                        <img src="assets/img/portfolio/BBC6music.jpg" alt="BBC 6 Music">
                        <h3>BBC <span> | 6 Music</span></h3>
                    </a>
                </li>
                <li class="grid-item all web freelance">
                    <a href="case-study/debenhams/">
                        <img src="assets/img/portfolio/debenhams.jpg" alt="Debenhams">
                        <h3>Debenhams <span> | Personal Finance</span></h3>
                    </a>
                </li>
                <li class="grid-item all web freelance">
                    <a href="case-study/edf-energy/">
                        <img src="assets/img/portfolio/edf-energy.jpg" alt="Edf Energy">
                        <h3>EDF Energy <span> | Email Newsletter</span></h3>
                    </a>
                </li>
                <li class="grid-item all video freelance">
                    <a href="case-study/jaguar/">
                        <img src="assets/img/portfolio/jaguar.jpg" alt="Jaguar">
                        <h3>Jaguar <span> | XK Car</span></h3>
                    </a>
                </li>
                <li class="grid-item all web">
                    <a href="case-study/playboy/">
                        <img src="assets/img/portfolio/playboyUK.jpg" alt="Playboy UK">
                        <h3>Playboy UK <span> | Playboy.co.uk</span></h3>
                    </a>
                </li>
                <li class="grid-item grid-item all web">
                    <a href="case-study/playboy/playboyU.php">
                        <img src="assets/img/portfolio/playboyU.jpg" alt="Playboy U">
                        <h3>Playboy U</h3>
                    </a>
                </li>
                <li class="grid-item all web">
                    <a href="case-study/playboy/playboyCorporate">
                        <img src="assets/img/portfolio/playboyCorp.jpg" alt="Playboy UK Corporate">
                        <h3>Playboy UK <span> | Playboy Corporate</span></h3>
                    </a>
                </li>
                <li class="grid-item all web">
                    <a href="case-study/playboy/thinking-is-sexy">
                        <img src="assets/img/portfolio/playboy-thinking-is-sexy.jpg" alt="Playboy Thinking is Sexy">
                        <h3>Playboy UK <span> | Thinking is Sexy</span></h3>
                    </a>
                </li>
                <li class="grid-item all web">
                    <a href="case-study/playboy/playboy-model-uk">
                        <img src="assets/img/portfolio/playboyModelUK.jpg" alt="Playboy Model UK">
                        <h3>Playboy UK <span> | Model UK</span></h3>
                    </a>
                </li>
                <li class="grid-item all web">
                    <a href="case-study/playboy/playboy-email">
                        <img src="assets/img/portfolio/playboy-thanks.jpg" alt="Playboy Thank you Email">
                        <h3>Playboy UK <span> | Email Newsletter</span></h3>
                    </a>
                </li>
                <li class="grid-item all graphics">
                    <a href="case-study/playboy/playboy-summer-rain">
                        <img src="assets/img/portfolio/playboyRain.jpg" alt="Playboy Rain">
                        <h3>Playboy UK <span> | Summer Rain 2008</span></h3>
                    </a>
                </li>
                <li class="grid-item all graphics">
                    <a href="case-study/harrods/">
                        <img src="assets/img/portfolio/guerlain-Kiss-Kiss.jpg" alt="Harrods Guerlain Kiss-Kiss">
                        <h3>Guerlain <span> | Kiss Kiss</span></h3>
                    </a>
                </li>
                <li class="grid-item all graphics">
                    <a href="case-study/harrods/">
                        <img src="assets/img/portfolio/armani.jpg" alt="Harrods Emporio Armani">
                        <h3>Harrods <span> | Emporio Armani Underwear</span></h3>
                    </a>
                </li>
                <li class="grid-item all graphics">
                    <a href="case-study/harrods/">
                        <img src="assets/img/portfolio/acquaDiParma.jpg" alt="Harrods Acqua Di Parma">
                        <h3>Harrods <span> | Acqua Di Parma</span></h3>
                    </a>
                </li>
                <li class="grid-item all graphics">
                    <a href="case-study/harrods/">
                        <img src="assets/img/portfolio/duChamp.jpg" alt="Harrods duChamp">
                        <h3>Harrods <span> | DuChamp</span></h3>
                    </a>
                </li>
                <li class="grid-item all graphics">
                    <a href="case-study/harrods/">
                        <img src="assets/img/portfolio/harrodsTies.jpg" alt="Harrods Shirts &amp; Ties">
                        <h3>Harrods Shirts &amp; Ties</h3>
                    </a>
                </li>
                <li class="grid-item all graphics">
                    <a href="case-study/harrods/harrods-email">
                        <img src="assets/img/portfolio/harrodsSaleEmail.jpg" alt="Harrods Sales Email Newsletter">
                        <h3>Harrods <span> | Sales Email Newsletter</span></h3>
                    </a>
                </li>
                <li class="grid-item all graphics">
                    <a href="case-study/tesco/">
                        <img src="assets/img/portfolio/tesco.jpg" alt="Tesco Personal Finance">
                        <h3>Tesco <span> | Personal Finance</span></h3>
                    </a>
                </li>
                <li class="grid-item all web freelance">
                    <a href="case-study/merchant">
                        <img src="assets/img/portfolio/merchant.jpg" alt="The Merchant adventurers' club">
                        <h3>The Merchant adventurers' club</h3>
                    </a>
                </li>
                <li class="grid-item all web freelance">
                    <a href="case-study/flh">
                        <img src="assets/img/portfolio/flh.jpg" alt="Future Life Happy">
                        <h3>Future Life Happy<span> | Interviews </span></h3>
                    </a>
                </li>
                <li class="grid-item all web freelance">
                    <a href="case-study/amberton/">
                        <img src="assets/img/portfolio/amberton.jpg" alt="Amberton Neumann">
                        <h3>Amberton Neuman<span> | Consultancy</span></h3>
                    </a>
                </li>
                <li class="grid-item all web freelance">
                    <a href="case-study/fashion-istical/">
                        <img src="assets/img/portfolio/fashionistical.jpg" alt="Fashion-istical">
                        <h3>Fashion-istical <span> | Fashion</span></h3>
                    </a>
                </li>
                <li class="grid-item all web freelance">
                    <a href="case-study/freelance-work/">
                        <img src="assets/img/portfolio/qube.jpg" alt="Qube MS">
                        <h3>Qube Managed Services Limited</h3>
                    </a>
                </li>
                <li class="grid-item all web freelance">
                    <a href="case-study/freelance-work/stratton-hesler.php">
                        <img src="assets/img/portfolio/hesler.jpg" alt="Hesler Group">
                        <h3>HR Tiling Ltd.</h3>
                    </a>
                </li>
                <li class="grid-item all video">
                    <a href="case-study/video-3d/">
                        <img src="assets/img/portfolio/3dHouse.jpg" alt="3D House Version-2">
                        <h3>3D Virtual House Prototype 2</h3>
                    </a>
                </li>
                <li class="grid-item all video">
                    <a href="case-study/video-3d/virtual-house-ver-1">
                        <img src="assets/img/portfolio/3dHouseOld.jpg" alt="3D House Version-1">
                        <h3>3D Virtual House Prototype 1</h3>
                    </a>
                </li>
                <li class="grid-item all video">
                    <a href="case-study/video-3d/archi-design">
                        <img src="assets/img/portfolio/3dArchiDesign.jpg" alt="3D Archi-Design">
                        <h3>3D Archi Design Commercial</h3>
                    </a>
                </li>
                <li class="grid-item all video">
                    <a href="case-study/video-3d/drumset-3d">
                        <img src="assets/img/portfolio/3D-drumkit.jpg" alt="3D Drumkit">
                        <h3>3D Drumkit</h3>
                    </a>
                </li>
                <li class="grid-item all video">
                    <a href="case-study/video-3d/stalker">
                        <img src="assets/img/portfolio/stalker-project.jpg" alt="Stalker CD-Rom">
                        <h3>Interactive CD-Rom, Stalker</h3>
                    </a>
                </li>
            </ul>
	</section>

    <footer>
        <div class="container">
            <div id="copyright">
                <img src="/assets/img/global/rohanchambers_logo.png" alt="Rohan Chambers" width="100" height="31" />
                <div><p>Website Designed and Developed by Rohan Chambers &copy;2016<br />
                Valid <a href="http://validator.w3.org/check?uri=referer">HTML 5</a> and <a href="http://jigsaw.w3.org/css-validator/">CSS 3</a> | <a href="/site-map">Site map</a> | <a href="/accessibility">Accessibility</a> | <a href="/contact">Contact</a></p></div>
                <a href="#" class="cta-lightbox-home"><img id="under-hood" src="/assets/img/icons/under_hood.png" alt="Under the Hood of RohanChambers.net" title="Under the Hood of RohanChambers.net"></a>
            </div>
        </div>
    </footer>
    <button id="back-to-top" class="buttonTopPulse"></button>
    <!-- Lightbox markup -->
    <div class="lightbox-bg"></div>
    <div class="lightbox-services">
        <div class="lightbox-panel">
            <div class="close"><a href="#">Close X</a></div>
            <div class="lightbox-content">
                <?php include("incl/inc-light-services.php"); ?>
            </div>
        </div>
    </div>
    <div class="lightbox-home">
        <div class="lightbox-panel">
            <div class="close"><a href="#">Close X</a></div>
            <div class="lightbox-content">
                <?php include("incl/inc-light-under-hood.php"); ?>
            </div>
        </div>
    </div><!-- End of Lightbox -->
    
    
    <script src="assets/js/compiled.min.js?20200116"></script>
    
    <!-- Start of StatCounter Code for Default Guide -->
    <script>
    var sc_project=2795365; 
    var sc_invisible=1; 
    var sc_security="dbf7ea22"; 
    var scJsHost = (("https:" == document.location.protocol) ?
    "https://secure." : "http://www.");
    document.write("<sc"+"ript type='text/javascript' src='" +
    scJsHost+
    "statcounter.com/counter/counter.js'></"+"script>");
    </script>
    <noscript><div class="statcounter"><a title="website
    statistics" href="http://statcounter.com/free-web-stats/"
    target="_blank"><img class="statcounter"
    src="//c.statcounter.com/2795365/0/dbf7ea22/1/" alt="website
    statistics"></a></div></noscript>
    <!-- End of StatCounter Code for Default Guide -->    
</body>
</html>