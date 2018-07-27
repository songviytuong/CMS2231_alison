<?php
$lang['friendlyname'] = 'CGSimpleSmarty';
$lang['help'] = '<h3>What Does This Do?</h3>
<p>This module provides some simple smarty utilities for use in applications or for customizing the behaviour of your CMS Made Simple pages.</p>
<h3>How Do I Use It:</h3>
<p>When this module is installed, a new smarty object named cgsimple is automatically available to your page templates, global content blocks, and various module templates.  This smarty object has numerous functions that you can call at any time.</p>
<h4>Available Functions:</h4>
<ul>
<li><strong>self_url</strong>([$assign])
    <p>Return the current URL</p>
    <p>Arguments:
       <ul>
         <li>[$assign]   - (optional) The name of a variable to assign the results to.</li>
      </ul>  
    <br/></p>
</li>

<li><strong>module_installed</strong>($modulename,[$assign])
    <p>Test if a particular module is installed.</p>
    <p>Arguments:
       <ul>
         <li>$modulename - The name of the module to check</li>
         <li>[$assign]   - (optional) The name of a variable to assign the results to.</li>
      </ul>  
    <br/></p>
    <p>Example:<br/>
    <pre>{if $cgsimple->module_installed(\'FrontEndUsers\')}Found FEU{/if}</pre><br/>
    </p>
</li>

<li><strong>module_version</strong>($modulename,[$assign])
    <p>Return the version number of a specific installed module</p>
    <p>Arguments:
       <ul>
         <li>$modulename - The name of the module to check</li>
         <li>[$assign]   - (optional) The name of a variable to assign the results to.</li>
      </ul>  
    <br/></p>
    <p>Example:<br/>
    <pre>{$cgsimple->module_version(\'FrontEndUsers\',\'feu_version\')}We have Version {$feu_version} of FrontEndUsers</pre><br/>
    </p>
</li>

<li><strong>get_parent_alias</strong>([$alias],[$assign])
    <p>Returns the alias of the specified pages parent. Returns an empty string if there is no parent.</p>
    <p>Arguments:
       <ul>
       <li>[$alias] - (optional) The page alias to find the parent of.  If no value is specified, the current page is used.</li>
       <li>[$assign]   - (optional) The name of a variable to assign the results to.</li>
       </ul>  
    <br/></p>
    <p>Example:<br/>
    <pre>The parent page alias is {$cgsimple->get_parent_alias()}</pre><br/>
    </p>
</li>

<li><strong>get_root_alias</strong>([$alias],[$assign])
    <p>Returns the alias of the specified pages root parent. Returns an empty string if there is no root parent.</p>
    <p>Arguments:
       <ul>
       <li>[$alias] - (optional) The page alias to find the root parent of.  If no value is specified, the current page is used.</li>
       <li>[$assign]   - (optional) The name of a variable to assign the results to.</li>
       </ul>  
    <br/></p>
    <p>Example:<br/>
    <pre>The root parent page alias is {$cgsimple->get_root_alias()}</pre><br/>
    </p>
</li>

<li><strong>get_page_title</strong>([$alias],[$assign])
    <p>Returns the title of the specified page.</p>
    <p>Arguments:
       <ul>
       <li>[$alias] - (optional) The page alias to find the title of.  If no value is specified, the current page is used.</li>
       <li>[$assign]   - (optional) The name of a variable to assign the results to.</li>
       </ul>  
    <br/></p>
    <p>Example:<br/>
    <pre>The title of the current page is {$cgsimple->get_page_title()}</pre><br/>
    </p>
</li>

<li><strong>get_page_menutext</strong>([$alias],[$assign])
    <p>Returns the menutext of the specified page.</p>
    <p>Arguments:
       <ul>
       <li>[$alias] - (optional) The page alias to find the title of.  If no value is specified, the current page is used.</li>
       <li>[$assign]   - (optional) The name of a variable to assign the results to.</li>
       </ul>  
    <br/></p>
    <p>Example:<br/>
    <pre>The menutext of the current page is {$cgsimple->get_page_title()}</pre><br/>
    </p>
</li>

<li><strong>has_children</strong>([$alias],[$assign])
    <p>Test if the specified page has children.</p>
    <p>Arguments:
       <ul>
       <li>[$alias] - (optional) The page alias to test.  If no value is specified, the current page is used.</li>
       <li>[$assign] - (optional) The name of a variable to assign the results to.</li>
       </ul>  
    <br/></p>
    <p>Example:<br/>
    <pre>{$cgsimple->has_children(\'\',$has_children)}{if $has_children}The current page has children{else}The current page has no children{/if}</pre><br/>
    </p>
</li>

<li><strong>get_children</strong>([$alias],[$showinactive],[$assign])
   <p>Return an array containing information about a pages children (if any)</p>
    <p>Arguments:
       <ul>
       <li>[$alias] - (optional) The page alias to test.  If no value is specified, the current page is used.</li>
       <li>[$showinactive] - (optional) Wether inactive pages should be included in the result (defaults to false).</li>
       <li>[$assign] - (optional) The name of a variable to assign the results to.</li>
       </ul>  
    <br/></p>
    <p>Fields:
       <ul>
       <li>alias - the page alias of the child</li>
       <li>id - the page id of the child</li>
       <li>title - the page id of the child</li>
       <li>menutext - the menu text of the child</li>
       </ul>
    <br/></p>
    <p>Example:<br/>
    <pre>
{$cgsimple->get_children(\'\',\'\',$children)}
{if count($children)}
   {foreach from=$children item=\'child\'}
      {if $child.show_in_menu}
        Child:  id = {$child.id} alias = {$child.alias}<br/>
      {/if}
   {/foreach}
{/if}
    </pre><br/>
    </p>
</li>

    <li><strong>get_page_content</strong>($alias,[$block],[$assign])
    <p>Returns the text of a specific content block of another page.</p>
    <p>Arguments:
       <ul>
       <li>$alias - The page alias to extract content from.</li>
       <li>[$block] - (optional) The name of the content block in the specified page.  if this variable is not specified, \'content_en\' is assumed.</li>
       <li>[$assign] - (optional) The name of a variable to assign the results to.</li>
       </ul>  
    <br/></p>
    <p>Example:<br/>
    <pre>The title of the current page is {$cgsimple->get_page_title()}</pre><br/>
    </p>
</li>

    <li><strong>get_sibling</strong>($direction,[$assign],[$alias])
    <p>Returns the alias of the next or previous sibling to the specified
       page. or false.</p>
    <p>Arguments:
       <ul>
       <li>$direction - the direction to look in.  possible values are prev,previous,-1,next,1</li>
       <li>[$assign] - (optional) The name of the variable to assign the results to.</li>
       <li>[$alias] - (optional) The page alias to find the sibling for.  If this is not specified, the current page is used.</li>
    <br/></p>
       <p>Example:<br/>
       <pre>Link to previous sibling: {$cgsimple->get_sibling("prev","prev_sibling")}{if !empty($prev_sibling)}{cms_selflink page="$prev_sibling" text="Previous"}{/if}</pre><br/>
    </li>
</ul>
<h4>Other Smarty functions</h4>
<ul>
    <li><strong>{module_action_link}</strong>
    <p>A smarty plugin that can create a link to a module action.</p>
    <p>Arguments:
       <ul>
       <li>module - The module to create a link to</li>
       <li>action (default) - The action to call within the module</li>
       <li>text - The text to put in the link</li>
       <li>page - Specify the destination page</li>
       <li>urlonly - Instead of generating a link, generate just the url</li>
       <li>jsfriendly - Used with the urlonly parameter this parameter will ensure that a javascrpt friendly url is output.</li>
       <li>confmessage - A confirmation message to display when the link is clicked.</li>
       <li>image - An image to use on the link</li>
       <li>imageonly - If an image is specified, create a link only consisting of the image.  The text will be used for the title attribute</li>
       </ul>
    <br/></p>
    <p>Any other arguments to the smarty plugin will be added to the URL generated.</p>   <p>Example:
<pre>{module_action_link module=\'News\' action=\'fesubmit\' text=\'Submit a New News Article\'}</pre><br/></p></li>


    <li><strong>{session_put}</strong>
    <p>A smarty plugin that can store data in the user session. This data is then accessible via the $smarty.session array in subsequent pages.</p>
    <p>Arguments:
       <ul>
       <li>var - The name of the variable to create in the session.</li>
       <li>value - The desired value of the variable.</li>
       </ul>
    <br/></p>
    <p>Example:
    <pre>{session_put var=\'test\' value=\'blah\'}</pre><br/></p></li>

    <li><strong>{session_erase}</strong>
    <p>A smarty plugin that can erase data from the user session.</p>
    <p>Arguments:
       <ul>
       <li>var - The name of the variable to erase in the session.</li>
       </ul>
    <br/></p>
    <p>Example:
    <pre>{session_erase var=\'test\'}</pre><br/></p></li>

    <li><strong>{cgrepeat}</strong>
    <p>Another smarty plugin that will allow repeating text</p>
    <p>Arguments:</p>
      <ul>
        <li>text - The text to be repeated</li>
        <li>count - The number of times it should be repeated</li>
        <li>assign - Assign the output to the specified smarty variable</li>
      </ul>
    <br/>
    <p>Example: <pre>{cgrepeat text=\'this\' count=\'5\'}</pre><br/></p>
    </li>
</ul>
<h3>Copyright and License</h3>
<p>Copyright © 2008, Robert Campbel <a href="mailto:calguy1000@cmsmadesimple.org"><calguy1000@cmsmadesimple.org></a>. All Rights Are Reserved.</p>
<p>This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.</p>
<p>However, as a special exception to the GPL, this software is distributed
as an addon module to CMS Made Simple.  You may not use this software
in any Non GPL version of CMS Made simple, or in any version of CMS
Made simple that does not indicate clearly and obviously in its admin 
section that the site was built with CMS Made simple.</p>
<p>This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.
You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA 02111-1307 USA
Or read it <a href="http://www.gnu.org/licenses/licenses.html#GPL">online</a></p>';
$lang['moddescription'] = 'Calguys Simple Smarty ツール';
$lang['postinstall'] = 'CGSimpleSmartyがインストールされていません。';
$lang['postuninstall'] = 'CGSimpleSmartyは削除されました。';
$lang['utma'] = '156861353.3775144692282817500.1248653923.1248653923.1248653923.1';
$lang['utmb'] = '156861353.1.10.1248653923';
$lang['utmc'] = '156861353';
$lang['utmz'] = '156861353.1248653923.1.1.utmcsr=google|utmccn=(organic)|utmcmd=organic|utmctr=cmsms';
?>