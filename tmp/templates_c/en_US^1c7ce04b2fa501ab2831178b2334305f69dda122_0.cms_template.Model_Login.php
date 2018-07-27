<?php
/* Smarty version 3.1.31, created on 2017-08-12 21:22:47
  from "cms_template:Model_Login" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_598f0127aeb944_83592912',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c7ce04b2fa501ab2831178b2334305f69dda122' => 
    array (
      0 => 'cms_template:Model_Login',
      1 => '1500159887',
      2 => 'cms_template',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_598f0127aeb944_83592912 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="modal-outer">
            <div class="login-modal">
                <div class="inner-modal">
                    <div class="login-container">
                        <ul class="tab-content">
                            <li id="login" class="tab active">
                                <h3>Why not sign in?</h3>
                                <div class="close-modal"><span class="icon-cross2"></span></div>
                                <div class="icon-group">
                                    <a href="/auth/facebook" rel="nofollow">
                                        <span class="icon-facebook">
                                            <span class="circle-facebook">
                                                <span class="round"></span>
                                            </span>
                                        </span>
                                    </a>
                                    <a href="/auth/google" rel="nofollow">
                                        <span class="icon-google">
                                            <span class="circle-google">
                                                <span class="round"></span>
                                            </span>
                                        </span>
                                    </a>
                                    <a href="/auth/yahoo" rel="nofollow">
                                        <span class="icon-yahoo">
                                            <span class="circle-yahoo">
                                                <span class="round"></span>
                                            </span>
                                        </span>
                                    </a>
                                    <a href="/auth/live" rel="nofollow">
                                        <span class="icon-windows">
                                            <span class="circle-windows">
                                                <span class="round"></span>
                                            </span>
                                        </span>
                                    </a>
                                    <a href="/auth/linkedin" rel="nofollow">
                                        <span class="icon-linkedin">
                                            <span class="circle-linkedin">
                                                <span class="round"></span>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                                <div class="clearfix"></div>
                                <div class="or-line">
                                    <span>OR</span>
                                </div>
                                <div class="form-group">
                                    <form method="POST" action="https://alison.com/login" accept-charset="UTF-8" data-login-form name="login-form"><input name="_token" type="hidden" value="MI5hM9bm84LosiEdxN5RmYkemGBCrj7Zc1YS7bUe">
                                        <div class="input-field icon-envelope ">
                                            <input class="form-control" placeholder="Email address" required name="email" type="email">
                                        </div>
                                        <div class="input-field icon-lock ">
                                            <input class="form-control" placeholder="Password" required name="password" type="password" value="">
                                        </div>
                                        <p class="half-width">
                                            <input id="remember" name="remember" type="checkbox">
                                            <label for="remember" class="form-checkbox">Keep me logged in</label>
                                        </p>
                                        <ul class="half-width">
                                            <li data-name="forgotpassword" class="form-link tab-title">
                                                <a href="#">Forgot password?</a>
                                            </li>
                                        </ul>
                                        <div class="errors">
                                            <ul>
                                            </ul>
                                        </div>
                                        <input name="current" type="hidden" value="https://alison.com">
                                        <input class="submit-login" type="submit" value="Log In">
                                        <ul id="login-buttons" class="tab-navbar">
                                            <li class="signup-account switch-tab">
                                                Don't have an Alison account? <a href="https://alison.com/register">Register</a>
                                            </li>
                                        </ul>
                                    </form>
                                </div>
                            </li>
                            <li id="signup" class="tab ">
                                <h3>Join us now</h3>
                                <span class="sub-msg">The World’s Largest Free Learning Community</span>
                                <div class="close-modal"><span class="icon-cross2"></span></div>
                                <div class="icon-group">
                                    <a href="/auth/facebook" rel="nofollow">
                                        <span class="icon-facebook">
                                            <span class="circle-facebook">
                                                <span class="round"></span>
                                            </span>
                                        </span>
                                    </a>
                                    <a href="/auth/google" rel="nofollow">
                                        <span class="icon-google">
                                            <span class="circle-google">
                                                <span class="round"></span>
                                            </span>
                                        </span>
                                    </a>
                                    <a href="/auth/yahoo" rel="nofollow">
                                        <span class="icon-yahoo">
                                            <span class="circle-yahoo">
                                                <span class="round"></span>
                                            </span>
                                        </span>
                                    </a>
                                    <a href="/auth/live" rel="nofollow">
                                        <span class="icon-windows">
                                            <span class="circle-windows">
                                                <span class="round"></span>
                                            </span>
                                        </span>
                                    </a>
                                    <a href="/auth/linkedin" rel="nofollow">
                                        <span class="icon-linkedin">
                                            <span class="circle-linkedin">
                                                <span class="round"></span>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                                <div class="clearfix"></div>
                                <div class="or-line">
                                    <span>OR</span>
                                </div>
                                <div class="form-group">
                                    <form method="POST" action="https://alison.com/register" accept-charset="UTF-8" data-signup-form id="signup-form" name="register-form"><input name="_token" type="hidden" value="MI5hM9bm84LosiEdxN5RmYkemGBCrj7Zc1YS7bUe">
                                        <div class="input-field icon-user ">
                                            <input class="form-control" id="firstName" placeholder="First Name" autocomplete="off" minlength="2" required name="firstname" type="text">
                                        </div>
                                        <div class="input-field icon-user ">
                                            <input class="form-control" id="lastName" placeholder="Last Name" autocomplete="off" minlength="2" required name="lastname" type="text">
                                        </div>
                                        <div class="input-field-email icon-envelope ">
                                            <input class="form-control" id="emailNew" placeholder="E-Mail" autocomplete="off" required name="signup_email" type="email">
                                        </div>
                                        <div class="input-field icon-lock ">
                                            <input class="form-control" id="signup_password" placeholder="Password" autocomplete="off" minlength="6" required name="signup_password" type="password" value="">
                                        </div>
                                        <div class="input-field icon-lock ">
                                            <input class="form-control" id="confirmPassword" placeholder="Confirm Password" autocomplete="off" minlength="6" required name="signup_password_confirmation" type="password" value="">
                                        </div>
                                        <input name="current" type="hidden" value="https://alison.com">
                                        <input class="submit-login signup-button" type="submit" value="Register">
                                        <ul id="login-buttons" class="tab-navbar">
                                            <li class="signup-account login-account switch-tab">
                                                Already have an Alison account? <a href="https://alison.com/login">Log In</a>
                                            </li>
                                            <li class="signup-account terms">
                                                <a href="https://alison.com/about/terms-of-use/product-terms-and-conditions">Terms and Conditions</a>
                                            </li>
                                        </ul>
                                    </form>
                                </div>
                            </li>
                            <li id="forgotpassword" class="tab ">
                                <h3>Forgot password?</h3>
                                <div class="form-group">
                                    <div class="content-pw">
                                        <img src="/templates/site/img/xlogin-password-illustration.png.pagespeed.ic.cFDG48dCcK.png" alt="forgot password image">
                                        <p>
                                            We will send your password reset instructions to your associated address. Please enter your current email. </p>
                                    </div>
                                    <form method="POST" action="https://alison.com/password/email" accept-charset="UTF-8" data-forgot-form name="forgot-password-form"><input name="_token" type="hidden" value="MI5hM9bm84LosiEdxN5RmYkemGBCrj7Zc1YS7bUe">
                                        <div class="input-field icon-envelope ">
                                            <input class="form-control" placeholder="Email address" required name="email" type="email">
                                        </div>
                                        <input class="submit-login" type="submit" value="Reset my password">
                                        <ul id="login-buttons" class="tab-navbar">
                                            <li class="signup-account tab-title" data-name="login">
                                                <a href="#">Back to login</a>
                                            </li>
                                        </ul>
                                    </form>
                                </div>
                            </li>
                        </ul>
                        <div class="section-shadow"></div>
                    </div>
                </div>
            </div> 
        </div><?php }
}
