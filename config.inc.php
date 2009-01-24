<?php
/**
 * Your phpMyAdmin URL.
 *
 * Complete the variable below with the full URL ie
 *    http://www.your_web.net/path_to_your_phpMyAdmin_directory/
 *
 * It must contain characters that are valid for a URL, and the path is
 * case sensitive on some Web servers, for example Unix-based servers.
 *
 * In most cases you can leave this variable empty, as the correct value
 * will be detected automatically. However, we recommend that you do
 * test to see that the auto-detection code works in your system. A good
 * test is to browse a table, then edit a row and save it.  There will be
 * an error message if phpMyAdmin cannot auto-detect the correct value.
 *
 * @global string $cfg['PmaAbsoluteUri']
 */
$cfg['PmaAbsoluteUri'] = '';

/**
 * Disable the default warning that is displayed on the DB Details Structure page if
 * any of the required Tables for the relation features could not be found
 *
 * @global boolean $cfg['PmaNoRelation_DisableWarning']
 */
$cfg['PmaNoRelation_DisableWarning'] = false;

/**
 * Disable the default warning that is displayed if Suhosin is detected
 *
 * @global boolean $cfg['SuhosinDisableWarning']
 */
$cfg['SuhosinDisableWarning'] = false;

/**
 * Allows phpMyAdmin to be included from a document located on
 * another domain; setting this to true is a potential security hole
 *
 * @global boolean $cfg['AllowThirdPartyFraming']
 */
$cfg['AllowThirdPartyFraming'] = false;

/**
 * The 'cookie' auth_type uses blowfish algorithm to encrypt the password. If
 * at least one server configuration uses 'cookie' auth_type, enter here a
 * pass phrase that will be used by blowfish. The maximum length seems to be 46
 * characters.
 *
 * @global string $cfg['blowfish_secret']
 */
$cfg['blowfish_secret'] = 'blowfish_secret';


/*******************************************************************************
 * Server(s) configuration
 *
 * The $cfg['Servers'] array starts with $cfg['Servers'][1].  Do not use
 * $cfg['Servers'][0]. You can disable a server configuration entry by setting host
 * to ''. If you want more than one server, just copy following section
 * (including $i incrementation) several times. There is no need to define
 * full server array, just define values you need to change.
 *
 * @global array $cfg['Servers']
 */
$cfg['Servers'] = array();

$i = 1;

/**
 * MySQL hostname or IP address
 *
 * @global string $cfg['Servers'][$i]['host']
 */
$cfg['Servers'][$i]['host'] = 'localhost';

/**
 * MySQL port - leave blank for default port
 *
 * @global string $cfg['Servers'][$i]['port']
 */
$cfg['Servers'][$i]['port'] = '';

/**
 * Path to the socket - leave blank for default socket
 *
 * @global string $cfg['Servers'][$i]['socket']
 */
$cfg['Servers'][$i]['socket'] = '';

/**
 * Use SSL for connecting to MySQL server?
 *
 * @global boolean $cfg['Servers'][$i]['ssl']
 */
$cfg['Servers'][$i]['ssl'] = false;

/**
 * How to connect to MySQL server ('tcp' or 'socket')
 *
 * @global string $cfg['Servers'][$i]['connect_type']
 */
$cfg['Servers'][$i]['connect_type'] = 'tcp';

/**
 * The PHP MySQL extension to use ('mysql' or 'mysqli')
 *
 * @global string $cfg['Servers'][$i]['extension']
 */
$cfg['Servers'][$i]['extension'] = 'mysql';

/* rajk - added for blobstreaming */
$cfg['Servers'][$i]['bs_garbage_threshold'] = '';
$cfg['Servers'][$i]['bs_repository_threshold'] = '';
$cfg['Servers'][$i]['bs_temp_blob_timeout'] = '';
$cfg['Servers'][$i]['bs_temp_log_threshold'] = '';

/**
 * Use compressed protocol for the MySQL connection (requires PHP >= 4.3.0)
 *
 * @global boolean $cfg['Servers'][$i]['compress']
 */
$cfg['Servers'][$i]['compress'] = false;

/**
 * MySQL control user settings (this user must have read-only
 * access to the "mysql/user" and "mysql/db" tables). The controluser is also
 * used for all relational features (pmadb)
 *
 * @global string $cfg['Servers'][$i]['controluser']
 */
$cfg['Servers'][$i]['controluser'] = '';

/**
 * MySQL control user settings (this user must have read-only
 * access to the "mysql/user" and "mysql/db" tables). The controluser is also
 * used for all relational features (pmadb)
 *
 * @global string $cfg['Servers'][$i]['controlpass']
 */
$cfg['Servers'][$i]['controlpass'] = '';

/**
 * Authentication method (valid choices: config, http, signon or cookie)
 *
 * @global string $cfg['Servers'][$i]['auth_type']
 */
$cfg['Servers'][$i]['auth_type'] = 'config';

/**
 * File containing Swekey ids and login names (see /contrib);
 * leave empty to deactivate Swekey hardware authentication
 *
 * @global string $cfg['Servers'][$i]['auth_swekey_config']
 */
$cfg['Servers'][$i]['auth_swekey_config'] = '';

/**
 * MySQL user
 *
 * @global string $cfg['Servers'][$i]['user']
 */
$cfg['Servers'][$i]['user'] = 'admin';

/**
 * MySQL password (only needed with 'config' auth_type)
 *
 * @global string $cfg['Servers'][$i]['password']
 */
$cfg['Servers'][$i]['password'] = 'admin';

/**
 * Session to use for 'signon' authentication method
 *
 * @global string $cfg['Servers'][$i]['SignonSession']
 */
$cfg['Servers'][$i]['SignonSession'] = '';

/**
 * URL where to redirect user to login for 'signon' authentication method
 *
 * @global string $cfg['Servers'][$i]['SignonURL']
 */
$cfg['Servers'][$i]['SignonURL'] = '';

/**
 * URL where to redirect user after logout
 *
 * @global string $cfg['Servers'][$i]['LogoutURL']
 */
$cfg['Servers'][$i]['LogoutURL'] = '';

/**
 * Whether to try to connect without password
 *
 * @global boolean $cfg['Servers'][$i]['nopassword']
 */
$cfg['Servers'][$i]['nopassword'] = false;

/**
 * If set to a db-name, only this db is displayed in left frame
 * It may also be an array of db-names, where sorting order is relevant.
 *
 * @global string $cfg['Servers'][$i]['only_db']
 */
$cfg['Servers'][$i]['only_db'] = array('movistar');

/**
 * Database name to be hidden from listings
 *
 * @global string $cfg['Servers'][$i]['hide_db']
 */
$cfg['Servers'][$i]['hide_db'] = '';

/**
 * Verbose name for this host - leave blank to show the hostname
 * (for HTTP authentication, all non-US-ASCII characters will be stripped)
 *
 * @global string $cfg['Servers'][$i]['verbose']
 */
$cfg['Servers'][$i]['verbose'] = '';

/**
 * Database used for Relation, Bookmark and PDF Features
 * (see scripts/create_tables.sql)
 *   - leave blank for no support
 *     DEFAULT: 'phpmyadmin'
 *
 * @global string $cfg['Servers'][$i]['pmadb']
 */
$cfg['Servers'][$i]['pmadb'] = '';

/**
 * Bookmark table
 *   - leave blank for no bookmark support
 *     DEFAULT: 'pma_bookmark'
 *
 * @global string $cfg['Servers'][$i]['bookmarktable']
 */
$cfg['Servers'][$i]['bookmarktable'] = '';

/**
 * table to describe the relation between links (see doc)
 *   - leave blank for no relation-links support
 *     DEFAULT: 'pma_relation'
 *
 * @global string $cfg['Servers'][$i]['relation']
 */
$cfg['Servers'][$i]['relation'] = '';

/**
 * table to describe the display fields
 *   - leave blank for no display fields support
 *     DEFAULT: 'pma_table_info'
 *
 * @global string $cfg['Servers'][$i]['table_info']
 */
$cfg['Servers'][$i]['table_info'] = '';

/**
 * table to describe the tables position for the PDF schema
 *   - leave blank for no PDF schema support
 *     DEFAULT: 'pma_table_coords'
 *
 * @global string $cfg['Servers'][$i]['table_coords']
 */
$cfg['Servers'][$i]['table_coords'] = '';

/**
 * table to describe pages of relationpdf
 *   - leave blank if you don't want to use this
 *     DEFAULT: 'pma_pdf_pages'
 *
 * @global string $cfg['Servers'][$i]['pdf_pages']
 */
$cfg['Servers'][$i]['pdf_pages'] = '';

/**
 * table to store column information
 *   - leave blank for no column comments/mime types
 *     DEFAULT: 'pma_column_info'
 *
 * @global string $cfg['Servers'][$i]['column_info']
 */
$cfg['Servers'][$i]['column_info'] = '';

/**
 * table to store SQL history
 *   - leave blank for no SQL query history
 *     DEFAULT: 'pma_history'
 *
 * @global string $cfg['Servers'][$i]['history']
 */
$cfg['Servers'][$i]['history'] = '';

/**
 * table to store the coordinates for Designer
 *   - leave blank for no Designer feature
 *     DEFAULT: 'pma_designer_coords'
 *
 * @global string $cfg['Servers'][$i]['designer_coords']
 */
$cfg['Servers'][$i]['designer_coords'] = '';

/**
 * set to false if you know that your pma_* tables are up to date.
 * This prevents compatibility checks and thereby increases performance.
 *
 * @global boolean $cfg['Servers'][$i]['verbose_check']
 */
$cfg['Servers'][$i]['verbose_check'] = true;

/**
 * whether to allow root login
 *
 * @global boolean $cfg['Servers'][$i]['AllowRoot']
 */
$cfg['Servers'][$i]['AllowRoot'] = true;

/**
 * whether to allow login of root user with no password (MySQL default)
 *
 * @global boolean $cfg['Servers'][$i]['AllowNoPasswordRoot']
 */
$cfg['Servers'][$i]['AllowNoPasswordRoot'] = false;

