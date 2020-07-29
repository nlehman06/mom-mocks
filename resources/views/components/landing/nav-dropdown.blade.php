@props(['name'])

<div class="relative inline-block text-left" x-data="{ showDropdown: false }">
   <div>
      <span class="rounded-md">
         <button type="button"
                 @click="showDropdown = true"
                 class="inline-flex justify-center w-full rounded-md px-4 py-2 leading-5 font-medium text-gray-500 hover:text-gray-200 focus:outline-none focus:shadow-outline active:text-gray-200 transition ease-in-out duration-150"
                 id="options-menu" aria-haspopup="true" aria-expanded="true">
            {{ $name }}
         </button>
      </span>
   </div>
   <div x-show="showDropdown"
        @click.away="showDropdown = false"
        x-transition:enter="transition ease-out duration-100"
        x-transition:enter-start="transform opacity-0 scale-95"
        x-transition:enter-end="transition ease-out duration-100"
        x-transition:leave="transition ease-in duration-75"
        x-transition:leave-start="transform opacity-100 scale-100"
        x-transition:leave-end="transform opacity-0 scale-95"
        class="origin-top-left absolute left-0 mt-2 w-56 rounded-md shadow-lg">
      <div class="rounded-md bg-white shadow-xs">
         <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
            {{ $slot }}
         </div>
      </div>
   </div>
</div>