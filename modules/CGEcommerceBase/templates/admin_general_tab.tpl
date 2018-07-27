<div class="warning">{$mod->Lang('warn_general_settings')}</div>
{$formstart}
<div class="c_full cf">
  <label class="grid_2">{$mod->Lang('currency_symbol')}:</label>
  <input class="grid_2" type="text" name="{$actionid}currency_symbol" value="{$currency_symbol}" size="4" maxlength="4"/>
</div>
<div class="c_full cf">
  <label class="grid_2">{$mod->Lang('currency_code')}:</label>
  <input class="grid_2" type="text" name="{$actionid}currency_code" value="{$currency_code}" size="4" maxlength="4"/>
</div>
<div class="c_full cf">
  <label class="grid_2">{$mod->Lang('weight_units')}:</label>
  <input class="grid_2" type="text" name="{$actionid}weight_units" value="{$weight_units}" size="4" maxlength="4"/>
</div>
<div class="c_full cf">
  <label class="grid_2">{$mod->Lang('length_units')}:</label>
  <select name="{$actionid}length_units" class="grid_2">
    {html_options options=$units selected=$length_units}
  </select>
</div>
<div class="c_full cf">
  <input type="submit" name="{$actionid}submit" value="{$mod->Lang('submit')}"/>
</div>
{$formend}