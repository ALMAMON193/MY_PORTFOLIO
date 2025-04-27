
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mamunur Rashid Mamun</title>

    <link rel="shortcut icon" href="http://mrmamun.rf.gd/images/asset_img/header_image_frame-01.png" type="image/x-icon">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- MDB -->

    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.4.0/mdb.dark.min.css" rel="stylesheet" />

    <!-- Custom css -->
   @include('frontend.partials.style');

    <!-- Fonts -->
    <link href="http://fonts.cdnfonts.com/css/google-sans" rel="stylesheet">

    <!-- Toastr CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
          integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
          integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- include summernote css -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
</head>

<body>

<!-- Navbar -->
<nav class="py-0 bg-dark navbar navbar-expand-lg navbar-dark text-light fixed-top">
    <!-- Container wrapper -->
    <div class="container">

        <!-- Toggle button -->
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>

        <!-- Navbar brand -->
        <a class="navbar-brand" href="http://mrmamun.rf.gd">
            <img src="http://mrmamun.rf.gd/images/asset_img/logo.png" height="25" alt="M R Mamun" />
        </a>

        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse ms-3" id="navbarSupportedContent">

            <!-- Left links -->
            <ul class="mb-2 navbar-nav me-auto mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="http://mrmamun.rf.gd/#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://mrmamun.rf.gd/#services">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://mrmamun.rf.gd/#skills">Skills</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://mrmamun.rf.gd/#projects">Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://mrmamun.rf.gd/#videos">Videos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://mrmamun.rf.gd/#qualifications">Qualifications</a>
                </li>
                <li class="nav-item d-flex align-items-center ms-lg-3">
                    <div class="">
                        <a class="px-3 py-2 nav-link btn btn-outline-light gr-btn" data-bs-toggle="modal"
                           data-bs-target="#ContactMe">Contact</a>
                    </div>
                </li>
            </ul>
            <!-- Left links -->
        </div>
        <!-- Collapsible wrapper -->

        <!-- Right elements -->
        <div class="profile d-flex align-items-center">
            <!-- Icon -->
            <a class="text-reset me-3" href="https://www.facebook.com/mamun20172018/" target="blank">
                <i class="fab fa-facebook"></i>
            </a>
            <a class="text-reset me-3" href="https://www.linkedin.com/in/m-r-mamun/" target="blank">
                <i class="fab fa-linkedin"></i>
            </a>

            <a class="p-0 text-reset btn btn-rounded shadow-2" href="https://github.com/mr-mamun-50" target="blank"
               style="border: 1px solid #b5b5b5">
                <i class="mx-2 fab fa-github fa-lg"></i>
                <img src="https://avatars.githubusercontent.com/u/76045663?v=4" class="rounded-circle" height="30"
                     alt="Profile" />
            </a>

        </div>
        <!-- Right elements -->
    </div>
    <!-- Container wrapper -->
</nav>
<!-- Navbar -->


<!-- Modal for Contact me -->
<div class="modal fade" id="ContactMe" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
     aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Contact Me</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="http://mrmamun.rf.gd/message/send" method="POST">
                <input type="hidden" name="_token" value="OGXSBgJe4lL43lujgbFEBTyrfdjdVOcPQZZEc36L">                <div class="modal-body">

                    <!-- Name input -->
                    <div class="mb-4 form-outline">
                        <input type="text" name="name" id="form4Example1" class="form-control" required />
                        <label class="form-label" for="form4Example1">Name <span class="text-danger">*</span></label>
                    </div>

                    <!-- Email input -->
                    <div class="mb-4 form-outline">
                        <input type="email" name="email" id="form4Example2" class="form-control" required />
                        <label class="form-label" for="form4Example2">Email address
                            <span class="text-danger">*</span></label>
                    </div>

                    <div class="mb-4">
                        <textarea name="message" class="summernote_contact" required></textarea>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-dark shadow-0" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </div>
            </form>
        </div>
    </div>
</div>





<!-- Messenger Chat Plugin Code -->
<div id="fb-root"></div>

<!-- Your Chat Plugin code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>

<script>
    var chatbox = document.getElementById('fb-customer-chat');
    chatbox.setAttribute("page_id", "102580414724369");
    chatbox.setAttribute("attribution", "biz_inbox");
</script>

<!-- Your SDK code -->
<script>
    window.fbAsyncInit = function() {
        FB.init({
            xfbml: true,
            version: 'v15.0'
        });
    };

    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>


<section class="banner d-md-flex align-items-center" id="home">
    <div class="container d-md-flex align-items-center position-relative">

        <div class="mt-5 intro col-md-6">
            <h2 class="hi text-warning">Hi<span class="hand_wave">👋</span></h2>
            <h1 class="text-white heading">I'm Mamunur Rashid Mamun</h1>
            <p class="designation">Web App Developer || Mobile App Developer</p>

            <p class="mt-4 short-desc"><i class="fas fa-quote-left"></i><br> I work with perfection and find a simple
                solution
                to every difficult task.I always
                avoid complexity.I love to do everything simply and smartly.
                <br><i class="fas fa-quote-right"></i>
            </p>

            <div class="buttuns my-sm-4">

                <button class="btn btn-light me-2" type="button" data-bs-toggle="modal" data-bs-target="#hireMe"><i
                        class="fas fa-user-check fa-xl me-1"></i> Hire Me</button>

                <a href="#services" class="btn btn-outline-light"><i class="fa-solid fa-compass fa-xl me-1"></i>
                    Explore</a>
            </div>
        </div>

        <div id="carouselExampleCrossfade" class="px-1 py-5 carousel slide carousel-fade col-md-6 mt-md-5 px-md-2"
             data-mdb-ride="carousel">



            <div class="carousel-inner rounded-5">
                <div class="carousel-item active" data-mdb-interval="4000">
                    <img class="img-fluid banner-picture" src="http://mrmamun.rf.gd/images/asset_img/macbook_js.png" alt="">
                </div>
                <div class="carousel-item" data-mdb-interval="5000">
                    <img class="img-fluid banner-picture" src="http://mrmamun.rf.gd/images/asset_img/macbook_php.png" alt="">
                </div>
                <div class="carousel-item" data-mdb-interval="4000">
                    <img class="img-fluid banner-picture" src="http://mrmamun.rf.gd/images/asset_img/macbook_dart.png" alt="">
                </div>
            </div>


        </div>
    </div>

    <div class="bottom-0 left-0 smokeShape position-absolute d-none d-lg-block"></div>
</section>




