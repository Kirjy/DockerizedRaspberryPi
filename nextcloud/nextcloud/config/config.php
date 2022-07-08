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
  'passwordsalt' => 'XXX',
  'secret' => 'XXX',
  'trusted_domains' =>
  array (
    0 => 'subwebsite.duckdns.org',
    1 => 'sub.website.ws',
    2 => 'website.ws',
  ),
  'datadirectory' => '/var/www/html/data',
  'dbtype' => 'mysql',
  'version' => '23.0.0.10',
  'overwriteprotocol' => 'https',
  'overwrite.cli.url' => 'https://website.ws',
  'dbname' => 'nextcloud',
  'dbhost' => 'nextcloud-db',
  'dbport' => '',
  'dbtableprefix' => 'oc_',
  'mysql.utf8mb4' => true,
  'dbuser' => 'nextcloud',
  'dbpassword' => 'XXX',
  'installed' => true,
  'mail_from_address' => 'emailname',
  'mail_smtpmode' => 'smtp',
  'mail_sendmailmode' => 'smtp',
  'mail_domain' => 'gmail.com',
  'mail_smtpsecure' => 'tls',
  'mail_smtphost' => 'smtp.gmail.com',
  'mail_smtpport' => '587',
  'mail_smtpauth' => 1,
  'mail_smtpname' => 'emailname',
  'mail_smtppassword' => 'XXX',
  'maintenance' => false,
);