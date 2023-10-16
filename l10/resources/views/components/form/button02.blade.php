<div class="form-group">
<h1>Button02 Component</h1>

    <button {{ $attributes->merge(['type' => 'button']) }}>

        {{ $slot }}

    </button>
   
</div>