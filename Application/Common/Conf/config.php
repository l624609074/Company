<?php
return array(
	//''=>'?'
	"TMPL_L_DELIM"=>"<{",
	"TMPL_R_DELIM"=>"}>",
	"DB_TYPE"=>"mysqli",
	"DB_HOST"=>"localhost",
	"DB_NAME"=>"ejiao",
	"DB_USER"=>"root",
	"DB_PWD"=>"99peiyuan@qq.com..",
	"DB_PORT"=>"3306",
	'DEFAULT_CHARSET'       =>  'utf-8', // 默认输出编码
	"DB_PREFIX"=>"tp_",
	'URL_ROUTER_ON'   => true,
	'TMPL_PARSE_STRING' => array(
			'__PUBLIC__' => __ROOT__.'/Public',
		
	),
	'URL_MODEL'=>2,
	'DEFAULT_TIMEZONE'      =>  'PRC',
	'SHO_PAGE_TRACE' =>false, 
	'HTML_CACHE_ON'     =>false,
	'MODULE_ALLOW_LIST'     =>  array('Home','Ejhp','Ej99','Admin99',"Appmaka","Mk","Appejiao"), // ?4
	'DEFAULT_MODULE'        =>  'Ejhp', // ?4
	
);

