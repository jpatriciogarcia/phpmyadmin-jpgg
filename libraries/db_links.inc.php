<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 *
 * @version $Id: db_links.inc.php 12163 2009-01-01 21:39:21Z lem9 $
 */
if (! defined('PHPMYADMIN')) {
    exit;
}

/**
 *
 */
require_once './libraries/common.inc.php';

require_once './libraries/relation.lib.php';
/**
 * Gets the relation settings
 */
$cfgRelation = PMA_getRelationsParam();

/**
 * If coming from a Show MySQL link on the home page,
 * put something in $sub_part
 */
if (empty($sub_part)) {
    $sub_part = '_structure';
}

/**
 * Checks for superuser privileges
 */
$is_superuser = PMA_isSuperuser();

$tab_export['text']     = $GLOBALS['strExport'];
$tab_export['icon']     = 'b_export.png';
$tab_export['link']     = 'db_export.php';


if (! $db_is_information_schema) {
    $tab_import['link']     = 'db_import.php';
    $tab_import['text']     = $GLOBALS['strImport'];
    $tab_import['icon']     = 'b_import.png';
}

/**
 * Displays tab links
 */
$tabs = array();
$tabs[] =& $tab_export;
if (! $db_is_information_schema) {
    $tabs[] =& $tab_import;
}

$url_params['db'] = $db;
echo PMA_getTabs($tabs, $url_params);
unset($tabs);

/**
 * Displays a message
 */
if (!empty($message)) {
    PMA_showMessage($message);
    unset($message);
}
?>
