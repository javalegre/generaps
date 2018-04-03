<?php
$baseDir = dirname(dirname(__FILE__));
return [
    'plugins' => [
        'Acl' => $baseDir . '/Vendor/cakephp/acl/',
        'AclManager' => $baseDir . '/Vendor/ivanamat/cakephp3-aclmanager/',
        'AuditStash' => $baseDir . '/Vendor/lorenzo/audit-stash/',
        'Bake' => $baseDir . '/Vendor/cakephp/bake/',
        'Cake/ElasticSearch' => $baseDir . '/Vendor/cakephp/elastic-search/',
        'DebugKit' => $baseDir . '/Vendor/cakephp/debug_kit/',
        'Migrations' => $baseDir . '/Vendor/cakephp/migrations/',
        'WyriHaximus/TwigView' => $baseDir . '/Vendor/wyrihaximus/twig-view/'
    ]
];