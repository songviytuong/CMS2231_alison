<?php
$lang['help_function_html_blob'] = '<h3>Hva gjør denne?</h3>
	<p>Se hjelpen for global_content for en beskrivelse.</p>';
$lang['help_function_contact_form'] = '<h2>MERK: Denne plugin er foreldet</h2>
  <h3>Dette programtillegget er fjernet fra og CMS Made Simple versjon 1.5</h3>
  <p>Du kan bruke modulen FormBuilder i stedet.</p>';
$lang['help_function_breadcrumbs'] = '<h3 style="font-weight:bold;color:#f00;">FJERNET - Bruk nå &#123nav_breadcrumbs&#125 or &#123Navigator action=\'breadcrumbs\'&#125</h3>';
$lang['help_function_redirect_url'] = '<h3>Hva gjør denne?</h3>
  <p>Dette programtillegget kan du enkelt omdirigere til en spesifisert url. Det er praktisk innsiden av Smarty betinget logikk (for eksempel viderekoble til en splash-side hvis området ikke er lever ennå).</p>
<h3>vordan bruker jeg det?</h3>
<p>Bare å sette denne Tagen inn i siden eller malen: <code>{redirect_url to=\'http://www.cmsmadesimple.org\'}</code></p>';
$lang['help_function_redirect_page'] = '<h3>Hva gjør denne?</h3>
 <p>Dette programtillegget kan du enkelt omdirigere til en annen side. Det er praktisk innsiden av Smarty betinget logikk (for eksempel viderekoble til en innloggingsside hvis brukeren ikke er logget inn.)</p>
<h3>Hvordan bruker jeg det?</h3>
<p>Bare å sette denne Tagen inn i siden eller malen:<code>{redirect_page page=\'some-page-alias\'}</code></p>';
$lang['help_function_form_end'] = '<h3>Hva gjør denne?</h3>
<p>Denne tagen skaper en slutt form tag.</p>
<h3>Hvilke parametere tar det?</p>
<ul>
  <li>tildel - <em>(optional)</em> - Tildel resultatene av denne koden til den navngitte smarty variabel.</li>
</ul>
<h3>Bruk:</h3>
<pre><code>{form_end}</code></pre>
<h3>Se Også:</h3>
<p>Se {form_start} tag som er supplement til denne koden.</p>';
$lang['function'] = 'Funksjoner kan utføre en oppgave, eller søke i databasen, og vanligvis vise utdata. De kan bli kalt ut {tagname [attribute=value...]}';
$lang['modifier'] = 'Modifiers ta resultatet av en smarty variabel og endre den. De kalles ut: {$variable|modifier[:arg:...]}';
$lang['postfilter'] = 'Postfiltere kalles automatisk av Smarty etter utarbeidelsen av hver mal. De kan ikke kalles manuelt.';
$lang['prefilter'] = 'Pre-Filter kalles automatisk av Smarty før utarbeidelsen av hver mal. De kan ikke kalles manuelt.';
$lang['tag_about'] = 'Vis historie og forfatterinformasjon for denne plugin, er tilgjengelig';
$lang['tag_adminplugin'] = 'Indikerer at koden er tilgjengelig i admin-grensesnittet, og blir vanligvis brukt i modulmaler';
$lang['tag_cachable'] = 'Angir om produksjonen av plugin kan bli lagret (når Smarty mellomlagring er aktivert). Admin plugins, og modifikatorer kan ikke bli lagret.';
$lang['tag_help'] = 'Vise hjelp (hvis noen finnes) for denne koden';
$lang['tag_name'] = 'Dette er navnet på koden';
$lang['tag_type'] = 'Kode type (funksjon, modifier, eller en pre eller post filter)';
$lang['title_admin'] = 'Dette programtillegget er kun tilgjengelig fra CMSMS administrasjonskonsoll..';
$lang['title_notadmin'] = 'Dette programtillegget kan brukes i både administrasjonskonsollen og på nettsidens frontend.';
$lang['title_cachable'] = 'Denne programtillegget kan bufres';
$lang['title_notcachable'] = 'Dette programtillegget kan ikke bufres';
$lang['viewabout'] = 'Vis historie og forfatterinformasjon for denne modulen';
$lang['viewhelp'] = 'Vis hjelp for denne modulen';
?>