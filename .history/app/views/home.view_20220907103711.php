
<?php $this->view('includes/header');?>
  <!-- ======= Header ======= -->
  <?php $this->view("includes/nav")?>
  <!--=============== MAIN ===============-->
<main class="main-content">

<!--=============== HOME ===============-->
  <section class="home" id="home">
      <div class="container">
          <!--intro-->
          <div class="intro">
              <!--avatar image-->
              <img src="<?=ROOT?>/portfolio/assets/img/avatar-1.svg" alt="Dennis">
              <!--info--->
                
                <?php if(!Auth::logged_in()):?>
                    <h1>Dennis Kateeti</h1>
                    <span>I'm a <span class="info-text">Full stack Developer</span></span>
                <?php else:?>
                    <?php if(Auth::is_client()):?>
                        <h1>Hi, <?= Auth::getusername();?></h1>
                        <span>Visit <span class="info-text">portal below to manage projects</span></span>
                    <?php else if(Auth::is_dev()):?>
                        <h1>Hi, <?= Auth::getusername();?></h1>
                        <span>Visit <span class="info-text">portal below to manage your services</span></span>
                    <?php else if(Auth::is_admin()):?>
                        <h1>Hi, <?= Auth::getusername();?></h1>
                        <span>Visit <span class="info-text">portal below to manage Teeticolab</span></span>
                    <?php endif;?>
                <?php endif;?>
              
              <!--social icons-->
              <ul class="social-icons">
                  <li><a href="#"><i class="lni lni-instagram-original"></i></a></li>
                  <li><a href="#"><i class="lni lni-twitter-original"></i></a></li>
                  <li><a href="#"><i class="lni lni-github-original"></i></a></li>
                  <li><a href="#"><i class="lni lni-discord"></i></a></li>
                  <li><a href="#"><i class="lni lni-pinterest"></i></a></li>
              </ul>
              <!--button-->
              <div>
                
                <?php if(!Auth::logged_in()):?>
                    <a href='<?=ROOT?>/login' _blank='true' class='hire-me btn btn-default'>Hire me</a>
                <?php else:?>
                    <a href='<?=ROOT?>/admin' _blank='true' class='hire-me btn btn-default'>Portal</a>
                <?php endif;?>
              </div>
              <!--scroll down mouse wheel-->
              <div class="scroll-down">
                  <a href="#" class="mouse-wrapper">
                      <span>Scroll Down</span>
                      <span class="mouse">
                          <span class="wheel"></span>
                      </span>
                  </a>
              </div>
          </div>
      </div>
  </section>
