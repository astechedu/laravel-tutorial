<x-layout>
    <x-slot name="title">PassData</x-slot>


@php
  $users = $users?? 'Data Not Found';
@endphp

    <x-passdata :users="$users">
    </x-passdata>






    <x-form.button02>
        Button01
    </x-form.button02>



</x-layout>

