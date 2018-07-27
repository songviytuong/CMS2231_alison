<script type="text/javascript">
/*<![CDATA[*/
$(document).ready(function(){
  $('#feu_filterbox').click(function(){
    if( this.checked ) {
      $('#feu_filterform').show();
    }
    else {
      $('#feu_filterform').hide();
    }
  });

  $('#dobulk').click(function(ev){
     var len = $('input.bulkselect:checked').length;
     if( len == 0 ) {
        ev.preventDefault();
	cms_alert('{$mod->Lang('bulk_selectone'|cms_escape)}');
     }
  })
});
function select_all()
{
  cb = document.getElementsByName('{$actionid}selected[]');
  el = document.getElementById('selectall');
  st = el.checked;
  for( i = 0; i < cb.length; i++ ) {
    if( cb[i].type == "checkbox" )  cb[i].checked=st;
  }
}

function confirm_delete()
{
  var cb = document.getElementsByName('{$actionid}selected[]');
  var count = 0;
  for( i = 0; i < cb.length; i++ ) {
     if( cb[i].checked ) count++;
  }

  if( count > 250 ) {
     alert('{$mod->Lang('error_toomanyselected')}'|cms_escape);
     return false;
  }
  return confirm('{$mod->Lang('confirm_delete_selected')}');
}
/*]]> */
</script>

{$startform}
<div id="feu_filterform" style="display: none;">
<table width="100%">
<tr><td width="50%" valign="top">
  <fieldset>
  <legend>{$mod->Lang('filter')}:</legend>
  {if isset($groups)}
  <div class="c_full">
   <p class="grid_3">{$mod->Lang('group')}:</p>
   <p class="grid_9">
     <select name="{$actionid}filter_group">
     {html_options options=$groups selected=$filter.group}
     </select>
   </p>
  </div>
  {/if}

  <div class="c_full">
   <p class="grid_3">{$mod->Lang('userfilter')}:</p>
   <p class="grid_9">
     <input type="text" name="{$actionid}filter_regex" value="{$filter.regex}"/>
   </p>
   <div class="clearb"></div>
  </div>
  <div class="c_full">
   <p class="grid_3">{$mod->Lang('propertyfilter')}:</p>
   <p class="grid_9">
     <select name="{$actionid}filter_propertysel">{html_options options=$defnlist selected=$filter.propsel}</select>
   </p>
   <div class="clearb"></div>
  </div>
  <div class="c_full">
   <p class="grid_3">{$mod->Lang('valueregex')}:</p>
   <p class="grid_9">
     <input type="text" name="{$actionid}filter_property" value="{$filter.propval}" size="30"/>
   </p>
   <div class="clearb"></div>
  </div>

  <div class="c_full">
   <p class="grid_3">{$mod->Lang('prompt_loggedinonly')}:</p>
   <p class="grid_9">
     {cge_yesno_options prefix=$actionid name='filter_loggedinonly' selected=$filter.loggedinonly}
   </p>
   <div class="clearb"></div>
  </div>
  <div class="c_full">
   <p class="grid_3">{$mod->Lang('userlimit')}:</p>
   <p class="grid_9">
     <select name="{$actionid}filter_limit">{html_options options=$limits selected=$filter.limit}</select>
   </p>
   <div class="clearb"></div>
  </div>
  </fieldset>
</td><td valign="top">
  <fieldset>
  <legend>{$mod->Lang('view')}:</legend>
  <div class="pageoverflow">
   <p class="pagetext">{$mod->Lang('prompt_viewprops')}:</p>
   <p class="pageinput">
     <select name="{$actionid}filter_viewprops[]" multiple="multiple" size="5">
       {html_options options=$alldefns selected=$viewprops}
     </select>
   </p>
  </div>
  <div class="pageoverflow">
   <p class="pagetext">{$mod->Lang('sortby')}:</p>
   <p class="pageinput">
     <select name="{$actionid}filter_sortby">{html_options options=$sortlist selected=$filter.sortby}</select>
   </p>
  </div>
</fieldset>
</td></tr>
<tr>
  <td colspan="2" align="center">
    <input type="submit" name="{$actionid}filter" value="{$mod->Lang('applyfilter')}"/>
    <input type="submit" name="{$actionid}filter_reset" value="{$mod->Lang('reset')}"/>
  </td>
