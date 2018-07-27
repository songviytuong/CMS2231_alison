{* verify email template -- formerly fogot password email template *}
<h3>{$title}</h3>
<div>{$message}</div>
<h4>{$prompt_code}: {$data_code}</h4>
<p>{$prompt_link}: <a href="{$data_url}">{$data_url}</a></p>
{/strip}
