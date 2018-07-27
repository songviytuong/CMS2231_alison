{$formstart}
<input type="hidden" name="{$actionid}cg_activetab" value="shipping">{* a little trick for the tab *}
<div class="c_full cf">
  <label class="grid_2">{$mod->Lang('shipping_module')}:</label>
  <div class="grid_9">
    <select name="{$actionid}shipping_module" class="grid_12">
      {html_options options=$shipping_modules selected=$shipping_module}
    </select>
    <p class="grid_12">{$mod->Lang('info_shipping_module')}</p>
  </div>
</div>


<div class="c_full cf">
  <input type="submit" name="{$actionid}shipping_submit" value="{$mod->Lang('submit')}"/>
</div>
{$formend}