<?php
/* Smarty version 3.1.31, created on 2017-07-16 09:02:21
  from "module_db_tpl:Products;Details_Courses_ByID" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_596abb1d2c0ef6_45875050',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b06e215cdd0eb20f29fc9e62ba93a4d57beef5a2' => 
    array (
      0 => 'module_db_tpl:Products;Details_Courses_ByID',
      1 => '1500165572',
      2 => 'module_db_tpl',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_596abb1d2c0ef6_45875050 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="course-info">
<a href="#" class="course-info-trigger" title="Close"><span class="icon-cross"></span></a>
<div class="course-tabs">
<a href="#" class="tab-title active" data-name="course-features-<?php echo $_smarty_tpl->tpl_vars['entry']->value->id;?>
" title="<?php echo $_smarty_tpl->tpl_vars['entry']->value->product_name;?>
">
<span class="icon-gears"></span>
</a>
<a href="#" class="tab-title" data-name="course-tags-1202" title="Course Tags">
<span class="icon-tag"></span>
</a>
</div>
<ul class="tab-content">
<li id="course-features-<?php echo $_smarty_tpl->tpl_vars['entry']->value->id;?>
" class="course-features active">
<h3 class="course-title"><?php echo $_smarty_tpl->tpl_vars['entry']->value->product_name;?>
</h3>
<div class="description-text scrollbar">
<?php ob_start();
echo MleCMS::function_plugin(array('name'=>'snippet_Main_Updating'),$_smarty_tpl);
$_prefixVariable1=ob_get_clean();
echo (($tmp = @$_smarty_tpl->tpl_vars['entry']->value->details)===null||$tmp==='' ? $_prefixVariable1 : $tmp);?>

</div>
<div style="padding-bottom:50px;">
<a href="https://alison.com/topic/learn/64944/learning-outcomes" class="btn btn-blue" title="Learning Outcomes">Start Now</a>
<a href="https://alison.com/course/introduction-to-advertising" class="btn btn-ghost" title="Introduction to Advertising">Details</a>
</div>
<div class="spotlight-group">
<div class="spotlight">
<span class="icon-student"></span>
<span>Join 2,244 other students</span>
</div>
<div class="spotlight">
<span class="icon-controls"></span>
<span>Academic - Third Level - Level 1</span>
</div>
<div class="spotlight">
<span class="icon-category-marketing"></span>
<span>Marketing</span>
</div>
<div class="spotlight">
<span class="icon-star"></span>
<span>
0 star(s) based on 0 vote(s) </span>
</div>
<div class="spotlight">
<span class="icon-money"></span>
<span>Free</span>
</div>
</div>
</li>
<li id="course-learning-paths-1202" class="course-learning-paths">
<div class="head">
<h5>Learning Paths</h5>
</div>
<div class="learning-path-holder scrollbar">
</div>
<div class="foot">
<a href="https://alison.com/learning-paths/about" class="btn btn-blue" title="About Alison Learning Paths">More Info</a>
</div>
</li>
<li id="course-reviews-1202" class="course-reviews">
<div class="reviews-group scrollbar">
</div>
</li>
<li id="course-tags-1202" class="course-tags">
<div class="head">
<h5>3 tags associated</h5>
</div>
<ul>
<li><a href="https://alison.com/tag/marketing-and-sales" title="Marketing and Sales">Marketing and Sales</a></li>
<li><a href="https://alison.com/tag/business" title="Business">Business</a></li>
<li><a href="https://alison.com/tag/e-commerce" title="E-Commerce">E-Commerce</a></li>
</ul>
</li>
</ul>
</div><?php }
}
