<?php
/* Smarty version 3.1.31, created on 2017-08-12 21:22:52
  from "content:content_en" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_598f012cab41c9_19359847',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '62e936251e4799749e89fa9828a0ee7332eb5816' => 
    array (
      0 => 'content:content_en',
      1 => 1498654591,
      2 => 'content',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_598f012cab41c9_19359847 (Smarty_Internal_Template $_smarty_tpl) {
$_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['jsmin'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['jsmin'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'jsmin'))) {
throw new SmartyException('block tag \'jsmin\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('jsmin', array());
$_block_repeat=true;
echo $_block_plugin1::jsmin(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

<?php echo cms_user_tag_content_type(array('type'=>'text/javascript'),$_smarty_tpl);?>

<?php echo file_get_contents('https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js');?>

<?php $_block_repeat=false;
echo $_block_plugin1::jsmin(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