/**
 * Host authentication order, leave blank to not use
 *
 * @global string $cfg['Servers'][$i]['AllowDeny']['order']
 */
$cfg['Servers'][$i]['AllowDeny']['order'] = '';

/**
 * Disable use of INFORMATION_SCHEMA
 *
 * @see http://sf.net/support/tracker.php?aid=1849494
 * @see http://bugs.mysql.com/19588
 * @global boolean $cfg['Servers'][$i]['DisableIS']
 */
$cfg['Servers'][$i]['DisableIS'] = true;

/**
 * Host authentication rules, leave blank for defaults
 *
 * @global array $cfg['Servers'][$i]['AllowDeny']['rules']
 */
$cfg['Servers'][$i]['AllowDeny']['rules'] = array();

/**
 * SQL command to fetch available databases
 *
 * by default most user will be fine with SHOW DATABASES,
 * for servers with a huge amount of databases it is possible to
 * define a command which executes faster but with less information
 *
 * especially when accessing database servers from ISPs changing this command
 * can result in a great speed improvement
 *
 * false will disable fetching databases from the server, only databases in
 * $cfg['Servers'][$i]['only_db'] will be displayed
 *
 * #user# will be replaced by current user
 *
 * examples:
 * 'SHOW DATABASES'
 * "SHOW DATABASES LIKE '#user#\_%'"
 * 'SELECT DISTINCT TABLE_SCHEMA FROM information_schema.SCHEMA_PRIVILEGES'
 * 'SELECT SCHEMA_NAME FROM information_schema.SCHEMATA'
 * false
 *
 * @global array $cfg['Servers'][$i]['ShowDatabasesCommand']
 */
$cfg['Servers'][$i]['ShowDatabasesCommand'] = 'SHOW DATABASES';

/**
 * Whether to count tables when showing database list
 *
 * @global array $cfg['Servers'][$i]['CountTables']
 */
$cfg['Servers'][$i]['CountTables'] = false;


$i = 2;

/**
 * MySQL hostname or IP address
 *
 * @global string $cfg['Servers'][$i]['host']
 */
$cfg['Servers'][$i]['host'] = '127.0.0.1';

/**
 * MySQL port - leave blank for default port
 *
 * @global string $cfg['Servers'][$i]['port']
 */
$cfg['Servers'][$i]['port'] = '';

/**
 * Path to the socket - leave blank for default socket
 *
 * @global string $cfg['Servers'][$i]['socket']
 */
$cfg['Servers'][$i]['socket'] = '';

/**
 * Use SSL for connecting to MySQL server?
 *
 * @global boolean $cfg['Servers'][$i]['ssl']
 */
$cfg['Servers'][$i]['ssl'] = false;

/**
 * How to connect to MySQL server ('tcp' or 'socket')
 *
 * @global string $cfg['Servers'][$i]['connect_type']
 */
$cfg['Servers'][$i]['connect_type'] = 'tcp';

/**
 * The PHP MySQL extension to use ('mysql' or 'mysqli')
 *
 * @global string $cfg['Servers'][$i]['extension']
 */
$cfg['Servers'][$i]['extension'] = 'mysql';

/* rajk - added for blobstreaming */
$cfg['Servers'][$i]['bs_garbage_threshold'] = '';
$cfg['Servers'][$i]['bs_repository_threshold'] = '';
$cfg['Servers'][$i]['bs_temp_blob_timeout'] = '';
$cfg['Servers'][$i]['bs_temp_log_threshold'] = '';

/**
 * Use compressed protocol for the MySQL connection (requires PHP >= 4.3.0)
 *
 * @global boolean $cfg['Servers'][$i]['compress']
 */
$cfg['Servers'][$i]['compress'] = false;

/**
 * MySQL control user settings (this user must have read-only
 * access to the "mysql/user" and "mysql/db" tables). The controluser is also
 * used for all relational features (pmadb)
 *
 * @global string $cfg['Servers'][$i]['controluser']
 */
$cfg['Servers'][$i]['controluser'] = '';

/**
 * MySQL control user settings (this user must have read-only
 * access to the "mysql/user" and "mysql/db" tables). The controluser is also
 * used for all relational features (pmadb)
 *
 * @global string $cfg['Servers'][$i]['controlpass']
 */
$cfg['Servers'][$i]['controlpass'] = '';

/**
 * Authentication method (valid choices: config, http, signon or cookie)
 *
 * @global string $cfg['Servers'][$i]['auth_type']
 */
$cfg['Servers'][$i]['auth_type'] = 'config';

/**
 * File containing Swekey ids and login names (see /contrib);
 * leave empty to deactivate Swekey hardware authentication
 *
 * @global string $cfg['Servers'][$i]['auth_swekey_config']
 */
$cfg['Servers'][$i]['auth_swekey_config'] = '';

/**
 * MySQL user
 *
 * @global string $cfg['Servers'][$i]['user']
 */
$cfg['Servers'][$i]['user'] = 'admin';

/**
 * MySQL password (only needed with 'config' auth_type)
 *
 * @global string $cfg['Servers'][$i]['password']
 */
$cfg['Servers'][$i]['password'] = 'admin';

/**
 * Session to use for 'signon' authentication method
 *
 * @global string $cfg['Servers'][$i]['SignonSession']
 */
$cfg['Servers'][$i]['SignonSession'] = '';

/**
 * URL where to redirect user to login for 'signon' authentication method
 *
 * @global string $cfg['Servers'][$i]['SignonURL']
 */
$cfg['Servers'][$i]['SignonURL'] = '';

/**
 * URL where to redirect user after logout
 *
 * @global string $cfg['Servers'][$i]['LogoutURL']
 */
$cfg['Servers'][$i]['LogoutURL'] = '';

/**
 * Whether to try to connect without password
 *
 * @global boolean $cfg['Servers'][$i]['nopassword']
 */
$cfg['Servers'][$i]['nopassword'] = false;

/**
 * If set to a db-name, only this db is displayed in left frame
 * It may also be an array of db-names, where sorting order is relevant.
 *
 * @global string $cfg['Servers'][$i]['only_db']
 */
$cfg['Servers'][$i]['only_db'] = array('jos');

/**
 * Database name to be hidden from listings
 *
 * @global string $cfg['Servers'][$i]['hide_db']
 */
$cfg['Servers'][$i]['hide_db'] = '';

/**
 * Verbose name for this host - leave blank to show the hostname
 * (for HTTP authentication, all non-US-ASCII characters will be stripped)
 *
 * @global string $cfg['Servers'][$i]['verbose']
 */
$cfg['Servers'][$i]['verbose'] = '';

/**
 * Database used for Relation, Bookmark and PDF Features
 * (see scripts/create_tables.sql)
 *   - leave blank for no support
 *     DEFAULT: 'phpmyadmin'
 *
 * @global string $cfg['Servers'][$i]['pmadb']
 */
$cfg['Servers'][$i]['pmadb'] = '';

/**
 * Bookmark table
 *   - leave blank for no bookmark support
 *     DEFAULT: 'pma_bookmark'
 *
 * @global string $cfg['Servers'][$i]['bookmarktable']
 */
$cfg['Servers'][$i]['bookmarktable'] = '';

/**
 * table to describe the relation between links (see doc)
 *   - leave blank for no relation-links support
 *     DEFAULT: 'pma_relation'
 *
 * @global string $cfg['Servers'][$i]['relation']
 */
$cfg['Servers'][$i]['relation'] = '';

/**
 * table to describe the display fields
 *   - leave blank for no display fields support
 *     DEFAULT: 'pma_table_info'
 *
 * @global string $cfg['Servers'][$i]['table_info']
 */
$cfg['Servers'][$i]['table_info'] = '';

/**
 * table to describe the tables position for the PDF schema
 *   - leave blank for no PDF schema support
 *     DEFAULT: 'pma_table_coords'
 *
 * @global string $cfg['Servers'][$i]['table_coords']
 */
$cfg['Servers'][$i]['table_coords'] = '';

/**
 * table to describe pages of relationpdf
 *   - leave blank if you don't want to use this
 *     DEFAULT: 'pma_pdf_pages'
 *
 * @global string $cfg['Servers'][$i]['pdf_pages']
 */
$cfg['Servers'][$i]['pdf_pages'] = '';

/**
 * table to store column information
 *   - leave blank for no column comments/mime types
 *     DEFAULT: 'pma_column_info'
 *
 * @global string $cfg['Servers'][$i]['column_info']
 */
$cfg['Servers'][$i]['column_info'] = '';

/**
 * table to store SQL history
 *   - leave blank for no SQL query history
 *     DEFAULT: 'pma_history'
 *
 * @global string $cfg['Servers'][$i]['history']
 */
$cfg['Servers'][$i]['history'] = '';

/**
 * table to store the coordinates for Designer
 *   - leave blank for no Designer feature
 *     DEFAULT: 'pma_designer_coords'
 *
 * @global string $cfg['Servers'][$i]['designer_coords']
 */
$cfg['Servers'][$i]['designer_coords'] = '';

/**
 * set to false if you know that your pma_* tables are up to date.
 * This prevents compatibility checks and thereby increases performance.
 *
 * @global boolean $cfg['Servers'][$i]['verbose_check']
 */
$cfg['Servers'][$i]['verbose_check'] = true;

/**
 * whether to allow root login
 *
 * @global boolean $cfg['Servers'][$i]['AllowRoot']
 */
$cfg['Servers'][$i]['AllowRoot'] = true;

/**
 * whether to allow login of root user with no password (MySQL default)
 *
 * @global boolean $cfg['Servers'][$i]['AllowNoPasswordRoot']
 */
$cfg['Servers'][$i]['AllowNoPasswordRoot'] = false;

/**
 * Host authentication order, leave blank to not use
 *
 * @global string $cfg['Servers'][$i]['AllowDeny']['order']
 */
$cfg['Servers'][$i]['AllowDeny']['order'] = '';

/**
 * Disable use of INFORMATION_SCHEMA
 *
 * @see http://sf.net/support/tracker.php?aid=1849494
 * @see http://bugs.mysql.com/19588
 * @global boolean $cfg['Servers'][$i]['DisableIS']
 */
