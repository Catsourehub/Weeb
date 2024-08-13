<?php include $_SERVER['DOCUMENT_ROOT'].'/config/head.php';

?>
<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Hệ Thống Dịch Vụ COIN MASTER</title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="/phoenix/v1.9.0/assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/phoenix/v1.9.0/assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/phoenix/v1.9.0/assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="/phoenix/v1.9.0/assets/img/favicons/favicon.ico">
    <link rel="manifest" href="/phoenix/v1.9.0/assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="/phoenix/v1.9.0/assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <script src="/phoenix/v1.9.0/vendors/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="/phoenix/v1.9.0/vendors/simplebar/simplebar.min.js"></script>
    <script src="/phoenix/v1.9.0/assets/js/config.js"></script>

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="/phoenix/v1.9.0/vendors/simplebar/simplebar.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href="/phoenix/v1.9.0/assets/css/theme-rtl.min.css" type="text/css" rel="stylesheet" id="style-rtl">
    <link href="/phoenix/v1.9.0/assets/css/theme.min.css" type="text/css" rel="stylesheet" id="style-default">
    <link href="/phoenix/v1.9.0/assets/css/user-rtl.min.css" type="text/css" rel="stylesheet" id="user-style-rtl">
    <link href="/phoenix/v1.9.0/assets/css/user.min.css" type="text/css" rel="stylesheet" id="user-style-default">
    <script>
      var phoenixIsRTL = window.config.config.phoenixIsRTL;
      if (phoenixIsRTL) {
        var linkDefault = document.getElementById('style-default');
        var userLinkDefault = document.getElementById('user-style-default');
        linkDefault.setAttribute('disabled', true);
        userLinkDefault.setAttribute('disabled', true);
        document.querySelector('html').setAttribute('dir', 'rtl');
      } else {
        var linkRTL = document.getElementById('style-rtl');
        var userLinkRTL = document.getElementById('user-style-rtl');
        linkRTL.setAttribute('disabled', true);
        userLinkRTL.setAttribute('disabled', true);
      }
    </script>
  </head>

  <body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="alternate-landing" style="--phoenix-scroll-margin-top: 1.2rem;">
      <div class="bg-white sticky-top landing-navbar" data-navbar-shadow-on-scroll="data-navbar-shadow-on-scroll">
        <nav class="navbar navbar-expand-lg container-small px-3 px-lg-7 px-xxl-3"><a class="navbar-brand flex-1 flex-lg-grow-0" href="/">
            <div class="d-flex align-items-center"><img src="https://i.imgur.com/SfCF5Jn.png" alt="phoenix" width="77" />
            </div>
          </a>
          <div class="d-lg-none">
            <div class="theme-control-toggle fa-icon-wait px-2"><input class="form-check-input ms-0 theme-control-toggle-input" type="checkbox" data-theme-control="phoenixTheme" value="dark" id="themeControlToggleSm" /><label class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggleSm" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon" data-feather="moon"></span></label><label class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggleSm" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon" data-feather="sun"></span></label></div>
          </div><button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="border-bottom border-bottom-lg-0 mb-2">
              <div class="search-box d-inline d-lg-none">
                <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input class="form-control search-input search rounded-pill my-4" type="search" placeholder="Search" aria-label="Search" />
                  <span class="fas fa-search search-box-icon"></span>
                </form>
              </div>
            </div>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item border-bottom border-bottom-lg-0"><a class="nav-link lh-1 py-0 fs--1 fw-bold py-3 active" aria-current="page" href="#">Home</a></li>
              <li class="nav-item border-bottom border-bottom-lg-0"><a class="nav-link lh-1 py-0 fs--1 fw-bold py-3" href="/service/hosting/list">Tăng Spin</a></li>
            </ul>
            <div class="d-grid d-lg-flex align-items-center">
              <div class="nav-item d-flex align-items-center d-none d-lg-block pe-2">
              </div><a class="text-700 hover-text-1100 px-2 d-none d-lg-inline lh-sm" href="#" data-bs-toggle="modal" data-bs-target="#searchBoxModal"><span data-feather="search" style="height: 20px; width: 20px;"></span></a><a class="btn btn-link text-900 order-1 order-lg-0 ps-3 me-2" href="/auth/register">Đăng ký</a><a class="btn btn-phoenix-primary order-0" href="auth/login"><span class="fw-bold">Đăng nhập</span></a>
            </div>
          </div>
        </nav>
      </div>
      <div class="modal fade" id="searchBoxModal" tabindex="-1" aria-hidden="true" data-bs-backdrop="true" data-phoenix-modal="data-phoenix-modal" style="--phoenix-backdrop-opacity: 1;">
        <div class="modal-dialog">
          <div class="modal-content mt-15">
            <div class="modal-body p-0">
              <div class="chat-search-box">
                <div class="form-icon-container"><input class="form-control py-3 form-icon-input rounded-1" type="text" autofocus="autofocus" placeholder="Search People, Groups and Messages" /><span class="fa-solid fa-magnifying-glass fs--1 form-icon"></span></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <section class="pb-8 overflow-hidden" id="home">
        <div class="hero-header-container-alternate position-relative">
          <div class="container-small px-lg-7 px-xxl-3">
            <div class="row align-items-center">
              <div class="col-12 col-lg-6 pt-8 pb-6 position-relative z-index-5 text-center text-lg-start">
                <h1 class="fs-5 fs-md-6 fs-xl-7 fw-black mb-4"><span class="text-gradient-info me-3">Mua Spins </span>Coin<br /> Master</h1>
                <p class="mb-5 pe-xl-10">Mua Lượt Spin Coin Master chỉ với vài Click chuột đơn giản.</p><a class="btn btn-lg btn-primary rounded-pill me-3" href="/service/hosting/list" role="button">Mua spin ngay!</a>
              </div>
              <div class="col-12 col-lg-auto d-none d-lg-block">
                <div class="hero-image-container position-absolute h-100 end-0 d-flex align-items-center">
                  <div class="position-relative">
                    <div class="position-absolute end-0 hero-image-container-overlay" style="transform: skewY(-8deg)."></div><img class="position-absolute end-0 hero-image-container-bg" src="/phoenix/v1.9.0/assets/img/bg/bg-36.png" alt="" /><img class="w-100 d-dark-none rounded-2 hero-image-shadow" src="/phoenix/v1.9.0/assets/img/CCCOIN_auto_custom.jpg" alt="hero-header" /><img class="w-100 d-light-none rounded-2 hero-image-shadow" src="/phoenix/v1.9.0/assets/img/bg/bg-35.png" alt="hero-header" />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="container-small px-md-8 mb-8 d-lg-none">
            <div class="position-relative">
              <div class="position-absolute end-0 hero-image-container-overlay"></div><img class="position-absolute top-50 hero-image-container-bg" src="/phoenix/v1.9.0/assets/img/bg/bg-39.png" alt="" /><img class="img-fluid ms-auto d-dark-none rounded-2 hero-image-shadow" src="/phoenix/v1.9.0/assets/img/bg/bg-34.png" alt="hero-header" /><img class="img-fluid ms-auto d-light-none rounded-2 hero-image-shadow" src="/phoenix/v1.9.0/assets/img/bg/bg-35.png" alt="hero-header" />
            </div>
          </div>
        </div>
      </section>

      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section>
        <div class="container-small px-lg-7 px-xxl-3">
          <div class="row g-0">
            <div class="col-6 col-md-3">
              <div class="p-2 p-lg-5 d-flex flex-center h-100 border-1 border-dashed border-bottom border-end"><img class="img-fluid" src="https://vipshoptech.vn/v1.9.0/assets/img/logo/vstlogotet.png" alt="" /></div>
            </div>
            <div class="col-6 col-md-3">
              <div class="p-2 p-lg-5 d-flex flex-center h-100 border-1 border-dashed border-bottom border-end-md"><img class="img-fluid" src="https://th.bing.com/th/id/R.6df5aa04090a370d3eca02473477130c?rik=4jSTaV2BFLlPxg&pid=ImgRaw&r=0" alt="" /></div>
            </div>
            <div class="col-6 col-md-3">
              <div class="p-2 p-lg-5 d-flex flex-center h-100 border-1 border-dashed border-bottom border-end border-end-md"><img class="img-fluid" src="/phoenix/v1.9.0/assets/img/brand2/upwork.png" alt="" /></div>
            </div>
            <div class="col-6 col-md-3">
              <div class="p-2 p-lg-5 d-flex flex-center h-100 border-1 border-dashed border-bottom border-end-lg-0"><img class="img-fluid" src="/phoenix/v1.9.0/assets/img/brand2/facebook-f.png" alt="" /></div>
            </div>
           
          </div>
        </div><!-- end of .container-->
      </section><!-- <section> close ============================-->
      <!-- ============================================-->



      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="pt-13 pb-10" id="feature">
        <div class="container-small px-lg-7 px-xxl-3">
          <div class="text-center mb-10 mb-md-5">
            <h2 class="mb-3 lh-base">VÌ SAO NÊN CHỌN CHÚNG TÔI</h2>
            <p class="mb-0">Hệ Thống Mua Lượt Spin Coin Master #1 Việt Nam.</p>
            <div class="text-center mt-5"><a class="btn btn-outline-primary" href="#!">See more<span class="fa-solid fa-angle-right ms-2"></span></a></div>
          </div>
          <div class="row flex-between-center px-xl-11 mb-10 mb-md-9">
            <div class="col-md-6 order-1 order-md-0 text-center text-md-start">
              <h4 class="mb-3">MUA SPIN COIN TỰ ĐỘNG</h4>
              <p class="mb-5">Mua Lượt Spin Coin Master nhanh chóng, Website hoạt động hoàn toàn tự động 24/24. Bạn có thể mua Spin được mọi lúc.</p>
            </div>
            <div class="col-md-5 mb-5 mb-md-0 text-center"><img class="w-75 w-md-100 d-dark-none" src="/phoenix/v1.9.0/assets/img/spot-illustrations/34.png" alt="" /><img class="w-75 w-md-100 d-light-none" src="/phoenix/v1.9.0/assets/img/spot-illustrations/34_2.png" alt="" /></div>
          </div>
          <div class="row flex-between-center px-xl-11 mb-10 mb-md-9">
            <div class="col-md-6 order-1 order-md-0 text-center text-md-start">
              <h4 class="mb-3">TĂNG LEVEL NHANH CHÓNG</h4>
              <p class="mb-5">Mua thêm được rất nhiều lượt Spin Coin Master nhờ hệ thống hoạt động độc quyền tại Việt Nam. Bạn sẽ tăng Level rất nhanh.</p>
            </div>
            <div class="col-md-5 mb-5 mb-md-0 text-center"><img class="w-75 w-md-100 d-dark-none" src="/phoenix/v1.9.0/assets/img/spot-illustrations/35.png" alt="" /><img class="w-75 w-md-100 d-light-none" src="/phoenix/v1.9.0/assets/img/spot-illustrations/35_2.png" alt="" /></div>
          </div>
          <div class="row flex-between-center px-xl-11 false">
            <div class="col-md-6 order-1 order-md-0 text-center text-md-start">
              <h4 class="mb-3">HỖ TRỢ PREMIUM</h4>
              <p class="mb-5">Hỗ trợ khách hàng nhanh chóng khi mua lượt spin coin master. Khi có sự cố sẽ được xử lí một cách nhanh chóng nhất.</p>
            </div>
            <div class="col-md-5 mb-5 mb-md-0 text-center"><img class="w-75 w-md-100 d-dark-none" src="/phoenix/v1.9.0/assets/img/spot-illustrations/36.png" alt="" /><img class="w-75 w-md-100 d-light-none" src="/phoenix/v1.9.0/assets/img/spot-illustrations/36_2.png" alt="" /></div>
          </div>
        </div><!-- end of .container-->
      </section><!-- <section> close ============================-->
      <!-- ============================================-->



      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="pb-14 overflow-x-hidden">
        <div class="container-small px-lg-7 px-xxl-3">
          <div class="text-center mb-5 position-relative">
            <h5 class="text-info mb-3">Testimonial</h5>
            <h2 class="mb-2 lh-base">Khách hàng nói gì về chúng tôi
