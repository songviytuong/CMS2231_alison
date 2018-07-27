{$csym=product_ops::get_currency_symbol()}
<p>To date, your accrued payout is: {$csym}{$accrued_payout|number_format:2}</p>
{if !empty($items)}
  {if $pagination.pagecount > 1}
     {if $pagination.page > 1}
       <a href="{cms_action_url action=myactivity pbv_page="{$pagination.page-1}"}">Newer</a>
     {/if}
     {if $pagination.page < $pagination.pagecount}
       <a href="{cms_action_url action=myactivity pbv_page="{$pagination.page+1}"}">Older</a>
     {/if}
  {/if}
  <table class="table">
    <thead>
      <tr>
        <th>{$mod->Lang('th_type')}</th>
	<th>{$mod->Lang('th_date')}</th>
	<th>{$mod->Lang('th_descr')}</th>
	<th>{$mod->Lang('th_payout')}</th>
	<th>{$mod->Lang('th_order_id')}</th>
	<th>{$mod->Lang('th_product_id')}</th>
	<th>{$mod->Lang('th_qty')}</th>
	<th>{$mod->Lang('th_unit_price')}</th>
	<th>{$mod->Lang('th_amount')}</th>
      </tr>
    </thead>
    <tbody>
    {foreach $items as $item}
      <tr>
        <td>{$mod->Lang($item->type)}</td>
	<td>{$item->created|date_format:'%x'}</td>
	<td>{$item->summary|truncate:80}</td>
	<td>{if $item->payout_id > 0}{$item->payout_id}{/if}</td>
	<td>{$item->order_id}</td>
	<td>
	   {if isset($products[$item->product_id])}
             {$products[$item->product_id]->name} <em>({$item->product_id})</em>
	   {else}
  	     {$item->product_id} <em>({$mod->Lang('notfound')})</em>
	   {/if}
	</td>
	<td>{$item->qty}</td>
	<td>{$csym}{$item->unit_price|number_format:2}</td>
	<td>{$csym}{$item->amount|number_format:2}</td>
      </tr>
    {/foreach}
    </tbody>
  </table>
{/if}