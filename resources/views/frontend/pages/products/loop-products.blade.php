<?php $content = json_decode($data); ?>
@if (count($data))
	@foreach ($data as $id => $item)
		<div class="{{ !empty($class) ? $class : 'col-md-4' }}">
			@component('frontend.components.product', ['item'=> $item])
			@endcomponent
		</div>
	@endforeach
@endif