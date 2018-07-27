<h3>{$title}</h3>
{if isset($message) }
  {if isset($error) }
    <p><font color="red">{$message}</font></p>
  {else}
    <p>{$message}</p>
  {/if}
{/if}
{$startform}
<div>{$orig_type}</div>
  <div class="c_full">
    <p class="grid_4">{$prompt_name}:</p>
    <p class="grid_8">{$input_name}</p>
    <div class="clearb"></div>
  </div>
  <div class="c_full">
    <p class="grid_4">{$prompt_prompt}:</p>
    <p class="grid_8">{$input_prompt}</p>
    <div class="clearb"></div>
  </div>
  <div class="c_full">
    <p class="grid_4">{$prompt_type}:</p>
    <p class="grid_8">{$input_type}</p>
    <div class="clearb"></div>
  </div>
  {if isset($fields)}
  {foreach from=$fields item='onefld'}
  <div class="c_full">
    <p class="grid_4">{$onefld[0]}:</p>
    <p class="grid_8">{$onefld[1]}</p>
    <div class="clearb"></div>
  </div>
  {/foreach}
  {/if}
{if isset($input_force_unique) && $defn.type != 6}
  <div class="c_full">
    <p class="grid_4">{$mod->Lang('prompt_force_unique')}:</p>
    <p class="grid_8">{$input_force_unique}</p>
    <div class="clearb"></div>
  </div>
{/if}
{if $defn.type != 2 && $defn.type != 6}
  <div class="c_full">
    <p class="grid_4">{$mod->Lang('prompt_encrypt')}:</p>
    <div class="grid_8">{$input_encrypt}<p>{$mod->Lang('info_encrypt')}</p></div>
    <div class="clearb"></div>
  </div>
{/if}
  <div class="c_full">
    <p class="grid_8">{$hidden|default:''}{$submit}{$cancel}</p>
    <div class="clearb"></div>
  </div>
{$endform}
