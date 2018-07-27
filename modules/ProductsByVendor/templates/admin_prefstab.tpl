{form_start action='admin_prefstab'}
<div class="pageoverflow">
  <p class="pageinput">
    <input type="submit" name="{$actionid}submit" value="{$mod->Lang('submit')}"/>
  </p>
</div>
<div class="c_full cf">
  <label class="grid_2">{$mod->Lang('prompt_markup_percent')};</label>
  <div class="grid_9">
    <input name="{$actionid}markup_percent" class="grid_12" value="{$prefs.markup_percent|number_format:3}"/>
    <p class="grid_12">{$mod->Lang('info_markup_percent')}</p>
  </div>
</div>
<div class="c_full cf">
  <label class="grid_2">{$mod->Lang('prompt_dimensions_required')};</label>
  <div class="grid_9">
    <select name="{$actionid}dimensions_required" class="grid_12">{cge_yesno_options selected=$prefs.dimensions_required}</select>
    <p class="grid_12">{$mod->Lang('info_dimensions_required')}</p>
  </div>
</div>
{form_end}