$cfg['Servers'][$i]['DisableIS'] = true;

/**
 * Host authentication rules, leave blank for defaults
 *
 * @global array $cfg['Servers'][$i]['AllowDeny']['rules']
 */
$cfg['Servers'][$i]['AllowDeny']['rules'] = array();

/**
 * SQL command to fetch available databases
 *
 * by default most user will be fine with SHOW DATABASES,
 * for servers with a huge amount of databases it is possible to
 * define a command which executes faster but with less information
 *
 * especially when accessing database servers from ISPs changing this command
 * can result in a great speed improvement
 *
 * false will disable fetching databases from the server, only databases in
 * $cfg['Servers'][$i]['only_db'] will be displayed
 *
 * #user# will be replaced by current user
 *
 * examples:
 * 'SHOW DATABASES'
 * "SHOW DATABASES LIKE '#user#\_%'"
 * 'SELECT DISTINCT TABLE_SCHEMA FROM information_schema.SCHEMA_PRIVILEGES'
 * 'SELECT SCHEMA_NAME FROM information_schema.SCHEMATA'
 * false
 *
 * @global array $cfg['Servers'][$i]['ShowDatabasesCommand']
 */
$cfg['Servers'][$i]['ShowDatabasesCommand'] = 'SHOW DATABASES';

/**
 * Whether to count tables when showing database list
 *
 * @global array $cfg['Servers'][$i]['CountTables']
 */
$cfg['Servers'][$i]['CountTables'] = false;

/**
 * Default server (0 = no default server)
 *
 * If you have more than one server configured, you can set $cfg['ServerDefault']
 * to any one of them to auto-connect to that server when phpMyAdmin is started,
 * or set it to 0 to be given a list of servers without logging in
 * If you have only one server configured, $cfg['ServerDefault'] *MUST* be
 * set to that server.
 *
 * @global integer $cfg['ServerDefault']
 */
$cfg['ServerDefault'] = 1;

/*
 * Other core phpMyAdmin settings
 */
/**
 * maximum number of db's displayed in left frame and database list
 *
 * @global integer $cfg['MaxDbList']
 */
$cfg['MaxDbList'] = 100;

/**
 * maximum number of tables displayed in table list
 *
 * @global integer $cfg['MaxTableList']
 */
$cfg['MaxTableList'] = 250;

/**
 * maximum number of characters when a SQL query is displayed
 *
 * @global integer $cfg['MaxCharactersInDisplayedSQL']
 */
$cfg['MaxCharactersInDisplayedSQL'] = 1000;

/**
 * use GZIP output buffering if possible (true|false|'auto')
 *
 * @global string $cfg['OBGzip']
 */
$cfg['OBGzip'] = 'auto';

/**
 * use persistent connections to MySQL database
 *
 * @global boolean $cfg['PersistentConnections']
 */
$cfg['PersistentConnections'] = false;

/**
 * whether to force using HTTPS
 *
 * @global boolean $cfg['ForceSSL']
 */
$cfg['ForceSSL'] = false;

/**
 * maximum execution time in seconds (0 for no limit)
 *
 * @global integer $cfg['ExecTimeLimit']
 */
$cfg['ExecTimeLimit'] = 300;

/**
 * maximum allocated bytes (0 for no limit)
 *
 * @global integer $cfg['MemoryLimit']
 */
$cfg['MemoryLimit'] = 0;

/**
 * mark used tables, make possible to show locked tables (since MySQL 3.23.30)
 *
 * @global boolean $cfg['SkipLockedTables']
 */
$cfg['SkipLockedTables'] = false;

/**
 * show SQL queries as run
 *
 * @global boolean $cfg['ShowSQL']
 */
$cfg['ShowSQL'] = true;

/**
 * show a 'Drop database' link to normal users
 *
 * @global boolean $cfg['AllowUserDropDatabase']
 */
$cfg['AllowUserDropDatabase'] = false;

/**
 * confirm 'DROP TABLE' & 'DROP DATABASE'
 *
 * @global boolean $cfg['Confirm']
 */
$cfg['Confirm'] = true;

/**
 * recall previous login in cookie authentication mode or not
 *
 * @global boolean $cfg['LoginCookieRecall']
 */
$cfg['LoginCookieRecall'] = true;

/**
 * validity of cookie login (in seconds)
 *
 * @global integer $cfg['LoginCookieValidity']
 */
$cfg['LoginCookieValidity'] = 1800;

/**
 * how long login cookie should be stored (in seconds)
 *
 * @global integer $cfg['LoginCookieStore']
 */
$cfg['LoginCookieStore'] = 0;

/**
 * whether to delete all login cookies on logout
 *
 * @global boolean $cfg['LoginCookieDeleteAll']
 */
$cfg['LoginCookieDeleteAll'] = true;

/**
 * whether to enable the "database search" feature or not
 *
 * @global boolean $cfg['UseDbSearch']
 */
$cfg['UseDbSearch'] = true;

/**
 * if set to true, PMA continues computing multiple-statement queries
 * even if one of the queries failed
 *
 * @global boolean $cfg['IgnoreMultiSubmitErrors']
 */
$cfg['IgnoreMultiSubmitErrors'] = false;

/**
 * if set to true, PMA will show the affected rows of EACH statement on
 * multiple-statement queries. See the libraries/import.php file for
 * hard coded defaults on how many queries a statement may contain!
 *
 * @global boolean $cfg['VerboseMultiSubmit']
 */
$cfg['VerboseMultiSubmit'] = true;

/**
 * allow login to any user entered server in cookie based authentication
 *
 * @global boolean $cfg['AllowArbitraryServer']
 */
$cfg['AllowArbitraryServer'] = false;


/*******************************************************************************
 * Error handler configuration
 *
 * this configures phpMyAdmin's own error handler, it is used to avoid information
 * disclosure, gather errors for logging, reporting and displaying
 *
 * @global array $cfg['Error_Handler']
 */
$cfg['Error_Handler'] = array();

/**
 * whether to display errors or not
 *
 * this does not affect errors of type  E_USER_*
 *
 * @global boolean $cfg['Error_Handler']['display']
 */
$cfg['Error_Handler']['display'] = false;

/**
 * (NOT IMPLEMENTED YET)
 * where to log errors, false or empty to disable
 *
 * <code>
 * // EXAMPLE log to std PHP error log
 * $cfg['Error_Handler']['log'] = array(0);
 * // EXAMPLE mail errors
 * $cfg['Error_Handler']['log'] = array(1, 'admin@example.org');
 * // EXAMPLE append to specific file
 * $cfg['Error_Handler']['log'] = array(3, '/var/log/phpmyadmin_error.log');
 * </code>
 *
 * @see     http://php.net/error_log
 * @global  string $cfg['Error_Handler']['log']
 */
//$cfg['Error_Handler']['log'] = false;

/**
 * gather all errors in session to be displayed on a error reporting page
 * for viewing and/or sending to phpMyAdmin developer team
 *
 * @global boolean $cfg['Error_Handler']['gather']
 */
$cfg['Error_Handler']['gather'] = false;


/*******************************************************************************
 * Left frame setup
 */

/**
 * use a select-based menu and display only the current tables in the left frame.
 *
 * @global boolean $cfg['LeftFrameLight']
 */
$cfg['LeftFrameLight'] = true;

/**
 * turn the select-based light menu into a tree
 *
 * @global boolean $cfg['LeftFrameDBTree']
 */
$cfg['LeftFrameDBTree'] = false;

/**
 * the separator to sub-tree the select-based light menu tree
 *
 * @global string $cfg['LeftFrameDBSeparator']
 */
$cfg['LeftFrameDBSeparator'] = '_';

/**
 * Which string will be used to generate table prefixes
 * to split/nest tables into multiple categories
 *
 * @global string $cfg['LeftFrameTableSeparator']
 */
$cfg['LeftFrameTableSeparator']= '__';

/**
 * How many sublevels should be displayed when splitting up tables by the above Separator
 *
 * @global integer $cfg['LeftFrameTableLevel']
 */
$cfg['LeftFrameTableLevel'] = 1;

/**
 * display table comment as tooltip in left frame
 *
 * @global boolean $cfg['ShowTooltip']
 */
$cfg['ShowTooltip'] = true;

/**
 * if ShowToolTip is enabled, this defines that table/db comments
 *
 * @global boolean $cfg['ShowTooltipAliasDB']
 */
$cfg['ShowTooltipAliasDB'] = false;

/**
 * are shown (in the left menu and db_structure) instead of table/db names.
 * Setting ShowTooltipAliasTB to 'nested' will only use the Aliases for nested
 * descriptors, not the table itself.
 *
 * @global boolean $cfg['ShowTooltipAliasTB']
 */
$cfg['ShowTooltipAliasTB'] = false;

/**
 * display logo at top of left frame
 *
 * @global boolean $cfg['LeftDisplayLogo']
 */
$cfg['LeftDisplayLogo'] = false;

/**
 * where should logo link point to (can also contain an external URL)
 *
 * @global string $cfg['LeftLogoLink']
 */
$cfg['LeftLogoLink'] = 'main.php';

/**
 * whether to open the linked page in the main window ('main') or
 * in a new window ('new')
 *
 * @global string $cfg['LeftLogoLinkWindow']
 */
$cfg['LeftLogoLinkWindow'] = 'main';

/**
 * display server choice at top of left frame
 *
 * @global boolean $cfg['LeftDisplayServers']
 */
$cfg['LeftDisplayServers'] = true;

/**
 * server choice as links
 *
 * @global boolean $cfg['DisplayServersList']
 */
$cfg['DisplayServersList'] = true;

/**
 * database choice in light as links
 *
 * @global boolean $cfg['DisplayDatabasesList']
 */
$cfg['DisplayDatabasesList'] = 'auto';

/**
 * target of the navigation panel quick access icon
 *
 * Possible values:
 * 'tbl_structure.php' = fields list
 * 'tbl_sql.php' = SQL form
 * 'tbl_select.php' = search page
 * 'tbl_change.php' = insert row page
 * 'sql.php' = browse page
 *
 * @global string $cfg['LeftDefaultTabTable']
 */
