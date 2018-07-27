{$csym=product_ops::get_currency_symbol()}{$transactions=$order->transactions}
<h3>Hello {$username}</h3>
<p>A sale has been processed (or updated) concerning one or more of your products.</p>

<p>The details of this order are:</p>
<p>Order Number:  {$order->order_id}</p>
<p>Order Date:    {$order->date|date_format:'%x'}</p>
<p>Products:</p>
<table>
   {foreach $transactions as $tr}
   <tr>
     <td>{$tr->summary}</td>
     <td>{$tr->qty}</td>
     <td>{$csym}{$tr->unit_price|number_format:2}</td>
     <td>{$csym}{$tr->amount|number_format:2}</td>
   </tr>
   {/foreach}
</table>

<p>Your total accrued payout as of this time is <span style="color: blue;">{$csym}{$total_accrued|number_format:2}</span></p>

<p>Please login to <a href="{root_url}">{sitename}</a> <a href="{root_url}">{root_url}</a> and view your activity at your earliest conveniene.</p>