</tr>
</table>
<br/>
</div>{* #feu_filterform *}

<div class="c_full">
  <div class="grid_9" style="margin-left: 0;">
    <input id="feu_filterbox" type="checkbox" value="1"/><label for="feu_filterbox">{$mod->Lang('view_filter')} {if $filter_applied}({$mod->Lang('applied')}){/if}</label>&nbsp;
    <span title="{$mod->Lang('usersingroup')}">{cgimage image='users.gif' alt=""} = {$numusers}</span>&nbsp;
    {if isset($add_url)}<a href="{$add_url}" title="{$mod->Lang('title_add_user')}">{cgimage image='icons/system/newobject.gif'} {$mod->Lang('adduser')}</a>{/if}
    {if isset($import_url)}<a href="{$import_url}" title="{$mod->Lang('title_import_users')}">{cgimage image='icons/system/import.gif'} {$mod->Lang('prompt_importusers')}</a>{/if}
    {if isset($export_url)}<a href="{$export_url}" title="{$mod->Lang('title_export_users')}">{cgimage image='icons/system/export.gif'} {$mod->Lang('prompt_exportusers')}</a>{/if}
  </div>
  <div class="grid_3 text-right">
  {if $itemcount > 0}
    {if isset($navigation.firstpage_url)}
      <a href="{$navigation.firstpage_url}">{$mod->Lang('firstpage')}</a>&nbsp;
      <a href="{$navigation.prevpage_url}">{$mod->Lang('prevpage')}</a>&nbsp;
    {/if}
    {$mod->Lang('page')} {$navigation.curpage} {$mod->Lang('prompt_of')} {$navigation.npages}
    {if isset($navigation.lastpage_url)}
      &nbsp;<a href="{$navigation.nextpage_url}">{$mod->Lang('nextpage')}</a>
      &nbsp;<a href="{$navigation.lastpage_url}">{$mod->Lang('lastpage')}</a>
    {/if}
  {/if}
  </div>
  <div class="clearb"></div>
</div>
{if !isset($groups)}
  <div class="red center">{$mod->Lang('nogroups')}</div>
{elseif $itemcount > 0}
<table class="pagetable">
	<thead>
		<tr>
			<th>{$usernametext}</th>
			<th>{$createdtext}</th>
			<th>{$expirestext}</th>
                        {if isset($viewprops) && is_array($viewprops)}
                        {foreach from=$viewprops item='one'}
                        <th>{$alldefns.$one}</th>
                        {/foreach}
                        {/if}
			<th class="pageicon {literal}{sorter: false}{/literal}">&nbsp;</th>
			<th class="pageicon {literal}{sorter: false}{/literal}">&nbsp;</th>
			<th class="pageicon {literal}{sorter: false}{/literal}">&nbsp;</th>
			<th class="pageicon {literal}{sorter: false}{/literal}">&nbsp;</th>
			<th class="pageicon {literal}{sorter: false}{/literal}">&nbsp;</th>
			<th class="pageicon {literal}{sorter: false}{/literal}"><input id="selectall" type="checkbox" name="junk" onclick="select_all();"/></th>
		</tr>
	</thead>
	<tbody>
{foreach from=$items item=entry}
		<tr class="{cycle values='row1,row2'}">
			<td>
			  {if $entry->disabled}
			     <span style="color: red;" title="{$mod->Lang('info_disabled')}">!!&nbsp; {$entry->username}</span>
			  {else if $entry->must_validate}
			     <span style="color: orange;" title="{$mod->Lang('info_must_validate')}">**&nbsp; {$entry->username}</span>
			  {else}
			     {$entry->username}
			  {/if}
			</td>
			<td>{$entry->created}</td>
			<td>{$entry->expires}</td>
                        {if isset($viewprops) && isset($entry->extra)}
                        {foreach from=$viewprops item='one'}
                        <td>{if isset($entry->extra.$one) && $entry->extra.$one}{$entry->extra.$one}{/if}</td>
                        {/foreach}
                        {/if}
			<td>
			  {if $entry->disabled}
			    <a href="{module_action_url action=admin_enable_user uid=$entry->id state=1}">{cgimage image='icons/system/false.gif' alt=$mod->Lang('enable_user')}</a>
			  {else}
			    <a href="{module_action_url action=admin_enable_user uid=$entry->id state=0}">{cgimage image='icons/system/true.gif' alt=$mod->Lang('disable_user')}</a>
			  {/if}
			</td>
			<td>{if isset($entry->logoutlink)}{$entry->logoutlink}{/if}</td>
			<td>{$entry->historylink|default:''}</td>
			<td>{$entry->editlink|default:''}</td>
			<td>{if isset($entry->deletelink)}{$entry->deletelink}{/if}</td>
			<td><input type="checkbox" class="bulkselect" name="{$actionid}selected[]" value="{$entry->id}"/></td>
		</tr>
{/foreach}
	</tbody>
</table>
{/if}
{if $itemcount > 0 && !empty($bulk_actions)}
  <div class="pageoverflow">
    <div style="float: left;"></div>
    <div style="float: right;">
      <label>{$mod->Lang('with_selected')}:
         <select name="{$actionid}bulk_action">
	 {html_options options=$bulk_actions}
	 </select>
      </label>
      <input type="submit" id="dobulk" name="{$actionid}dobulk" value="{$mod->Lang('submit')}"/>
    </div>
  </div>
{/if}
{$endform}
