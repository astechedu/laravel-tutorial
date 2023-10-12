<x-layout>
    <x-slot name="title">PassData</x-slot>


@php
  $users = $users?? 'Data Not Found';
@endphp

    <x-passdata :users="$users">
    </x-passdata>

</x-layout>