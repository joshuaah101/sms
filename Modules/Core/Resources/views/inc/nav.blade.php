<nav class="flex justify-between items-center py-2 md:py-2 shadow-2xl w-full px-2 md:px-8 bg-blue-800">
    <div class="flex items-center space-x-2">
        <a href="{{ url('/') }}">
            <img src="{{ asset('/storage/images/png/college-logo.png') }}" class="w-16 h-12 md:w-20 md:h-16"
            alt="{{ config('app.name') }} logo" title="{{ config('app.name') }}"/>
        </a>

        <span class="uppercase text-sm font-bold font-sans text-blue-200">
            {{ config('app.name') }}
        </span>
    </div>

    {{--<div class="md:flex space-x-3 hidden">
        <a href="{{ route('admission.index') }}"
            class="bg-blue-100 text-blue-900 border-2 border-blue-900 py-2 px-4 text-xs md:text-sm rounded-full hover:bg-blue-900 hover:text-white shadow-xl transition duration-500 delay-200 ease-in">
            Admissions
        </a>

        @auth('student')
            <a class="dropdown-item" href="{{ route('student.logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('student.logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        @else
            <a href="{{ route('student.login') }}" class="bg-blue-100 border-2 border-blue-600 text-blue-700 py-2 px-4 text-xs md:text-sm rounded-full shadow-xl
            hover:bg-blue-800 hover:text-blue-100 transition duration-500 delay-200 ease-out">
                Student portal
            </a>
        @endauth 
    </div>--}}

    <div class="py-1">
        <div class="flex justify-between items-center space-x-8 md:px-8 md:py-1">
            <div class="md:flex space-x-5 text-sm items-center hidden p-2">
                <a href="{{ url('/') }}"
                    class="{{ request()->is('/') ? 'text-blue-100 font-bold border border-blue-200 rounded hover:border-pink-700 hover:text-pink-700' : 'text-blue-100 hover:text-pink-700 py-3 transition duration-500 ' }} font-semibold px-5 py-2">
                    Home
                </a>

                <div class="flex flex-col text-left">
                    <button type="button" class="inline-flex justify-center w-full text-blue-100 hover:text-pink-700 py-3 space-x-2 font-semibold items-center transition duration-500 ease-in-out" data-dropdown-toggle="dropdownAbout">
                        About
                        <svg class="h-4 w-4 animate-bounce text-blue-100 border border-blue-700 rounded-full ml-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>

                    {{-- dropdown menu --}}
                    <div id="dropdownAbout" class="z-10 right-0 left-0 mt-8 w-1/3 rounded shadow-lg bg-white ring-1 ring-black ring-opacity-5 divide-y divide-gray-100 focus:outline-none hidden" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                        <div class="block px-6 py-4 space-y-2">
                            <a href="{{ url('about') }}" class="text-gray-700 block px-4 py-1 text-sm hover:text-pink-700 transition duration-300 ease-linear" tabindex="-1" id="menu-item-0">
                                About Faith in Christ Group Of Schools
                            </a>
                            <a href="#" class="text-gray-700 block px-4 py-1 text-sm hover:text-pink-700 transition duration-300 ease-linear" tabindex="-1" id="menu-item-1">
                                Our Philosophy
                            </a>
                            <a href="#" class="text-gray-700 block px-4 py-1 text-sm hover:text-pink-700 transition duration-300 ease-linear" tabindex="-1" id="menu-item-1">
                                Objectives
                            </a>
                            <a href="#" class="text-gray-700 block px-4 py-1 text-sm hover:text-pink-700 transition duration-300 ease-linear" tabindex="-1" id="menu-item-1">
                                Vision
                            </a>
                            <a href="#" class="text-gray-700 block px-4 py-1 text-sm hover:text-pink-700 transition duration-300 ease-linear" tabindex="-1" id="menu-item-1">
                                Management
                            </a>
                        </div>
                    </div>
                </div>

                <a href="#" class="inline-flex justify-center w-full text-blue-100 hover:text-pink-700 py-3 space-x-2 font-semibold items-center transition duration-500 ease-in-out">
                    Academics
                    <svg class="h-4 w-4 animate-bounce text-blue-100 border border-blue-700 rounded-full ml-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </a>

                <div class="flex flex-col text-left">
                    <button type="button" class="inline-flex justify-center w-full text-blue-100 hover:text-pink-700 py-3 space-x-2 font-semibold items-center transition duration-500 ease-in-out" data-dropdown-toggle="dropdownAdministration">
                        Administration
                        <svg class="h-4 w-4 animate-bounce text-blue-100 border border-blue-700 rounded-full ml-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>

                    {{-- dropdown menu --}}
                    <div id="dropdownAdministration" class="z-10 right-0 left-0 mt-8 w-1/6 rounded shadow-lg bg-white ring-1 ring-black ring-opacity-5 divide-y divide-gray-100 focus:outline-none hidden" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                        <div class="grid grid-cols-1 gap-8 px-6 py-4">
                            <div class="space-y-8">
                                <div class="py-1">
                                    <a href="#" class="text-gray-700 block px-4 py-1 text-sm hover:text-pink-700 transition duration-300 ease-linear" tabindex="-1" id="menu-item-0">
                                        Registry
                                    </a>
                                    <a href="#" class="text-gray-700 block px-4 py-1 text-sm hover:text-pink-700 transition duration-300 ease-linear" tabindex="-1" id="menu-item-1">
                                        Library
                                    </a>
                                    <a href="#" class="text-gray-700 block px-4 py-1 text-sm hover:text-pink-700 transition duration-300 ease-linear" tabindex="-1" id="menu-item-1">
                                        Bursary
                                    </a>
                                    <a href="#" class="text-gray-700 block px-4 py-1 text-sm hover:text-pink-700 transition duration-300 ease-linear" tabindex="-1" id="menu-item-1">
                                        Proprietry
                                    </a>
                                    <a href="#" class="text-gray-700 block px-4 py-1 text-sm hover:text-pink-700 transition duration-300 ease-linear" tabindex="-1" id="menu-item-1">
                                        Student Affairs
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col text-left">
                    <button type="button" class="inline-flex justify-center w-full text-blue-100 hover:text-pink-700 py-3 space-x-2 font-semibold items-center transition duration-500 ease-in-out" data-dropdown-toggle="dropdownAdmissions" aria-expanded="true" aria-haspopup="true">
                        Admissions
                        <svg class="h-4 w-4 animate-bounce text-blue-100 border border-blue-700 rounded-full ml-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>

                    {{-- dropdown menu --}}
                    <div id="dropdownAdmissions" class="z-10 right-0 left-0 mt-8 w-1/3 rounded shadow-lg bg-white ring-1 ring-black ring-opacity-5 divide-y divide-gray-100 focus:outline-none hidden" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                        <div class="grid grid-cols-1 gap-8 px-6 py-4">
                            <div class="space-y-8">
                                <div class="py-1">
                                    <a href="#" class="text-gray-700 block px-4 py-1 text-sm hover:text-pink-700 transition duration-300 ease-linear" tabindex="-1" id="menu-item-0">
                                        ADMISSION POLICY
                                    </a>
                                    <a href="#" class="text-gray-700 block px-4 py-1 text-sm hover:text-pink-700 transition duration-300 ease-linear" tabindex="-1" id="menu-item-1">
                                        FAITH IN CHRIST COLLEGE
                                    </a>
                                    <a href="#" class="text-gray-700 block px-4 py-1 text-sm hover:text-pink-700 transition duration-300 ease-linear" tabindex="-1" id="menu-item-1">
                                        FAITH IN CHRIST NUR/PRY (OKE OLA, ILARO)
                                    </a>
                                    <a href="#" class="text-gray-700 block px-4 py-1 text-sm hover:text-pink-700 transition duration-300 ease-linear" tabindex="-1" id="menu-item-1">
                                        FAITH IN CHRIST NUR/PRY (OJA-ODAN)
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col text-left">
                    <button type="button" class="inline-flex justify-center w-full text-blue-100 hover:text-pink-700 py-3 space-x-2 font-semibold items-center transition duration-500 ease-in-out" data-dropdown-toggle="dropdownPortal">
                        Portal
                        <svg class="h-4 w-4 animate-bounce text-blue-100 border border-blue-700 rounded-full ml-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>

                    {{-- dropdown menu --}}
                    <div id="dropdownPortal" class="z-10 right-0 left-0 mt-8 w-1/6 rounded shadow-lg bg-white ring-1 ring-black ring-opacity-5 divide-y divide-gray-100 focus:outline-none hidden" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                        <div class="grid grid-cols-1 gap-8 px-6 py-4">
                            <div class="space-y-8">
                                <div class="py-1">
                                    <a href="{{ route('parent') }}" class="text-gray-700 block px-4 py-1 text-sm hover:text-pink-700 transition duration-300 ease-linear" tabindex="-1" id="menu-item-0">
                                        Parent
                                    </a>
                                    <a href="{{ route('student') }}" class="text-gray-700 block px-4 py-1 text-sm hover:text-pink-700 transition duration-300 ease-linear" tabindex="-1" id="menu-item-1">
                                        Student
                                    </a>
                                    <a href="{{ route('alumni') }}" class="text-gray-700 block px-4 py-1 text-sm hover:text-pink-700 transition duration-300 ease-linear" tabindex="-1" id="menu-item-1">
                                        Alumni
                                    </a>
                                    <a href="{{ route('staff') }}" class="text-gray-700 block px-4 py-1 text-sm hover:text-pink-700 transition duration-300 ease-linear" tabindex="-1" id="menu-item-1">
                                        Staff
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col text-left">
                    <button type="button" class="inline-flex justify-center w-full text-blue-100 hover:text-pink-700 py-3 space-x-2 font-semibold items-center transition duration-500 ease-in-out" aria-expanded="true" aria-haspopup="true" data-dropdown-toggle="dropdownUnit">
                        Units
                        <svg class="h-4 w-4 animate-bounce text-blue-100 border border-blue-700 rounded-full ml-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>

                    {{-- dropdown menu --}}
                    <div id="dropdownUnit" class="z-10 right-0 left-0 mt-8 w-1/2 rounded shadow-lg bg-white ring-1 ring-black ring-opacity-5 divide-y divide-gray-100 focus:outline-none hidden" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 px-6 py-4">
                            <div class="space-y-8">
                                <div class="py-1">
                                    <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                                    <span class="py-5 px-2 text-lg text-pink-700 font-sans font-bold uppercase">
                                        Services
                                    </span>
                                    <a href="#" class="text-gray-700 block px-4 py-1 text-sm hover:text-pink-700 transition duration-300 ease-linear" tabindex="-1" id="menu-item-0">
                                        Medical centre
                                    </a>
                                    <a href="#" class="text-gray-700 block px-4 py-1 text-sm hover:text-pink-700 transition duration-300 ease-linear" tabindex="-1" id="menu-item-1">
                                        Cafeteria
                                    </a>
                                    <a href="#" class="text-gray-700 block px-4 py-1 text-sm hover:text-pink-700 transition duration-300 ease-linear" tabindex="-1" id="menu-item-1">
                                        Entreprenuership Development
                                    </a>
                                    <a href="#" class="text-gray-700 block px-4 py-1 text-sm hover:text-pink-700 transition duration-300 ease-linear" tabindex="-1" id="menu-item-1">
                                        Library
                                    </a>
                                    <a href="#" class="text-gray-700 block px-4 py-1 text-sm hover:text-pink-700 transition duration-300 ease-linear" tabindex="-1" id="menu-item-1">
                                        Laboratories
                                    </a>
                                </div>
                                <div class="py-1">
                                    <span class="py-5 px-2 text-lg text-pink-700 font-sans font-bold uppercase">
                                        counselling
                                    </span>
                                    <a href="#" class="text-gray-700 block px-4 py-1 text-sm hover:text-pink-700 transition duration-300 ease-linear" tabindex="-1" id="menu-item-2">
                                        Guidiance and counselling
                                    </a>
                                    <a href="#" class="text-gray-700 block px-4 py-1 text-sm hover:text-pink-700 transition duration-300 ease-linear" tabindex="-1" id="menu-item-3">
                                        Servicom
                                    </a>
                                    <a href="#" class="text-gray-700 block px-4 py-1 text-sm hover:text-pink-700 transition duration-300 ease-linear" tabindex="-1" id="menu-item-1">
                                        Career management
                                    </a>
                                </div>
                            </div>
                            <div class="space-y-8">
                                <div class="py-1">
                                    <span class="py-5 px-2 text-lg text-pink-700 font-sans font-bold uppercase">
                                        arts
                                    </span>
                                    <a href="#" class="text-gray-700 block px-4 py-1 text-sm hover:text-pink-700 transition duration-300 ease-linear" tabindex="-1" id="menu-item-4">
                                        Museum
                                    </a>
                                    <a href="#" class="text-gray-700 block px-4 py-1 text-sm hover:text-pink-700 transition duration-300 ease-linear" tabindex="-1" id="menu-item-5">
                                        Sculptural practices
                                    </a>
                                    <a href="#" class="text-gray-700 block px-4 py-1 text-sm hover:text-pink-700 transition duration-300 ease-linear" tabindex="-1" id="menu-item-5">
                                        Music
                                    </a>
                                </div>
                                <div class="py-1">
                                    <span class="py-5 px-2 text-lg text-pink-700 font-sans font-bold uppercase">
                                        others
                                    </span>
                                    <a href="#" class="text-gray-700 block px-4 py-1 text-sm hover:text-pink-700 transition duration-300 ease-linear" tabindex="-1" id="menu-item-6">
                                        Research
                                    </a>
                                    <a href="#" class="text-gray-700 block px-4 py-1 text-sm hover:text-pink-700 transition duration-300 ease-linear" tabindex="-1" id="menu-item-5">
                                        Cafe
                                    </a>
                                    <a href="#" class="text-gray-700 block px-4 py-1 text-sm hover:text-pink-700 transition duration-300 ease-linear" tabindex="-1" id="menu-item-5">
                                        Internet services
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>




            {{-- secondary nav --}}
            {{-- mobile button goes here --}}
            <div class="md:hidden flex items-center">
                <button class="text-gray-100 hover:text-gray-300 font-semibold" id="menu-button" aria-expanded="true" aria-haspopup="true" data-dropdown-toggle="dropdownMobileMenu">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-8" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    {{-- mobile menu --}}
    <div class="md:hidden z-10 p-5 mt-8 w-screen shadow-lg bg-white ring-1 ring-black ring-opacity-5 divide-y divide-gray-100 focus:outline-none hidden" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1" id="dropdownMobileMenu">
        <div class="flex flex-col space-y-2 text-sm">
            <a href="{{ url('/') }}"
                class="text-black font-bold">
                Home
            </a>
            <div class="flex">
                {{-- dropdown button --}}
                <a href="#" class="text-black font-bold flex space-x-2 items-center py-3 px-4" data-dropdown-toggle="MobiledropdownAbout" aria-expanded="true" aria-haspopup="true">
                    About
                    <svg class="h-4 w-4 text-pink-700 border border-blue-700 rounded-full ml-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </a>

                {{-- dropdown menu --}}
                <div id="MobiledropdownAbout" class="mt-8 w-1/3 shadow-lg bg-white ring-1 ring-black ring-opacity-5 divide-y divide-gray-100 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                    <div class="block px-6 py-4 space-y-2">
                        <a href="#" class="text-gray-700 block px-4 py-1 text-sm hover:text-pink-700 transition duration-300 ease-linear" tabindex="-1" id="menu-item-0">
                            About Faith in Christ Group Of Schools
                        </a>
                        <a href="#" class="text-gray-700 block px-4 py-1 text-sm hover:text-pink-700 transition duration-300 ease-linear" tabindex="-1" id="menu-item-1">
                            Our Philosophy
                        </a>
                        <a href="#" class="text-gray-700 block px-4 py-1 text-sm hover:text-pink-700 transition duration-300 ease-linear" tabindex="-1" id="menu-item-1">
                            Objectives
                        </a>
                        <a href="#" class="text-gray-700 block px-4 py-1 text-sm hover:text-pink-700 transition duration-300 ease-linear" tabindex="-1" id="menu-item-1">
                            Vision
                        </a>
                        <a href="#" class="text-gray-700 block px-4 py-1 text-sm hover:text-pink-700 transition duration-300 ease-linear" tabindex="-1" id="menu-item-1">
                            Management
                        </a>
                    </div>
                </div>
            </div>
            
            
        </div>
    </div>
</nav>   