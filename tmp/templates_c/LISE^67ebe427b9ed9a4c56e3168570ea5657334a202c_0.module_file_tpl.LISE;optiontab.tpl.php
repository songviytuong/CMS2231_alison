<?php
/* Smarty version 3.1.31, created on 2017-07-16 09:22:22
  from "module_file_tpl:LISE;optiontab.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_596abfce4fc9a0_72142136',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '67ebe427b9ed9a4c56e3168570ea5657334a202c' => 
    array (
      0 => 'module_file_tpl:LISE;optiontab.tpl',
      1 => 1499778297,
      2 => 'module_file_tpl',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_596abfce4fc9a0_72142136 (Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['startform']->value;?>

<fieldset>
	<legend><?php echo $_smarty_tpl->tpl_vars['mod']->value->ModLang('fielddefs');?>
</legend>
	
	<div class="pagewarning">
		<h3><?php echo $_smarty_tpl->tpl_vars['mod']->value->ModLang('notice');?>
</h3>
		<p><?php echo $_smarty_tpl->tpl_vars['mod']->value->ModLang('notice_allow_autoscan');?>
</p>
	</div>	
	
    <div class="pageoverflow">
        <p class="pagetext"><?php echo $_smarty_tpl->tpl_vars['mod']->value->ModLang('prompt_allow_autoscan');?>
:</p>
        <p class="pageinput"><?php echo $_smarty_tpl->tpl_vars['input_allow_autoscan']->value;?>
</p>
    </div>
 
</fieldset>

<fieldset>
	<legend><?php echo $_smarty_tpl->tpl_vars['mod']->value->ModLang('instances');?>
</legend>
  
    <div class="pageoverflow">
        <p class="pagetext"><?php echo $_smarty_tpl->tpl_vars['mod']->value->ModLang('prompt_allow_autoinstall');?>
:</p>
        <p class="pageinput"><?php echo $_smarty_tpl->tpl_vars['input_allow_autoinstall']->value;?>
</p>
    </div>	
    <div class="pageoverflow">
        <p class="pagetext"><?php echo $_smarty_tpl->tpl_vars['mod']->value->ModLang('prompt_allow_autoupdate');?>
:</p>
        <p class="pageinput"><?php echo $_smarty_tpl->tpl_vars['input_allow_autoupdate']->value;?>
</p>
    </div>
 
</fieldset>
    <div class="pageoverflow">
        <p class="pagetext">&nbsp;</p>
        <p class="pageinput">
			<?php echo $_smarty_tpl->tpl_vars['submit']->value;?>

		</p>
    </div>

<?php echo $_smarty_tpl->tpl_vars['endform']->value;?>

<?php }
}