$cfg['LeftDefaultTabTable'] = 'tbl_structure.php';


/*******************************************************************************
 * In the main frame, at startup...
 */

/**
 * allow to display statistics and space usage in the pages about database
 * details and table properties
 *
 * @global boolean $cfg['ShowStats']
 */
$cfg['ShowStats'] = false;

/**
 * show PHP info link
 *
 * @global boolean $cfg['ShowPhpInfo']
 */
$cfg['ShowPhpInfo'] = false;

/**
 * show MySQL server information
 *
 * @global boolean $cfg['ShowServerInfo']
 */
$cfg['ShowServerInfo'] = false;

/**
 * show change password link
 *
 * @global boolean $cfg['ShowChgPassword']
 */
$cfg['ShowChgPassword'] = false;

/**
 * show create database form
 *
 * @global boolean $cfg['ShowCreateDb']
 */
$cfg['ShowCreateDb'] = false;

/**
 * suggest a new DB name if possible (false = keep empty)
 *
 * @global boolean $cfg['SuggestDBName']
 */
$cfg['SuggestDBName'] = false;


/*******************************************************************************
 * In browse mode...
 */

/**
 * Use icons instead of text for the navigation bar buttons
 * and on right panel top menu (server db table) (true|false|'both')
 *
 * @global string $cfg['NavigationBarIconic']
 */
$cfg['NavigationBarIconic'] = 'both';

/**
 * allows to display all the rows
 *
 * @global boolean $cfg['ShowAll']
 */
$cfg['ShowAll'] = false;

/**
 * maximum number of rows to display
 *
 * @global integer $cfg['MaxRows']
 */
$cfg['MaxRows'] = 30;

/**
 * default for 'ORDER BY' clause (valid values are 'ASC', 'DESC' or 'SMART' -ie
 * descending order for fields of type TIME, DATE, DATETIME & TIMESTAMP,
 * ascending order else-)
 *
 * @global string $cfg['Order']
 */
$cfg['Order'] = 'ASC';


/*******************************************************************************
 * In edit mode...
 */

/**
 * disallow editing of binary fields
 * valid values are:
 *   false  allow editing
 *   'blob' allow editing except for BLOB fields
 *   'all'  disallow editing
 *
 * @global string $cfg['ProtectBinary']
 */
$cfg['ProtectBinary'] = 'blob';

/**
 * Display the function fields in edit/insert mode
 *
 * @global boolean $cfg['ShowFunctionFields']
 */
$cfg['ShowFunctionFields'] = true;

/**
 * Which editor should be used for CHAR/VARCHAR fields:
 *  input - allows limiting of input length
 *  textarea - allows newlines in fields
 *
 * @global string $cfg['CharEditing']
 */
$cfg['CharEditing'] = 'input';

/**
 * How many rows can be inserted at one time
 *
 * @global integer $cfg['InsertRows']
 */
$cfg['InsertRows'] = 2;

/**
 * Sort order for items in a foreign-key drop-down list.
 * 'content' is the referenced data, 'id' is the key value.
 *
 * @global array $cfg['ForeignKeyDropdownOrder']
 */
$cfg['ForeignKeyDropdownOrder'] = array('content-id', 'id-content');

/**
 * A drop-down list will be used if fewer items are present
 *
 * @global integer $cfg['ForeignKeyMaxLimit']
 */
$cfg['ForeignKeyMaxLimit'] = 100;


/*******************************************************************************
 * For the export features...
 */

/**
 * Allow for the use of zip compression (requires zip support to be enabled)
 *
 * @global boolean $cfg['ZipDump']
 */
$cfg['ZipDump'] = false;

/**
 * Allow for the use of gzip compression (requires zlib)
 *
 * @global boolean $cfg['GZipDump']
 */
$cfg['GZipDump'] = true;

/**
 * Allow for the use of bzip2 compression (requires bz2 extension)
 *
 * @global boolean $cfg['BZipDump']
 */
$cfg['BZipDump'] = false;

/**
 * Will compress gzip/bzip2 exports on the fly without the need for much memory.
 * If you encounter problems with created gzip/bzip2 files disable this feature.
 *
 * @global boolean $cfg['CompressOnFly']
 */
$cfg['CompressOnFly'] = true;


/*******************************************************************************
 * Tabs display settings
 */

/**
 * use graphically less intense menu tabs
 *
 * @global boolean $cfg['LightTabs']
 */
$cfg['LightTabs'] = false;

/**
 * Use icons instead of text for the table display of a database (true|false|'both')
 *
 * @global boolean $cfg['PropertiesIconic']
 */
$cfg['PropertiesIconic'] = true;

/**
 * How many columns should be used for table display of a database?
 * (a value larger than 1 results in some information being hidden)
 *
 * @global integer $cfg['PropertiesNumColumns']
 */
$cfg['PropertiesNumColumns'] = 1;

/**
 * Possible values:
 * 'main.php' = the welcome page
 * (recommended for multiuser setups)
 * 'server_databases.php' = list of databases
 * 'server_status.php' = runtime information
 * 'server_variables.php' = MySQL server variables
 * 'server_privileges.php' = user management
 * 'server_processlist.php' = process list
 *
 * @global string $cfg['DefaultTabServer']
 */
$cfg['DefaultTabServer'] = 'main.php';

/**
 * Possible values:
 * 'db_structure.php' = tables list
 * 'db_sql.php' = SQL form
 * 'db_search.php' = search query
 * 'db_operations.php' = operations on database
 *
 * @global string $cfg['DefaultTabDatabase']
 */
$cfg['DefaultTabDatabase'] = 'db_export.php';

/**
 * Possible values:
 * 'tbl_structure.php' = fields list
 * 'tbl_sql.php' = SQL form
 * 'tbl_select.php' = search page
 * 'tbl_change.php' = insert row page
 * 'sql.php' = browse page
 *
 * @global string $cfg['DefaultTabTable']
 */
$cfg['DefaultTabTable'] = 'sql.php';


/*******************************************************************************
 * Export defaults
 */
$cfg['Export'] = array();

/**
 * codegen/csv/excel/htmlexcel/htmlword/latex/ods/odt/pdf/sql/texytext/xls/xml/yaml
 *
 * @global string $cfg['Export']['format']
 */
$cfg['Export']['format'] = 'sql';

/**
 * none/zip/gzip/bzip2
 *
 * @global string $cfg['Export']['compression']
 */
$cfg['Export']['compression'] = 'gzip';

/**
 *
 *
 * @global boolean $cfg['Export']['asfile']
 */
$cfg['Export']['asfile'] = true;

/**
 *
 *
 * @global string $cfg['Export']['charset']
 */
$cfg['Export']['charset'] = 'utf-8';

/**
 *
 *
 * @global boolean $cfg['Export']['onserver']
 */
$cfg['Export']['onserver'] = false;

/**
 *
 *
 * @global boolean $cfg['Export']['onserver_overwrite']
 */
$cfg['Export']['onserver_overwrite'] = false;

/**
 *
 *
 * @global boolean $cfg['Export']['remember_file_template']
 */
$cfg['Export']['remember_file_template'] = true;

/**
 *
 *
 * @global string $cfg['Export']['file_template_table']
 */
$cfg['Export']['file_template_table'] = '__TABLE__';

/**
 *
 *
 * @global string $cfg['Export']['file_template_database']
 */
$cfg['Export']['file_template_database'] = '__DB__';

/**
 *
 *
 * @global string $cfg['Export']['file_template_server']
 */
$cfg['Export']['file_template_server'] = '__SERVER__';

/**
 *
 *
 * @global boolean $cfg['Export']['ods_columns']
 */
$cfg['Export']['ods_columns'] = false;

/**
 *
 *
 * @global string $cfg['Export']['ods_null']
 */
$cfg['Export']['ods_null'] = 'NULL';

/**
 *
 *
 * @global boolean $cfg['Export']['odt_structure']
 */
$cfg['Export']['odt_structure'] = true;

/**
 *
 *
 * @global boolean $cfg['Export']['odt_data']
 */
$cfg['Export']['odt_data'] = true;

/**
 *
 *
 * @global boolean $cfg['Export']['odt_columns']
 */
$cfg['Export']['odt_columns'] = true;

/**
 *
 *
 * @global boolean $cfg['Export']['odt_relation']
 */
$cfg['Export']['odt_relation'] = true;

/**
 *
 *
 * @global boolean $cfg['Export']['odt_comments']
 */
$cfg['Export']['odt_comments'] = true;

/**
 *
 *
 * @global boolean $cfg['Export']['odt_mime']
 */
$cfg['Export']['odt_mime'] = true;

/**
 *
 *
 * @global string $cfg['Export']['odt_null']
 */
$cfg['Export']['odt_null'] = 'NULL';

/**
 *
 *
 * @global boolean $cfg['Export']['htmlexcel_columns']
 */
$cfg['Export']['htmlexcel_columns'] = false;

/**
 *
 *
 * @global string $cfg['Export']['htmlexcel_null']
 */
$cfg['Export']['htmlexcel_null'] = 'NULL';

/**
 *
 *
 * @global boolean $cfg['Export']['htmlword_structure']
 */
$cfg['Export']['htmlword_structure'] = true;

/**
 *
 *
 * @global boolean $cfg['Export']['htmlword_data']
 */
$cfg['Export']['htmlword_data'] = true;

/**
 *
 *
 * @global boolean $cfg['Export']['htmlword_columns']
 */
$cfg['Export']['htmlword_columns'] = false;

/**
 *
 *
 * @global string $cfg['Export']['htmlword_null']
 */
$cfg['Export']['htmlword_null'] = 'NULL';

/**
 *
 *
 * @global boolean $cfg['Export']['texytext_structure']
 */
$cfg['Export']['texytext_structure'] = TRUE;

/**
 *
 *
 * @global boolean $cfg['Export']['texytext_data']
 */
$cfg['Export']['texytext_data'] = TRUE;

