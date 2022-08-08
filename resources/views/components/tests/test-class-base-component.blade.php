<div {{ $attributes->merge([
    'class' => 'border-2 shadow-md w-1/4 p-2'
    ]) }}>
    <!-- The whole future lies in uncertainty: live immediately. - Seneca -->

    クラスベースのcomponent
    <div>{{ $classBaseMessage }}</div>
    <div>{{ $defaultMessage }}</div>
</div>