<!--=============== About ===============-->
<section class="about section" id="about">
    <div class="container">
        <h2 class="section-title padd-15">About Me</h2>
        <div class="row">
            <div class="about-img padd-15">
                <img src="<?=ROOT?>/portfolio/assets/img/avatar-2.svg" alt="">
            </div>
            <div class="about-content padd-15">
                <div class="rounded">
                   <div class="row">
                    <div class="about-text padd-15">
                        <!--about text-->
                        <p>I am Dennis, web developer from Nairobi, Kenya. I have rich experience in web design and web api integration...Am also good at making advanced php apps</p>
                        <div>
                            <a href="#" class="btn btn-default">Download CV</a>
                        </div>
                    </div>
                    <div class="skills padd-15">
                        <div class="row">
                            <!--skill item-->
                            <div class="skill-item">
                                <h4>Php</h4>
                                <div class="progress">
                                    <div class="progress-in"
                                    style="width: 95%; background: rgb(255, 209, 92);"></div>
                                    <div class="skill-percent">95%</div>
                                </div>
                            </div>
                            <!--skill item-->
                            <div class="skill-item">
                                <h4>javascript</h4>
                                <div class="progress">
                                    <div class="progress-in"
                                    style="width: 75%; background: rgb(255, 76, 96);"></div>
                                    <div class="skill-percent">75%</div>
                                </div>
                            </div>
                            <!--skill item-->
                            <div class="skill-item">
                                <h4>React Js</h4>
                                <div class="progress">
                                    <div class="progress-in"
                                    style="width: 75%; background: rgb(24, 184, 184);"></div>
                                    <div class="skill-percent">75%</div>
                                </div>
                            </div>
                            <!--skill item-->
                            <div class="skill-item">
                                <h4>Redux</h4>
                                <div class="progress">
                                    <div class="progress-in" 
                                    style="width: 65%; background: rgb(42, 106, 158);"></div>
                                    <div class="skill-percent">65%</div>
                                </div>
                            </div>
                            <!--skill item-->
                            <div class="skill-item">
                                <h4>Fast Api</h4>
                                <div class="progress">
                                    <div class="progress-in"
                                    style="width: 25%; background: rgb(219, 96, 14);"
                                    ></div>
                                    <div class="skill-percent">25%</div>
                                </div>
                            </div>
                            <!--skill item-->
                            <div class="skill-item">
                                <h4>Express Api</h4>
                                <div class="progress">
                                    <div class="progress-in"
                                    style="width: 85%; background: rgb(86, 129, 30);"></div>
                                    <div class="skill-percent">85%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                   </div> 
                   
                </div>
                
            </div>
        </div>
        <div class="row">
            <!--fact item-->
            <div class="fact-item padd-15">
               <i class="lni lni-thumbs-up"></i>
               <div class="details">
                <h3>198</h3>
                <p>Projects done</p>
               </div>
            </div>
            <!--fact item-->
            <div class="fact-item padd-15">
                <i class="lni lni-coffee-cup"></i>
                <div class="details">
                 <h3>6798</h3>
                 <p>Cup of Coffee</p>
                </div>
             </div>
             <!--fact item-->
            <div class="fact-item padd-15">
                <i class="lni lni-users"></i>
                <div class="details">
                 <h3>428</h3>
                 <p>Satisfied clients</p>
                </div>
             </div>
             <!--fact item-->
            <div class="fact-item padd-15">
                <i class="lni lni-cup"></i>
                <div class="details">
                 <h3>28</h3>
                 <p>Code Challenges</p>
                </div>
             </div>
       </div>
    </div>
</section>
<!--=============== Services ===============-->
<section class="services section" id="services">
    <div class="container">
        <!--section title-->
        <h2 class="section-title padd-15">Services</h2>
        <div class="row">
            <!--service item-->
            <div class="service-item padd-15">
                <div class="service-item-inner" style="background: rgb(108, 108, 229);">
                    <img src="<?=ROOT?>/portfolio/assets/img/service-1.svg" alt="">
                    <h3>UI/UX design</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi.</p>
                </div>
            </div>
            <!--service item-->
            <div class="service-item padd-15">
                <div class="service-item-inner" style="background: rgb(249, 215, 76);">
                    <img src="<?=ROOT?>/portfolio/assets/img/service-2.svg" alt="">
                    <h3>Full stack web app design</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi.</p>
                </div>
            </div>
            <!--service item-->
            <div class="service-item padd-15">
                <div class="service-item-inner" style="background: rgb(38,135,133);">
                    <img width="85px" height="75px" src="<?=ROOT?>/portfolio/assets/img/service-3.png" alt="">
                    <h3>Data management</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi.</p>
                </div>
            </div>
        </div>
        <div class="text padd-15">
           <p>Looking for a custom job? <a href="#">Click here</a> to join community! ????</p> 
        </div>
    </div>
</section>
<!--=============== Experience ===============-->
<section class="section" id="experience">
    <div class="container">
        <!--section title-->
        <h2 class="section-title padd-15">Experience</h2>
        <div class="row">
            <!--education-->
            <div class="education padd-15">
                <div class="row">
                    <div class="timeline-box">
                        <div class="timeline">
                            <!--timeline item-->
                            <div class="timeline-item">
                                <i class="lni lni-graduation timeline-icon"></i>
                                <h3 class="timeline-date">
                                    <i class="lni lni-calendar"></i> 2019 - present
                                </h3>
                                <h3 class="timeline-title">Bachelor's degree</h3>
                                <p class="timeline-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                            </div>
                            <!--timeline item-->
                            <div class="timeline-item">
                                <i class="lni lni-graduation timeline-icon"></i>
                                <h3 class="timeline-date">
                                    <i class="lni lni-calendar"></i> 2015 - 2018
                                </h3>
                                <h3 class="timeline-title">KCSE</h3>
                                <p class="timeline-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                            </div>
                            <!--timeline item-->
                            <div class="timeline-item">
                                <i class="lni lni-graduation timeline-icon"></i>
                                <h3 class="timeline-date">
                                    <i class="lni lni-calendar"></i> 2006 - 2014
                                </h3>
                                <h3 class="timeline-title">KCPE</h3>
                                <p class="timeline-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--experience-->
            <div class="experience padd-15">
                <div class="row">
                    <div class="timeline-box">
                        <div class="timeline">
                            <!--timeline item-->
                            <div class="timeline-item">
                                <i class="lni lni-code timeline-icon"></i>
                                <h3 class="timeline-date">
                                    <i class="lni lni-calendar"></i> 2022 - present
                                </h3>
                                <h3 class="timeline-title">Eccomerce web app design</h3>
                                <p class="timeline-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                            </div>
                            <!--timeline item-->
                            <div class="timeline-item">
                                <i class="lni lni-code timeline-icon"></i>
                                <h3 class="timeline-date">
                                    <i class="lni lni-calendar"></i> 2022 <small>april</small> - 2022 <small>july</small>
                                </h3>
                                <h3 class="timeline-title">Intern at DTB Bank</h3>
                                <p class="timeline-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=============== Pricing ===============-->
