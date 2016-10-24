<?php
    $browserTitle = 'Rohan Chambers | London Freelance Front End Developer and Web Designer';
    $pageName = 'page-home';
    $activeHome = 'active'
?>
<?php include("incl/inc-header.php"); ?>

    <div class="container carousel">
        <div class="row">
            <div id="carousel" style="position: relative; top: 0px; left: 0px; width: 1024px; height: 420px; overflow: hidden;">
                <!-- Loading Screen -->
                <div id="loading" u="loading" style="position: absolute; top: 0px; left: 0px;">
                    <!-- your loading screen content here -->
                </div>
                <!-- Slides Container -->
                <div u="slides" style="cursor: move; position: absolute; overflow: hidden; left: 0px; top: 0px; width: 1024px; height: 420px;">
                    <?php include("incl/inc-carousel.php"); ?>
                </div><!-- End of slides -->
                <!-- Arrow Left -->
                <span u="arrowleft" class="jssora22l">
                </span>
                <!-- Arrow Right -->
                <span u="arrowright" class="jssora22r">
                </span>
            </div>
        </div>
    </div>

    <div class="container">
        <!-- About section -->
		<section id="about" class="row">
            <header>
                <h1>Welcome to the online portfolio of <br>Rohan Chambers</h1>
                <i class="fa intro-scroll-arrow fa-4x buttonPulse" aria-hidden="true"></i>
            </header>

			<article id="intro" class="col-5 element">
                <h1>Intro:</h1>
                <p>This <strong>website</strong> is primarily designed to be an online portfolio presence for <strong>Rohan Chambers</strong>, a <strong>Front-end Developer/Web Designer</strong> based in London, UK.
                I am currently working as a <strong>Social Media Technologist (Front end)</strong> for an agency called <strong>We Are Social</strong>. Prior to this I was working full time at <strong>Playboy UK</strong> for 3 years as a web developer and continue to freelance on an occasional basis.</p>
                <p>Some of the <strong>Technologies</strong> used on this site and other <strong>Projects</strong> I have done include <strong>XHTML, CSS</strong> complemented by some Javascript, Jquery, PHP and Wordpress.
                I am currently being exposed to <strong>HTML5 and CSS3</strong> for projects in the near future and have good knowledge of best practices in <strong>Accessibility</strong>, SEO and <strong>W3C standards</strong>.</p>
            </article>

            <article id="intro-skills" class="col-5-1 mob-2 element">
                <h2>My skills:</h2>
                <ul class="bullets">
                    <li>XHTML - HTML5 (Advanced level)</li>
                    <li>CSS (2 &amp; 3) (Advanced) level</li>
                    <li>Clean HTML Semantic Mark-up</li>
                    <li>Responsive web design</li>
                    <li>iPhone/iPad Mobile Websites</li>
                    <li>JavaScript/jQuery (Integration level)</li>
                    <li>PHP (Basic level)</li>
                    <li>Wordpress Theme Development</li>
                    <li>Coding to W3C Web Standards</li>
                    <li>Accessibility Standards</li>
                    <li>Cross Browser Compatibility</li>
                    <li>Search Engine Optimisation (SEO)</li>
                </ul>
                <a href="services" class="btn-global">Find out more<span></span></a>
            </article>

			<!-- Contact section -->
            <article id="intro-contact" class="col-5-1 mob-2 element">
                <h2>Contact:</h2>
                <p><a href="mailto:info@rohanchambers.net" class="block-link">info@rohanchambers.net</a></p>
                <h2>Recruit me:</h2>
                <ul class="bullets">
                    <li>Available for small-medium freelance projects in-house or remotely.</li>
                </ul>
                <div id="cv">
                    <h2 id="icon-underhood"><a class="cta-lightbox-home" title="Under the Hood of RohanChambers.net" href="#">Under the Hood:</a></h2>
                    <h2 id="icon-cv"><a href="assets/docs/RohanChambersCV.pdf" title="Rohan Chambers CV">Download CV:</a></h2>
                    <h2>Get a quote:</h2>
                    <p>Get a quote for your site or project by filling in a short questionnaire with your needs and I will get back to you asap.</p>
                    <a href="get-a-quote" class="btn-global">Get a quote</a>
                </div>
            </article>
		</section>

        <!-- What I do section -->
        <section id="what-i-do" class="row">
            <header>
                <h1>To see what I do<br> click below to find out more</h1>
            </header>

            <article id="web-design" class="col-4 element">
                <h2>Web Design</h2>
                <p>I can design websites for various types of business's always keeping in mind a look and feel aspect that will suit any particular type of company in order to reflect its name, image and product.</p>
                <a href="#"></a>
                <span class="btn-global">Find out more</span>
            </article>

            <article id="web-dev" class="col-4 element">
                <h2>Web Development</h2>
                <p>I can take on and develop all sizes of projects from personal to commercial websites with the use of the latest web technologies. Competitive prices and a professionally delivered product.</p>
                <a href="#"></a>
                <span class="btn-global">Find out more</span>
            </article>
            <article id="psd-html5" class="col-4 element">
                <h2>PSD to HTML5</h2>
                <p>I specialise in taking your designs/photoshop (PSD) file(s) and converting them into a clean cross-browser and cross-platform Xhtml/CSS web template or complete website.</p>
                <a href="#"></a>
                <span class="btn-global">Find out more</span>
            </article>
            <article id="social" class="col-4 element">
                <h2>Social Media builds</h2>
                <p>I can develop web pages for Facebook tabs using FBML to help promote your product or company as well as Youtube channel re-skins to fit your brands look and feel.</p>
                <a href="#"></a>
                <span class="btn-global">Find out more</span>
            </article>
        </section>

        <!-- Services section -->
        <section id="services" class="row">
            <header>
                <h1>Services</h1>
            </header>
            <article class="col-2 element">
                <p>All the projects that I have taken on have always been thoroughly scoped and planned out in order to meet crucial
                deadlines and satisfy client demands and timelines. Understanding that the multimedia industry is a very competitive
                market I always try to keep the price for my services as realistic and affordable as possible.</p>
                <p>If you would like to get a quote or some information regarding your project please feel free to <a href="contact" class="block-link">get in contact</a>
                or click on the button below and complete a requirements form that will send me your info and details regarding your project.
                <br /><span class="confidential">*All details will be kept strictly confidential.</span></p>
                <a href="get-a-quote" class="btn-global btn-spacer">Get a quote<span class="arrow"></span><span></span></a>

                <h2>How I manage a web design &amp; development project?</h2>
                <p>Please find out more in detail about the process of the way I manage a web development project in stages to its final completion.</p>
                <a href="#lightbox-content" class="btn-global cta-lightbox-services">Find out more<span class="arrow"></span><span></span></a>
            </article>

            <article class="col-2 element">
                <ul class="accordion-tabs-minimal">
                    <li class="tab-header-and-content">
                        <a href="#" class="tab-link is-active">Web Development</a>
                        <div class="tab-content">
                            <h2>Web Design &amp; Development</h2>
                            <p>I can design &amp; develop websites for <strong>various</strong> types of businesses always keeping in mind a <strong>look and feel</strong> aspect that will
                            suit any particular type of company in order to <strong>reflect</strong> its name, image and product.</p>
                            <p>From <strong>corporate</strong> to personal looking websites my designs are always started from <strong>scratch</strong> and worked on through to the end. Rohan says: "There are no design templates
                            that I use and reuse for other projects" I keep your website as original and <strong>simplistic</strong> in its usability as possible in
                            order to give your <strong>viewers</strong> a satisfied user experience.</p>
                            <h2>Standards &amp; Guidelines</h2>
                            <p>All websites created are tested thoroughly with all the latest versions of todays browsers. All the code in all websites I develop are validated by the World Wide Web Consortium.</p>
                            <ul class="bullets">
                                <li>Mock ups and initial design in Photoshop</li>
                                <li>Hand-coded web development</li>
                                <li>Cross platform (X)HTML/CSS web-sites</li>
                                <li>Accessibility &amp; W3C Compliant builds</li>
                                <li>Branding &amp; logo design</li>
                                <li>HTML email newsletter builds</li>
                                <li>Search engine optimisation</li>
                                <li>Web Blog integration</li>
                                <li>Social Media: Facebook Page development</li>
                                <li>Social Media:YouTube re-skins for personalised channels</li>
                                <li>Design of Web sites, Landing pages, Email Newsletters, flyers</li>
                            </ul>
                        </div>
                    </li>
                    <li class="tab-header-and-content">
                        <a href="#" class="tab-link">PSD to HTML5</a>
                        <div class="tab-content">
                            <h2>PSD to XHTML/CSS Conversion</h2>
                            <p>Hand-coded, cross browser/platform compatible (X)HTML/CSS web templates.</p>
                            <p>Specialise in <strong>converting</strong> your designs into <strong>high quality</strong>, hand-coded, cross browser and cross platform <strong>compatible</strong> web templates.</p>
                            <ul class="bullets">
                                <li>Pixel-perfect PSD to (X)HTML and CSS conversion. W3C Standards Compliant.</li>
                                <li>Cross browser and cross platform compatibility (Works perfectly in all browsers and operating systems)</li>
                                <li>Search engine optimised</li>
                                <li>Usability and accessibility in mind when hand-coding all web sites</li>
                                <li>Optimised for fast loading</li>
                            </ul>
                            <p><strong>"Send your design, I do the coding"</strong></p>
                        </div>
                    </li>
                    <li class="tab-header-and-content">
                        <a href="#" class="tab-link">3D &amp; Video</a>
                        <div class="tab-content">
                            <h2>3D Animation</h2>
                            <p>3D modelling, especially for architecture, is another area I work in that includes modelling and animation for houses and buildings. He can however model, texturize and animate almost anything from small details to larger shapes and objects. There are a few examples under the <a href="portfolio" class="block-link">3D Work</a> section of this portfolio. The 3D software packages that Rohan uses are mainly Cinema 4D and Maya.</p>
                            <h2>Video</h2>
                            <p>Yet another service that I provide is video editing for small-scale projects using software such as Final Cut Pro and After Affects. Some of my videos, editing skills and work are implemented in his 3D  movies and can be previewed in the <a href="portfolio" class="block-link">Video</a> section.</p>
                            <ul class="bullets">
                                <li>Video integration &amp; encoding</li>
                                <li>Video editing for small-medium scale projects</li>
                                <li>DVD Authoring: DVD menu design</li>
                                <li>3D Modelling and Animation</li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </article>

        </section><!-- End of section services -->

        <section id="skills" class="row">
            <header>
                <h1>Skills</h1>
            </header>
            <div class="row">
                <article class="col-2">
                    <h2>Languages</h2>
                    <ul class="bullets">
                        <li>XHTML - HTML5 (Advanced)</li>
                        <li>CSS (2 &amp; 3) (Advanced)</li>
                        <li>Responsive Web Design, iPhone/iPad</li>
                        <li>JavaScript/jQuery Library (<a href="dev" class="block-link">View examples</a>)</li>
                        <li>XHTML - HTML5 (Advanced)</li>
                        <li>Wordpress theme creation</li>
                        <li>PHP (Basic level)</li>
                    </ul>
                </article>
                <article class="col-2">
                    <h2>Software</h2>
                    <ul class="bullets">
                        <li>Sublime / Coda (IDE)</li>
                        <li>Git Hub, Source Tree</li>
                        <li>SVN Turtoise / Synchro SVN(MacOSX)</li>
                        <li>Adobe Suite</li>
                        <li>Campaign monitor (Email distribution service)</li>
                    </ul>
                </article>
            </div><!-- End of row -->

            <div class="row">
                <article class="col-4">
                    <h2>Web standards</h2>
                    <ul class="bullets">
                        <li>XHTML - HTML5 (Advanced)</li>
                        <li>CSS (2 &amp; 3) (Advanced)</li>
                        <li>Responsive Web Design, iPhone/iPad</li>
                        <li>JavaScript/jQuery Library (<a href="dev" class="block-link">View examples</a>)</li>
                        <li>XHTML - HTML5 (Advanced)</li>
                        <li>Wordpress theme creation</li>
                        <li>PHP (Basic level)</li>
                    </ul>
                </article>
                <article id="software" class="col-4">
                    <h2>Perfomance</h2>
                    <ul class="bullets">
                        <li>Sublime / Coda (IDE)</li>
                        <li>Git Hub, Source Tree</li>
                        <li>SVN Turtoise / Synchro SVN(MacOSX)</li>
                        <li>Adobe Suite</li>
                        <li>Campaign monitor (Email distribution service)</li>
                    </ul>
                </article>
                <article class="col-4">
                    <h2>Planning</h2>
                    <ul class="bullets">
                        <li>Clean HTML5 semantic mark-up</li>
                        <li>Coding to W3C web standards</li>
                        <li>Accessibility to WAI standards</li>
                        <li>Cross browser compatibility</li>
                        (Firefox, Safari, Chrome, Opera, IE6-9)
                        <li>Graceful degradation</li>
                        <li>Progressive enhancement</li>
                    </ul>
                </article>
                <article class="col-4">
                    <h2>Management</h2>
                    <ul class="bullets">
                        <li>XHTML - HTML5 (Advanced)</li>
                        <li>CSS (2 &amp; 3) (Advanced)</li>
                        <li>Responsive Web Design, iPhone/iPad</li>
                        <li>JavaScript/jQuery Library (<a href="dev" class="block-link">View examples</a>)</li>
                        <li>XHTML - HTML5 (Advanced)</li>
                        <li>Wordpress theme creation</li>
                        <li>PHP (Basic level)</li>
                    </ul>
                </article>
            </div><!-- End of row -->
        </section>

        <section id="clients" class="row">
            <header>
                <h1>Clients</h1>
                <p>Some of the clients and brands I have worked on, whist working at different <br>digital agencies.</p>
            </header>
            <div class="row">
                <div class="client">
                    <img class="bottom" src="assets/img/clients/hover/heineken.png" alt="Heineken">
                    <img class="top" src="assets/img/clients/heineken.png" alt="Heineken">
                    <img src="assets/img/clients/transparent.png" alt="">
                </div>
                <div class="client">
                    <img class="bottom" src="assets/img/clients/hover/redbull.png" alt="Redbull">
                    <img class="top" src="assets/img/clients/redbull.png" alt="Redbull">
                    <img src="assets/img/clients/transparent.png" alt="">
                </div>
                <div class="client">
                    <img class="bottom" src="assets/img/clients/hover/jaguar.png" alt="heinz">
                    <img class="top" src="assets/img/clients/jaguar.png" alt="Jaguar">
                    <img src="assets/img/clients/transparent.png" alt="">
                </div>

                <div class="client">
                    <img class="bottom" src="assets/img/clients/hover/heinz.png" alt="heinz">
                    <img class="top" src="assets/img/clients/heinz.png" alt="heinz">
                    <img src="assets/img/clients/transparent.png" alt="">
                </div>
                <div class="client">
                    <img class="bottom" src="assets/img/clients/hover/tesco.png" alt="tesco">
                    <img class="top" src="assets/img/clients/tesco.png" alt="tesco">
                    <img src="assets/img/clients/transparent.png" alt="">
                </div>
                <div class="client">
                    <img class="bottom" src="assets/img/clients/hover/honda.png" alt="honda">
                    <img class="top" src="assets/img/clients/honda.png" alt="honda">
                    <img src="assets/img/clients/transparent.png" alt="">
                </div>
                <div class="client">
                    <img class="bottom" src="assets/img/clients/hover/harrods.png" alt="harrods">
                    <img class="top" src="assets/img/clients/harrods.png" alt="harrods">
                    <img src="assets/img/clients/transparent.png" alt="">
                </div>

                <div class="client">
                    <img class="bottom" src="assets/img/clients/hover/bulmers_white.png" alt="Bulmers">
                    <img class="top" src="assets/img/clients/bulmers.png" alt="Bulmers">
                    <img src="assets/img/clients/transparent.png" alt="">
                </div>
                <div class="client">
                    <img class="bottom" src="assets/img/clients/hover/playboy.png" alt="Playboy UK">
                    <img class="top" src="assets/img/clients/playboy.png" alt="Playboy UK">
                    <img src="assets/img/clients/transparent.png" alt="">
                </div>
                <div class="client">
                    <img class="bottom" src="assets/img/clients/hover/ea.png" alt="EA">
                    <img class="top" src="assets/img/clients/ea.png" alt="EA">
                    <img src="assets/img/clients/transparent.png" alt="">
                </div>

                <div class="client">
                    <img class="bottom" src="assets/img/clients/hover/evian.png" alt="Evian">
                    <img class="top" src="assets/img/clients/evian.png" alt="Evian">
                    <img src="assets/img/clients/transparent.png" alt="">
                </div>
                <div class="client">
                    <img class="bottom" src="assets/img/clients/hover/kleenex.png" alt="Kleenex">
                    <img class="top" src="assets/img/clients/kleenex.png" alt="Kleenex">
                    <img src="assets/img/clients/transparent.png" alt="">
                </div>
                <div class="client">
                    <img class="bottom" src="assets/img/clients/hover/volvic.png" alt="Volvic">
                    <img class="top" src="assets/img/clients/volvic.png" alt="Volvic">
                    <img src="assets/img/clients/transparent.png" alt="">
                </div>
                <div class="client">
                    <img class="bottom" src="assets/img/clients/hover/harrods.png" alt="Harrods">
                    <img class="top" src="assets/img/clients/harrods.png" alt="Harrods">
                    <img src="assets/img/clients/transparent.png" alt="">
                </div>
                <div class="client">
                    <img class="bottom" src="assets/img/clients/hover/phoneResq.png" alt="Phone ResQ">
                    <img class="top" src="assets/img/clients/phoneResq.png" alt="Phone ResQ">
                    <img src="assets/img/clients/transparent.png" alt="">
                </div>
                <div class="client">
                    <img class="bottom" src="assets/img/clients/hover/perfectPeaksBrewsLight.png" alt="Perfect Peaks Brews">
                    <img class="top" src="assets/img/clients/perfectPeaksBrewsLight.png" alt="Perfect Peaks Brews">
                    <img src="assets/img/clients/transparent.png" alt="">
                </div>
            </div>
        </section>

        <section id="contact" class="row">
            <header>
                <h1>Contact</h1>
            </header>
            <article class="col-3">
                <p>North London, Islington, UK.</p>
                <ul id="contact-list" class="">
                    <li><a href="mailto:info@rohanchambers.net"><img src="assets/img/icons/contact/mail.png" alt="E-mail" title="E-mail" width="24" height="24" />info@rohanchambers.net</a></li>
                    <li><img src="assets/img/icons/contact/phone.png" alt="Phone" title="Phone" width="24" height="24" /> +44 (0) 79 170 44 052</li>
                    <li><a href="http://www.linkedin.com/in/rohanchambers" class="targetBlank"><img src="assets/img/icons/contact/linkedin_icon.png" alt="LinkedIn" title="LinkedIn" width="24" height="24" />LinkedIn</a></li>
                    <li><a href="mailto:info@rohanchambers.net"><img src="assets/img/icons/contact/skype_icon.png" alt="Skype" title="Skype" width="24" height="24" />Skype</a> (On request only)</li>
                </ul>
            </article>
            <article class="col-3">
                <div id="get-a-quote">
                    <h2>Get a quote</h2>
                    <p>If you wish to get a quote for one of your projects please click the button below and fill in the questionnaire or email me directly.</p>
                    <a href="get-a-quote" class="btn-global btn-spacer">Get a quote<span class="arrow"></span><span></span></a>
                </div>
            </article>
        </section>
	</div><!-- End of container -->
    <?php include("incl/inc-footer.php"); ?>