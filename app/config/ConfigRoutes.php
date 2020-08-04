<?
// defined('_access') or exit; 
return [	

			

// "^admin$"=>['controller'=>'admin','action'=>'index','prefix'=>'admin'],
// '^admin/(?P<action>[a-z-]+)$'=>['controller'=>'admin','prefix'=>'admin'],
// '^admin/category/(?P<action>[a-z-]+)/([a-z-0-9?=&]+)$'=> ['controller'=>'category','prefix'=>'admin'],
// '^admin/category/?(?P<action>[a-z-]+)$'=> ['controller'=>'category','prefix'=>'admin'],

// '^admin/post/(?P<action>[a-z-]+)/([a-z-0-9?=&]+)$'=> ['controller'=>'post','prefix'=>'admin'],
// '^admin/post/?(?P<action>[a-z-]+)$'=> ['controller'=>'post','prefix'=>'admin'],

// '^post/(?P<alias>[a-z-0-9]+)/?$'=>['controller'=>'post','action'=>'view'],
// '^category/(?P<alias>[a-z-0-9]+)/?$'=>['controller'=>'category','action'=>'view'],

'^$'=>['controller'=>'category','action'=>'index'],

'^(?P<controller>[a-z-0-9]+)/?$'=>['action'=>'index'],

'^(?P<controller>[a-z-0-9]+)/?(?P<alias>[a-z-0-9]+)/?$'=>['action'=>'pages'],

'^(?P<controller>[a-z-0-9]+)/?(?P<action>[a-z-0-9]+)/?(?P<alias>[a-z-0-9]+)/?$'=>[],



		];

 