<section class="px-3 py-2" x-data="{showLinks: false}">
   <h3 class="text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition duration-150 ease-in-out" @click="showLinks = !showLinks">{{ $title }}</h3>
   <div class="hidden lg:flex flex-col" :class="{'hidden': !showLinks, 'flex': showLinks}">
      {{ $slot }}
   </div>
</section>