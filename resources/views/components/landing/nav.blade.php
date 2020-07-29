<div class="transition ease-in-out fixed top-0 left-0 py-6 w-full px-4 z-50"
     :class="{'bg-white shadow-xl': scrolled, 'bg-transparent shadow-none': !scrolled}"
     x-show="loaded"
     x-transition:enter="duration-150 ease-out"
     x-transition:enter-start="transform scale-90"
     x-transition:enter-end="scale-100"
     x-transition:leave="duration-100 ease-in"
     x-transition:leave-start="transform scale-100"
     x-transition:leave-end="scale-95"
     x-data="{mobileMenu: false, scrolled: false, loaded: false}"
     x-init="scrolled = window.scrollY > 15; loaded = true;"
     x-cloak
     @scroll.window.debounce="window.scrollY > 15 ? scrolled = true : scrolled = false;">

   <nav class="relative flex items-center justify-between sm:h-10 lg:justify-start">
      <div class="flex items-center flex-grow flex-shrink-0 lg:flex-grow-0">
         <div class="flex items-center justify-between w-full md:w-auto">
            <a href="/" aria-label="Home">
               <x-logo class="h-12 w-auto text-coral-500">
                  <span class="text-bunker-500 text-xl uppercase" :class="{'hidden': !scrolled}">Momentum</span>
               </x-logo>
            </a>
            <div class="-mr-2 flex items-center md:hidden">
               <button type="button" @click="mobileMenu = true"
                       class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out"
                       id="main-menu" aria-label="Main menu" aria-haspopup="true">
                  <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                           d="M4 6h16M4 12h16M4 18h16" />
                  </svg>
               </button>
            </div>
         </div>
      </div>
      <div class="hidden md:block md:ml-10 md:pr-4">
         <x-landing.nav-dropdown name="Products">
            <a href="#"
               class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900"
               role="menuitem">Textiles</a>
            <a href="#"
               class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900"
               role="menuitem">Wallcovering</a>
            <a href="#"
               class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900"
               role="menuitem">Drapery</a>
            <a href="#"
               class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900"
               role="menuitem">Privacy Curtains</a>
         </x-landing.nav-dropdown>
         <x-landing.nav-dropdown name="Brands">
            <a href="#"
               class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900"
               role="menuitem">Sina Pearson</a>
            <a href="#"
               class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900"
               role="menuitem">Momentum Textiles</a>
            <a href="#"
               class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900"
               role="menuitem">LoomSource</a>
            <a href="#"
               class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900"
               role="menuitem">Source One</a>
            <a href="#"
               class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900"
               role="menuitem">Lanark</a>
            <a href="#"
               class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900"
               role="menuitem">Versa</a>
            <a href="#"
               class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900"
               role="menuitem">Tower</a>
            <a href="#"
               class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900"
               role="menuitem">Stacy Garcia</a>
            <a href="#"
               class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900"
               role="menuitem">Studio Source</a>
         </x-landing.nav-dropdown>
         <x-landing.nav-dropdown name="Company">
            <a href="#"
               class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900"
               role="menuitem">Who We Are</a>
            <a href="#"
               class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900"
               role="menuitem">News</a>
            <a href="#"
               class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900"
               role="menuitem">Awards</a>
         </x-landing.nav-dropdown>
         <a href="{{ route('login') }}"
            class="ml-8 font-medium text-coral-600 hover:text-coral-200 transition duration-150 ease-in-out">Log
            in</a>
      </div>
   </nav>
   <div class="absolute top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden"
        x-show="mobileMenu"
        @click.away="mobileMenu = false"
        x-cloak
        x-transition:enter="duration-150 ease-out"
        x-transition:enter-start="opacity-0 transform scale-90"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="duration-100 ease-in"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-95">
      <div class="rounded-lg shadow-md">
         <div class="rounded-lg bg-white shadow-xs overflow-hidden"
              role="menu"
              aria-orientation="vertical"
              aria-labelledby="main-menu">
            <div class="px-5 pt-4 flex items-center justify-between">
               <div>
                  <x-logo class="h-12 w-auto text-coral-500" />
               </div>
               <div class="-mr-2">
                  <button type="button" @click="mobileMenu = false"
                          class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out"
                          aria-label="Close menu">
                     <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M6 18L18 6M6 6l12 12" />
                     </svg>
                  </button>
               </div>
            </div>
            <div class="px-2 pt-2 pb-3">
               <a href="#"
                  class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition duration-150 ease-in-out"
                  role="menuitem">Products</a>
               <a href="#"
                  class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition duration-150 ease-in-out"
                  role="menuitem">Brands</a>
               <a href="#"
                  class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition duration-150 ease-in-out"
                  role="menuitem">Company</a>
            </div>
            <div>
               <a href="{{ route('login') }}"
                  class="block w-full px-5 py-3 text-center font-medium text-coral-600 bg-gray-50 hover:bg-gray-100 hover:text-coral-700 focus:outline-none focus:bg-gray-100 focus:text-coral-700 transition duration-150 ease-in-out"
                  role="menuitem">
                  Log in
               </a>
            </div>
         </div>
      </div>
   </div>
</div>