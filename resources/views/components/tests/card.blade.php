@props([
'title' => 'title初期値',
'content' => 'content初期値',
'message' => 'message初期値',
])

<div {{ $attributes->merge([
    'class' => 'border-2 shadow-md w-1/4 p-2'
    ]) }}>
    <div>{{ $title}}</div>
    <div>画像</div>
    <div>{{ $content}}</div>
    <div>{{ $message}}</div>
</div>
