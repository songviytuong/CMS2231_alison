<?php
/* Smarty version 3.1.31, created on 2017-07-16 09:22:22
  from "module_file_tpl:LISE;maintenancetab.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_596abfce3c8505_62766958',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '38c0a539b02538b5e774ceb042ebd0dced402607' => 
    array (
      0 => 'module_file_tpl:LISE;maintenancetab.tpl',
      1 => 1499778297,
      2 => 'module_file_tpl',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_596abfce3c8505_62766958 (Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['startform']->value;?>

<fieldset>
  <legend><?php echo $_smarty_tpl->tpl_vars['mod']->value->ModLang('fielddefs');?>
</legend>

  <div class="pageoverflow">
    <p class="pagetext"><?php echo $_smarty_tpl->tpl_vars['mod']->value->ModLang('prompt_fix_fielddefs');?>
:</p>
    <p class="pageinput"><?php echo $_smarty_tpl->tpl_vars['button_fix_fielddefs']->value;?>
</p>
  </div>  
  
</fieldset>
<?php if (LISESmarty::LI2_present()) {?>
<fieldset>
  <legend><?php echo $_smarty_tpl->tpl_vars['mod']->value->ModLang('import_from_LI2_title');?>
</legend>
   <div class="red"><?php echo $_smarty_tpl->tpl_vars['mod']->value->ModLang('clone_instances_warning');?>
</div>

	<div class="pageoverflow">
		<p class="pagetext"><?php echo $_smarty_tpl->tpl_vars['mod']->value->ModLang('prompt_import_from_LI2');?>
:</p>
		<p class="pageinput"><?php echo $_smarty_tpl->tpl_vars['button_import_from_LI2']->value;?>
</p>
	</div>	
</fieldset>
<?php }?>

<fieldset>
  <legend><?php echo $_smarty_tpl->tpl_vars['mod']->value->ModLang('fix_import_from_LI2_title');?>
</legend>
   <div class="red"><?php echo $_smarty_tpl->tpl_vars['mod']->value->ModLang('fix_LI2_instances_warning');?>
</div>

  <div class="pageoverflow">
    <p class="pagetext"><?php echo $_smarty_tpl->tpl_vars['mod']->value->ModLang('prompt_fix_import_from_LI2');?>
:</p>
    <p class="pageinput"><?php echo $_smarty_tpl->tpl_vars['button_fix_import_from_LI2']->value;?>
</p>
  </div>  
</fieldset>  
<?php echo $_smarty_tpl->tpl_vars['endform']->value;
}
}
