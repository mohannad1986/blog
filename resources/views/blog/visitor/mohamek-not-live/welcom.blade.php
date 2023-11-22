
    <!DOCTYPE html>
    <html lang="ar" dir="rtl">

    <head>
        <!--====== Required meta tags ======-->
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--====== Title ======-->
        <title>مــحامــيــك</title>


        <!--====== Favicon Icon ======-->

        <link rel="shortcut icon" href="{{ URL::asset('assets/images/blogmoh/logo/icon.png') }}" type="image/x-icon">
        <!--====== Bootstrap css ======-->
        {{-- <link rel="stylesheet" href="assets/css/bootstrap-rtl.min.css"> --}}
        <link href="{{ URL::asset('assets/css/blogmoh/bootstrap-rtl.min.css') }}" rel="stylesheet">

        <!--====== FontAwesoem css ======-->
        {{-- {{ URL::asset('assets/fonts/blogmoh/flaticon/flaticon.css') }} --}}

        <link rel="stylesheet" href="{{ URL::asset('assets/fonts/blogmoh/fontawesome/css/all.min.css') }}">
        <!--====== Flaticon css ======-->
        <link rel="stylesheet" href="{{ URL::asset('assets/fonts/blogmoh/flaticon/flaticon.css') }}">
        <!--====== Magnific Popup css ======-->
        {{-- <link rel="stylesheet" href="assets/css/magnific-popup.css"> --}}
        <link href="{{ URL::asset('assets/css/blogmoh/magnific-popup.css') }}" rel="stylesheet">

        <!--====== Slick css ======-->
        {{-- <link rel="stylesheet" href="assets/css/slick.css"> --}}
        <link href="{{ URL::asset('assets/css/blogmoh/slick.css') }}" rel="stylesheet">

        <!--====== Nice-select css ======-->
        {{-- <link rel="stylesheet" href="assets/css/nice-select.css"> --}}
        <link href="{{ URL::asset('assets/css/blogmoh/nice-select.css') }}" rel="stylesheet">

        <!--====== Animate css ======-->
        {{-- <link rel="stylesheet" href="assets/css/animate.css"> --}}
        <link href="{{ URL::asset('assets/css/blogmoh/animate.css') }}" rel="stylesheet">

        <!--====== Default css ======-->
        {{-- <link rel="stylesheet" href="assets/css/default.css"> --}}
        <link href="{{ URL::asset('assets/css/blogmoh/default.css') }}" rel="stylesheet">

        <!--====== Style css ======-->
        {{-- <link rel="stylesheet" href="assets/css/style.css"> --}}
        <link href="{{ URL::asset('assets/css/blogmoh/style.css') }}" rel="stylesheet">

        {{-- <link href="{{ URL::asset('assets/css/blogmoh/') }}" rel="stylesheet">
        <link href="{{ URL::asset('assets/css/blogmoh/style.css') }}" rel="stylesheet"> --}}







    </head>

    <body>
        <!--====== Start Preloader ======-->
        <div class="preloader">
            <div class="lds-ellipsis">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
        <!--====== End Preloader ======-->

        <!--====== Search From ======-->
        <div class="modal fade" id="search-modal">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <form>
                        <div class="form_group">
                            <input type="text" class="form_control" placeholder="إبحث هنا...">
                            <button class="search_btn"><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div><!--====== Search From ======-->
        <!--====== offcanvas-panel ======-->
        <div class="offcanvas-panel">
            <div class="offcanvas-panel-inner">
                <div class="panel-logo">

                    <a href="index.html"><img src="{{ URL::asset('assets/images/blogmoh/logo/logo-1.png') }}" alt="Qempo"></a>
                </div>
                <div class="about-us">
                    <h5 class="panel-widget-title">من أنا</h5>
                    <p>
                        محامي سعودي ذو خبرة واحترافية عالية في ميدان القانون. ملتزم بتقديم الاستشارات والحلول القانونية
                        الفعالة. نهدف إلى حماية
                        حقوق العملاء وضمان تحقيق العدالة. نقدم خدماتنا بموجب أعلى المعايير المهنية والأخلاقية.
                    </p>
                </div>
                <div class="contact-us">
                    <h5 class="panel-widget-title">إتصل بي</h5>
                    <ul>
                        <li>
                            <i class="fal fa-map-marker-alt"></i>
                            شارع الملك فهد - الرياض - السعودية
                        </li>
                        <li>
                            <i class="fal fa-envelope-open"></i>
                            <a href="mailto:hello@barky.com"> name@domainname.com</a>
                        </li>
                        <li>
                            <i class="fal fa-phone"></i>
                            <a href="tel:(312)-895-9800" dir="ltr">+966123456789</a>
                        </li>
                    </ul>
                </div>
                <a href="#" class="panel-close"><i class="fal fa-times"></i></a>
            </div>
        </div>
        <!--====== offcanvas-panel ======-->
        <!--====== Start Header ======-->
        <header class="header-area-two transparent-header">
            <div class="header-navigation">
                <div class="container-fluid pl-0">
                    <div class="navigation-wrapper">
                        <div class="row m-0">
                            <div class="col-lg-2 col-md-4 col-5">
                                <div class="site-branding">
                                    <a href="index.html" class="brand-logo"><img src="{{ URL::asset('assets/images/blogmoh/logo/logo-2.png') }}"
                                            alt="Lawgne"></a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-2 col-2">
                                <div class="primary-menu">
                                    <div class="nav-menu">
                                        <div class="navbar-close"><i class="far fa-times"></i></div>
                                        <nav class="main-menu">
                                            <ul>
                                                <li class="menu-item"><a href="index.html" class="">الرئيسية</a>

                                                </li>
                                                <li class="menu-item"><a href="about-us.html" class="">من أنا</a>

                                                </li>
                                                <li class="menu-item"><a href="{{route('mohamek_not_live')}}"
                                                        class="active">المدونة</a>
                                                </li>
                                                <li class="menu-item"><a href="contact.html">إتصل بنا</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-5">
                                <div class="header-right-nav d-flex align-items-center">
                                    <a href="contact.html" class="main-btn arrow-btn">إستشارة مجانية</a>
                                    <ul>
                                        <li><a href="#" class="search-btn" data-toggle="modal"
                                                data-target="#search-modal"><i class="far fa-search"></i></a></li>
                                        <li class="off-nav-btn">
                                            <div class="off-menu">
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                            </div>
                                            <div class="navbar-toggler float-right">
                                                <span></span><span></span><span></span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
  {{-- +++++++++++++++++++++++++++++++++++++ --}}
     <!--====== End Header ======-->
    <!--====== Start Hero section ======-->
    <section class="hero-area">
        <div class="hero-wrpper-two bg-with-overlay bg_cover"
            style="background-image: url(assets/images/hero/hero-two-bg-1.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="hero-content">
                            <span class="span wow fadeInUp" data-wow-delay=".5s">حياك الله في موقعي</span>
                            <h1 class="wow fadeInDown" data-wow-delay=".7s">محامي سعودي متخصص بخبرة واسعة
                            </h1>
                            <p>محامي سعودي يجمع بين الخبرة والاحترافية في مجال القانون, متخصص في تقديم استشارات قانونية
                                موثوقة وفعالة, نضمن الدفاع
                                الشامل وحماية حقوق العملاء بأعلى معايير الجودة.</p>

                            <p class="experience"><i class="fas fa-star"></i> 25 سنة خبرة في الإستشارات القانونية
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="hero-img wow fadeInRight w-100" data-wow-delay=".90s">
                            <img src="assets/images/hero/hero-two-img-1.png" class="w-100" alt="Hero Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--====== End Hero section ======-->
    <!--====== Start Features section ======-->
    <section class="features-area">
        <div class="container">
            <div class="features-wrapper-two pt-130 pb-80">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="features-img mb-50 wow fadeInLeft">
                            <img src="assets/images/features/features-2.jpg" alt="Features">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="features-content-box features-content-box-two mb-50">
                            <div class="section-title section-title-left mb-25 wow fadeInUp" data-wow-delay=".2s">
                                <span class="sub-title">كيف أساعدك</span>
                                <h2>عند الطلب, بساعدك في قضايا تنقذ حياتك</h2>
                            </div>
                            <p class="mb-25">وقت ما تحتاج، أنا معك أساعدك في هذه القضايا اللي تفرق معك، وأعطيك النصيحة
                                والدعم في الأمور اللي تأثر على حياتك، مو مجرد
                                نصح، أنا هنا للبحث عن الحلول اللي تحافظ على حقوقك وأمانك، وأنت متأكد أني جنبك في الأوقات
                                الصعبة وأنا أدافع عنك بكل قوة.</p>
                            <div class="features-item-list">
                                <div class="features-item features-item-two d-flex wow fadeInUp" data-wow-delay=".3s">
                                    <div class="icon">
                                        <i class="flaticon-judge"></i>
                                    </div>
                                    <div class="content">
                                        <div class="title">
                                            <h4>استشارات قانونية</h4>
                                            <p>توجيهك في قضاياك القانونية وإعطائك النصح المناسب</p>
                                        </div>

                                    </div>
                                </div>
                                <div class="features-item features-item-two d-flex wow fadeInUp" data-wow-delay=".3s">
                                    <div class="icon">
                                        <i class="flaticon-civil-right"></i>
                                    </div>
                                    <div class="content">
                                        <div class="title">
                                            <h4>تمثيل أمام المحاكم</h4>
                                            <p>الدفاع عن حقوقك ومصالحك أمام الهيئات القضائية </p>
                                        </div>

                                    </div>
                                </div>
                                <div class="features-item features-item-two d-flex wow fadeInUp" data-wow-delay=".4s">
                                    <div class="icon">
                                        <i class="flaticon-contract"></i>
                                    </div>
                                    <div class="content">
                                        <div class="title">
                                            <h4>وساطة وتحكيم</h4>
                                            <p>حل النزاعات بطرق بديلة لتجنب التقاضي الطويل</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== End Features section ======-->
    <!--====== Start About section ======-->
    <section class="about-area pb-120">
        <div class="container">
            <div class="about-wrapper-two">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about-content-box about-content-box-two wow fadeInLeft" data-wow-delay=".3s">
                            <div class="section-title section-title-left mb-25">
                                <span class="sub-title">من أنا</span>
                                <h2>25 سنة خبرة في الإستشارات القانونية</h2>
                            </div>
                            <p>أنا محامي بخبرة عميقة في ميدان القانون، ملتزم بالدفاع عن حقوق عملائي وتقديم أفضل
                                الاستشارات القانونية. أسعى دائمًا
                                لتحقيق العدالة وضمان تحقيق المصالح الأمثل للمتضررين. في كل قضية أتعامل معها، أقدم حلاً
                                قانونيًا موثوقًا يستند إلى أسس
                                قوية. تتميز خدماتي بالدقة والاحترافية، مع التركيز على تقديم النتائج المثلى.</p>
                            <h5>القانون: الدرع الحصين والسيف القاطع</h5>
                            <a href="about-us.html" class="main-btn arrow-btn">تعرف على المزيد</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="play-content-img bg_cover wow fadeInRight" data-wow-delay=".4s"
                            style="background-image: url(assets/images/about/about-4.jpg);">
                            <a href="https://www.youtube.com/watch?v=3gf0XbOEN40" class="video-popup"><i
                                    class="fas fa-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== End About section ======-->
    <!--====== Start Service section ======-->
    <section class="service-area service-bg-map pt-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center mb-75 wow fadeInUp" data-wow-delay=".2s">
                        <span class="sub-title text-center">ايش الي أقدمه لك</span>
                        <h2>مجالات الممارسة القانونية</h2>
                    </div>
                </div>
            </div>
            <div class="row no-gutters service-wrapper-one">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="service-item service-item-two text-center wow fadeInUp" data-wow-delay=".25s">
                        <div class="item-bg bg_cover"
                            style="background-image: url(assets/images/features/features-1.jpg);"></div>
                        <div class="icon">
                            <i class="flaticon-gavel"></i>
                        </div>
                        <div class="content">
                            <h4>القانون الجنائي</h4>
                            <p>معالجة الجرائم والعقوبات، وتقديم الدفاع الكامل للمتهمين.</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="service-item service-item-two text-center wow fadeInUp" data-wow-delay=".30s">
                        <div class="item-bg bg_cover"
                            style="background-image: url(assets/images/features/features-1.jpg);"></div>
                        <div class="icon">
                            <i class="flaticon-marijuana"></i>
                        </div>
                        <div class="content">
                            <h4>القانون المدني</h4>
                            <p>حل النزاعات بين الأفراد وتقديم الاستشارات في قضايا الملكية والعقود.</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="service-item service-item-two text-center wow fadeInUp" data-wow-delay=".35s">
                        <div class="item-bg bg_cover"
                            style="background-image: url(assets/images/features/features-1.jpg);"></div>
                        <div class="icon">
                            <i class="flaticon-bail"></i>
                        </div>
                        <div class="content">
                            <h4>القانون التجاري</h4>
                            <p>استشارات في تأسيس وإدارة الشركات وتقديم الدعم في العقود التجارية.</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="service-item service-item-two text-center wow fadeInUp" data-wow-delay=".40s">
                        <div class="item-bg bg_cover"
                            style="background-image: url(assets/images/features/features-1.jpg);"></div>
                        <div class="icon">
                            <i class="flaticon-traffic-lights"></i>
                        </div>
                        <div class="content">
                            <h4>قانون العمل</h4>
                            <p>تقديم النصح والدعم في القضايا المتعلقة بالعلاقات الوظيفية وحقوق العمال.</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="service-item service-item-two text-center wow fadeInUp" data-wow-delay=".45s">
                        <div class="item-bg bg_cover"
                            style="background-image: url(assets/images/features/features-1.jpg);"></div>
                        <div class="icon">
                            <i class="flaticon-libra"></i>
                        </div>
                        <div class="content">
                            <h4>قانون الأسرة</h4>
                            <p>تقديم الاستشارات والدعم في قضايا الزواج، الطلاق، وحضانة الأطفال.</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="service-item service-item-two text-center wow fadeInUp" data-wow-delay=".50s">
                        <div class="item-bg bg_cover"
                            style="background-image: url(assets/images/features/features-1.jpg);"></div>
                        <div class="icon">
                            <i class="flaticon-building"></i>
                        </div>
                        <div class="content">
                            <h4>قانون العقارات</h4>
                            <p>مساعدة في قضايا شراء وبيع العقارات، وتقديم الاستشارات في حقوق الملكية.</p>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section><!--====== End Service section ======-->

    <!--====== Start Conntact section ======-->
    <section class="contact-area pt-130">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="counter-wrapper">
                        <div class="counter-item counter-item-three d-flex align-items-center wow fadeInUp"
                            data-wow-delay=".2s">
                            <div class="icon">
                                <i class="far fa-users"></i>
                            </div>
                            <div class="content d-flex align-items-center">
                                <h2><span class="count">356</span></h2>
                                <p>عملاء راضون</p>
                            </div>
                        </div>
                        <div class="counter-item counter-item-three d-flex align-items-center wow fadeInUp"
                            data-wow-delay=".3s">
                            <div class="icon">
                                <i class="fal fa-briefcase-medical"></i>
                            </div>
                            <div class="content d-flex align-items-center">
                                <h2><span class="count">754</span></h2>
                                <p>قضايا ناجحة</p>
                            </div>
                        </div>
                        <div class="counter-item counter-item-three d-flex align-items-center wow fadeInUp"
                            data-wow-delay=".4s">
                            <div class="icon">
                                <i class="fal fa-diploma"></i>
                            </div>
                            <div class="content d-flex align-items-center">
                                <h2><span class="count">962</span></h2>
                                <p>محامي محترف</p>
                            </div>
                        </div>
                        <div class="counter-item counter-item-three d-flex align-items-center wow fadeInUp"
                            data-wow-delay=".5s">
                            <div class="icon">
                                <i class="fal fa-trophy-alt"></i>
                            </div>
                            <div class="content d-flex align-items-center">
                                <h2><span class="count">287</span></h2>
                                <p>جوائز فائزة</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="contact-wrapper-two wow fadeInRight" data-wow-delay=".6s">
                        <div class="section-title text-center mb-30">
                            <h2>استشارات مجانية</h2>
                            <p>أقدم استشارة قانونية مجانية لمساعدتك في فهم حقوقك وتوجيهك نحو الخطوات الصحيحة، دون أي
                                التزامات مالية.</p>
                        </div>
                        <div class="contact-form">
                            <form>
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <input type="text" class="form_control" placeholder="اسمك" name="name"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <input type="text" class="form_control" placeholder="رقم الهاتف"
                                                name="number" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <input type="email" class="form_control"
                                                placeholder="عنوان البريد الإلكتروني" name="email" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <select class="wide">
                                                <option value="01">مناطق الممارسة</option>
                                                <option value="02">قانون الشركات</option>
                                                <option value="03">قانون العقارات</option>
                                                <option value="04">قانون التأمين</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <textarea class="form_control" placeholder="اكتب رسالة"
                                                name="message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <button class="arrow-btn main-btn">إرسال الرسالة</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--====== End Conntact section ======-->

    <!--====== Start testimonial section ======-->
    <section class="testimonial-area pt-120 pb-150 bottom-border">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center mb-75">
                        <span class="sub-title text-center">أراء العملاء</span>
                        <h2>إيش قالوا عملائي عني</h2>
                    </div>
                </div>
            </div>
            <div class="row testimonial-wraper-two justify-content-center">
                <div class="col-lg-8">
                    <div class="testimonial-slider-two">
                        <div class="testimonial-item" data-thumb="assets/images/testimonial/thumb-2.jpg">
                            <div class="wt-content">
                                <h3>"الحمدلله، محامي ما يقصر وفي كل الظروف كان معايا ووقف جنبي، وضح لي كل الأمور بوضوح."
                                </h3>
                            </div>
                            <div class="wt-title-thumb">
                                <div class="wt-thumb">
                                    <img src="assets/images/testimonial/thumb-2.jpg" alt="Author thumb">
                                </div>
                                <div class="wt-title">
                                    <h4>محمد بن علي</h4>
                                    <span class="position">رجل أعمال</span>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item" data-thumb="assets/images/testimonial/thumb-2.jpg">
                            <div class="wt-content">
                                <h3>"والله من أروع المحامين اللي تعاملت معهم، أحترم جهوده وتعبه في قضيتي، ونصحني بكل
                                    شيء."</h3>
                            </div>
                            <div class="wt-title-thumb">
                                <div class="wt-thumb">
                                    <img src="assets/images/testimonial/thumb-2.jpg" alt="Author thumb">
                                </div>
                                <div class="wt-title">
                                    <h4>فاطمة الخليفي</h4>
                                    <span class="position">مديرة شركة</span>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item" data-thumb="assets/images/testimonial/thumb-2.jpg">
                            <div class="wt-content">
                                <h3>"يشكر على سرعة استجابته وفهمه للقضية، وكان دوماً يوافيني بأخر التطورات. أنصح فيه."
                                </h3>
                            </div>
                            <div class="wt-title-thumb">
                                <div class="wt-thumb">
                                    <img src="assets/images/testimonial/thumb-2.jpg" alt="Author thumb">
                                </div>
                                <div class="wt-title">
                                    <h4>عبدالله الهاشمي</h4>
                                    <span class="position">مهندس</span>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item" data-thumb="assets/images/testimonial/thumb-2.jpg">
                            <div class="wt-content">
                                <h3>"ما شاء الله عليه، محامي بمعنى الكلمة، كان داعم لي ولأسرتي في أصعب الأوقات، جزاه
                                    الله خير."</h3>
                            </div>
                            <div class="wt-title-thumb">
                                <div class="wt-thumb">
                                    <img src="assets/images/testimonial/thumb-2.jpg" alt="Author thumb">
                                </div>
                                <div class="wt-title">
                                    <h4>سارة الزهراني</h4>
                                    <span class="position">طبيبة</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="testimonial-dots-images"></div>
            </div>
        </div>
    </section><!--====== End testimonial section ======-->
    <!--====== Start Blog section ======-->
    <section class="blog-area pt-120 pb-90 ">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="section-title section-title-left mb-75 wow fadeInUp" data-wow-delay=".2s">
                        <span class="sub-title">أخبارنا ومدونتنا</span>
                        <h2>كل التحديثات الجديدة</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="blog-post-item blog-post-item-three mb-40 wow fadeInUp" data-wow-delay=".3s">
                        <div class="post-thumbnail">
                            <img src="assets/images/blog/blog-4.jpg" alt="مدونة">
                        </div>
                        <div class="entry-content">
                            <a href="blog-grid.html" class="cat-btn">محامين</a>
                            <div class="post-meta">
                                <ul>
                                    <li><span><i class="fal fa-calendar-alt"></i><a href="#">25 يونيو 2021</a></span>
                                    </li>
                                    <li><span><i class="fal fa-comments"></i><a href="#">تعليقات (05)</a></span></li>
                                </ul>
                            </div>
                            <h3 class="title"><a href="blog-details.html">الأسس القانونية لحقوق الإنسان في الشريعة
                                    الإسلامية</a></h3>
                            <a href="blog-details.html" class="btn-link arrow-btn">اقرأ المزيد</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="blog-post-item blog-post-item-three mb-40 wow fadeInUp" data-wow-delay=".35s">
                        <div class="post-thumbnail">
                            <img src="assets/images/blog/blog-5.jpg" alt="مدونة">
                        </div>
                        <div class="entry-content">
                            <a href="blog-grid.html" class="cat-btn">محامين</a>
                            <div class="post-meta">
                                <ul>
                                    <li><span><i class="fal fa-calendar-alt"></i><a href="#">25 يونيو 2021</a></span>
                                    </li>
                                    <li><span><i class="fal fa-comments"></i><a href="#">تعليقات (05)</a></span></li>
                                </ul>
                            </div>
                            <h3 class="title"><a href="blog-details.html">تطبيقات قوانين العمل في الشركات الكبيرة</a>
                            </h3>
                            <a href="blog-details.html" class="btn-link arrow-btn">اقرأ المزيد</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="blog-post-item blog-post-item-three mb-40 wow fadeInUp" data-wow-delay=".40s">
                        <div class="post-thumbnail">
                            <img src="assets/images/blog/blog-6.jpg" alt="مدونة">
                        </div>
                        <div class="entry-content">
                            <a href="blog-grid.html" class="cat-btn">محامين</a>
                            <div class="post-meta">
                                <ul>
                                    <li><span><i class="fal fa-calendar-alt"></i><a href="#">25 يونيو 2021</a></span>
                                    </li>
                                    <li><span><i class="fal fa-comments"></i><a href="#">تعليقات (05)</a></span></li>
                                </ul>
                            </div>
                            <h3 class="title"><a href="blog-details.html">دور المحامي في حماية حقوق الملكية الفكرية</a>
                            </h3>
                            <a href="blog-details.html" class="btn-link arrow-btn">اقرأ المزيد</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== End Blog section ======-->


    <!--====== بداية قسم الدعوة للتواصل ======-->
    <section class="cta-area">
        <div class="container">
            <div class="cta-wrapper-two cta-wrapper-minus bg_cover"
                style="background-image: url(assets/images/bg/cta-bg-1.png);">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="cta-content-box wow fadeInLeft" data-wow-delay=".2s">
                            <h3>عند اختيارك لمكتب المحاماة، اختر أفضل رعاية لنفسك</h3>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="button float-lg-left wow fadeInRight" data-wow-delay=".25s">
                            <a href="contact.html" class="main-btn arrow-btn filled-btn">تواصل معنا</a>
                            <a href="case-1.html" class="main-btn arrow-btn filled-btn">مشاريعنا</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--====== نهاية قسم الدعوة للتواصل ======-->

    <!--====== بداية قسم التذييل ======-->
    <footer class="footer-area">
        <div class="footer-wrapper-one bg_cover pb-30" style="background-image: url(assets/images/bg/footer-bg-1.jpg);">
            <div class="container">
                <div class="footer-newsletter wow fadeInUp">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="section-title section-title-left section-title-white">
                                <span class="sub-title">ابق على تواصل</span>
                                <h2>اشترك في النشرة الإخبارية</h2>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="newsletter-form">
                                <form>
                                    <div class="row">
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <input type="email" class="form_control"
                                                    placeholder="أدخل عنوان البريد الإلكتروني" name="email" required>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form_group">
                                                <button class="main-btn">اشترك الآن</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-widget pt-80 pb-20">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="widget about-widget mb-55 wow fadeInUp" data-wow-delay=".2s">
                                <div class="footer-logo">
                                    <a href="index.html"><img src="assets/images/logo/logo-2.png" alt="الشعار"></a>
                                </div>
                                <p>تُعتبر شركتنا من بين أبرز الشركات في المجال، حيث نسعى دائمًا لتقديم أفضل الخدمات
                                    لعملائنا.</p>
                                <div class="share">
                                    <h4>تابعنا</h4>
                                    <ul class="social-link">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="widget footer-nav-widget mb-55 wow fadeInUp" data-wow-delay=".3s">
                                <h4 class="widget-title">القضايا الشهيرة</h4>
                                <ul class="widget-link">
                                    <li><a href="practice-details.html">العنف الأسري</a></li>
                                    <li><a href="practice-details.html">القانون التجاري</a></li>
                                    <li><a href="practice-details.html">اتفاقيات قبل الزواج</a></li>
                                    <li><a href="practice-details.html">تسويات المحكمة</a></li>
                                    <li><a href="practice-details.html">قانون حوادث السيارات</a></li>
                                    <li><a href="practice-details.html">الإصابات الشخصية</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="widget recent-post-widget mb-55 wow fadeInUp" data-wow-delay=".4s">
                                <h4 class="widget-title">آخر الأخبار</h4>
                                <ul class="post-widget-list">
                                    <li class="post-thumbnail-content">
                                        <img src="assets/images/blog/blog-4.jpg" class="img-fluid" alt="">
                                        <div class="post-title-date">
                                            <h6><a href="blog-details.html">استيراد البيانات بسلاسة</a></h6>
                                            <span class="posted-on"><i class="far fa-calendar-alt"></i><a href="#">25
                                                    مايو 2023</a></span>
                                        </div>
                                    </li>
                                    <li class="post-thumbnail-content">
                                        <img src="assets/images/blog/blog-6.jpg" class="img-fluid" alt="">
                                        <div class="post-title-date">
                                            <h6><a href="blog-details.html">العمل في بيئة رقمية</a></h6>
                                            <span class="posted-on"><i class="far fa-calendar-alt"></i><a href="#">25
                                                    مايو 2023</a></span>
                                        </div>
                                    </li>
                                    <li class="post-thumbnail-content">
                                        <img src="assets/images/blog/blog-5.jpg" class="img-fluid" alt="">
                                        <div class="post-title-date">
                                            <h6><a href="blog-details.html">تحسين تجربة الموقع</a></h6>
                                            <span class="posted-on"><i class="far fa-calendar-alt"></i><a href="#">25
                                                    مايو 2023</a></span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="widget contact-info-widget mb-55 wow fadeInUp" data-wow-delay=".5s">
                                <h4 class="widget-title">تواصل معنا</h4>
                                <div class="info-widget-content mb-10">
                                    <p><i class="fal fa-phone"></i><a href="tel:+01234556998"
                                            dir="ltr">+966128967459</a>
                                    </p>
                                    <p><i class="fal fa-envelope"></i><a
                                            href="mailto:support@gmail.com">name@gmail.com</a></p>
                                    <p><i class="fal fa-map-marker-alt"></i>شارع الملك فهد - الرياض - السعودية</p>
                                </div>
                                <div class="info-widget-content">
                                    <h4>ساعات العمل</h4>
                                    <p><i class="fal fa-clock"></i>الأحد - الجمعة <br class="mt-2"> 09 صباحًا - 08 مساءً
                                    </p>
                                    <h5>السبت مغلق</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-copyright">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="copyright-text text-center">
                                <p>تم التطوير بواسطة هشام كرمان -&nbsp;<a
                                        href="https://maizny.com"><span>ميزني</span></a> جميع الحقوق
                                    محفوظة © 2023</p>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>

    </footer>
    <!--====== نهاية قسم التذييل ======-->

  {{-- ++++++++++++++++++++++++++++++++++++++++++++ --}}
        <!--====== back-to-top ======-->
        <a href="#" class="back-to-top"><i class="fas fa-angle-up"></i></a>
        <!--====== Jquery js ======-->

    {{-- {{ URL::asset('assets/js/blogmoh/vendor/jquery-3.6.0.min.js') }} --}}

   {{-- +++++++++++++++++ --}}

   {{-- +++++++++++++++ --}}

     {{-- <script src="assets/js/vendor/jquery-3.6.0.min.js"></script> --}}
     <script src="{{ URL::asset('assets/js/blogmoh/vendor/jquery-3.6.0.min.js') }}"></script>

     <!--====== Popper js ======-->
     {{-- <script src="assets/js/popper.min.js"></script> --}}

     <script src="{{ URL::asset('assets/js/blogmoh/popper.min.js') }}"></script>


     <!--====== Bootstrap js ======-->
     <script src="{{ URL::asset('assets/js/blogmoh/bootstrap.min.js') }}"></script>


     <!--====== Slick js ======-->
     <script src="{{ URL::asset('assets/js/blogmoh/slick.min.js') }}"></script>


     <!--====== Magnific Popup js ======-->
     <script src="{{ URL::asset('assets/js/blogmoh/jquery.magnific-popup.min.js') }}"></script>

     <!--====== Isotope js ======-->
     <!--====== Imagesloaded js ======-->
     <script src="{{ URL::asset('assets/js/blogmoh/isotope.pkgd.min.js') }}"></script>
     <!--====== Nice-select js ======-->
     <script src="{{ URL::asset('assets/js/blogmoh/imagesloaded.pkgd.min.js') }}"></script>
     <!--====== counterup js ======-->
     <script src="{{ URL::asset('assets/js/blogmoh/jquery.counterup.min.js') }}"></script>
     <!--====== waypoints js ======-->
     <script src="{{ URL::asset('assets/js/blogmoh/jquery.waypoints.js') }}"></script>
     <!--====== Wow js ======-->
     <script src="{{ URL::asset('assets/js/blogmoh/wow.min.js') }}"></script>
     <!--====== Main js ======-->
     <script src="{{ URL::asset('assets/js/blogmoh/main.js') }}"></script>






    </body>

    </html>




