<?php
$lang['ask_really_uninstall'] = 'Etes-vous sûr(e) de vouloir désinstaller ce module ?';
$lang['attrib_item_description'] = 'Gabarit d\'affichage des attributs produit&nbsp;';
$lang['cart_module'] = 'Module de Panier&nbsp;';
$lang['currency_code'] = 'Code devise&nbsp;';
$lang['currency_symbol'] = 'Symbole de devise&nbsp;';
$lang['error_invalidaddress'] = 'L\'adresse fournie est invalide (tous le champs sont-ils complétés ?';
$lang['event_desc_CartAdjusted'] = 'Appelé lorsque des ajustements par lot sont effectués sur le panier, ou un de ses';
$lang['event_desc_CartItemAddPre'] = 'Appelé juste avant qu\'un item soit ajouté au panier';
$lang['event_desc_CartItemAdded'] = 'Appelé quand un produit unique ou service est ajouté au panier';
$lang['event_desc_OrderCreated'] = 'Appelé après l\'insertion d\'une nouvelle commande dans la base de données';
$lang['event_desc_OrderDeleted'] = 'Appelé après la suppression complète d\'une commande';
$lang['event_desc_OrderUpdated'] = 'Appelé après l\'enregistrement d\'une commande existante';
$lang['event_help_CartItemAddPre'] = '<p>Sent prior to an item being added to the cart, this event is called after the cart policy is checked, and can be used to alter the item.</p>
<h4>Parameters:</h4>
<ul>
<li>"existing_items" - <em>(read only)</em>  An array of cg_ecomm_cartitem items representing the existing items in the cart.</li>
<li>"cart_item" - <em>(modifiable)</em> A reference (modifiable) to a cg_ecomm_cartitem object representing the item that is proposed to add to the cart.</li>
</ul>';
$lang['event_help_CartAdjusted'] = '<p>Sent when bulk adjustments are done to the cart, or one of its baskets.</p>
<h4>Paramètres :</h4>
<ul>
<li>"cart_items" - An hash of baskets, each containing an array of cart item objects and some summary information.</li>
<li>"status" - A status flag, indicating wether this is before, or after the items have changed.</li>
</ul>';
$lang['event_help_CartItemAdded'] = '<p>Sent when bulk adjustments are done to the cart, or one of its baskets.</p>
<h4>Paramètres :</h4>
<ul>
<li>"cart_item" - The single cart item object that was added.</li>
</ul>';
$lang['event_help_OrderCreated'] = '<p>Envoyés après l\'insertion d\'une commande dans la base de données.</p>
<h4>Paramètres :</h4>
<ul>
<li>"order_id" - ID de la nouvelle commande créée.</li>
</ul>';
$lang['event_help_OrderDeleted'] = '<p>Envoyés après la suppression d\'une commande de la base de données.</p>
<h4>Paramètres :</h4>
<ul>
<li>"order_id" - ID de la commande supprimée.</li>
</ul>';
$lang['event_help_OrderUpdated'] = '<p>Envoyés après la mise à jour d\'une commande de la base de données.</p>
<h4>Paramètres :</h4>
<ul>
<li>"order_id" - ID de la commande mise à jour.</li>
</ul>';
$lang['friendlyname'] = 'Configuration E-Commerce';
$lang['gateway_policy'] = 'Politique du processus de paiement';
$lang['handling_module'] = 'Module de manutention&nbsp;';
$lang['info_attrib_item_description'] = 'Ce gabarit est utilisé pour l\'affichage des listes déroulantes d\'attributs de produits. Les variables sont {$currency_symbol},{$weight_units},{$attrib_adjust},{$attrib_text},{$attrib_sku}.<br>
Astuce : pour afficher le prix total de l\'article (prix de base + prix de l\'attribut, utilisez : {$entry->price+$attrib_adjust}';
$lang['info_cart_module'] = 'Différents modules de e-paniers d\'achats peuvent être installés, chacun disposant de son propre fonctionnement. Merci de sélectionner l\'un des modules e-panier installé dans cette liste';
$lang['info_cart_policy'] = 'La politique panier est influencée par les capacités de la passerelle de paiement, et détermine le nombre et le type d\'articles pouvant être ajoutés dans le(s) panier(s). Vous pouvez restreindre encore davantage la politique de panier, mais vous ne pouvez pas contourner les restrictions imposées par la passerelle de paiement.';
$lang['info_lineitem_desc_template'] = 'Ce gabarit est utilisé pour formater la description en un seule ligne pour un élément de panier. Cette description est également utilisée pour la ligne de chaque article dans le traitement des commandes en ligne.';
$lang['info_handling_module'] = 'De nombreux modules avec la fonctionnalité de calcul des frais de manutention peuvent être téléchargés. Chacun d\'eux a des comportements différents. Veuillez en sélectionner un, parmi les modules installés, dans cette liste';
$lang['info_overweight_limit'] = 'Le poids d\'un article qui doit être envoyé dans son propre paquet/colis';
$lang['info_packaging_module'] = 'Sélectionnez un module de colisage. Si aucun module n\'est sélectionné, alors le système calculera le coût en fonction de chaque produit de la commande.';
$lang['info_promotions_module'] = 'Différents modules de bons de réduction/promotions peuvent être installés. Ils proposent chacun leurs propres fonctions de bons de réduction ou autres formes de promotions. Merci de sélectionner le module à utiliser pour la boutique dans cette liste.';
$lang['info_ship_dimensions'] = 'Champ du module Products indiquant les dimensions de ce produit livrable';
$lang['info_ship_seperately'] = 'Champ du module Products indiquant que cette valeur devrait être livré en tant que son propre paquet/colis';
$lang['info_shipping_module'] = 'Il est possible de télécharger de nombreux modules de calcul de frais d\'expédition, chacun d\'eux ayant un comportement différent. Veuillez sélectionner un des modules installés dans cette liste.';
$lang['info_supplier_modules'] = 'Des modules fournisseurs sont capables d\'interagir avec le panier pour répondre aux demandes de modules de traitement des commandes. Vous pouvez sélectionner plusieurs modules le fournisseur.';
$lang['info_tax_module'] = 'De nombreux modules effectuant le calcul des taxes peuvent être téléchargés. Chacun d\'eux a des comportements différents. Merci de sélectionner un des modules de calcul des taxes installé à partir de cette liste';
$lang['info_tax_shipping'] = 'Selon la localisation, les frais d\'envoi ne sont pas taxable. Utiliser cette option pour ne pas ajouter de taxe aux frais d\'envoi.';
$lang['length_units'] = 'Unité de longueur&nbsp;';
$lang['lineitem_desc_template'] = 'Gabarit de description d\'une ligne produit&nbsp;';
$lang['max_products'] = 'Nombre max. de produits dans un seul panier&nbsp;';
$lang['max_services'] = 'Nombre max. de services dans un seul panier&nbsp;';
$lang['max_subscriptions'] = 'Nombre max. d\'abonnements dans un seul panier&nbsp;';
$lang['mixed_subscriptions'] = 'Autoriser le mélange de produits, services et abonnements dans le même panier&nbsp;';
$lang['module_description'] = 'Base pour tous les modules E-commerce, ce module fournit également des préférences globales et des connecteurs entre les modules E-commerce CMSMS.';
$lang['no'] = 'Non';
$lang['none'] = 'Aucun';
$lang['not_applicable'] = 'Non applicable';
$lang['packaging_module'] = 'Module de packaging';
$lang['payment_modules'] = 'Module de paiement en ligne';
$lang['postinstall'] = 'Le module CGEcommerceBase est maintenant installé, vous pouvez maintenant procéder à l\'installation de plusieurs composants de la suite e-commerce afin de remplir vos fonctions nécessaires. Dés l\'installation terminée de ces composants retournez au panneau d\'administration des modules pour poursuivre la configuration';
$lang['postuninstall'] = 'Ce module ainsi que les données associées ont été supprimés de la base de données de CMSMS. Vous pouvez à présent supprimer ses fichiers.';
$lang['promotions_module'] = 'Module de promos / bons de réduction&nbsp;';
$lang['prompt_company'] = 'Entreprise&nbsp;';
$lang['prompt_firstname'] = 'Prénom&nbsp;';
$lang['prompt_lastname'] = 'Nom&nbsp;';
$lang['prompt_maxweight'] = 'Poids max';
$lang['prompt_address1'] = 'Adresse Ligne 1&nbsp;';
$lang['prompt_address2'] = 'Adresse Ligne 2&nbsp;';
$lang['prompt_city'] = 'Ville&nbsp;';
$lang['prompt_state'] = 'Etat / Province&nbsp;';
$lang['prompt_postal'] = 'Code Postal&nbsp;';
$lang['prompt_country'] = 'Pays&nbsp;';
$lang['prompt_fax'] = 'Fax&nbsp;';
$lang['prompt_email'] = 'Courriel&nbsp;';
$lang['prompt_phone'] = 'Téléphone&nbsp;';
$lang['prompt_overweight_limit'] = 'Limite de poids';
$lang['prompt_shipping_boxes'] = 'Colis d\'expédition';
$lang['prompt_width'] = 'Largeur';
$lang['prompt_height'] = 'Hauteur';
$lang['prompt_length'] = 'Longueur';
$lang['prompt_weight'] = 'Poids';
$lang['prompt_sorting'] = 'Priorité';
$lang['prompt_name'] = 'Nom';
$lang['reset'] = 'Réinitialiser';
$lang['ship_dimensions_field'] = 'Champ de dimensions d\'envoi des produits';
$lang['ship_seperately_field'] = 'Champ d\'envoi séparé des produits';
$lang['shipping_module'] = 'Modules d\'expédition&nbsp;';
$lang['supplier_modules'] = 'Modules fournisseurs&nbsp;';
$lang['submit'] = 'Soumettre';
$lang['system_policy'] = 'Politique système';
$lang['tab_cart_settings'] = 'Paramètres panier';
$lang['tab_general_settings'] = 'Paramètres généraux';
$lang['tab_handling_settings'] = 'Gestion des paramètres';
$lang['tab_myinfo_settings'] = 'Adresse du magasin';
$lang['tab_packaging_settings'] = 'Paramètres packaging';
$lang['tab_payment_settings'] = 'Paramètres de paiement';
$lang['tab_policy'] = 'Politique';
$lang['tab_promotion_settings'] = 'Paramètres des promotions';
$lang['tab_shipping_settings'] = 'Paramètres d\'expédition';
$lang['tab_supplier_settings'] = 'Paramètres fournisseur';
$lang['tab_tax_settings'] = 'Réglage des taxes';
$lang['tax_module'] = 'Module de calcul de taxes&nbsp;';
$lang['tax_shipping'] = 'Calcul des taxes sur les frais d\'envoi&nbsp;';
$lang['units_centimeters'] = 'Centimètres';
$lang['units_inches'] = 'Pouces';
$lang['unlimited'] = 'Illimité';
$lang['weight_units'] = 'Unités de poids&nbsp;';
$lang['yes'] = 'Oui';
?>