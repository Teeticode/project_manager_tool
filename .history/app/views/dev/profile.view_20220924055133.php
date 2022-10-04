<?php $this->view("includes/dev/dev-header", $data)?>

  <!-- ======= Header ======= -->
  <?php //$this->view("includes/dev/dev-nav", $data)?>
 
  <?php if(!empty($row)):?>
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
                    <span><i class="bx bx-check"></i></span>
                    <p>Profile <br><span>personal info</span></p>
                </li>
                
            </ul>
        </div>
        <form method="post" enctype="multipart/form-data">
            <div class="form-one active form-step">
                <div class="bg-svg"></div>
                <h2>Personal Information</h2>
                
                <p>Update your profile correctly!</p>
                <div class="profile-pic">
                    <img class="img-prev" src="<?php 
                        if($row->image){
                          echo ROOT."/".esc($row->image);
                        }else{
                          echo ROOT."/dash/assets/img/avatar-1.svg";
                        }
                      ?>" alt="">
                    <div class="buttons-pic">
                        <i class="bx bx-upload up" onclick="openfileprev()"></i>
                        <input id="prof-pic" onchange="load_image(this.files[0])" class="js-profile-img-input" type="file" name="image" style="display: none;"/>
                        <i class="bx bx-trash del"></i>
                    </div>
                    <?php if(!empty($errors['image'])):?>
                        <small class="js-error-image text-danger"><?=$errors['image']?></small>
                    <?php endif;?>
                    <small class="js-error-image text-danger"></small>
                </div>
                <div>
                    <label for="fname">First Name</label>
                    <input type="text" class="js-profile-fname" id="fname" name="fname" value="<?=set_value("write me", $row->fname)?>" placeholder="e.g. John">
                    <?php if(!empty($errors['fname'])):?>
                        <small class="js-error-fname text-danger"><?=$errors['fname']?></small>
                    <?php endif;?>
                    <small class="js-error-fname text-danger"></small>
                </div>
                <div>
                    <label for="lname">Last Name</label>
                    <input type="text" id="lname" value="<?=set_value("write me", $row->lname)?>" class="js-profile-lname" name="lname" placeholder="e.g. Doe">
                    <?php if(!empty($errors['lname'])):?>
                        <small class="js-error-lname text-danger"><?=$errors['lname']?></small>
                    <?php endif;?>
                    <small class="js-error-lname text-danger"></small>
                </div>
                <div class="grouping">
                    <label for="country">phone</label>
                    <!-- country codes (ISO 3166) and Dial codes. -->
                    <div class="country-num">
                    <select style="width: 80px; height: 40px;" class="js-profile-country" value="<?=set_value($row->country)?>"  name="country" id="">
                        <option data-countryCode="GB" ><?=esc($row->country)?></option>
                        
                        <optgroup label="Other countries" value="<?=set_value($row->country)?>">
                            <option data-countryCode="DZ" value="Algeria (+213)">Algeria (+213)</option>
                            <option data-countryCode="AD" value="Andorra (+376)">Andorra (+376)</option>
                            <option data-countryCode="AO" value="Angola (+244)">Angola (+244)</option>
                            <option data-countryCode="AI" value="Anguilla (+1264)">Anguilla (+1264)</option>
                            <option data-countryCode="AG" value="Antigua &amp; Barbuda (+1268)">Antigua &amp; Barbuda (+1268)</option>
                            <option data-countryCode="AR" value="Argentina (+54)">Argentina (+54)</option>
                            <option data-countryCode="AM" value="Armenia (+374)">Armenia (+374)</option>
                            <option data-countryCode="AW" value="Aruba (+297)">Aruba (+297)</option>
                            <option data-countryCode="AU" value="Australia (+61)">Australia (+61)</option>
                            <option data-countryCode="AT" value="Austria (+43)">Austria (+43)</option>
                            <option data-countryCode="AZ" value="Azerbaijan (+994)">Azerbaijan (+994)</option>
                            <option data-countryCode="BS" value="Bahamas (+1242)">Bahamas (+1242)</option>
                            <option data-countryCode="BH" value="Bahrain (+973)">Bahrain (+973)</option>
                            <option data-countryCode="BD" value="Bangladesh (+880)">Bangladesh (+880)</option>
                            <option data-countryCode="BB" value="Barbados (+1246)">Barbados (+1246)</option>
                            <option data-countryCode="BY" value="Belarus (+375)">Belarus (+375)</option>
                            <option data-countryCode="BE" value="Belgium (+32)">Belgium (+32)</option>
                            <option data-countryCode="BZ" value="Belize (+501)">Belize (+501)</option>
                            <option data-countryCode="BJ" value="Benin (+229)">Benin (+229)</option>
                            <option data-countryCode="BM" value="Bermuda (+1441)">Bermuda (+1441)</option>
                            <option data-countryCode="BT" value="Bhutan (+975)">Bhutan (+975)</option>
                            <option data-countryCode="BO" value="Bolivia (+591)">Bolivia (+591)</option>
                            <option data-countryCode="BA" value="Bosnia Herzegovina (+387)">Bosnia Herzegovina (+387)</option>
                            <option data-countryCode="BW" value="Botswana (+267)">Botswana (+267)</option>
                            <option data-countryCode="BR" value="Brazil (+55)">Brazil (+55)</option>
                            <option data-countryCode="BN" value="Brunei (+673)">Brunei (+673)</option>
                            <option data-countryCode="BG" value="Bulgaria (+359)">Bulgaria (+359)</option>
                            <option data-countryCode="BF" value="Burkina Faso (+226)">Burkina Faso (+226)</option>
                            <option data-countryCode="BI" value="Burundi (+257)">Burundi (+257)</option>
                            <option data-countryCode="KH" value="Cambodia (+855)">Cambodia (+855)</option>
                            <option data-countryCode="CM" value="Cameroon (+237)">Cameroon (+237)</option>
                            <option data-countryCode="CA" value="Canada (+1)">Canada (+1)</option>
                            <option data-countryCode="CV" value="Cape Verde Islands (+238)">Cape Verde Islands (+238)</option>
                            <option data-countryCode="KY" value="Cayman Islands (+1345)">Cayman Islands (+1345)</option>
                            <option data-countryCode="CF" value="Central African Republic (+236)">Central African Republic (+236)</option>
                            <option data-countryCode="CL" value="Chile (+56)">Chile (+56)</option>
                            <option data-countryCode="CN" value="China (+86)">China (+86)</option>
                            <option data-countryCode="CO" value="Colombia (+57)">Colombia (+57)</option>
                            <option data-countryCode="KM" value="Comoros (+269)">Comoros (+269)</option>
                            <option data-countryCode="CG" value="Congo (+242)">Congo (+242)</option>
                            <option data-countryCode="CK" value="Cook Islands (+682)">Cook Islands (+682)</option>
                            <option data-countryCode="CR" value="Costa Rica (+506)">Costa Rica (+506)</option>
                            <option data-countryCode="HR" value="Croatia (+385)">Croatia (+385)</option>
                            <option data-countryCode="CU" value="Cuba (+53)">Cuba (+53)</option>
                            <option data-countryCode="CY" value="Cyprus North (+90392)">Cyprus North (+90392)</option>
                            <option data-countryCode="CY" value="Cyprus South (+357)">Cyprus South (+357)</option>
                            <option data-countryCode="CZ" value="Czech Republic (+42)">Czech Republic (+42)</option>
                            <option data-countryCode="DK" value="Denmark (+45)">Denmark (+45)</option>
                            <option data-countryCode="DJ" value="Djibouti (+253)">Djibouti (+253)</option>
                            <option data-countryCode="DM" value="Dominica (+1809)">Dominica (+1809)</option>
                            <option data-countryCode="DO" value="Dominican Republic (+1809)">Dominican Republic (+1809)</option>
                            <option data-countryCode="EC" value="Ecuador (+593)">Ecuador (+593)</option>
                            <option data-countryCode="EG" value="Egypt (+20)">Egypt (+20)</option>
                            <option data-countryCode="SV" value="El Salvador (+503)">El Salvador (+503)</option>
                            <option data-countryCode="GQ" value="Equatorial Guinea (+240)">Equatorial Guinea (+240)</option>
                            <option data-countryCode="ER" value="Eritrea (+291)">Eritrea (+291)</option>
                            <option data-countryCode="EE" value="Estonia (+372)">Estonia (+372)</option>
                            <option data-countryCode="ET" value="Ethiopia (+251)">Ethiopia (+251)</option>
                            <option data-countryCode="FK" value="Falkland Islands (+500)">Falkland Islands (+500)</option>
                            <option data-countryCode="FO" value="Faroe Islands (+298)">Faroe Islands (+298)</option>
                            <option data-countryCode="FJ" value="Fiji (+679)">Fiji (+679)</option>
                            <option data-countryCode="FI" value="Finland (+358)">Finland (+358)</option>
                            <option data-countryCode="FR" value="France (+33)">France (+33)</option>
                            <option data-countryCode="GF" value="French Guiana (+594)">French Guiana (+594)</option>
                            <option data-countryCode="PF" value="French Polynesia (+689)">French Polynesia (+689)</option>
                            <option data-countryCode="GA" value="Gabon (+241)">Gabon (+241)</option>
                            <option data-countryCode="GM" value="Gambia (+220)">Gambia (+220)</option>
                            <option data-countryCode="GE" value="Georgia (+7880)">Georgia (+7880)</option>
                            <option data-countryCode="DE" value="Germany (+49)">Germany (+49)</option>
                            <option data-countryCode="GH" value="Ghana (+233)">Ghana (+233)</option>
                            <option data-countryCode="GI" value="Gibraltar (+350)">Gibraltar (+350)</option>
                            <option data-countryCode="GR" value="Greece (+30)">Greece (+30)</option>
                            <option data-countryCode="GL" value="Greenland (+299)">Greenland (+299)</option>
                            <option data-countryCode="GD" value="Grenada (+1473)">Grenada (+1473)</option>
                            <option data-countryCode="GP" value="Guadeloupe (+590)">Guadeloupe (+590)</option>
                            <option data-countryCode="GU" value="Guam (+671)">Guam (+671)</option>
                            <option data-countryCode="GT" value="Guatemala (+502)">Guatemala (+502)</option>
                            <option data-countryCode="GN" value="Guinea (+224)">Guinea (+224)</option>
                            <option data-countryCode="GW" value="Guinea - Bissau (+245)">Guinea - Bissau (+245)</option>
                            <option data-countryCode="GY" value="Guyana (+592)">Guyana (+592)</option>
                            <option data-countryCode="HT" value="Haiti (+509)">Haiti (+509)</option>
                            <option data-countryCode="HN" value="Honduras (+504)">Honduras (+504)</option>
                            <option data-countryCode="HK" value="Hong Kong (+852)">Hong Kong (+852)</option>
                            <option data-countryCode="HU" value="Hungary (+36)">Hungary (+36)</option>
                            <option data-countryCode="IS" value="Iceland (+354)">Iceland (+354)</option>
                            <option data-countryCode="IN" value="India (+91)">India (+91)</option>
                            <option data-countryCode="ID" value="Indonesia (+62)">Indonesia (+62)</option>
                            <option data-countryCode="IR" value="Iran (+98)">Iran (+98)</option>
                            <option data-countryCode="IQ" value="Iraq (+964)">Iraq (+964)</option>
                            <option data-countryCode="IE" value="Ireland (+353)">Ireland (+353)</option>
                            <option data-countryCode="IL" value="Israel (+972)">Israel (+972)</option>
                            <option data-countryCode="IT" value="Italy (+39)">Italy (+39)</option>
                            <option data-countryCode="JM" value="Jamaica (+1876)">Jamaica (+1876)</option>
                            <option data-countryCode="JP" value="Japan (+81)">Japan (+81)</option>
                            <option data-countryCode="JO" value="Jordan (+962)">Jordan (+962)</option>
                            <option data-countryCode="KZ" value="Kazakhstan (+7)">Kazakhstan (+7)</option>
                            <option data-countryCode="KE" value="Kenya (+254)">Kenya (+254)</option>
                            <option data-countryCode="KI" value="Kiribati (+686)">Kiribati (+686)</option>
                            <option data-countryCode="KP" value="Korea North (+850)">Korea North (+850)</option>
                            <option data-countryCode="KR" value="Korea South (+82)">Korea South (+82)</option>
                            <option data-countryCode="KW" value="Kuwait (+965)">Kuwait (+965)</option>
                            <option data-countryCode="KG" value="Kyrgyzstan (+996)">Kyrgyzstan (+996)</option>
                            <option data-countryCode="LA" value="Laos (+856)">Laos (+856)</option>
                            <option data-countryCode="LV" value="371">Latvia (+371)</option>
                            <option data-countryCode="LB" value="961">Lebanon (+961)</option>
                            <option data-countryCode="LS" value="266">Lesotho (+266)</option>
                            <option data-countryCode="LR" value="231">Liberia (+231)</option>
                            <option data-countryCode="LY" value="218">Libya (+218)</option>
                            <option data-countryCode="LI" value="417">Liechtenstein (+417)</option>
                            <option data-countryCode="LT" value="370">Lithuania (+370)</option>
                            <option data-countryCode="LU" value="352">Luxembourg (+352)</option>
                            <option data-countryCode="MO" value="853">Macao (+853)</option>
                            <option data-countryCode="MK" value="389">Macedonia (+389)</option>
                            <option data-countryCode="MG" value="261">Madagascar (+261)</option>
                            <option data-countryCode="MW" value="265">Malawi (+265)</option>
                            <option data-countryCode="MY" value="60">Malaysia (+60)</option>
                            <option data-countryCode="MV" value="960">Maldives (+960)</option>
                            <option data-countryCode="ML" value="223">Mali (+223)</option>
                            <option data-countryCode="MT" value="356">Malta (+356)</option>
                            <option data-countryCode="MH" value="692">Marshall Islands (+692)</option>
                            <option data-countryCode="MQ" value="596">Martinique (+596)</option>
                            <option data-countryCode="MR" value="222">Mauritania (+222)</option>
                            <option data-countryCode="YT" value="269">Mayotte (+269)</option>
                            <option data-countryCode="MX" value="52">Mexico (+52)</option>
                            <option data-countryCode="FM" value="691">Micronesia (+691)</option>
                            <option data-countryCode="MD" value="373">Moldova (+373)</option>
                            <option data-countryCode="MC" value="377">Monaco (+377)</option>
                            <option data-countryCode="MN" value="976">Mongolia (+976)</option>
                            <option data-countryCode="MS" value="1664">Montserrat (+1664)</option>
                            <option data-countryCode="MA" value="212">Morocco (+212)</option>
                            <option data-countryCode="MZ" value="258">Mozambique (+258)</option>
                            <option data-countryCode="MN" value="95">Myanmar (+95)</option>
                            <option data-countryCode="NA" value="264">Namibia (+264)</option>
                            <option data-countryCode="NR" value="674">Nauru (+674)</option>
                            <option data-countryCode="NP" value="977">Nepal (+977)</option>
                            <option data-countryCode="NL" value="31">Netherlands (+31)</option>
                            <option data-countryCode="NC" value="687">New Caledonia (+687)</option>
                            <option data-countryCode="NZ" value="64">New Zealand (+64)</option>
                            <option data-countryCode="NI" value="505">Nicaragua (+505)</option>
                            <option data-countryCode="NE" value="227">Niger (+227)</option>
                            <option data-countryCode="NG" value="234">Nigeria (+234)</option>
                            <option data-countryCode="NU" value="683">Niue (+683)</option>
                            <option data-countryCode="NF" value="672">Norfolk Islands (+672)</option>
                            <option data-countryCode="NP" value="670">Northern Marianas (+670)</option>
                            <option data-countryCode="NO" value="47">Norway (+47)</option>
                            <option data-countryCode="OM" value="968">Oman (+968)</option>
                            <option data-countryCode="PW" value="680">Palau (+680)</option>
                            <option data-countryCode="PA" value="507">Panama (+507)</option>
                            <option data-countryCode="PG" value="675">Papua New Guinea (+675)</option>
                            <option data-countryCode="PY" value="595">Paraguay (+595)</option>
                            <option data-countryCode="PE" value="51">Peru (+51)</option>
                            <option data-countryCode="PH" value="63">Philippines (+63)</option>
                            <option data-countryCode="PL" value="48">Poland (+48)</option>
                            <option data-countryCode="PT" value="351">Portugal (+351)</option>
                            <option data-countryCode="PR" value="1787">Puerto Rico (+1787)</option>
                            <option data-countryCode="QA" value="974">Qatar (+974)</option>
                            <option data-countryCode="RE" value="262">Reunion (+262)</option>
                            <option data-countryCode="RO" value="40">Romania (+40)</option>
                            <option data-countryCode="RU" value="7">Russia (+7)</option>
                            <option data-countryCode="RW" value="250">Rwanda (+250)</option>
                            <option data-countryCode="SM" value="378">San Marino (+378)</option>
                            <option data-countryCode="ST" value="239">Sao Tome &amp; Principe (+239)</option>
                            <option data-countryCode="SA" value="966">Saudi Arabia (+966)</option>
                            <option data-countryCode="SN" value="221">Senegal (+221)</option>
                            <option data-countryCode="CS" value="381">Serbia (+381)</option>
                            <option data-countryCode="SC" value="248">Seychelles (+248)</option>
                            <option data-countryCode="SL" value="232">Sierra Leone (+232)</option>
                            <option data-countryCode="SG" value="65">Singapore (+65)</option>
                            <option data-countryCode="SK" value="421">Slovak Republic (+421)</option>
                            <option data-countryCode="SI" value="386">Slovenia (+386)</option>
                            <option data-countryCode="SB" value="677">Solomon Islands (+677)</option>
                            <option data-countryCode="SO" value="252">Somalia (+252)</option>
                            <option data-countryCode="ZA" value="27">South Africa (+27)</option>
                            <option data-countryCode="ES" value="34">Spain (+34)</option>
                            <option data-countryCode="LK" value="94">Sri Lanka (+94)</option>
                            <option data-countryCode="SH" value="290">St. Helena (+290)</option>
                            <option data-countryCode="KN" value="1869">St. Kitts (+1869)</option>
                            <option data-countryCode="SC" value="1758">St. Lucia (+1758)</option>
                            <option data-countryCode="SD" value="249">Sudan (+249)</option>
                            <option data-countryCode="SR" value="597">Suriname (+597)</option>
                            <option data-countryCode="SZ" value="268">Swaziland (+268)</option>
                            <option data-countryCode="SE" value="46">Sweden (+46)</option>
                            <option data-countryCode="CH" value="41">Switzerland (+41)</option>
                            <option data-countryCode="SI" value="963">Syria (+963)</option>
                            <option data-countryCode="TW" value="886">Taiwan (+886)</option>
                            <option data-countryCode="TJ" value="7">Tajikstan (+7)</option>
                            <option data-countryCode="TH" value="66">Thailand (+66)</option>
                            <option data-countryCode="TG" value="228">Togo (+228)</option>
                            <option data-countryCode="TO" value="676">Tonga (+676)</option>
                            <option data-countryCode="TT" value="1868">Trinidad &amp; Tobago (+1868)</option>
                            <option data-countryCode="TN" value="216">Tunisia (+216)</option>
                            <option data-countryCode="TR" value="90">Turkey (+90)</option>
                            <option data-countryCode="TM" value="7">Turkmenistan (+7)</option>
                            <option data-countryCode="TM" value="993">Turkmenistan (+993)</option>
                            <option data-countryCode="TC" value="1649">Turks &amp; Caicos Islands (+1649)</option>
                            <option data-countryCode="TV" value="688">Tuvalu (+688)</option>
                            <option data-countryCode="UG" value="256">Uganda (+256)</option>
                            <!-- <option data-countryCode="GB" value="44">UK (+44)</option> -->
                            <option data-countryCode="UA" value="380">Ukraine (+380)</option>
                            <option data-countryCode="AE" value="971">United Arab Emirates (+971)</option>
                            <option data-countryCode="UY" value="598">Uruguay (+598)</option>
                            <!-- <option data-countryCode="US" value="1">USA (+1)</option> -->
                            <option data-countryCode="UZ" value="7">Uzbekistan (+7)</option>
                            <option data-countryCode="VU" value="678">Vanuatu (+678)</option>
                            <option data-countryCode="VA" value="379">Vatican City (+379)</option>
                            <option data-countryCode="VE" value="58">Venezuela (+58)</option>
                            <option data-countryCode="VN" value="84">Vietnam (+84)</option>
                            <option data-countryCode="VG" value="84">Virgin Islands - British (+1284)</option>
                            <option data-countryCode="VI" value="84">Virgin Islands - US (+1340)</option>
                            <option data-countryCode="WF" value="681">Wallis &amp; Futuna (+681)</option>
                            <option data-countryCode="YE" value="969">Yemen (North)(+969)</option>
                            <option data-countryCode="YE" value="967">Yemen (South)(+967)</option>
                            <option data-countryCode="ZM" value="260">Zambia (+260)</option>
                            <option data-countryCode="ZW" value="263">Zimbabwe (+263)</option>
                        </optgroup>
                    </select>
                    <input type="number" value="<?=set_value(00, $row->phone)?>" style="width: 100% !important;" class="js-profile-phone" name="phone" id="">
                    </div>
                    <?php if(!empty($errors['phone'])):?>
                        <small class="js-error-phone text-danger"><?=$errors['phone']?></small>
                    <?php endif;?>
                    <small class="js-error-phone text-danger"></small>
                    <?php if(!empty($errors['country'])):?>
                        <small class="js-error-linkedin text-danger"><?=$errors['contry']?></small>
                    <?php endif;?>
                    <small class="js-error-country text-danger"></small>
                </div>
                <div>
                    <label for="lname">About</label>
                    <textarea name="about" class="js-profile-about" ><?=set_value("write me", $row->about)?></textarea>
                </div>
                
                <div>
                    <label for="email">Email</label>
                    <input type="email" class="js-profile-email" name="email" value="<?=set_value("johndoe@gmail.com", $row->email)?>" placeholder="e.g john@gmail.com">
                    <?php if(!empty($errors['email'])):?>
                        <small class="js-error-email text-danger"><?=$errors['email']?></small>
                      <?php endif;?>
                      <small class="js-error-email text-danger"></small>
                 
                </div>
                <div class="birth">
                    <label for="bday">Date of Birth</label>
                    <div class="">
                        <input type="date" class="js-profile-bday" value="<?=set_value(00, $row->bday)?>" name="bday" id="bday">
                    </div>
                </div>
                <div>
                    <label for="fname">Github Profile</label>
                    <input type="text" class="js-profile-github" id="github" name="github" value="<?=set_value("write me", $row->github)?>" placeholder="e.g. John">
                    <?php if(!empty($errors['github'])):?>
                        <small class="js-error-github text-danger"><?=$errors['github']?></small>
                    <?php endif;?>
                    <small class="js-error-github text-danger"></small>
                </div>
                <div>
                    <label for="fname">Linkedin Profile</label>
                    <input type="text" class="js-profile-linkedin" id="linkedin" name="linkedin" value="<?=set_value("write me", $row->linkedin)?>" placeholder="e.g. John">
                    <?php if(!empty($errors['linkedin'])):?>
                        <small class="js-error-linkedin text-danger"><?=$errors['linkedin']?></small>
                    <?php endif;?>
                    <small class="js-error-linkedin text-danger"></small>
                </div>
                
            </div>
            <small class="js-error-form text-danger"></small>
            <small class="js-error-success text-warning"></small>
            <div class="btn-group">
                
                <button onclick="save_profile(event)" type="button" class="js-prof-btn btn-submit">Submit</button>
            </div>
        </form>
    </div>
    
    <!--END OF MAIN-->
    <?php $this->view("includes/dev/right")?>
     
