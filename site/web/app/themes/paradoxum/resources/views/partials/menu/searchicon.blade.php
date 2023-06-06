{{-- <button id="button-search" aria-label="Botão busca" type="button" data-collapse-toggle="mobile-menu-3"
    aria-controls="mobile-menu-3" aria-expanded="false"
    class="xl:hidden text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5 mr-1">
    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd"
            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
            clip-rule="evenodd"></path>
    </svg>
</button> --}}

<div class="flex flex-row gap-x-4">
    <form role="search" method="get" action="{{ home_url('/') }}" class="relative mx-auto w-max text-red-500">
        <label>
            <span class="sr-only">
                {{ _x('Busca:', 'label', 'sage') }}
            </span>
    
            <input value="{{ get_search_query() }}" name="s" type="search"
                class="peer cursor-pointer relative z-10 h-full w-12 bg-transparent pl-12 focus:rounded-lg focus:outline-none focus:w-full focus:cursor-text focus:border-pzred focus:pl-16 focus:pr-4" />
    
            <svg xmlns="http://www.w3.org/2000/svg"
                class="peer absolute inset-y-0 my-auto h-full w-14 border-r border-transparent stroke-pzred px-3.5 peer-focus:border-pzred peer-focus:stroke-pzred"
                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
    
        </label>
      </form>
    
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="peer fill-pzred h-full w-6">
        <path d="M0 3v18h24v-18h-24zm6.623 7.929l-4.623 5.712v-9.458l4.623 3.746zm-4.141-5.929h19.035l-9.517 7.713-9.518-7.713zm5.694 7.188l3.824 3.099 3.83-3.104 5.612 6.817h-18.779l5.513-6.812zm9.208-1.264l4.616-3.741v9.348l-4.616-5.607z" />
    </svg>
</div>


