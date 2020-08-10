<?
// defined('_access') or exit; 
return [	

 

'^$'=>['controller'=>'category','action'=>'index'],


'^admin$'=>['controller'=>'admin','action'=>'auth','prefix'=>'admin'],

'^admin/index'=>["prefix"=>'admin','controller'=>'admin','action'=>'index'],

'^admin/(?P<controller>[a-z-0-9]+)/?$'=>["prefix"=>'admin','action'=>'index'],

'^admin/(?P<controller>[a-z-0-9]+)/?(?P<action>[a-z-0-9]+)/?$'=>["prefix"=>'admin'],

 

'^(?P<controller>[a-z-0-9]+)/?$'=>['action'=>'index'],

'^(?P<controller>[a-z-0-9]+)/?(?P<alias>[a-z-0-9]+)/?$'=>['action'=>'pages'],

'^(?P<controller>[a-z-0-9]+)/?(?P<action>[a-z-0-9]+)/?(?P<alias>[a-z-0-9]+)/?$'=>[],





		];

 