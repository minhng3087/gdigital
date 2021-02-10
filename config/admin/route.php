<?php
	$except = ['show'];
    return [
        'brand' => [
            'name' => 'brand',
            'except' => $except,
            'multi_del' => false,
        ],
        'product-attributes' => [
            'name' => 'productAttributeTypes',
            'except' => $except,
            'multi_del' => true,
        ]
	];