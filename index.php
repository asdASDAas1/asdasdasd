<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="fragment" content="!" />
    <meta name="viewport" content="width=device-width, initial-scale=0.9, user-scalable=no">
    <link rel="icon" type="image/png" href="assets/images/icon.png">
    <title>Live YouTube Subscriber Count — YouTube Realtime</title>

    <link rel="canonical" href="https://akshatmittal.com/youtube-realtime/" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@iakshatmittal" />
    <meta name="twitter:title" content="Live YouTube Subscriber Count — YouTube Realtime" />
    <meta name="twitter:description" content="YouTube Realtime is the easiest way to view the live subscriber count for any YouTuber on the planet! Simply enter the channel name, or ID and you are good to go!" />
    <meta name="twitter:creator" content="@iakshatmittal" />
    <meta name="twitter:image" content="https://akshatmittal.com/youtube-realtime/assets/images/sharing.png?v=1" />
    <meta property="og:title" content="Live YouTube Subscriber Count — YouTube Realtime" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="https://akshatmittal.com/youtube-realtime/" />
    <meta property="og:image" content="https://akshatmittal.com/youtube-realtime/assets/images/sharing.png?v=1" />
    <meta property="og:description" content="YouTube Realtime is the easiest way to view the live subscriber count for any YouTuber on the planet! Simply enter the channel name, or ID and you are good to go!" />
    <meta property="og:site_name" content="Akshat Mittal" />
    <meta property="fb:admins" content="100000581280466" />
    <meta property="fb:app_id" content="1473140929606808" />
    <meta property="article:author" content="https://www.facebook.com/itsreallyakshat" />

    <link href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="//fonts.googleapis.com/css?family=Roboto:300,400,500,600,700" rel="stylesheet">
    <link href="assets/css/odometer-theme-custom.css" rel="stylesheet">
    <link href="assets/css/spinners.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/colors/light.css" id="theme" rel="stylesheet">
    <!-- Nah, no Dark Theme for you people (yet) -->
    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="//oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="fix-header fix-sidebar card-no-border">
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    <div class="dark-bg"></div>
    <div id="main-wrapper">
        <header class="topbar">
            <nav class="navbar top-navbar navbar-toggleable-sm navbar-light">
                <div class="navbar-header">
                    <a class="navbar-brand" href="/youtube-realtime/">
                        <b class="text-white">
                            <i class="fa fa-youtube-play"></i>
                        </b>
                        <span class="text-white">
                            YouTube Realtime
                        </span>
                    </a>
                </div>
                <div class="navbar-collapse">
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <li class="nav-item">
                            <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)">
                                <i class="fa fa-bars"></i>
                            </a>
                        </li>
                    </ul>
                    <form class="mx-2 my-auto d-inline w-100" id="yt_search">
                        <div class="input-group">
                            <input type="text" class="form-control form-control" placeholder="Search" id="yt_searchvalue" autocomplete="off">
                            <span class="input-group-btn">
                                <button class="btn btn-success" type="button" id="yt_searchbutton">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </form>
                </div>
            </nav>
        </header>
        <aside class="left-sidebar">
            <div class="scroll-sidebar">
                <nav class="sidebar-nav">
                    <ul id="pinned_nav" class="sidebarnav">
                        <li class="nav-small-cap">FEATURED USERS</li>
                    </ul>
                </nav>
                <nav class="sidebar-nav">
                    <ul class="sidebarnav">
                        <li class="nav-small-cap">META</li>
                        <li>
                            <a class="waves-effect waves-dark" href="./compare/" target="_blank">
                                <i class="fa fa-bar-chart"></i>
                                <span class="hide-menu">Compare Multiple</span>
                            </a>
                        </li>
                        <li>
                            <a class="waves-effect waves-dark" href="./pewdiepie-vs-tseries/" target="_blank">
                                <i class="fa fa-bar-chart"></i>
                                <span class="hide-menu">PewDiePie vs T-Series</span>
                            </a>
                        </li>
                        <li>
                            <a class="waves-effect waves-dark" href="#about">
                                <i class="fa fa-info-circle"></i>
                                <span class="hide-menu">About</span>
                            </a>
                        </li>
                        <li>
                            <a class="waves-effect waves-dark" href="#embeds">
                                <i class="fa fa-indent"></i>
                                <span class="hide-menu">Sharing</span>
                            </a>
                        </li>
                        <li class="nav-small-cap">&copy; AKSHAT MITTAL</li>
                    </ul>
                </nav>
            </div>
        </aside>
        <div class="page-wrapper">
            <div class="container super-search nosel">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-block">
                                <div>
                                    <h3 class="card-title text-center">Compare with?</h3>
                                </div>
                                <form class="mx-2 my-auto d-inline w-100" id="yt_search_m">
                                    <div class="input-group">
                                        <input type="text" class="form-control form-control" placeholder="Search" id="yt_searchvalue_m" autocomplete="off">
                                        <span class="input-group-btn">
                                            <button class="btn btn-success" type="button" id="yt_searchbutton_m">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </span>
                                    </div>
                                </form>
                                <div class="results" id="results">
                                    
                                </div>
                                <div>
                                    <button class="btn btn-danger w-100" id="yt_comrest">
                                        <i class="fa fa-times"></i> Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row ads">
                    <div class="col-12">
                        <div class="desktop">
                            <div class="card-block text-center p-0">
                                <ins class="adsbygoogle" style="display:inline-block;width:728px;height:15px" data-ad-client="ca-pub-3188055178160882" data-ad-slot="2304758004"></ins>
                            </div>
                        </div>
                        <div class="mobile">
                            <div class="card-block text-center p-0">
                                <ins class="adsbygoogle" style="display:inline-block;width:200px;height:90px" data-ad-client="ca-pub-3188055178160882" data-ad-slot="1039867047"></ins>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Column -->
                    <div class="col-sm-12">
                        <div class="card m-b-0 m-t-20">
                            <img class="card-img-top img-responsive" src="assets/images/banner.jpg" id="yt_cover" style="max-height:200px;">
                            <div class="card-block little-profile p-b-0 text-center">
                                <div class="pro-img">
                                    <img src="assets/images/icon.png" alt="user" id="yt_profile">
                                </div>
                                <h3 class="display-6 m-b-15 m-t-10 text-center yt_name" id="yt_name">Akshat Mittal</h3>
                            </div>
                            <div class="card-block text-center p-t-0">
                                <div class="card-body">
                                    <div class="position-relative">
                                        <div class="white">
                                            <h1 class="display-1" id="yt_subs">00,000,000</h1>
                                            <span>Subscribers</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" id="sharer">
                    <div class="col-12">
                        <div class="card-block text-center">
                            <div class="text-center p-t-0 row">
                                <div class="col-3">
                                    <div class="card no-shadow btn-youtube mb-0 p-2 waves-effect" id="yt_shareyt">
                                        <span class="font-light m-b-0"><i class="fa fa-youtube-play"></i> Visit</span>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="card no-shadow btn-compare mb-0 p-2 waves-effect" id="yt_compare">
                                        <span class="font-light m-b-0"><i class="fa fa-bar-chart"></i> Compare</span>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="card no-shadow btn-archive mb-0 p-2 waves-effect" id="yt_sharear">
                                        <span class="font-light m-b-0"><i class="fa fa-youtube-play"></i> Archive</span>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="card no-shadow btn-twitter mb-0 p-2 waves-effect" id="yt_sharetw">
                                        <span class="font-light m-b-0"><i class="fa fa-twitter"></i> Twitter</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row ads">
                    <div class="col-12">
                        <div class="desktop">
                            <div class="card-block text-center p-0">
                                <ins class="adsbygoogle" style="display:inline-block;width:970px;height:90px" data-ad-client="ca-pub-3188055178160882" data-ad-slot="3825298200"></ins>
                            </div>
                        </div>
                        <div class="mobile">
                            <div class="card-block text-center p-0">
                                <ins class="adsbygoogle" style="display:inline-block;width:336px;height:280px" data-ad-client="ca-pub-3188055178160882" data-ad-slot="2652242365"></ins>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12" id="yt_sharear2">
                        <div class="row">
                            <div class="col-12 col-lg-7">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="card-body">
                                            <div class="position-relative">
                                                <div class="mt-2 ml-2 white">
                                                    <h1 class="display-5" id="yt_views">00,000,000,000</h1>
                                                    <span>Views</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-5">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="card-body">
                                            <div class="position-relative">
                                                <div class="mt-2 ml-2 white">
                                                    <h1 class="display-5" id="yt_videos">0,000</h1>
                                                    <span>Videos</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-block text-center p-t-0">
                            <a href="https://www.facebook.com/itsreallyakshat" target="_blank">
                                <div class="align-self-center btn-facebook m-1 round">
                                    <i class="fa fa-facebook"></i>
                                </div>
                            </a>
                            <a href="https://www.twitter.com/iakshatmittal" target="_blank">
                                <div class="align-self-center btn-twitter m-1 round">
                                    <i class="fa fa-twitter"></i>
                                </div>
                            </a>
                            <a href="https://www.instagram.com/itsreallyakshat" target="_blank">
                                <div class="align-self-center btn-instagram m-1 round">
                                    <i class="fa fa-instagram"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-block">
                                <div>
                                    <h3 class="card-title text-center">Why do I see abbreviated subscriber counts?</h3>
                                </div>
                                <div>
                                    <blockquote class="twitter-tweet tw-align-center"><p lang="en" dir="ltr">According to <a href="https://twitter.com/TeamYouTube?ref_src=twsrc%5Etfw">@TeamYouTube</a>, the abbreviated subscriber counts will be rolling out to YouTube and YouTube Data API starting September 10th, 2019.</p>&mdash; Akshat Mittal (@iakshatmittal) <a href="https://twitter.com/iakshatmittal/status/1170691927030685696?ref_src=twsrc%5Etfw">September 8, 2019</a></blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-block">
                                <div>
                                    <h3 class="card-title text-center">What do you think about <span class="yt_name">.</span>?</h3>
                                </div>
                                <div>
                                    <div id="disqus_thread"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" id="about">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-block">
                                <div>
                                    <div>
                                        <h3 class="card-title">About</h3>
                                    </div>
                                </div>
                                <div>
                                    <p>YouTube Realtime shows the live subscriber count of any user on YouTube as accurately
                                        as possible. YouTube often doesn't update the subscriber count on the website in
                                        real time and hence it's hard to keep a track on when you'll hit a new milestone.
                                        This tool eases the pressure and allows you see the subscribers change live!
                                    </p>
                                    <p>
                                        The subscriber count, view count, video count and comment count are all taken directly from Google's infrastructure via
                                        the Analytics API. The counts are updated every second and are guaranteed to be accurate.
                                    </p>
                                    <p>You can enter the channel name in any format. You can also input search terms for a channel,
                                        this will also try to automatically correct spellings in most cases. This is as good
                                        as YouTube Search itself since it uses the same engine to search.
                                    </p>
                                    <p>
                                        You can literally enter anything that YouTube supports. Examples:
                                    </p>
                                    <ul>
                                        <li>Channel Username (Example:
                                            <b>MKBHD</b>)</li>
                                        <li>Channel ID (Example:
                                            <b>UCK8sQmJBp8GCxrOtXWBpyEA</b>)</li>
                                        <li>Channel Name (Example:
                                            <b>Fine Brothers Entertainment</b>)</li>
                                        <li>YouTube URL (Example:
                                            <b>youtube.com/mkbhd</b>)</li>
                                        <li>Search Terms (Example:
                                            <b>Justin Bieber</b>)</li>
                                        <li>Self Discovery Channels (Example:
                                            <b>#Music</b>)</li>
                                    </ul>
                                    <p>
                                        If you like this tool, please consider donating to support the development and to offset the cost of running this awesome website for free. You can donate using <a href="https://paypal.me/AkshatMittal/5USD" target="_blank" rel="noopener">PayPal</a> or <a href="https://imjo.in/26KdPa" target="_blank" rel="noopener">Instamojo (India)</a>.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" id="embeds">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-block">
                                <div>
                                    <div>
                                        <h3 class="card-title">Sharing</h3>
                                    </div>
                                </div>
                                <div class="form-horizontal form-material">
                                    <p>You can share the live subscriber counts for any channel on YouTube by sharing the following
                                        URL. Sharing buttons for YouTube, Facebook and Twitter are also available right below
                                        the subscriber count. You can also bookmark (Ctrl/Cmd + D) the current URL to come
                                        back anytime!</p>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <input type="text" name="url" value="..wait.." id="yt_shareurl" onclick="this.select()" readonly="" class="form-control form-control-line text-center"></input>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-block">
                                <div class="form-horizontal form-material">
                                    <p>
                                        Thank you for using YouTube Realtime. You can find more information about the project on
                                        <a href="https://github.com/akshatmittal/youtube-realtime/blob/gh-pages/README.md" target="_blank">GitHub</a> including license and contributors. You can get in touch with me on
                                        <a href="https://www.facebook.com/itsreallyakshat" target="_blank">Facebook</a>,
                                        <a href="https://twitter.com/iakshatmittal" target="_blank">Twitter</a> or
                                        <a href="mailto:ytlive@akshatmittal.com" target="_blank">email</a>, if you prefer. Do let me know if you have any feedback or ideas for this
                                        project!
                                    </p>
                                    <p class="mb-0">
                                        YouTube is a registered trademark of Google.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">&copy; 2019
                <a href="https://akshatmittal.com">Akshat Mittal</a>
            </footer>
        </div>
    </div>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.0/jquery.min.js" integrity="sha256-JAW99MJVpJBGcbzEuXk4Az05s/XyDdBomFqNlM3ic+I=" crossorigin="anonymous"></script>
    <script src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js" async></script>
    <script src="//platform.twitter.com/widgets.js" async></script>
    <script>
        window.Tether = function () {} // I don't want Bootstrap to use Tether.
    </script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/odometer.js/0.4.6/odometer.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/sticky-kit/1.1.3/sticky-kit.min.js"></script>
    <script src="assets/js/waves.js"></script>
    <script src="assets/js/custom-ui.js"></script>
    
    <script src="assets/js/base.js"></script>
    <script src="assets/js/keyManager.js"></script>
    <script src="assets/js/featured.core.js"></script>
    <script src="assets/js/updateManager.core.js"></script>
    <script src="assets/js/query.core.js"></script>
    <script src="assets/js/multisearch.core.js"></script>
    <script src="assets/js/live.core.js"></script>
    <script src="assets/js/sharing.core.js"></script>
    <script src="assets/js/urlManager.core.js"></script>
    <script src="assets/js/init.js"></script>
    <script src="//akshatmittal.disqus.com/embed.js"></script>
</body>

</html>