<section class="pt-10 services" id="services">
    <div class="container">
        <h2 class="text-center text-primary fw-bold">SERVICES</h2>
        <div class="mb-3 underline d-flex justify-content-center">
            <img class="flip" src="http://mrmamun.rf.gd/images/asset_img/underline.gif" alt="">
            <img src="http://mrmamun.rf.gd/images/asset_img/underline.gif" alt="">
        </div>

        <div class="owl-carousel">
            <div class="px-5">
                <img class="img-fluid" src="http://mrmamun.rf.gd/images/asset_img/w-a-d.png" alt="">
            </div>
            <div class="px-5">
                <img class="img-fluid" src="http://mrmamun.rf.gd/images/asset_img/m-a-d.png" alt="">
            </div>
            <div class="px-5">
                <img class="img-fluid" src="http://mrmamun.rf.gd/images/asset_img/w-h.png" alt="">
            </div>
            <div class="px-5">
                <img class="img-fluid" src="http://mrmamun.rf.gd/images/asset_img/g-d.png" alt="">
            </div>
        </div>
    </div>
</section>




<section class="pt-10 skills" id="skills">
    <div class="container">
        <h2 class="text-center text-primary fw-bold">SKILLS</h2>
        <div class="mb-3 underline d-flex justify-content-center">
            <img class="flip" src="http://mrmamun.rf.gd/images/asset_img/underline.gif" alt="">
            <img src="http://mrmamun.rf.gd/images/asset_img/underline.gif" alt="">
        </div>

        <div class="row">

            <div class="col-lg-6">
                <div class="mt-3 card card-body">

                    <div class="d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#web_dev"
                         role="button" aria-expanded="false" aria-controls="web_dev">

                <span class="skill-title"><i class="fa-solid fa-globe fa-lg me-1 text-primary"></i> Full-Stack
                    Web Development</span>
                        <a class="btn btn-outline-info btn-floating"><i class="mt-3 fa-solid fa-angle-down fa-2xl"></i></a>
                    </div>

                    <div class="mt-3 collapse row" id="web_dev">
                        <hr>
                        <p class="mt-2 mb-0">Front-End</p>
                        <hr>
                        <div class="my-2 col-lg-6 col-md-4">
                            <div class="py-3 card skill-card card-body">

                                <div class="d-flex align-items-center">
                                    <img class="skill-logo" src="http://mrmamun.rf.gd/images/skill_logos/1659637491-react.svg"
                                         alt="...">
                                    <span class="ms-2 skill-name">React</span>
                                </div>
                            </div>
                        </div>
                        <div class="my-2 col-lg-6 col-md-4">
                            <div class="py-3 card skill-card card-body">

                                <div class="d-flex align-items-center">
                                    <img class="skill-logo" src="http://mrmamun.rf.gd/images/skill_logos/1722150664-vuejs.svg"
                                         alt="...">
                                    <span class="ms-2 skill-name">Vue.js</span>
                                </div>
                            </div>
                        </div>
                        <div class="my-2 col-lg-6 col-md-4">
                            <div class="py-3 card skill-card card-body">

                                <div class="d-flex align-items-center">
                                    <img class="skill-logo" src="http://mrmamun.rf.gd/images/skill_logos/1659639091-javascript.svg"
                                         alt="...">
                                    <span class="ms-2 skill-name">JavaScript</span>
                                </div>
                            </div>
                        </div>
                        <div class="my-2 col-lg-6 col-md-4">
                            <div class="py-3 card skill-card card-body">

                                <div class="d-flex align-items-center">
                                    <img class="skill-logo" src="http://mrmamun.rf.gd/images/skill_logos/1722150262-tailwind-css.svg"
                                         alt="...">
                                    <span class="ms-2 skill-name">Tailwind CSS</span>
                                </div>
                            </div>
                        </div>
                        <div class="my-2 col-lg-6 col-md-4">
                            <div class="py-3 card skill-card card-body">

                                <div class="d-flex align-items-center">
                                    <img class="skill-logo" src="http://mrmamun.rf.gd/images/skill_logos/1659676257-bootstrap.svg"
                                         alt="...">
                                    <span class="ms-2 skill-name">Bootstrap</span>
                                </div>
                            </div>
                        </div>
                        <div class="my-2 col-lg-6 col-md-4">
                            <div class="py-3 card skill-card card-body">

                                <div class="d-flex align-items-center">
                                    <img class="skill-logo" src="http://mrmamun.rf.gd/images/skill_logos/1722150281-material-ui.svg"
                                         alt="...">
                                    <span class="ms-2 skill-name">Material UI</span>
                                </div>
                            </div>
                        </div>
                        <div class="my-2 col-lg-6 col-md-4">
                            <div class="py-3 card skill-card card-body">

                                <div class="d-flex align-items-center">
                                    <img class="skill-logo" src="http://mrmamun.rf.gd/images/skill_logos/1659700112-html.svg"
                                         alt="...">
                                    <span class="ms-2 skill-name">HTML</span>
                                </div>
                            </div>
                        </div>
                        <div class="my-2 col-lg-6 col-md-4">
                            <div class="py-3 card skill-card card-body">

                                <div class="d-flex align-items-center">
                                    <img class="skill-logo" src="http://mrmamun.rf.gd/images/skill_logos/1659700131-css.svg"
                                         alt="...">
                                    <span class="ms-2 skill-name">CSS</span>
                                </div>
                            </div>
                        </div>

                        <p class="mt-3 mb-0">Back-End</p>
                        <hr>
                        <div class="my-2 col-lg-6 col-md-4">
                            <div class="py-3 card skill-card card-body">

                                <div class="d-flex align-items-center">
                                    <img class="skill-logo" src="http://mrmamun.rf.gd/images/skill_logos/1659636154-laravel.svg"
                                         alt="...">
                                    <span class="ms-2 skill-name">Laravel</span>
                                </div>
                            </div>
                        </div>
                        <div class="my-2 col-lg-6 col-md-4">
                            <div class="py-3 card skill-card card-body">

                                <div class="d-flex align-items-center">
                                    <img class="skill-logo" src="http://mrmamun.rf.gd/images/skill_logos/1659700510-php.svg"
                                         alt="...">
                                    <span class="ms-2 skill-name">PHP</span>
                                </div>
                            </div>
                        </div>
                        <div class="my-2 col-lg-6 col-md-4">
                            <div class="py-3 card skill-card card-body">

                                <div class="d-flex align-items-center">
                                    <img class="skill-logo" src="http://mrmamun.rf.gd/images/skill_logos/1722345920-express-js.svg"
                                         alt="...">
                                    <span class="ms-2 skill-name">Express JS</span>
                                </div>
                            </div>
                        </div>
                        <div class="my-2 col-lg-6 col-md-4">
                            <div class="py-3 card skill-card card-body">

                                <div class="d-flex align-items-center">
                                    <img class="skill-logo" src="http://mrmamun.rf.gd/images/skill_logos/1722150918-node-js.svg"
                                         alt="...">
                                    <span class="ms-2 skill-name">Node JS</span>
                                </div>
                            </div>
                        </div>
                        <div class="my-2 col-lg-6 col-md-4">
                            <div class="py-3 card skill-card card-body">

                                <div class="d-flex align-items-center">
                                    <img class="skill-logo" src="http://mrmamun.rf.gd/images/skill_logos/1722150221-firebase.svg"
                                         alt="...">
                                    <span class="ms-2 skill-name">Firebase</span>
                                </div>
                            </div>
                        </div>

                        <p class="mt-3 mb-0">Database</p>
                        <hr>
                        <div class="my-2 col-lg-6 col-md-4">
                            <div class="py-3 card skill-card card-body">

                                <div class="d-flex align-items-center">
                                    <img class="skill-logo" src="http://mrmamun.rf.gd/images/skill_logos/1659701206-mysql.svg"
                                         alt="...">
                                    <span class="ms-2 skill-name">MySQL</span>
                                </div>
                            </div>
                        </div>
                        <div class="my-2 col-lg-6 col-md-4">
                            <div class="py-3 card skill-card card-body">

                                <div class="d-flex align-items-center">
                                    <img class="skill-logo" src="http://mrmamun.rf.gd/images/skill_logos/1722150976-mongo-db.svg"
                                         alt="...">
                                    <span class="ms-2 skill-name">Mongo DB</span>
                                </div>
                            </div>
                        </div>
                        <div class="my-2 col-lg-6 col-md-4">
                            <div class="py-3 card skill-card card-body">

                                <div class="d-flex align-items-center">
                                    <img class="skill-logo" src="http://mrmamun.rf.gd/images/skill_logos/1659702167-postgresql.svg"
                                         alt="...">
                                    <span class="ms-2 skill-name">PostgreSQL</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-6">
                <div class="mt-3 card card-body">

                    <div class="d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#mobile_dev"
                         role="button" aria-expanded="false" aria-controls="mobile_dev">

                <span class="skill-title"><i class="fas fa-mobile-alt fa-lg me-2 text-secondary"></i> Mobile App
                    Development</span>
                        <a class="btn btn-outline-info btn-floating"> <i class="mt-3 fa-solid fa-angle-down fa-2xl"></i></a>
                    </div>

                    <div class="mt-3 collapse row" id="mobile_dev">
                        <hr>
                        <p class="mt-2 mb-0">Front-End</p>
                        <hr>
                        <div class="my-2 col-lg-6 col-md-4">
                            <div class="py-3 card skill-card card-body">

                                <div class="d-flex align-items-center">
                                    <img class="skill-logo" src="http://mrmamun.rf.gd/images/skill_logos/1659639757-flutter.svg"
                                         alt="...">
                                    <span class="ms-2 skill-name">Flutter</span>
                                </div>
                            </div>
                        </div>
                        <div class="my-2 col-lg-6 col-md-4">
                            <div class="py-3 card skill-card card-body">

                                <div class="d-flex align-items-center">
                                    <img class="skill-logo" src="http://mrmamun.rf.gd/images/skill_logos/1659703131-dart.svg"
                                         alt="...">
                                    <span class="ms-2 skill-name">Dart</span>
                                </div>
                            </div>
                        </div>

                        <p class="mt-3 mb-0">Back-End</p>
                        <hr>
                        <div class="my-2 col-lg-6 col-md-4">
                            <div class="py-3 card skill-card card-body">

                                <div class="d-flex align-items-center">
                                    <img class="skill-logo" src="http://mrmamun.rf.gd/images/skill_logos/1659636154-laravel.svg"
                                         alt="...">
                                    <span class="ms-2 skill-name">Laravel</span>
                                </div>
                            </div>
                        </div>
                        <div class="my-2 col-lg-6 col-md-4">
                            <div class="py-3 card skill-card card-body">

                                <div class="d-flex align-items-center">
                                    <img class="skill-logo" src="http://mrmamun.rf.gd/images/skill_logos/1722345859-express-js.svg"
                                         alt="...">
                                    <span class="ms-2 skill-name">Express JS</span>
                                </div>
                            </div>
                        </div>
                        <div class="my-2 col-lg-6 col-md-4">
                            <div class="py-3 card skill-card card-body">

                                <div class="d-flex align-items-center">
                                    <img class="skill-logo" src="http://mrmamun.rf.gd/images/skill_logos/1722151097-node-js.svg"
                                         alt="...">
                                    <span class="ms-2 skill-name">Node JS</span>
                                </div>
                            </div>
                        </div>
                        <div class="my-2 col-lg-6 col-md-4">
                            <div class="py-3 card skill-card card-body">

                                <div class="d-flex align-items-center">
                                    <img class="skill-logo" src="http://mrmamun.rf.gd/images/skill_logos/1659703329-firebase.svg"
                                         alt="...">
                                    <span class="ms-2 skill-name">Firebase</span>
                                </div>
                            </div>
                        </div>

                        <p class="mt-3 mb-0">Database</p>
                        <hr>
                        <div class="my-2 col-lg-6 col-md-4">
                            <div class="py-3 card skill-card card-body">

                                <div class="d-flex align-items-center">
                                    <img class="skill-logo" src="http://mrmamun.rf.gd/images/skill_logos/1659703368-mysql.svg"
                                         alt="...">
                                    <span class="ms-2 skill-name">MySQL</span>
                                </div>
                            </div>
                        </div>
                        <div class="my-2 col-lg-6 col-md-4">
                            <div class="py-3 card skill-card card-body">

                                <div class="d-flex align-items-center">
                                    <img class="skill-logo" src="http://mrmamun.rf.gd/images/skill_logos/1722151174-mongo-db.svg"
                                         alt="...">
                                    <span class="ms-2 skill-name">Mongo DB</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-6">
                <div class="mt-3 card card-body">

                    <div class="d-flex justify-content-between align-items-center" data-bs-toggle="collapse"
                         href="#programming_languages" role="button" aria-expanded="false"
                         aria-controls="programming_languages">

                <span class="skill-title"><i class="fas fa-brain fa-lg me-1 text-info"></i> Programming
                    Languages</span>
                        <a class="btn btn-outline-info btn-floating"><i class="mt-3 fa-solid fa-angle-down fa-2xl"></i></a>
                    </div>

                    <div class="mt-3 collapse row" id="programming_languages">
                        <hr>
                        <div class="my-2 col-lg-6 col-md-4">
                            <div class="py-3 card skill-card card-body">

                                <div class="d-flex align-items-center">
                                    <img class="skill-logo" src="http://mrmamun.rf.gd/images/skill_logos/1722150304-python.svg"
                                         alt="...">
                                    <span class="ms-2 skill-name">Python</span>
                                </div>
                            </div>
                        </div>
                        <div class="my-2 col-lg-6 col-md-4">
                            <div class="py-3 card skill-card card-body">

                                <div class="d-flex align-items-center">
                                    <img class="skill-logo" src="http://mrmamun.rf.gd/images/skill_logos/1659703655-javascript.svg"
                                         alt="...">
                                    <span class="ms-2 skill-name">JavaScript</span>
                                </div>
                            </div>
                        </div>
                        <div class="my-2 col-lg-6 col-md-4">
                            <div class="py-3 card skill-card card-body">

                                <div class="d-flex align-items-center">
                                    <img class="skill-logo" src="http://mrmamun.rf.gd/images/skill_logos/1659642074-java.svg"
                                         alt="...">
                                    <span class="ms-2 skill-name">Java</span>
                                </div>
                            </div>
                        </div>
                        <div class="my-2 col-lg-6 col-md-4">
                            <div class="py-3 card skill-card card-body">

                                <div class="d-flex align-items-center">
                                    <img class="skill-logo" src="http://mrmamun.rf.gd/images/skill_logos/1659703568-c.svg"
                                         alt="...">
                                    <span class="ms-2 skill-name">C</span>
                                </div>
                            </div>
                        </div>
                        <div class="my-2 col-lg-6 col-md-4">
                            <div class="py-3 card skill-card card-body">

                                <div class="d-flex align-items-center">
                                    <img class="skill-logo" src="http://mrmamun.rf.gd/images/skill_logos/1659703588-c.svg"
                                         alt="...">
                                    <span class="ms-2 skill-name">C++</span>
                                </div>
                            </div>
                        </div>
                        <div class="my-2 col-lg-6 col-md-4">
                            <div class="py-3 card skill-card card-body">

                                <div class="d-flex align-items-center">
                                    <img class="skill-logo" src="http://mrmamun.rf.gd/images/skill_logos/1659703699-php.svg"
                                         alt="...">
                                    <span class="ms-2 skill-name">PHP</span>
                                </div>
                            </div>
                        </div>
                        <div class="my-2 col-lg-6 col-md-4">
                            <div class="py-3 card skill-card card-body">

                                <div class="d-flex align-items-center">
                                    <img class="skill-logo" src="http://mrmamun.rf.gd/images/skill_logos/1659703759-dart.svg"
                                         alt="...">
                                    <span class="ms-2 skill-name">Dart</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-6">
                <div class="mt-3 card card-body">

                    <div class="d-flex justify-content-between align-items-center" data-bs-toggle="collapse"
                         href="#graphic_design" role="button" aria-expanded="false" aria-controls="graphic_design">

                <span class="skill-title"><i class="fas fa-crop fa-lg me-1 text-warning"></i>
                    Graphic Design</span>
                        <a class="btn btn-outline-info btn-floating"><i class="mt-3 fa-solid fa-angle-down fa-2xl"></i>
                        </a>
                    </div>

                    <div class="mt-3 collapse row" id="graphic_design">
                        <hr>
                        <div class="my-2 col-lg-6 col-md-4">
                            <div class="py-3 card skill-card card-body">

                                <div class="d-flex align-items-center">
                                    <img class="skill-logo" src="http://mrmamun.rf.gd/images/skill_logos/1659642289-adobe-illustrator.svg"
                                         alt="...">
                                    <span class="ms-2 skill-name">Adobe Illustrator</span>
                                </div>
                            </div>
                        </div>
                        <div class="my-2 col-lg-6 col-md-4">
                            <div class="py-3 card skill-card card-body">

                                <div class="d-flex align-items-center">
                                    <img class="skill-logo" src="http://mrmamun.rf.gd/images/skill_logos/1659703923-adobe-photoshop.svg"
                                         alt="...">
                                    <span class="ms-2 skill-name">Adobe Photoshop</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-6">
                <div class="mt-3 card card-body">

                    <div class="d-flex justify-content-between align-items-center" data-bs-toggle="collapse"
                         href="#office_softwares" role="button" aria-expanded="false" aria-controls="office_softwares">

                <span class="skill-title"><i class="fas fa-file-alt fa-lg me-1 text-success"></i> Office
                    Softwares</span>
                        <a class="btn btn-outline-info btn-floating"><i class="mt-3 fa-solid fa-angle-down fa-2xl"></i>
                        </a>
                    </div>

                    <div class="mt-3 collapse row" id="office_softwares">
                        <hr>
                        <div class="my-2 col-lg-6 col-md-4">
                            <div class="py-3 card skill-card card-body">

                                <div class="d-flex align-items-center">
                                    <img class="skill-logo" src="http://mrmamun.rf.gd/images/skill_logos/1659642347-microsoft-word.svg"
                                         alt="...">
                                    <span class="ms-2 skill-name">Microsoft Word</span>
                                </div>
                            </div>
                        </div>
                        <div class="my-2 col-lg-6 col-md-4">
                            <div class="py-3 card skill-card card-body">

                                <div class="d-flex align-items-center">
                                    <img class="skill-logo" src="http://mrmamun.rf.gd/images/skill_logos/1659704093-microsoft-excel.svg"
                                         alt="...">
                                    <span class="ms-2 skill-name">Microsoft Excel</span>
                                </div>
                            </div>
                        </div>
                        <div class="my-2 col-lg-6 col-md-4">
                            <div class="py-3 card skill-card card-body">

                                <div class="d-flex align-items-center">
                                    <img class="skill-logo" src="http://mrmamun.rf.gd/images/skill_logos/1659704129-microsoft-access.svg"
                                         alt="...">
                                    <span class="ms-2 skill-name">Microsoft Access</span>
                                </div>
                            </div>
                        </div>
                        <div class="my-2 col-lg-6 col-md-4">
                            <div class="py-3 card skill-card card-body">

                                <div class="d-flex align-items-center">
                                    <img class="skill-logo" src="http://mrmamun.rf.gd/images/skill_logos/1659704172-microsoft-powerpoint.svg"
                                         alt="...">
                                    <span class="ms-2 skill-name">Microsoft Powerpoint</span>
                                </div>
                            </div>
                        </div>
                        <div class="my-2 col-lg-6 col-md-4">
                            <div class="py-3 card skill-card card-body">

                                <div class="d-flex align-items-center">
                                    <img class="skill-logo" src="http://mrmamun.rf.gd/images/skill_logos/1659704202-microsoft-teams.svg"
                                         alt="...">
                                    <span class="ms-2 skill-name">Microsoft Teams</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-6">
                <div class="mt-3 card card-body">

                    <div class="d-flex justify-content-between align-items-center" data-bs-toggle="collapse"
                         href="#other_skills" role="button" aria-expanded="false" aria-controls="other_skills">

                <span class="skill-title"><i class="fas fa-fire fa-lg me-1 text-danger"></i> Other
                    Skills</span>
                        <a class="btn btn-outline-info btn-floating"><i class="mt-3 fa-solid fa-angle-down fa-2xl"></i>
                        </a>
                    </div>

                    <div class="mt-3 collapse row" id="other_skills">
                        <hr>
                        <div class="my-2 col-lg-6 col-md-4">
                            <div class="py-3 card skill-card card-body">

                                <div class="d-flex align-items-center">
                                    <img class="skill-logo" src="http://mrmamun.rf.gd/images/skill_logos/1659704755-trainer.svg"
                                         alt="...">
                                    <span class="ms-2 skill-name">Trainer</span>
                                </div>
                            </div>
                        </div>
                        <div class="my-2 col-lg-6 col-md-4">
                            <div class="py-3 card skill-card card-body">

                                <div class="d-flex align-items-center">
                                    <img class="skill-logo" src="http://mrmamun.rf.gd/images/skill_logos/1659705122-website-hosting.svg"
                                         alt="...">
                                    <span class="ms-2 skill-name">Website Hosting</span>
                                </div>
                            </div>
                        </div>
                        <div class="my-2 col-lg-6 col-md-4">
                            <div class="py-3 card skill-card card-body">

                                <div class="d-flex align-items-center">
                                    <img class="skill-logo" src="http://mrmamun.rf.gd/images/skill_logos/1659704469-camtasia.svg"
                                         alt="...">
                                    <span class="ms-2 skill-name">Video editing</span>
                                </div>
                            </div>
                        </div>
                        <div class="my-2 col-lg-6 col-md-4">
                            <div class="py-3 card skill-card card-body">

                                <div class="d-flex align-items-center">
                                    <img class="skill-logo" src="http://mrmamun.rf.gd/images/skill_logos/1659642559-premere-pro.svg"
                                         alt="...">
                                    <span class="ms-2 skill-name">Video editing</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<section class="pt-10 projects" id="projects">
    <div class="container">
        <h2 class="text-center text-primary fw-bold">PROJECTS</h2>
        <div class="mb-3 underline d-flex justify-content-center">
            <img class="flip" src="http://mrmamun.rf.gd/images/asset_img/underline.gif" alt="">
            <img src="http://mrmamun.rf.gd/images/asset_img/underline.gif" alt="">
        </div>

        <div class="flex-wrap d-flex justify-content-between">

            <div class="p-2 mb-2 col-lg-4 col-md-6">
                <div class="card project-card w-100 h-100">
                    <img src="http://mrmamun.rf.gd/images/project_thumbnails/1737724354-nemch-appointment-cms.png" class="card-img-top"
                         alt="...">

                    <div class="card-header">
                        <h5 class="card-title">NEMCH (Appointment + CMS)</h5>
                        <h6 class="mb-2">An website &amp; appointment system of NEMCH</h6>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Built an appointment system for doctors that includes advanced search, booking, and payment collection, etc. It also has an SMS service, two-step verification, an API key, and more. I also built a custom CMS to manage content and documents.</p>
                    </div>
                    <div class="pb-3 card-footer text-end">
                        <a href="https://github.com/mr-mamun-50" class="btn btn-dark me-1" target="blank">Github</a>
                        <a href="https://www.nemc.edu.bd" class="btn btn-primary" target="blank">Live
                            Project</a>
                    </div>
                </div>
            </div>
            <div class="p-2 mb-2 col-lg-4 col-md-6">
                <div class="card project-card w-100 h-100">
                    <img src="http://mrmamun.rf.gd/images/project_thumbnails/1740641541-kanbird-crm.png" class="card-img-top"
                         alt="...">

                    <div class="card-header">
                        <h5 class="card-title">KanBird CRM</h5>
                        <h6 class="mb-2">A Customer Relationship Management Software</h6>
                    </div>
                    <div class="card-body">
                        <p class="card-text">The KanBird CRM system aims to provide a seamless experience for company owners to manage their customer interactions, sales leads, service tickets, and billing in one place.</p>
                    </div>
                    <div class="pb-3 card-footer text-end">
                        <a href="https://www.linkedin.com/in/m-r-mamun/details/projects" class="btn btn-dark me-1" target="blank">Github</a>
                        <a href="https://kanbird.com" class="btn btn-primary" target="blank">Live
                            Project</a>
                    </div>
                </div>
            </div>
            <div class="p-2 mb-2 col-lg-4 col-md-6">
                <div class="card project-card w-100 h-100">
                    <img src="http://mrmamun.rf.gd/images/project_thumbnails/1733255177-easy-ride.jpg" class="card-img-top"
                         alt="...">

                    <div class="card-header">
                        <h5 class="card-title">Easy Ride</h5>
                        <h6 class="mb-2">A riding app</h6>
                    </div>
                    <div class="card-body">
                        <p class="card-text">A riding app with dynamic fare calculation, user authentication, device verification, local storage &amp; location tracking, riding history and earnings management, and an admin panel for rider and vehicle management that focuses on subscriptions.</p>
                    </div>
                    <div class="pb-3 card-footer text-end">
                        <a href="https://www.linkedin.com/in/m-r-mamun/details/projects" class="btn btn-dark me-1" target="blank">Github</a>
                        <a href="https://play.google.com/store/apps/details?id=com.easyride" class="btn btn-primary" target="blank">Live
                            Project</a>
                    </div>
                </div>
            </div>
            <div class="p-2 mb-2 col-lg-4 col-md-6">
                <div class="card project-card w-100 h-100">
                    <img src="http://mrmamun.rf.gd/images/project_thumbnails/1722150162-gramgp-clinic.png" class="card-img-top"
                         alt="...">

                    <div class="card-header">
                        <h5 class="card-title">GramGP Clinic</h5>
                        <h6 class="mb-2">A clinic management software of BRPHI</h6>
                    </div>
                    <div class="card-body">
                        <p class="card-text">This is a clinic management software of Bangladesh Rural Primary Health Initiative (BRPHI). Multiple clinics can be managed by this software. Currently, 20+ clinics in Bangladesh are managed by this software.</p>
                    </div>
                    <div class="pb-3 card-footer text-end">
                        <a href="https://github.com/mr-mamun-50" class="btn btn-dark me-1" target="blank">Github</a>
                        <a href="https://www.linkedin.com/posts/m-r-mamun_brphis-gramgp-emr-software-has-been-successfully-activity-7132249095364108288-3okl?utm_source=share&amp;utm_medium=member_desktop" class="btn btn-primary" target="blank">Live
                            Project</a>
                    </div>
                </div>
            </div>
            <div class="p-2 mb-2 col-lg-4 col-md-6">
                <div class="card project-card w-100 h-100">
                    <img src="http://mrmamun.rf.gd/images/project_thumbnails/1722150150-smart-up.png" class="card-img-top"
                         alt="...">

                    <div class="card-header">
                        <h5 class="card-title">Smart UP</h5>
                        <h6 class="mb-2">A Union Management Software in Bangladesh</h6>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Smart UP is a Union Management Software designed to streamline operations and improve efficiency for unions in Bangladesh by automating tax collection, license issuance, certificate generation, and income and expense tracking.</p>
                    </div>
                    <div class="pb-3 card-footer text-end">
                        <a href="https://github.com/mr-mamun-50" class="btn btn-dark me-1" target="blank">Github</a>
                        <a href="https://www.linkedin.com/in/m-r-mamun/details/projects/" class="btn btn-primary" target="blank">Live
                            Project</a>
                    </div>
                </div>
            </div>
            <div class="p-2 mb-2 col-lg-4 col-md-6">
                <div class="card project-card w-100 h-100">
                    <img src="http://mrmamun.rf.gd/images/project_thumbnails/1722150137-tles-mu.png" class="card-img-top"
                         alt="...">

                    <div class="card-header">
                        <h5 class="card-title">TLES MU</h5>
                        <h6 class="mb-2">A teaching-learning evaluation system of MU</h6>
                    </div>
                    <div class="card-body">
                        <p class="card-text">A software solution designed to assess student achievement and teacher effectiveness based on Bloom&#039;s levels. Through graphical and statistical analyses, TLES MU provides insights into both student performance and teaching quality.</p>
                    </div>
                    <div class="pb-3 card-footer text-end">
                        <a href="https://tlesmu.000webhostapp.com" class="btn btn-dark me-1" target="blank">Github</a>
                        <a href="https://www.linkedin.com/posts/m-r-mamun_thrilled-to-announce-the-completion-of-activity-7215046037424496642-5DLW?utm_source=share&amp;utm_medium=member_desktop" class="btn btn-primary" target="blank">Live
                            Project</a>
                    </div>
                </div>
            </div>

        </div>
        <div class="my-4 text-center">
            <a href="http://mrmamun.rf.gd/more_projects" class="btn btn-lg btn-outline-light gr-btn">See more
                projects...</a>
        </div>
    </div>
