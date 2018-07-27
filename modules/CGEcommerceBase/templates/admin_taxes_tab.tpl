{$formstart}
<div class="c_full cf">
  <label class="grid_2">{$mod->Lang('tax_module')}:</label>
  <div class="grid_9">
    <select name="{$actionid}tax_module" class="grid_12">
      {html_options options=$tax_modules selected=$tax_module}
    </select>
    <p class="grid_12">{$mod->Lang('info_tax_module')}</p>
  </div>
</div>
<div class="c_full cf">
  <label class="grid_2">{$mod->Lang('tax_shipping')}:</label>>
  <div class="grid_9">
    {cge_yesno_options prefix=$actionid name=tax_shipping selected=$tax_shipping class="grid_12"}
    <p class="grid_12">{$mod->Lang('info_tax_shipping')}</p>
  </div>
</div>
<div class="c_full cf">
  <input type="submit" name="{$actionid}submit" value="{$mod->Lang('submit')}"/>
</div>
{$formend}