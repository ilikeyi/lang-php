<?php
/* @author   Yi Feng
 * @version  v6.5
 * @homepage https://lang-php.com
 */

include_once __DIR__ . '/libraries/classes/database.php';

/* Init database
 *
 * Set current page here, Default 'homepage' page;
 *
 */
$db = new db('newpage');

/* Get all language names of the current page */
$lpna = $db->lpgroup;

var_dump($lpna);
print_r($lpna);