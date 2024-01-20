<!-- resources/views/home.blade.php -->

@extends('templates.global')

@section('title', 'spy.now - Home')

@section('content')
<!-- Start block -->
<section class="bg-blue dark:bg-gray-900 h-50">
    <div class="grid max-w-screen-xl px-4 pt-20 pb-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 lg:pt-28">
        <div class="mr-auto place-self-center lg:col-span-7">
            <h1 class="max-w-2xl mb-4 text-4xl font-extrabold leading-none tracking-tight md:text-5xl xl:text-6xl sm:text-1x1 dark:text-white">one click<br>spy everywhere.</h1>
            <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">Discover the secrets behind your competitors' success with spy.today. Our easy-to-use toolkit provides real-time insights into their landing pages, giving you a powerful advantage. Analyze, adapt, and dominate your market effortlessly </p>
            <div class="space-y-4 sm:flex sm:space-y-0 sm:space-x-4">
                <a href="{{ route('google.redirect')}}" class="inline-flex bg-red-500 items-center justify-center w-full px-5 py-3 text-lg font-medium text-center text-white border border-red-200 rounded-lg sm:w-auto focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                    <svg class="mr-2 -ml-1 w-4 h-4" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="google" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 488 512">
                        <path fill="currentColor" d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z"></path>
                    </svg>
                    Login with Google
                </a>
            </div>
        </div>
        <div class=" lg:mt-0 lg:col-span-5 lg:flex">
            <img src="{{ asset('images/hero.png') }}" alt="hero image">
        </div>
    </div>
    
</section>
<!-- End block -->



<div class="bg-white w-screen  sm:py-32">
    <div class="mx-auto max-w-screen-xl  ">
        <div class="mx-auto max-w-screen-xl sm:text-center">

        </div>
        <section id="pricing" class="bg-white dark:bg-gray-900 h-screen">
            <div class="mr-auto mt-16 px-4 pt-20 pb-8 max-w-screen-xl rounded-3xl ring-1 ring-gray-200 sm:mt-5 lg:mx-0 lg:flex lg:max-w-none">
                <div class="p-8 sm:p-10 lg:flex-auto">
                    <h3 class="text-2xl font-bold tracking-tight text-gray-900">membership</h3>
                    <p class="mt-6 text-base leading-7 text-gray-600">Explore a world of website variations effortlessly with private access to all countries, an unlimited number of tests, and preview landing pages as informative snapshots.</p>
                    <div class="mt-10 flex items-center gap-x-4">
                        <h4 class="flex-none text-sm font-semibold leading-6 mt-4 text-indigo-600">What’s included</h4>
                        <div class="h-px flex-auto bg-gray-100"></div>
                    </div>
                    <ul role="list" class="mt-8 grid grid-cols-1 gap-4 text-sm leading-6 text-gray-600 sm:grid-cols-2 sm:gap-6">
                        <li class="flex gap-x-3">
                            <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                            </svg>
                            Private access all countries
                        </li>
                        <li class="flex gap-x-3">
                            <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                            </svg>
                            Unlimited number of tests
                        </li>
                        <li class="flex gap-x-3">
                            <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                            </svg>
                            Preview landing page as a snapshot
                        </li>
                    </ul>
                </div>
                <div class="-mt-2 p-2 lg:mt-0 lg:w-full lg:max-w-md lg:flex-shrink-0">
                    <div class="rounded-2xl bg-gray-50 py-10 text-center ring-1 ring-inset ring-gray-900/5 lg:flex lg:flex-col lg:justify-center lg:py-16">
                        <div class="mx-auto max-w-xs px-8">
                            <p class="text-base font-semibold text-gray-600"></p>
                            <p class="mt-6 flex items-baseline justify-center gap-x-2">
                                <span class="text-5xl font-bold tracking-tight text-emerald-900">FREE</span>

                            </p>
                            <a href="#" class="mt-10 block w-full rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Get access</a>
                            <p class="mt-6 text-xs leading-5 text-gray-600">no payment needed to use the service for now</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

@endsection