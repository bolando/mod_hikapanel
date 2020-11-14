<?php 
// No direct access
defined('_JEXEC') or die; 

$doc =& JFactory::getDocument();
$doc->addStyleSheet('media/com_hikashop/css/font-awesome.css?v=5.2.0');
$doc->addStyleSheet('modules/mod_hikapanel/css/style.css');
?>
<div id="cpanel" class="hikapanel">
   <div class="icon-wrapper">
      <div class="icon"><a href="index.php?option=com_hikashop&amp;ctrl=product"><span class="hikaicon fa fa-cubes"></span><span>Produkty</span></a></div>
   </div>
   <div class="icon-wrapper">
      <div class="icon"><a href="index.php?option=com_hikashop&amp;ctrl=category"><span class="hikaicon fa fa-folder"></span><span>Kategorie</span></a></div>
   </div>
   <div class="icon-wrapper">
      <div class="icon"><a href="index.php?option=com_hikashop&amp;ctrl=user"><span class="hikaicon fa fa-user"></span><span>Klienci</span></a></div>
   </div>
   <div class="icon-wrapper">
      <div class="icon"><a href="index.php?option=com_hikashop&amp;ctrl=order"><span class="hikaicon fa fa-credit-card"></span><span>Zam&oacute;wienia</span></a></div>
   </div>
   <div class="icon-wrapper">
      <div class="icon"><a href="index.php?option=com_hikashop&amp;ctrl=discount"><span class="hikaicon fa fa-percent"></span><span>Rabaty</span></a></div>
   </div>
   <?php if ($params->get('show_characteristic') == '1'):?>
   <div class="icon-wrapper">
      <div class="icon"><a href="index.php?option=com_hikashop&ctrl=characteristic"><span class="hikaicon fa fa-list"></span><span><span><?php echo $params->get('name_characteristic');?></span></span></a></div>
   </div>
   <?php endif;?>
   <?php if ($params->get('show_customfields') == '1'):?>
   <div class="icon-wrapper">
      <div class="icon">
         <a href="index.php?option=com_hikashop&ctrl=field" >
         <span class="hikaicon fa fa-puzzle-piece" style="background-repeat:no-repeat;background-position:center;height:48px;padding:10px 0;"></span>
         <span><?php echo $params->get('name_customfields');?></span>
         </a>
      </div>
   </div>
   <?php endif;?>
   <div class="icon-wrapper">
      <div class="icon"><a href="index.php?option=com_hikashop&amp;ctrl=config"><span class="hikaicon fa fa-wrench"></span><span>Konfiguracja</span></a></div>
   </div>
   <div class="icon-wrapper">
      <div class="icon"><a href="index.php?option=com_hikashop&amp;ctrl=documentation"><span class="hikaicon fa fa-sync"></span><span>Aktualizacja &amp; Info</span></a></div>
   </div>
   <div style="clear: both;">&nbsp;</div>
</div>