<template>
    <!-- BEGIN: Top Bar -->
        <div class="top-bar-boxed h-[70px] z-[51] relative border-b border-white/[0.08] -mt-7 md:-mt-5 -mx-3 sm:-mx-8 px-3 sm:px-8 md:pt-0 mb-12">
            <div class="h-full flex items-center">
                <!-- BEGIN: Logo -->
                <a href="" class="-intro-x hidden md:flex">
                    <img alt="Icewall Tailwind HTML Admin Template" class="w-6" src="dist/images/logo.svg">
                    <span class="text-white text-lg ml-3"> MM </span> 
                </a>
                <!-- END: Logo -->
                <!-- BEGIN: Breadcrumb -->
                <nav aria-label="breadcrumb" class="-intro-x h-full mr-auto">
                    <ol class="breadcrumb breadcrumb-light">
                        <li class="breadcrumb-item"><a href="#">Application</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                    </ol>
                </nav>
                <!-- END: Breadcrumb -->
                <!-- BEGIN: Search -->
                <div class="intro-x relative mr-3 sm:mr-6">
                    <div class="search hidden sm:block">
                        <input type="text" class="search__input form-control border-transparent" placeholder="Search...">
                        <i data-feather="search" class="search__icon dark:text-slate-500"></i> 
                    </div>
                </div>
                <!-- END: Search -->
                <!-- BEGIN: Account Menu -->
                <div class="intro-x dropdown w-8 h-8">
                    <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in scale-110" role="button" aria-expanded="false" data-tw-toggle="dropdown">
                        <img alt="Icewall Tailwind HTML Admin Template" src="dist/images/profile-14.jpg">
                    </div>
                    <div class="dropdown-menu w-56">
                        <ul class="dropdown-content bg-primary/80 before:block before:absolute before:bg-black before:inset-0 before:rounded-md before:z-[-1] text-white">
                            <li class="p-2">
                                <div class="font-medium">Material Management</div>
                                <div class="text-xs text-white/60 mt-0.5 dark:text-slate-500">Software Engineer</div>
                            </li>
                            <li>
                                <hr class="dropdown-divider border-white/[0.08]">
                            </li>
                            <li>
                                <a href="" class="dropdown-item hover:bg-white/5"> <i data-feather="lock" class="w-4 h-4 mr-2"></i> Change Password </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider border-white/[0.08]">
                            </li>
                            <li>
                                <a href="" class="dropdown-item hover:bg-white/5"> <i data-feather="toggle-right" class="w-4 h-4 mr-2"></i> Logout </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- END: Account Menu -->
            </div>
        </div>
        <!-- END: Top Bar -->
        <!-- BEGIN: Top Menu -->
        <nav class="top-nav">
            <ul>
                <li>
                    <a href="javascript:;" class="top-menu top-menu--active">
                        <div class="top-menu__icon"> <i data-feather="home"></i> </div>
                        <div class="top-menu__title"> Procurement <i data-feather="chevron-down" class="top-menu__sub-icon"></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <router-link to="./" class="top-menu">
                                <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="top-menu__title"> Home </div>
                            </router-link>
                        </li>
                        <li>
                            <router-link to="./prpostatus" class="top-menu">
                                <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="top-menu__title"> Pr Po Status </div>
                            </router-link>
                        </li>
                        
                    </ul>
                </li>
            </ul>
        </nav>
        <router-view/>
        <!-- END: Top Menu -->
        
</template>
<script>
export default {
    name: "App"
}
</script>