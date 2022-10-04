<?php $this->view("includes/dev/dev-header", $data)?>

  <!-- ======= Header ======= -->
  <?php //$this->view("includes/dev/dev-nav", $data)?>
 
  
<div class="container-teeti">
    <?php $this->view("includes/dev/dev-aside")?>
    <!---End of side bar-->
    <h1>Projects</h1>
    <div class="date-teeti">
        <input type="date" class="date">
    </div>
    <?php if($action == 'add'):?>
        <div class="form-box">
            <div class="progress-profile">
                <a href="<?=ROOT?>/developer/projects" style="width: 30px; border-radius:50%; display:flex; justify-content:center; align-items:center; color:white; height:30px; background-color: var(--color-primary);">
                    <i class="bx bx-chevron-left" style="font-size: 20px;"></i>
                </a>
                <div class="logo-profile">
                    <a href="#"><span>.Teeti</span>Colab</a>
                </div>
                <ul class="progress-steps">
                    <li class="step active">
                        <span>1</span>
                        <p>Project <br><span>Register your project</span></p>
                    </li>
                    
                </ul>
            </div>
            <form method="post" enctype="multipart/form-data">
                <div class="form-one active form-step">
                    <div class="bg-svg"></div>
                    <h2>Project Information</h2>
                    <p>Create a new Project !</p>
                    <div class="profile-pic">
                        <img class="img-prev" src="./assets/img/pexels-pixabay-60894_wsfqhk.jpg" alt="">
                        <div class="buttons-pic">
                            <i class="bx bx-upload up" onclick="openfileprev()"></i>
                            <input id="prof-pic" class=" js-profile-img-input" type="file"  style="display: none;"/>
                            <i class="bx bx-trash del"></i>
                        </div>
                    </div>
                    <div>
                        <label for="title">Title</label>
                        <input type="text" value="<?= set_value('title')?>" style="<?= $errors['title']?  "border: 1px solid var(--color-danger);" : ""?>" id="title" name="title" placeholder="e.g. PHP MVC CRUD APP">
                        <?php if(!empty($errors['title'])):?>
                            <small class="js-error-title text-danger "><?=$errors['title']?></small>
                        <?php endif;?>
                    </div>

                    <div>
                        <label for="Category">Service Category</label>
                        <select style="<?= $errors['services_id']?  "border: 1px solid var(--color-danger);" : ""?>" name="services_id" id="">
                            <option value=""></option>
                            <?php if(!empty($services)):?>
                                <?php show($_POST['services_id'])?>
                                <?php foreach($services as $serve):?>
                                    <option <?= set_select('services_id',$serve->id)?> value="<?= esc($serve->id) ?>"><?= esc($serve->service) ?></option>
                                <?php endforeach;?>
                            <?php endif;?>
                        </select>
                        <?php if(!empty($errors['services_id'])):?>
                            <small class="js-error-services text-danger"><?=$errors['services_id']?></small>
                        <?php endif;?>
                    </div>

                    <div>
                        <label for="default">Skills</label>
                        <div class="skills" style="display: flex; align-items:center; justify-content:space-evenly;">
                            <button type="button" style="cursor:pointer; display:flex; align-items:center; justify-content:center; color: var(--color-dark); border-radius:10px; width:100px; height:50px; padding:14px; background-color: lightgray; font-size:30px;" class="cust_inp">+</button>
                        </div>
                        <div class="custom-input" style="display: flex; align-items:center; justify-content:space-between;">
                            <input name="skills" style="display: none;"/>
                            <?php if(!empty($errors['skills'])):?>
                                <small class="js-error-github text-danger"><?=$errors['skills']?></small>
                            <?php endif;?>
                        </div>
                    
                    </div>
                    
                </div>
                
                <div class="btn-group" style="display: flex; align-items:center; justify-content:center;">
                    <button type="submit" class="btn-save">Save</button>
                    
                    
                </div>
            </form>
        </div>
    <?php elseif($action=='edit'):?>
        <div class="form-box">
            <div class="progress-profile">
                <a href="<?=ROOT?>/developer/projects" style="width: 30px; border-radius:50%; display:flex; justify-content:center; align-items:center; color:white; height:30px; background-color: var(--color-primary);">
                    <i class="bx bx-chevron-left" style="font-size: 20px;"></i>
                </a>
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
                        <input type="text" id="title" name="title" placeholder="e.g. PHP MVC CRUD APP">
                        <?php if(!empty($errors['title'])):?>
                            <small class="js-error-github text-danger"><?=$errors['title']?></small>
                        <?php endif;?>
                    </div>
                    <div>
                        <label for="Category">Service Category</label>
                        <select name="services_id" id="">
                            <option value="">Select Service Category</option>
                            <?php if(!empty($services)):?>
                                <?php foreach($services as $service):?>
                                    <option value="<?= esc($service->id) ?>"><?= esc($service->service) ?></option>
                                <?php endforeach;?>
                            <?php endif;?>
                        </select>
                        <?php if(!empty($errors['services_id'])):?>
                            <small class="js-error-github text-danger"><?=$errors['services_id']?></small>
                        <?php endif;?>
                    </div>

                    
                        <label for="default">Skills</label>
                        <div class="skills" style="display: flex; align-items:center; justify-content:space-evenly;">
                            <button type="button" style="cursor:pointer; display:flex; align-items:center; justify-content:center; color: var(--color-dark); border-radius:10px; width:100px; height:50px; padding:14px; background-color: lightgray; font-size:30px;" class="cust_inp">+</button>
                        </div>
                        <div class="custom-input" style="display: flex; align-items:center; justify-content:space-between;">
                            
                            <?php if(!empty($errors['skills'])):?>
                                <small class="js-error-github text-danger"><?=$errors['skills']?></small>
                            <?php endif;?>
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
                    
                </div>
            </form>
        </div>
    <?php else:?>
        <div class="insights-teeti">
            <div class="sales-teeti">
                <i class="bx bx-code"></i>  
                <div class="middle-teeti">
                <div class="left-teeti">
                    <h3>Total </h3>
                    <h1>5</h1>
                </div>
                <div class="progress-teeti">
                    <svg>
                        <circle cx="38" cy="38" r="36"></circle>
                    </svg>
                    <div class="number">
                        <p>81%</p>
                    </div>
                </div>
                </div>
                <small class="text-muted-teeti">last 24 HRS</small>
            </div>
            <!---End of Sale-->
            <div class="expenses-teeti">
                <i class="bx bx-info-circle"></i>  
                <div class="middle-teeti">
                <div class="left-teeti">
                    <h3>Pending </h3>
                    <h1>4</h1>
                </div>
                <div class="progress-teeti">
                    <svg>
                        <circle cx="38" cy="38" r="36"></circle>
                    </svg>
                    <div class="number">
                        <p>31%</p>
                    </div>
                </div>
                </div>
                <small class="text-muted-teeti">last 24 HRS</small>
            </div>
            <!---End of Expenses-->
            <div class="profit-teeti">
                <i class="bx bx-check-circle"></i>  
                <div class="middle-teeti">
                    <div class="left-teeti">
                        <h3>Finished</h3>
                        <h1>8</h1>
                    </div>
                    <div class="progress-teeti">
                        <svg>
                            <circle cx="38" cy="38" r="36"></circle>
                        </svg>
                        <div class="number">
                            <p>37%</p>
                        </div>
                    </div>
                </div>
                <small class="text-muted-teeti">last 24 HRS</small>
            </div>
                <!---End of Profit-->
        </div>
        <div class="recent-orders-teeti" >
            <h2>Recent Orders</h2>
            <table >
                <div class="btn-group">
                    <a href="<?=ROOT?>/developer/projects/add">
                    <button class="btn-add"><i class="bx bx-add-to-queue"></i> </button>
        
                    </a>
                </div>
                <br>
                <thead>
                    <h2 style="text-align: center; text-transform:uppercase; margin:9px; text-decoration:underline;"> 
                        <?php if(!empty($rows)): ?>
                            
                                <?= esc(Auth::getusername())?>'s Projects
                            
                        <?php endif;?>
                    </h2>
                    <tr>
                        <th>Project Image</th>
                        <th>Project Name</th>
                        <th class="remove-item">Service Category</th>
                        <th class="remove-item">date</th>
                        <th class="remove-item">Project Number</th>
                        
                        <th class="remove-mob">Status</th>
                        
                        <th>Action</th>
                    </tr>
                    <hr/>
                </thead>
                
                <?php if(!empty($rows)):?>
                <tbody>
                    <?php foreach($rows as $row):?>
                        <tr>
                            <td><img src="<?= ($row->project_img) ? ROOT.'/uploads/'.$row->project_img : ROOT.'/portfolio/assets/img/3.svg'?>" alt=""></td>
                            <td><?= esc($row->title)?></td>
                            <td class="remove-item"><?= esc($row->services_row->service)?></td>
                            <td class="remove-item"><?= get_date(esc($row->date))?></td>
                            <td class="remove-item"><?= esc($row->projectid)?></td>
                           
                            <td class=" remove-mob" >
                                <p class="<?= (esc($row->approved) === '0') ? 'text-danger' : 'text-success'?>"><?= (esc($row->approved) === '0') ? 'pending' : 'approved' ?></p>  
                            </td>
                            
                            <td style="display:flex; align-items:center; justify-content:center; margin-top:15px;">
                                <a href="<?=ROOT?>/developer/projects/edit"><i class="bx bx-edit" style="padding: 1rem;"></i></a>
                            </td>
                        </tr>
                    <?php endforeach;?>   
                </tbody>
                <?php endif;?>
                
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
        
        input.name = "skills";
        input.type = "text";
        input.placeholder = "eg logo design";
        input.style.width = "100%";
        input.style.marginTop = "10px";
        
        
        var sess_inp = sessionStorage.getItem("input");
        
  
        custom_input.appendChild(input);

        var inputs = custom_input.querySelectorAll('input')
        for (let i = 0; i < inputs.length; i++) {
            inputs[i].addEventListener('input', ()=>{
                sessionStorage.setItem('input'+i, JSON.stringify({name: inputs[i]?.name, placeholder: inputs[i]?.placeholder, value: inputs[i]?.value}))
                
            })
        }

        if(inputs.length == 3){
            var skills = document.querySelector('.skills')
            
            skills.children[0].disabled = true;
            skills.children[0].innerHTML = "&#10003;"
        }
        
        
    })
 
    var arr = []
    
    for (let i = 0; i < 3; i++) {
        
        var sess_inp = sessionStorage.getItem("input"+i);
        var ses = JSON.parse(sess_inp)
        
        if (sessionStorage.getItem("input"+i) !== null){
            arr.push(ses) 
        }else if (sessionStorage.getItem("input"+i) !== null ){
            arr.push(ses) 
        }else if(sessionStorage.getItem("input"+i) !== null){
            arr.push(ses) 
        }
        
       
    }
    
    if(arr){
        for (let i = 0; i < arr.length; i++) {
            var input = document.createElement('input');
            input.name = arr[i]?.name;
            input.value = arr[i]?.value;
            input.placeholder = arr[i]?.placeholder;
            input.style.width = "100%";
            input.style.marginTop = "10px";
            
            var skills = document.querySelector('.skills')
            
            
            custom_input.appendChild(input);
            
        }
        
        var btn = document.createElement('button')
            btn.innerHTML = '<i class="bx bx-trash"></i>'
            btn.style.backgroundColor = "var(--color-light)";
            btn.style.borderRadius = "50%"
            btn.style.padding = "8px"
            btn.style.marginTop = "10px"
            btn.style.cursor = "pointer"
            skills.appendChild(btn);
            btn.addEventListener('click', ()=>{
                sessionStorage.clear();
                window.location.reload();
            })
    }
    var inputs = custom_input.querySelectorAll('input')


   if(inputs.length == 3){
        var skills = document.querySelector('.skills')
        skills.children[0].disabled = true;
        skills.children[0].innerHTML = "&#10003;"
   }
    for (let i = 0; i < inputs.length; i++) {
        inputs[i].addEventListener('input', ()=>{
                sessionStorage.setItem('input'+[i], JSON.stringify({name: inputs[i].name, placeholder: inputs[i].placeholder, value: inputs[i].value}))
            
        })
        
    }
   
    
</script>
<?php $this->view("includes/dev/dev-footnote", $data)?>
