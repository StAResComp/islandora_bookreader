<?php

chdir('../../../..');

define('DRUPAL_ROOT', getcwd());

require_once DRUPAL_ROOT . '/includes/bootstrap.inc';

drupal_bootstrap(DRUPAL_BOOTSTRAP_FULL);

$url_array = explode("/sites/", $base_url, 2);
$drupal_site_root = $url_array[0];

header("Status: 301 Moved Permanently");
header("Location:".$drupal_site_root."/islandora/object/". urlencode($_GET['pid'])."?ajax_request");
exit;
