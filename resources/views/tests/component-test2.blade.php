<x-tests.app>
    <x-slot name="header">header2</x-slot>
    test2
    <x-test-class-base classBaseMessage="属性メッセージ1" />

    <div class="mb-4"></div>

    <x-test-class-base classBaseMessage="属性メッセージ2" defaultMessage="初期値を上書き" class="bg-red-300" />
</x-tests.app>
