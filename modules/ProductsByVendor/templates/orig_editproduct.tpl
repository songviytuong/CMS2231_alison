<script type="text/javascript">
{* jquery stuff *}
var attrib_editor = new function() {
    var table, skel_row;
    var counter = 0;

    function get_field(row,name) {
       return $(':input[data-name="'+name+'"]',row);
    }

    function get_field_name_attr(fld,id) {
       return '{$actionid}pbvx_attrib[' +id+ '][' +fld+ ']';
    }

    function remove_row(ev) {
       ev.preventDefault();
       $(this).closest('tr').remove();
    }

    this.add_new_row = function(id,text,adj,sku,qoh)
    {
       var row = skel_row.clone();
       row.removeAttr('id');

       if( !id ) {
           counter++;
	  id='__'+counter;
       }
       get_field(row,'text').attr('name',get_field_name_attr('text',id)).prop('required',true);
       get_field(row,'adj').attr('name',get_field_name_attr('adjustment',id));
       get_field(row,'sku').attr('name',get_field_name_attr('sku',id)).prop('required',true);
       get_field(row,'qoh').attr('name',get_field_name_attr('qoh',id));
       if( text ) get_field(row,'text').val(text);
       if( adj ) get_field(row,'adj').val(adj);
       if( sku ) get_field(row,'sku').val(sku);
       if( qoh ) get_field(row,'qoh').val(qoh);
       table.append(row);
       $('.attrib_del',row).click(remove_row);
       row.show();
    }

    this.init = function() {
        table = $('#attrib_container');
	skel_row = $('#attrib_skel');
	var attribs = {$attribs_json};
	if( attribs ) {
	    for( var i = 0; i < attribs.length; i++ ) {
	        var one = attribs[i];
  	        this.add_new_row( one.id, one.text, one.adjustment, one.sku, one.qoh );
            }
	}
    }
}
$( function() {
   attrib_editor.init();
   $('#deletebtn').click(function(){
      return confirm('{$mod->Lang('confirm_delete_product')}');
   });
   $('#attrib_add').click(function(ev){
      ev.preventDefault();
      attrib_editor.add_new_row();
   });
});
</script>

