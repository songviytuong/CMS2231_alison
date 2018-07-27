<?php
/* Smarty version 3.1.31, created on 2017-07-16 09:22:21
  from "module_file_tpl:LISE;instancestab.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_596abfcdd9cab0_49981546',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f2a2a6f9ca46201aa4fdc3b01c96bd4be7d85192' => 
    array (
      0 => 'module_file_tpl:LISE;instancestab.tpl',
      1 => 1499778297,
      2 => 'module_file_tpl',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_596abfcdd9cab0_49981546 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_cycle')) require_once 'E:\\xampp\\htdocs\\public_html\\cms_version2\\cms221_alison\\lib\\smarty\\plugins\\function.cycle.php';
if (count($_smarty_tpl->tpl_vars['modules']->value) > 0) {?>
<div class="pagewarning">
	<h3><?php echo $_smarty_tpl->tpl_vars['mod']->value->ModLang('notice');?>
</h3>
	<p><?php echo $_smarty_tpl->tpl_vars['mod']->value->ModLang('installed_instances_warning');?>
</p>
</div>
<fieldset>
	<legend><?php echo $_smarty_tpl->tpl_vars['mod']->value->ModLang('installed_instances');?>
</legend>
	<table cellspacing="0" class="pagetable">
            <thead>
                <tr>
                    <th><?php echo $_smarty_tpl->tpl_vars['mod']->value->ModLang('instance_name');?>
</th>
                    <th><?php echo $_smarty_tpl->tpl_vars['mod']->value->ModLang('instance_friendlyname');?>
</th>
                    <th><?php echo $_smarty_tpl->tpl_vars['mod']->value->ModLang('instance_smarty');?>
</th>
                    <th><?php echo $_smarty_tpl->tpl_vars['mod']->value->ModLang('instance_version');?>
</th>
                    <th><?php echo $_smarty_tpl->tpl_vars['mod']->value->ModLang('clone_title');?>
</th>            	
                    <th><?php echo $_smarty_tpl->tpl_vars['mod']->value->ModLang('export_title');?>
</th>
                    <th class="pageicon"><?php echo $_smarty_tpl->tpl_vars['mod']->value->ModLang('instance_uptodate');?>
</th>
                    <th class="pageicon"><?php echo $_smarty_tpl->tpl_vars['mod']->value->ModLang('sync_languages');?>
</th>
                </tr>
            </thead>
    	<tbody>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['modules']->value, 'entry');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->value) {
?>
    	    <tr class="<?php echo smarty_function_cycle(array('values'=>'row1,row2','name'=>'summary'),$_smarty_tpl);?>
">
        	    <td><?php echo $_smarty_tpl->tpl_vars['entry']->value->module_name;?>
</td>
        	    <td><?php echo $_smarty_tpl->tpl_vars['entry']->value->friendlyname;?>
</td>
        	    <td>{<?php echo $_smarty_tpl->tpl_vars['entry']->value->module_name;?>
}</td>
              <td><?php echo $_smarty_tpl->tpl_vars['entry']->value->version;?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['entry']->value->clonelink;?>
</td>
            	<td><?php echo $_smarty_tpl->tpl_vars['entry']->value->exportlink;?>
</td>
            	<td><?php echo $_smarty_tpl->tpl_vars['entry']->value->upgradelink;?>
</td>
                <td class="init-ajax-toggle"><?php echo $_smarty_tpl->tpl_vars['entry']->value->synclink;?>
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

        <p class="pageinput">
				<?php echo $_smarty_tpl->tpl_vars['duplicate']->value;?>

		</p>   
<?php echo $_smarty_tpl->tpl_vars['endform']->value;?>


<?php echo $_smarty_tpl->tpl_vars['startuploadform']->value;?>

<fieldset>
<?php echo $_smarty_tpl->tpl_vars['filenameinput']->value;?>

<?php echo $_smarty_tpl->tpl_vars['upload']->value;?>

</fieldset>
<?php echo $_smarty_tpl->tpl_vars['enduploadform']->value;
}
}
