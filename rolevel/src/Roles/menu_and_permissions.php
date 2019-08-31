<?php 

	return [
		[
			'display' => ' Module Access',
			'uniqkey' => 'module.access',
			'url' => null,
			'classId' => '',
			'className' => '',
			'classIcon' => '',
			/*
			|--------------------------------------------------------------------------
			| Property Permission
			|--------------------------------------------------------------------------
			|
			| This is option for accessing permission of module
			|
			*/
			'permissions' => [],
			/*
			|--------------------------------------------------------------------------
			| Property Submenu
			|--------------------------------------------------------------------------
			|
			| If this menu have submenu
			|
			*/
			'childs' => [
				[
					'display' => 'Assign Permissions',
					'uniqkey' => 'module.access.assign.permission',
					'url' => '/admin/roles',
					'classId' => '',
					'className' => '',
					'classIcon' => '',
					'permissions' => [
						[
							'uniqkey' => 'module.access.assign.permission.detail',
							'name' => 'Show detail role',
							'description' => 'Module for assign permission to any module'
						]

					]
				]
			]
		]	
	];