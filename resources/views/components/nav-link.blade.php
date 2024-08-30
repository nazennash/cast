@props(['active' => false, 'type' => 'a'])

@if($type == 'a')
<a class = "{{ $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} block px-3 py-2 rounded-md text-base font-medium rounded-md"
aria-current = "{{$active ? 'page':'false'}}"
{{ $attributes }}
>{{ $slot }}</a>
@elseif ($type == 'button')
<button class = "{{ $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} block px-3 py-2 rounded-md text-base font-medium rounded-md"
aria-current = "{{$active ? 'page':'false'}}"
{{ $attributes }}
>{{ $slot }}</button>
@else
<p class = "{{ $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} block px-3 py-2 rounded-md text-base font-medium rounded-md"
aria-current = "{{$active ? 'page':'false'}}"
{{ $attributes }}
>{{ $slot }}</p>
@endif