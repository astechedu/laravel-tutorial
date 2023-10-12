@props([
  'heading',
  'footer',
])

<div {{ $attributes->class(['border'])}} >

  <h1 {{ $heading->$attributes->class(['border'])}}>
      {{ $heading }}
  </h1>

  {{ $slot }}

  <footer {{ $footer->$attributes->class(['border'])}}>
      {{ $footer }}
  </footer>
  }
</div>