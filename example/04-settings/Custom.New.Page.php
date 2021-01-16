<?php
/* @author   Yi Feng
 * @version  v6.5
 * @homepage https://lang-php.com
 */

include_once __DIR__ . '/libraries/common.inc.php';

/* Init app */
$lp = new lp\go();

/* Custom page */
$lp->masterCatalogue = "themes/{newpage}";

/* start */
$lp->run();