<?php $this->view("includes/dev/dev-header", $data)?>

  <!-- ======= Header ======= -->
  <?php //$this->view("includes/dev/dev-nav", $data)?>
 
  
<div class="container-teeti">
    <?php $this->view("includes/dev/dev-aside")?>
    <!---End of side bar-->
    <h1>Dashboard</h1>
    <div class="date-teeti">
        <input type="date" class="date">
    </div>
    <div class="form-box">
        <div class="progress-profile">
            <div class="logo-profile">
                <a href="#"><span>.Teeti</span>Colab</a>
            </div>
            <ul class="progress-steps">
                <li class="step active">
                    <span>i.bx.bx-check-circle</span>
                    <p>Profile <br><span>personal info</span></p>
                </li>
                
            </ul>
        </div>
        <form method="post">
            <div class="form-one active form-step">
                <div class="bg-svg"></div>
                <h2>Personal Information</h2>
                <p>Update your profile correctly!</p>
                <div class="profile-pic">
                    <img class="img-prev" src="./assets/img/pexels-pixabay-60894_wsfqhk.jpg" alt="">
                    <div class="buttons-pic">
                        <i class="bx bx-upload up" onclick="openfileprev()"></i>
                        <input id="prof-pic" class="js-profile-img-input" type="file" name="image" style="display: none;"/>
                        <i class="bx bx-trash del"></i>
                    </div>
                </div>
                <div>
                    <label for="fname">First Name</label>
                    <input type="text" id="fname" name="fname" placeholder="e.g. John">
                </div>
                <div>
                    <label for="lname">Last Name</label>
                    <input type="text" id="lname" name="lname" placeholder="e.g. Doe">
                </div>
                <div>
                    <label for="email">Email</label>
                    <input type="email" value="<?=esc(Auth::getemail())?>" placeholder="e.g john@gmail.com">
                </div>
                <div class="birth">
                    <label for="bday">Date of Birth</label>
                    <div class="">
                        <input type="date" name="bday" id="bday">
                    </div>
                </div>
                
            </div>
            
            <div class="btn-group">
                
                <button type="button" class="btn-submit">Submit</button>
            </div>
        </form>
    </div>
    <!--END OF MAIN-->
    <?php $this->view("includes/dev/right")?>
     
</div>
<?php $this->view("includes/dev/dev-footnote", $data)?>
