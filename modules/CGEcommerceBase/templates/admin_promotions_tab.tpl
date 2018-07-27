{$formstart}
<div class="c_full cf">
  <label class="grid_2">{$mod->Lang('promotions_module')}:</label>
  <div class="grid_9">
    <select name="{$actionid}promotions_module" class="grid_12">
      {html_options options=$promotions_modules selected=$promotions_module}
    </select>
    <p class="grid_12">{$mod->Lang('info_promotions_module')}</p>
  </div>
</div>
<div class="c_full cf">
    <input type="submit" name="{$actionid}submit" value="{$mod->Lang('submit')}"/>
</div>
{$formend}