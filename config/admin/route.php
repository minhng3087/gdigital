<?php
	$except = ['show'];
    return [
        'brand' => [
            'name' => 'brand',
            'except' => $except,
            'multi_del' => false,
        ],
        'productAttributeTypes' => [
            'name' => 'product-attributes',
            'except' => $except,
            'multi_del' => true,
        ],
        'filter' => [
            'name' => 'filter',
            'except' => $except,
            'multi_del' => true,
        ],
	];