</h2>
          </div>
          <div class="carousel testimonial-carousel slide position-relative dark__bg-1100" id="carouselExampleIndicators" data-bs-ride="carousel">
            <div class="bg-holder d-none d-md-block" style="background-image:url(/phoenix/v1.9.0/assets/img/bg/39.png);background-size:186px;background-position:top 20px right 20px;"></div>
            <!--/.bg-holder-->
            <img class="position-absolute d-none d-lg-block" src="/phoenix/v1.9.0/assets/img/bg/bg-left-22.png" width="150" alt="" style="top: -100px; left: -70px" /><img class="position-absolute d-none d-lg-block" src="/phoenix/v1.9.0/assets/img/bg/bg-right-22.png" width="150" alt="" style="bottom: -80px; right: -80px" />
            <div class="carousel-inner">
              <div class="carousel-item text-center py-8 px-5 px-xl-15 active"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span>
                <h3 class="fw-semi-bold fst-italic mt-3 mb-8 w-xl-70 mx-auto lh-base">Chủ đề tuyệt vời, sự hỗ trợ tuyệt vời từ ThemeWagon với thời gian phản hồi thực sự nhanh! Cảm ơn!</h3>
                <div class="d-flex align-items-center justify-content-center gap-3 mx-auto">
                  <div class="avatar avatar-3xl ">
                    <img class="rounded-circle border border-2 border-primary" src="/phoenix/v1.9.0/assets/img/team/12.webp" alt="" />
                  </div>
                  <div class="text-start">
                    <h5>Johna Austin</h5>
                    <p class="mb-0">CEO</p>
                  </div>
                </div>
              </div>
              <div class="carousel-item text-center py-8 px-5 px-xl-15 false"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star-half-alt star-icon text-warning"></span>
                <h3 class="fw-semi-bold fst-italic mt-3 mb-8 w-xl-70 mx-auto lh-base">An excellent theme with fast support team to aid the development process! Thanks team Phoenix!</h3>
                <div class="d-flex align-items-center justify-content-center gap-3 mx-auto">
                  <div class="avatar avatar-3xl ">
                    <img class="rounded-circle border border-2 border-primary" src="/phoenix/v1.9.0/assets/img/team/13.webp" alt="" />
                  </div>
                  <div class="text-start">
                    <h5>Monica Gomez</h5>
                    <p class="mb-0">Founder</p>
                  </div>
                </div>
              </div>
              <div class="carousel-item text-center py-8 px-5 px-xl-15 false"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa-regular fa-star text-warning-300"></span>
                <h3 class="fw-semi-bold fst-italic mt-3 mb-8 w-xl-70 mx-auto lh-base">Amazing support system with quickest reply and steady communication of the concerned. Really loved working with Phoenix!</h3>
                <div class="d-flex align-items-center justify-content-center gap-3 mx-auto">
                  <div class="avatar avatar-3xl ">
                    <img class="rounded-circle border border-2 border-primary" src="/phoenix/v1.9.0/assets/img/team/14.webp" alt="" />
                  </div>
                  <div class="text-start">
                    <h5>Marc Chiasson</h5>
                    <p class="mb-0">CTO</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-indicators"><button class="active" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" aria-current="true" aria-label="Slide 1"></button><button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button><button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button></div>
          </div>
        </div><!-- end of .container-->
      </section><!-- <section> close ============================-->
     

      <section class="alternate-landing-team" id="team">
        <div class="position-absolute w-100 h-100 start-0 end-0 top-0 bg-soft-primary dark__bg-1000" style="transform: skewY(-6deg); transform-origin: right"></div>
        <div class="bg-holder d-none d-xl-block" style="background-image:url(/phoenix/v1.9.0/assets/img/bg/bg-left-23.png);background-size:auto;background-position:left center;"></div>
        <!--/.bg-holder-->
        <div class="bg-holder d-none d-xl-block" style="background-image:url(/phoenix/v1.9.0/assets/img/bg/bg-right-23.png);background-size:auto;background-position:right center;"></div>
        <!--/.bg-holder-->
        <div class="text-center mb-11 position-relative">
          <h5 class="text-info mb-3">Team</h5>
          <h2 class="mb-2">Đội ngũ nhỏ đằng sau thành công của chúng tôi</h2>
        </div>
        <div class="container-small position-relative">
          <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-6">
              <div class="row gx-3 gy-6 justify-content-center">
                <div class="col-sm-6 col-md-4">
                  <div class="text-center"> <img class="w-70 w-sm-100 rounded-4 mb-3" src="https://i.imgur.com/gZ8oLG1.jpg" alt="" />
                    <h4>Hieuvip22</h4>
                    <h5 class="fw-semi-bold">CEO</h5>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="bg-soft-primary dark__bg-1000 pb-10 overflow-hidden">
        <div class="container-small px-lg-7 px-xxl-3">
          <div class="position-absolute w-100 h-100 start-0 end-0" style="bottom: -350px; transform: skewY(-8deg); background: linear-gradient(102.27deg, #38ABFF 4.69%, #3874FF 106.27%)"></div>
          <div class="bg-holder" style="background-image:url(/phoenix/v1.9.0/assets/img/bg/bg-left-24.png);background-size:auto;background-position:left center;"></div>
          <!--/.bg-holder-->
          <div class="bg-holder" style="background-image:url(/phoenix/v1.9.0/assets/img/bg/bg-right-24.png);background-size:auto;background-position:right center;"></div>
          <!--/.bg-holder-->
          <div class="row justify-content-center">
            <div class="col-12 text-center">
              <div class="card py-md-9 px-md-13 border-0 z-index-1 shadow-lg">
                <div class="bg-holder" style="background-image:url(/phoenix/v1.9.0/assets/img/bg/bg-38.png);background-position:center;background-size:100%;"></div>
                <!--/.bg-holder-->
                <div class="card-body position-relative"><img class="img-fluid mb-5 d-dark-none" src="/phoenix/v1.9.0/assets/img/spot-illustrations/37.png" width="260" alt="..." /><img class="img-fluid mb-5 d-light-none" src="/phoenix/v1.9.0/assets/img/spot-illustrations/37_2.png" width="260" alt="..." />
                  <p class="fw-bold">2024 Premium Icons <span class="text-primary fs-2">.</span> Hãy tham gia với chúng tôi!</p>
                  <h1 class="fs-2 fs-sm-4 fs-lg-6 fw-bolder lh-sm mb-3">Join<span class="gradient-text-primary mx-2">Vipshoptech</span><span>Today</span></h1>
                  <form class="d-flex justify-content-center mb-3 px-xxl-15">
                    <div class="d-grid d-sm-block"></div><input class="form-control me-3" id="ctaEmail1" type="email" placeholder="Email" aria-describedby="ctaEmail1" /><button class="btn btn-primary" type="submit">Subscribe</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div><!-- end of .container-->
      </section><!-- <section> close ============================-->
      <!-- ============================================-->



      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="bg-1100 dark__bg-1000">
        <div class="container-small px-lg-7 px-xxl-3">
          <div class="row gx-xxl-8 gy-5 align-items-center mb-5">
            <div class="col-xl-auto text-center"><a href="#"><img src="https://i.imgur.com/SfCF5Jn.png" height="48" alt="" /></a></div>
            <div class="col-xl-auto flex-1">
              <ul class="list-unstyled d-flex justify-content-center flex-wrap mb-0 border-end-xl border-dashed border-800 gap-3 gap-xl-8 pe-xl-5 pe-xxl-8 w-75 w-md-100 mx-auto">
                <li><a class="text-300 dark__text-300" href="https://www.facebook.com/hieuvip22pr/">Liên hệ</a></li>
                <li><a class="text-300 dark__text-300" href="/auth/login">Đăng Nhập</a></li>
                <li><a class="text-300 dark__text-300" href="/auth/register">Đăng Ký</a></li>
                <li><a class="text-300 dark__text-300" href="https://vipshoptech.vn/policy">Policy</a></li>
              </ul>
            </div>
            <div class="col-xl-auto">
              <div class="d-flex align-items-center justify-content-center gap-8"><a class="text-white dark__text-white" href="https://www.facebook.com/hieuvip22pr/"> <span class="fa-brands fa-facebook"></span></a><a class="text-white dark__text-white" href="#!"> <span class="fa-brands fa-twitter"></span></a><a class="text-white dark__text-white" href="#!"> <span class="fa-brands fa-linkedin-in"></span></a></div>
            </div>
          </div>
          <hr class="text-800" />
          <div class="d-sm-flex flex-between-center text-center">
            <p class="text-600 mb-0">Copyright © Company Name</p>
            <p class="text-600 mb-0">Made with love by <a href="https://www.facebook.com/hieuvip22pr/">Hieuvip22</a></p>
          </div>
        </div><!-- end of .container-->
      </section><!-- <section> close ============================-->
      <!-- ============================================-->

    </main><!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->

    <div class="offcanvas offcanvas-end settings-panel border-0" id="settings-offcanvas" tabindex="-1" aria-labelledby="settings-offcanvas">
      <div class="offcanvas-header align-items-start border-bottom flex-column">
        <div class="pt-1 w-100 mb-6 d-flex justify-content-between align-items-start">
          <div>
            <h5 class="mb-2 me-2 lh-sm"><span class="fas fa-palette me-2 fs-0"></span>Infomation</h5>
            <p class="mb-0 fs--1">Mã nguồn được thiết kế bơi HIEUVIP22<br>
                HIEUVIP22 - NẾU BẠN MUỐN SỞ HỮU 1 WEBSITE TƯƠNG TỰ, LIÊN HỆ : facebook.com/hieuvip22pr
            </p>
          </div><button class="btn p-1 fw-bolder" type="button" data-bs-dismiss="offcanvas" aria-label="Close"><span class="fas fa-times fs-0"> </span></button>
        </div><a href="https://www.facebook.com/hieuvip22pr/" class="btn btn-phoenix-secondary w-100" data-theme-control="reset"><span class="fas fa-arrows-rotate me-2 fs--2"></span>Liên hệ</a>
      </div>
 
    </div><a class="card setting-toggle" href="#settings-offcanvas" data-bs-toggle="offcanvas">
      <div class="card-body d-flex align-items-center px-2 py-1">
        <div class="position-relative rounded-start" style="height:34px;width:28px">
          <div class="settings-popover"><span class="ripple"><span class="fa-spin position-absolute all-0 d-flex flex-center"><span class="icon-spin position-absolute all-0 d-flex flex-center"><svg width="20" height="20" viewBox="0 0 20 20" fill="#ffffff" xmlns="http://www.w3.org/2000/svg"><path d="M19.7369 12.3941L19.1989 12.1065C18.4459 11.7041 18.0843 10.8487 18.0843 9.99495C18.0843 9.14118 18.4459 8.28582 19.1989 7.88336L19.7369 7.59581C19.9474 7.47484 20.0316 7.23291 19.9474 7.03131C19.4842 5.57973 18.6843 4.28943 17.6738 3.20075C17.5053 3.03946 17.2527 2.99914 17.0422 3.12011L16.393 3.46714C15.6883 3.84379 14.8377 3.74529 14.1476 3.3427C14.0988 3.31422 14.0496 3.28621 14.0002 3.25868C13.2568 2.84453 12.7055 2.10629 12.7055 1.25525V0.70081C12.7055 0.499202 12.5371 0.297594 12.2845 0.257272C10.7266 -0.105622 9.16879 -0.0653007 7.69516 0.257272C7.44254 0.297594 7.31623 0.499202 7.31623 0.70081V1.23474C7.31623 2.09575 6.74999 2.8362 5.99824 3.25599C5.95774 3.27861 5.91747 3.30159 5.87744 3.32493C5.15643 3.74527 4.26453 3.85902 3.53534 3.45302L2.93743 3.12011C2.72691 2.99914 2.47429 3.03946 2.30587 3.20075C1.29538 4.28943 0.495411 5.57973 0.0322686 7.03131C-0.051939 7.23291 0.0322686 7.47484 0.242788 7.59581L0.784376 7.8853C1.54166 8.29007 1.92694 9.13627 1.92694 9.99495C1.92694 10.8536 1.54166 11.6998 0.784375 12.1046L0.242788 12.3941C0.0322686 12.515 -0.051939 12.757 0.0322686 12.9586C0.495411 14.4102 1.29538 15.7005 2.30587 16.7891C2.47429 16.9504 2.72691 16.9907 2.93743 16.8698L3.58669 16.5227C4.29133 16.1461 5.14131 16.2457 5.8331 16.6455C5.88713 16.6767 5.94159 16.7074 5.99648 16.7375C6.75162 17.1511 7.31623 17.8941 7.31623 18.7552V19.2891C7.31623 19.4425 7.41373 19.5959 7.55309 19.696C7.64066 19.7589 7.74815 19.7843 7.85406 19.8046C9.35884 20.0925 10.8609 20.0456 12.2845 19.7729C12.5371 19.6923 12.7055 19.4907 12.7055 19.2891V18.7346C12.7055 17.8836 13.2568 17.1454 14.0002 16.7312C14.0496 16.7037 14.0988 16.6757 14.1476 16.6472C14.8377 16.2446 15.6883 16.1461 16.393 16.5227L17.0422 16.8698C17.2527 16.9907 17.5053 16.9504 17.6738 16.7891C18.7264 15.7005 19.4842 14.4102 19.9895 12.9586C20.0316 12.757 19.9474 12.515 19.7369 12.3941ZM10.0109 13.2005C8.1162 13.2005 6.64257 11.7893 6.64257 9.97478C6.64257 8.20063 8.1162 6.74905 10.0109 6.74905C11.8634 6.74905 13.3792 8.20063 13.3792 9.97478C13.3792 11.7893 11.8634 13.2005 10.0109 13.2005Z" fill="#2A7BE4"></path></svg></span></span></span></div>
        </div><small class="text-uppercase text-700 fw-bold py-2 pe-2 ps-1 rounded-end">Infomation</small>
      </div>
    </a>

    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="/phoenix/v1.9.0/vendors/popper/popper.min.js"></script>
    <script src="/phoenix/v1.9.0/vendors/bootstrap/bootstrap.min.js"></script>
    <script src="/phoenix/v1.9.0/vendors/anchorjs/anchor.min.js"></script>
    <script src="/phoenix/v1.9.0/vendors/is/is.min.js"></script>
    <script src="/phoenix/v1.9.0/vendors/fontawesome/all.min.js"></script>
    <script src="/phoenix/v1.9.0/vendors/lodash/lodash.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="/phoenix/v1.9.0/vendors/list.js/list.min.js"></script>
    <script src="/phoenix/v1.9.0/vendors/feather-icons/feather.min.js"></script>
    <script src="/phoenix/v1.9.0/vendors/dayjs/dayjs.min.js"></script>
    <script src="/phoenix/v1.9.0/assets/js/phoenix.js"></script>
    <script src="/phoenix/v1.9.0/vendors/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="/phoenix/v1.9.0/vendors/isotope-packery/packery-mode.pkgd.min.js"></script>
    <script src="/phoenix/v1.9.0/vendors/bigpicture/BigPicture.js"></script>
    <script src="/phoenix/v1.9.0/vendors/lottie/lottie.min.js"></script>
    <script src="/phoenix/v1.9.0/vendors/countup/countUp.umd.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyARdVcREeBK44lIWnv5-iPijKqvlSAVwbw&callback=initMap" async></script>
  </body>

</html>