<?php
/* Smarty version 3.1.31, created on 2017-08-12 21:22:45
  from "cms_template:INC_Main_Courses" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_598f01255b71c3_05165213',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2264afb92900e4764898184e98bf05fac0a359f5' => 
    array (
      0 => 'cms_template:INC_Main_Courses',
      1 => '1500159887',
      2 => 'cms_template',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_598f01255b71c3_05165213 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="our-courses">
                    <div class="buttons-container  four-button ">
                        <div class="buttons-container-inner">
                            <a href="#" data-type="recent-courses" class="course-tab active" title="Recent Courses"><span class="icon-new-alert"></span>Most Recent</a>
                            <a href="#" data-type="trending-courses" class="course-tab" title="Trending Courses"><span class="icon-step3"></span>Trending Now</a>
                            <a href="#" data-type="popular-courses" class="course-tab" title="Popular Courses"><span class="icon-popular"></span>Most Popular</a>
                            <a href="#" data-type="certified-courses" class="course-tab" title="Certified Courses"><span class="icon-hat"></span>Most Certified</a>
                        </div>
                        <div class="slide-buttons course-slider">
                            <span class="icon-right-arrow move-right arrow"></span>
                            <span class="icon-left-arrow move-left arrow"></span>
                        </div>
                    </div>
                    <div class="courses-list">
                        <div class="courses-list-inner wrapper">
                            <div class="courses-container">
                                <?php echo Products::function_plugin(array(),$_smarty_tpl);?>

                            </div>
                        </div>
                        <div class="hp-button">
                            <a href="#" class="btn btn-large btn-blue" title="<?php echo MleCMS::function_plugin(array('name'=>'snippet_More_Courses'),$_smarty_tpl);?>
"><?php echo MleCMS::function_plugin(array('name'=>'snippet_More_Courses'),$_smarty_tpl);?>
</a>
                        </div>
                    </div>
                </div><?php }
}