</div>

<?php else:?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                That profile doesnt exist!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  <?php endif;?>
    <script>
        function load_image(file){
            var mylink = window.URL.createObjectURL(file)
            document.querySelector(".img-prev").src = mylink
        }

        function save_profile(e){
            var form = e.currentTarget.form;
            var inputs = form.querySelectorAll("input, textarea, select");
            console.log(inputs[3])
            var obj = {};
            var image_added = false;
            for (let i = 0; i < inputs.length; i++) {
                var key = inputs[i].name;
                if(key == 'image'){
                    if(typeof inputs[i].files[0] == 'object'){
                        obj[key] = inputs[i].files[0];
                        image_added = true;
                    }
                }else{
                    obj[key] = inputs[i].value;
                }
                
            }
            if(image_added){
                var allowed = ['jpg', 'jpeg', 'png', 'gif'];
                
                if(typeof obj.image == 'object'){
                    var ext = obj.image.name.split(".").pop();
                }
                
                if(!allowed.includes(ext.toLowerCase())){
                    var success= document.querySelector(".js-error-success");
                    var img_err = document.querySelector(".js-error-image");
                    success.style.display = "None";
                    img_err.innerHTML = "⚠️ This are the only file extensions allowed "+allowed.toString(",");
                    var submit_err = document.querySelector(".js-error-form");
                    submit_err.innerHTML = "⚠️ fix errors to continue"
                    return;
                }else{
                    var success= document.querySelector(".js-error-success");
                    var img_err = document.querySelector(".js-error-image");
                    var submit_err = document.querySelector(".js-error-form");
                    img_err.style.display = "None";
                    submit_err.style.display = "None";
                    success.style.display = "block";
                }
            }
           send_data(obj);
           var btn = document.querySelector(".js-prof-btn");
                btn.disabled = false;
                btn.innerHTML = "submit";
        }
        function send_data(obj){
            
            var btn = document.querySelector(".js-prof-btn");
                btn.disabled = false;
                btn.innerHTML = "submit";
            var myform = new FormData();
            for(key in obj){
                myform.append(key, obj[key]);
            }
            var ajax = new XMLHttpRequest();
            ajax.addEventListener('readystatechange', ()=>{
                if(ajax.readyState == 4){
                    if(ajax.status == 200){
                        handle_result(ajax.responseText);
                        var success= document.querySelector(".js-error-success");
                        var submit_err = document.querySelector(".js-error-form");
                        submit_err.style.display = "None";
                        success.innerHTML = "✅ profile is saved successfully";
                        var btn = document.querySelector(".js-prof-btn");
                            btn.disabled = false;
                            btn.innerHTML = "submit";
                    }else{
                        var submit_err = document.querySelector(".js-error-form");
                        success.style.display = "None";
                        submit_err.innerHTML = "⚠️ fix errors to continue"
                    }
                }
            })
            ajax.upload.addEventListener('progress',function(e){
                var perc = Math.round((e.loaded / e.total) * 100);
                var btn = document.querySelector(".js-prof-btn");
                btn.disabled = true;
                btn.innerHTML = "loading..";
            });
        
            ajax.open('post', '', true);
            ajax.send(myform);
        }
        function handle_result(result){
            var obj = JSON.parse(result);
            if (typeof obj == "object") {
                if(typeof obj.errors == "object"){
                    display_errors(obj.errors)
                    var btn = document.querySelector(".js-prof-btn");
                    btn.disabled = false;
                    btn.innerHTML = "submit";
                    var success= document.querySelector(".js-error-success");
                    var submit_err = document.querySelector(".js-error-form");
                    success.style.display = "None";
                    submit_err.innerHTML = "⚠️ fix errors to continue"
                }else{
                    var success= document.querySelector(".js-error-success");
                    success.innerHTML = "✅ profile is saved successfully";
                    var btn = document.querySelector(".js-prof-btn");
                    btn.disabled = false;
                    btn.innerHTML = "submit";
                   // window.location.reload();
                }
            }
        }
        function display_errors(errors){
            for(key in errors){
                document.querySelector(".js-error-"+key).innerHTML = errors[key];
            }
        }
        
    </script>

<?php $this->view("includes/dev/dev-footnote", $data)?>