</section>




<section class="pt-10 Videos" id="videos">
    <div class="container">
        <h2 class="text-center text-primary fw-bold">YOUTUBE VIDEOS</h2>
        <div class="mb-3 underline d-flex justify-content-center">
            <img class="flip" src="http://mrmamun.rf.gd/images/asset_img/underline.gif" alt="">
            <img src="http://mrmamun.rf.gd/images/asset_img/underline.gif" alt="">
        </div>

        <div class="flex-wrap d-flex justify-content-between">

            <div class="p-2 col-lg-4 col-md-6">
                <div class="card video-card w-100 h-100">

                    <iframe class="card-img-top" width="100%" height="240"
                            src="https://www.youtube.com/embed/jRq-cGMqmVk" title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>

                    <div class="card-footer">
                        <h5 class="card-title">Laravel 9 multi auth | Laravel user and admin login register</h5>
                    </div>
                </div>
            </div>
            <div class="p-2 col-lg-4 col-md-6">
                <div class="card video-card w-100 h-100">

                    <iframe class="card-img-top" width="100%" height="240"
                            src="https://www.youtube.com/embed/PlcgoFnRaCw" title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>

                    <div class="card-footer">
                        <h5 class="card-title">Laravel crash course with CRUD app | laravel bangla tutorial | laravel beginner tutorial</h5>
                    </div>
                </div>
            </div>
            <div class="p-2 col-lg-4 col-md-6">
                <div class="card video-card w-100 h-100">

                    <iframe class="card-img-top" width="100%" height="240"
                            src="https://www.youtube.com/embed/iKkfsGuO7II?si=qsP-VprxMjq9OsB2" title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>

                    <div class="card-footer">
                        <h5 class="card-title">Shop Management App by Flutter-Laravel bangla | Introduction | ফ্লাটার-লারাভেল</h5>
                    </div>
                </div>
            </div>

        </div>
        <div class="my-4 text-center">
            <a href="http://mrmamun.rf.gd/more_videos" class="btn btn-lg btn-outline-light gr-btn">See more videos...</a>
        </div>
    </div>
