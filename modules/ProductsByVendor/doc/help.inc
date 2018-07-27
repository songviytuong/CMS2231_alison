<h3>What is this?</h3>
<p>This module is part of Calguy1000's Ecomerce suite for CMS Made Simple.  It provides the ability for logged in members of a FrontEndUsers group to manage their own list of products, and view sale information.</p>

<h3>Features</h3>
<ul>
   <li>Logged in users of a specified FEU group (vendors) can create, edit, and delete their own products.</p>
   <li>Administrators can specify a percentage markup for products sold by vendors.  This markup is charged to the customer, but not visible to the vendor.</li>
   <li>Vendors can view a history of sales of products, and any payouts that are entered into the system.</p>
   <li>Vendor sales information is updated automatically when an order is marked as paid.</li>
   <li>Vendors are notified via email of each new sale.</li>
</ul>

<h3>How do I use it?</h3>
<ul>
   <li>First install and configure the FrontEndUsers, CGEcommerceBase, Products, Orders, and Cart2 (or other compatible cart module), payment gateway modules, packaging, shipping, taxes, handling and other modules required for your e-commerce site.</li>
   <li>In the products module, specify a valid FEU group for the "FEU Owner Group" field. We'll call this the &quot;vendors&quot; group.</li>
   <li>Create a new page of type &quot;Protected Content&quot; and make sure that only members of the &quot;vendors&quot; group has access to the page.  Let us call this page &quot;My Products&quot; <em>(just for purposes of this document).</em>
       <p>In the content area for this page, add the following code.   {ProductsByVendor}.</p>
   </li>
   <li>Create a second new page of type &quot;Protected Content&quot; the same as the above.  In the content area for this page place {ProductsByVendor action=myactivity}</li>
   <li>Visit the module's admin panel and edit the markup information and other settings.</li>
   <li>On the frontend of your website, login as an FEU user that is in the &quot;vendors&quot; group.  You should see the two new pages you created above in your navigation.</li>
   <li>Visit the &quot;My Products&quot; page.  You should see a link to allow you to add your first product.</li>
   <li>and the rest, as they say, is simple.</li>
</ul>

<h3>Styling and Templating</h3>
<p>This software takes advantage of the DesignManager module developed for CMSMS 2.x and provides one standard location for managing templates that will be used by this module. Styling is done by editing the stylesheets that are attached to the design used by the pages you created in the steps above.  ProductsByVendor creates the following template types.</p>
<ul>
  <li>My Products
     <p>This template type is used to render the default <em>(my products)<em> action of this module.</p>
  </li>
  <li>Edit Product
     <p>This template type is used to render the form displayed when a vendor is adding or creating a product.</p>
  </li>
  <li>My Activity
     <p>This template type is used to render the view that allows vendors to see historical sales and payouts.</p>
  </li>
</ul>

<h3>Support</h3>
<p>The module author is in no way obligated to provide support for this code in any fashion.  However, there are a number of resources available to help you with it:</p>
<ul>
<li>A bug tracking and feature request system has been created for this module <a href="http://dev.cmsmadesimple.org/projects/frontendusers">here</a>.  Please be verbose and descriptive when submitting bug reports and feature requests, and for bug reports ensure that you have provided sufficient information to reliably reproduce the issue.</li>
<li>Additional discussion of this module may also be found in the <a href="http://forum.cmsmadesimple.org">CMS Made Simple Forums</a>.  When describing an issue please make an effort to provide all relavant information, a thorough description of your issue, and steps to reproduce it or your discussion may be ignored.</li>
<li>The author, calguy1000, can often be found in the <a href="irc://irc.freenode.net/#cms">CMS IRC Channel</a>.</li>
<li>Lastly, you may have some success emailing the author directly.  However, please use this as a last resort, and ensure that you have followed all applicable instructions on the forge, in the forums, etc.</li>
</ul>

<p>As per the GPL, this software is provided as-is. Please read the text
of the license for the full disclaimer.</p>
<h3>Requirements</h3>
<p>In order to implement the forgotten password functionality, this module requires the CMSMailer module to be previously installed and properly configured.</p>
<p>For encrypted fields the mcrypt functionality is required.</p>
<h3>Copyright and License</h3>
<p>Copyright &copy; 2008, Robert Campbell <a href="mailto:calguy1000@cmsmadesimple.org">&lt;calguy1000@cmsmadesimple.org&gt;</a>. All Rights Are Reserved.</p>
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
Or read it <a href="http://www.gnu.org/licenses/licenses.html#GPL">online</a></p>
