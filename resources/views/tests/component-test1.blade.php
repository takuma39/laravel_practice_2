<x-tests.app>
    <x-slot name="header">header1</x-slot>
    test1
    <x-tests.card title="タイトル" content="本文" :message="$message" />

    <x-tests.card />

    <x-tests.card title="CSSを変更" class="bg-red-300" />
</x-tests.app>
