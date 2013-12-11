@if ($product)
	<div class="recipe--product">
		<a href="{{ $product->getUrl() }}">
			{{ $product->getMainImage('thumbnail') }}
			{{ trans('laravel-food::messages.recipes.details.view_product', array('product' => $product->name)) }}
		</a>
	</div>
@endif