<?php include 'inc/dbh.inc.php'; ?>
<!DOCTYPE html>
<html lang="en" prefix="og: https://ogp.me/ns#">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=320, height=device-height, target-densitydpi=medium-dpi" />

    <meta name="description"
        content="Celswap is an automated market maker decentralized exchange, aiming to provide a seamless way to swap between ERC-20 tokens via CEL">
    <meta name="keywords" content="CelSwap, Celsius, CEL, Celsians, Celsius Network, Cryptocurrency, ERC20, Ethereum">
    <meta name="robots" content="noindex" />
    <meta name="msapplication-config" content="assets/images/favicon/browserconfig.xml">


    <!-- OpenGraph Protocol -->
    <meta property="og:title" content="CelSwap">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://celswap.org/">
    <meta property="og:image" content="assets/images/celswap-open-graph.png">
    <meta property="og:description"
        content="Celswap is an automated market maker decentralized exchange, aiming to provide a seamless way to swap between ERC-20 tokens via CEL">


    <title>CelSwap</title>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-298MMHHR74"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-298MMHHR74');
</script>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/burger.css">
    <link rel="stylesheet" href="assets/css/carousel.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Animation on scroll - AOS - Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon/favicon.ico">
    <link rel="icon" sizes="16x16" href="assets/images/favicon/favicon-16x16.png">
    <link rel="icon" sizes="32x32" href="assets/images/favicon/favicon-32x32.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicon/apple-touch-icon.png">
    <link rel="manifest" href="assets/images/favicon/site.webmanifest">


    <script>
        // Ajax preventing default form PHP execution
        $(document).ready(function () {
            $(".vote-form").submit(function (event) {
                event.preventDefault();
                var voteBtn = $(".input-vote-btn").val();

                $(".num-votes").load("inc/vote-form.inc.php", {
                    voteBtn: voteBtn
                });
            });
        });
    </script>
</head>

