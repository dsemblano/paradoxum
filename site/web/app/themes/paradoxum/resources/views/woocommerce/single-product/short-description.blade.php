
 {{-- * Single product short description
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/short-description.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.3.0 --}}


 @php
  defined( 'ABSPATH' ) || exit;
  global $post;
@endphp

@php
$short_description = apply_filters( 'woocommerce_short_description', $post->post_excerpt );
@endphp

@if ( ! $short_description )
	return;
@endif

<div class="woocommerce-product-details__short-description">
	<x-autornome class="autor my-4 text-gray-400 text-2xl" />
	<?php echo $short_description; // WPCS: XSS ok. ?>

	{{-- @include('partials/woosnippets.fichatecnica') --}}
	<x-fichatecnica id="ficha-tecnica" class="mt-8" />
</div>
