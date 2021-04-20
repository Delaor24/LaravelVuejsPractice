<template>
  <div>
    <!--menu-bar-->
    <section>
      <div class="menu-bar">
        <div class="content">
          <div class="row">
            <!--menu-logo-->
            <div class="col-md-3">
              <div class="logo">
                <a href="index.html"
                  ><img
                    :src="$root.baseurl + '/frontend/images/layer/logo.png'"
                    alt="Island_logo"
                    width="100%"
                    height="100%"
                /></a>
              </div>
            </div>
            <!--/.menu-logo-->

            <!--nav-bar-menu-->
            <div class="col-md-9">
              <nav class="navbar navbar-expand">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item">
                    <a href="pages/food.html" class="nav-link menu-link"
                      >FOOD<span class="ml-3"
                        ><img
                          :src="
                            $root.baseurl + '/frontend/images/layer/nav-dot.gif'
                          "
                          alt="" /></span
                    ></a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/bar.html" class="nav-link menu-link"
                      >BAR<span class="ml-3"
                        ><img
                          :src="
                            $root.baseurl + '/frontend/images/layer/nav-dot.gif'
                          "
                          alt="" /></span
                    ></a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/locations.html" class="nav-link menu-link"
                      >LOCATIONS<span class="ml-3"
                        ><img
                          :src="
                            $root.baseurl + '/frontend/images/layer/nav-dot.gif'
                          "
                          alt="" /></span
                    ></a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/rewards.html" class="nav-link menu-link"
                      >REWARDS</a
                    >
                  </li>
                </ul>
                <ul class="navbar-nav social-media">
                  <li class="nav-item">
                    <a href="" class="nav-link"
                      ><i class="fab fa-facebook-f icon"></i
                    ></a>
                  </li>
                  <li class="nav-item">
                    <a href="" class="nav-link"
                      ><i class="fab fa-twitter icon"></i
                    ></a>
                  </li>
                  <li class="nav-item">
                    <a href="" class="nav-link"
                      ><i class="fab fa-instagram icon"></i
                    ></a>
                  </li>
                </ul>
              </nav>
            </div>
            <!--/.nav-bar-menu-->

            <!--order-cart-->
            <div class="order-online">
              <a href="pages/order.html"
                ><img
                  :src="$root.baseurl + '/frontend/images/order.png'"
                  alt=""
                  width="100%"
                  height="100%"
              /></a>
            </div>
            <!--/.order-cart-->
          </div>
        </div>
      </div>
    </section>
    <!--/.menu-bar-->

    <!--slider-->
    <section>
      <div class="canvas">
        <div class="row">
          <div class="col-md-12">
            <div
              id="mySlider"
              class="carousel slide"
              data-ride="carousel"
              data-interval="3000"
            >
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img
                    :src="$root.baseurl + '/frontend/images/slider-4.jpg'"
                    alt=""
                    class="img-responsive"
                  />
                </div>
                <div class="carousel-item">
                  <img
                    :src="$root.baseurl + '/frontend/images/slider-6.jpg'"
                    alt=""
                    class="img-responsive"
                  />
                </div>
                <div class="carousel-item">
                  <img
                    :src="$root.baseurl + '/frontend/images/slider-2.jpg'"
                    alt=""
                    class="img-responsive"
                  />
                </div>
                <div class="carousel-item">
                  <a href=""
                    ><img
                      :src="$root.baseurl + '/frontend/images/slider-1.jpg'"
                      alt=""
                      class="img-responsive"
                  /></a>
                </div>
                <div class="carousel-item">
                  <img
                    :src="$root.baseurl + '/frontend/images/slider-5.jpg'"
                    alt=""
                    class="img-responsive"
                  />
                </div>
                <div class="carousel-item">
                  <img
                    :src="$root.baseurl + '/frontend/images/slider-3.jpg'"
                    alt=""
                    class="img-responsive"
                  />
                </div>
              </div>
              <ol class="carousel-indicators">
                <li
                  data-target="#mySlider"
                  data-slide-to="0"
                  class="active"
                ></li>
                <li data-target="#mySlider" data-slide-to="1"></li>
                <li data-target="#mySlider" data-slide-to="2"></li>
                <li data-target="#mySlider" data-slide-to="3"></li>
                <li data-target="#mySlider" data-slide-to="4"></li>
                <li data-target="#mySlider" data-slide-to="5"></li>
              </ol>
            </div>
            <!--slider-border-->
            <div class="slider-border"></div>
            <!--/.slider-border-->
          </div>
        </div>
      </div>
    </section>
    <!--/.slider-->

    <!--content-section-->
    <section>
      <div class="content">
        <div class="row">
          <div class="col-md-3">
            <div class="location-border"></div>
            <div class="">
              <img
                :src="$root.baseurl + '/frontend/images/location.png'"
                alt=""
                class="location-bg"
              />
              <h3 class="text-white text-center text-font pt-4">HONOLULU</h3>
              <p class="text-white text-center text-font">
                1450 Ala Moana Boulevard, Honolulu
              </p>
              <p class="text-center text-info text-fonts">808-943-6670</p>
              <img
                :src="
                  $root.baseurl + '/frontend/images/layer/location_icon.png'
                "
                alt=""
                class="location"
              />
            </div>
          </div>
          <div class="col-md-9">
            <div class="paragraph">
              <p>
                Islands Fine Burgers & Drinks is a burger restaurant that
                specializes in gourmet burgers and beer, fresh cut fries,
                tropical drinks and great happy hour deals.
                <a href="/locations" class="text-danger">Find a location </a>and
                visit Islands today.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--/.content-section-->

    <!--gallery-section-->
    <section>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="mt-5 mb-5">
              <img
                :src="$root.baseurl + '/frontend/images/home-1.jpg'"
                alt=""
                width="100%"
                height="100%"
              />
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--/.gallery-->

    <!--support-section-->
    <section>
      <div class="canvas">
        <div class="row">
          <div class="col-md text-center">
            <img
              :src="$root.baseurl + '/frontend/images/layer/sub_nav_star.png'"
              alt=""
              class="float-left mt-5 nav-star"
            />
            <img
              :src="$root.baseurl + '/frontend/images/layer/sub_nav_star.png'"
              alt=""
              class="float-righ nav-star-2 mt-5 mr-5"
            />
            <p>
              <a href="" class="big-f"
                >ABOUT<br /><span class="text-danger">ISLANDS</span></a
              >
            </p>
          </div>
          <div class="col-md text-center">
            <img
              :src="$root.baseurl + '/frontend/images/layer/sub_nav_star.png'"
              alt=""
              class="float-left mt-5 nav-star"
            />
            <img
              :src="$root.baseurl + '/frontend/images/layer/sub_nav_star.png'"
              alt=""
              class="float-righ nav-star-2 mt-5 mr-"
            />
            <p>
              <a href="" class="big-f"
                >TIKI<br /><span class="text-danger">LINK</span></a
              >
            </p>
          </div>
          <div class="col-md text-center">
            <img
              :src="$root.baseurl + '/frontend/images/layer/sub_nav_star.png'"
              alt=""
              class="float-left mt-5 nav-star"
            />
            <img
              :src="$root.baseurl + '/frontend/images/layer/sub_nav_star.png'"
              alt=""
              class="float-righ nav-star-2 mt-5 mr-5"
            />
            <p>
              <a href="" class="big-f"
                >TALK<br /><span class="text-danger">TO US</span></a
              >
            </p>
          </div>
          <div class="col-md text-center">
            <img
              :src="$root.baseurl + '/frontend/images/layer/sub_nav_star.png'"
              alt=""
              class="float-left mt-5 nav-star"
            />
            <img
              :src="$root.baseurl + '/frontend/images/layer/sub_nav_star.png'"
              alt=""
              class="float-righ nav-star-2 mt-5 mr-5"
            />
            <p>
              <a href="" class="big-f"
                >JOIN<br /><span class="text-danger">THE TEAM</span></a
              >
            </p>
          </div>
          <div class="col-md text-center">
            <img
              :src="$root.baseurl + '/frontend/images/layer/sub_nav_star.png'"
              alt=""
              class="float-left mt-5 nav-star"
            />
            <img
              :src="$root.baseurl + '/frontend/images/layer/sub_nav_star.png'"
              alt=""
              class="float-righ nav-star-2 mt-5 mr-5"
            />
            <p>
              <a href="" class="big-f"
                >BUYA<br /><span class="text-danger">GIFT CARD</span></a
              >
            </p>
          </div>
          <div class="col-md text-center">
            <img
              :src="$root.baseurl + '/frontend/images/layer/sub_nav_star.png'"
              alt=""
              class="float-left mt-5 nav-star"
            />
            <img
              :src="$root.baseurl + '/frontend/images/layer/sub_nav_star.png'"
              alt=""
              class="float-righ nav-star-2 mt-5 mr-5"
            />
            <p>
              <a href="" class="big-f"
                >IN THE<br /><span class="text-danger">COMMUNITY</span></a
              >
            </p>
          </div>
        </div>
      </div>
    </section>
    <!--/.support-section-->

    <!--footer-->
    <section>
      <div class="footer-border"></div>
      <div class="footer">
        <div class="content">
          <div class="row">
            <div class="col-md-9 text-center text-white footer-font">
              <img
                :src="$root.baseurl + '/frontend/images/layer/footer-logo.png'"
                alt=""
              />
              <p>
                &copy; 2018 Islands Restaurants, L.P. All rights reserved .
                <a href="" class="text-white">Rewards Program Rules</a> .
                <a href="" class="text-white"
                  >Pineapple Coloring Contest Rules</a
                ><br />
                {{ $root.baseurl }}

                . <a href="" class="text-white">Privacy Policy</a> .
                <a href="" class="text-white">Terms &amp; Conditions</a>
              </p>
            </div>
            <div class="col-md-3 text-center">
              <span class="ml-3"
                ><a href=""><i class="fab fa-facebook-f icon fa-2x"></i></a
              ></span>
              <span class="ml-3"
                ><a href=""><i class="fab fa-twitter icon fa-2x"></i></a
              ></span>
              <span class="ml-3"
                ><a href=""><i class="fab fa-instagram icon fa-2x"></i></a
              ></span>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--footer-->

    <!--back-to-top-btn-->
    <div class="top-btn" id="myBtn"></div>
    <!--//back-to-top-btn-->
  </div>
</template>

<script>
export default {};
</script>

<style>
</style>