<section id="pricing" class="section pricing">
    <div class="container">
        <!--section title-->
        <h2 class="section-title padd-15">Pricing Plans</h2>
        <div class="row">
            <!--prices-->
            <div class="prices">
                <div class="price-item">
                    <img src="<?=ROOT?>/portfolio/assets/img/price-1.svg" alt="">
                    <h3 class="plan">Basic Project</h3>
                    <p>A simple option but powerful to manage your business.</p>
                    <p><span ><i class="lni lni-checkmark checkmark"></i></span>Occasional Email Support</p>
                    <p><span ><i class="lni lni-checkmark checkmark"></i></span>limited access to client portal</p>
                    <p><span><i class="lni lni-close cancelmark"></i></span>unlimited access to client portal</p>
                    <p><span><i class="lni lni-close cancelmark"></i></span>Unlimited Call Support</p>
                    <p><span><i class="lni lni-close cancelmark"></i></span>Discounts on total project fee</p>
                    <h3 class="price"><em>$</em>100 <span>Weekly</span></h3>
                    <a href="#" class="btn btn-default">Get Started</a>
                </div>
            </div>
            <!--prices-->
            <div class="prices">
                <div class="price-item best">
                    <div class="badge">Recommended</div>
                    <img src="<?=ROOT?>/portfolio/assets/img/price-2.svg" alt="">
                    <h3 class="plan">Premium Project</h3>
                    <p>Unlimited product including access to our client space which offers more feautures.</p>
                    <p><span ><i class="lni lni-checkmark checkmark"></i></span>Occasional Email Support</p>
                    <p><span ><i class="lni lni-checkmark checkmark"></i></span>limited access to client portal</p>
                    <p><span ><i class="lni lni-close cancelmark"></i></span>unlimited access to client portal</p>
                    <p><span ><i class="lni lni-checkmark checkmark"></i></span>limited(40 hours a week) Call and Dev Support</p>
                    <p><span ><i class="lni lni-checkmark checkmark"></i></span>Discounts on total project fee</p>
                    <h3 class="price"><em>$</em>200 <span>Weekly</span></h3>
                    <a href="#" class="btn btn-default">Get Started</a>
                </div>
            </div>
            <!--prices-->
            <div class="prices">
                <div class="price-item">
                    <img src="<?=ROOT?>/portfolio/assets/img/price-3.svg" alt="">
                    <h3 class="plan">Legacy Project</h3>
                    <p>A wise option for large companies and individuals.</p>
                    <p><span ><i class="lni lni-close cancelmark"></i></span>24/7 support</p>
                    <p><span ><i class="lni lni-checkmark checkmark"></i></span>Occasional Email Support</p>
                    <p><span ><i class="lni lni-checkmark checkmark"></i></span>unlimited access to client portal</p>
                    <p><span ><i class="lni lni-checkmark checkmark"></i></span>unlimited Call and Dev Support</p>
                    <p><span ><i class="lni lni-checkmark checkmark"></i></span>Discounts on total project fee</p>
                    
                    <h3 class="price"><em>$</em>400 <span>weekly</span></h3>
                    <a href="#" class="btn btn-default">Get Started</a>
                </div>
            </div>
        </div>
        <div class="text padd-15">
            <p>Please note this prices are only estimates and services offered will be used to range pricing <br> <a href="#services">Check out what i can do</a> ????</p> 
         </div>
    </div>