/**
 *
 *
 * @global boolean $cfg['Export']['texytext_columns']
 */
$cfg['Export']['texytext_columns'] = FALSE;

/**
 *
 *
 * @global string $cfg['Export']['texytext_null']
 */
$cfg['Export']['texytext_null'] = 'NULL';

/**
 *
 *
 * @global boolean $cfg['Export']['xls_columns']
 */
$cfg['Export']['xls_columns'] = false;

/**
 *
 *
 * @global string $cfg['Export']['xls_null']
 */
$cfg['Export']['xls_null'] = 'NULL';

/**
 *
 *
 * @global boolean $cfg['Export']['csv_columns']
 */
$cfg['Export']['csv_columns'] = false;

/**
 *
 *
 * @global string $cfg['Export']['csv_null']
 */
$cfg['Export']['csv_null'] = 'NULL';

/**
 *
 *
 * @global string $cfg['Export']['csv_separator']
 */
$cfg['Export']['csv_separator'] = ';';

/**
 *
 *
 * @global string $cfg['Export']['csv_enclosed']
 */
$cfg['Export']['csv_enclosed'] = '"';

/**
 *
 *
 * @global string $cfg['Export']['csv_escaped']
 */
$cfg['Export']['csv_escaped'] = '\\';

/**
 *
 *
 * @global string $cfg['Export']['csv_terminated']
 */
$cfg['Export']['csv_terminated'] = 'AUTO';

/**
 *
 *
 * @global boolean $cfg['Export']['excel_columns']
 */
$cfg['Export']['excel_columns'] = false;

/**
 *
 *
 * @global string $cfg['Export']['excel_null']
 */
$cfg['Export']['excel_null'] = 'NULL';

/**
 * win/mac
 *
 * @global string $cfg['Export']['excel_edition']
 */
$cfg['Export']['excel_edition'] = 'win';

/**
 *
 *
 * @global boolean $cfg['Export']['latex_structure']
 */
$cfg['Export']['latex_structure'] = true;

/**
 *
 *
 * @global boolean $cfg['Export']['latex_data']
 */
$cfg['Export']['latex_data'] = true;

/**
 *
 *
 * @global boolean $cfg['Export']['latex_columns']
 */
$cfg['Export']['latex_columns'] = true;

/**
 *
 *
 * @global boolean $cfg['Export']['latex_relation']
 */
$cfg['Export']['latex_relation'] = true;

/**
 *
 *
 * @global boolean $cfg['Export']['latex_comments']
 */
$cfg['Export']['latex_comments'] = true;

/**
 *
 *
 * @global boolean $cfg['Export']['latex_mime']
 */
$cfg['Export']['latex_mime'] = true;

/**
 *
 *
 * @global string $cfg['Export']['latex_null']
 */
$cfg['Export']['latex_null'] = '\textit{NULL}';

/**
 *
 *
 * @global boolean $cfg['Export']['latex_caption']
 */
$cfg['Export']['latex_caption'] = true;

/**
 *
 *
 * @global string $cfg['Export']['latex_structure_caption']
 */
$cfg['Export']['latex_structure_caption'] = 'strLatexStructure';

/**
 *
 *
 * @global string $cfg['Export']['latex_structure_continued_caption']
 */
$cfg['Export']['latex_structure_continued_caption'] = 'strLatexStructure strLatexContinued';

/**
 *
 *
 * @global string $cfg['Export']['latex_data_caption']
 */
$cfg['Export']['latex_data_caption'] = 'strLatexContent';

/**
 *
 *
 * @global string $cfg['Export']['latex_data_continued_caption']
 */
$cfg['Export']['latex_data_continued_caption'] = 'strLatexContent strLatexContinued';

/**
 *
 *
 * @global string $cfg['Export']['latex_data_label']
 */
$cfg['Export']['latex_data_label'] = 'tab:__TABLE__-data';

/**
 *
 *
 * @global string $cfg['Export']['latex_structure_label']
 */
$cfg['Export']['latex_structure_label'] = 'tab:__TABLE__-structure';

/**
 *
 *
 * @global boolean $cfg['Export']['sql_structure']
 */
$cfg['Export']['sql_structure'] = true;

/**
 *
 *
 * @global boolean $cfg['Export']['sql_data']
 */
$cfg['Export']['sql_data'] = true;

/**
 *
 *
 * @global string $cfg['Export']['sql_compatibility']
 */
$cfg['Export']['sql_compatibility'] = 'NONE';

/**
 * Whether to include comments in SQL export.
 *
 * @global string $cfg['Export']['sql_include_comments']
 */
$cfg['Export']['sql_include_comments'] = true;

/**
 *
 *
 * @global boolean $cfg['Export']['sql_disable_fk']
 */
$cfg['Export']['sql_disable_fk'] = false;

/**
 *
 *
 * @global boolean $cfg['Export']['sql_use_transaction']
 */
$cfg['Export']['sql_use_transaction'] = false;

/**
 *
 *
 * @global boolean $cfg['Export']['sql_drop_database']
 */
$cfg['Export']['sql_drop_database'] = true;

/**
 *
 *
 * @global boolean $cfg['Export']['sql_drop_table']
 */
$cfg['Export']['sql_drop_table'] = true;

/**
 *
 *
 * @global boolean $cfg['Export']['sql_if_not_exists']
 * true by default for correct behavior when dealing with exporting
 * of VIEWs and the stand-in table
 */
$cfg['Export']['sql_if_not_exists'] = true;

/**
 *
 *
 * @global boolean $cfg['Export']['sql_procedure_function']
 */
$cfg['Export']['sql_procedure_function'] = false;

/**
 *
 *
 * @global boolean $cfg['Export']['sql_auto_increment']
 */
$cfg['Export']['sql_auto_increment'] = true;

/**
 *
 *
 * @global boolean $cfg['Export']['sql_backquotes']
 */
$cfg['Export']['sql_backquotes'] = true;

/**
 *
 *
 * @global boolean $cfg['Export']['sql_dates']
 */
$cfg['Export']['sql_dates'] = false;

/**
 *
 *
 * @global boolean $cfg['Export']['sql_relation']
 */
$cfg['Export']['sql_relation'] = false;

/**
 *
 *
 * @global boolean $cfg['Export']['sql_columns']
 */
$cfg['Export']['sql_columns'] = true;

/**
 *
 *
 * @global boolean $cfg['Export']['sql_delayed']
 */
$cfg['Export']['sql_delayed'] = false;

/**
 *
 *
 * @global boolean $cfg['Export']['sql_ignore']
 */
$cfg['Export']['sql_ignore'] = false;

/**
 *
 *
 * @global boolean $cfg['Export']['sql_hex_for_blob']
 */
$cfg['Export']['sql_hex_for_blob'] = true;

/**
 * insert/update/replace
 *
 * @global string $cfg['Export']['sql_type']
 */
$cfg['Export']['sql_type'] = 'insert';

/**
 *
 *
 * @global boolean $cfg['Export']['sql_extended']
 */
$cfg['Export']['sql_extended'] = true;

/**
 *
 *
 * @global integer $cfg['Export']['sql_max_query_size']
 */
$cfg['Export']['sql_max_query_size'] = 50000;

/**
 *
 *
 * @global boolean $cfg['Export']['sql_comments']
 */
$cfg['Export']['sql_comments'] = false;

/**
 *
 *
 * @global boolean $cfg['Export']['sql_mime']
 */
$cfg['Export']['sql_mime'] = false;

/**
 * \n is replaced by new line
 *
 * @global string $cfg['Export']['sql_header_comment']
 */
$cfg['Export']['sql_header_comment'] = '';

/**
 *
 *
 * @global boolean $cfg['Export']['pdf_structure']
 */
$cfg['Export']['pdf_structure'] = false;

/**
 *
 *
 * @global boolean $cfg['Export']['pdf_data']
 */
$cfg['Export']['pdf_data'] = true;

/**
 *
 *
 * @global string $cfg['Export']['pdf_report_title']
 */
$cfg['Export']['pdf_report_title'] = '';


/*******************************************************************************
 * Import defaults
 */
$cfg['Import'] = array();

/**
 *
 *
 * @global string $cfg['Import']['format']
 */
$cfg['Import']['format'] = 'sql';

/**
 *
 *
 * @global boolean $cfg['Import']['allow_interrupt']
 */
$cfg['Import']['allow_interrupt'] = true;

/**
 *
 *
 * @global integer $cfg['Import']['skip_queries']
 */
$cfg['Import']['skip_queries'] = '0';

/**
 *
 *
 * @global string $cfg['Import']['sql_compatibility']
 */
$cfg['Import']['sql_compatibility'] = 'NONE';

/**
 *
 *
 * @global boolean $cfg['Import']['csv_replace']
 */
$cfg['Import']['csv_replace'] = false;

/**
 *
 *
 * @global string $cfg['Import']['csv_terminated']
 */
$cfg['Import']['csv_terminated'] = ';';

/**
 *
 *
 * @global string $cfg['Import']['csv_enclosed']
 */
$cfg['Import']['csv_enclosed'] = '"';

/**
 *
 *
 * @global string $cfg['Import']['csv_escaped']
 */
$cfg['Import']['csv_escaped'] = '\\';

/**
 *
 *
 * @global string $cfg['Import']['csv_new_line']
 */
$cfg['Import']['csv_new_line'] = 'auto';

/**
 *
 *
 * @global string $cfg['Import']['csv_columns']
 */
$cfg['Import']['csv_columns'] = '';

/**
 *
 *
 * @global boolean $cfg['Import']['ldi_replace']
 */
$cfg['Import']['ldi_replace'] = false;

/**
 *
 *
 * @global string $cfg['Import']['ldi_terminated']
 */
$cfg['Import']['ldi_terminated'] = ';';

/**
 *
 *
 * @global string $cfg['Import']['ldi_enclosed']
 */
$cfg['Import']['ldi_enclosed'] = '"';

/**
 *
 *
 * @global string $cfg['Import']['ldi_escaped']
 */
$cfg['Import']['ldi_escaped'] = '\\';

