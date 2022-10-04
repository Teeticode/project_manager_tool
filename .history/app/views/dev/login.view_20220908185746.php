<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= ucfirst(App::$page)?> - <?=APPNAME?></title>
    <link rel="stylesheet" href="https://cdn.lineicons.com/3.0/lineicons.css">
    <link rel="stylesheet" href="<?=ROOT?>/auth/assets/css/login.css">
   
</head>
<body>
    <div class="container">
        <div class="forms-container">
           
            <div class="signin-signup">
                
            <form method="post" action="" class="sign-in-form form-m">
                <a href="<?=ROOT?>" class="btn btn-default">Home</a>    
            <h2 class="title">Sign In</h2>
                <?php if(message()):?>
                    <div class="message"><?=message('', true)?>
                </div>
                <?php endif;?>
                <?php 
                        if(!empty($errors['username']) ){
                            echo "<div class='error-message'>
                            ".$errors['username']."
                        </div>";
                        }
                ?>
               
                <div class="input-field">
                    <i class="lni lni-user"></i>
                    <input value="<?= set_value('username')?>" type="text" name="username" id="username" onkeyup="validateName()" placeholder="Username">
                    <span id='usname-error'></span>
                    
                </div>
                
                <div class="input-field">
                    <i class="lni lni-lock"></i>
                    <input value="<?= set_value('password')?>" id="psd" onkeyup="validatePsd()" type="password" name="password" placeholder="Password">
                    <span id="password-error"></span>
                </div>
               
                <div class="">
                    <input <?= set_value('terms')? 'checked':''; ?> value='1' name="terms" type="checkbox" id="check" >
                    <small onclick="setterm()" id="term">Agree with terms and condition</small>
                    <span id="check-error"></span>
                </div>
                <input onclick="return validateForm()" type="submit" value="Sign In" class="btn solid">
                <span id="submit-error"></span>
                <p class="social-text">Or Sign in with social platforms</p>
                <div class="social-media">
                    <a href="#" class="social-icon">
                        <i class="lni lni-facebook"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="lni lni-twitter-original"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="lni lni-github-original"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="lni lni-google"></i>
                    </a>
                </div>
            </form>
                <form method="post" action="" class="sign-up-form">
                    
                </form>
            </div>
        </div>
        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>New Here?</h3>
                    <p>Create your own space and get access to our premium client services</p>
                    <a href="<?=ROOT?>/developer/signup" class="btn transparent" id="sign-up-btn">Sign up</a>
                </div>
                <img src="<?=ROOT?>/portfolio/assets/img/colab3.svg" class="image" alt="">
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>Already a member?</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                    <button class="btn transparent" id="sign-in-btn">Sign in</button>
                </div>
                <img src="<?=ROOT?>/portfolio/assets/img/startup.svg" class="image" alt="">
            </div>
        </div>
        
    </div>
    <section class="footer"></section>
    <script src="<?=ROOT?>/auth/assets/js/reg.js"></script>
   
</body>
</html>