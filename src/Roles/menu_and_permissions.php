<?php 

	return [
		[
			'display' => ' Access Role',
			'uniqkey' => 'role.access',
			'url' => null,
			'classId' => '',
			'className' => '',
			'classIcon' => 'ion-ios-person-outline',
			/*
			|--------------------------------------------------------------------------
			| Property Permission
			|--------------------------------------------------------------------------
			|
			| This is option for accessing permission of module
			|
			*/
			'permissions' => [
				[
					'uniqkey' => 'role.index',
					'name' => 'Listing Role',
					'description' => 'Module for showing all roles in application'
				]
			],
			/*
			|--------------------------------------------------------------------------
			| Property Submenu
			|--------------------------------------------------------------------------
			|
			| If this menu have submenu
			|
			*/
			'childs' => []
		]	
	];