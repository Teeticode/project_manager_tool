<?php $this->view("includes/dev/dev-header", $data)?>

  <!-- ======= Header ======= -->
  <?php $this->view("includes/dev/dev-nav", $data)?>
 
  <?php $this->view("includes/dev/dev-aside", $data)?>

<?php if(!empty($row)):?>
<div class="pagetitle">
  <h1>Profile</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item">Users</li>
      <li class="breadcrumb-item active">Profile</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section profile">
  <div class="row">
    <div class="col-xl-4">

      <div class="card">
        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

          <img 
          style="width:150px; max-width:150px; height:150px; object-fit: cover;"
          src="
          <?php
            if($row->image){
              echo ROOT."/".esc($row->image);
            }else{
              echo ROOT."/portfolio/assets/img/avatar-2.svg";
            }
          ?>
          " alt="Profile" class="rounded-circle">
          <h2><?=esc($row->username)?></h2>
          <span class="badge bg-primary text-dark p-2"><i class="bi bi-code me-1"></i> <?=esc($row->role)?></span>
          <div class="social-links mt-2">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
      </div>

    </div>

    <div class="col-xl-8">

      <div class="card">
        <div class="card-body pt-3">
          <!-- Bordered Tabs -->
          <ul class="nav nav-tabs nav-tabs-bordered">

            <li class="nav-item">
              <button onclick="set_tab(this.getAttribute('data-bs-target'))" class="nav-link " data-bs-toggle="tab" data-bs-target="#profile-overview" id="profile-overview">Overview</button>
            </li>

            <li class="nav-item">
              <button onclick="set_tab(this.getAttribute('data-bs-target'))" class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit" id="profile-edit">Edit Profile</button>
            </li>

            <li class="nav-item">
              <button onclick="set_tab(this.getAttribute('data-bs-target'))" class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings" id="profile-settings">Settings</button>
            </li>

            <li class="nav-item">
              <button onclick="set_tab(this.getAttribute('data-bs-target'))" class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password" id="profile-change-password">Change Password</button>
            </li>

          </ul>
          <div class="tab-content pt-2">

            <div class="tab-pane fade show active profile-overview" id="profile-overview">
              <h5 class="card-title">About</h5>
              <p class="small fst-italic">
              <?=esc($row->about)?>
              </p>

              <h5 class="card-title">Profile Details</h5>

              <div class="row">
                <div class="col-lg-3 col-md-4 label ">Username</div>
                <div class="col-lg-9 col-md-8"><?=esc($row->username)?></div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Company</div>
                <div class="col-lg-9 col-md-8"><?=esc($row->company)?></div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Role</div>
                <div class="col-lg-9 col-md-8"><?=esc($row->role)?></div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Country</div>
                <div class="col-lg-9 col-md-8"><?=esc($row->country)?></div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Address</div>
                <div class="col-lg-9 col-md-8"><?=esc($row->address)?></div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Phone</div>
                <div class="col-lg-9 col-md-8"><?=esc($row->phone)?></div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Email</div>
                <div class="col-lg-9 col-md-8"><?=esc($row->email)?></div>
              </div>

            </div>

            <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

              <!-- Profile Edit Form -->
              <?php
                if(!empty($errors)){
                  show($errors);
              }
              ?>
              <form method="post" enctype="multipart/form-data">
                <div class="row mb-3">
                  <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                  <div class="col-md-8 col-lg-9">
                    <div class="d-flex">
                      <img style="width:200px; max-width:200px; height:200px; flex:2; object-fit:cover;" class="js-image-preview" src="<?php 
                        if($row->image){
                          echo ROOT."/".esc($row->image);
                        }else{
                          echo ROOT."/portfolio/assets/img/avatar-2.svg";
                        }
                      ?>" alt="Profile">
                      <div class="js-filename m-2" style=" width:30%;overflow: hidden;">Selected File: None</div>
                    </div>
                    
                    <div class="pt-2">
                      <label class="btn btn-primary btn-sm" title="Upload new profile image">
                        <i class="text-white bi bi-upload"></i>
                        <input onchange="load_image(this.files[0])" type="file" name="image" style="display: none;"/>
                      </label>
                      <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                      <?php if(!empty($errors['image'])):?>
                        <small class="text-danger"><?=$errors['image']?></small>
                      <?php endif;?>
                    </div>
                  </div>
                </div>

                

                <div class="row mb-3">
                  <label for="about" class="col-md-4 col-lg-3 col-form-label">About</label>
                  <div class="col-md-8 col-lg-9">
                    <textarea name="about" class="form-control" id="about" style="height: 100px">
                      <?=set_value('about',$row->about)?>
                    </textarea>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="company" class="col-md-4 col-lg-3 col-form-label">Company</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="company" type="text" class="form-control" id="company" value="<?=set_value('company',$row->company)?>">
                  </div>
                </div>

             

                <div class="row mb-3">
                  <label for="Country" class="col-md-4 col-lg-3 col-form-label">Country</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="country" type="text" class="form-control" id="Country" value="<?=set_value('country',$row->country)?>">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="Address" class="col-md-4 col-lg-3 col-form-label">Address</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="address" type="text" class="form-control" id="Address" value="<?=set_value('address',$row->address)?>">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="phone" type="text" class="form-control" id="Phone" value="<?=set_value('phone',$row->phone)?>">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="email" type="email" class="form-control" id="Email" value="<?=set_value('email@gmail.com',$row->email)?>">
                  </div>
                  <?php if(!empty($errors['email'])):?>
                        <small class="text-danger"><?=$errors['email']?></small>
                      <?php endif;?>
                </div>


                
                  <div class="row mb-3">
                  <label for="Github" class="col-md-4 col-lg-3 col-form-label">Github Profile</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="github" type="text" class="form-control" id="Github" value="<?=set_value('https://github.com/#', $row->github)?>">
                  </div>
                  <?php if(!empty($errors['github'])):?>
                        <small class="text-danger"><?=$errors['github']?></small>
                      <?php endif;?>
                </div>

                <div class="row mb-3">
                  <label for="Linkedin" class="col-md-4 col-lg-3 col-form-label">Linkedin Profile</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="linkedin" type="text" class="form-control" id="Linkedin" value="<?=set_value('https://linkedin.com/#', $row->linkedin)?>">
                  </div>
                  <?php if(!empty($errors['linkedin'])):?>
                        <small class="text-danger"><?=$errors['linkedin']?></small>
                      <?php endif;?>
                </div>
                

                <div class="text-center">
                  <a href="<?=ROOT?>/developer/">    
                    <button type="button" class="btn btn-primary float-end">Back</button>
                  </a>
                  <button type="submit" class="btn btn-danger float-start">Save Changes</button>
                  
                </div>
              </form><!-- End Profile Edit Form -->

            </div>

            <div class="tab-pane fade pt-3" id="profile-settings">

              <!-- Settings Form -->
              <form>

                <div class="row mb-3">
                  <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Email Notifications</label>
                  <div class="col-md-8 col-lg-9">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="changesMade" checked>
                      <label class="form-check-label" for="changesMade">
                        Changes made to your account
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="newProducts" checked>
                      <label class="form-check-label" for="newProducts">
                        Information on new products and services
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="proOffers">
                      <label class="form-check-label" for="proOffers">
                        Marketing and promo offers
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="securityNotify" checked disabled>
                      <label class="form-check-label" for="securityNotify">
                        Security alerts
                      </label>
                    </div>
                  </div>
                </div>

                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
              </form><!-- End settings Form -->

            </div>

            <div class="tab-pane fade pt-3" id="profile-change-password">
              <!-- Change Password Form -->
              <form>

                <div class="row mb-3">
                  <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="password" type="password" class="form-control" id="currentPassword">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="newpassword" type="password" class="form-control" id="newPassword">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="renewpassword" type="password" class="form-control" id="renewPassword">
                  </div>
                </div>

                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Change Password</button>
                </div>
              </form><!-- End Change Password Form -->

            </div>

          </div><!-- End Bordered Tabs -->

        </div>
      </div>

    </div>
  </div>
</section>
<?php else:?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                That profile doesnt exist!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  <?php endif;?>

<?php $this->view("includes/dev/dev-footer",$data)?>
  
<style>
  @media(max-width:424px){
    .js-filename{
      display: none;
    }
    
  }
</style>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <script>
    var tab = sessionStorage.getItem("tab") ? sessionStorage.getItem("tab"): "#profile-overview";
   
    function show_tab(tab_name){   
      const someTabTriggerEl = document.querySelector(tab_name);
      someTabTriggerEl.classList.add("active")
      someTabTriggerEl.foreach((n)=>{console.log(n)})
      
    }
     function set_tab(tab_name){
      
      sessionStorage.setItem("tab", tab_name);
      
    }
    

    function load_image(file){
      document.querySelector('.js-filename').innerHTML = "Selected File: " + file.name;
      var mylink = window.URL.createObjectURL(file);

      document.querySelector('.js-image-preview').src = mylink;
    }
    
    window.onload = function(){
     //show_tab("#profile-edit");
     show_tab(tab);
    }
  </script>
  <?php $this->view("includes/dev/dev-footnote", $data)?>