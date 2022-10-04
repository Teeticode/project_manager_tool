<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - TeetiColab</title>
    <link rel="stylesheet" href="https://cdn.lineicons.com/3.0/lineicons.css">
    <link rel="stylesheet" href="<?=ROOT?>/auth/assets/css/login.css">
   
</head>
<body>
    <div class="container">
        <div class="forms-container">
        
            <div class="signin-signup">
               <?php if(message()):?>
                <div class="message">
                    <?=message('', true)?>
                </div>
               <?php endif;?> 
            <form method="post" action="" class="sign-in-form form-m">
                <h2 class="title">Sign In</h2>
                <div class="input-field">
                    <i class="lni lni-user"></i>
                    <input value="<?= set_value('username')?>" type="text" name="username" id="username" onkeyup="validateName()" placeholder="Username">
                    <span id="usname-error"></span>
                </div>
                
                <div class="input-field">
                    <i class="lni lni-lock"></i>
                    <input value="<?= set_value('password')?>" id="psd" onkeyup="validatePsd()" type="password" name="password" placeholder="Password">
                    <span id="password-error"></span>
                </div>
               
                <div class="">
                    
                    <input <?= set_value('terms')? 'checked':''; ?> value='1' name="terms" type="checkbox" placeholder="Password">
                    <small>Agree with terms and condition</small>
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
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                    <a href="<?=ROOT?>/signup" class="btn transparent" id="sign-up-btn">Sign up</a>
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