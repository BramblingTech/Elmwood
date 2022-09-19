<?php require('header.php') ;?>
      <section id="main">
        <div class="container">
          <div class="row">
            <div class="col-md-6 d-flex align-items-center">
              <div class="grey-blured">
                <h1>Tailored to suit your business needs</h1>
                <div class="title">
                  Customized solutions
                </div>
                <p>
                  At Elmwood, we will arrange our work schedule arround yours so that we can effectively conduct our practice without causing an inconvenience to your business
                </p>
                <a href="#" class="button">
                  LET`S TALK
                  <img src="/img/arrow-green.svg" alt="">
                </a>
              </div>
            </div>
            <div class="col-md-6">
              <div class="animation-images">
                <img src="/img/main/first/1.png" alt="">
                <img src="/img/main/first/2.png" alt="">
                <img src="/img/main/first/3.png" alt="">
                <img src="/img/main/first/4.png" alt="">
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <a href="#about" class="downbutton">
            <span>Scroll</span>
            <svg width="16" height="25" viewBox="0 0 16 25" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M7.64625 24.5054L0.146252 17.0054C-0.0490762 16.81 -0.0490762 16.4936 0.146252 16.2984C0.34158 16.103 0.657986 16.103 0.853267 16.2984L7.49977 22.9449L7.49977 1.15187C7.49977 0.875496 7.72341 0.651855 7.99978 0.651855C8.27616 0.651855 8.4998 0.875496 8.4998 1.15187L8.4998 22.9449L15.1462 16.2984C15.3416 16.103 15.658 16.103 15.8533 16.2984C15.9509 16.396 15.9997 16.524 15.9997 16.6519C15.9997 16.7798 15.9509 16.9077 15.8533 17.0054L8.35327 24.5054C8.15798 24.7007 7.84158 24.7007 7.64625 24.5054Z" fill="#EEEEEE"/>
            </svg>
          </a>
        </div>
      </section>
      <section id="about">
        <div class="container">
          <span class="page-tite">ABOUT US</span>
          <h2 class="title">Elmwood in a glance</h2>
          <div class="row">
            <div class="col-md-6">
              <img src="/img/main/about1.png" alt="">
            </div>
            <div class="col-md-6">
              <img src="/img/main/about2.png" alt="">
              <p>We are a group of professionals with extensive experience in various fields of accounting. Our experiences also vary from MNCs as well as SMEs of different industries.Our team comprises of Chartered Accountants (Singapore) as well as members of the Singapore Institute of Directors.</p>
              <a href="#" class="button">
                EXPLORE MORE
                <img src="/img/arrow-green.svg" alt="">
              </a>
            </div>
          </div>
        </div>
      </section>
      <section id="services">
        <div class="container">
          <span class="page-tite">OUR SERVICES</span>
          <h2 class="title">Proffesional help for your business</h2>
          <div class="slider-prof">
            <? for($i=0;$i<8;$i++):?>
            <div class="">
              <div class="slide-item">
                <div class="slide-title">
                  Company secretarial<br> services
                </div>
                <img src="/img/main/slider/1.png" alt="">
              </div>
            </div>
            <? endfor;?>
          </div>
          <div class="slick-navs">
            <div class="slick-counter">
              <span class="slick-current">1</span>/<span class="slick-total">4</span>
            </div>
            <div class="">
              <img class="prev-slide" src="/img/arrow-prev-slider.svg" alt="">
              <img class="next-slide" src="/img/arrow-next-slider.svg" alt="">
            </div>
            <div class="slick-progress">
              <div class="slick-progress-line"></div>
            </div>
          </div>
        </div>
      </section>
      <section id="offices">
        <div class="container">
          <span class="page-tite">ABOUT US</span>
          <h2 class="title">Elmwood in a glance</h2>
          <div class="row">
            <div class="col-md-4 offset-md-4">
              <img src="/img/main/globe.png" alt="">
            </div>
            <div class="col-md-4 d-flex flex-column justify-content-center">
              <span class="green">Singapore</span>
              <span>Elmwood management PTE LTD</span>
              <span>Elmwood group PTE LTD</span>
            </div>
          </div>
        </div>
      </section>
      <section id="work">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <span class="page-tite">CAREERS</span>
              <h2 class="title">Work with us</h2>
              <img src="/img/main/work1.png" alt="">
              <p>We provide resources and human capital to our clients based in the business in a perspective of career development and fruitful cooperation.</p>
              <a href="#" class="button">
                LET`S WORK TOGETHER
                <img src="/img/arrow-green.svg" alt="">
              </a>
            </div>
            <div class="col-md-6">
              <img src="/img/main/work2.png" alt="">
            </div>
          </div>
        </div>
      </section>
      <?php require('contactus-tpl.php') ;?>
<?php require('footer.php') ;?>
