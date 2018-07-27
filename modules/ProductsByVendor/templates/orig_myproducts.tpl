<style>
table.table {
   width: 100%;
}
table.table th {
   text-align: left;
}
table.table th.icon {
   min-width: 1%;
}
table.table tr.product_disabled td {
   color: red;
}
table.table tr.product_draft td {
   color: orange;
}
</style>

{$csym=product_ops::get_currency_symbol()}
<div class="row">
  <p style="float: left;"><a href="{cms_action_url action=editproduct}">{$mod->Lang('prompt_add_product')}</a></p>
  <p style="float: right; text-align: right;">
  {if $pagination.pagecount > 1}
     {$list=$pagination->get_pagelist()}
     <span>{$mod->Lang('page')}</span>
     {foreach $list as $pagenum}
       <a href="{cms_action_url action=default pbv_page=$pagenum}" {if $pagination.page == $pagenum}class="activepage"{/if}>{$pagenum}</a>
     {/foreach}
  {/if}
  </p>
</div>
{if !empty($products)}
  <table class="table">
    <thead>
      <tr>
        <th>{$mod->Lang('th_name')}</th>
	<th>{$mod->Lang('th_price')}</th>
	<th>{$mod->Lang('th_status')}</th>
	<th class="icon">{* edit *}</th>
      </tr>
    </thead>
    <tbody>
    {foreach $products as $product}
      {cms_action_url action='editproduct' pbv_pid=$product->id assign='edit_url'}
      <tr class="product_{$product->status}">
        <td><a href="{$edit_url}" title="{$mod->Lang('edit')}">{$product->name}</a></td>
	<td>{$csym}{$product->price|number_format:3}</td>
	<td>{$key="status_{$product->status}"}{$mod->Lang($key)}</td>
	<td><a href="{$edit_url}" title="{$mod->Lang('edit')}">{$mod->Lang('edit')}</a></td>
      </tr>
    {/foreach}
    </tbody>
  </table>
{/if}
