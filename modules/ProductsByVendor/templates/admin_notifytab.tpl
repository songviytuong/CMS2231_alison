{form_start action=admin_notifytab}
<div class="pageoverflow">
  <p class="pagetext">{$mod->Lang('notify_email_subject')}:<p>
  <p class="pageinput">
     <textarea name="{$actionid}notify_email_subject" rows="3" cols="80">{$prefs.email_subject}</textarea>
  </p>
</div>
<div class="pageoverflow">
  <p class="pagetext">{$mod->Lang('notify_email_body_tpl')}:<p>
  <p class="pageinput">
     <textarea name="{$actionid}notify_email_body_tpl" rows="10" cols="80">{$prefs.email_body_tpl}</textarea>
  </p>
</div>
<div class="pageoverflow">
  <p class="pageinput">
     <input type="submit" name="{$actionid}submit" value="{$mod->Lang('submit')}"/>
     <input type="submit" name="{$actionid}reset" value="{$mod->Lang('reset')}"/>
  </p>
</div>
{form_end}