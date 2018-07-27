<?php
/* Smarty version 3.1.31, created on 2017-08-12 21:22:44
  from "cms_template:INC_Top" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_598f0124016827_75866057',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '98571598a4b94f75ce292c8108dc4053e7ab030f' => 
    array (
      0 => 'cms_template:INC_Top',
      1 => '1500162691',
      2 => 'cms_template',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_598f0124016827_75866057 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_cms_selflink')) require_once 'E:\\xampp\\htdocs\\public_html\\cms_version2\\cms221_alison\\lib\\plugins\\function.cms_selflink.php';
if (!is_callable('smarty_function_uploads_url')) require_once 'E:\\xampp\\htdocs\\public_html\\cms_version2\\cms221_alison\\lib\\plugins\\function.uploads_url.php';
if (!is_callable('smarty_function_sitename')) require_once 'E:\\xampp\\htdocs\\public_html\\cms_version2\\cms221_alison\\lib\\plugins\\function.sitename.php';
?>
<header class="not-loggedin">
    <div class="alternative-search">
        <form method="GET" action="#" accept-charset="UTF-8">
            <input maxlength="200" placeholder="Search for ..." name="q" type="text">
            <button type="submit" class="btn btn-warning btn-fla"><span class="icon-search"></span></button>
        </form>
    </div>
    <div class="wrapper">
        <?php if (($_smarty_tpl->tpl_vars['CustomGS']->value['feu_active'])) {?>
        <div class="login-links">
            <?php ob_start();
echo MleCMS::function_plugin(array('name'=>'snippet_Main_Register'),$_smarty_tpl);
$_prefixVariable1=ob_get_clean();
echo smarty_function_cms_selflink(array('page'=>"register",'text'=>$_prefixVariable1,'class'=>"link btn btn-large btn-blue"),$_smarty_tpl);?>

            <?php ob_start();
echo MleCMS::function_plugin(array('name'=>'snippet_Main_Login'),$_smarty_tpl);
$_prefixVariable2=ob_get_clean();
echo smarty_function_cms_selflink(array('page'=>"login",'text'=>"<span class='text'>".$_prefixVariable2."</span>",'class'=>"link login-button"),$_smarty_tpl);?>

        </div>
        <?php } else { ?>
        <div class="link">
            <a href="#" class="link sidebar-trigger notifications">
                <div class="avatar-outer">
                    <img class="avatar" src="images/10017726.jpg" alt="Lee Peace" />
                </div>
                <span class="number">1</span>
            </a>
            <a href="https://alison.com/notifications" class="notifications">
                <span class="number">1</span>
                <span class="icon-bell-line"></span>
            </a>
            <a href="#" class="cart">
                <span class="number">
                    0
                </span>
                <span class="icon-cart"></span>
            </a>
        </div>
        <?php }?>
        <a href="/" class="logo"><img src="<?php echo smarty_function_uploads_url(array(),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['CustomGS']->value['logo'];?>
" alt="<?php echo smarty_function_sitename(array(),$_smarty_tpl);?>
 Logo"></a>
        <a href="/" class="logo-short"><img src="<?php echo smarty_function_uploads_url(array(),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['CustomGS']->value['logo_responsive'];?>
" alt="<?php echo smarty_function_sitename(array(),$_smarty_tpl);?>
 Logo"></a>
        <div class="link float-right">
            <div class="menu-trigger">
                <span class="menu-label">Menu</span>
                <div class="trigger nav-burger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <?php echo Navigator::function_plugin(array('template'=>"Top_nav"),$_smarty_tpl);?>

                
            </div>
            <div class="lang link">
                <a href="#" class="trigger">EN
                    <div class="arrow-down"></div>
                </a>
            </div>

            <ul class="dropdown-lang" style="display: none;">
                <li>
                    <a rel="alternate" hreflang="en" href="#">
                        English
                    </a>
                </li>
                <li>
                    <a rel="alternate" hreflang="es" href="#">
                        Spanish
                    </a>
                </li>
            </ul>

            <div class="login-links resume-link">
                <?php ob_start();
echo MleCMS::function_plugin(array('name'=>'snippet_Main_Resume_Study'),$_smarty_tpl);
$_prefixVariable3=ob_get_clean();
echo smarty_function_cms_selflink(array('page'=>"resume-study",'text'=>$_prefixVariable3."<span class='icon-play'></span>",'class'=>"link btn btn-large btn-blue"),$_smarty_tpl);?>

            </div>
            <div class="search">
                <a href="#" class="search-trigger"><span class="icon-search"></span></a>
            </div>
        </div>
    </div>
</header>
<div class="wrapper nav-wrapper">
    <nav class="navigation">
        <ul>
            <li></li>
        </ul>
    </nav>
</div>
<div class="messages-q"></div><?php }
}
