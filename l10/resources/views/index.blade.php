<x-layout>
    <x-slot name="title">Index</x-slot>

	<h1>Index View</h1>
	<div>This is index view.</div>


	<x-form.input type="text" name="username" value="" placeholder="Enter your Name" class=""/>

	<x-form.input type="email" name="email" value="" placeholder="Enter your Email" class="" />

	<x-form.input type="password" name="email" value="" placeholder="Enter your Password" class="" />

	<x-form.button class='form-control w-25 my-2 bg-info'>
		Register
	</x-form.button>


    <!-- Inline Component Alert: Class & View in Same file Alert.php -->
    <x-alert>
    	<p>Inline Component View</p>
    </x-alert>


    <!-- Passing Data To Components 01-->
    @php
    	$message = "Passing data to component";
    	$username = "Ajay Sisaudiya";
    	$names = ["ajay","sonu","geeta"];
    @endphp

    <x-passdata01 :message="$message" :username="$username" :names="$names">
    	<x-slot:heading>
    		Passing Data To Components 01
    	</x-slot:heading>
    </x-passdata01>


    <!-- Passing Data To Components 02-->

    <x-passdata02 color="primary">
    	<x-slot:heading>Passing data to component 02</x-slot>
    		<p>This is passing data to component.</p>
    </x-passdata02>

    <x-passdata02 color="danger">
    	<x-slot:heading>Passing data to component 02</x-slot>
    		<p>This is passing data to component.</p>
    </x-passdata02>
 
 

</x-layout>
