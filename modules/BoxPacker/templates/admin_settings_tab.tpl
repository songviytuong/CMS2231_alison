{form_start action=admin_settings_tab}
<div class="c_full cf">
  <label class="grid_2">{$mod->Lang('lbl_oversize_handler')}:</label>
  <div class="grid_9">
     <select class="grid_12" name="{$actionid}oversize_handler">{html_options options=$oversize_handlers selected=$prefs.oversize_handler}</select>
     <p class="grid_12">{$mod->Lang('info_oversize_handler')}</p>
  </div>
</div>
<br/>
<div class="c_full cf">
  <label class="grid_2">{$mod->Lang('lbl_oversize_wrapper')}:</label>
  <div class="grid_9">
     <p class="grid_12">
       <label class="grid_2">{$mod->Lang('thickness')}: <input class="grid_10" type="text" name="{$actionid}oversize_thickness" value="{$prefs.oversize_wrapper.thickness}" size="5"> <span>({$length_units})</span></label>
       <label class="grid_2">{$mod->Lang('weight')}: <input class="grid_10" type="text" name="{$actionid}oversize_weight" value="{$prefs.oversize_wrapper.weight}" size="5"> <span>({$weight_units})</span></label>
     </p>
     <p class="grid_12">{$mod->Lang('info_oversize_wrapper')}</p>
  </div>
</div>
<hr/>

<div class="c_full cf">
  <label class="grid_2">{$mod->Lang('lbl_noweight_handler')}:</label>
  <div class="grid_9">
     <select class="grid_12" name="{$actionid}noweight_handler">{html_options options=$noweight_handlers selected=$prefs.noweight_handler}</select>
     <p class="grid_12">{$mod->Lang('info_noweight_handler')}</p>
  </div>
</div>
<br/>
<div class="c_full cf">
  <label class="grid_2">{$mod->Lang('lbl_noweight_dflt')}:</label>
  <div class="grid_9">
     <input class="grid_12" name="{$actionid}noweight_dflt" value="{$prefs.noweight_dflt}"/>
  </div>
</div>
<hr/>

<div class="c_full cf">
  <label class="grid_2">{$mod->Lang('lbl_nodimensions_handler')}:</label>
  <div class="grid_9">
     <select class="grid_12" name="{$actionid}nodimensions_handler">{html_options options=$nodimensions_handlers selected=$prefs.nodimensions_handler}</select>
     <p class="grid_12">{$mod->Lang('info_nodimensions_handler')}</p>
  </div>
</div>
<br/>
<div class="c_full cf">
  <label class="grid_2">{$mod->Lang('lbl_nodimensions_dflt')}:</label>
  <div class="grid_9">
     <p class="grid_12">
       <label class="grid_2">{$mod->Lang('width')}: <input class="grid_10" type="text" name="{$actionid}nodimensions_width" value="{$prefs.nodimensions_dflt.width}" size="5"> <span>({$length_units})</span></label>
       <label class="grid_2">{$mod->Lang('length')}: <input class="grid_10" type="text" name="{$actionid}nodimensions_length" value="{$prefs.nodimensions_dflt.length}" size="5"> <span>({$length_units})</span></label>
       <label class="grid_2">{$mod->Lang('depth')}: <input class="grid_10" type="text" name="{$actionid}nodimensions_depth" value="{$prefs.nodimensions_dflt.depth}" size="5"> <span>({$length_units})</span></label>
     </p>
     <p class="grid_12">{$mod->Lang('info_nodimensions_dflt')}</p>
  </div>
</div>
<div class="c_full cf">
  <input type="submit" name="{$actionid}submit" value="{$mod->Lang('submit')}"/>
</div>
{form_end}