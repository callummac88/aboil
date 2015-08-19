<?php

/**
 * CMAC Application
 *
 * PHP version 5.4+
 *
 * LICENSE: This source file is subject to commercial licensing and should not
 * be considered open source without consulting the copyright holders below.
 *
 * @namespace  \
 * @link       http://www.redevolution.com
 * @copyright  2014 Red Evolution Ltd.
 * @license    Commercial Intellectual Property.
 * @see        https://github.com/RedEvo/www.icalms.com.git
 */

/**
 * To correctly use this - set up the following in MAMP PRO
 * like this: http://screenshot.myjoomla.io/image/1h3c430d0L3H
 * SetEnv APPLICATION_ENV development
 */
define('ENVIRONMENT', getenv('APPLICATION_ENV') ? getenv('APPLICATION_ENV') : 'production');

/*
 * Different environments will require different levels of error reporting.
 * By default development will show errors but testing and live will hide them.
 */
if (defined('ENVIRONMENT')) {
    switch (ENVIRONMENT) {
        case 'local':
        case 'development':
            error_reporting(E_ALL);
            ini_set('display_errors', 1);
            break;

        case 'production':
            error_reporting(0);
            ini_set('display_errors', 0);
            break;

        default:
            exit('The application environment is not set correctly.');
    }
} else {
    error_reporting(0);
    ini_set('display_errors', 0);
}

/*
 * This variable must contain the name of your "system" folder.
 * Include the path if the folder is not in the same  directory
 * as this file.
 *
 */
$system_path = '../system';

/*
 * If you want this front controller to use a different "application"
 * folder then the default one you can set its name here. The folder
 * can also be renamed or relocated anywhere on your server.  If
 * you do, use a full server path. For more info please see the user guide:
 * http://codeigniter.com/user_guide/general/managing_apps.html
 *
 * NO TRAILING SLASH!
 *
 */
$application_folder = '../application';

// Set the current directory correctly for CLI requests
if (defined('STDIN')) {
    chdir(dirname(__FILE__));
}

if (realpath($system_path) !== FALSE) {
    $system_path = realpath($system_path) . '/';
}

// ensure there's a trailing slash
$system_path = rtrim($system_path, '/') . '/';

// Is the system path correct?
if (!is_dir($system_path)) {
    exit("Your system folder path does not appear to be set correctly. Please open the following file and correct this: " . pathinfo(__FILE__, PATHINFO_BASENAME));
}

/*
 * -------------------------------------------------------------------
 *  Now that we know the path, set the main path constants
 * -------------------------------------------------------------------
 */
// The name of THIS file
define('SELF', pathinfo(__FILE__, PATHINFO_BASENAME));

// The PHP file extension
// this global constant is deprecated.
define('EXT', '.php');

// Path to the system folder
define('BASEPATH', str_replace("\\", "/", $system_path));

// Path to the front controller (this file)
define('FCPATH', str_replace(SELF, '', __FILE__));

// Name of the "system folder"
define('SYSDIR', trim(strrchr(trim(BASEPATH, '/'), '/'), '/'));


// The path to the "application" folder
if (is_dir($application_folder)) {
    define('APPPATH', $application_folder . '/');
} else {
    if (!is_dir(BASEPATH . $application_folder . '/')) {
        exit("Your application folder path does not appear to be set correctly. Please open the following file and correct this: " . SELF);
    }

    define('APPPATH', BASEPATH . $application_folder . '/');
}

/*
 * And away we go...
 */
require_once BASEPATH . 'core/CodeIgniter.php';
