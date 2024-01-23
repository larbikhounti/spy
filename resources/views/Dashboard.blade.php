@extends('templates.dashboard.dashboard')

@section('title', 'spy.now - Dashboard')

@section('content')
    <section class="py-10 flex items-center  justify-center bg-white ">

        <div class="mx-auto max-w-[43rem]">
            <div class="text-center">
                <h1 class="mt-3 mb-3 text-[3.5rem] font-bold leading-[4rem] tracking-tight text-black">All in
                    one&nbsp;snapshots</h1>
                <form action="{{route('capture')}}" method="POST">
                    @csrf
                    <label for="default-search"
                        class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input type="search" id="default-search" name="url"
                            class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="place you link here." required>
                        <button type="submit"
                            class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                    </div>

                    <button id="dropdownSearchButton" data-dropdown-toggle="dropdownSearch"
                        class="inline-flex items-center px-4 mt-5 py-2 text-sm font-medium text-center text-dark bg-white-700 rounded-lg  focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                        type="button">
                        Countries <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg></button>

                    <!-- Dropdown menu -->
                    <div id="dropdownSearch" class="z-10 hidden bg-white rounded-lg shadow w-60 dark:bg-gray-700">
                       
                        <ul class="h-48 px-3 pb-3 overflow-y-auto text-sm text-gray-700 dark:text-gray-200"
                            aria-labelledby="dropdownSearchButton">
                            @foreach ($countries as $country)
                            <li>
                                <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                    <input id="checkbox-item-11" type="checkbox" value="{{$country->id}}" name="country[]"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                    <label for="checkbox-item-11"
                                        class="w-full ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">
                                        {{$country->name}}
                                    </label>
                                </div>
                            </li>
                      @endforeach
                               
                        </ul>
                    </div>
                </form>
               
            </div>
        </div>

    </section>
    <section class="w-screen ">
        <div class="grid grid-cols-3 gap-4 text-center ">
         

            @isset($countryList)
            @foreach ($countryList as $country)
            
                <div
                    class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="{{ asset('images/4/1/screenshot.png') }}" class="block h-48 w-96" style="background-image: url({{ asset('images/4/1/screenshot.png') }})">
                      
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Saudi Arabia
                            </h5>
                        </a>
                        <a href="{{ asset('images/4/1/screenshot.png') }}"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Full page
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                    </div>
                </div>
            @endforeach
            @endisset
      
        </div>

    </section>

@endsection
