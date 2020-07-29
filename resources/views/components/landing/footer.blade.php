<div class="bg-bunker-500 px-8 py-24 text-white">
   <div class="flex flex-col">
      <div class="flex flex-col xl:flex-row justify-around">
         {{-- Subscribe --}}
         <div class="w-full xl:w-80 flex flex-col">
            <div>
               <span class="text-xl font-semibold">Join over 10,000 other businesses</span>
               <span class="text-xl"> and stay on top of our newest products</span>
            </div>
            <form class="mt-8 relative w-full lg:max-w-md">
               <input placeholder="Email"
                      class="bg-bunker-450 border border-bunker-400 py-2 px-4 rounded-full w-full focus:outline-none focus:shadow-outline"
                      name="subscribeEmail">
               <button
                       class="w-full lg:w-auto mt-4 lg:mt-0 lg:absolute lg:top-0 lg:right-0 bg-coral-500 px-4 py-2 rounded-full inline-flex items-center justify-center border border-transparent text-base leading-6 font-medium hover:bg-coral-400 focus:outline-none focus:shadow-outline transition duration-150 ease-in-out">Subscribe</button>
            </form>
         </div>
         {{-- Site map --}}
         <div class="grid grid-flow-col grid-rows-2 lg:grid-rows-1 lg:h-80 max-w-7xl mt-16 w-full xl:ml-12 xl:mt-0">
            <x-landing.footer-section title="Products">
               <a href="#" class="lg:block mt-2 text-bunker-400 text-sm hover:text-bunker-300">Textiles</a>
               <a href="#" class="lg:block mt-2 text-bunker-400 text-sm hover:text-bunker-300">Wallcovering</a>
               <a href="#" class="lg:block mt-2 text-bunker-400 text-sm hover:text-bunker-300">Privacy Curtain</a>
               <a href="#" class="lg:block mt-2 text-bunker-400 text-sm hover:text-bunker-300">Drapery</a>
            </x-landing.footer-section>
            <x-landing.footer-section title="Brands">
                  <a href="#" class="mt-2 text-bunker-400 text-sm hover:text-bunker-300">Sina Pearson</a>
                  <a href="#" class="mt-2 text-bunker-400 text-sm hover:text-bunker-300">Momentum Textiles</a>
                  <a href="#" class="mt-2 text-bunker-400 text-sm hover:text-bunker-300">LoomSource</a>
                  <a href="#" class="mt-2 text-bunker-400 text-sm hover:text-bunker-300">Source One</a>
                  <a href="#" class="mt-2 text-bunker-400 text-sm hover:text-bunker-300">Lanark</a>
                  <a href="#" class="mt-2 text-bunker-400 text-sm hover:text-bunker-300">Versa</a>
                  <a href="#" class="mt-2 text-bunker-400 text-sm hover:text-bunker-300">Tower</a>
                  <a href="#" class="mt-2 text-bunker-400 text-sm hover:text-bunker-300">Stacy Garcia</a>
                  <a href="#" class="mt-2 text-bunker-400 text-sm hover:text-bunker-300">Studio Source</a>
            </x-landing.footer-section>
            <x-landing.footer-section title="Company">
                  <a href="#" class="mt-2 text-bunker-400 text-sm hover:text-bunker-300">Who we are</a>
                  <a href="#" class="mt-2 text-bunker-400 text-sm hover:text-bunker-300">News</a>
                  <a href="#" class="mt-2 text-bunker-400 text-sm hover:text-bunker-300">Awards</a>
                  <a href="#" class="mt-2 text-bunker-400 text-sm hover:text-bunker-300">Careers</a>
            </x-landing.footer-section>
            <x-landing.footer-section title="Resources">
                  <a href="#" class="mt-2 text-bunker-400 text-sm hover:text-bunker-300">FAQ</a>
                  <a href="#" class="mt-2 text-bunker-400 text-sm hover:text-bunker-300">Support</a>
                  <a href="#" class="mt-2 text-bunker-400 text-sm hover:text-bunker-300">Contact Us</a>
                  <a href="#" class="mt-2 text-bunker-400 text-sm hover:text-bunker-300">Return Samples</a>
            </x-landing.footer-section>
         </div>
      </div>
      {{-- Bottom Footer --}}
      <div class="mt-8 md:mt-15 md:flex md:justify-between md:items-center">
         <div>
            <x-logo class="h-12 w-auto text-coral-500">
               <span class="uppercase text-lg text-white">Momentum</span>
            </x-logo>
         </div>
         <div class="mt-4 md:mt-0 flex space-x-4">
            <a href="#" class="text-xs text-bunker-400 hover:text-bunker-300">Terms of service</a>
            <a href="#" class="text-xs text-bunker-400 hover:text-bunker-300">Privacy Policy</a>
            <a href="#" class="text-xs text-bunker-400 hover:text-bunker-300">Cookie Policy</a>
         </div>
         <div class="mt-4 md:mt-0 text-xs text-bunker-400">&copy; Momentum {{ date('Y') }}</div>
      </div>
   </div>
</div>