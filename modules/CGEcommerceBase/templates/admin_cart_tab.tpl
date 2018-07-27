{$formstart}
<div class="c_full cf">
  <label class="grid_2">{$mod->Lang('cart_module')}:</label>
  <div class="grid_9">
    <select name="{$actionid}cart_module" class="grid_12">
      {html_options options=$cart_modules selected=$cart_module}
    </select>
    <p class="grid_12">{$mod->Lang('info_cart_module')}</p>
  </div>
</div>
<div class="c_full cf">
  <input type="submit" name="{$actionid}submit" value="{$mod->Lang('submit')}"/>
</div>
{$formend}