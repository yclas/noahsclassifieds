<?php
$nVersion = "4.1.2";
defined('_NOAH') or die('Restricted access');
if( !class_exists("GlobalStat") ) die();
$globalStat = new GlobalStat;
if( $globalStat->instver<$nVersion )
{
   updateGlobalstatAndFooter($nVersion);
}




?>
