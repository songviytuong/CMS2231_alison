<h3>{$mod->Lang('export_to_csv')}</h3>
{$formstart}

<div class="c_full cf">
  <label class="grid_2">{$mod->Lang('exportdelim')}:</label>
  <div class="grid_9">
    <input type="text" name="{$actionid}exportdelim" value="{$options.exportdelim}" size="5" maxlength="5"/>
  </div>
</div>

<div class="c_full cf">
  <label class="grid_2">{$mod->Lang('exportdraft')}:</label>
  <div class="grid_9">
    {cge_yesno_options prefix=$actionid name=exportdraft selected=$options.exportdraft}
  </div>
</div>

<div class="c_full cf">
  <label class="grid_2">{$mod->Lang('exportcats')}:</label>
  <div class="grid_9">
    {cge_yesno_options prefix=$actionid name=exportcats selected=$options.exportcats}
  </div>
</div>

<div class="c_full cf">
  <label class="grid_2">{$mod->Lang('exportfields')}:</label>
  <div class="grid_9">
    {cge_yesno_options prefix=$actionid name=exportfields selected=$options.exportfields}
  </div>
</div>

<div class="c_full cf">
  <label class="grid_2">{$mod->Lang('exportoptions')}:</label>
  <div class="grid_9">
    {cge_yesno_options prefix=$actionid name=exportoptions selected=$options.exportoptions}
  </div>
</div>

<div class="c_full cf">
  <input type="submit" name="{$actionid}submit" value="{$mod->Lang('submit')}"/>
  <input type="submit" name="{$actionid}cancel" value="{$mod->Lang('cancel')}"/>
</div>
{$formend}