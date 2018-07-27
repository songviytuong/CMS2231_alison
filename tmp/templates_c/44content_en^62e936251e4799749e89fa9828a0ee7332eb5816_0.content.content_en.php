<?php
/* Smarty version 3.1.31, created on 2017-07-16 09:02:21
  from "content:content_en" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_596abb1d10def7_32950867',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '62e936251e4799749e89fa9828a0ee7332eb5816' => 
    array (
      0 => 'content:content_en',
      1 => 1498700785,
      2 => 'content',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_596abb1d10def7_32950867 (Smarty_Internal_Template $_smarty_tpl) {
echo Products::function_plugin(array('action'=>"details",'productid'=>((string)$_GET['id'])),$_smarty_tpl);
}
}