/**
 *
 *
 * @global string $cfg['Import']['ldi_new_line']
 */
$cfg['Import']['ldi_new_line'] = 'auto';

/**
 *
 *
 * @global string $cfg['Import']['ldi_columns']
 */
$cfg['Import']['ldi_columns'] = '';

/**
 * 'auto' for auto-detection, true or false for forcing
 *
 * @global string $cfg['Import']['ldi_local_option']
 */
$cfg['Import']['ldi_local_option'] = 'auto';

/**
 * Link to the official MySQL documentation.
 * Be sure to include no trailing slash on the path.
 * See http://dev.mysql.com/doc/ for more information
 * about MySQL manuals and their types.
 *
 * @global string $cfg['MySQLManualBase']
 */
$cfg['MySQLManualBase'] = 'http://dev.mysql.com/doc/refman';

/**
 * Type of MySQL documentation:
 *   viewable   - "viewable online", current one used on MySQL website
 *   searchable - "Searchable, with user comments"
 *   chapters   - "HTML, one page per chapter"
 *   chapters_old - "HTML, one page per chapter", format used prior to MySQL 5.0 release
 *   big        - "HTML, all on one page"
 *   old        - old style used in phpMyAdmin 2.3.0 and sooner
 *   none       - do not show documentation links
 *
 * @global string $cfg['MySQLManualType']
 */
$cfg['MySQLManualType'] = 'viewable';


/*******************************************************************************
 * PDF options
 */

/**
 *
 *
 * @global array $cfg['PDFPageSizes']
 */
$cfg['PDFPageSizes'] = array('A3', 'A4', 'A5', 'letter', 'legal');

/**
 *
 *
 * @global string $cfg['PDFDefaultPageSize']
 */
$cfg['PDFDefaultPageSize'] = 'A4';


/*******************************************************************************
 * Language and character set conversion settings
 */

/**
 * Default language to use, if not browser-defined or user-defined
 *
 * @global string $cfg['DefaultLang']
 */
$cfg['DefaultLang'] = 'es-utf-8';

/**
 * Default connection collation
 *
 * @global string $cfg['DefaultConnectionCollation']
 */
$cfg['DefaultConnectionCollation'] = 'utf8_general_ci';

/**
 * Force: always use this language - must be defined in
 *        libraries/select_lang.lib.php
 * $cfg['Lang'] = 'en-utf-8';
 *
 * Regular expression to limit listed languages, e.g. '^(cs|en)' for Czech and
 * English only
 *
 * @global string $cfg['FilterLanguages']
 */
$cfg['FilterLanguages'] = '';

/**
 * Default character set to use for recoding of MySQL queries, does not take
 * any effect when character sets recoding is switched off by
 * $cfg['AllowAnywhereRecoding'] or in language file
 * (see $cfg['AvailableCharsets'] to possible choices, you can add your own)
 *
 * @global string $cfg['DefaultCharset']
 */
$cfg['DefaultCharset'] = 'utf-8';

/**
 * Allow character set recoding of MySQL queries, must be also enabled in language
 * file to make harder using other language files than Unicode.
 * Default value is false to avoid problems on servers without the iconv
 * extension
 *
 * @global boolean $cfg['AllowAnywhereRecoding']
 */
$cfg['AllowAnywhereRecoding'] = false;

/**
 * You can select here which functions will be used for character set conversion.
 * Possible values are:
 *      auto   - automatically use available one (first is tested iconv, then
 *               recode)
 *      iconv  - use iconv or libiconv functions
 *      recode - use recode_string function
 *
 * @global string $cfg['RecodingEngine']
 */
$cfg['RecodingEngine'] = 'auto';

/**
 * Specify some parameters for iconv used in character set conversion. See iconv
 * documentation for details:
 * http://www.gnu.org/software/libiconv/documentation/libiconv/iconv_open.3.html
 *
 * @global string $cfg['IconvExtraParams']
 */
$cfg['IconvExtraParams'] = '//TRANSLIT';

/**
 * Available character sets for MySQL conversion. currently contains all which could
 * be found in lang/* files and few more.
 * Character sets will be shown in same order as here listed, so if you frequently
 * use some of these move them to the top.
 *
 * @global array $cfg['AvailableCharsets']
 */
$cfg['AvailableCharsets'] = array(
    'iso-8859-1',
    'iso-8859-2',
    'iso-8859-3',
    'iso-8859-4',
    'iso-8859-5',
    'iso-8859-6',
    'iso-8859-7',
    'iso-8859-8',
    'iso-8859-9',
    'iso-8859-10',
    'iso-8859-11',
    'iso-8859-12',
    'iso-8859-13',
    'iso-8859-14',
    'iso-8859-15',
    'windows-1250',
    'windows-1251',
    'windows-1252',
    'windows-1256',
    'windows-1257',
    'koi8-r',
    'big5',
    'gb2312',
    'utf-16',
    'utf-8',
    'utf-7',
    'x-user-defined',
    'euc-jp',
    'ks_c_5601-1987',
    'tis-620',
    'SHIFT_JIS'
);


/*******************************************************************************
 * Customization & design
 *
 * The graphical settings are now located in themes/theme-name/layout.inc.php
 */

/**
 * enable the left panel pointer
 * (used when LeftFrameLight is false)
 * see also LeftPointerColor
 * in layout.inc.php
 *
 * @global boolean $cfg['LeftPointerEnable']
 */
$cfg['LeftPointerEnable'] = true;

/**
 * enable the browse pointer
 * see also BrowsePointerColor
 * in layout.inc.php
 *
 * @global boolean $cfg['BrowsePointerEnable']
 */
$cfg['BrowsePointerEnable'] = true;

/**
 * enable the browse marker
 * see also BrowseMarkerColor
 * in layout.inc.php
 *
 * @global boolean $cfg['BrowseMarkerEnable']
 */
$cfg['BrowseMarkerEnable'] = true;

/**
 * textarea size (columns) in edit mode
 * (this value will be emphasized (*2) for SQL
 * query textareas and (*1.25) for query window)
 *
 * @global integer $cfg['TextareaCols']
 */
$cfg['TextareaCols'] = 40;

/**
 * textarea size (rows) in edit mode
 *
 * @global integer $cfg['TextareaRows']
 */
$cfg['TextareaRows'] = 7;

/**
 * double size of textarea size for LONGTEXT fields
 *
 * @global boolean $cfg['LongtextDoubleTextarea']
 */
$cfg['LongtextDoubleTextarea'] = true;

/**
 * auto-select when clicking in the textarea of the query-box
 *
 * @global boolean $cfg['TextareaAutoSelect']
 */
$cfg['TextareaAutoSelect'] = false;

/**
 * textarea size (columns) for CHAR/VARCHAR
 *
 * @global integer $cfg['CharTextareaCols']
 */
$cfg['CharTextareaCols'] = 40;

/**
 * textarea size (rows) for CHAR/VARCHAR
 *
 * @global integer $cfg['CharTextareaRows']
 */
$cfg['CharTextareaRows'] = 2;

/**
 * Enable Ctrl+Arrows moving between fields when editing?
 *
 * @global boolean $cfg['CtrlArrowsMoving']
 */
$cfg['CtrlArrowsMoving'] = true;

/**
 * Max field data length in browse mode for all non-numeric fields
 *
 * @global integer $cfg['LimitChars']
 */
$cfg['LimitChars'] = 50;

/**
 * show edit/delete links on left side of browse
 * (or at the top with vertical browse)
 *
 * @global boolean $cfg['ModifyDeleteAtLeft']
 */
$cfg['ModifyDeleteAtLeft'] = true;

/**
 * show edit/delete links on right side of browse
 * (or at the bottom with vertical browse)
 *
 * @global boolean $cfg['ModifyDeleteAtRight']
 */
$cfg['ModifyDeleteAtRight'] = false;

/**
 * default display direction (horizontal|vertical|horizontalflipped)
 *
 * @global string $cfg['DefaultDisplay']
 */
$cfg['DefaultDisplay'] = 'horizontal';

/**
 * default display direction for altering/creating columns (tbl_properties)
 * (horizontal|vertical|<number>)
 * number indicates maximal number for which vertical model is used
 *
 * @global integer $cfg['DefaultPropDisplay']
 */
$cfg['DefaultPropDisplay'] = 3;

/**
 * table-header rotation via faking or CSS? (css|fake)
 * NOTE: CSS only works in IE browsers!
 *
 * @global string $cfg['HeaderFlipType']
 */
$cfg['HeaderFlipType'] = 'css';

/**
 * shows stored relation-comments in 'browse' mode.
 *
 * @global boolean $cfg['ShowBrowseComments']
 */
$cfg['ShowBrowseComments'] = true;

/**
 * shows stored relation-comments in 'table property' mode.
 *
 * @global boolean $cfg['ShowPropertyComments']
 */
$cfg['ShowPropertyComments']= true;

/**
 * repeat header names every X cells? (0 = deactivate)
 *
 * @global integer $cfg['RepeatCells']
 */
$cfg['RepeatCells'] = 100;

/**
 * Set to true if Edit link should open the query to edit in the query window
 * (assuming JavaScript is enabled), and to false if we should edit in the right panel
 *
 * @global boolean $cfg['EditInWindow']
 */
$cfg['EditInWindow'] = true;

/**
 * Width of Query window
 *
 * @global integer $cfg['QueryWindowWidth']
 */
$cfg['QueryWindowWidth'] = 550;

/**
 * Height of Query window
 *
 * @global integer $cfg['QueryWindowHeight']
 */
$cfg['QueryWindowHeight'] = 310;

/**
 * Set to true if you want DB-based query history.If false, this utilizes
 * JS-routines to display query history (lost by window close)
 *
 * @global boolean $cfg['QueryHistoryDB']
 */
$cfg['QueryHistoryDB'] = false;

/**
 * which tab to display in the querywindow on startup
 * (sql|files|history|full)
 *
 * @global string $cfg['QueryWindowDefTab']
 */
$cfg['QueryWindowDefTab'] = 'sql';

