<?php

$route = array(
	'registration'		  => 'registration',
	'activate'    		  => 'registration',
	'login'   			    => 'login',
	'profile'   		    => 'profile',
	'logout'            => 'profile',
	'catalog'           => 'resource',
	'news'              => 'news',
	'about'             => 'page',
	'contacts'          => 'page',
	'library'           => 'library',
	'search'            => 'search',
);

/**
 * Paginator
 *   array(
			'type of controller' => 'Model wich will process this url'
 *   )
 */
$routePaginator = array(
	'category'        => 'Resource',
	'news'            => 'News',
);
/**
 * Paginator
 *****/

$routeMENU = array(
	'catalog',
);