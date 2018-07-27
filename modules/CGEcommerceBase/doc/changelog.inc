<ul>
 <li>v1.0 - April 2010
   <ul>
     <li>Initial Release.</li>
   </ul>
 </li>
 <li>v1.0.1 - April 2010
   <ul>
     <li>Minor fix to the get cart form stuff.</li>
     <li>Adds the {cgecomm_erasecart} tag.</li>
   </ul>
 </li>
 <li>v1.0.2 - May 2010
   <ul>
     <li>Adds the Store Information tab and related smarty plugins and api functions.</li>
     <li>Adds package stuff to the shipping tab to be used by upcoming shipping modules.</li>
   </ul>
 </li>
 <li>v1.1 - May 2010
   <ul>
     <li>Adds package stuff to the shipping tab to be used by upcoming shipping modules.</li>
   </ul>
 </li>
 <li>v1.2 - June 2010
   <ul>
     <li>Adds cart policy functions, and other minor enhancments.</li>
   </ul>
 </li>
 <li>v1.2.1 - August 2010
   <ul>
     <li>Adds the ability for a cart item to indicate that quantity cannot be adjusted (useful for subscriptions)</li>
     <li>Minor enhancements and fixes.</li>
   </ul>
 </li>
 <li>v1.2.2 - August 2010
   <ul>
     <li>Remove an errant die statement.</li>
   </ul>
 </li>
 <li>v1.2.3 - December 2010
   <ul>
     <li>Adds an event for before cart item add.</li>
     <li>Enahcnes functionality of the cg_ecomm_cartitem object.</li>
     <li>Re-organizez the cg_ecomm_cart method with stuff from cg_ecomm</li>
     <li>Minor bug fixes.</li>
     <li>Some minor bug fixes related to E_STRICT and E_DEPRECATED.</li>
   </ul>
 </li>
 <li>Version 1.2.4 - February 2011
  <ul>
    <li>Fixes minor preference issues on install.</li>
  </ul>
 </li>
 <li>Version 1.3 - May 2011
  <ul>
    <li>Ads a new smarty plugin to allow checking if an item is in the cart.. and a bunch of others.</li>
  </ul>
 </li>
 <li>Version 1.3.1 - May 2011
  <ul>
    <li>Minor bug fixes, and enhancements.</li>
  </ul>
 </li>
 <li>Version 1.3.2 - July 2011
  <ul>
    <li>Minor bug fix.</li>
  </ul>
 </li>
 <li>Version 1.3.3 - July 2011
  <ul>
    <li>Minor bug fix.</li>
  </ul>
 </li>
 <li>Version 1.3.5 - August 2011
  <ul><li>Bug fix.</li></ul>
 </li>
 <li>Version 1.3.11 - May 2012
  <ul><li>Adds tax shipping option.</li></ul>
 </li>
 <li>Version 1.4.x - April 2013
  <p><strong>NOTE: COMPATIBILITY BROKEN.  SOME CHANGES REQUIRED.</strong></p>
  <p><strong>NOTE: PHP 5.3.x IS REQUIRED.</strong></p>
  <ul>
  <li>Removes support for attributes, and replaces that with options.</li>
  <li>Numerous minor bug fixes.</li>
  </ul>
  </li>

  <li>Version 1.5.x
  <ul>
    <li>Adds support for handling modules.</li>
    <li>More work with sku and options in various classes (1.5.5)</li>
  </ul>

  <li>Version 1.6.x
    <br/>
    <div class="warning"><strong>WARNING:</strong> This version of the CGEcommerceBase module and it's dependent modulues implements many changes.  There will likely be compatibility issues.</li>
    <ul>
	<lI>Adds support for multiple payment gateways - All gateways must be updated to work with the new mechanism.</li>
	<li>Attempt to improve behavior with locales that do not uses . as a decimal point (values still need to be entered with . as a decimal point though)</li>
        <li>Adds support for a handling module.</li>
        <li>Lots of internal infrastructure work.</li>
	<li>Now require PHP 5.4.11</li>
	</ul>
   </li>
   </ul>

   <li>Version 1.7.x
        <ul>
	<li>Clean up various admin templates.</li>
	<li>Adds support for a packaging module type.</li>
	<li>Shipping modules are now detected by modules implementing the \CGExtensions\shipping_module interface.  Some shipping modules may be broken</li>
        <li>Payment gateway modules are now detected by modules implementing the \CGExtensions\payment_gateway interface.  Some payment gateway modules may be broken.</li>
	<li>Adds various classes, including a base shipping estimate class, packing list classes, new interfaces...</li>
	<li>Code cleanup.</li>
	</ul>
    </li>

</ul>