/**
 * When using DB-based query history, how many entries should be kept?
 *
 * @global integer $cfg['QueryHistoryMax']
 */
$cfg['QueryHistoryMax'] = 25;

/**
 * Use MIME-Types (stored in column comments table) for
 *
 * @global boolean $cfg['BrowseMIME']
 */
$cfg['BrowseMIME'] = true;

/**
 * When approximate count < this, PMA will get exact count for table rows.
 *
 * @global integer $cfg['MaxExactCount']
 */
$cfg['MaxExactCount'] = 20000;

/**
 * Zero means that no row count is done for views; see the doc
 *
 * @global integer $cfg['MaxExactCountViews']
 */
$cfg['MaxExactCountViews'] = 0;

/**
 * Utilize DHTML/JS capabilities to allow WYSIWYG editing of
 * the PDF page editor. Requires an IE6/Gecko based browser.
 *
 * @global boolean $cfg['WYSIWYG-PDF']
 */
$cfg['WYSIWYG-PDF'] = true;

/**
 * Sort table and database in natural order
 *
 * @global boolean $cfg['NaturalOrder']
 */
$cfg['NaturalOrder'] = true;

/**
 * Initial state for sliders
 * (open | closed)
 *
 * @global string $cfg['InitialSlidersState']
 */
$cfg['InitialSlidersState'] = 'closed';



//-----------------------------------------------------------------------------
// custom-setup by mkkeck: 2004-05-04
//    some specials for new icons and scrolling
/**
 * @todo 2004-05-08 rabus: We need to rearrange these variables.
 */


/*******************************************************************************
 * Window title settings
 */

/**
 * title of browser window when a table is selected
 *
 * @global string $cfg['TitleTable']
 */
$cfg['TitleTable'] = '@HTTP_HOST@ / @VSERVER@ / @DATABASE@ / @TABLE@ | @PHPMYADMIN@';

/**
 * title of browser window when a database is selected
 *
 * @global string $cfg['TitleDatabase']
 */
$cfg['TitleDatabase'] = '@HTTP_HOST@ / @VSERVER@ / @DATABASE@ | @PHPMYADMIN@';

/**
 * title of browser window when a server is selected
 *
 * @global string $cfg['TitleServer']
 */
$cfg['TitleServer'] = '@HTTP_HOST@ / @VSERVER@ | @PHPMYADMIN@';

/**
 * title of browser window when nothing is selected
 * @global string $cfg['TitleDefault']
 */
$cfg['TitleDefault'] = '@HTTP_HOST@ | @PHPMYADMIN@';

/**
 * show some icons for warning, error and information messages (true|false)?
 *
 * @global boolean $cfg['ErrorIconic']
 */
$cfg['ErrorIconic'] = true;

/**
 * show icons in list on main page and on menu tabs (true|false)?
 *
 * @global boolean $cfg['MainPageIconic']
 */
$cfg['MainPageIconic'] = true;

/**
 * show help button instead of strDocu (true|false)?
 *
 * @global boolean $cfg['ReplaceHelpImg']
 */
$cfg['ReplaceHelpImg'] = true;


/*******************************************************************************
 * theme manager
 */

/**
 * using themes manager please set up here the path to 'themes' else leave empty
 *
 * @global string $cfg['ThemePath']
 */
$cfg['ThemePath'] = './themes';

/**
 * if you want to use selectable themes and if ThemesPath not empty
 * set it to true, else set it to false (default is false);
 *
 * @global boolean $cfg['ThemeManager']
 */
$cfg['ThemeManager'] = false;

/**
 * set up default theme, if ThemePath not empty you can set up here an valid
 * path to themes or 'original' for the original pma-theme
 *
 * @global string $cfg['ThemeDefault']
 */
$cfg['ThemeDefault'] = 'original';

/**
 * allow different theme for each configured server
 *
 * @global boolean $cfg['ThemePerServer']
 */
$cfg['ThemePerServer'] = false;


/*******************************************************************************
 *
 */

/**
 * Default queries
 * %d will be replaced by the database name.
 * %t will be replaced by the table name.
 * %f will be replaced by a list of field names.
 * (%t and %f only applies to DefaultQueryTable)
 *
 * @global string $cfg['DefaultQueryTable']
 */
$cfg['DefaultQueryTable'] = 'SELECT * FROM %t WHERE 1';

/**
 * Default queries
 * %d will be replaced by the database name.
 * %t will be replaced by the table name.
 * %f will be replaced by a list of field names.
 * (%t and %f only applies to DefaultQueryTable)
 *
 * @global string $cfg['DefaultQueryDatabase']
 */
$cfg['DefaultQueryDatabase'] = '';


/*******************************************************************************
 * SQL Query box settings
 * These are the links display in all of the SQL Query boxes
 *
 * @global array $cfg['SQLQuery']
 */
$cfg['SQLQuery'] = array();

/**
 * Edit link to change a query
 *
 * @global boolean $cfg['SQLQuery']['Edit']
 */
$cfg['SQLQuery']['Edit'] = true;

/**
 * EXPLAIN on SELECT queries
 *
 * @global boolean $cfg['SQLQuery']['Explain']
 */
$cfg['SQLQuery']['Explain'] = true;

/**
 * Wrap a query in PHP
 *
 * @global boolean $cfg['SQLQuery']['ShowAsPHP']
 */
$cfg['SQLQuery']['ShowAsPHP'] = true;

/**
 * Validate a query (see $cfg['SQLValidator'] as well)
 *
 * @global boolean $cfg['SQLQuery']['Validate']
 */
$cfg['SQLQuery']['Validate'] = false;

/**
 * Refresh the results page
 *
 * @global boolean $cfg['SQLQuery']['Refresh']
 */
$cfg['SQLQuery']['Refresh'] = true;


/*******************************************************************************
 * Web server upload/save/import directories
 */

/**
 * Directory for uploaded files that can be executed by phpMyAdmin.
 * For example './upload'. Leave empty for no upload directory support.
 * Use %u for username inclusion.
 *
 * @global string $cfg['UploadDir']
 */
$cfg['UploadDir'] = '';

/**
 * Directory where phpMyAdmin can save exported data on server.
 * For example './save'. Leave empty for no save directory support.
 * Use %u for username inclusion.
 *
 * @global string $cfg['SaveDir']
 */
$cfg['SaveDir'] = '';

/**
 * Directory where phpMyAdmin can save temporary files.
 * This is needed for MS Excel export, see documentation how to enable that.
 *
 * @global string $cfg['TempDir']
 */
$cfg['TempDir'] = '';


/**
 * Misc. settings
 */

/**
 * Is GD >= 2 available? Set to yes/no/auto. 'auto' does auto-detection,
 * which is the only safe way to determine GD version.
 *
 * @global string $cfg['GD2Available']
 */
$cfg['GD2Available'] = 'auto';

/**
 * List of trusted proxies for IP allow/deny
 *
 * @global array $cfg['TrustedProxies']
 */
$cfg['TrustedProxies'] = array();

/**
 * We normally check the permissions on the configuration file to ensure
 * it's not world writable. However, phpMyAdmin could be installed on
 * a NTFS filesystem mounted on a non-Windows server, in which case the
 * permissions seems wrong but in fact cannot be detected. In this case
 * a sysadmin would set the following to false.
 */
$cfg['CheckConfigurationPermissions'] = true;

/*******************************************************************************
 * SQL Parser Settings
 *
 * @global array $cfg['SQP']
 */
$cfg['SQP'] = array();

/**
 * Pretty-printing style to use on queries (html, text, none)
 *
 * @global string $cfg['SQP']['fmtType']
 */
$cfg['SQP']['fmtType'] = 'html';

/**
 * Amount to indent each level (floats are valid)
 *
 * @global integer $cfg['SQP']['fmtInd']
 */
$cfg['SQP']['fmtInd'] = '1';

/**
 * Units for indenting each level (CSS Types - {em, px, pt})
 *
 * @global string $cfg['SQP']['fmtIndUnit']
 */
$cfg['SQP']['fmtIndUnit'] = 'em';


/*******************************************************************************
 * If you wish to use the SQL Validator service, you should be aware of the
 * following:
 * All SQL statements are stored anonymously for statistical purposes.
 * Mimer SQL Validator, Copyright 2002 Upright Database Technology.
 * All rights reserved.
 *
 * @global array $cfg['SQLValidator']
 */
$cfg['SQLValidator'] = array();

/**
 * Make the SQL Validator available
 *
 * @global boolean $cfg['SQLValidator']['use']
 */
$cfg['SQLValidator']['use'] = false;

/**
 * If you have a custom username, specify it here (defaults to anonymous)
 *
 * @global string $cfg['SQLValidator']['username']
 */
$cfg['SQLValidator']['username'] = '';

/**
 * Password for username
 *
 * @global string $cfg['SQLValidator']['password']
 */
$cfg['SQLValidator']['password'] = '';


/*******************************************************************************
 * Developers ONLY!
 *
 * @global array $cfg['DBG']
 */
$cfg['DBG'] = array();

/**
 * Output executed queries and their execution times
 *
 * @global boolean $cfg['DBG']['enable']
 */
$cfg['DBG']['sql'] = false;

/**
 * Make the DBG stuff available
 * To use the following, please install the DBG extension from http://dd.cron.ru/dbg/
 *
 * @global boolean $cfg['DBG']['enable']
 */
$cfg['DBG']['php'] = false;

/**
 * Produce profiling results of PHP
 *
 * @global boolean $cfg['DBG']['profile']['enable']
 */
$cfg['DBG']['profile']['enable'] = false;

/**
 * Threshold of long running code to display
 * Anything below the threshold is not displayed
 *
 * @global float $cfg['DBG']['profile']['threshold']
 */
$cfg['DBG']['profile']['threshold'] = 0.5;


/*******************************************************************************
 * MySQL settings
 */

/**
 * Column types;
 * VARCHAR, TINYINT, TEXT and DATE are listed first, based on estimated popularity
 *
 * @global array $cfg['ColumnTypes']
 */
