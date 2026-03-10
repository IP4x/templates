<?php
$CONFIG = array (
  'htaccess.RewriteBase' => '/',
  'memcache.local' => '\\OC\\Memcache\\APCu',
  'apps_paths' =>
  array (
    0 =>
    array (
      'path' => '/var/www/html/apps',
      'url' => '/apps',
      'writable' => false,
    ),
    1 =>
    array (
      'path' => '/var/www/html/custom_apps',
      'url' => '/custom_apps',
      'writable' => true,
    ),
  ),
  'upgrade.disable-web' => true,
  'passwordsalt' => '',
  'secret' => '',
  'trusted_domains' =>
  array (
    0 => 'localhost',
    1 => 'nextcloud.test.local',
    2 => '192.168.0.2',
    3 => 'localhost',
  ),
  'datadirectory' => '/var/www/html/data',
  'trusted_proxies'   => ['INSERT DOCKER NETWORK IP WITH MASK'],
  'overwritehost'     => 'nextcloud.seul.local',
  'overwriteprotocol' => 'https',
  'dbtype' => 'mysql',
  'version' => '32.0.6.1',
  'overwrite.cli.url' => '',
  'dbname' => 'db_nextcloud',
  'dbhost' => 'mariadb',
  'dbtableprefix' => 'oc_',
  'mysql.utf8mb4' => true,
  'dbuser' => '',
  'dbpassword' => '',
  'installed' => true,
  'instanceid' => 'XXXXXXXXXXXX',
);
