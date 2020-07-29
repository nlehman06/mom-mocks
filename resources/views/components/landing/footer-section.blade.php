<section class="mb-8" x-data="{showLinks: false}">
   <h3 class="text-sm font-semibold" @click="showLinks = !showLinks">{{ $title }}</h3>
   <div class="hidden lg:flex flex-col" :class="{'hidden': !showLinks, 'flex': showLinks}">
      {{ $slot }}
   </div>
</section>