<?php
require_once(__DIR__."/panel/config/config.php");
?>
<!DOCTYPE html>
<html lang="fa" dir="rtl" data-bs-theme="dark">

<head>
    <!-- metas -->
    <meta charset="utf-8">
    <meta name="author" content="mohammad mohammad soltani">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="math - ai - ai for math - math ai - sadat ai - mohammad mohammad soltani ">
    <meta name="description" content="afm - power full math ai">
    <!-- title -->
    <title>AFM - دستیار هوش مصنوعی برای ریاضی</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <!-- theme css -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/colors/color-3.css" rel="stylesheet">
</head>
<!-- Body Start -->

<body>
    <!-- Header Top -->
    <header class="main-header d-lg-none">
        <div class="container">
            <!-- Brand -->
            <div class="logo">
                <a class="navbar-brand" href="#">
                    <!--<img class="logo-dark" title="" alt="" src="assets/img/logo.png">
                    <img class="logo-light" title="" alt="" src="assets/img/logo-light.png">-->
                    <span>AFM</span>
                </a>
            </div>
            <div class="ms-auto">
                <button class="toggler-menu">
                    <span></span>
                </button>
            </div>
        </div>
    </header>
    <!-- End Header Top -->
    <div class="header-left-fixed one-page-nav">
        <!-- Brand -->
        <div class="logo">
            <a class="navbar-brand" href="#">
                <span>AFM</span>
                <!--<img class="logo-dark" title="" alt="" src="assets/img/logo.png">
                <img class="logo-light" title="" alt="" src="assets/img/logo-light.png">-->
            </a>
        </div>
        <!-- / -->
        <ul class="main-menu">
            <li>
                <a data-scroll-nav="0" href="#home">
                    <span class="m-icon">
                        <i class="bi-house-door"></i>
                    </span>
                    <span class="m-text">خانه</span>
                </a>
            </li>
            <li>
                <a data-scroll-nav="1" href="#services">
                    <span class="m-icon">
                        <i class="bi-person"></i>
                    </span>
                    <span class="m-text">درباره من</span>
                </a>
            </li>
            <li>
                <a data-scroll-nav="2" href="#services">
                    <span class="m-icon">
                        <i class="bi-briefcase"></i>
                    </span>
                    <span class="m-text">خدمات</span>
                </a>
            </li>
            <li>
                <a data-scroll-nav="3" href="#work">
                    <span class="m-icon">
                        <i class="bi-columns"></i>
                    </span>
                    <span class="m-text">تصاویر</span>
                </a>
            </li>
            <li>
                <a data-scroll-nav="4" href="#contactus">
                    <span class="m-icon">
                        <i class="bi-telephone"></i>
                    </span>
                    <span class="m-text">تماس با ما</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- Main -->
    <main class="wrapper">
        <!-- Home -->
        <section id="home" data-scroll-index="0" class="home-section">
            <div class="container">
                <div class="row align-items-center min-vh-100 flex-row-reverse">
                    <div class="col-lg-6 ps-xl-5 mb-5 mb-lg-0">
                        <div class="home-intro">
                            <h6><img class="hand-wave" src="assets/img/hand-wave.svg" alt=""> سلام، من</h6>
                            <h1>AFM<span><img src="assets/img/mask.jpg" title="" alt=""></span>AI هستم</h1>
                            <h2>من یک <span id="type-it"></span></h2>
                            <p class="pe-lg-5">با AFM دیگه لازم نیست برای درس خوندنت نگران باشی چون با الگوریتم های پیشرفته ای که ما طراحی کرده ایم شما میتوانید جواب هر یک از سوالات خود را به راحتی پیدا کنید</p>
                            <div class="btn-bar">
                                <a class="px-btn px-btn-theme" href="<?php echo login_page ?>">ورود | ثبت نام <i class="fas fa-user"></i> </a>
                                <a class="px-btn px-btn-theme" href="<?php echo login_page ?>">آموزش کار با سامانه<i class="bi bi-web"></i> </a>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="home-image text-center">
                            <div class="hi-icon-top">
                                <svg width="123" height="123" viewBox="0 0 123 123" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M44.4879 2.72729C18.0681 -8.74866 -8.74539 18.0655 2.73027 44.486L4.62443 48.8556C6.3577 52.8463 7.2521 57.1507 7.2521 61.5015C7.2521 65.8524 6.3577 70.1568 4.62443 74.1475L2.7272 78.5141C-8.74847 104.935 18.065 131.749 44.491 120.273L48.8574 118.375C52.848 116.642 57.1523 115.748 61.5031 115.748C65.8538 115.748 70.1581 116.642 74.1488 118.375L78.5152 120.273C104.932 131.749 131.748 104.935 120.273 78.511L118.376 74.1445C116.642 70.1537 115.748 65.8493 115.748 61.4985C115.748 57.1476 116.642 52.8432 118.376 48.8525L120.273 44.486C131.748 18.0655 104.935 -8.74866 78.5121 2.72729L74.1457 4.62457C70.1551 6.35788 65.8508 7.25231 61.5 7.25231C57.1492 7.25231 52.8449 6.35788 48.8543 4.62457L44.4879 2.72729Z" fill="var(--px-theme)" />
                                </svg>
                            </div>
                            <div class="hi-icon-bottom">
                                <svg width="123" height="123" viewBox="0 0 123 123" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M44.4879 2.72729C18.0681 -8.74866 -8.74539 18.0655 2.73027 44.486L4.62443 48.8556C6.3577 52.8463 7.2521 57.1507 7.2521 61.5015C7.2521 65.8524 6.3577 70.1568 4.62443 74.1475L2.7272 78.5141C-8.74847 104.935 18.065 131.749 44.491 120.273L48.8574 118.375C52.848 116.642 57.1523 115.748 61.5031 115.748C65.8538 115.748 70.1581 116.642 74.1488 118.375L78.5152 120.273C104.932 131.749 131.748 104.935 120.273 78.511L118.376 74.1445C116.642 70.1537 115.748 65.8493 115.748 61.4985C115.748 57.1476 116.642 52.8432 118.376 48.8525L120.273 44.486C131.748 18.0655 104.935 -8.74866 78.5121 2.72729L74.1457 4.62457C70.1551 6.35788 65.8508 7.25231 61.5 7.25231C57.1492 7.25231 52.8449 6.35788 48.8543 4.62457L44.4879 2.72729Z" fill="var(--px-theme)" />
                                </svg>
                            </div>
                            <img src="assets/img/home-banner.jpg" title="" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Home -->
        <!-- About -->
        <section id="about" data-scroll-index="1" class="section about-section gray-bg-1">
            <div class="container">
                <div class="about-me">
                    <div class="row align-items-start">
                        <div class="col-lg-5 pb-4 pb-lg-0">
                            <div class="title-01">
                                <span>درباره من</span>
                            </div>
                            <div class="about-me-text pb-5">
                                <h3>اسم من AFM هست</h3>
                                <h5><span>من برای حل سوالات ریاضی شما </span> ساخته شده ام</h5>
                                <p>من AFM هستم . اسم من از عبارت AI FOR MATH به معنای هوش مصنوعی برای ریاضی الگو گیری شده است. من در سال 1402 متولد شده ام و از اینکه به سوالات افراد در هر زمینه ای به خصوص ریاضی پاسخ میدهم به خودم افتخار میکنم.</p>
                                <!--<div class="row pt-2">
                                    <div class="col-auto">
                                        <div class="a-count">
                                            <span class="count">5 هزار</span>
                                            <div class="a-count-text">پروژه های <br>تکمیل شده.</div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="a-count">
                                            <span class="count">3 هزار</span>
                                            <div class="a-count-text">مشتریان <br>راضی.</div>
                                        </div>
                                    </div>
                                </div>-->
                            </div>
                            <hr>
                            <div class="title-01 mt-5">
                                <span>کاربران من رو چگونه توصیف میکنند ؟ </span>
                            </div>
                            <div class="resume-box">
                                <ul>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-user"></i>
                                        </div>
                                        <span class="time">طراح و برنامه نویس پروژه</span>
                                        <h5>محمد محمد سلطانی</h5>
                                        <p>از اینکه تونستم تو رو بسازم تا به صورت رایگان به مردم کمک کنی افتخار میکنم.</p>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-user"></i>
                                        </div>
                                        <span class="time">دانشجوی رشته ی IT</span>
                                        <h5>امیر اجل لوئیان</h5>
                                        <p>اینکه تو به این ظرافت اونم توسط یه دانش آموز 13 ساله طراحی شده ای خیلی عجیبه.تو واقعا حرف نداری</p>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-user"></i>
                                        </div>
                                        <span class="time">دبیر ریاضی متوسطه اول </span>
                                        <h5>مسعود رشیدی</h5>
                                        <p>به نظر من AFM یکی از بهترین و کاربردی ترین پروژه های ساخته شده برای حل سوالات ریاضی در ایران است.</p>
                                    </li>
                                    <li>
                                    <div class="icon">
                                            <i class="fas fa-user"></i>
                                        </div>
                                        <span class="time">دبیر ریاضی متوسطه اول </span>
                                        <h5>امیر حسین سلیمانی</h5>
                                        <p>AFM یکی از بهترین سایت های ارائه دهنده GPT است چراکه سوال های ما قبل از رسیدن به دست هوش مصنوعی پردازش میشوند</p>
                                    </li>
                                    <li>
                                    <div class="icon">
                                            <i class="fas fa-user"></i>
                                        </div>
                                        <span class="time">دانش آموز متوسطه و طراح UX سایت lakche</span>
                                        <h5>محمد صادق لوئیان</h5>
                                        <p>AFM عملکرد متفاوتی نسبت به دیگر سایت های ارائه هوش مصنوعی دارد . حتی سوالاتی بوده اند که من به سایت هایی نظیر poe داده ام ولی به خوبی AFM پاسخ نگرفته ام</p>
                                    </li>
                                    <li>
                                    <div class="icon">
                                            <i class="fas fa-user"></i>
                                        </div>
                                        <span class="time">دانش آموز متوسطه و طراح UI سایت lakche</span>
                                        <h5>نوید رضا بشارت نژاد</h5>
                                        <p>چقدر خوب است که وبسایت هایی مثل AFM بدون هیچ چشم داشتی به برنامه نویسان API رایگان تقدیم میکنند تا آن ها هم بتوانند یک هوش مصنوعی بهینه سازی شده در سایتشان داشته باشند</p>
                                    </li>
                                    <li>
                                    <div class="icon">
                                            <i class="fas fa-user"></i>
                                        </div>
                                        <span class="time">دندانپزشک</span>
                                        <h5>دکتر باباصفری</h5>
                                        <p>این خیلی خوبه که الآن وقتی فرزندان ما در سوالی مشکل دارند دیگه لازم نیست که خودمون رو به این در  اون در بزنیم تا جوابشو پیدا کنیم.واقعا AFM گل کاشته</p>
                                    </li>
                                    <li>
                                    <div class="icon">
                                            <i class="fas fa-user"></i>
                                        </div>
                                        <span class="time">دانش آموز پایه هشتم</span>
                                        <h5>رسا کلیدری</h5>
                                        <p>این خیلی خوبه که الآن وقتی فرزندان ما در سوالی مشکل دارند دیگه لازم نیست که خودمون رو به این در  اون در بزنیم تا جوابشو پیدا کنیم.واقعا AFM گل کاشته</p>
                                    </li>
                                    <li>
                                    <div class="icon">
                                            <i class="fas fa-user"></i>
                                        </div>
                                        <span class="time">برنامه نویس و مهندس IT</span>
                                        <h5>مهندس ثنایی</h5>
                                        <p>اینکه AFM کاملا رایگان داره این همه خدمات رو به کاربراش اونم به صورت کاملا رایگان ارائه میده خیلی عجیبه . واقعا AFM حرف نداره</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-7 sticky-lg-top ps-xl-5">
                            <div class="row align-items-start">
                                <div class="col-md-7 py-4">
                                    <div class="about-me-img">
                                        <img src="assets/img/about-banner.jpg" title="" alt="">
                                    </div>
                                </div>
                                <div class="col-md-5 py-4">
                                    <div class="about-content">
                                        <ul>
                                            <li>
                                                <div class="a-icon">
                                                    <i class="fab fa-link"></i>
                                                </div>
                                                <div class="a-text">
                                                    <a class="text-reset stretched-link" href="https://ble.ir/programmerofsadat">در بله به من پیام بده</a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="a-icon">
                                                    <i class="fa fa-envelope"></i>
                                                </div>
                                                <div class="a-text">
                                                   
                                                    <a class="text-reset stretched-link"  href="mailto:mypc264fm@gmail.com">بهم ایمیل بزن</a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="a-icon">
                                                    <i class="fab fa-whatsapp"></i>
                                                </div>
                                                <div class="a-text">
                                                    <a class="text-reset stretched-link" href="#">در واتساپ بهم پیام بده</a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="a-icon">
                                                    <i class="fa fa-map"></i>
                                                </div>
                                                <div class="a-text">
                                                    <a class="text-reset stretched-link" href="#">ملاقات با من</a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="a-icon">
                                                    <i class="fa-solid fa-file-pdf"></i>
                                                </div>
                                                <div class="a-text">
                                                    <a class="text-reset stretched-link" href="#">رزومه</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-12 py-4">
                                    <div class="title-01">
                                        <span>مهارت من در حوزه های مختلف</span>
                                    </div>
                                    <div class="skills">
                                        <div class="skill-lt">
                                            <h6 class="dark-color">ریاضی</h6>
                                            <div class="skill-bar">
                                                <div class="skill-bar-in" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                                                    <span>95%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="skill-lt">
                                            <h6 class="dark-color">برنامه نویسی</h6>
                                            <div class="skill-bar">
                                                <div class="skill-bar-in" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                                    <span>80%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="skill-lt">
                                            <h6 class="dark-color">فیزیک</h6>
                                            <div class="skill-bar">
                                                <div class="skill-bar-in" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                                    <span>75%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="skill-lt">
                                            <h6 class="dark-color">شیمی</h6>
                                            <div class="skill-bar">
                                                <div class="skill-bar-in" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    <span>20%</span>
                                                </div>
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
        <!-- End About -->
        <!-- Services -->
        <section id="services" data-scroll-index="2" class="section services-section">
            <div class="container">
                <div class="section-heading">
                    <h3>
                        <span>کار هایی که من میتوانم برای شما انجام دهم</span>
                    </h3>
                </div>
                <div class="row gy-4">
                    <div class="col-sm-6 col-lg-4">
                        <div class="feature-box-01">
                            <div class="icon"><i class="bi bi-question"></i></div>
                            <div class="feature-content">
                                <h5>حل سوالات</h5>
                                <p>حل سوالات ریاضی با 5 مدل هوش مصنوعی به صورت رایگان</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="feature-box-01">
                            <div class="icon"><i class="bi bi-folder"></i></div>
                            <div class="feature-content">
                                <h5>فضای ذخیره سازی</h5>
                                <p>یک فضای خوب برای ذخیره پاسخ های کاربردی که از هوش مصنوعی دریافت میکنید</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="feature-box-01">
                            <div class="icon"><i class="bi bi-chat-right-dots"></i></div>
                            <div class="feature-content">
                                <h5>پرسش و پاسخ</h5>
                                <p>هر کاربر میتواند سوال خود را مطرح کند تا بقیه افراد به آن پاسخ دهند</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="feature-box-01">
                            <div class="icon"><i class="bi bi-plus  "></i></div>
                            <div class="feature-content">
                                <h5>ماشین حساب</h5>
                                <p>یک ماشین حساب قدرتمند برای محاسبه عبارت های ریاضی </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="feature-box-01">
                            <div class="icon"><i class="bi bi-box"></i></div>
                            <div class="feature-content">
                                <h5>اعداد اول</h5>
                                <p>یک الگوریتم قوی برای غربال اعداد اول به روش اراتوستن</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="feature-box-01">
                            <div class="icon"><i class="bi bi-info"></i></div>
                            <div class="feature-content">
                                <h5>اطلاعات اعداد</h5>
                                <p>دریافت اطلاعات مرتبط با اعداد مثل ک.م.م  ، ب.م.م ، تجزیه و ...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Services -->
        <!-- portfolio -->
        <section id="portfolio" data-scroll-index="3" class="section portfolio-section gray-bg-1">
            <div class="container">
                <div class="section-heading">
                    <h3>
                        <span>تصاویری از من</span>
                    </h3>
                </div>
                <div class="lightbox-gallery">
                    <div class="row g-3 g-lg-4 portfolio-content">
                        <div class="col-sm-6 col-lg-4 grid-item">
                            <div class="portfolio-box">
                                <div class="portfolio-text">
                                    <h6>هوش مصنوعی</h6>
                                    <p>بخش حل مسئله با هوش مصنوعی</p>
                                    <a class="gallery-link" href="assets/img/ai.jpg"><i class="bi-arrow-up-left-circle"></i></a>
                                </div>
                                <div class="portfolio-img">
                                    <img src="assets/img/ai.jpg" title="" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 grid-item">
                            <div class="portfolio-box">
                                <div class="portfolio-text">
                                    <h6>غربال اعداد اول</h6>
                                    <p>تعداد اعداد اول بین دو عدد</p>
                                    <a class="gallery-link" href="assets/img/gharbal.jpg"><i class="bi-arrow-up-left-circle"></i></a>
                                </div>
                                <div class="portfolio-img">
                                    <img src="assets/img/gharbal.jpg" title="" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 grid-item">
                            <div class="portfolio-box">
                                <div class="portfolio-text">
                                    <h6>اطلاعات اعداد</h6>
                                    <p>نمایش روابط بین دو عدد</p>
                                    <a class="gallery-link" href="assets/img/nums_info.jpg"><i class="bi-arrow-up-left-circle"></i></a>
                                </div>
                                <div class="portfolio-img">
                                    <img src="assets/img/nums_info.jpg" title="" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 grid-item">
                            <div class="portfolio-box">
                                <div class="portfolio-text">
                                    <h6>پرسش و پاسخ</h6>
                                    <p>پرسش و پاسخ برای دست یافتن به پاسخ درست</p>
                                    <a class="gallery-link" href="assets/img/ask_answer.jpg"><i class="bi-arrow-up-left-circle"></i></a>
                                </div>
                                <div class="portfolio-img">
                                    <img src="assets/img/ask_answer.jpg" title="" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 grid-item">
                            <div class="portfolio-box">
                                <div class="portfolio-text">
                                    <h6>یادداشتها</h6>
                                    <p>ذخیره متونی که کاربردی هستند</p>
                                    <a class="gallery-link" href="assets/img/notes.jpg"><i class="bi-arrow-up-left-circle"></i></a>
                                </div>
                                <div class="portfolio-img">
                                    <img src="assets/img/notes.jpg" title="" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 grid-item">
                            <div class="portfolio-box">
                                <div class="portfolio-text">
                                    <h6>ماشین حساب</h6>
                                    <p>یک ماشین حساب برای حل عبارات ساده ریاضی</p>
                                    <a class="gallery-link" href="assets/img/calcuter.jpg"><i class="bi-arrow-up-left-circle"></i></a>
                                </div>
                                <div class="portfolio-img">
                                    <img src="assets/img/calcuter.jpg" title="" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End portfolio -->
        <!-- Testimonials -->
        <section class="section testimonials-section">
            <div class="container">
                <div class="section-heading">
                    <h3>
                        <span>گواهینامه ها</span>
                    </h3>
                </div>
                <div class="owl-carousel" data-items="3" data-nav-dots="true" data-lg-items="3" data-md-items="2" data-sm-items="1" data-xs-items="1" data-space="24" data-autoplay="false">
                    <div class="testimonials-box">
                        <div class="t-lead">
                            <img src="assets/img/avatar-1.jpg" title="" alt="">
                        </div>
                        <div class="t-text">
                            <h5>درگیری مشتریان و علاقه مندان.</h5>
                            <p>“دریافت ایده‌ها و طرح‌ها برای به اشتراک گذاشتن با مشتریانم”</p>
                            <div class="t-avatar">
                                <h6>جنیفر لوترن</h6>
                                <span>مدیر عامل شرکت</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonials-box">
                        <div class="t-lead">
                            <img src="assets/img/avatar-2.jpg" title="" alt="">
                        </div>
                        <div class="t-text">
                            <h5>درگیری مشتریان و علاقه مندان.</h5>
                            <p>“دریافت ایده‌ها و طرح‌ها برای به اشتراک گذاشتن با مشتریانم”</p>
                            <div class="t-avatar">
                                <h6>جنیفر لوترن</h6>
                                <span>مدیر عامل شرکت</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonials-box">
                        <div class="t-lead">
                            <img src="assets/img/avatar-3.jpg" title="" alt="">
                        </div>
                        <div class="t-text">
                            <h5>درگیری مشتریان و علاقه مندان.</h5>
                            <p>“دریافت ایده‌ها و طرح‌ها برای به اشتراک گذاشتن با مشتریانم”</p>
                            <div class="t-avatar">
                                <h6>جنیفر لوترن</h6>
                                <span>مدیر عامل شرکت</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonials-box">
                        <div class="t-lead">
                            <img src="assets/img/avatar-2.jpg" title="" alt="">
                        </div>
                        <div class="t-text">
                            <h5>درگیری مشتریان و علاقه مندان.</h5>
                            <p>“دریافت ایده‌ها و طرح‌ها برای به اشتراک گذاشتن با مشتریانم”</p>
                            <div class="t-avatar">
                                <h6>جنیفر لوترن</h6>
                                <span>مدیر عامل شرکت</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonials-box">
                        <div class="t-lead">
                            <img src="assets/img/avatar-3.jpg" title="" alt="">
                        </div>
                        <div class="t-text">
                            <h5>درگیری مشتریان و علاقه مندان.</h5>
                            <p>“دریافت ایده‌ها و طرح‌ها برای به اشتراک گذاشتن با مشتریانم”</p>
                            <div class="t-avatar">
                                <h6>جنیفر لوترن</h6>
                                <span>مدیر عامل شرکت</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Testimonials -->
        <!-- contactus -->
        <section id="contactus" data-scroll-index="4" class="section contactus-section gray-bg-1">
            <div class="container">
                <div class="row gy-5">
                    <div class="col-lg-5 d-flex">
                        <div class="d-flex flex-column w-100">
                            <div class="contact-info">
                                <h3>بیایید تا پروژه شما را مورد بحث قرار دهیم</h3>
                                <ul>
                                    <li>
                                        <div class="icon">
                                            <i class="bi-chat-left-dots-fill"></i>
                                        </div>
                                        <div class="text">
                                            <label>با ما در ارتباط باشید</label>
                                            <p>تیم ما برای کمک به شما اینجاست. <span><a class="text-reset" href="mailto:info@domainname.com">info@domainname.com</a></span></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="bi-compass"></i>
                                        </div>
                                        <div class="text">
                                            <label>ملاقات با ما</label>
                                            <p> به دفتر مرکزی ما بیایید. <span>اصفهان، <br> خیابان 12 - کوچه 21</span></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="bi-phone"></i>
                                        </div>
                                        <div class="text">
                                            <label>تماس با ما</label>
                                            <p>شنبه تا چهارشنبه از ساعت 8 تا 5. <span>+01 (555) 000-0000</span></p>
                                        </div>
                                    </li>
                                </ul>
                                <div class="google-map mt-5">
                                    <div class="ratio ratio-21x9">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3151.840107317064!2d144.955925!3d-37.817214!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sin!4v1520156366883" allowfullscreen=""></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 ps-xl-5">
                        <div class="contact-form">
                            <div class="contact-head">
                                <h4>پیشنهادی درباره AFM دارید ؟ </h4>
                                <p>آن را با ما در میان بگذارید</p>
                            </div>
                            <form id="contact-form" action="send.php" method="POST">
                                <div class="row gx-3 gy-4">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">اسم کوچک</label>
                                            <input name="Name" id="name" placeholder="اسم  *" maxlength="20" class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">ایمیل شما</label>
                                            <input name="Email" id="email" placeholder="ایمیل  *" maxlength="20" class="form-control" type="email">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label class="form-label">موضوع</label>
                                            <input name="Subject" id="subject" placeholder="موضوع *" maxlength="25" class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-label">پیام شما</label>
                                            <textarea name="message" id="message" placeholder="پیام شما *" rows="4" maxlength="200" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="send">
                                            <button class="px-btn w-100" type="submit" value="Send">ارسال پیام</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End contactus -->
    </main>
    <!-- Main -->
    <!-- Snigle 1 -->
    <div id="project_1" class="px-modal mfp-hide">
        <div class="single-project-box">
            <div class="row align-items-start">
                <div class="col-lg-7">
                    <div class="row g-2">
                        <div class="col-6">
                            <img class="border" src="assets/img/project-2.jpg" title="" alt="">
                        </div>
                        <div class="col-6">
                            <img class="border" src="assets/img/project-3.jpg" title="" alt="">
                        </div>
                        <div class="col-6">
                            <img class="border" src="assets/img/project-4.jpg" title="" alt="">
                        </div>
                        <div class="col-6">
                            <img class="border" src="assets/img/project-1.jpg" title="" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 pt-4 pt-lg-0">
                    <h4>طراحی سایت برای راه اندازی بازاریابی</h4>
                    <p class="mb-3">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است. لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت.</p>
                    <div class="about-content">
                        <ul>
                            <li class="d-flex">
                                <span class="col-4 col-lg-3">نوع:</span>
                                <span>وبسایت</span>
                            </li>
                            <li class="d-flex">
                                <span class="col-4 col-lg-3">زبان:</span>
                                <span>PHP, HTML, CSS, JS</span>
                            </li>
                            <li class="d-flex">
                                <span class="col-4 col-lg-3">پلتفرم:</span>
                                <span>وردپرس</span>
                            </li>
                            <li class="d-flex">
                                <span class="col-4 col-lg-3">کشور:</span>
                                <span>ایران</span>
                            </li>
                            <li class="d-flex">
                                <span class="col-4 col-lg-3">آدرس اینترنتی:</span>
                                <span>www.example.com</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Snigle 1 -->
    <!-- Snigle 2 -->
    <div id="project_2" class="px-modal mfp-hide">
        <div class="single-project-box">
            <div class="row align-items-start">
                <div class="col-lg-7">
                    <div class="row g-2">
                        <div class="col-6">
                            <img class="border" src="assets/img/project-2.jpg" title="" alt="">
                        </div>
                        <div class="col-6">
                            <img class="border" src="assets/img/project-3.jpg" title="" alt="">
                        </div>
                        <div class="col-6">
                            <img class="border" src="assets/img/project-4.jpg" title="" alt="">
                        </div>
                        <div class="col-6">
                            <img class="border" src="assets/img/project-1.jpg" title="" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 pt-4 pt-lg-0">
                    <h4>طراحی سایت برای راه اندازی بازاریابی</h4>
                    <p class="mb-3">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است. لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت.</p>
                    <div class="about-content">
                        <ul>
                            <li class="d-flex">
                                <span class="col-4 col-lg-3">نوع:</span>
                                <span>وبسایت</span>
                            </li>
                            <li class="d-flex">
                                <span class="col-4 col-lg-3">زبان:</span>
                                <span>PHP, HTML, CSS, JS</span>
                            </li>
                            <li class="d-flex">
                                <span class="col-4 col-lg-3">پلتفرم:</span>
                                <span>وردپرس</span>
                            </li>
                            <li class="d-flex">
                                <span class="col-4 col-lg-3">کشور:</span>
                                <span>ایران</span>
                            </li>
                            <li class="d-flex">
                                <span class="col-4 col-lg-3">آدرس اینترنتی:</span>
                                <span>www.example.com</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Snigle 2 -->
    <!-- Snigle 3 -->
    <div id="project_3" class="px-modal mfp-hide">
        <div class="single-project-box">
            <div class="row align-items-start">
                <div class="col-lg-7">
                    <div class="row g-2">
                        <div class="col-6">
                            <img class="border" src="assets/img/project-3.jpg" title="" alt="">
                        </div>
                        <div class="col-6">
                            <img class="border" src="assets/img/project-2.jpg" title="" alt="">
                        </div>
                        <div class="col-6">
                            <img class="border" src="assets/img/project-4.jpg" title="" alt="">
                        </div>
                        <div class="col-6">
                            <img class="border" src="assets/img/project-1.jpg" title="" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 pt-4 pt-lg-0">
                    <h4>طراحی سایت برای راه اندازی بازاریابی</h4>
                    <p class="mb-3">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است. لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت.</p>
                    <div class="about-content">
                        <ul>
                            <li class="d-flex">
                                <span class="col-4 col-lg-3">نوع:</span>
                                <span>وبسایت</span>
                            </li>
                            <li class="d-flex">
                                <span class="col-4 col-lg-3">زبان:</span>
                                <span>PHP, HTML, CSS, JS</span>
                            </li>
                            <li class="d-flex">
                                <span class="col-4 col-lg-3">پلتفرم:</span>
                                <span>وردپرس</span>
                            </li>
                            <li class="d-flex">
                                <span class="col-4 col-lg-3">کشور:</span>
                                <span>ایران</span>
                            </li>
                            <li class="d-flex">
                                <span class="col-4 col-lg-3">آدرس اینترنتی:</span>
                                <span>www.example.com</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Snigle 3 -->
    <!-- Snigle 4 -->
    <div id="project_4" class="px-modal mfp-hide">
        <div class="single-project-box">
            <div class="row align-items-start">
                <div class="col-lg-7">
                    <div class="row g-2">
                        <div class="col-6">
                            <img class="border" src="assets/img/project-4.jpg" title="" alt="">
                        </div>
                        <div class="col-6">
                            <img class="border" src="assets/img/project-2.jpg" title="" alt="">
                        </div>
                        <div class="col-6">
                            <img class="border" src="assets/img/project-3.jpg" title="" alt="">
                        </div>
                        <div class="col-6">
                            <img class="border" src="assets/img/project-1.jpg" title="" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 pt-4 pt-lg-0">
                    <h4>طراحی سایت برای راه اندازی بازاریابی</h4>
                    <p class="mb-3">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است. لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت.</p>
                    <div class="about-content">
                        <ul>
                            <li class="d-flex">
                                <span class="col-4 col-lg-3">نوع:</span>
                                <span>وبسایت</span>
                            </li>
                            <li class="d-flex">
                                <span class="col-4 col-lg-3">زبان:</span>
                                <span>PHP, HTML, CSS, JS</span>
                            </li>
                            <li class="d-flex">
                                <span class="col-4 col-lg-3">پلتفرم:</span>
                                <span>وردپرس</span>
                            </li>
                            <li class="d-flex">
                                <span class="col-4 col-lg-3">کشور:</span>
                                <span>ایران</span>
                            </li>
                            <li class="d-flex">
                                <span class="col-4 col-lg-3">آدرس اینترنتی:</span>
                                <span>www.example.com</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Snigle 4 -->
    <!-- Snigle 5 -->
    <div id="project_5" class="px-modal mfp-hide">
        <div class="single-project-box">
            <div class="row align-items-start">
                <div class="col-lg-7">
                    <div class="row g-2">
                        <div class="col-6">
                            <img class="border" src="assets/img/project-4.jpg" title="" alt="">
                        </div>
                        <div class="col-6">
                            <img class="border" src="assets/img/project-2.jpg" title="" alt="">
                        </div>
                        <div class="col-6">
                            <img class="border" src="assets/img/project-3.jpg" title="" alt="">
                        </div>
                        <div class="col-6">
                            <img class="border" src="assets/img/project-1.jpg" title="" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 pt-4 pt-lg-0">
                    <h4>طراحی سایت برای راه اندازی بازاریابی</h4>
                    <p class="mb-3">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است. لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت.</p>
                    <div class="about-content">
                        <ul>
                            <li class="d-flex">
                                <span class="col-4 col-lg-3">نوع:</span>
                                <span>وبسایت</span>
                            </li>
                            <li class="d-flex">
                                <span class="col-4 col-lg-3">زبان:</span>
                                <span>PHP, HTML, CSS, JS</span>
                            </li>
                            <li class="d-flex">
                                <span class="col-4 col-lg-3">پلتفرم:</span>
                                <span>وردپرس</span>
                            </li>
                            <li class="d-flex">
                                <span class="col-4 col-lg-3">کشور:</span>
                                <span>ایران</span>
                            </li>
                            <li class="d-flex">
                                <span class="col-4 col-lg-3">آدرس اینترنتی:</span>
                                <span>www.example.com</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Snigle 5 -->
    <!-- Snigle 5 -->
    <div id="project_6" class="px-modal mfp-hide">
        <div class="single-project-box">
            <div class="row align-items-start">
                <div class="col-lg-7">
                    <div class="row g-2">
                        <div class="col-6">
                            <img class="border" src="assets/img/project-4.jpg" title="" alt="">
                        </div>
                        <div class="col-6">
                            <img class="border" src="assets/img/project-2.jpg" title="" alt="">
                        </div>
                        <div class="col-6">
                            <img class="border" src="assets/img/project-3.jpg" title="" alt="">
                        </div>
                        <div class="col-6">
                            <img class="border" src="assets/img/project-1.jpg" title="" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 pt-4 pt-lg-0">
                    <h4>طراحی سایت برای راه اندازی بازاریابی</h4>
                    <p class="mb-3">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است. لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت.</p>
                    <div class="about-content">
                        <ul>
                            <li class="d-flex">
                                <span class="col-4 col-lg-3">نوع:</span>
                                <span>وبسایت</span>
                            </li>
                            <li class="d-flex">
                                <span class="col-4 col-lg-3">زبان:</span>
                                <span>PHP, HTML, CSS, JS</span>
                            </li>
                            <li class="d-flex">
                                <span class="col-4 col-lg-3">پلتفرم:</span>
                                <span>وردپرس</span>
                            </li>
                            <li class="d-flex">
                                <span class="col-4 col-lg-3">کشور:</span>
                                <span>ایران</span>
                            </li>
                            <li class="d-flex">
                                <span class="col-4 col-lg-3">آدرس اینترنتی:</span>
                                <span>www.example.com</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Snigle 6 -->
    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-info">
                <div class="footer-avatar">
                    <img src="assets/img/mask.jpg" title="" alt="">
                </div>
                <h6>AFM هستم</h6>
            </div>
            <ul class="nav social-link">
                <li>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fab fa-facebook"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fab fa-pinterest"></i></a>
                </li>
            </ul>
            <p class="copyright">&copy طراحی شده توسط محمد محمد سلطانی</p>
        </div>
    </footer>
    <!-- End Footer -->
    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <script src="assets/vendor/appear/jquery.appear.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/one-page/scrollIt.min.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- end -->
</body>
<!-- Body End -->

</html>