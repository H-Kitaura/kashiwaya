<x-tests.app>
  <x-slot name="header">ヘッダー１</x-slot>
コンポーネントテスト１

 <x-tests.card title="タイトル" content="本文1" :message="$message"></x-tests.card>
 <x-tests.card title="タイトル2" />
 <x-tests.card title="cssを変更したい" class="bg-red-300" />
</x-tests.app>

