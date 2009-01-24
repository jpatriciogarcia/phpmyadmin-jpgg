<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 *
 * @version $Id: main.php 11668 2008-10-22 17:03:22Z lem9 $
 */

/**
 * Gets some core libraries and displays a top message if required
 */
define('PMA_MOORAINBOW', true);
require_once './libraries/common.inc.php';
$GLOBALS['js_include'][] = 'mootools.js';
$GLOBALS['js_include'][] = 'mooRainbow/mooRainbow.js';
$GLOBALS['js_include'][] = 'mootools-domready-rainbow.js';

// Handles some variables that may have been sent by the calling script
$GLOBALS['db'] = '';
$GLOBALS['table'] = '';
$show_query = '1';
require_once './libraries/header.inc.php';

// Any message to display?
if (! empty($message)) {
    PMA_showMessage($message);
    unset($message);
}

$common_url_query =  PMA_generate_common_url('', '');

// when $server > 0, a server has been chosen so we can display
// all MySQL-related information
if ($server > 0) {
    require './libraries/server_common.inc.php';
    require './libraries/StorageEngine.class.php';
    require './libraries/server_links.inc.php';

    // Use the verbose name of the server instead of the hostname
    // if a value is set
    $server_info = '';
    if (! empty($cfg['Server']['verbose'])) {
        $server_info .= htmlspecialchars($cfg['Server']['verbose']);
        if ($GLOBALS['cfg']['ShowServerInfo']) {
            $server_info .= ' (';
        }
    }
    if ($GLOBALS['cfg']['ShowServerInfo'] || empty($cfg['Server']['verbose'])) {
        $server_info .= PMA_DBI_get_host_info();
    }
    if (! empty($cfg['Server']['verbose']) && $GLOBALS['cfg']['ShowServerInfo']) {
    $server_info .= ')';
    }
    $mysql_cur_user_and_host = PMA_DBI_fetch_value('SELECT USER();');

    // should we add the port info here?
    $short_server_info = (!empty($GLOBALS['cfg']['Server']['verbose'])
                    ? $GLOBALS['cfg']['Server']['verbose']
                    : $GLOBALS['cfg']['Server']['host']);
}

echo '<div id="maincontainer">' . "\n";
echo '<div id="main_pane_left">';