{if !empty($errors)}
  <div class="alert alert-danger">
     <h4>{$mod->Lang('hdr_errors_detected')}</h4>
     <ul>
        {foreach $errors as $error}<li>{$error}</li>{/foreach}
     </ul>
  </div>
{/if}
{form_start pbv_pid=$product->id}
  <div class="form-group">
    <label class="col-sm-2">{$mod->Lang('prompt_active')}:</label>
    <select class="form-control" name="{$actionid}pbv_active">{cge_yesno_options selected="{$product->status == 'published'}"}</select>
  </div>
  <div class="form-group">
    <label class="col-sm-2">{$mod->Lang('prompt_name')}:</label>
    <input class="form-control" name="{$actionid}pbv_name" value="{$product->name}" required/>
  </div>
  <div class="form-group">
    <label class="col-sm-2">{$mod->Lang('prompt_details')}:</label>
    <textarea class="form-control" name="{$actionid}pbv_details" rows="5">{$product->details}</textarea>
  </div>
  {* organization *}
  <div class="form-group">
    <label class="col-sm-2">{$mod->Lang('prompt_categories')}:</label>
    <select class="form-control" name="{$actionid}pbv_categories[]" multiple>{html_options options=$categories selected=$product->categories}</select>
  </div>

  <div class="form-group">
    <label class="col-sm-2">{$mod->Lang('prompt_hierarchy')}:</label>
    <select class="form-control" name="{$actionid}pbv_hierarchy">{html_options options=$hierarchy_list selected=$product->first_hierarchy}</select>
  </div>

  {* fields *}
  {* NOTE it is possible to identify a field specificly by using $fields['the_field_name'] *}
  <hr/>
  <h4>{$mod->Lang('product_details')}</h4>
  <div class="form-group">
    <label class="col-sm-2">{$mod->Lang('prompt_price')}:</label>
    <input class="form-control" type="number" name="{$actionid}pbv_price" value="{$product->price}" min="0.01" step="0.01" required/>
  </div>
  <div class="form-group">
    <label class="col-sm-2">{$mod->Lang('prompt_weight')}:</label>
    <input class="form-control" type="number" name="{$actionid}pbv_weight" value="{$product->weight}" min="0.01" step="0.01" required/>
  </div>
  {foreach $fieldinfo as $field}
    <div class="form-group">
       <label class="col-sm-2">{$field->prompt}:</label>
       {if $field->type == 'file'}
          <input type="file" name="{$actionid}{$field->fldname}"/>
          {if $field->value}<p>{$mod->Lang('current_file')}:
	     <label><input type="checkbox" name="{$actionid}pbv_delfile[]" value="{$field->fldname}"/> {$mod->Lang('delete')}
	        {$field->value}
	     </label>
	  </p>{/if}
       {elseif $field->type == 'image'}
          <input type="file" name="{$actionid}{$field->fldname}"/>
          {if $field->value}<p>{$mod->Lang('current_file')}:
	     <label><input type="checkbox" name="{$actionid}pbv_delfile[]" value="{$field->fldname}"/> {$mod->Lang('delete')}
	        {$field->value}
	     </label>
	  </p>{/if}
       {else if $field->type == 'checkbox'}
          <input type="text" name="{$actionid}{$field->fldname}" value="1" {if $field->value}checked{/if}/>
       {else if $field->type == 'dropdown'}
          <select name="{$actionid}{$field->fldname}">{html_options options=$field->options selected=$field->value}</select>
       {else if $field->type == 'dimensions'}
          L:<input type="text" name="{$actionid}{$field->fldname}[l]" value="{$field->value.length}" size="10"/>
          W:<input type="text" name="{$actionid}{$field->fldname}[w]" value="{$field->value.width}" size="10"/>
          H:<input type="text" name="{$actionid}{$field->fldname}[h]" value="{$field->value.height
}" size="10"/>
       {else if $field->type == 'textarea'}
          <textarea name="{$actionid}{$field->fldname}" class="form-control">{$field->value}</textarea>
       {else if $field->type == 'qoh'}
	  <input type="number" class="form-control" name="{$actionid}{$field->fldname}" value="{$field->value}" size="5"/>
       {else}
          {* text box *}
	  <input type="text" class="form-control" name="{$actionid}{$field->fldname}" value="{$field->value}"/>
       {/if}
    </div>
  {/foreach}

  {* advanced *}
  <div class="form-group">
    <label class="col-sm-2">{$mod->Lang('prompt_sku')}:</label>
    <input class="form-control" type="text" name="{$actionid}pbv_sku" value="{$product->sku}" required/>
  </div>

  {* attributes *}
  <hr/>
  <h4>{$mod->Lang('product_attributes')}</h4>
  <table class="table">
    <thead>
      <tr>
        <th class="attr_text">{$mod->Lang('attr_text')}</th>
        <th class="attr_adj">{$mod->Lang('attr_adjustment')}</th>
        <th class="attr_sku">{$mod->Lang('attr_sku')}</th>
        <th class="attr_qoh">{$mod->Lang('attr_qoh')}</th>
	<th class="attr_del" style="min-width: 1%;"></th>
      </tr>
    </thead>
    <tbody id="attrib_container">
      {* skeleton row *}
      <tr class="attrib_row" id="attrib_skel" style="display: none;">
        <td class="attr_text">
	  <input data-name="text" type="text" value=""/ class="attrib-text"/>{* text *}
	</td>
        <td class="attr_adj">
	  <input data-name="adj" type="text" name="" class="attrib-adj"/>{* adjustment *}
	</td>
        <td class="attr_sku">
	  <input data-name="sku" type="text" name="" class="attrib-sku"/>{* sku *}
	</td>
        <td class="attr_qoh">
	  <input data-name="qoh" type="number" name="" class="attrib-qoh"/>{* quoh *}
	</td>
	<td><a class="attrib_del" href="#">DEL</a></td>
      </tr>
    </tbody>
  </table>

  {* finish *}
  <div class="form-group">
     <button name="{$actionid}pbv_submit">{$mod->Lang('submit')}</button>
     <button name="{$actionid}pbv_cancel">{$mod->Lang('cancel')}</button>
     <button id="attrib_add">{$mod->Lang('add_attribute')}</button>
     {if $product->id}
       <button id="deletebtn" name="{$actionid}pbv_delete">{$mod->Lang('delete_product')}</button>
     {/if}
  </div>
{form_end}
