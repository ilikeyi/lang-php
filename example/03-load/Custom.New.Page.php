<?php
/* @author   Yi Feng
 * @version  v6.5
 * @homepage https://lang-php.com
 */

include_once __DIR__ . '/libraries/lp-class.php';

/* Init app */
$lp = new lp\go();

/* Custom page */
$lp->masterCatalogue = 'languages/{newpage}';
$lp->userThemes      = '{newpage}';

/* start */
$lp->run();