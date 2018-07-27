{if $user->id > 0 }
<h3>{$mod->Lang('edituser')} {$user->username} / {$user->id}</h3>
{else}
<h3>{$mod->Lang('adduser')}</h3>
{/if}

{form_start}
<div class="pageoverflow">
  <p class="pageinput">
    <input type="submit" name="{$actionid}back" value="{$mod->Lang('back')}" formnovalidate/>
    <input type="submit" name="{$actionid}submit" value="{$mod->Lang('submit')}"/>
    <input type="submit" name="{$actionid}cancel" value="{$mod->Lang('cancel')}" formnovalidate/>
  </p>
</div>

{foreach $fields as $field}
  {$fldid="fld_{$field->name}"}
  <div class="pageoverflow" id="cont_{$field->name}">
     <p class="pagetext"><label {if $field->color}style="color: {$field->color}"{/if}>{$field->marker}{$field->prompt}:</label></p>
     <p class="pageinput">
     {if $field->type == 0}
        {* text field *}
	<input type="text" id="{$fldid}" name="{$actionid}prop_{$field->name}" value="{$field->value}" size="{$field->size}" maxlen="{$field->maxlen}" {if $field->required}required{/if}/>
     {elseif $field->type == 1}
        {* checkbox *}
	<input type="hidden" name="{$actionid}prop_{$field->name}" value="0"/>
	<input type="checkbox" id="{$fldid}" name="{$actionid}prop_{$field->name}" value="1" {if $field->value}checked{/if}/>
     {elseif $field->type == 2}
        {* email *}
	<input type="email" id="{$fldid}" name="{$actionid}prop_{$field->name}" value="{$field->value}" size="{$field->size}" maxlen="{$field->maxlen}" {if $field->required}required{/if}/>
     {elseif $field->type == 3}
        {* textarea *}
        {cge_textarea id=$fldid name="{$actionid}prop_{$field->name}" value=$field->value wysiwyg=$field->wysiwyg}
     {elseif $field->type == 4}
        {* dropdown *}
	<select id="{$fldid}" name="{$actionid}prop_{$field->name}" {if $field->required}required{/if}>
	  {html_options options=$field->options selected=$field->value}
	</select>
     {elseif $field->type == 5}
        {* multiselect *}
	{$tmp=count($field->options)}{if $tmp > 8}{$tmp=8}{/if}
	<input type="hidden" name="{$actionid}prop_{$field->name}" value=""/>
	<select id="{$fldid}" name="{$actionid}prop_{$field->name}[]" size="{$tmp}" multiple>
	  {html_options options=$field->options selected=$field->value}<br/>
	</select>
     {elseif $field->type == 6}
        {* image *}
	{$tmp=$field->image_url}
	{if $tmp}
	   <img src="{$tmp}" width="100" alt="{$field->value}"/>
           <label>
	     <input type="checkbox" name="{$actionid}propdel_{$field->name}" value="1"/>
	     {$mod->Lang('prompt_clear')}
	   </label>
	   <br/>
	{/if}
	<input type="hidden" name="{$actionid}prop_{$field->name}" value="**FILE**"/>
	<input type="file" name="{$actionid}prop_{$field->name}"/>
     {elseif $field->type == 7}
        {* radiobuttons *}
	{foreach $field->options as $key => $val}
	<label><input type="radio" name="{$actionid}prop_{$field->name}" value="{$key}" {if $key == $field->value}checked{/if}/> {$val}</label>
	{/foreach}
     {elseif $field->type == 8}
        {* date *}
	{$tmp="{$actionid}prop_{$field->name}"}
	{html_select_date prefix=$tmp time=$field->value start_year=1900 end_year=2036}
     {/if}
     </p>{* .pageinput *}
  </div>
{/foreach}

<div class="pageoverflow">
  <p class="pageinput">
    <input type="submit" name="{$actionid}back" value="{$mod->Lang('back')}" formnovalidate/>
    <input type="submit" name="{$actionid}submit" value="{$mod->Lang('submit')}"/>
    <input type="submit" name="{$actionid}cancel" value="{$mod->Lang('cancel')}" formnovalidate/>
  </p>
</div>
{form_end}