<?php 
// No direct access
defined('_JEXEC') or die; 

$doc =& JFactory::getDocument();
$doc->addStyleSheet('modules/mod_hikapanel/css/style.css');?>
<div id="cpanel" class="hikapanel">
   <div class="icon-wrapper">
      <div class="icon"><a href="index.php?option=com_hikashop&amp;ctrl=product"><span class="hikaicon icon-48-product"></span><span>Produkty</span></a></div>
   </div>
   <div class="icon-wrapper">
      <div class="icon"><a href="index.php?option=com_hikashop&amp;ctrl=category"><span class="hikaicon icon-48-categories"></span><span>Kategorie</span></a></div>
   </div>
   <div class="icon-wrapper">
      <div class="icon"><a href="index.php?option=com_hikashop&amp;ctrl=user"><span class="hikaicon icon-48-user"></span><span>Klienci</span></a></div>
   </div>
   <div class="icon-wrapper">
      <div class="icon"><a href="index.php?option=com_hikashop&amp;ctrl=order"><span class="hikaicon icon-48-order"></span><span>Zam&oacute;wienia</span></a></div>
   </div>
   <div class="icon-wrapper">
      <div class="icon"><a href="index.php?option=com_hikashop&amp;ctrl=discount"><span class="hikaicon icon-48-discount"></span><span>Rabaty</span></a></div>
   </div>
   <?php if ($params->get('show_characteristic') == '1':?>
   <div class="icon-wrapper">
      <div class="icon"><a href="index.php?option=com_hikashop&ctrl=characteristic"><span class="hikaicon icon-48-view"></span><span>Kolory i rozmiar</span></a></div>
   </div>
   <?php endif;?>
   <?php if ($params->get('show_customfields') == '1':?>
   <div class="icon-wrapper">
      <div class="icon">
         <a href="index.php?option=com_hikashop&ctrl=field" >
         <span class="hikaicon icon-48-plugin" style="background-repeat:no-repeat;background-position:center;height:48px;padding:10px 0;"></span>
         <span>Materiał</span>
         </a>
      </div>
   </div>
   <?php endif;?>
   <div class="icon-wrapper">
      <div class="icon"><a href="index.php?option=com_hikashop&amp;ctrl=config"><span class="hikaicon icon-48-config"></span><span>Konfiguracja</span></a></div>
   </div>
   <div class="icon-wrapper">
      <div class="icon"><a href="index.php?option=com_hikashop&amp;ctrl=documentation"><span class="hikaicon icon-48-install"></span><span>Aktualizacja &amp; Info</span></a></div>
   </div>
   <div style="clear: both;">&nbsp;</div>
</div>