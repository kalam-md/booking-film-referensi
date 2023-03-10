<!-- Off-canvas menu for mobile, show/hide based on off-canvas menu state. -->
<div x-transition:enter="transition ease-in-out duration-300 transform"
x-transition:enter-start="-translate-x-full"
x-transition:enter-end="translate-x-0"
x-transition:leave="transition ease-in-out duration-300 transform"
x-transition:leave-start="translate-x-0"
x-transition:leave-end="-translate-x-full" x-show="open" class="fixed inset-0 flex z-40 lg:hidden" role="dialog" aria-modal="true">
  <div class="fixed inset-0 bg-gray-600 bg-opacity-75" aria-hidden="true"></div>
  <div class="relative flex-1 flex flex-col max-w-xs w-full pt-5 pb-4 bg-white">
    <div class="absolute top-0 right-0 -mr-12 pt-2">
      <button type="button" @click="open = false"
        class="ml-1 flex items-center justify-center h-10 w-10 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
        <span class="sr-only">Close sidebar</span>
        <!-- Heroicon name: outline/x -->
        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
          stroke="currentColor" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
      </button>
    </div>

    <div class="flex-shrink-0 flex items-center px-4">
      <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-logo-purple-500-mark-gray-700-text.svg"
        alt="Workflow">
    </div>
    <div class="mt-5 flex-1 h-0 overflow-y-auto">
      <nav class="px-2">
        <div class="space-y-1">
          <a href="{{ route('dashboard-admin') }}"
          class="{{ Route::is('dashboard-admin') ? 'bg-gray-200 text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md' : 'text-gray-700 hover:text-gray-900 hover:bg-gray-50 group flex items-center px-2 py-2 text-sm font-medium rounded-md' }}">
          <svg class="{{ Route::is('dashboard-admin') ? 'text-gray-500 mr-3 flex-shrink-0 h-6 w-6' : 'text-gray-400 group-hover:text-gray-500 mr-3 flex-shrink-0 h-6 w-6' }}" xmlns="http://www.w3.org/2000/svg" fill="none"
            viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
          </svg>
          Home
        </a>

        <a href="{{ route('categories.index') }}"
          class="{{ Route::is('categories.index') ? 'bg-gray-200 text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md' : 'text-gray-700 hover:text-gray-900 hover:bg-gray-50 group flex items-center px-2 py-2 text-sm font-medium rounded-md' }}">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="{{ Route::is('categories.index') ? 'text-gray-500 mr-3 flex-shrink-0 h-6 w-6' : 'text-gray-400 group-hover:text-gray-500 mr-3 flex-shrink-0 h-6 w-6' }}">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M3.75 12h16.5m-16.5 3.75h16.5M3.75 19.5h16.5M5.625 4.5h12.75a1.875 1.875 0 010 3.75H5.625a1.875 1.875 0 010-3.75z" />
          </svg>

          Categories
        </a>

        <a href="{{ route('studios.index') }}"
          class="{{ Route::is('studios.index') ? 'bg-gray-200 text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md' : 'text-gray-700 hover:text-gray-900 hover:bg-gray-50 group flex items-center px-2 py-2 text-sm font-medium rounded-md' }}">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="{{ Route::is('studios.index') ? 'text-gray-500 mr-3 flex-shrink-0 h-6 w-6' : 'text-gray-400 group-hover:text-gray-500 mr-3 flex-shrink-0 h-6 w-6' }}">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M3.75 21h16.5M4.5 3h15M5.25 3v18m13.5-18v18M9 6.75h1.5m-1.5 3h1.5m-1.5 3h1.5m3-6H15m-1.5 3H15m-1.5 3H15M9 21v-3.375c0-.621.504-1.125 1.125-1.125h3.75c.621 0 1.125.504 1.125 1.125V21" />
          </svg>

          Studios
        </a>

        <a href="{{ route('movies.index') }}"
          class="{{ Route::is('movies.index') ? 'bg-gray-200 text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md' : 'text-gray-700 hover:text-gray-900 hover:bg-gray-50 group flex items-center px-2 py-2 text-sm font-medium rounded-md' }}">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="{{ Route::is('movies.index') ? 'text-gray-500 mr-3 flex-shrink-0 h-6 w-6' : 'text-gray-400 group-hover:text-gray-500 mr-3 flex-shrink-0 h-6 w-6' }}">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M3.375 19.5h17.25m-17.25 0a1.125 1.125 0 01-1.125-1.125M3.375 19.5h1.5C5.496 19.5 6 18.996 6 18.375m-3.75 0V5.625m0 12.75v-1.5c0-.621.504-1.125 1.125-1.125m18.375 2.625V5.625m0 12.75c0 .621-.504 1.125-1.125 1.125m1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125m0 3.75h-1.5A1.125 1.125 0 0118 18.375M20.625 4.5H3.375m17.25 0c.621 0 1.125.504 1.125 1.125M20.625 4.5h-1.5C18.504 4.5 18 5.004 18 5.625m3.75 0v1.5c0 .621-.504 1.125-1.125 1.125M3.375 4.5c-.621 0-1.125.504-1.125 1.125M3.375 4.5h1.5C5.496 4.5 6 5.004 6 5.625m-3.75 0v1.5c0 .621.504 1.125 1.125 1.125m0 0h1.5m-1.5 0c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125m1.5-3.75C5.496 8.25 6 7.746 6 7.125v-1.5M4.875 8.25C5.496 8.25 6 8.754 6 9.375v1.5m0-5.25v5.25m0-5.25C6 5.004 6.504 4.5 7.125 4.5h9.75c.621 0 1.125.504 1.125 1.125m1.125 2.625h1.5m-1.5 0A1.125 1.125 0 0118 7.125v-1.5m1.125 2.625c-.621 0-1.125.504-1.125 1.125v1.5m2.625-2.625c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125M18 5.625v5.25M7.125 12h9.75m-9.75 0A1.125 1.125 0 016 10.875M7.125 12C6.504 12 6 12.504 6 13.125m0-2.25C6 11.496 5.496 12 4.875 12M18 10.875c0 .621-.504 1.125-1.125 1.125M18 10.875c0 .621.504 1.125 1.125 1.125m-2.25 0c.621 0 1.125.504 1.125 1.125m-12 5.25v-5.25m0 5.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125m-12 0v-1.5c0-.621-.504-1.125-1.125-1.125M18 18.375v-5.25m0 5.25v-1.5c0-.621.504-1.125 1.125-1.125M18 13.125v1.5c0 .621.504 1.125 1.125 1.125M18 13.125c0-.621.504-1.125 1.125-1.125M6 13.125v1.5c0 .621-.504 1.125-1.125 1.125M6 13.125C6 12.504 5.496 12 4.875 12m-1.5 0h1.5m-1.5 0c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125M19.125 12h1.5m0 0c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125m-17.25 0h1.5m14.25 0h1.5" />
          </svg>

          Movies
        </a>

        <a href="{{ route('schedule-movies.index') }}"
          class="{{ Route::is('schedule-movies.index') ? 'bg-gray-200 text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md' : 'text-gray-700 hover:text-gray-900 hover:bg-gray-50 group flex items-center px-2 py-2 text-sm font-medium rounded-md' }}">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="{{ Route::is('schedule-movies.index') ? 'text-gray-500 mr-3 flex-shrink-0 h-6 w-6' : 'text-gray-400 group-hover:text-gray-500 mr-3 flex-shrink-0 h-6 w-6' }}">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
          </svg>
          

          Schedule Movies
        </a>
        </div>
      </nav>
    </div>
  </div>

  <div class="flex-shrink-0 w-14" aria-hidden="true">
    <!-- Dummy element to force sidebar to shrink to fit close icon -->
  </div>