</section>



<section class="pt-10 qualifications" id="qualifications">
    <div class="container">
        <h2 class="text-center text-primary fw-bold">QUALIFICATIONS</h2>
        <div class="mb-3 underline d-flex justify-content-center">
            <img class="flip" src="http://mrmamun.rf.gd/images/asset_img/underline.gif" alt="">
            <img src="http://mrmamun.rf.gd/images/asset_img/underline.gif" alt="">
        </div>

        <div class="flex-wrap d-flex justify-content-between">

            <div class="p-2 col-lg-4 col-md-6">
                <div class="card video-card w-100 h-100">

                    <img class="my-3 card-img-top" src="http://mrmamun.rf.gd/images/asset_img/certificate.svg"
                         alt="" style="height:120px">
                    <h5 class="py-3 text-center text-white bg-primary">
                        Training & Certifications
                    </h5>
                    <div class="py-3 card-body position-relative">
                        <div class="card_content card_height">
                            <ol><li class=""><b>Cross Platform App Development</b>&nbsp;from SDMGA, ICT division, Bangladesh</li><li class=""><b>Web development with Bootstrap-Laravel</b> from&nbsp;SJ Innovation LLC</li><li class=""><b>Graphic Design</b> from&nbsp;National Academy for Computer Training and Research</li><li class="complete"><b>Certificate in Computer Office Application</b>&nbsp;from Bangladesh Technical Education Board</li><li class=""><b>Graphic Design </b>from LEDP, ICT Division, Bangladesh</li><li class=""><span style="font-weight: bolder;">Fundamentals of Digital Marketing</span>&nbsp;from Google</li></ol>                            </div>
                        <div class="bottom-0 pt-4 show_btn position-absolute end-0 w-100 text-end rounded-5">
                            <button class="pb-3 btn btn-link see_more">See more...</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="p-2 col-lg-4 col-md-6">
                <div class="card video-card w-100 h-100">

                    <img class="my-3 card-img-top" src="http://mrmamun.rf.gd/images/asset_img/briefcase.svg"
                         alt="" style="height:120px">
                    <h5 class="py-3 text-center text-white bg-primary">
                        Experiences
                    </h5>
                    <div class="py-3 card-body position-relative">
                        <div class="card_content card_height">
                            <ol><li class="complete">3+ years of working experience with&nbsp;<span style="font-weight: bolder;">React</span>&nbsp;-&nbsp;<span style="font-weight: bolder;">Laravel</span></li><li class="complete">2+ years of working&nbsp;experience with cross-platform app development by&nbsp;<span style="font-weight: bolder;">Flutter</span></li><li class="complete">Experienced with managing data by&nbsp;<span style="font-weight: bolder;">MySQL</span>&nbsp;and&nbsp;<span style="font-weight: bolder;">PostgreSQL</span></li><li class=""><span style="font-weight: bolder;">Trainer&nbsp;</span>at National Strategy for the Development of Statistics (NSDS) Implementation Support Project</li><li class="complete">Solved almost&nbsp;<span style="font-weight: bolder;">500 programming problems</span>&nbsp;in various online judge</li><li class="complete">4+ years of working&nbsp;experience in&nbsp;<span style="font-weight: bolder;">Graphic Design&nbsp;</span>and&nbsp;<span style="font-weight: bolder;">Video Editing</span></li></ol>                            </div>
                        <div class="bottom-0 pt-4 show_btn position-absolute end-0 w-100 text-end rounded-5">
                            <button class="pb-3 btn btn-link see_more">See more...</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="p-2 col-lg-4 col-md-6">
                <div class="card video-card w-100 h-100">

                    <img class="my-3 card-img-top" src="http://mrmamun.rf.gd/images/asset_img/trophy.svg" alt=""
                         style="height:120px">
                    <h5 class="py-3 text-center text-white bg-primary">
                        Achievement & Participation
                    </h5>
                    <div class="py-3 card-body position-relative">
                        <div class="card_content card_height">
                            <ol><li class=""><b>Global Finalist </b>at NASA Space App Challange 2023</li><li class="complete"><b>Winner</b> at 'SJ Innovation Hackathon 2021'</li><li class="">Participated in 'Brainstation 23 Hackathon' of 'SUST SWE Technovent 2023'</li><li class="">Participated in Leading University Hackathon 'TechStorm 4' 2021</li><li class="">Participated in 'BDApps National Hackathon 2022'</li><li class="">Participated in Leading University Hackathon 'Bitfest' 2022</li></ol>                            </div>
                        <div class="bottom-0 pt-4 show_btn position-absolute end-0 w-100 text-end rounded-5">
                            <button class="pb-3 btn btn-link see_more">See more...</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>



