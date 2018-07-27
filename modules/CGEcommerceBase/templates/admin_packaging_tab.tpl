{form_start action='admin_packaging_tab'}
<input type="hidden" name="{$actionid}cg_activetab" value="packaging">{* a little trick for the tab *}
<div class="c_full cf">
  <label class="grid_2">{$mod->Lang('packaging_module')}:</label>
  <div class="grid_9">
    <select class="grid_12" name="{$actionid}packaging_module">
      {html_options options=$module_list selected=$sel_module}
    </select>
    <p class="grid_12">{$mod->Lang('info_packaging_module')}</p>
  </div>
</div>

<div class="c_full cf">
  <input type="submit" name="{$actionid}packaging_submit" value="{$mod->Lang('submit')}"/>
</div>
{form_end}