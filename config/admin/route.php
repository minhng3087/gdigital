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
        'products' => [
            'name' => 'products',
            'except' => $except,
            'multi_del' => true,
        ],

        'comments' => [
            'name' => 'comments',
            'except' => $except,
            'multi_del' => true,
        ],

        'contact' => [
            'name' => 'contact',
            'except' => $except,
            'multi_del' => true,
        ],
	];