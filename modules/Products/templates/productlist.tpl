<div id="filterform">
{$formstart}
<fieldset style="width: 49%; float: left;">
  <legend>{$mod->Lang('filters')}:&nbsp;</legend>
  <div class="pageoverflow">
    <p class="pagetext">{$mod->Lang('productname')}:</p>
    <p class="pageinput">
       <input type="text" name="{$actionid}input_productname" value="{$filter.productname}" maxlength="255"/>
       <br/>{$mod->Lang('info_filter_productname')}
    </p>
  </div>
  <div class="pageoverflow">
    <p class="pagetext">{$mod->Lang('sku')}:</p>
    <p class="pageinput">
       <input type="text" name="{$actionid}input_sku" value="{$filter.sku}" maxlength="10"/>
       <br/>{$mod->Lang('info_filter_sku')}
    </p>
  </div>
  <div class="pageoverflow">
    <p class="pagetext">{$mod->Lang('hierarchy')}:</p>
    <p class="pageinput">{$input_hierarchy}&nbsp;{$mod->Lang('include_children')} {$input_children}</p>
  </div>
  {if isset($category_list)}
  <div class="pageoverflow">
    <p class="pagetext">{$mod->Lang('category')}:</p>
    <p class="pageinput">
      <select name="{$actionid}categories[]" multiple="multiple" size="5">
        {html_options options=$category_list selected=$filter.categories}
      </select>
    </p>
  </div>
  <div class="pageoverflow">
    <p class="pagetext">{$mod->Lang('exclude_categories')}:</p>
    <p class="pageinput">{$input_excludecats}</p>
  </div>
  {/if}
  <div class="pageoverflow">
    <p class="pagetext">{$mod->Lang('page_limit')}:</p>
    <p class="pageinput">{$input_pagelimit}</p>
  </div>
</fieldset>
<fieldset style="width: 47%; float: right;">
  <legend>{$mod->Lang('view')}:&nbsp;</legend>
  {if isset($fields_viewable)}
  <div class="pageoverflow">
    <p class="pagetext">{$mod->Lang('viewable_fields')}:</p>
    <p class="pageinput">
      <select name="{$actionid}custom_fields[]" size="3" multiple="multiple">
      {html_options options=$fields_viewable selected=$filter.custom_fields}
      </select>
    </p>
  </div>
  {/if}

  <div class="pageoverflow">
    <p class="pagetext">{$mod->Lang('sort_by')}:</p>
    <p class="pageinput">{$input_sortby}</p>
  </div>
  <div class="pageoverflow">
    <p class="pagetext">{$mod->Lang('sort_order')}:</p>
    <p class="pageinput">{$input_sortorder}</p>
  </div>
</fieldset>
<div class="pageoverflow">
  <p class="pageinput">
    <input type="submit" name="{$mod->GetActionId()}submit" value="{$mod->Lang('submit')}">
    <input type="submit" name="{$mod->GetActionId()}reset" value="{$mod->Lang('reset')}">
  </p>
</div>
<div class="clearb"></div>
<br/>
{$formend}
</div><!-- filterform -->

<div id="productlist">
<script type="text/javascript">
{literal}
$(document).ready(function() {
    $('#filterform').hide();
    $('#filterbox').click(function() {
        $('#filterform').toggle();
    });
    $('#select_all_products').click(function() {
        var checked = $(this).attr('checked');
        if (checked == 'checked') {
            $('.multiselect').attr('checked', checked);
        } else {
            $('.multiselect').removeAttr('checked');
        }
    });
    $('.multiselect').click(function() {
        $('#select_all_products').removeAttr('checked');
    });
    $('#bulkaction_submit').click(function() {
        var len = $('#productlist tbody input:checkbox:checked').length;
        if (len == 0) {
            alert('{/literal}{$mod->Lang('nothing_selected')}{literal}');
            return false;
        }
        return true;
    });

    initAjax();
    initAjaxEvents();

});
{/literal}
</script>

