<html lang="zh-CN">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="描述">
    <meta name="keywords" content="关键词">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="PluginsKers">
    <title>标题</title>
    <link href="images/favicon.ico" rel="shortcut icon">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css">
</head>

<body style="overflow: visible;">
    <nav style="display: none;">
        <div class="row">
            <div class="container">
                <div class="logo unit">
                    <!-- <img src="" alt="logo"> -->
                    <span style="font-family: BlackItalic;">LOGO</span>
                </div>
                <div class="mobile-bar">
                    <span></span>
                </div>
                <ul class="nav-menu">
                    <li><a href="#home">首页</a></li>
                    <li><a href="#about">关于</a></li>
                    <li><a href="#preview">预览</a></li>
                    <li><a href="#us">我们</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="intro-section" id="home">
        <div class="intro-content unit">
            <h1 id="h1" style="font-family: BlackItalic;"> Text. </h1>
        </div>
        <a href="#about" class="down">
            <i class="fa fa-angle-down"></i>
        </a>
    </section>
    <section class="portfolios-section spad" id="about">
        <div class="container">
            <div class="section-title">
                <h2 id="h2" style="font-family: BlackItalic;">About.</h2>
                <p id="p">这里是文本.</p>
            </div>
        </div>
    </section>
    <section class="services-section spad">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 service-item">
                    <div class="icon">
                        <img src="./assets/img/gold.png" style="width: 50px;height: 50px;">
                    </div>
                    <h4>经济系统</h4>
                    <p>完善的简便的经济系统</p>
                </div>
                <div class="col-md-3 col-sm-6 service-item">
                    <div class="icon">
                        <img src="./assets/img/gem.png" style="width: 50px;height: 50px;">
                    </div>
                    <h4>玩家市场</h4>
                    <p>确保每一位玩家都能打下属于自己的市场</p>
                </div>
            </div>
        </div>
    </section>
    <section class="blog-section spad" id="preview">
        <div class="container">
            <div class="section-title">
                <h2>预览</h2>
                <p>全新的沉浸式体验，</p>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <a class="blog-item">
                        <img src="assets/img/background.png" alt="预览">
                        <div class="blog-item-text">
                            <h3>预览</h3>
                            <p>流畅算法，清晰的逻辑</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="section1 spad" id="us">
        <div class="container">
            <div class="section-title">
                <h2>标题</h2>
                <p>文本</p>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <a class="blog-item">
                        <img src="http://q1.qlogo.cn/g?b=qq&amp;nk=2120527996&amp;s=640" alt="PluginsKers">
                        <div class="blog-item-text section2">
                            <h3 id="lc">PluginsKers</h3>
                            <p>一条咸鱼吧</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="testinonial-section spad hitokoto">
        <div class="container hitokoto">
            <div class="section-title">
                <h2>一言</h2>
                <p id="hitokoto"></p>
                <script src="https://v1.hitokoto.cn/?encode=js&amp;select=%23hitokoto" defer=""></script>
            </div>
            <br>
        </div>
    </section>
    <footer>
        <p>Copyright © 2020 | PluginsKers All Rights Reserved </p>
    </footer>

    <script type="text/javascript" src="assets/js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.nav.js"></script>

    <script type="text/javascript">
        function nav() {
            if ($("section#home").height() <= $(window).scrollTop()) {
                $("nav").css("display", "block");
            } else {
                $("nav").css("display", "none");
            }
        }
        $(function() {
            $('nav').onePageNav();
            nav();
            $(document).scroll(nav);
            e = $(".mobile-bar").eq(0);
            l = $(".nav-menu").eq(0);
            e.click(function() {
                if (e.hasClass("active")) {
                    e.removeClass("active");
                    l.removeClass("active");
                } else {
                    e.addClass("active");
                    l.addClass("active");
                }
            });
        });
    </script>

</body>

</html>