<section class="container pt-10 d-flex justify-content-center">
    <div class="col-md-10 col-lg-8 rounded-9">

        <div class="card rounded-9 hire-me-bg">
            <div class="py-5 card-body d-md-flex align-items-center px-md-5">

                <div class=" col-md-8 col-lg-9">
                    <h2 class="mb-3 card-title text-warning">Hire Me!</h2>
                    <p class="text-white card-text">If you think my skills and activities are suitable for your project
                        then click
                        on 'HIRE ME' button to hire me...</p>
                </div>

                <div class="mt-3 text-end col-md-4 col-lg-3">
                    <button class="btn btn-primary btn-rounded btn-lg" type="button" data-bs-toggle="modal"
                            data-bs-target="#hireMe"><i class="fas fa-user-check me-1"></i> HIRE ME</button>
                </div>

            </div>
        </div>
    </div>
</section>


<!-- Modal for hire me -->
<div class="modal fade" id="hireMe" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
     aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Hire Me</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="http://mrmamun.rf.gd/hire_me/submit" method="POST">
                <input type="hidden" name="_token" value="OGXSBgJe4lL43lujgbFEBTyrfdjdVOcPQZZEc36L">                    <div class="modal-body">

                    <div class="row">

                        <div class="col-md-6">
                            <div class="mb-4 form-outline">
                                <input type="text" name="name" id="form4Example1" class="form-control"
                                       required />
                                <label class="form-label" for="form4Example1">Name <span
                                        class="text-danger">*</span></label>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-4 form-outline">
                                <input type="email" name="email" id="form4Example2" class="form-control"
                                       required />
                                <label class="form-label" for="form4Example2">Email address
                                    <span class="text-danger">*</span></label>
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-md-6">
                            <div class="mb-4 form-outline">
                                <input type="link" name="website" id="form4Example2" class="form-control" />
                                <label class="form-label" for="form4Example2">Website</label>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-4 input-group">
                                    <span class="input-group-text text-muted" id="basic-addon1">Budget
                                        <span class="text-danger ms-1">*</span></span>
                                <select class="form-control" name="budget" id="" required>
                                    <option disabled selected> Select one</option>
                                    <option value="$100 - $300"> $100 - $300</option>
                                    <option value="$300 - $500"> $300 - $500</option>
                                    <option value="$500 - $1000"> $500 - $1000</option>
                                    <option value="$1000+"> $1000+</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="mb-4">
                        <textarea name="requirements" class="summernote" required></textarea>
                    </div>

                    <!-- Checkbox -->
                    <div class="form-check">
                        <input class="form-check-input me-2" name="sent_copy" type="checkbox" value="1"
                               id="form4Example4" checked />
                        <label class="form-check-label" for="form4Example4">
                            Send me a copy of this message
                        </label>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-dark shadow-0" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<section class="pt-10" id="footer">
    <footer class="bg-black text-light">

        <!-- Section: Social media -->
        <div class="p-3 border-bottom">
            <div class="container d-flex justify-content-center justify-content-lg-between align-items-center">
                <!-- Left -->
                <div class="me-5 d-none d-lg-block">
                    <span>Get connected with me on social networks:</span>
                </div>
                <!-- Left -->

                <!-- Right -->
                <div>
                    <a class="m-0 mx-1 btn btn-primary btn-floating" style="background-color: #3b5998;"
                       href="https://www.facebook.com/mamun20172018/" role="button" target="blank"><i
                            class="fab fa-facebook-f fa-lg"></i></a>

                    <!-- Twitter -->
                    <a class="m-0 mx-1 btn btn-primary btn-floating" style="background-color: #55acee;"
                       href="https://twitter.com/Mamun36009945" role="button" target="blank"><i
                            class="fab fa-twitter fa-lg"></i></a>

                    <!-- Instagram -->
                    <a class="m-0 mx-1 btn btn-primary btn-floating" style="background-color: #ac2bac;"
                       href="https://www.instagram.com/mr_mamun___/" role="button" target="blank"><i
                            class="fab fa-instagram fa-lg"></i></a>

                    <!-- Linkedin -->
                    <a class="m-0 mx-1 btn btn-primary btn-floating" style="background-color: #0082ca;"
                       href="https://www.linkedin.com/in/m-r-mamun/" role="button" target="blank"><i
                            class="fab fa-linkedin-in fa-lg"></i></a>

                    <!-- Github -->
                    <a class="m-0 mx-1 btn btn-primary btn-floating" style="background-color: #333333;"
                       href="https://github.com/mr-mamun-50" role="button" target="blank"><i
                            class="fab fa-github fa-lg"></i></a>
                </div>
                <!-- Right -->
            </div>
        </div>
        <!-- Section: Social media -->


        <!-- Grid container -->
        <div class="container p-4 pb-0">
            <!-- Section: Form -->
            <div class="">
                <div class="row">

                    <div class="my-4 col-md-4 px-lg-4 my-md-3">
                        <h6 class="mb-4 text-uppercase fw-bold text-info">
                            <i class="fas fa-address-book me-1"></i> Contact Me
                        </h6>

                        <form action="http://mrmamun.rf.gd/message/send" method="POST" class="contact-form">
                            <input type="hidden" name="_token" value="OGXSBgJe4lL43lujgbFEBTyrfdjdVOcPQZZEc36L">                            <!-- Name input -->
                            <div class="mb-3 form-outline">
                                <input type="text" name="name" id="form4Example1"
                                       class="form-control form-control-sm" />
                                <label class="form-label text-light" for="form4Example1">Name</label>
                            </div>

                            <!-- Email input -->
                            <div class="mb-3 form-outline">
                                <input type="email" name="email" id="form4Example2"
                                       class="form-control form-control-sm" />
                                <label class="form-label text-light" for="form4Example2">Email address</label>
                            </div>

                            <!-- Message input -->
                            <div class="mb-3 form-outline">
                                <textarea name="message" class="form-control form-control-sm" id="form4Example3" rows="3"></textarea>
                                <label class="form-label text-light" for="form4Example3">Message</label>
                            </div>

                            <!-- Submit button -->
                            <button type="submit" class="mb-4 btn btn-primary btn-block"> Send Message
                                <i class="fas fa-paper-plane ms-1"></i></button>
                        </form>
                    </div>

                    <div class="my-4 col-md-4 px-lg-4 my-md-3">
                        <h6 class="mb-4 text-uppercase fw-bold text-info">
                            <i class="fas fa-address-card me-1"></i> My Address
                        </h6>

                        <ul class="list-group">
                            <li class="px-0 bg-transparent border-0 list-group-item text-light"><i
                                    class="fa fa-home me-2"></i>3103,
                                Sylhet, Bangladesh
                            </li>
                            <li class="px-0 bg-transparent border-0 list-group-item text-light"><i
                                    class="fa fa-envelope me-2"></i><a class="text-light"
                                                                       href="mailto:mrmamun20162017@gmail.com">mrmamun20162017@gmail.com</a>
                            </li>
                            <li class="px-0 bg-transparent border-0 list-group-item text-light"><i
                                    class="fa fa-phone me-2"></i><a class="text-light" href="tel:+8801765700825">+880
                                    1765 700 825</a>
                            </li>
                        </ul>
                    </div>

                    <div class="my-4 col-md-4 px-lg-4 my-md-3">
                        <h6 class="mb-4 text-uppercase fw-bold text-info">
                            <i class="fas fa-map-marker-alt me-1"></i> I'm Here
                        </h6>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57903.17217897352!2d91.78922189373958!3d24.899746388443194!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375054d3d270329f%3A0xf58ef93431f67382!2sSylhet!5e0!3m2!1sen!2sbd!4v1659899004201!5m2!1sen!2sbd"
                            width="100%" height="210px" style="border:0; border-radius:10px" allowfullscreen=""
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

            </div>
            <!-- Section: Form -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="p-3 fw-light small border-top" style="background-color: rgba(0, 0, 0, 0.2);">
            <div class="container text-end">
                Copyright ©
                <script>
                    document.write(new Date().getFullYear())
                </script>.
                All Rights Reserved. Design and Developed by
                <a href="https://github.com/mr-mamun-50" target="blank"><b>M R Mamun</b></a>
            </div>
        </div>
        <!-- Copyright -->
    </footer>

    <!-- Back to top button -->
    <button type="button" class="btn btn-light btn-floating btn-lg" id="btn-back-to-top">
        <i class="fas fa-arrow-up"></i>
    </button>
