return array (
  'cache' => array(
     'value' => array (
        'type' => 'memcache',
        'memcache' => array(
            'host' => 'memcached',
            'port' => '11211'
        ),
        'sid' => $_SERVER["DOCUMENT_ROOT"]
     ),
  ),
);
