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


    
@endsection

