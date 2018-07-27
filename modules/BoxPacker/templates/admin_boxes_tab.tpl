<div class="pageoptions">
  <a href="{cms_action_url action=admin_editbox}">{admin_icon icon='newobject.gif'} {$mod->Lang('add_box')}</a>
</div>

{if !empty($boxes)}
  <table class="pagetable">
     <thead>
        <tr>
	  <th>{$mod->Lang('name')}</th>
	  <th>{$mod->Lang('outer_width')}</th>
	  <th>{$mod->Lang('outer_length')}</th>
	  <th>{$mod->Lang('outer_depth')}</th>
	  <th>{$mod->Lang('max_weight')}</th>
	  <th class="pageicon"></th>
	  <th class="pageicon"></th>
	</tr>
     </thead>
     <tbody>
       {foreach $boxes as $box}
         {cms_action_url action=admin_editbox boxid=$box->id assign='edit_url'}
         <tr class="{cycle values='row1,row2'}">
	    <td><a href="{$edit_url}" title="{$mod->Lang('edit')}">{$box->ref}</a></td>
	    <td>{$box->outer_width} {$length_units}</td>
	    <td>{$box->outer_length} {$length_units}</td>
	    <td>{$box->outer_depth} {$length_units}</td>
	    <td>{$box->max_weight} {$weight_units}</td>
	    <td><a href="{$edit_url}" title="{$mod->Lang('edit')}">{admin_icon icon='edit.gif'}</a></td>
	    <td><a href="{cms_action_url action=admin_delete_box boxid=$box->id}" title="{$mod->Lang('delete')}">{admin_icon icon='delete.gif'}</a></td>
	 </tr>
       {/foreach}
     </tbody>
  </table>
{/if}