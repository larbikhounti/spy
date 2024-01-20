@extends('templates.dashboard.dashboard')

@section('title', 'spy.now - Dashboard')

@section('content')
    <!-- component -->
    <!--
            Author: Surjith S M
            Twitter: @surjithctly

            Get more templates on web3templates.com
            Tailwind Play: https://play.tailwindcss.com/O0fbQqzI8M
        -->

    <section class="py-10 flex items-center  justify-center bg-white">

        <div class="mx-auto max-w-[43rem]">
            <div class="text-center">
                <h1 class="mt-3 mb-3 text-[3.5rem] font-bold leading-[4rem] tracking-tight text-black">All in
                    one&nbsp;snapshots</h1>


                <form>
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
                        <input type="search" id="default-search"
                            class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="place you link here." required>
                        <button type="submit"
                            class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                    </div>
                </form>


            </div>


        </div>

    </section>

@endsection
