<div class="flex absolute inset-y-0 left-0 items-center pl-4 pointer-events-none">
    <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd"
            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
            clip-rule="evenodd">
        </path>
    </svg>
</div>
<form role="search" method="get" class="search-form" action="{{ home_url('/') }}">
    <label>
        <span class="sr-only">
            {{ _x('Busca:', 'label', 'sage') }}
        </span>

        <input type="search" class="searchbar rounded-lg block pl-10 w-full text-gray-900 bg-gray-50  border border-gray-300 sm:text-sm focus:ring-ihcat focus:border-ihcat dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-ihcor dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="{!! esc_attr_x('Busca:', 'placeholder', 'sage') !!}" value="{{ get_search_query() }}"
            name="s">
    </label>
</form>