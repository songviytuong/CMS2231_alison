<?php
/* Smarty version 3.1.31, created on 2017-08-12 21:22:43
  from "tpl_body:30" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_598f01238d3730_29830741',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e929a2c9d74a66a5213b8a066517df683c2aaaa4' => 
    array (
      0 => 'tpl_body:30',
      1 => '1500162593',
      2 => 'tpl_body',
    ),
  ),
  'includes' => 
  array (
    'cms_template:INC_Loading' => 1,
    'cms_template:INC_Flash_Sale' => 1,
    'cms_template:INC_Top' => 1,
    'cms_template:INC_Sidebar' => 1,
    'cms_template:INC_Main_Search' => 1,
    'cms_template:INC_Partners_Logo' => 1,
    'cms_template:INC_Main_Courses' => 1,
    'cms_template:INC_Testimonial' => 1,
    'cms_template:Model_Login' => 1,
    'cms_template:INC_Footer' => 1,
    'cms_template:INC_Scripts' => 1,
  ),
),false)) {
function content_598f01238d3730_29830741 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_cms_function_random_image_selective')) require_once 'E:\\xampp\\htdocs\\public_html\\cms_version2\\cms221_alison\\lib\\plugins\\function.random_image_selective.php';
?>
<body>
        <?php $_smarty_tpl->_subTemplateRender('cms_template:INC_Loading', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


        <?php $_smarty_tpl->_subTemplateRender('cms_template:INC_Flash_Sale', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


        <?php $_smarty_tpl->_subTemplateRender('cms_template:INC_Top', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


        <div id="main-holder">
            <?php $_smarty_tpl->_subTemplateRender('cms_template:INC_Sidebar', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <div class="outer-wrap" style="background-image:url('<?php echo smarty_cms_function_random_image_selective(array('dir'=>((string)$_smarty_tpl->tpl_vars['CustomGS']->value['background_home_random'])),$_smarty_tpl);?>
')">
                <?php $_smarty_tpl->_subTemplateRender('cms_template:INC_Main_Search', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


                <?php $_smarty_tpl->_subTemplateRender('cms_template:INC_Partners_Logo', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


                <?php $_smarty_tpl->_subTemplateRender('cms_template:INC_Main_Courses', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


                <?php $_smarty_tpl->_subTemplateRender('cms_template:INC_Testimonial', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            </div>
        </div>

        <?php $_smarty_tpl->_subTemplateRender('cms_template:Model_Login', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


        <?php $_smarty_tpl->_subTemplateRender('cms_template:INC_Footer', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


        <?php $_smarty_tpl->_subTemplateRender('cms_template:INC_Scripts', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </body>
</html><?php }
}
