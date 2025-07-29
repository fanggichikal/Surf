<aside id="sidebar"
    class="fixed inset-y-0 left-0 w-64 bg-white shadow-xl z-50 transform -translate-x-full
                      lg:translate-x-0 transition-transform duration-300 ease-in-out
                      flex flex-col
                      lg:sticky lg:top-0 lg:h-screen"
    :class="{'translate-x-0': sidebarOpen, '-translate-x-full': !sidebarOpen}">

    <a href="#" class="flex items-center justify-center p-4 border-b border-gray-200">
        <img src="{{ asset('images/logo.jpeg') }}" alt="Logo" class="h-16 w-16 mr-2 rounded-full">
        <span class="text-xl font-semibold text-sky-700 hidden lg:block">Teampal Surf</span>
    </a>

    <div class="p-4 border-b border-gray-200">
        <div class="text-center text-lg font-bold text-sky-700">
            {{ Auth::user()->name }}
        </div>
    </div>

    <nav class="flex-grow p-4 overflow-y-auto">
        <ul class="space-y-2">
            <li>
                <a href="{{ route('dashboard') }}" class="flex items-center p-3 rounded-lg text-sky-700 hover:bg-gray-100 hover:text-sky-700 transition duration-150 ease-in-out active:bg-sky-100 active:text-sky-700 active:font-semibold">
                    <i class='bx bxs-dashboard text-xl mr-3'></i>
                    <span class="text">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.surflessons.index') }}" class="flex items-center p-3 rounded-lg text-sky-700 hover:bg-gray-100 hover:text-sky-700 transition duration-150 ease-in-out">
                    <i class='bx bxs-shopping-bag-alt text-xl mr-3'></i>
                    <span class="text">Surfing Lessons</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.categorylessons.index') }}" class="flex items-center p-3 rounded-lg text-sky-700 hover:bg-gray-100 hover:text-sky-700 transition duration-150 ease-in-out">
                    <i class='bx bxs-shopping-bag-alt text-xl mr-3'></i>
                    <span class="text">Category Lessons</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.categoryislands.index') }}" class="flex items-center p-3 rounded-lg text-sky-700 hover:bg-gray-100 hover:text-sky-700 transition duration-150 ease-in-out">
                    <i class='bx bxs-shopping-bag-alt text-xl mr-3'></i>
                    <span class="text">Category Island</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.surftrips.index') }}" class="flex items-center p-3 rounded-lg text-sky-700 hover:bg-gray-100 hover:text-sky-700 transition duration-150 ease-in-out">
                    <i class='bx bxs-doughnut-chart text-xl mr-3'></i>
                    <span class="text">Surfing Trips</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.contentmanagement.index') }}" class="flex items-center p-3 rounded-lg text-sky-700 hover:bg-gray-100 hover:text-sky-700 transition duration-150 ease-in-out">
                    <i class='bx bxs-message-dots text-xl mr-3'></i>
                    <span class="text">Content</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.reviews.index') }}" class="flex items-center p-3 rounded-lg text-sky-700 hover:bg-gray-100 hover:text-sky-700 transition duration-150 ease-in-out">
                    <i class='bx bxs-message-dots text-xl mr-3'></i>
                    <span class="text">Review</span>
                </a>
            </li>
        </ul>
    </nav>

    <div class="p-4 border-t border-gray-200 mt-auto">
        <ul class="space-y-2">
            <li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a href="#"
                        class="flex items-center p-3 rounded-lg text-sky-700 hover:bg-red-100 hover:text-red-700 transition duration-150 ease-in-out"
                        onclick="event.preventDefault(); this.closest('form').submit();">
                        <i class='bx bxs-log-out-circle text-xl mr-3'></i>
                        <span class="text">Log Out</span>
                    </a>
                </form>
            </li>
        </ul>
    </div>
</aside>