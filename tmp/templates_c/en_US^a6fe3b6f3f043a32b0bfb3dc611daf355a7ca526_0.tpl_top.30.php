<?php
/* Smarty version 3.1.31, created on 2017-08-12 21:22:43
  from "tpl_top:30" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_598f01230b60b2_21681932',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a6fe3b6f3f043a32b0bfb3dc611daf355a7ca526' => 
    array (
      0 => 'tpl_top:30',
      1 => '1500162593',
      2 => 'tpl_top',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_598f01230b60b2_21681932 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_cms_get_language')) require_once 'E:\\xampp\\htdocs\\public_html\\cms_version2\\cms221_alison\\lib\\plugins\\function.cms_get_language.php';
echo CMS_Content_Block::smarty_fetch_pagedata(array(),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', null, null);
CMS_Content_Block::smarty_internal_fetch_contentblock(array(),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?><!doctype html>
<html lang="<?php echo smarty_function_cms_get_language(array(),$_smarty_tpl);?>
"><?php }
}