<div class="c_full">
    <div class="grid_6" style="padding-bottom: 0.25em;">
        <ul class="option-menu-horiz">
            <li>
                <a href="{module_action_url action=addproduct}">{cgimage image='icons/system/newobject.gif' alt=''} {$mod->Lang('addproduct')}</a>
            </li>
            <li>
                <a href="{module_action_url action=importproducts}">{cgimage image='icons/system/import.gif' alt=''} {$mod->Lang('import_from_csv')}</a>
            </li>
            {if $itemcount gt 0}
                <li>
                    <a href="{module_action_url action=exportcsv}">{cgimage image='icons/system/export.gif' alt=''} {$mod->Lang('export_to_csv')}</a>
                </li>
            {/if}
            <li><a id="filterbox">{cgimage image='icons/system/view.gif' alt=''} {$mod->Lang('filter')}</a></li>
        </ul>
    </div>

    <div class="grid_6">
        {if $itemcount gt 0}
            <span style="float: right; text-align: right;">
                {if isset($firstpage_url)}
                    <a href="{$firstpage_url}" title="{$mod->Lang('firstpage')}">{$mod->Lang('firstpage')}</a>
                    <a href="{$prevpage_url}" title="{$mod->Lang('prevpage')}">{$mod->Lang('prevpage')}</a>
                {/if}
                {if isset($firstpage_url) || isset($lastpage_url)}
                    {$mod->Lang('page_of',$pagenumber,$pagecount)}
                {/if}
                {if isset($lastpage_url)}
                    <a href="{$nextpage_url}" title="{$mod->Lang('nextpage')}">{$mod->Lang('nextpage')}</a>
                    <a href="{$lastpage_url}" title="{$mod->Lang('lastpage')}">{$mod->Lang('lastpage')}</a>
                {/if}
            </span>
        {/if}
    </div>
    <div class="clearb"></div>
</div>

{if $itemcount gt 0}
  {$formstart2}
  <table cellspacing="0" class="pagetable">
    <thead>
      <tr>
	<th>{$idtext}</th>
	<th>{$producttext}</th>
	<th>{$mod->Lang('url_slug')}</th>
        <th>{$mod->Lang('sku')}</th>
	<th>{$pricetext}</th>
	<th>{$weighttext} ({$weight_units})</th>
	<th>{$mod->Lang('status')}</th>
	<th>{$mod->Lang('last_modified')}</th>
        {if isset($filter.custom_fields)}
          {foreach from=$filter.custom_fields item='fid'}
            <th>{$fields_viewable.$fid}</th>
          {/foreach}
        {/if}
        <th class="pageicon {literal}{sorter: false}{/literal}">&nbsp;</th>
	<th class="pageicon {literal}{sorter: false}{/literal}">&nbsp;</th>
	<th class="pageicon {literal}{sorter: false}{/literal}">&nbsp;</th>
	<th class="pageicon {literal}{sorter: false}{/literal}">&nbsp;</th>
	<th class="pageicon {literal}{sorter: false}{/literal}">&nbsp;</th>
        <th class="pageicon {literal}{sorter: false}{/literal}"><input type="checkbox" title="{$mod->Lang('select_all')}" value="1" name="select_all" id="select_all_products"></th>
      </tr>
    </thead>
    <tbody>
      {foreach from=$items item=entry}
	<tr class="{cycle values='row1,row2'}">
	<td>{$entry.id}</td>
	<td><a href="{$entry.edit_url}" title="{$mod->Lang('edit')}">{$entry.product_name}</a></td>
	<td>{$entry.url}</td>
	<td>{$entry.sku}</td>
	<td>{$entry.price|number_format:2}</td>
        <td>{$entry.weight|number_format:2}</td>
	<td>{if $entry.status != 'published'}
              <span style="color: red;">{$mod->Lang($entry.status)}</span>
            {else}
               {$mod->Lang($entry.status)}
            {/if}
        </td>
	<td>{$entry.modified_date|cms_date_format}</td>
        {if isset($filter.custom_fields) && count($filter.custom_fields)}
          {foreach from=$filter.custom_fields item='fid'}
            <td>{capture assign='tmp'}{$field_names.$fid}{/capture}
              {$entry.$tmp}</td>
          {/foreach}
        {/if}
        <td {if $entry.ajax == true}class="init-ajax-toggle"{/if}>{$entry.importseo}</td>
	<td>{module_action_link module='Products' action='admin_edit_attribs' prodid=$entry.id image='table_relationship.png' text=$mod->Lang('edit_options') imageonly=1}</td>
	<td>{$entry.editlink}</td>
	<td>{$entry.copylink}</td>
	<td>{$entry.deletelink}</td>
        <td><input type="checkbox" class="multiselect" name="{$actionid}multiselect[]" value="{$entry.id}"></td>
        </tr>
      {/foreach}
    </tbody>
  </table>

  <div class="pageoptions" style="height: 2em;">
    <div style="width: 40%; float: left; margin-top: 0.5em;">
      {$addlink}&nbsp;{$importlink}
    </div>
    {if $itemcount gt 0}
      <div style="text-align: right; width: 40%; float: right; margin-top: 0.5em; margin-bottom: 0.5em;">
        {$mod->Lang('with_selected')}:
        <select name="{$actionid}bulkaction">{html_options options=$bulkactions}</select>
        <input type="submit" id="bulkaction_submit" name="{$actionid}submit" value="{$mod->Lang('go')}"/>
      </div>
    {/if}
  </div>
{$formend2}
{/if}
</div><!-- productlist -->