$cfg['ColumnTypes'] = array(
    // most used
    'INT',
    'VARCHAR',
    'TEXT',
    'DATE',

    // numeric
    'NUMERIC' => array(
        'TINYINT',
        'SMALLINT',
        'MEDIUMINT',
        'INT',
        'BIGINT',
        '-',
        'DECIMAL',
        'FLOAT',
        'DOUBLE',
        'REAL',
        '-',
        'BIT',
        'BOOL',
        'SERIAL',
    ),


    // Date/Time
    'DATE and TIME' => array(
        'DATE',
        'DATETIME',
        'TIMESTAMP',
        'TIME',
        'YEAR',
    ),

    // Text
    'STRING' => array(
        'CHAR',
        'VARCHAR',
        '-',
        'TINYTEXT',
        'TEXT',
        'MEDIUMTEXT',
        'LONGTEXT',
        '-',
        'BINARY',
        'VARBINARY',
        '-',
        'TINYBLOB',
        'MEDIUMBLOB',
        'BLOB',
        'LONGBLOB',
        '-',
        'ENUM',
        'SET',
    ),

    'SPATIAL' => array(
        'GEOMETRY',
        'POINT',
        'LINESTRING',
        'POLYGON',
        'MULTIPOINT',
        'MULTILINESTRING',
        'MULTIPOLYGON',
        'GEOMETRYCOLLECTION',
    ),
);

/**
 * Attributes
 *
 * @global array $cfg['AttributeTypes']
 */
$cfg['AttributeTypes'] = array(
   '',
   'BINARY',
   'UNSIGNED',
   'UNSIGNED ZEROFILL',
   'on update CURRENT_TIMESTAMP',
);


if ($cfg['ShowFunctionFields']) {
    /**
     * Available functions
     *
     * @global array $cfg['Functions']
     */
    $cfg['Functions'] = array(
        'ABS',
        'ACOS',
        'ASCII',
        'ASIN',
        'ATAN',
        'BIN',
        'BIT_COUNT',
        'BIT_LENGTH',
        'CEILING',
        'CHAR',
        'CHAR_LENGTH',
        'COMPRESS',
        'COS',
        'COT',
        'CRC32',
        'CURDATE',
        'CURRENT_USER',
        'CURTIME',
        'DATE',
        'DAYNAME',
        'DEGREES',
        'DES_DECRYPT',
        'DES_ENCRYPT',
        'ENCRYPT',
        'EXP',
        'FLOOR',
        'FROM_DAYS',
        'FROM_UNIXTIME',
        'HEX',
        'INET_ATON',
        'INET_NTOA',
        'LENGTH',
        'LN',
        'LOG',
        'LOG10',
        'LOG2',
        'LOWER',
        'MD5',
        'NOW',
        'OCT',
        'OLD_PASSWORD',
        'ORD',
        'PASSWORD',
        'RADIANS',
        'RAND',
        'REVERSE',
        'ROUND',
        'SEC_TO_TIME',
        'SHA1',
        'SOUNDEX',
        'SPACE',
        'SQRT',
        'STDDEV_POP',
        'STDDEV_SAMP',
        'TAN',
        'TIMESTAMP',
        'TIME_TO_SEC',
        'UNCOMPRESS',
        'UNHEX',
        'UNIX_TIMESTAMP',
        'UPPER',
        'USER',
        'UTC_DATE',
        'UTC_TIME',
        'UTC_TIMESTAMP',
        'UUID',
        'VAR_POP',
        'VAR_SAMP',
        'YEAR',
    );

    /**
     * Which column types will be mapped to which Group?
     *
     * @global array $cfg['RestrictColumnTypes']
     */
    $cfg['RestrictColumnTypes'] = array(
        'TINYINT'   => 'FUNC_NUMBER',
        'SMALLINT'  => 'FUNC_NUMBER',
        'MEDIUMINT' => 'FUNC_NUMBER',
        'INT'       => 'FUNC_NUMBER',
        'BIGINT'    => 'FUNC_NUMBER',
        'DECIMAL'   => 'FUNC_NUMBER',
        'FLOAT'     => 'FUNC_NUMBER',
        'DOUBLE'    => 'FUNC_NUMBER',
        'REAL'      => 'FUNC_NUMBER',
        'BIT'       => 'FUNC_NUMBER',
        'BOOL'      => 'FUNC_NUMBER',
        'SERIAL'    => 'FUNC_NUMBER',

        'DATE'      => 'FUNC_DATE',
        'DATETIME'  => 'FUNC_DATE',
        'TIMESTAMP' => 'FUNC_DATE',
        'TIME'      => 'FUNC_DATE',
        'YEAR'      => 'FUNC_DATE',

        'CHAR'          => 'FUNC_CHAR',
        'VARCHAR'       => 'FUNC_CHAR',
        'TINYTEXT'      => 'FUNC_CHAR',
        'TEXT'          => 'FUNC_CHAR',
        'MEDIUMTEXT'    => 'FUNC_CHAR',
        'LONGTEXT'      => 'FUNC_CHAR',
        'BINARY'        => 'FUNC_CHAR',
        'VARBINARY'     => 'FUNC_CHAR',
        'TINYBLOB'      => 'FUNC_CHAR',
        'MEDIUMBLOB'    => 'FUNC_CHAR',
        'BLOB'          => 'FUNC_CHAR',
        'LONGBLOB'      => 'FUNC_CHAR',
        'ENUM'          => '',
        'SET'           => '',

        'GEOMETRY'              => 'FUNC_SPATIAL',
        'POINT'                 => 'FUNC_SPATIAL',
        'LINESTRING'            => 'FUNC_SPATIAL',
        'POLYGON'               => 'FUNC_SPATIAL',
        'MULTIPOINT'            => 'FUNC_SPATIAL',
        'MULTILINESTRING'       => 'FUNC_SPATIAL',
        'MULTIPOLYGON'          => 'FUNC_SPATIAL',
        'GEOMETRYCOLLECTION'    => 'FUNC_SPATIAL',

    );

    /**
     * Map above defined groups to any function
     *
     * @global array $cfg['RestrictFunctions']
     */
    $cfg['RestrictFunctions'] = array(
        'FUNC_CHAR' => array(
            'BIN',
            'CHAR',
            'CURRENT_USER',
            'COMPRESS',
            'DAYNAME',
            'DES_DECRYPT',
            'DES_ENCRYPT',
            'ENCRYPT',
            'HEX',
            'INET_NTOA',
            'LOWER',
            'MD5',
            'OLD_PASSWORD',
            'PASSWORD',
            'REVERSE',
            'SHA1',
            'SOUNDEX',
            'SPACE',
            'UNCOMPRESS',
            'UNHEX',
            'UPPER',
            'USER',
            'UUID',
        ),

        'FUNC_DATE' => array(
            'CURDATE',
            'CURTIME',
            'DATE',
            'FROM_DAYS',
            'FROM_UNIXTIME',
            'NOW',
            'SEC_TO_TIME',
            'TIMESTAMP',
            'UTC_DATE',
            'UTC_TIME',
            'UTC_TIMESTAMP',
            'YEAR',
        ),

        'FUNC_NUMBER' => array(
            'ABS',
            'ACOS',
            'ASCII',
            'ASIN',
            'ATAN',
            'BIT_LENGTH',
            'BIT_COUNT',
            'CEILING',
            'CHAR_LENGTH',
            'COS',
            'COT',
            'CRC32',
            'DEGREES',
            'EXP',
            'FLOOR',
            'INET_ATON',
            'LENGTH',
            'LN',
            'LOG',
            'LOG2',
            'LOG10',
            'OCT',
            'ORD',
            'RADIANS',
            'RAND',
            'ROUND',
            'SQRT',
            'STDDEV_POP',
            'STDDEV_SAMP',
            'TAN',
            'TIME_TO_SEC',
            'UNIX_TIMESTAMP',
            'VAR_POP',
            'VAR_SAMP',
        ),

        'FUNC_SPATIAL' => array(
            'GeomFromText',
            'GeomFromWKB',

            'GeomCollFromText',
            'LineFromText',
            'MLineFromText',
            'PointFromText',
            'MPointFromText',
            'PolyFromText',
            'MPolyFromText',

            'GeomCollFromWKB',
            'LineFromWKB',
            'MLineFromWKB',
            'PointFromWKB',
            'MPointFromWKB',
            'PolyFromWKB',
            'MPolyFromWKB',
        ),
    );

    /**
     * Default functions for above defined groups
     *
     * @global array $cfg['DefaultFunctions']
     */
    $cfg['DefaultFunctions'] = array(
        'FUNC_CHAR' => '',
        'FUNC_DATE' => '',
        'FUNC_NUMBER' => '',
        'first_timestamp' => 'NOW',
        'pk_char36' => 'UUID',
    );


} // end if

/**
 * Search operators
 *
 * @global array $cfg['NumOperators']
 */
$cfg['NumOperators'] = array(
   '=',
   '>',
   '>=',
   '<',
   '<=',
   '!=',
   'LIKE',
   'NOT LIKE',
);

/**
 * Search operators
 *
 * @global array $cfg['TextOperators']
 */
$cfg['TextOperators'] = array(
   'LIKE',
   'LIKE %...%',
   'NOT LIKE',
   '=',
   '!=',
   'REGEXP',
   'NOT REGEXP',
   "= ''",
   "!= ''"
);

/**
 * Search operators
 *
 * @global array $cfg['EnumOperators']
 */
$cfg['EnumOperators'] = array(
   '=',
   '!=',
);

/**
 * Search operators
 *
 * @global array $cfg['SetOperators']
 */
$cfg['SetOperators'] = array(
   'IN',
   'NOT IN',
);

/**
 * Search operators
 *
 * @global array $cfg['NullOperators']
 */
$cfg['NullOperators'] = array(
   'IS NULL',
   'IS NOT NULL',
);

/**
 * Search operators
 *
 * @global array $cfg['UnaryOperators']
 */
$cfg['UnaryOperators'] = array(
   'IS NULL' => 1,
   'IS NOT NULL' => 1,
   "= ''" => 1,
   "!= ''" => 1
);

?>