</section>
<!--=============== Portfolio ===============-->
<section class="portfolio section" id="portfolio">
    <div class="container">
        <!--section title-->
        <h2 class="section-title">Portfolio</h2>
        <div class="row">
            <div class="portfolio-filter padd-15">
                <div class="portfolio-filter-inner">
                    <button data-filter="all" type="button" class="active">
                        Everything
                    </button>
                    <button data-filter="php" type="button">
                        Php
                    </button>
                    <button data-filter="react" type="button">
                        React-redux
                    </button>
                    <button data-filter="backend" type="button">
                        Backend
                    </button>
                    <button data-filter="apps" type="button">
                        Apps
                    </button>
                </div>
            </div>

        </div>
        <div class="row">
            <!--portfolio item-->
            <div class="portfolio-item padd-15" data-category="php">
                <div class="portfolio-item-inner">
                    <div class="portfolio-item-thumbnail">
                        <img src="<?=ROOT?>/portfolio/assets/img/1.svg" alt="">
                        <div class="mask"></div>
                    </div>
                    <span class="term">Art, design</span>
                    <h3 class="portfolio-item-title">Project management Illustration</h3>
                    <span class="more-button">&hellip;</span>
                </div>
            </div>
            <!--portfolio item-->
            <div class="portfolio-item padd-15" data-category="react">
                <div class="portfolio-item-inner">
                    <div class="portfolio-item-thumbnail">
                        <img src="<?=ROOT?>/portfolio/assets/img/2.svg" alt="">
                        <div class="mask"></div>
                    </div>
                    <span class="term">Creative</span>
                    <h3 class="portfolio-item-title">Onboarding motivation</h3>
                    <span class="more-button">&hellip;</span>
                </div>
            </div>
            <!--portfolio item-->
            <div class="portfolio-item padd-15" data-category="backend">
                <div class="portfolio-item-inner">
                    <div class="portfolio-item-thumbnail">
                        <img src="<?=ROOT?>/portfolio/assets/img/4.svg" alt="">
                        <div class="mask"></div>
                    </div>
                    <span class="term">Api documentation</span>
                    <h3 class="portfolio-item-title">Api architecture using fast api</h3>
                    <span class="more-button">&hellip;</span>
                </div>
            </div>
            <!--portfolio item-->
            <div class="portfolio-item padd-15" data-category="apps">
                <div class="portfolio-item-inner">
                    <div class="portfolio-item-thumbnail">
                        <img src="<?=ROOT?>/portfolio/assets/img/3.svg" alt="">
                        <div class="mask"></div>
                    </div>
                    <span class="term">App design</span>
                    <h3 class="portfolio-item-title">modern app designs using flutter</h3>
                    <span class="more-button">&hellip;</span>
                </div>
            </div>
            <!--portfolio item-->
            <div class="portfolio-item padd-15" data-category="apps">
                <div class="portfolio-item-inner">
                    <div class="portfolio-item-thumbnail">
                        <img src="<?=ROOT?>/portfolio/assets/img/6.svg" alt="">
                        <div class="mask"></div>
                    </div>
                    <span class="term">App design</span>
                    <h3 class="portfolio-item-title">modern app designs using flutter</h3>
                    <span class="more-button">&hellip;</span>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=============== Testimonial ===============-->
