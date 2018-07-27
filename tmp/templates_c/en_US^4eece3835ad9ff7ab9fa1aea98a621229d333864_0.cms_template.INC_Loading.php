<?php
/* Smarty version 3.1.31, created on 2017-08-12 21:22:43
  from "cms_template:INC_Loading" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_598f0123b3eb82_50767533',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4eece3835ad9ff7ab9fa1aea98a621229d333864' => 
    array (
      0 => 'cms_template:INC_Loading',
      1 => '1500159887',
      2 => 'cms_template',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_598f0123b3eb82_50767533 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_uploads_url')) require_once 'E:\\xampp\\htdocs\\public_html\\cms_version2\\cms221_alison\\lib\\plugins\\function.uploads_url.php';
?>
<div class="loading">
    <img src="<?php echo smarty_function_uploads_url(array(),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['CustomGS']->value['loading'];?>
" alt="Loading" />
</div><?php }
}
