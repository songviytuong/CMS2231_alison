{if isset($message) }
  {if isset($error) }
    <p class="red">{$message}</font></p>
  {else}
    <p>{$message}</p>
  {/if}
{/if}

<div class="c_full">
  <p class="grid_8" style="margin-left: 0;">
    {if isset($add_url)}
      <a href="{$add_url}" title="{$mod->Lang('addprop')}">{cgimage image='icons/system/newobject.gif'} {$mod->Lang('addprop')}</a>
    {/if}
  </p>
  <p class="grid_4 text-right">{$propcount}&nbsp;{$propsfound}</p>
  <div class="clearb"></div>
</div>

{if $propcount > 0}
<table cellspacing="0" class="pagetable">
	<thead>
		<tr>
			<th>{$nametext}</th>
			<th>{$prompttext}</th>
			<th>{$typetext}</th>
			<th>{$lengthtext}</th>
			<th>{$mod->Lang('unique')}</th>
			<th>{$mod->Lang('encrypted')}</th>
			<th class="pageicon {literal}{sorter: false}{/literal}">&nbsp;</th>
			<th class="pageicon {literal}{sorter: false}{/literal}">&nbsp;</th>
		</tr>
	</thead>
	<tbody>
{foreach from=$props item=prope}
		<tr class="{$prope->rowclass}">
			<td>{$prope->name}</td>
			<td>{$prope->prompt}</td>
			<td>{$prope->type}</td>
			<td>{$prope->length}</td>
                        <td>{if $prope->force_unique}{$mod->Lang('yes')}{else}{$mod->Lang('no')}{/if}</td>
                        <td>{if $prope->encrypt}{$mod->Lang('yes')}{/if}</td>
			<td>{$prope->editlink|default:''}</td>
			<td>
			  {if isset($prope->delete_url)}
			    <a href="{$prope->delete_url}">{cgimage image='icons/system/delete.gif' alt=$mod->Lang('delete')}</a>
			  {/if}
			</td>
		</tr>
{/foreach}
	</tbody>
</table>
{/if}
