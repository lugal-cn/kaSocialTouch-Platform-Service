<?php
/**
 * Pi Engine (http://pialog.org)
 *
 * Pi Engine boot definition
 *
 * @link            http://code.pialog.org for the Pi Engine source repository
 * @copyright       Copyright (c) Pi Engine http://pialog.org
 * @license         http://pialog.org/license.txt BSD 3-Clause License
 * @author          Taiwen Jiang <taiwenjiang@tsinghua.org.cn>
 */

// Physical path to host configuration file
// For performance consideration it is recommended to be specified
// if there is only one host;
// Otherwise it will be automatically looked up in central host specifications
define('PI_PATH_HOST', '/opt/local/share/nginx/html/pi/var/config/host.php');

// Physical path to default library directory WITHOUT trailing slash
define('PI_PATH_LIB', '/opt/local/share/nginx/html/pi/lib');

// Set default timezone if not available in php.ini
if (!ini_get('date.timezone')) {
    date_default_timezone_set('UTC');
}

include PI_PATH_LIB . '/Pi.php';
if (defined('PI_BOOT_ENABLE') && constant('PI_BOOT_ENABLE')) {
    return Pi::boot();
}
