@extends("layouts.front_layout")

@section("page_content")
    <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-0 bg-primary-gradient">

        <div class="container">
          <div class="row justify-content-center g-0">
            <div class="col-xl-9">
              <div class="col-lg-6 text-center mx-auto mb-3 mb-md-5 mt-4">
                <h5 class="fw-bold text-danger fs-3 fs-lg-5 lh-sm my-6">How does it work</h5>
              </div>
              <div class="row">
                <div class="col-sm-6 col-md-3 mb-6">
                  <div class="text-center"><img class="shadow-icon" src="assets/img/gallery/location.png" height="112" alt="..." />
                    <h5 class="mt-4 fw-bold">Select location</h5>
                    <p class="mb-md-0">Choose the location where your food will be delivered.</p>
                  </div>
                </div>
                <div class="col-sm-6 col-md-3 mb-6">
                  <div class="text-center"><img class="shadow-icon" src="assets/img/gallery/order.png" height="112" alt="..." />
                    <h5 class="mt-4 fw-bold">Choose order</h5>
                    <p class="mb-md-0">Check over hundreds of menus to pick your favorite food</p>
                  </div>
                </div>
                <div class="col-sm-6 col-md-3 mb-6">
                  <div class="text-center"><img class="shadow-icon" src="assets/img/gallery/pay.png" height="112" alt="..." />
                    <h5 class="mt-4 fw-bold">Pay advanced</h5>
                    <p class="mb-md-0">It's quick, safe, and simple. Select several methods of payment</p>
                  </div>
                </div>
                <div class="col-sm-6 col-md-3 mb-6">
                  <div class="text-center"><img class="shadow-icon" src="assets/img/gallery/meals.png" height="112" alt="..." />
                    <h5 class="mt-4 fw-bold">Enjoy meals</h5>
                    <p class="mb-md-0">Food is made and delivered directly to your home.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div><!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-4 overflow-hidden">

        <div class="container">
          <div class="row h-100">
            <div class="col-lg-7 mx-auto text-center mt-7 mb-5">
              <h5 class="fw-bold fs-3 fs-lg-5 lh-sm">Popular items</h5>
            </div>
            <div class="col-12">
              <div class="carousel slide" id="carouselPopularItems" data-bs-touch="false" data-bs-interval="false">
                <div class="carousel-inner">
                  <div class="carousel-item active" data-bs-interval="10000">
                    <div class="row gx-3 h-100 align-items-center">
                      <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                        <div class="card card-span h-100 rounded-3"><img class="img-fluid rounded-3 h-100" src="assets/img/gallery/cheese-burger.png" alt="..." />
                          <div class="card-body ps-0">
                            <h5 class="fw-bold text-1000 text-truncate mb-1">Cheese Burger</h5>
                            <div><span class="text-warning me-2"><i class="fas fa-map-marker-alt"></i></span><span class="text-primary">Burger Arena</span></div><span class="text-1000 fw-bold">$3.88</span>
                          </div>
                        </div>
                        <div class="d-grid gap-2"><a class="btn btn-lg btn-danger" href="#!" role="button">Order now</a></div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                        <div class="card card-span h-100 rounded-3"><img class="img-fluid rounded-3 h-100" src="assets/img/gallery/toffes-cake.png" alt="..." />
                          <div class="card-body ps-0">
                            <h5 class="fw-bold text-1000 text-truncate mb-1">Toffe's Cake</h5>
                            <div><span class="text-warning me-2"><i class="fas fa-map-marker-alt"></i></span><span class="text-primary">Top Sticks</span></div><span class="text-1000 fw-bold">$4.00</span>
                          </div>
                        </div>
                        <div class="d-grid gap-2"><a class="btn btn-lg btn-danger" href="#!" role="button">Order now</a></div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                        <div class="card card-span h-100 rounded-3"><img class="img-fluid rounded-3 h-100" src="assets/img/gallery/dancake.png" alt="..." />
                          <div class="card-body ps-0">
                            <h5 class="fw-bold text-1000 text-truncate mb-1">Dancake</h5>
                            <div><span class="text-warning me-2"><i class="fas fa-map-marker-alt"></i></span><span class="text-primary">Cake World</span></div><span class="text-1000 fw-bold">$1.99</span>
                          </div>
                        </div>
                        <div class="d-grid gap-2"><a class="btn btn-lg btn-danger" href="#!" role="button">Order now</a></div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                        <div class="card card-span h-100 rounded-3"><img class="img-fluid rounded-3 h-100" src="assets/img/gallery/crispy-sandwitch.png" alt="..." />
                          <div class="card-body ps-0">
                            <h5 class="fw-bold text-1000 text-truncate mb-1">Crispy Sandwitch</h5>
                            <div><span class="text-warning me-2"><i class="fas fa-map-marker-alt"></i></span><span class="text-primary">Fastfood Dine</span></div><span class="text-1000 fw-bold">$3.00</span>
                          </div>
                        </div>
                        <div class="d-grid gap-2"><a class="btn btn-lg btn-danger" href="#!" role="button">Order now</a></div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                        <div class="card card-span h-100 rounded-3"><img class="img-fluid rounded-3 h-100" src="assets/img/gallery/thai-soup.png" alt="..." />
                          <div class="card-body ps-0">
                            <h5 class="fw-bold text-1000 text-truncate mb-1">Thai Soup</h5>
                            <div><span class="text-warning me-2"><i class="fas fa-map-marker-alt"></i></span><span class="text-primary">Foody Man</span></div><span class="text-1000 fw-bold">$2.79</span>
                          </div>
                        </div>
                        <div class="d-grid gap-2"><a class="btn btn-lg btn-danger" href="#!" role="button">Order now</a></div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item" data-bs-interval="5000">
                    <div class="row gx-3 h-100 align-items-center">
                      <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                        <div class="card card-span h-100 rounded-3"><img class="img-fluid rounded-3 h-100" src="assets/img/gallery/cheese-burger.png" alt="..." />
                          <div class="card-body ps-0">
                            <h5 class="fw-bold text-1000 text-truncate mb-1">Cheese Burger</h5>
                            <div><span class="text-warning me-2"><i class="fas fa-map-marker-alt"></i></span><span class="text-primary">Burger Arena</span></div><span class="text-1000 fw-bold">$3.88</span>
                          </div>
                        </div>
                        <div class="d-grid gap-2"><a class="btn btn-lg btn-danger" href="#!" role="button">Order now</a></div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                        <div class="card card-span h-100 rounded-3"><img class="img-fluid rounded-3 h-100" src="assets/img/gallery/toffes-cake.png" alt="..." />
                          <div class="card-body ps-0">
                            <h5 class="fw-bold text-1000 text-truncate mb-1">Toffe's Cake</h5>
                            <div><span class="text-warning me-2"><i class="fas fa-map-marker-alt"></i></span><span class="text-primary">Top Sticks</span></div><span class="text-1000 fw-bold">$4.00</span>
                          </div>
                        </div>
                        <div class="d-grid gap-2"><a class="btn btn-lg btn-danger" href="#!" role="button">Order now</a></div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                        <div class="card card-span h-100 rounded-3"><img class="img-fluid rounded-3 h-100" src="assets/img/gallery/dancake.png" alt="..." />
                          <div class="card-body ps-0">
                            <h5 class="fw-bold text-1000 text-truncate mb-1">Dancake</h5>
                            <div><span class="text-warning me-2"><i class="fas fa-map-marker-alt"></i></span><span class="text-primary">Cake World</span></div><span class="text-1000 fw-bold">$1.99</span>
                          </div>
                        </div>
                        <div class="d-grid gap-2"><a class="btn btn-lg btn-danger" href="#!" role="button">Order now</a></div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                        <div class="card card-span h-100 rounded-3"><img class="img-fluid rounded-3 h-100" src="assets/img/gallery/crispy-sandwitch.png" alt="..." />
                          <div class="card-body ps-0">
                            <h5 class="fw-bold text-1000 text-truncate mb-1">Crispy Sandwitch</h5>
                            <div><span class="text-warning me-2"><i class="fas fa-map-marker-alt"></i></span><span class="text-primary">Fastfood Dine</span></div><span class="text-1000 fw-bold">$3.00</span>
                          </div>
                        </div>
                        <div class="d-grid gap-2"><a class="btn btn-lg btn-danger" href="#!" role="button">Order now</a></div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                        <div class="card card-span h-100 rounded-3"><img class="img-fluid rounded-3 h-100" src="assets/img/gallery/thai-soup.png" alt="..." />
                          <div class="card-body ps-0">
                            <h5 class="fw-bold text-1000 text-truncate mb-1">Thai Soup</h5>
                            <div><span class="text-warning me-2"><i class="fas fa-map-marker-alt"></i></span><span class="text-primary">Foody Man</span></div><span class="text-1000 fw-bold">$2.79</span>
                          </div>
                        </div>
                        <div class="d-grid gap-2"><a class="btn btn-lg btn-danger" href="#!" role="button">Order now</a></div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item" data-bs-interval="3000">
                    <div class="row gx-3 h-100 align-items-center">
                      <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                        <div class="card card-span h-100 rounded-3"><img class="img-fluid rounded-3 h-100" src="assets/img/gallery/cheese-burger.png" alt="..." />
                          <div class="card-body ps-0">
                            <h5 class="fw-bold text-1000 text-truncate mb-1">Cheese Burger</h5>
                            <div><span class="text-warning me-2"><i class="fas fa-map-marker-alt"></i></span><span class="text-primary">Burger Arena</span></div><span class="text-1000 fw-bold">$3.88</span>
                          </div>
                        </div>
                        <div class="d-grid gap-2"><a class="btn btn-lg btn-danger" href="#!" role="button">Order now</a></div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                        <div class="card card-span h-100 rounded-3"><img class="img-fluid rounded-3 h-100" src="assets/img/gallery/toffes-cake.png" alt="..." />
                          <div class="card-body ps-0">
                            <h5 class="fw-bold text-1000 text-truncate mb-1">Toffe's Cake</h5>
                            <div><span class="text-warning me-2"><i class="fas fa-map-marker-alt"></i></span><span class="text-primary">Top Sticks</span></div><span class="text-1000 fw-bold">$4.00</span>
                          </div>
                        </div>
                        <div class="d-grid gap-2"><a class="btn btn-lg btn-danger" href="#!" role="button">Order now</a></div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                        <div class="card card-span h-100 rounded-3"><img class="img-fluid rounded-3 h-100" src="assets/img/gallery/dancake.png" alt="..." />
                          <div class="card-body ps-0">
                            <h5 class="fw-bold text-1000 text-truncate mb-1">Dancake</h5>
                            <div><span class="text-warning me-2"><i class="fas fa-map-marker-alt"></i></span><span class="text-primary">Cake World</span></div><span class="text-1000 fw-bold">$1.99</span>
                          </div>
                        </div>
                        <div class="d-grid gap-2"><a class="btn btn-lg btn-danger" href="#!" role="button">Order now</a></div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                        <div class="card card-span h-100 rounded-3"><img class="img-fluid rounded-3 h-100" src="assets/img/gallery/crispy-sandwitch.png" alt="..." />
                          <div class="card-body ps-0">
                            <h5 class="fw-bold text-1000 text-truncate mb-1">Crispy Sandwitch</h5>
                            <div><span class="text-warning me-2"><i class="fas fa-map-marker-alt"></i></span><span class="text-primary">Fastfood Dine</span></div><span class="text-1000 fw-bold">$3.00</span>
                          </div>
                        </div>
                        <div class="d-grid gap-2"><a class="btn btn-lg btn-danger" href="#!" role="button">Order now</a></div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                        <div class="card card-span h-100 rounded-3"><img class="img-fluid rounded-3 h-100" src="assets/img/gallery/thai-soup.png" alt="..." />
                          <div class="card-body ps-0">
                            <h5 class="fw-bold text-1000 text-truncate mb-1">Thai Soup</h5>
                            <div><span class="text-warning me-2"><i class="fas fa-map-marker-alt"></i></span><span class="text-primary">Foody Man</span></div><span class="text-1000 fw-bold">$2.79</span>
                          </div>
                        </div>
                        <div class="d-grid gap-2"><a class="btn btn-lg btn-danger" href="#!" role="button">Order now</a></div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="row gx-3 h-100 align-items-center">
                      <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                        <div class="card card-span h-100 rounded-3"><img class="img-fluid rounded-3 h-100" src="assets/img/gallery/cheese-burger.png" alt="..." />
                          <div class="card-body ps-0">
                            <h5 class="fw-bold text-1000 text-truncate mb-1">Cheese Burger</h5>
                            <div><span class="text-warning me-2"><i class="fas fa-map-marker-alt"></i></span><span class="text-primary">Burger Arena</span></div><span class="text-1000 fw-bold">$3.88</span>
                          </div>
                        </div>
                        <div class="d-grid gap-2"><a class="btn btn-lg btn-danger" href="#!" role="button">Order now</a></div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                        <div class="card card-span h-100 rounded-3"><img class="img-fluid rounded-3 h-100" src="assets/img/gallery/toffes-cake.png" alt="..." />
                          <div class="card-body ps-0">
                            <h5 class="fw-bold text-1000 text-truncate mb-1">Toffe's Cake</h5>
                            <div><span class="text-warning me-2"><i class="fas fa-map-marker-alt"></i></span><span class="text-primary">Top Sticks</span></div><span class="text-1000 fw-bold">$4.00</span>
                          </div>
                        </div>
                        <div class="d-grid gap-2"><a class="btn btn-lg btn-danger" href="#!" role="button">Order now</a></div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                        <div class="card card-span h-100 rounded-3"><img class="img-fluid rounded-3 h-100" src="assets/img/gallery/dancake.png" alt="..." />
                          <div class="card-body ps-0">
                            <h5 class="fw-bold text-1000 text-truncate mb-1">Dancake</h5>
                            <div><span class="text-warning me-2"><i class="fas fa-map-marker-alt"></i></span><span class="text-primary">Cake World</span></div><span class="text-1000 fw-bold">$1.99</span>
                          </div>
                        </div>
                        <div class="d-grid gap-2"><a class="btn btn-lg btn-danger" href="#!" role="button">Order now</a></div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                        <div class="card card-span h-100 rounded-3"><img class="img-fluid rounded-3 h-100" src="assets/img/gallery/crispy-sandwitch.png" alt="..." />
                          <div class="card-body ps-0">
                            <h5 class="fw-bold text-1000 text-truncate mb-1">Crispy Sandwitch</h5>
                            <div><span class="text-warning me-2"><i class="fas fa-map-marker-alt"></i></span><span class="text-primary">Fastfood Dine</span></div><span class="text-1000 fw-bold">$3.00</span>
                          </div>
                        </div>
                        <div class="d-grid gap-2"><a class="btn btn-lg btn-danger" href="#!" role="button">Order now</a></div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                        <div class="card card-span h-100 rounded-3"><img class="img-fluid rounded-3 h-100" src="assets/img/gallery/thai-soup.png" alt="..." />
                          <div class="card-body ps-0">
                            <h5 class="fw-bold text-1000 text-truncate mb-1">Thai Soup</h5>
                            <div><span class="text-warning me-2"><i class="fas fa-map-marker-alt"></i></span><span class="text-primary">Foody Man</span></div><span class="text-1000 fw-bold">$2.79</span>
                          </div>
                        </div>
                        <div class="d-grid gap-2"><a class="btn btn-lg btn-danger" href="#!" role="button">Order now</a></div>
                      </div>
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev carousel-icon" type="button" data-bs-target="#carouselPopularItems" data-bs-slide="prev"><span class="carousel-control-prev-icon hover-top-shadow" aria-hidden="true"></span><span class="visually-hidden">Previous</span></button>
                <button class="carousel-control-next carousel-icon" type="button" data-bs-target="#carouselPopularItems" data-bs-slide="next"><span class="carousel-control-next-icon hover-top-shadow" aria-hidden="true"></span><span class="visually-hidden">Next </span></button>
              </div>
            </div>
          </div>
        </div><!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="pb-5 pt-8">

        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="card card-span mb-3 shadow-lg">
                <div class="card-body py-0">
                  <div class="row justify-content-center">
                    <div class="col-md-5 col-xl-7 col-xxl-8 g-0 order-0 order-md-1"><img class="img-fluid w-100 fit-cover h-100 rounded-top rounded-md-end rounded-md-top-0" src="assets/img/gallery/crispy-sandwiches.png" alt="..." /></div>
                    <div class="col-md-7 col-xl-5 col-xxl-4 p-4 p-lg-5">
                      <h1 class="card-title mt-xl-5 mb-4">Best deals <span class="text-primary"> Crispy Sandwiches</span></h1>
                      <p class="fs-1">Enjoy the large size of sandwiches. Complete your meal with the perfect slice of sandwiches.</p>
                      <div class="d-grid bottom-0"><a class="btn btn-lg btn-primary mt-xl-6" href="#!">PROCEED TO ORDER<i class="fas fa-chevron-right ms-2"></i></a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div><!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-0">

        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="card card-span mb-3 shadow-lg">
                <div class="card-body py-0">
                  <div class="row justify-content-center">
                    <div class="col-md-5 col-xl-7 col-xxl-8 g-0 order-md-0"><img class="img-fluid w-100 fit-cover h-100 rounded-top rounded-md-start rounded-md-top-0" src="assets/img/gallery/fried-chicken.png" alt="..." /></div>
                    <div class="col-md-7 col-xl-5 col-xxl-4 p-4 p-lg-5">
                      <h1 class="card-title mt-xl-5 mb-4">Celebrate parties with <span class="text-primary">Fried Chicken</span></h1>
                      <p class="fs-1">Get the best fried chicken smeared with a lip smacking lemon chili flavor. Check out best deals for fried chicken.</p>
                      <div class="d-grid bottom-0"><a class="btn btn-lg btn-primary mt-xl-6" href="#!">PROCEED TO ORDER<i class="fas fa-chevron-right ms-2"></i></a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div><!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="pt-5">

        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="card card-span mb-3 shadow-lg">
                <div class="card-body py-0">
                  <div class="row justify-content-center">
                    <div class="col-md-5 col-xl-7 col-xxl-8 g-0 order-0 order-md-1"><img class="img-fluid w-100 fit-cover h-100 rounded-top rounded-md-end rounded-md-top-0" src="assets/img/gallery/pizza.png" alt="..." /></div>
                    <div class="col-md-7 col-xl-5 col-xxl-4 p-4 p-lg-5">
                      <h1 class="card-title mt-xl-5 mb-4">Wanna eat hot & <span class="text-primary">spicy Pizza?</span></h1>
                      <p class="fs-1">Pair up with a friend and enjoy the hot and crispy pizza pops. Try it with the best deals.</p>
                      <div class="d-grid bottom-0"><a class="btn btn-lg btn-primary mt-xl-6" href="#!">PROCEED TO ORDER<i class="fas fa-chevron-right ms-2"></i></a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div><!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->


      <section class="py-0">
        <div class="bg-holder" style="background-image:url(assets/img/gallery/cta-two-bg.png);background-position:center;background-size:cover;">
        </div>
        <!--/.bg-holder-->

        <div class="container">
          <div class="row flex-center">
            <div class="col-xxl-9 py-7 text-center">
              <h1 class="fw-bold mb-4 text-white fs-6">Are you ready to order <br />with the best deals? </h1><a class="btn btn-danger" href="#"> PROCEED TO ORDER<i class="fas fa-chevron-right ms-2"></i></a>
            </div>
          </div>
        </div>
      </section>


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-0 pt-7 bg-1000">

        <div class="container"> 
          <div class="row">
            <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-3">
              <h5 class="lh-lg fw-bold text-white">COMPANY</h5>
              <ul class="list-unstyled mb-md-4 mb-lg-0">
                <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">About Us</a></li>
                <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Team</a></li>
                <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Careers</a></li>
                <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">blog</a></li>
              </ul>
            </div>
            <div class="col-6 col-md-4 col-lg-3 col-xxl-2 col-lg-3 mb-3">
              <h5 class="lh-lg fw-bold text-white">CONTACT</h5>
              <ul class="list-unstyled mb-md-4 mb-lg-0">
                <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Help &amp; Support</a></li>
                <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Partner with us </a></li>
                <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Ride with us</a></li>
                <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Ride with us</a></li>
              </ul>
            </div>
            <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-3">
              <h5 class="lh-lg fw-bold text-white">LEGAL</h5>
              <ul class="list-unstyled mb-md-4 mb-lg-0">
                <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Terms &amp; Conditions</a></li>
                <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Refund &amp; Cancellation</a></li>
                <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Privacy Policy</a></li>
                <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Cookie Policy</a></li>
              </ul>
            </div>
            <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-3">
              <h5 class="lh-lg fw-bold text-white">LEGAL</h5>
              <ul class="list-unstyled mb-md-4 mb-lg-0">
                <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Terms &amp; Conditions</a></li>
                <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Refund &amp; Cancellation</a></li>
                <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Privacy Policy</a></li>
              </ul>
            </div>
            <div class="col-12 col-md-8 col-lg-6 col-xxl-4">
              <h5 class="lh-lg fw-bold text-500">FOLLOW US</h5>
              <div class="text-start my-3"> <a href="#!">
                  <svg class="svg-inline--fa fa-instagram fa-w-14 fs-2 me-2" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="instagram" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path fill="#BDBDBD" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path>
                  </svg></a><a href="#!">
                  <svg class="svg-inline--fa fa-facebook fa-w-16 fs-2 mx-2" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path fill="#BDBDBD" d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"></path>
                  </svg></a><a href="#!">
                  <svg class="svg-inline--fa fa-twitter fa-w-16 fs-2 mx-2" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="twitter" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path fill="#BDBDBD" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path>
                  </svg></a></div>
              <h3 class="text-500 my-4">Receive exclusive offers and <br />discounts in your mailbox</h3>
              <div class="row input-group-icon mb-5">
                <div class="col-auto"><i class="fas fa-envelope input-box-icon text-500 ms-3"></i>
                  <input class="form-control input-box bg-800 border-0" type="email" placeholder="Enter Email" aria-label="email" />
                </div>
                <div class="col-auto">
                  <button class="btn btn-primary" type="submit">Subscribe</button>
                </div>
              </div>
            </div>
          </div>
          <hr class="border border-800" />
          <div class="row flex-center pb-3">
            <div class="col-md-6 order-0">
              <p class="text-200 text-center text-md-start">All rights Reserved &copy; EasyFOOD, 2024</p>
            </div>
            <div class="col-md-6 order-1">
              <p class="text-200 text-center text-md-end"> Made with&nbsp;
                <svg class="bi bi-suit-heart-fill" xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="#FFB30E" viewBox="0 0 16 16">
                  <path d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z"></path>
                </svg>&nbsp;&nbsp;<a class="text-200 fw-bold" href="" target="_blank">Laravel </a>
              </p>
            </div>
          </div>
        </div><!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->
@endsection

