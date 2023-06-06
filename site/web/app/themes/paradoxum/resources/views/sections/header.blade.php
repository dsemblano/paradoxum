<header class="banner w-full h-full bg-transparent z-50 py-2 pt-4 border-b border-gray-200">
  @if (has_nav_menu('primary_navigation'))
  <nav class="nav-primary h-full pb-4 xl:border-gray-200 xl:border-b xl:border-solid">
    <div class="container">
      {{-- @include('partials/voicesearch') --}}

        {{-- mobile --}}
        <div id="mobile-menu" class="flex flex-row xl:hidden justify-between">
          
          <picture class="logos-header order-1 lg:hidden w-36 h-full">
            @include('partials/logo')        
          </picture>

          <div class="order-2">
            @include('partials/menu.sandwichicon')
          </div>

        </div>

        {{-- mobile menu revealed --}}
        <div id="mobile-menu-toggle" class="hidden">
          <div class="order-2">
            @include('partials/menu.searchicon')
          </div>
          {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'container_id' => 'menu-principal-mobile', 'container_class' => 'menu', 'container_aria_label' => "Mobile Primary Menu", 'menu_class' => 'menu mt-4 grid grid-cols-2 gap-3 lg:flex lg:flex-col lg:py-4 text-ihcor lg:w-full justify-evenly
          xl:flex-row xl:mt-0 nav text-base relative' ]) !!}
        </div>
        {{-- END mobile --}}
        
        {{-- desktop --}}
        <div class="hidden justify-between items-center w-full order-4 xl:flex">

          <div class="order-1 flex fle-row gap-x-4">
            <picture class="logos-header hidden xl:block xl:order-1">
              @include('partials/logo')        
            </picture>
  
            {{-- menu desktop --}}
            {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'container_id' => 'menu-principal-desktop', 'container_class' => 'order-1 menu', 'container_aria_label' => "Desktop Primary Menu", 'menu_class' => 'menu mt-4 grid grid-cols-2 gap-3 lg:flex lg:flex-col lg:py-4 text-ihcor lg:w-full justify-evenly
            xl:flex-row xl:mt-0 no-underline text-base xl:order-2' ]) !!}
  
          </div>

          {{-- busca desktop --}}
          <div class="hidden xl:block xl:order-3">
            @include('partials/menu.searchicon')
          </div>
          {{-- END desktop --}}
          
          
  
      </nav>
      
      {{-- search icon desktop --}}
      {{-- <div class="hidden xl:block mt-3 container">
        desktop
        <div class="flex flex-row justify-end">
          <div id="mobile-menu-3" class="relative">
            {{-- @include('partials/menu.inputsearch') --}}
          {{-- </div>
        </div>
      </div>  --}}
      {{-- END search icon desktop --}}

    </div>
  @endif
</header>
