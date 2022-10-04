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
                    <span>1</span>
                    <p>Profile <br><span>personal info</span></p>
                </li>
                <li class="step">
                    <span>2</span>
                    <p>Billing <br><span>billing info</span></p>
                </li>
                <li class="step">
                    <span>3</span>
                    <p>Security <br><span>your settings</span></p>
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
            <div class="form-two form-step">
                <div class="bg-svg"></div>
                <h2>Billing Information</h2>
                <div>
                    <label for="phone">Phone</label>
                    <input type="tel" name="phone" id="phone" placeholder="+XXXXXXXXX">
                </div>
                <div>
                    <label for="address">Address</label>
                    <input type="text" name="address" id="address" placeholder="Street Address">
                </div>
                <div>
                    <label for="city">City</label>
                    <input type="text" name="city" id="city" placeholder="Nairobi">
                </div>
                <div>
                    <label for="country">Country</label>
                    <input type="text" name="country" id="country" placeholder="Kenya">
                </div>
                <div>
                    <label for="zip">Zip Code</label>
                    <input type="text" name="zip" id="zip" placeholder="Postal/Zip code">
                </div>
            </div>
            <div class="form-three form-step">
                <div class="bg-svg"></div>
                <h2>Security Information</h2>
                <div>
                    <label for="cpsd">Confirm Password</label>
                    <input type="password" name="password" id="cpsd" placeholder="XXXXXXXXX">
                </div>
                <div>
                    <label for="npsd">New Password</label>
                    <input type="password" name="npassword" id="npsd" placeholder="XXXXXXXXX">
                </div>
                <div>
                    <label for="cnpsd">Confirm New Password</label>
                    <input type="password" name="cnpassword" id="cnpsd" placeholder="XXXXXXXXX">
                </div>
                <div class="checkbox">
                    <input type="checkbox" name="check" checked>
                    <label>Receive our news letter and special offers</label>
                </div>
            </div> 
            <div class="btn-group">
                <button type="button" class="btn-prev">Back</button>
                <button type="button" class="btn-next">Next </button>
                <button type="button" class="btn-submit">Submit</button>
            </div>
        </form>
    </div>
    <div class="recent-orders-teeti">
                <h2>Recent Orders</h2>
                <table>
                    <div class="btn-group">
                        <button class="btn-add"><i class="bx bx-add-to-queue"></i> </button>
                    </div>
                    <br>
                    <thead>
                        <tr>
                            <th>Product Image</th>
                            <th>Product Name</th>
                            <th class="remove-item">Product Number</th>
                            <th class="remove-item">Payment</th>
                            <th class="remove-mob">Status</th>
                           
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                      
                        <tr>
                            <td><img src="<?=ROOT?>/dash/assets/img/Nike_Air_Mag_2016_zj2x44.jpg" alt=""></td>
                            <td>Eccomerce site with Admin</td>
                            <td class="remove-item">85631</td>
                            <td class="remove-item">Paid</td>
                            <td class="success-teeti remove-mob">confirmed</td>
                            
                            <td>
                                <i class="bx bx-edit"></i>
                                <i class="bx bx-trash"></i>
                            </td>
                        </tr>
                        
                    </tbody>
                    
                </table>
                <a href="#">Show All</a>
            </div>
    <!--END OF MAIN-->
    <?php $this->view("includes/dev/right")?>
     
</div>
<?php $this->view("includes/dev/dev-footnote", $data)?>
