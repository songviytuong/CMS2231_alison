<?php
/* Smarty version 3.1.31, created on 2017-07-16 09:22:22
  from "module_file_tpl:LISE;fielddefstab.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_596abfce1e18f8_15277508',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '634c55aa731d89f7b03e935dd82c6447cb883e16' => 
    array (
      0 => 'module_file_tpl:LISE;fielddefstab.tpl',
      1 => 1499778297,
      2 => 'module_file_tpl',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_596abfce1e18f8_15277508 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_cycle')) require_once 'E:\\xampp\\htdocs\\public_html\\cms_version2\\cms221_alison\\lib\\smarty\\plugins\\function.cycle.php';
if (count($_smarty_tpl->tpl_vars['fielddefs']->value) > 0) {?>
<fieldset>
	<legend><?php echo $_smarty_tpl->tpl_vars['mod']->value->ModLang('registered_fielddefs');?>
</legend>
	<table cellspacing="0" class="pagetable">
    	<thead>
        	<tr>
            	<th><?php echo $_smarty_tpl->tpl_vars['mod']->value->ModLang('fielddef_type');?>
</th>
            	<th><?php echo $_smarty_tpl->tpl_vars['mod']->value->ModLang('fielddef_friendlytype');?>
</th>
            	<th><?php echo $_smarty_tpl->tpl_vars['mod']->value->ModLang('fielddef_originator');?>
</th>
            	<th><?php echo $_smarty_tpl->tpl_vars['mod']->value->ModLang('fielddef_deps');?>
</th>
            	<th class="pageicon"><?php echo $_smarty_tpl->tpl_vars['mod']->value->ModLang('active');?>
</th>
        	</tr>
    	</thead>
    	<tbody>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fielddefs']->value, 'entry', false, NULL, 'fielddefs', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->value) {
?>
    	    <tr class="<?php echo smarty_function_cycle(array('values'=>'row1,row2','name'=>'summary'),$_smarty_tpl);?>
">
        	    <td><?php echo $_smarty_tpl->tpl_vars['entry']->value->GetType();?>
</td>
        	    <td><?php echo $_smarty_tpl->tpl_vars['entry']->value->GetFriendlyType();?>
</td>
            	<td><?php echo $_smarty_tpl->tpl_vars['entry']->value->GetOriginator();?>
</td>
				<td>
				<?php if (!is_null($_smarty_tpl->tpl_vars['entry']->value->GetModuleDeps())) {?>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['entry']->value->GetModuleDeps(), 'version', false, 'module', 'deps', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['module']->value => $_smarty_tpl->tpl_vars['version']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_deps']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_deps']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_deps']->value['iteration'] == $_smarty_tpl->tpl_vars['__smarty_foreach_deps']->value['total'];
?>
						<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
 (<?php echo $_smarty_tpl->tpl_vars['version']->value;?>
)<?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_deps']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_deps']->value['last'] : null)) {?>,<?php }?>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
					
				<?php } else { ?>
					<?php echo lang('none');?>

				<?php }?>
				</td>
            	<td class="init-ajax-toggle"><?php echo $_smarty_tpl->tpl_vars['entry']->value->active_link;?>
</td>
        	</tr>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

    	</tbody>
	</table>
</fieldset>
<?php }
echo $_smarty_tpl->tpl_vars['startform']->value;?>


    <div class="pageoverflow">
        <p class="pageinput">
				<?php echo $_smarty_tpl->tpl_vars['scan']->value;?>

		</p>
    </div>
 
<?php echo $_smarty_tpl->tpl_vars['endform']->value;
}
}
