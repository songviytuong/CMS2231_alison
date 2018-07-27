<?php
/* Smarty version 3.1.31, created on 2017-08-12 21:22:47
  from "module_db_tpl:Products;Summary_Tabs_Courses" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_598f01271f2ab7_88799368',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '642ae24b571b5cbb9201b994bc1a77d1c2264281' => 
    array (
      0 => 'module_db_tpl:Products;Summary_Tabs_Courses',
      1 => '1500164325',
      2 => 'module_db_tpl',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_598f01271f2ab7_88799368 (Smarty_Internal_Template $_smarty_tpl) {
?>
<ul>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'entry');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->value) {
if (isset($_smarty_tpl->tpl_vars['entry']->value->fields)) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['entry']->value->fields, 'field', false, 'name');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['field']->value) {
if ($_smarty_tpl->tpl_vars['name']->value == "Picture_01") {?>
    <?php $_smarty_tpl->_assignInScope('src', ((string)$_smarty_tpl->tpl_vars['entry']->value->file_location)."/".((string)$_smarty_tpl->tpl_vars['field']->value->value));
}
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

<?php }?>
    <li class="course" data-id="<?php echo $_smarty_tpl->tpl_vars['entry']->value->id;?>
" data-type="courses-details">
        <div class="course-holder">
            <div class="holder-top">
                <img src="<?php echo CGSmartImage::function_plugin(array('src'=>((string)$_smarty_tpl->tpl_vars['src']->value),'filter_croptofit'=>'300,200,c,1','quality'=>"100",'notag'=>1,'noembed'=>1),$_smarty_tpl);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['entry']->value->product_name;?>
" />
                <ul class="link-group">
                    <li class="share-trigger">
                        <a class="social-link-btn" title="Share this course"><span class="icon-share"></span></a>
                        <div class="icon-group">
                            <div class="social-buttons">
                                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $_smarty_tpl->tpl_vars['entry']->value->detail_url;?>
" target="_blank">
                                    <i class="icon-facebook"></i>
                                </a>
                                <a href="https://twitter.com/intent/tweet?url=<?php echo $_smarty_tpl->tpl_vars['entry']->value->detail_url;?>
&amp;text=<?php echo $_smarty_tpl->tpl_vars['entry']->value->product_name;?>
" target="_blank">
                                    <i class="icon-twitter"></i>
                                </a>
                                <a href="https://plus.google.com/share?url=<?php echo $_smarty_tpl->tpl_vars['entry']->value->detail_url;?>
" target="_blank">
                                    <i class="icon-google"></i>
                                </a>
                                <a href="http://www.linkedin.com/shareArticle?url=<?php echo $_smarty_tpl->tpl_vars['entry']->value->detail_url;?>
&amp;mini=true" target="_blank">
                                    <i class="icon-linkedin"></i>
                                </a>
                            </div> </div>
                    </li>
                </ul>
            </div>
            <div class="holder-bottom same-height">
                <a href="#" title="Introduction to AngularJS">
                    <h3 title="Course Id: 1200"><?php echo $_smarty_tpl->tpl_vars['entry']->value->product_name;?>
</h3>
                    <!--<p>This free online course</p>-->
                    <div class="extra-info">
                        <div class="course-rating">
                            <span class="icon-star"></span>
                            <span>5</span>
                        </div>
                        <div class="difficulty">
                            <span class="icon-trophy"></span>
                            <span>50 Pts</span>
                        </div>
                        <div class="time">
                            <span class="icon-clock"></span>
                            <span>3-4h</span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="section-shadow"></div>
    </li>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

</ul><?php }
}
