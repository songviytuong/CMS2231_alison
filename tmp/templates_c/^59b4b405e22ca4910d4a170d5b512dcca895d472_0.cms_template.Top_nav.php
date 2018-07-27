<?php
/* Smarty version 3.1.31, created on 2017-08-12 21:22:44
  from "cms_template:Top_nav" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_598f0124f22557_06890388',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '59b4b405e22ca4910d4a170d5b512dcca895d472' => 
    array (
      0 => 'cms_template:Top_nav',
      1 => '1500159887',
      2 => 'cms_template',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_598f0124f22557_06890388 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'Top_nav' => 
  array (
    'compiled_filepath' => 'E:\\xampp\\htdocs\\public_html\\cms_version2\\cms221_alison\\tmp\\templates_c\\^59b4b405e22ca4910d4a170d5b512dcca895d472_0.cms_template.Top_nav.php',
    'uid' => '59b4b405e22ca4910d4a170d5b512dcca895d472',
    'call_name' => 'smarty_template_function_Top_nav_26491598f01249f7214_31974461',
  ),
));
?>






<?php if (isset($_smarty_tpl->tpl_vars['nodes']->value)) {
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'Top_nav', array('data'=>$_smarty_tpl->tpl_vars['nodes']->value,'depth'=>0), true);?>

<?php }
}
/* smarty_template_function_Top_nav_26491598f01249f7214_31974461 */
if (!function_exists('smarty_template_function_Top_nav_26491598f01249f7214_31974461')) {
function smarty_template_function_Top_nav_26491598f01249f7214_31974461($_smarty_tpl,$params) {
$params = array_merge(array('depth'=>1), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}?><ul class="dropdown-nav"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'node', true);
$_smarty_tpl->tpl_vars['node']->iteration = 0;
$_smarty_tpl->tpl_vars['node']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['node']->value) {
$_smarty_tpl->tpl_vars['node']->iteration++;
$_smarty_tpl->tpl_vars['node']->index++;
$_smarty_tpl->tpl_vars['node']->first = !$_smarty_tpl->tpl_vars['node']->index;
$_smarty_tpl->tpl_vars['node']->last = $_smarty_tpl->tpl_vars['node']->iteration == $_smarty_tpl->tpl_vars['node']->total;
$__foreach_node_0_saved = $_smarty_tpl->tpl_vars['node'];
$_smarty_tpl->_assignInScope('liclass', ('menudepth').($_smarty_tpl->tpl_vars['depth']->value));
$_smarty_tpl->_assignInScope('aclass', '');
if ($_smarty_tpl->tpl_vars['node']->first && $_smarty_tpl->tpl_vars['node']->total > 1) {
$_smarty_tpl->_assignInScope('liclass', ($_smarty_tpl->tpl_vars['liclass']->value).(' first_child'));
}
if ($_smarty_tpl->tpl_vars['node']->last && $_smarty_tpl->tpl_vars['node']->total > 1) {
$_smarty_tpl->_assignInScope('liclass', ($_smarty_tpl->tpl_vars['liclass']->value).(' last_child'));
}
if ($_smarty_tpl->tpl_vars['node']->value->current) {
$_smarty_tpl->_assignInScope('liclass', ($_smarty_tpl->tpl_vars['liclass']->value).(' menuactive'));
$_smarty_tpl->_assignInScope('aclass', ($_smarty_tpl->tpl_vars['aclass']->value).(' menuactive'));
}
if ($_smarty_tpl->tpl_vars['node']->value->parent) {
$_smarty_tpl->_assignInScope('liclass', ($_smarty_tpl->tpl_vars['liclass']->value).(' menuactive menuparent'));
$_smarty_tpl->_assignInScope('aclass', ($_smarty_tpl->tpl_vars['aclass']->value).(' menuactive menuparent'));
}
if ($_smarty_tpl->tpl_vars['node']->value->children_exist) {
$_smarty_tpl->_assignInScope('liclass', ($_smarty_tpl->tpl_vars['liclass']->value).(' parent'));
$_smarty_tpl->_assignInScope('aclass', ($_smarty_tpl->tpl_vars['aclass']->value).(' parent'));
}
if ($_smarty_tpl->tpl_vars['node']->value->type == 'sectionheader') {?><li class='sectionheader <?php echo $_smarty_tpl->tpl_vars['liclass']->value;?>
'><span><?php echo $_smarty_tpl->tpl_vars['node']->value->menutext;?>
</span><?php if (isset($_smarty_tpl->tpl_vars['node']->value->children)) {
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'Top_nav', array('data'=>$_smarty_tpl->tpl_vars['node']->value->children,'depth'=>$_smarty_tpl->tpl_vars['depth']->value+1), true);
}?></li><?php } elseif ($_smarty_tpl->tpl_vars['node']->value->type == 'separator') {?><li class='separator <?php echo $_smarty_tpl->tpl_vars['liclass']->value;?>
'><hr class='separator'/></li><?php } else { ?><li><a class="icon-<?php echo $_smarty_tpl->tpl_vars['node']->value->extra1;?>
" href="<?php echo $_smarty_tpl->tpl_vars['node']->value->url;?>
"<?php if ($_smarty_tpl->tpl_vars['node']->value->target != '') {?> target="<?php echo $_smarty_tpl->tpl_vars['node']->value->target;?>
"<?php }?>><span><?php echo $_smarty_tpl->tpl_vars['node']->value->menutext;?>
</span></a><?php if (isset($_smarty_tpl->tpl_vars['node']->value->children)) {
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'Top_nav', array('data'=>$_smarty_tpl->tpl_vars['node']->value->children,'depth'=>$_smarty_tpl->tpl_vars['depth']->value+1), true);
}?></li><?php }
$_smarty_tpl->tpl_vars['node'] = $__foreach_node_0_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</ul><?php
}}
/*/ smarty_template_function_Top_nav_26491598f01249f7214_31974461 */
}
