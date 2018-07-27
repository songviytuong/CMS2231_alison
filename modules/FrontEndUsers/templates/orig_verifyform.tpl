{* original verification form *}
<div class="alert alert-info">{$mod->Lang('info_verify_identity')}</div>
{form_start uid=$uid}
  <div class="row">
    <label>{$mod->Lang('code')}: <input type="text" class="form_control" name="{$actionid}code" value="{$code}" required/></label>
  </div>
  <div class="row">
    <button type="submit" name="{$actionid}feu_submit" class="btn btn_active">{$mod->Lang('verify')}</button>
  </div>
</div>
{form_end}
