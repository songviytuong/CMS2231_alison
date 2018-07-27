{$formstart}
<input type="hidden" name="{$actionid}cg_activetab" value="handling">{* a little trick for the tab *}
<div class="c_full cf">
  <label class="grid_2">{$mod->Lang('handling_module')}:</label>
  <div class="grid_9">
    <select name="{$actionid}handling_module" class="grid_12">
      {html_options options=$handling_modules selected=$handling_module}
    </select>
    <p class="grid_12">{$mod->Lang('info_handling_module')}</p>
  </div>
</div>

<div class="c_full cf">
  <input type="submit" name="{$actionid}handling_submit" value="{$mod->Lang('submit')}"/>
</div>
{$formend}