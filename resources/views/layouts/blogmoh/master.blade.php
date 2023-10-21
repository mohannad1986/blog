<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    @include('layouts.blogmoh.head')
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
    @include('layouts.blogmoh.main-sidebar')

    <!--====== offcanvas-panel ======-->
    <!--====== Start Header ======-->
    @include('layouts.blogmoh.header')

    <!--====== End Header ======-->
    <!--====== Start Hero Area ======-->
    <section class="hero-area">
        <div class="breadcrumbs-area bg_cover bg-with-overlay"
            style="background-image: url(assets/images/bg/breadcrumbs-bg.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10">
                        <div class="page-title">
                            <h1 class="title">المدونة</h1>
                            <ul class="breadcrumbs-link">
                                <li><a href="index.html">الرئيسية</a></li>
                                <li class="">المدونة</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--====== End Hero Area ======-->
    <!--====== Start Blog Section ======-->
    <section class="blog-area pt-130 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-post-item blog-post-item-six mb-30 wow fadeInUp" data-wow-delay=".2s">
                        <div class="post-thumbnail">
                            <img src="assets/images/blog/blog-standard-1.jpg" alt="صورة المدونة">
                            <a href="blog-details.html" class="arrow">
                                <i class="far fa-angle-right"></i>
                            </a>
                        </div>
                        <div class="entry-content">
                            <div class="post-admin">
                                <span><img src=" assets/images/testimonial/thumb-2.jpg" alt="المستخدم"><a href="#">محمد
                                        علي</a></span>
                            </div>
                            <h3 class="title"><a href="blog-details.html">عالم المحاماة في السعودية: رؤية جديدة لتلبية
                                    احتياجات العملاء</a>
                            </h3>
                            <p>تعتبر المحاماة من أهم العناصر التي تسهم في تحقيق العدالة وحفظ حقوق الأفراد والمؤسسات في
                                المجتمع.
                            </p>
                            <div class="post-meta">
                                <ul>
                                    <li><span><i class="far fa-calendar-alt"></i><a href="#">25 يناير 2023</a></span>
                                    </li>
                                    <li><span><i class="far fa-comments"></i><a href="#">تعليقات (05)</a></span></li>
                                    <li><span><i class="far fa-share-alt"></i>(03)</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="blog-post-item blog-post-item-six mb-30 wow fadeInUp" data-wow-delay=".3s">
                        <div class="post-thumbnail">
                            <img src="assets/images/blog/blog-standard-2.jpg" alt="صورة المدونة">
                            <a href="blog-details.html" class="arrow">
                                <i class="far fa-angle-right"></i>
                            </a>
                            <div class="play-content">
                                <a href="https://www.youtube.com/watch?v=3gf0XbOEN40" class="video-popup"><i
                                        class="fas fa-play"></i></a>
                            </div>
                        </div>
                        <div class="entry-content">
                            <div class="post-admin">
                                <span><img src=" assets/images/testimonial/thumb-2.jpg" alt="المستخدم"><a href="#">محمد
                                        علي</a></span>
                            </div>
                            <h3 class="title"><a href="blog-details.html">عالم المحاماة في السعودية: رؤية جديدة لتلبية
                                    احتياجات العملاء</a>
                            </h3>
                            <p>
                                تعتبر المحاماة من أهم العناصر التي تسهم في تحقيق العدالة وحفظ حقوق الأفراد والمؤسسات في
                                المجتمع. </p>
                            <div class="post-meta">
                                <ul>
                                    <li><span><i class="far fa-calendar-alt"></i><a href="#">25 يناير 2023</a></span>
                                    </li>
                                    <li><span><i class="far fa-comments"></i><a href="#">تعليقات (05)</a></span></li>
                                    <li><span><i class="far fa-share-alt"></i>(03)</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="blog-post-item blog-post-item-six blog-post-bg mb-30 wow fadeInUp" data-wow-delay=".4s">
                        <div class="entry-content bg_cover"
                            style="background-image: url(assets/images/blog/blog-standard-3.jpg);">
                            <h3 class="title"><a href="blog-details.html">عالم المحاماة في السعودية: رؤية جديدة لتلبية
                                    احتياجات العملاء</a>
                            </h3>
                            <div class="post-admin">
                                <span><img src=" assets/images/testimonial/thumb-2.jpg" alt="المستخدم"><a href="#">محمد
                                        علي</a></span>
                            </div>
                            <div class="post-meta">
                                <ul>
                                    <li><span><i class="far fa-calendar-alt"></i><a href="#">25 يناير 2023</a></span>
                                    </li>
                                    <li><span><i class="far fa-comments"></i><a href="#">تعليقات (05)</a></span></li>
                                    <li><span><i class="far fa-share-alt"></i>(03)</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="blog-post-item blog-post-item-six mb-30" data-wow-delay=".5s">
                        <div class="entry-content">
                            <h3 class="title"><a href="blog-details.html">عالم المحاماة في السعودية: رؤية جديدة لتلبية
                                    احتياجات العملاء</a>
                            </h3>
                            <p>تعتبر المحاماة من أهم العناصر التي تسهم في تحقيق العدالة وحفظ حقوق الأفراد والمؤسسات في
                                المجتمع.
                            </p>
                            <div class="post-meta">
                                <ul>
                                    <li><span><i class="far fa-calendar-alt"></i><a href="#">25 يناير 2023</a></span>
                                    </li>
                                    <li><span><i class="far fa-comments"></i><a href="#">تعليقات (05)</a></span></li>
                                    <li><span><i class="far fa-share-alt"></i>(03)</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="col-lg-4">
                    <div class="sidebar-widget-area">
                        <div class="widget search-widget mb-50 wow fadeInUp">
                            <h4 class="widget-title">البحث هنا</h4>
                            <form>
                                <div class="form_group">
                                    <input type="email" class="form_control" placeholder="الكلمات الرئيسية" name="email"
                                        required>
                                    <button class="search-btn"><i class="far fa-search"></i></button>
                                </div>
                            </form>
                        </div>
                        <div class="widget categories-widget mb-45 wow fadeInUp">
                            <h4 class="widget-title">التصنيفات</h4>
                            <ul class="widget-link">
                                <li><a href="#">نمط الحياة <span>(05)</span></a></li>
                                <li><a href="#">السفر <span>(34)</span></a></li>
                                <li><a href="#">الأزياء <span>(89)</span></a></li>
                                <li><a href="#">الموسيقى <span>(96)</span></a></li>
                                <li><a href="#">العلامة التجارية <span>(78)</span></a></li>
                            </ul>
                        </div>
                        <div class="widget recent-post-widget mb-60 wow fadeInUp">
                            <h4 class="widget-title">أحدث الأخبار</h4>
                            <ul class="recent-post-list">
                                <li class="post-thumbnail-content">
                                    <img src="assets/images/widget/thumb-4.jpg" class="img-fluid" alt="">
                                    <div class="post-title-date">
                                        <h6><a href="blog-details.html">بناء تجربة استيراد جداول سلسة</a></h6>
                                        <span class="posted-on"><i class="far fa-calendar-alt"></i><a href="#">25 مايو
                                                2023</a></span>
                                    </div>
                                </li>
                                <li class="post-thumbnail-content">
                                    <img src="assets/images/blog/blog-5.jpg" class="img-fluid" alt="">
                                    <div class="post-title-date">
                                        <h6><a href="blog-details.html">إنشاء بيئة عمل عبر الإنترنت</a></h6>
                                        <span class="posted-on"><i class="far fa-calendar-alt"></i><a href="#">25 مايو
                                                2023</a></span>
                                    </div>
                                </li>
                                <li class="post-thumbnail-content">
                                    <img src="assets/images/widget/thumb-6.jpg" class="img-fluid" alt="">
                                    <div class="post-title-date">
                                        <h6><a href="blog-details.html">إشارات تشعر بأن موقع الويب أكثر</a></h6>
                                        <span class="posted-on"><i class="far fa-calendar-alt"></i><a href="#">25 مايو
                                                2023</a></span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="widget banner-widget bg_cover mb-50 wow fadeInUp" data-wow-delay=".5s"
                            style="background-image: url(assets/images/widget/banner-1.jpg);">
                            <div class="banner-content">
                                <span class="span">احصل على عرض</span>
                                <h3>جاهز للحصول على استشارة مجانية للحالات</h3>
                                <a href="contact.html" class="main-btn">احصل على العرض</a>
                            </div>
                        </div>
                        <div class="widget tag-cloud-widget mb-50 wow fadeInUp">
                            <h4 class="widget-title">العلامات الشعبية</h4>
                            <a href="#">محامٍ</a>
                            <a href="#">أعمال</a>
                            <a href="#">محامٍ</a>
                            <a href="#">استشارة</a>
                            <a href="#">مزارع قانونية</a>
                            <a href="#">مزارع</a>
                            <a href="#">إدارة</a>
                            <a href="#">تخطيط</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section><!--====== End Blog Section ======-->

    <!--====== بداية قسم التذييل ======-->
    @include('layouts.blogmoh.footer')
    <!--====== نهاية قسم التذييل ======-->
    <!--====== back-to-top ======-->
    <a href="#" class="back-to-top"><i class="fas fa-angle-up"></i></a>
    <!--====== Jquery js ======-->
    @include('layouts.blogmoh.footer-script')

</body>

</html>