</section>

<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- Bootstrap 5 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
</script>

<!-- MDB -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.4.0/mdb.min.js"></script>

<!-- Owl Carousel JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    $('.owl-carousel').owlCarousel({
        margin: 10,
        loop: true,
        autoplay: true,
        autoplayTimeout: 4000, //5000ms = 5s
        autoplayHoverPause: false,
        autoplaySpeed: 1000,
        smartSpeed: 500,
        responsive: {
            0: {
                items: 1,
                nav: false
            },
            600: {
                items: 2,
                nav: false
            },
            1000: {
                items: 3,
                nav: true
            }
        }
    })
</script>

<!-- Typer JS -->
<script async src="https://unpkg.com/typer-dot-js@0.1.0/typer.js"></script>

<!-- include summernote js -->
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

<!-- Summernote script -->
<script>
    $('.summernote').summernote({
        placeholder: 'Please describe your requirements <span class="text-danger">*</span>',
        tabsize: 4,
        height: 200
    });
</script>
<script>
    $('.summernote_contact').summernote({
        placeholder: 'Your message <span class="text-danger">*</span>',
        tabsize: 4,
        height: 200
    });
</script>

<!-- Sweetalert js -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Toastr js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
</script>


<script>
    $(document).ready(function() {
        $(".see_more").click(function() {
            $(".card_content").removeClass("card_height");
            $(".see_more").hide();
        });
    });
</script>



<script>
    $(window).on('load scroll', function() {

        $('section').each(function() {

            let top = $(window).scrollTop();
            let height = $(this).height();
            let id = $(this).attr('id');
            let offset = $(this).offset().top - 200;

            if (top > offset && top < offset + height) {
                $('.navbar ul li a').removeClass('active');
                $('.navbar').find(`[href="http://mrmamun.rf.gd/#${id}"]`).addClass('active');
            }
        });

    });
</script>


<script>
    //Get the button
    let mybutton = document.getElementById("btn-back-to-top");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {
        scrollFunction();
    };

    function scrollFunction() {
        if (
            document.body.scrollTop > 20 ||
            document.documentElement.scrollTop > 20
        ) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }
    // When the user clicks on the button, scroll to the top of the document
    mybutton.addEventListener("click", backToTop);

    function backToTop() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>
</body>

</html>



