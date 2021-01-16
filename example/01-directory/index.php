<?php
/* @author   Yi Feng
 * @version  v6.5
 * @homepage https://lang-php.com
 */

include_once __DIR__ . '/libraries/common.inc.php';

/* Init app */
$lp = new lp\go();

/* Enable dynamic URL function, see:
   https://lang-php.com/go/lp-docs-url */
$lp->isDynamic = false;

/* start */
$lp->run();