<body>
    <header data-aos="fade-right" data-aos-duration="1000" data-aos-easing="linear">
        <div class="celswap-logo celswap-logo-mobile"></div>
        <nav>
            <ul>
                <li><a class="underline" href="#about">About</a></li>
                <li>
                    <div class="bullet"></div>
                </li>
                <li><a class="underline" href="#what-is">How it works</a></li>
                <li>
                    <div class="bullet"></div>
                </li>
                <li><a class="underline" href="#developers">Developers</a></li>
                <li>
                    <div class="bullet"></div>
                </li>
                <li><a class="underline" href="#vote">Community</a></li>
                <li><button class="header-btn" onclick="window.location.href = 'https://app.celswap.org/';">Connect
                        Wallet</button></li>
            </ul>
        </nav>

        <!-- Hamburger (burger) for the navigation beyond 1024px - Mobile and Tablet -->
        <div style="display: none;" id="hamburger">
            <div class="burger burger-squeeze">
                <div class="burger-lines"></div>
            </div>
        </div>
    </header>

    <!-- Mobile Navigation -- toggles on hamburger click -->
    <div class="nav-mobile-modal">
        <nav>
            <ul>
                <li><a href="#about">About</a></li>
                <li>
                    <div class="bullet"></div>
                </li>
                <li><a href="#what-is">How it works</a></li>
                <li>
                    <div class="bullet"></div>
                </li>
                <li><a href="#developers">Developers</a></li>
                <li>
                    <div class="bullet"></div>
                </li>
                <li><a href="#vote">Community</a></li>
                <li><button class="header-btn" onclick="window.location.href = 'https://app.celswap.org/';">Connect
                        Wallet</button></li>
            </ul>
        </nav>
    </div>

    <div id="hero" data-aos="fade-right" data-aos-duration="1000" data-aos-easing="linear">
        <div class="bubble1"></div>
        <div class="bubble2"></div>
        <div class="bubble3"></div>

        <div class="heading-section">
            <h1>Seamless way
                <br>
                <span>to swap CEL</span></h1>

            <h4>One of the fastest-growing tokens on the market</h4>

            <button onclick="window.location.href = 'https://app.celswap.org/';" class="btn"><span>Launch
                    CelSwap</span></button>

            <div class="cel-market-price">
                <p>CEL Market Price</p>
                <h3 id="cel-price"></h3>
                <span id="cel-price-change"></span>
            </div>
        </div>
    </div>

    <div id="availability">
        <div class="available">
            <h1 data-aos="fade-right" data-aos-duration="1000">Available for<br><span>Metamask</span></h1>
            <img src="assets/images/logo-metamask-fox.svg" alt="Metamask Fox" data-aos="fade-in"
                data-aos-duration="1000">
            <button onclick="window.location.href = 'https://app.celswap.org/';" class="btn metamask-btn"
                data-aos="fade-up" data-aos-duration="700">Connect Wallet</button>
        </div>
        <div class="coming-soon">
            <h1 data-aos="fade-left" data-aos-duration="1000">Coming soon for<br><span>Celsius Wallet</span></h1>
            <img src="assets/images/logo-cel-standalone.svg" alt="Celsius Wallet" data-aos="fade-in"
                data-aos-duration="1000">
            <h4 data-aos="fade-in" data-aos-duration="500">(as well as <a
                    href="https://wallet.coinbase.com/">Coinbase</a>, <a href="https://fortmatic.com/">Wallet
                    Connect</a>, <a href="https://walletconnect.org/">Fortmatic</a>...)</h4>
        </div>
    </div>

    <div id="about">
        <span class="about-typography" data-aos="fade-left" data-aos-duration="3000">about</span>

        <h1 data-aos="fade-right" data-aos-duration="1000">By the community
            <br>
            <span>for the community</span>
        </h1>
        <h3 data-aos="fade-right" data-aos-duration="1000">Swap coins via CEL coin
            <br>
            pairs trustlessly</h3>
        <p data-aos="fade-right" data-aos-duration="1000">Cel swap is the community effort to make swapping CEL tokens
            easy for everyone. Increasing your loyalty level
            and getting the best reward rates has never been this easy.</p>
    </div>

    <div id="what-is">
        <div class="outside-small-bubble" data-aos="zoom-in" data-aos-duration="500"></div>
        <div class="medium-bubble" data-aos="zoom-in" data-aos-duration="1500"></div>
        <div class="what-is-content">
            <div class="small-bubble" data-aos="zoom-in" data-aos-duration="1500"></div>
            <div class="large-bubble" data-aos="zoom-in" data-aos-duration="2000"></div>
            <div class="big-bubble" data-aos="zoom-in" data-aos-duration="1000"></div>
            <h1 data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000">What is
                <br>
                <span>CelSwap?</span>
            </h1>
            <p data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000">There is no order book or a centralized
                entity determining
                the price of assets. Instead CelSwap
                <strong>utilizes
                    smart contracts to create liquidity pools and enable swapping tokens.</strong>
                <br><br>
                Each pool is defined by a smart
                contract that includes a few functions to enable swapping tokens, adding liquidity and more.</p>
        </div>
    </div>

    <div id="prices">
        <div class="prices-container">
            <div class="prices-heading">
                <h1 data-aos="fade-up" data-aos-duration="1000">How are prices
                    <br>
                    <span>determined?</span>
                </h1>
                <p data-aos="fade-up" data-aos-duration="1000">Liquidity pools are routed through CEL tokens meaning one
                    of the coins in the pair has to be CEL. In
                    essence each pool is a simple function x*y=k. The function maintains the price in which the trade
                    can
                    happen.</p>
            </div>
            <div class="prices-function" data-aos="fade-up" data-aos-duration="1000">
                <span>x*y=k</span>
            </div>
        </div>

        <div class="splide splide-container splide-1">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <div class="slide slide1">
                            <h3>In the future anyone will be able to add <span>liquidity</span></h3>

                            <div class="icon1"></div>
                            <div class="circle"></div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="slide slide2">
                            <h3>Prices are determined by <span>smart contracts</span></h3>

                            <div class="icon2"></div>
                            <div class="circle"></div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="slide slide3">
                            <h3>Connect your <span>wallet</span></h3>

                            <div class="icon3"></div>
                            <div class="circle"></div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="slide slide4">
                            <h3>Swap coins <span>trustlessly</span></h3>

                            <div class="icon4"></div>
                            <div class="circle"></div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="slide slide5">
                            <h3>In the future you will be <span>rewarded</span> for providing liquidity</h3>

                            <div class="icon5"></div>
                            <div class="circle"></div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="slide slide6">
                            <h3>Contribute to the <span>community</span></h3>

                            <div class="icon6"></div>
                            <div class="circle"></div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div id="why-build">
        <div class="upper-container">
            <div class="upper-heading-box">
                <h1>Why did we <br><span>build CelSwap?</span></h1>

                <p>Because, in the world of BTC and ETH, we still believe that CEL token can be base currency and this is one of forms we want to validate that assumption.</p>
            </div>
            <div class="upper-image-box"></div>
        </div>
        <div class="down-container">
            <div class="down-heading-box">
                <h3>If you choose to earn in CEL tokens, inside of Celsius App, the rates increase up to 30% based on the percentage of
                                        CEL tokens in your wallet</h3>
                <p>This means that suddenly there can be people who have more CEL tokens than they want, simply because they can earn hire. CelSwap is here to absorb those tokens, either by having them in LP or being swapped for some other token and vice versa. </p>
            </div>
            <div class="down-image-box"></div>
        </div>
        <div class="circles-container">
            <div class="small-circle"></div>
            <div class="small-circle circle-position2"></div>
            <div class="medium-circle"></div>
            <div class="large-circle"></div>
            <div class="transition-circle">
                <h1>CelSwap is the community effort to make CEL more accessible to the community</h1>
            </div>
        </div>
    </div>

    <div id="testimonials">

        <div class="scroll-area">
            <div class="wrapper">
                <div class="testimonial">
                    <div class="quote">
                        <p>Why all this???</p>
                    </div>
                    <div class="person">
                        <img src="assets/images/testimonials-profile.jpg" alt="W (Rathfield)">

                        <div class="details">
                            <strong>Guy filling LP form</strong>
                        </div>
                    </div>
                </div>
                <div class="testimonial">
                    <div class="quote">
                        <p>thank u</p>
                    </div>
                    <div class="person person-petars">
                        <img src="assets/images/testimonials-profile.jpg" alt="Shan McDonell">

                        <div class="details">
                            <strong>Other guy filling LP form</strong>
                        </div>
                    </div>
                </div>
                <div class="testimonial">
                    <div class="quote">
                        <p>I also have Celsius wallet you can verify through my email address. Is the metamask address the correct address you are requesting. This is all very new to me. Thank you</p>
                        <p><i><br>*we don't have because we are CelSwapp AMM, not Celsius app...</i></p>
                    </div>

                    <div class="person">
                        <img src="assets/images/testimonials-profile.jpg" alt="Capitao Nascimento">

                        <div class="details">
                            <strong>Wannabe LP</strong>
                        </div>
                    </div>
                </div>
                <div class="testimonial current">
                    <div class="quote">
                        <p>I am very committed in the long term to make this project sustainable.</p>
                    </div>
                    <div class="person">
                        <img src="assets/images/testimonials-profile.jpg" alt="Web Trading">

                        <div class="details">
                            <strong>Also a guy from form</strong>
                        </div>
                    </div>
                </div>
                <div class="testimonial">
                    <div class="quote">
                        <p>Great initiative. </p>
                    </div>
                    <div class="person">
                        <img src="assets/images/testimonials-profile.jpg" alt="Jimmy Z">

                        <div class="details">
                            <strong>Jean</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: TESTIMONIALS -->

    </div>

    <div id="developers">
        <span class="developers-typography" data-aos="fade-right" data-aos-duration="3000">developers</span>
        <h1 data-aos="fade-right" data-aos-duration="1000">Celsians
            <br>
            <span>to Celsians</span>
        </h1>
        <h3 data-aos="fade-right" data-aos-duration="1000">We are a small team of Celsians dedicated to giving back to
            the community!</h3>
        <p data-aos="fade-right" data-aos-duration="1000">We are always looking for more like-minded developers to give
            back to the community. Join us and help give
            back at <span><a href="mailto:weare@celswap.org">weare@celswap.org</a></span></p>
        <div class="developers-links">
            <button onclick="window.open('https://github.com/Celsians/celswap-core');" class="btn btn-documentation" data-aos="fade-up" data-aos-duration="700"><span
                    class="icon-doc"></span>Documentation</button>
            <button onclick="window.open('https://github.com/Celsians');" class="btn btn-github-repo" data-aos="fade-up" data-aos-duration="1000"><span
                    class="icon-github"></span> GitHub Repo</button>
        </div>
    </div>

    <div id="vote">
        <h1 data-aos="fade-up" data-aos-duration="1000">Would you like to see
            <br>
            <span>CelSwap in-app?</span>
        </h1>
        <h3 data-aos="fade-up" data-aos-duration="1000">Press the big button below to make your vote count. We'll make
            sure this idea reaches Celsius developers!
        </h3>
        <form class="vote-form" action="inc/vote-form.inc.php" method="post" data-aos="zoom-out-up"
            data-aos-duration="1000">
            <button class="input-vote-btn" name="vote">
                <div class="votes">
                    <div class="voted">+1</div>
                    <div class="num-votes">
                        <?php
                            $sql = "SELECT vote_id FROM votes ORDER BY vote_id DESC";
                            $stmt = $conn->prepare($sql);
                            $stmt->execute();
                            $result = $stmt->fetchAll();
                            echo $result[0]['vote_id'];
                        ?>
                    </div>
                    <div class="vote-btn">
                        <h3>hell yeah!</h3>
                        <div class="vote-btn-fire"></div>
                    </div>
                </div>
            </button>
        </form>
        <div class="notification-box"></div>
    </div>


    <footer>
        <div class="footer-contact">Drop us a line at <u><a href="mailto:weare@celswap.org"><strong>weare@celswap.org</strong></a></u></div>
    </footer>

    <script src="assets/js/carousel.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/splideSlider.js"></script>
    <script src="assets/js/testimonials-slider.js"></script>

    <script>
        AOS.init();
    </script>

</body>

</html>