<!--=============== HEADER ===============-->
<header id="header" class="header">
        <!--nav-->
        <nav class="nav container padd-15">
          <!--nav logo-->
          <a href="#" class="nav-logo">
            <h2>Dennis</h2>
          </a>  
          <!--nav menu-->
          <div class="nav-menu" id="nav-menu">
            <!--nav list-->
            <ul class="nav-list">
                <li class="nav-item">
                    <a href="<?=ROOT?>/#home" class="nav-link active-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="<?=ROOT?>/#about" class="nav-link">About</a>
                </li>
                <li class="nav-item">
                    <a href="<?=ROOT?>/#services" class="nav-link">Services</a>
                </li>
                <li class="nav-item">
                    <a href="<?=ROOT?>/#experience" class="nav-link">Experience</a>
                </li>
                <li class="nav-item">
                    <a href="<?=ROOT?>/#pricing" class="nav-link">Pricing</a>
                </li>
                <li class="nav-item">
                    <a href="<?=ROOT?>/#portfolio" class="nav-link">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a href="<?=ROOT?>/#testimonials" class="nav-link">Reviews</a>
                </li>
                <li class="nav-item">
                    <a href="<?=ROOT?>/#blog" class="nav-link">Blog</a>
                </li>
                <?php if(Auth::logged_in()):?>
                    <a href="<?=ROOT?>/logout" class="nav-link btn">logout</a>
                <?php endif;?>
                <li class="nav-item">
                    
                </li>
            </ul>
            <div class="nav-close" id="nav-close">
                <i class="lni lni-close"></i>
            </div>
          </div>
          <!--nav btns-->
        <div class="nav-btns">
            <!--theme change btn-->
            <i class="lni lni-pallet change-theme" id="theme-button"></i>
            <!--toggle btn-->
            <div class="nav-toggle" id="nav-toggle">
                <i class="lni lni-grid-alt"></i>
            </div>
        </div>
        </div>
        </nav>
    </header>