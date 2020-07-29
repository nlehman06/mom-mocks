@props(['title'])
<x-base>
   <x-slot name="title">
      {{ $title }}
   </x-slot>
   <div class="flex flex-col justify-center min-h-screen py-12 bg-gray-50 sm:px-6 lg:px-8">
      {{ $slot }}
   </div>
</x-base>