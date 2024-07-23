  <!-- Cta-->
      <section class="section section-fluid bg-default">
        <div class="parallax-container" data-parallax-img="<?=base_url()?>assets/images/parallax-1.jpg">
          <div class="parallax-content section-xl context-dark bg-overlay-68 bg-mobile-overlay">
            <div class="container">
              <div class="row row-30 justify-content-end text-right">
                <div class="col-sm-7">
                  <h3 class="wow fadeInLeft">Let's Develop Your Next Great App!</h3>
                  <p>Do you need a unique software solution for your company? We know how to help you!</p>
                  <div class="group-sm group-middle group justify-content-end"><a class="button button-primary button-ujarak" href="#modalCta" data-toggle="modal">Get in Touch</a><a class="button button-white-outline button-ujarak" href="#">Learn More</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Latest Projects-->
      <section class="section section-sm section-fluid bg-default text-center" id="projects">
        <div class="container-fluid">
          <h2 class="wow fadeInLeft"><?=$alldata[0]['heading']?></h2>
          <p class="quote-jean wow fadeInRight" data-wow-delay=".1s"><?=$alldata[0]['detail_data']?></p>
          <div class="isotope-filters isotope-filters-horizontal">
            <button class="isotope-filters-toggle button button-md button-icon button-icon-right button-default-outline button-wapasha" data-custom-toggle="#isotope-3" data-custom-toggle-hide-on-blur="true" data-custom-toggle-disable-on-blur="true"><span class="icon fa fa-caret-down"></span>Filter</button>
            <ul class="isotope-filters-list" id="isotope-3">
              <li><a class="active" href="#" data-isotope-filter="*" data-isotope-group="gallery">All</a></li>
              <li><a href="#" data-isotope-filter="Type 1" data-isotope-group="gallery">mobile Apps</a></li>
              <li><a href="#" data-isotope-filter="Type 2" data-isotope-group="gallery">Custom Software</a></li>
              <li><a href="#" data-isotope-filter="Type 3" data-isotope-group="gallery">QA & Testing</a></li>
              <li><a href="#" data-isotope-filter="Type 4" data-isotope-group="gallery">UX and Design</a></li>
            </ul>
          </div>
          <div class="row row-30 isotope" data-isotope-layout="fitRows" data-isotope-group="gallery" data-lightgallery="group">
            <div class="col-sm-6 col-lg-4 col-xxl-3 isotope-item wow fadeInRight" data-filter="Type 4">
              <!-- Thumbnail Classic-->
              <article class="thumbnail thumbnail-classic thumbnail-md">
                <div class="thumbnail-classic-figure"><img src="<?=base_url()?>assets/images/fullwidth-gallery-1-420x350.jpg" alt="" width="420" height="350"/>
                </div>
                <div class="thumbnail-classic-caption">
                  <div class="thumbnail-classic-title-wrap"><a class="icon fl-bigmug-line-zoom60" href="<?=base_url()?>assets/images/grid-gallery-1-1200x800-original.jpg" data-lightgallery="item"><img src="<?=base_url()?>assets/images/fullwidth-gallery-1-420x350.jpg" alt="" width="420" height="350"/></a>
                    <h5 class="thumbnail-classic-title"><a href="#">FinStep</a></h5>
                  </div>
                  <p class="thumbnail-classic-text">We work hard on every app to deliver top-notch features with great UI that you won’t find anywhere else.</p>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-lg-4 col-xxl-3 isotope-item wow fadeInRight" data-filter="Type 1" data-wow-delay=".1s">
              <!-- Thumbnail Classic-->
              <article class="thumbnail thumbnail-classic thumbnail-md">
                <div class="thumbnail-classic-figure"><img src="<?=base_url()?>assets/images/fullwidth-gallery-2-420x350.jpg" alt="" width="420" height="350"/>
                </div>
                <div class="thumbnail-classic-caption">
                  <div class="thumbnail-classic-title-wrap"><a class="icon fl-bigmug-line-zoom60" href="<?=base_url()?>assets/images/grid-gallery-2-1200x800-original.jpg" data-lightgallery="item"><img src="<?=base_url()?>assets/images/fullwidth-gallery-2-420x350.jpg" alt="" width="420" height="350"/></a>
                    <h5 class="thumbnail-classic-title"><a href="#">Mobile Finance</a></h5>
                  </div>
                  <p class="thumbnail-classic-text">We work hard on every app to deliver top-notch features with great UI that you won’t find anywhere else.</p>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-lg-4 col-xxl-3 isotope-item wow fadeInRight" data-filter="Type 2" data-wow-delay=".2s">
              <!-- Thumbnail Classic-->
              <article class="thumbnail thumbnail-classic thumbnail-md">
                <div class="thumbnail-classic-figure"><img src="<?=base_url()?>assets/images/fullwidth-gallery-3-420x350.jpg" alt="" width="420" height="350"/>
                </div>
                <div class="thumbnail-classic-caption">
                  <div class="thumbnail-classic-title-wrap"><a class="icon fl-bigmug-line-zoom60" href="<?=base_url()?>assets/images/grid-gallery-3-1200x800-original.jpg" data-lightgallery="item"><img src="<?=base_url()?>assets/images/fullwidth-gallery-3-420x350.jpg" alt="" width="420" height="350"/></a>
                    <h5 class="thumbnail-classic-title"><a href="#">Q-Manage</a></h5>
                  </div>
                  <p class="thumbnail-classic-text">We work hard on every app to deliver top-notch features with great UI that you won’t find anywhere else.</p>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-lg-4 col-xxl-3 isotope-item wow fadeInRight" data-filter="Type 3" data-wow-delay=".3s">
              <!-- Thumbnail Classic-->
              <article class="thumbnail thumbnail-classic thumbnail-md">
                <div class="thumbnail-classic-figure"><img src="<?=base_url()?>assets/images/fullwidth-gallery-4-420x350.jpg" alt="" width="420" height="350"/>
                </div>
                <div class="thumbnail-classic-caption">
                  <div class="thumbnail-classic-title-wrap"><a class="icon fl-bigmug-line-zoom60" href="<?=base_url()?>assets/images/grid-gallery-4-1200x800-original.jpg" data-lightgallery="item"><img src="<?=base_url()?>assets/images/fullwidth-gallery-4-420x350.jpg" alt="" width="420" height="350"/></a>
                    <h5 class="thumbnail-classic-title"><a href="#">WeatherCast</a></h5>
                  </div>
                  <p class="thumbnail-classic-text">We work hard on every app to deliver top-notch features with great UI that you won’t find anywhere else.</p>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-lg-4 col-xxl-3 isotope-item wow fadeInLeft" data-filter="Type 3">
              <!-- Thumbnail Classic-->
              <article class="thumbnail thumbnail-classic thumbnail-md">
                <div class="thumbnail-classic-figure"><img src="<?=base_url()?>assets/images/fullwidth-gallery-5-420x350.jpg" alt="" width="420" height="350"/>
                </div>
                <div class="thumbnail-classic-caption">
                  <div class="thumbnail-classic-title-wrap"><a class="icon fl-bigmug-line-zoom60" href="<?=base_url()?>assets/images/grid-gallery-5-1200x800-original.jpg" data-lightgallery="item"><img src="<?=base_url()?>assets/images/fullwidth-gallery-5-420x350.jpg" alt="" width="420" height="350"/></a>
                    <h5 class="thumbnail-classic-title"><a href="#">Home Calendar</a></h5>
                  </div>
                  <p class="thumbnail-classic-text">We work hard on every app to deliver top-notch features with great UI that you won’t find anywhere else.</p>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-lg-4 col-xxl-3 isotope-item wow fadeInLeft" data-filter="Type 1" data-wow-delay=".1s">
              <!-- Thumbnail Classic-->
              <article class="thumbnail thumbnail-classic thumbnail-md">
                <div class="thumbnail-classic-figure"><img src="<?=base_url()?>assets/images/fullwidth-gallery-6-420x350.jpg" alt="" width="420" height="350"/>
                </div>
                <div class="thumbnail-classic-caption">
                  <div class="thumbnail-classic-title-wrap"><a class="icon fl-bigmug-line-zoom60" href="<?=base_url()?>assets/images/grid-gallery-6-1200x800-original.jpg" data-lightgallery="item"><img src="<?=base_url()?>assets/images/fullwidth-gallery-6-420x350.jpg" alt="" width="420" height="350"/></a>
                    <h5 class="thumbnail-classic-title"><a href="#">MPlanner</a></h5>
                  </div>
                  <p class="thumbnail-classic-text">We work hard on every app to deliver top-notch features with great UI that you won’t find anywhere else.</p>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-lg-4 col-xxl-3 isotope-item wow fadeInLeft" data-filter="Type 2" data-wow-delay=".2s">
              <!-- Thumbnail Classic-->
              <article class="thumbnail thumbnail-classic thumbnail-md">
                <div class="thumbnail-classic-figure"><img src="<?=base_url()?>assets/images/fullwidth-gallery-7-420x350.jpg" alt="" width="420" height="350"/>
                </div>
                <div class="thumbnail-classic-caption">
                  <div class="thumbnail-classic-title-wrap"><a class="icon fl-bigmug-line-zoom60" href="<?=base_url()?>assets/images/grid-gallery-7-1200x800-original.jpg" data-lightgallery="item"><img src="<?=base_url()?>assets/images/fullwidth-gallery-7-420x350.jpg" alt="" width="420" height="350"/></a>
                    <h5 class="thumbnail-classic-title"><a href="#">Alice Messenger</a></h5>
                  </div>
                  <p class="thumbnail-classic-text">We work hard on every app to deliver top-notch features with great UI that you won’t find anywhere else.</p>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-lg-4 col-xxl-3 isotope-item wow fadeInLeft" data-filter="Type 3" data-wow-delay=".3s">
              <!-- Thumbnail Classic-->
              <article class="thumbnail thumbnail-classic thumbnail-md">
                <div class="thumbnail-classic-figure"><img src="<?=base_url()?>assets/images/fullwidth-gallery-8-420x350.jpg" alt="" width="420" height="350"/>
                </div>
                <div class="thumbnail-classic-caption">
                  <div class="thumbnail-classic-title-wrap"><a class="icon fl-bigmug-line-zoom60" href="<?=base_url()?>assets/images/grid-gallery-8-1200x800-original.jpg" data-lightgallery="item"><img src="<?=base_url()?>assets/images/fullwidth-gallery-8-420x350.jpg" alt="" width="420" height="350"/></a>
                    <h5 class="thumbnail-classic-title"><a href="#">WiseMoney</a></h5>
                  </div>
                  <p class="thumbnail-classic-text">We work hard on every app to deliver top-notch features with great UI that you won’t find anywhere else.</p>
                </div>
              </article>
            </div>
          </div>
        </div>
      </section>

      <!-- Years of experience-->
      <section class="section section-sm bg-default">
        <div class="container">
          <div class="row row-30 row-xl-24 justify-content-center align-items-center align-items-lg-start text-left">
            <div class="col-md-6 col-lg-5 col-xl-4 text-center"><a class="text-img" href="#">
                <div id="particles-js"></div><span class="counter">10</span></a></div>
            <div class="col-sm-8 col-md-6 col-lg-5 col-xl-4">
              <div class="text-width-extra-small offset-top-lg-24 wow fadeInUp">
                <h3 class="title-decoration-lines-left">Years of Experience</h3>
                <p class="text-gray-500">RatherApp is a team of highly experienced app designers and developers creating unique software for you.</p><a class="button button-secondary button-pipaluk" href="#">Get in touch</a>
              </div>
            </div>
            <div class="col-sm-10 col-md-8 col-lg-6 col-xl-4 wow fadeInRight" data-wow-delay=".1s">
              <div class="row justify-content-center border-2-column offset-top-xl-26">
                <div class="col-9 col-sm-6">
                  <div class="counter-amy">
                    <div class="counter-amy-number"><span class="counter">2</span><span class="symbol">k</span>
                    </div>
                    <h6 class="counter-amy-title">apps developed</h6>
                  </div>
                </div>
                <div class="col-9 col-sm-6">
                  <div class="counter-amy">
                    <div class="counter-amy-number"><span class="counter">40</span>
                    </div>
                    <h6 class="counter-amy-title">Consultants</h6>
                  </div>
                </div>
                <div class="col-9 col-sm-6">
                  <div class="counter-amy">
                    <div class="counter-amy-number"><span class="counter">12</span>
                    </div>
                    <h6 class="counter-amy-title">Awards won</h6>
                  </div>
                </div>
                <div class="col-9 col-sm-6">
                  <div class="counter-amy">
                    <div class="counter-amy-number"><span class="counter">160</span>
                    </div>
                    <h6 class="counter-amy-title">Employees</h6>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-xl-12 align-self-center">
              <div class="row row-30 justify-content-center">
                <div class="col-sm-6 col-md-5 col-lg-6 col-xl-3 wow fadeInLeft"><a class="clients-classic" href="#"><img src="<?=base_url()?>assets/images/clients-9-270x117.png" alt="" width="270" height="117"/></a></div>
                <div class="col-sm-6 col-md-5 col-lg-6 col-xl-3 wow fadeInLeft" data-wow-delay=".1s"><a class="clients-classic" href="#"><img src="<?=base_url()?>assets/images/clients-10-270x117.png" alt="" width="270" height="117"/></a></div>
                <div class="col-sm-6 col-md-5 col-lg-6 col-xl-3 wow fadeInLeft" data-wow-delay=".2s"><a class="clients-classic" href="#"><img src="<?=base_url()?>assets/images/clients-3-270x117.png" alt="" width="270" height="117"/></a></div>
                <div class="col-sm-6 col-md-5 col-lg-6 col-xl-3 wow fadeInLeft" data-wow-delay=".3s"><a class="clients-classic" href="#"><img src="<?=base_url()?>assets/images/clients-11-270x117.png" alt="" width="270" height="117"/></a></div>
              </div>
            </div>
          </div>
        </div>
      </section>