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
  'instanceid' => 'ocmgarmlo1qd',
  'passwordsalt' => 'CHANGE_ME',
  'secret' => 'CHANGE_ME',
  'trusted_domains' =>
  array (
    0 => 'mydomain.com',
    1 => '192.168.0.1',
  ),
  'datadirectory' => '/var/www/html/data',
  'dbtype' => 'mysql',
  'version' => '27.0.1.2',
  'overwriteprotocol' => 'https',
  'overwrite.cli.url' => 'https://cloud.mydomain.fr',
  'dbname' => 'nextcloud',
  'dbhost' => 'nextcloud-db',
  'dbport' => '',
  'dbtableprefix' => 'oc_',
  'mysql.utf8mb4' => true,
  'dbuser' => 'nextcloud',
  'dbpassword' => 'W1lFWpL42nXb3HyxGT0=',
  'installed' => true,
  'mail_from_address' => 'myemail',
  'mail_smtpmode' => 'smtp',
  'mail_sendmailmode' => 'smtp',
  'mail_domain' => 'gmail.com',
  'mail_smtpsecure' => 'tls',
  'mail_smtphost' => 'smtp.gmail.com',
  'mail_smtpport' => '587',
  'mail_smtpauth' => 1,
  'mail_smtpname' => 'myemail',
  'mail_smtppassword' => 'CHANGE_ME',
  'maintenance' => false,
  'theme' => '',
  'loglevel' => 2,
  'updater.secret' => 'CHANGE_ME',
);
