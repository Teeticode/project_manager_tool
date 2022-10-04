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
    <?php if($action == 'add'):?>
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
                    <h2>Project Information</h2>
                    <p>Create a new Project !</p>
                    <div class="profile-pic">
                        <img class="img-prev" src="./assets/img/pexels-pixabay-60894_wsfqhk.jpg" alt="">
                        <div class="buttons-pic">
                            <i class="bx bx-upload up" onclick="openfileprev()"></i>
                            <input id="prof-pic" class="js-profile-img-input" type="file" name="image" style="display: none;"/>
                            <i class="bx bx-trash del"></i>
                        </div>
                    </div>
                    <div>
                        <label for="title">Title</label>
                        <input type="text" id="title" name="title" placeholder="e.g. John">
                    </div>
                    <div>
                        <label for="Category">Category</label>
                        <select name="category" id="">
                            <option value="">Select category</option>
                            <option value="Web Development">Web Development</option>
                            <option value="Data">Data</option>
                            <option value="Apps">Apps</option>
                            <option >Custom</option>
                        </select>
                    </div>
                    <button type="button" style="display:flex; align-items:center; justify-content:center; color: var(--color-dark); border-radius:10px; width:100px; height:50px; padding:14px; background-color: lightgray;" class="cust_inp"><i class="bx bx-add-to-queue"></i>&nbsp;&nbsp;category</button>
                    <div class="custom-input">
                        <input style="margin-top:10px;" class="default" type="text">
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
    <?php elseif($action=='edit'):?>

    <?php else:?>
        <div class="recent-orders-teeti">
            <h2>Recent Orders</h2>
            <table>
                <div class="btn-group">
                    <a href="<?=ROOT?>/developer/projects/add">
                    <button class="btn-add"><i class="bx bx-add-to-queue"></i> </button>
        
                    </a>
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
                            <i class="bx bx-edit" style="padding: 1rem;"></i>
                            <i class="bx bx-trash text-danger" style="padding: 1rem;"></i>
                        </td>
                    </tr>
                    
                </tbody>
                
            </table>
            <a href="#">Show All</a>
        </div>
    <?php endif;?>
    <!--END OF MAIN-->
    <?php $this->view("includes/dev/right")?>
     
</div>
<script>
    var custom_input = document.querySelector('.custom-input');
    var cust = document.querySelector('.cust_inp');
    cust.addEventListener('click', ()=>{
        var input = document.createElement('input');
        input.name = "category";
        input.type = "text";
        input.placeholder = "custom category";
        input.style.width = "100%";
        input.style.marginTop = "10px";
        input.addEventListener('input', ()=>{
            sessionStorage.setItem('input', JSON.stringify({name: input.name, placeholder: input.placeholder, value: input.value}))
        
        })
        
        var sess_inp = sessionStorage.getItem("input");
        var btn = document.createElement('button')
        
        var flex = document.createElement('div');
        console.log(JSON.stringify(sess_inp))
        custom_input.appendChild(input);
        custom_input.appendChild(btn);
    })

    var sess_inp = sessionStorage.getItem("input");
    var ses = JSON.parse(sess_inp)
    console.log(typeof(ses))
    if(ses){
        var default_inp = document.querySelector('.default')
        default_inp.name=ses.name
        default_inp.placeholder = ses.placeholder
        default_inp.value = ses.value
    }else{
        var default_inp = document.querySelector('.default');
        default_inp.style.display ='None'
    }
    
</script>
<?php $this->view("includes/dev/dev-footnote", $data)?>
