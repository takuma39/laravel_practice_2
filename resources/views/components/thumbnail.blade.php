@php
if ($type === 'shops') {
    $path = 'storage/shops/';
} elseif ($type === 'product') {
    $path = 'stroage/products';
}
@endphp

<div class="">
    @if (empty($filename))
        <img src="{{ asset('images/no_image.jpg') }}">
    @else
        <img src="{{ asset($path . $filename) }}">
    @endif
</div>
