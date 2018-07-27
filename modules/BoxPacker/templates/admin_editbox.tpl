{if $box->id}
<h3>{$mod->Lang('edit_box')}</h3>
{else}
<h3>{$mod->Lang('add_box')}</h3>
{/if}

{form_start boxid=$box->id}
<div class="c_full cf">
  <label class="grid_2">{$mod->Lang('name')}:</label>
  <input class="grid_9" name="{$actionid}ref" value="{$box->ref}" required/>
</div>
<div class="c_full cf">
  <label class="grid_2">{$mod->Lang('outer_width')}:</label>
  <input class="grid_8" type="text" name="{$actionid}outer_width" value="{$box->outer_width}" required/> <em>{$length_units}</em>
</div>
<div class="c_full cf">
  <label class="grid_2">{$mod->Lang('outer_length')}:</label>
  <input class="grid_8" type="text" name="{$actionid}outer_length" value="{$box->outer_length}" required/> <em>{$length_units}</em>
</div>
<div class="c_full cf">
  <label class="grid_2">{$mod->Lang('outer_depth')}:</label>
  <input class="grid_8" type="text" name="{$actionid}outer_depth" value="{$box->outer_depth}" required/> <em>{$length_units}</em>
</div>
<div class="c_full cf">
  <label class="grid_2">{$mod->Lang('empty_weight')}:</label>
  <input class="grid_8" type="text" name="{$actionid}empty_weight" value="{$box->empty_weight}" required/> <em>{$weight_units}</em>
</div>
<div class="c_full cf">
  <label class="grid_2">{$mod->Lang('inner_width')}:</label>
  <input class="grid_8" type="text" name="{$actionid}inner_width" value="{$box->inner_width}" required/> <em>{$length_units}</em>
</div>
<div class="c_full cf">
  <label class="grid_2">{$mod->Lang('inner_length')}:</label>
  <input class="grid_8" type="text" name="{$actionid}inner_length" value="{$box->inner_length}" required/> <em>{$length_units}</em>
</div>
<div class="c_full cf">
  <label class="grid_2">{$mod->Lang('inner_depth')}:</label>
  <input class="grid_8" type="text" name="{$actionid}inner_depth" value="{$box->inner_depth}" required/> <em>{$length_units}</em>
</div>
<div class="c_full cf">
  <label class="grid_2">{$mod->Lang('max_weight')}:</label>
  <input class="grid_8" type="text" name="{$actionid}max_weight" value="{$box->max_weight}" required/> <em>{$weight_units}</em>
</div>
<div class="c_full cf">
  <input type="submit" name="{$actionid}submit" value="{$mod->Lang('submit')}"/>
  <input type="submit" name="{$actionid}cancel" value="{$mod->Lang('cancel')}" formnovalidate/>
</div>
{form_end}