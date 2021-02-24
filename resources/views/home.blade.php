@extends('index')
@section('content')
    <!--  ======================= Start Main Area ================================ -->
    <main class="site-main">


    <!--  ======================= Start Banner Area =======================  -->
    <section class="site-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 site-title">
                <h3 class="title-text">Greenwich University </h3>
                <h1 class="title-text text-uppercase">Event in month</h1>
                <div class="site-buttons">
                    <div class="d-flex justify-content-center flex-row flex-wrap">
                        <button type="button" class="btn button primary-button mr-4 text-uppercase">View more</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 banner-image">
                <img src="public/frontend/img/banner/home.jpg" alt="banner-img" class="img-fluid">
            </div>
        </div>
    </div>
    </section>
    <!--  ======================= End Banner Area =======================  -->

    <!--  ========================= About Area ==========================  -->

    <section class="about-area">
    <div class="container-fluid">
    <div class="col-xl-6 col-lg-12 col-md-12">
        <div class="row">
            <center><h2 class="text-uppercase " id="view">View</h3></center>
                </div>
            </div>
        </div>
    </div>
    </section>

    <!--  ========================= End About Area ==========================  -->

    <!--  ======================== Brand Area ==============================  -->

 
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://via.placeholder.com/1920x530" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://via.placeholder.com/1920x530" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://via.placeholder.com/1920x530" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

    <!--  ======================== End Brand Area ==============================  -->

    <!--  ====================== Start Services Area =============================  -->

    <section class="services-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center services-title">
                <h1 class="text-uppercase ">Services Offers</h1>
                <p class="para">
                    There are many variations of passages of Lorem Ipsum available, but the majority have
                    suffered alteration in some form, by injected humour
                </p>
            </div>
        </div>
        <div class="container services-list">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="services">
                        <div class="sevices-img text-center py-4">
                            <img src="./img/services/s1.png" alt="Services-1">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title text-uppercase font-roboto">Wp developer</h5>
                            <p class="card-text text-secondary">
                                Some quick example text to build on the card
                                title and make up
                                the bulk of the card's content.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="services">
                        <div class="sevices-img text-center py-4">
                            <img src="./img/services/s2.png" alt="Services-2">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title text-uppercase font-roboto">ux/ui desing</h5>
                            <p class="card-text text-secondary">
                                Some quick example text to build on the card
                                title and make up
                                the bulk of the card's content.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="services">
                        <div class="sevices-img text-center py-4">
                            <img src="./img/services/s3.png" alt="Services-3">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title text-uppercase font-roboto">web design</h5>
                            <p class="card-text text-secondary">
                                Some quick example text to build on the card
                                title and make up
                                the bulk of the card's content.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="services">
                        <div class="sevices-img text-center py-4">
                            <img src="./img/services/s4.png" alt="Services-4">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title text-uppercase font-roboto">seo optimize</h5>
                            <p class="card-text text-secondary">
                                Some quick example text to build on the card
                                title and make up
                                the bulk of the card's content.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>

    <!--  ====================== End Services Area =============================  -->

    <!--  ======================= Project Area =============================  -->

    <section class="project-area">
    <div class="container">
        <div class="project-title pb-5">
            <h1 class="text-uppercase title-h1">Recently Done Project</h1>
            <h1 class="text-uppercase title-h1">Quality Work</h1>
        </div>

        <div class="button-group">
            <button type="button" class="active" id="btn1" data-filter="*">All</button>
            <button type="button" data-filter=".popular">Popular</button>
            <button type="button" data-filter=".latest">Latest</button>
            <button type="button" data-filter=".following">Following</button>
            <button type="button" data-filter=".upcoming">Upcoming</button>
        </div>

        <div class="row grid">
            <div class="col-lg-4 col-md-6 col-sm-12 element-item latest">
                <div class="our-project">
                    <div class="img">
                        <a class="test-popup-link" href="./img/portfolio/p1.jpg">
                            <img src="./img/portfolio/p1.jpg" alt="portfolio-1" class="img-fluid">
                        </a>
                    </div>
                    <div class="title py-4">
                        <h4 class="text-uppercase">Minimul Desing</h4>
                        <span class="text-secondary">Latest, Portfolio</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 element-item popular">
                <div class="our-project">
                    <div class="img">
                        <a class="test-popup-link" href="./img/portfolio/p2.jpg">
                            <img src="./img/portfolio/p2.jpg" alt="portfolio-2" class="img-fluid">
                        </a>
                    </div>
                    <div class="title py-4">
                        <h4 class="text-uppercase">Paint Wall</h4>
                        <span class="text-secondary">Popular, Portfolio</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 element-item popular">
                <div class="our-project">
                    <div class="img">
                        <a class="test-popup-link" href="./img/portfolio/p3.jpg">
                            <img src="./img/portfolio/p3.jpg" alt="portfolio-3" class="img-fluid">
                        </a>
                    </div>
                    <div class="title py-4">
                        <h4 class="text-uppercase">Female light</h4>
                        <span class="text-secondary">Popular, Portfolio</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 element-item upcoming">
                <div class="our-project">
                    <div class="img">
                        <a class="test-popup-link" href="./img/portfolio/p4.jpg">
                            <img src="./img/portfolio/p4.jpg" alt="portfolio-4" class="img-fluid">
                        </a>
                    </div>
                    <div class="title py-4">
                        <h4 class="text-uppercase">Fourth Air</h4>
                        <span class="text-secondary">Upcoming, Portfolio</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 element-item upcoming">
                <div class="our-project">
                    <div class="img">
                        <a class="test-popup-link" href="./img/portfolio/p5.jpg">
                            <img src="./img/portfolio/p5.jpg" alt="portfolio-5" class="img-fluid">
                        </a>
                    </div>
                    <div class="title py-4">
                        <h4 class="text-uppercase">Muliple fown</h4>
                        <span class="text-secondary">Upcoming, Portfolio</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 element-item following">
                <div class="our-project">
                    <div class="img">
                        <a class="test-popup-link" href="./img/portfolio/p6.jpg">
                            <img src="./img/portfolio/p6.jpg" alt="portfolio-6" class="img-fluid">
                        </a>
                    </div>
                    <div class="title py-4">
                        <h4 class="text-uppercase">Together sign</h4>
                        <span class="text-secondary">Following, Portfolio</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 element-item following">
                <div class="our-project">
                    <div class="img">
                        <a class="test-popup-link" href="./img/portfolio/p7.jpg">
                            <img src="./img/portfolio/p7.jpg" alt="portfolio-7" class="img-fluid">
                        </a>
                    </div>
                    <div class="title py-4">
                        <h4 class="text-uppercase">Green Heaven</h4>
                        <span class="text-secondary">Following, Portfolio</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 element-item following">
                <div class="our-project">
                    <div class="img">
                        <a class="test-popup-link" href="./img/portfolio/p8.jpg">
                            <img src="./img/portfolio/p8.jpg" alt="portfolio-8" class="img-fluid">
                        </a>
                    </div>
                    <div class="title py-4">
                        <h4 class="text-uppercase">Fly Male</h4>
                        <span class="text-secondary">Following, Portfolio</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 element-item upcoming">
                <div class="our-project">
                    <div class="img">
                        <a class="test-popup-link" href="./img/portfolio/p9.jpg">
                            <img src="./img/portfolio/p9.jpg" alt="portfolio-9" class="img-fluid">
                        </a>
                    </div>
                    <div class="title py-4">
                        <h4 class="text-uppercase">Camera Lens</h4>
                        <span class="text-secondary">Upcoming, Portfolio</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>

    <!--  ======================= End Project Area =============================  -->

    <!--  ======================== About Me Area ==============================  -->

    <section class="about-area">
    <div class="container">
        <div class="row text-center">
            <div class="col-12">
                <div class="about-title">
                    <h1 class="text-uppercase title-h1">Client Say about me</h1>
                    <p class="para">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus, deleniti
                        recusandae. Esse incidunt rem repellendus ab voluptates maxime? Nemo, numquam!
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container carousel py-lg-5">
        <div class="owl-carousel owl-theme">
            <div class="client row">
                <div class="col-lg-4 col-md-12 client-img">
                    <img src="./img/testimonials/t1.jpg" alt="img1" class="img-fluid">
                </div>
                <div class="col-lg-8 col-md-12 about-client">
                    <h4 class="text-uppercase">John Martin</h4>
                    <p class="para">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem architecto
                        consequuntur ratione, obcaecati corrupti deserunt.</p>
                </div>
            </div>
            <div class="client row">
                <div class="col-lg-4 col-md-12 client-img">
                    <img src="./img/testimonials/t2.jpg" alt="img2" class="img-fluid">
                </div>
                <div class="col-lg-8 col-md-12 about-client">
                    <h4 class="text-uppercase">Mac Hill</h4>
                    <p class="para">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem architecto
                        consequuntur ratione, obcaecati corrupti deserunt.</p>
                </div>
            </div>
            <div class="client row">
                <div class="col-lg-4 col-md-12 client-img">
                    <img src="./img/testimonials/t1.jpg" alt="img1" class="img-fluid">
                </div>
                <div class="col-lg-8 col-md-12 about-client">
                    <h4 class="text-uppercase">John Martin</h4>
                    <p class="para">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem architecto
                        consequuntur ratione, obcaecati corrupti deserunt.</p>
                </div>
            </div>
            <div class="client row">
                <div class="col-lg-4 col-md-12 client-img">
                    <img src="./img/testimonials/t2.jpg" alt="img2" class="img-fluid">
                </div>
                <div class="col-lg-8 col-md-12 about-client">
                    <h4 class="text-uppercase">Mac Hill</h4>
                    <p class="para">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem architecto
                        consequuntur ratione, obcaecati corrupti deserunt.</p>
                </div>
            </div>
            <div class="client row">
                <div class="col-lg-4 col-md-12 client-img">
                    <img src="./img/testimonials/t1.jpg" alt="img1" class="img-fluid">
                </div>
                <div class="col-lg-8 col-md-12 about-client">
                    <h4 class="text-uppercase">John Martin</h4>
                    <p class="para">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem architecto
                        consequuntur ratione, obcaecati corrupti deserunt.</p>
                </div>
            </div>
            <div class="client row">
                <div class="col-lg-4 col-md-12 client-img">
                    <img src="./img/testimonials/t2.jpg" alt="img2" class="img-fluid">
                </div>
                <div class="col-lg-8 col-md-12 about-client">
                    <h4 class="text-uppercase">Mac Hill</h4>
                    <p class="para">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem architecto
                        consequuntur ratione, obcaecati corrupti deserunt.</p>
                </div>
            </div>
        </div>
    </div>

    </section>

    <!--  ======================== End About Me Area ==============================  -->

    <!--  ========================== Subscribe me Area ============================  -->
    <section class="subscribe-us-area">
    <div class="container subscribe">
        <div class="row">
            <div class="col-lg-12 text-center subscribe-title">
                <h4 class="text-uppercase">Get Update From anywhere</h4>
                <p class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam,
                    consequuntur.</p>
            </div>
        </div>
        <div class="d-sm-flex justify-content-center">
            <form class="w-50">
                <div class="row d-flex flex-row flex-wrap">
                    <div class="col input-textbox">
                        <input type="text" id="txtemail" class="form-control" placeholder="Email">
                    </div>
                    <div class="col">
                        <div class="btn-submit">
                            <button type="submit" class="btn btn-success float-right">Subscribe</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </section>
    <!--  ========================== End Subscribe me Area ============================  -->


    </main>
    <!--  ======================= End Main Area ================================ -->
@endsection