</div>

<!-- Static sidebar for desktop -->
<div
  class="hidden lg:flex lg:flex-col lg:w-64 lg:fixed lg:inset-y-0 lg:border-r lg:border-gray-200 lg:pt-5 lg:pb-4 lg:bg-gray-100">
  <div class="flex items-center flex-shrink-0 px-6">
    <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-logo-purple-500-mark-gray-700-text.svg"
      alt="Workflow">
  </div>
  <!-- Sidebar component, swap this element with another sidebar if you like -->
  <div class="mt-6 h-0 flex-1 flex flex-col overflow-y-auto">

    <!-- Navigation -->
    <nav class="px-3 mt-5">
      <div class="space-y-1">
        <a href="{{ route('dashboard-admin') }}"
          class="{{ Route::is('dashboard-admin') ? 'bg-gray-200 text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md' : 'text-gray-700 hover:text-gray-900 hover:bg-gray-50 group flex items-center px-2 py-2 text-sm font-medium rounded-md' }}">
          <svg class="{{ Route::is('dashboard-admin') ? 'text-gray-500 mr-3 flex-shrink-0 h-6 w-6' : 'text-gray-400 group-hover:text-gray-500 mr-3 flex-shrink-0 h-6 w-6' }}" xmlns="http://www.w3.org/2000/svg" fill="none"
            viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
          </svg>
          Home
        </a>

        <a href="{{ route('categories.index') }}"
          class="{{ Route::is('categories.index') ? 'bg-gray-200 text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md' : 'text-gray-700 hover:text-gray-900 hover:bg-gray-50 group flex items-center px-2 py-2 text-sm font-medium rounded-md' }}">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="{{ Route::is('categories.index') ? 'text-gray-500 mr-3 flex-shrink-0 h-6 w-6' : 'text-gray-400 group-hover:text-gray-500 mr-3 flex-shrink-0 h-6 w-6' }}">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M3.75 12h16.5m-16.5 3.75h16.5M3.75 19.5h16.5M5.625 4.5h12.75a1.875 1.875 0 010 3.75H5.625a1.875 1.875 0 010-3.75z" />
          </svg>

          Categories
        </a>

        <a href="{{ route('studios.index') }}"
          class="{{ Route::is('studios.index') ? 'bg-gray-200 text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md' : 'text-gray-700 hover:text-gray-900 hover:bg-gray-50 group flex items-center px-2 py-2 text-sm font-medium rounded-md' }}">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="{{ Route::is('studios.index') ? 'text-gray-500 mr-3 flex-shrink-0 h-6 w-6' : 'text-gray-400 group-hover:text-gray-500 mr-3 flex-shrink-0 h-6 w-6' }}">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M3.75 21h16.5M4.5 3h15M5.25 3v18m13.5-18v18M9 6.75h1.5m-1.5 3h1.5m-1.5 3h1.5m3-6H15m-1.5 3H15m-1.5 3H15M9 21v-3.375c0-.621.504-1.125 1.125-1.125h3.75c.621 0 1.125.504 1.125 1.125V21" />
          </svg>

          Studios
        </a>

        <a href="{{ route('movies.index') }}"
          class="{{ Route::is('movies.index') ? 'bg-gray-200 text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md' : 'text-gray-700 hover:text-gray-900 hover:bg-gray-50 group flex items-center px-2 py-2 text-sm font-medium rounded-md' }}">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="{{ Route::is('movies.index') ? 'text-gray-500 mr-3 flex-shrink-0 h-6 w-6' : 'text-gray-400 group-hover:text-gray-500 mr-3 flex-shrink-0 h-6 w-6' }}">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M3.375 19.5h17.25m-17.25 0a1.125 1.125 0 01-1.125-1.125M3.375 19.5h1.5C5.496 19.5 6 18.996 6 18.375m-3.75 0V5.625m0 12.75v-1.5c0-.621.504-1.125 1.125-1.125m18.375 2.625V5.625m0 12.75c0 .621-.504 1.125-1.125 1.125m1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125m0 3.75h-1.5A1.125 1.125 0 0118 18.375M20.625 4.5H3.375m17.25 0c.621 0 1.125.504 1.125 1.125M20.625 4.5h-1.5C18.504 4.5 18 5.004 18 5.625m3.75 0v1.5c0 .621-.504 1.125-1.125 1.125M3.375 4.5c-.621 0-1.125.504-1.125 1.125M3.375 4.5h1.5C5.496 4.5 6 5.004 6 5.625m-3.75 0v1.5c0 .621.504 1.125 1.125 1.125m0 0h1.5m-1.5 0c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125m1.5-3.75C5.496 8.25 6 7.746 6 7.125v-1.5M4.875 8.25C5.496 8.25 6 8.754 6 9.375v1.5m0-5.25v5.25m0-5.25C6 5.004 6.504 4.5 7.125 4.5h9.75c.621 0 1.125.504 1.125 1.125m1.125 2.625h1.5m-1.5 0A1.125 1.125 0 0118 7.125v-1.5m1.125 2.625c-.621 0-1.125.504-1.125 1.125v1.5m2.625-2.625c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125M18 5.625v5.25M7.125 12h9.75m-9.75 0A1.125 1.125 0 016 10.875M7.125 12C6.504 12 6 12.504 6 13.125m0-2.25C6 11.496 5.496 12 4.875 12M18 10.875c0 .621-.504 1.125-1.125 1.125M18 10.875c0 .621.504 1.125 1.125 1.125m-2.25 0c.621 0 1.125.504 1.125 1.125m-12 5.25v-5.25m0 5.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125m-12 0v-1.5c0-.621-.504-1.125-1.125-1.125M18 18.375v-5.25m0 5.25v-1.5c0-.621.504-1.125 1.125-1.125M18 13.125v1.5c0 .621.504 1.125 1.125 1.125M18 13.125c0-.621.504-1.125 1.125-1.125M6 13.125v1.5c0 .621-.504 1.125-1.125 1.125M6 13.125C6 12.504 5.496 12 4.875 12m-1.5 0h1.5m-1.5 0c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125M19.125 12h1.5m0 0c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125m-17.25 0h1.5m14.25 0h1.5" />
          </svg>

          Movies
        </a>

        <a href="{{ route('schedule-movies.index') }}"
          class="{{ Route::is('schedule-movies.index') ? 'bg-gray-200 text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md' : 'text-gray-700 hover:text-gray-900 hover:bg-gray-50 group flex items-center px-2 py-2 text-sm font-medium rounded-md' }}">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="{{ Route::is('schedule-movies.index') ? 'text-gray-500 mr-3 flex-shrink-0 h-6 w-6' : 'text-gray-400 group-hover:text-gray-500 mr-3 flex-shrink-0 h-6 w-6' }}">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
          </svg>
          

          Schedule Movies
        </a>
      </div>
    </nav>
  </div>
</div>