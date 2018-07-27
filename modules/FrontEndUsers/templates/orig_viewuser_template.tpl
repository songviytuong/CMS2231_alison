{* view user template *}
<p>{$mod->Lang('id')}:&nbsp;{$userinfo.id}</p>
<p>{$mod->Lang('username')}:&nbsp;{$userinfo.username}</p>
<p>{$mod->Lang('email')}:&nbsp;<a href="mailto:{$email_address}">{$email_address}</p>
<p>{$mod->Lang('expires')}:&nbsp;{$userinfo.expires}</p>
{foreach from=$user_properties item='entry'}
{if $entry.type != 0}
<p>{$entry.prompt}:&nbsp;{$entry.data}</p>
{/if}
{/foreach}