<section class="section" id="testimonials">
    <div class="container">
        <!--section title-->
        <h2 class="section-title padd-15">Clients & Reviews</h2>
        <!--testimonial wrapper-->
        <div class="swiper testimonial-wrapper">
            <div class="swiper-wrapper">
                <!--testimonial item-->
                <div class="testimonial-item swiper-slide">
                    <div class="thumb">
                        <img src="<?=ROOT?>/portfolio/assets/img/avatar-1.svg" alt="">
                    </div>
                    <h3>Veronicah Kateeti</h3>
                    <div class="subtitle">Product designer at Dribble</div>
                    <div class="comment">I enjoy doing collaborative works with Teeti colab. You guys make
                        the process fun and interesting. Good luck! ????
                    </div>
                </div>
            
                <!--testimonial item-->
                <div class="testimonial-item swiper-slide">
                    <div class="thumb">
                        <img src="<?=ROOT?>/portfolio/assets/img/avatar-2.svg" alt="">
                    </div>
                    <h3>Claris Ambunya</h3>
                    <div class="subtitle">Programmer at Teeticolab</div>
                    <div class="comment">Created a good portfolio design
                        since then i've been getting job offers like never before. merci! ????
                    </div>
                </div>
                <!--testimonial item-->
                <div class="testimonial-item swiper-slide">
                    <div class="thumb">
                        <img src="<?=ROOT?>/portfolio/assets/img/avatar-3.svg" alt="">
                    </div>
                    <h3>Ahmed Singh</h3>
                    <div class="subtitle">Programmer at Teeticolab</div>
                    <div class="comment">Since i joined the teeticolab community i've 
                        grown so much in my skill. join the community today! ????
                    </div>
                </div>
                
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>
<!--=============== Blog ===============-->
<section class="section" id="blog">
    <div class="container">
        <!--section title-->
        <h2 class="section-title padd-15">Latest Posts</h2>
        <div class="row">
            <!--blog item-->
            <div class="blog-item padd-15">
                <div class="inner">
                    <div class="thumb">
                        <a href="#">
                            <span class="category">Reviews</span>
                        </a>
                        <a href="#">
                            <img src="<?=ROOT?>/portfolio/assets/img/1.svg" alt="">
                        </a>
                    </div>
                    <div class="details">
                        <h3 class="title">
                            <a href="#">5 Best App Developmet tool for your projects</a>
                        </h3>
                        <ul class="meta">
                            <li>09 February, 2021</li>
                            <li>Dennis</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--blog item-->
            <div class="blog-item padd-15">
                <div class="inner">
                    <div class="thumb">
                        <a href="#">
                            <span class="category">Common mistakes</span>
                        </a>
                        <a href="#">
                            <img src="<?=ROOT?>/portfolio/assets/img/3.svg" alt="">
                        </a>
                    </div>
                    <div class="details">
                        <h3 class="title">
                            <a href="#">5 mistakes developers do during development</a>
                        </h3>
                        <ul class="meta">
                            <li>09 February, 2021</li>
                            <li>Dennis</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--blog item-->
            <div class="blog-item padd-15">
                <div class="inner">
                    <div class="thumb">
                        <a href="#">
                            <span class="category">Support</span>
                        </a>
                        <a href="#">
                            <img src="<?=ROOT?>/portfolio/assets/img/2.svg" alt="">
                        </a>
                    </div>
                    <div class="details">
                        <h3 class="title">
                            <a href="#">5 reasons you should only hire a team with good support. </a>
                        </h3>
                        <ul class="meta">
                            <li>09 February, 2021</li>
                            <li>Dennis</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=============== Contact ===============-->

<!--=============== Footer ===============-->
<?php $this->view("includes/footnote")?>
</main>
<!--=============== Theme Customize ===============-->
<div class="customize-theme">
        <div class="card">
            <h2>Customize your view</h2>
            <p>Manage your font size, color and background</p>
            <!--font size-->
            <div class="font-size">
                <h3>Font Size</h3>
                <div>
                    <h6>Aa</h6>
                    <div class="choose-size">
                        <span class="font-size-1"></span>
                        <span class="font-size-2"></span>
                        <span class="font-size-3 active"></span>
                        <span class="font-size-4"></span>
                    </div>
                </div>
            </div>
            <!-- color -->
            <div class="color">
                <h3>Color</h3>
                <div class="choose-color">
                    <span class="color-1"></span>
                    <span class="color-2"></span>
                    <span class="color-3 active"></span>
                    <span class="color-4"></span>
                    <span class="color-5"></span>
                </div>
            </div>
            <!-- background -->
            <div class="background">
                <h3>background</h3>
                <div class="choose-bg">
                    <div class="bg-1">
                        <span></span>
                        <h5 for="bg-1">Light</h5>
                    </div>
                    <div class="bg-2 active">
                        <span></span>
                        <h5 for="bg-2">Dim</h5>
                    </div>
                    <div class="bg-3">
                        <span></span>
                        <h5 for="bg-3">Dark</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $this->view("includes/footer")?>