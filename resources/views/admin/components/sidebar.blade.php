<!-- start sidebar -->
<div id="sideBar"
class="relative flex flex-col flex-wrap bg-white border-r border-gray-300 p-6 flex-none w-64 md:-ml-64 md:fixed md:top-0 md:z-30 md:h-screen md:shadow-xl animated faster">


<!-- sidebar content -->
<div class="flex flex-col">

    <!-- sidebar toggle -->
    <div class="text-right hidden md:block mb-4">
        <button id="sideBarHideBtn">
            <i class="fad fa-times-circle"></i>
        </button>
    </div>
    <!-- end sidebar toggle -->

    <p class="uppercase text-xs text-gray-600 mb-4 tracking-wider">homes</p>

    <!-- link -->
    <a href=" {{  route('dashboard') }}"
        class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500 {{ request()->routeIs('dashboard') ? 'text-teal-600'  : '' }}">
        <i class="fas fa-user text-xs mr-2"></i>
        User dashboard
    </a>
    <!-- end link -->


    <p class="uppercase text-xs text-gray-600 mb-4 mt-4 tracking-wider">Activity</p>

    <!-- link -->
    <a href="#"
        class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
        <i class="fas fa-tasks text-xs mr-2"></i>
        View Activity
    </a>
    <!-- end link -->



    <p class="uppercase text-xs text-gray-600 mb-4 mt-4 tracking-wider">Media</p>

    <!-- link -->
    <a href="#"
        class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
        <i class="fad fa-cogs text-xs mr-2"></i>
        View Media
    </a>
    <!-- end link -->


    <p class="uppercase text-xs text-gray-600 mb-4 mt-4 tracking-wider">Problems</p>

    <!-- link -->
    <a href="{{ route('problems.index') }}"
        class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500 {{ request()->routeIs('problems.*') ? 'text-teal-600' : '' }}">
        <i class="fad fa-envelope-open-text text-xs mr-2"></i>
        View all Problems
    </a>
    <!-- end link -->

    <p class="uppercase text-xs text-gray-600 mb-4 mt-4 tracking-wider">Solutions</p>

    <!-- link -->
    <a href="{{ route('solutions.index') }}"
        class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500 {{ request()->routeIs('solutions.*') ? 'text-teal-600' : '' }}">
        <i class="fad fa-envelope-open-text text-xs mr-2"></i>
        Show Solutions
    </a>
    <!-- end link -->

    <p class="uppercase text-xs text-gray-600 mb-4 mt-4 tracking-wider">Settings</p>

    <!-- link -->
    <a href="{{ route('tags.index') }}"
        class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
        <i class="fas fa-tag text-xs mr-2"></i>
        Tags
    </a>
    <!-- end link -->

    <!-- link -->
    <a href="{{ route('category.index') }}"
        class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500 {{ request()->routeIs('category.*') ? 'text-teal-600' : '' }}">
        <i class="fas fa-list-alt text-xs mr-2"></i>
         Category
    </a>
    <!-- end link -->

   

</div>
<!-- end sidebar content -->
</div>
<!-- end sidbar -->
