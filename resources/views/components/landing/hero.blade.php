<link rel="preload" href="/images/momentum-hero-pattern-lg.jpg" as="image">
<link rel="preload" href="/images/loomsource-hero-pattern-lg.jpg" as="image">
<link rel="preload" href="/images/wallcovering-hero-pattern-lg.jpg" as="image">

<div class="relative bg-bunker-500 overflow-hidden min-h-3xl"
     x-data="loadData()"
     x-init="startHeroLoop()">
   <div class="hidden lg:block absolute scroll-bg"
        :style="'transition: background-image 0.8s ease-in-out; -webkit-transition: background-image 0.8s ease-in-out; height: 400%; width: 400%; top: -25%; left: -100%; background-size: 800px auto; background-image: url(' + heroPatterns[currentHero] + ');'">
   </div>
   <div
        class="relative min-h-3xl lg:min-w-3xl xl:min-w-4xl lg:flex lg:items-center lg:justify-center lg:w-3/5 lg:pr-8 bg-no-repeat"
        style="background-image: url('/images/angled-background.svg'); background-size: 100% auto; background-position: -5px -5px">
      <div class="flex flex-col justify-center min-h-3xl">
         <main class="mt-28 lg:mt-0 mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
            <div class="text-center lg:text-left">
               <h2
                   class="text-4xl tracking-tight leading-10 font-thin text-white sm:text-5xl sm:leading-none md:text-6xl uppercase">
                  Momentum
                  <br class="xl:hidden">
                  <span class="font-bold text-coral-600 text-lg tracking-wide md:-mt-3">Textiles &
                     Wallcovering</span>
               </h2>
               <p
                  class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                  Textiles & wallcovering that inspire and equip our customers to execute great work.
               </p>
               <div
                    class="mt-3 flex flex-col sm:flex-row sm:flex-wrap items-center sm:items-baseline text-base text-gray-500 sm:space-x-8 space-y-3">
                  <div @mouseenter="hoverBrand(0)"
                       @mouseleave="startHeroLoop()"
                       :class="{'border-b border-bunker-200 text-bunker-200': currentHero == 0}">Sina Pearson</div>
                  <div @mouseenter="hoverBrand(1)"
                       @mouseleave="startHeroLoop()"
                       :class="{'border-b border-bunker-200 text-bunker-200': currentHero == 1}">Momentum Textiles
                  </div>
                  <div @mouseenter="hoverBrand(2)"
                       @mouseleave="startHeroLoop()"
                       :class="{'border-b border-bunker-200 text-bunker-200': currentHero == 2}">LoomSource</div>
                  <div @mouseenter="hoverBrand(3)"
                       @mouseleave="startHeroLoop()"
                       :class="{'border-b border-bunker-200 text-bunker-200': currentHero == 3}">Wallcovering</div>
               </div>
               <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                  <div class="rounded-full shadow">
                     <a href="#"
                        class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-full text-white bg-gradient-r-coral hover:bg-gradient-l-coral focus:outline-none focus:border-coral-700 focus:shadow-outline-coral transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">
                        Browse Products
                     </a>
                  </div>
               </div>
            </div>
         </main>

         <div class="mt-8 sm:mt-12 relative h-64 overflow-hidden bg-bunker-500 lg:hidden">
            <div class="absolute scroll-bg"
                 :style="'transition: background-image 0.8s ease-in-out; -webkit-transition: background-image 0.8s ease-in-out; height: 800%; width: 400%; top: -100%; left: -100%; background-size: 400px auto; background-image: url(' + heroPatterns[currentHero] + ');'">
            </div>
         </div>
      </div>
   </div>
</div>

<style>
   .scroll-bg {
      -webkit-animation-name: scrollLarge;
      animation-name: scrollLarge;
      -webkit-animation-duration: 35s;
      animation-duration: 35s;
      -webkit-animation-timing-function: linear;
      animation-timing-function: linear;
      -webkit-animation-iteration-count: infinite;
      animation-iteration-count: infinite;
   }

   @keyframes scrollLarge {
      0% {
         transform: rotate(-13deg) translateY(0);
      }

      100% {
         transform: rotate(-13deg) translateY(-1278px);
      }
   }
</style>

<script>
   function loadData() {
         return {
            currentHero: 0,
            timeoutId: null,
            heroPatterns: [
               '/images/sina-hero-pattern-lg.jpg',
               '/images/momentum-hero-pattern-lg.jpg',
               '/images/loomsource-hero-pattern-lg.jpg',
               '/images/wallcovering-hero-pattern-lg.jpg',
            ],
            incrementHero: function () {
               if(this.currentHero >= this.heroPatterns.length - 1) {
                  this.changeHero(0);
                  return;
               }
               this.changeHero(this.currentHero + 1);
               return;
            },
            changeHero: function(index) {
               this.currentHero = index;
               return;
            },
            startHeroLoop: function() {
               this.timeoutId = setInterval(() => this.incrementHero(), 10000);
            },
            hoverBrand: function(brand) {
               clearInterval(this.timeoutId);
               this.changeHero(brand);
            },
         }
      }
</script>