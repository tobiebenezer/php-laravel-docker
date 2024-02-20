<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        ul li::marker {

            font-size: 2rem;
        }
    </style>
</head>

<body class="antialiased">
    <div class="relative min-h-screen bg-dots-darker bg-center bg-gray-200 dark:bg-dots-lighter selection:bg-red-500 selection:text-white">
        <x-layout.header />

        <div id='home' class=" relative mx-auto overflow-hidden pt-6 lg:pt-8 h-[75vh] bg-blue-950 md:rounded-bl-[3rem] lg:rounded-bl-[8rem] text-white">
            <div class="md:mx-[2rem] lg:mx-[5rem] mb-10">
                <h5 class="tracking-tight font-extrabold text-bold md:text-[3rem] md:leading-[2.6rem] lg:text-[4rem] lg:leading-[3.6rem]  ">Put You Tools To Work <br> and Earn Just For Owning</h5>
            </div>
            <div class=" relative flex  md:mx-[2rem] lg:mx-[5rem] justify-between items-center">
                <div class="text-start ">
                    <p class=" mb-4 md:w-[17rem] lg:w-[20rem] md:text-[0.8rem] lg:text-[1rem]">
                        Rent Thousands of unique from Verified memebers in
                        your community and recoup some of your cost for that item that has been sitting idle.
                    </p>
                    <a href="#contact" id="">
                        <button class="bg-white p-1 text-bold md:text-[0.8rem] lg:text-[1rem] lg:mt-[4rem] rounded-md flex items-center gap-2">
                            <span class=" rounded-md p-2 bg-primary text-blue-950 ">Start Recouping</span><span class="material-icons text-blue-950">arrow_forward</span>
                        </button>
                    </a>
                </div>

                <div class="lg:w-[20rem]  text-left marker:text-primary">
                    <ul class="list-disc md:text-[0.8rem] lg:text-[1rem]">
                        <li class="lg:my-1">Own an item </li>
                        <li class="lg:my-1">Put it up for hiring </li>
                        <li class="lg:my-1">Get paid for lending your item </li>
                        <li class="lg:my-1">Item earn you an income</li>
                    </ul>

                </div>
                <div class=" absolute top-[10%] md:left-[40%] lg:left-[35%] md:w-[10rem] lg:w-[13rem] h-[30rem] bg-primary rounded-t-[2.5rem]">
                    <div class="relative md:top-[13%] lg:top-[18%]">
                        <img class="md:scale-[195%] lg:scale-[220%]" src="{{asset('img/moneygirl.png')}}" alt="">
                    </div>


                </div>

            </div>

        </div>
        <div class="pt-[4rem] md:mx-[2rem] lg:mx-[5rem]  text-blue-950">
            <div class="flex flex-col justify-center items-center text-blue-950">
                <span class="text-bold md:text-[2rem] text-4xl tracking-tight font-extrabold leading-tight">
                    Financial Freedom with ReKoop
                </span>
                <h1 class="mb-6 font-light text-blue-950 dark:text-gray-400 md:text-lg">
                    Our mission is to turn equipement you own which before now lay idea and has be come a liablity into
                    a asset for you.
                </h1>
            </div>
            <div class="flex justify-content-center  gap-2">
                <div class="flex-1 my-[3rem]">
                    <div class="rounded-2xl h-[20rem] w-[30rem] overflow-hidden">
                        <img class=" " src="{{ asset('img/pexels-oladimeji-ajegbile-2379886.jpg') }}" alt="">
                    </div>
                </div>
                <div class="flex-1  flex  flex-col justify-center px-3 py-5 my-[3rem] rounded-2xl ">
                    <span class="text-3xl tracking-tight font-extrabold leading-tight">Fully insured experience across Nigeria</span> <br>
                    <p class="mb-6 font-light text-blue-950 dark:text-gray-400 md:text-md">
                        All items are are fully insured so you dont have to worry about damages.
                    </p>
                    <span class="flex items-center">
                        <span class="material-icons text-primary mr-4">travel_explore</span>What are you looking for?
                    </span> <br>
                    <span class="flex items-center">
                        <span class="material-icons text-primary mr-4">location_pin</span> What's your location?
                    </span>
                    <span>

                    </span>

                </div>

            </div>

        </div>
        <section>
            <div class="w-full overflow-y-auto  rounded-t-lg dark:border-gray-700 dark:bg-blue-950  bottom-[60px]">
                <div class="text-center">
                    <h2 class="mb-4 text-4xl tracking-tight font-extrabold leading-tight text-blue-950 dark:text-white">
                        Why recoup or rekoop?
                    </h2>
                </div>
                <div class="grid grid-cols-1 gap-4 p-4 md:grid-cols-3">
                    <div class="p-4 rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100 dark:hover:bg-gray-600 dark:bg-gray-700">
                        <div class="flex justify-center items-center p-2 mx-auto mb-2 bg-gray-200 dark:bg-gray-600 rounded-full w-[48px] h-[48px] max-w-[48px] max-h-[48px]">
                            <span class="material-icons text-primary">diversity_2</span>
                        </div>
                        <div class="font-medium text-center text-blue-950 dark:text-gray-400">Share items with verified community members.</div>
                    </div>
                    <div class="p-4 rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100 dark:hover:bg-gray-600 dark:bg-gray-700">
                        <div class="flex justify-center items-center p-2 mx-auto mb-2 bg-gray-200 dark:bg-gray-600 rounded-full w-[48px] h-[48px] max-w-[48px] max-h-[48px]">
                            <span class="material-icons text-primary">security</span>
                        </div>
                        <div class="font-medium text-center text-blue-950 dark:text-gray-400">All items posted are insured.</div>
                    </div>
                    <div class="hidden p-4 rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100 dark:hover:bg-gray-600 dark:bg-gray-700 lg:block">
                        <div class="flex justify-center items-center  p-2 mx-auto mb-2 bg-gray-200 dark:bg-gray-600 rounded-full w-[48px] h-[48px] max-w-[48px] max-h-[48px]">
                            <span class="material-icons text-primary">payments</span>
                        </div>
                        <div class="font-medium text-center text-blue-950 dark:text-gray-400">The prices on our postings are 20–30% less than market rates.</div>
                    </div>

                </div>
            </div>
        </section>
        <section class="px-[4rem] mb-2 bg-slate-100   text-blue-950">
            <div class="max-w-[85rem] md:mx-[2rem] lg:mx-[5rem]  px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
                <!-- Grid -->
                <div class="lg:grid lg:grid-cols-12 lg:gap-16 lg:items-center">
                    <div class="lg:col-span-7">
                        <!-- Grid -->
                        <div class="grid grid-cols-12 gap-2 sm:gap-6 items-center lg:-translate-x-10">
                            <div class="col-span-4">
                                <img class="rounded-xl" src="https://images.unsplash.com/photo-1606868306217-dbf5046868d2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1981&q=80" alt="Image Description">
                            </div>
                            <!-- End Col -->

                            <div class="col-span-3">
                                <img class="rounded-xl" src="https://images.unsplash.com/photo-1605629921711-2f6b00c6bbf4?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=987&q=80" alt="Image Description">
                            </div>
                            <!-- End Col -->

                            <div class="col-span-5">
                                <img class="rounded-xl" src="https://images.unsplash.com/photo-1600194992440-50b26e0a0309?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=987&q=80" alt="Image Description">
                            </div>
                            <!-- End Col -->
                        </div>
                        <!-- End Grid -->
                    </div>
                    <!-- End Col -->

                    <div class="mt-5 sm:mt-10 lg:mt-0 lg:col-span-5">
                        <div class="space-y-6 sm:space-y-8">
                            <!-- Title -->
                            <div class="space-y-2 md:space-y-4">
                                <h2 class="font-bold text-3xl lg:text-4xl text-blue-950 dark:text-gray-200">
                                    How to become a lender in your community
                                </h2>
                                <p class="text-blue-950">
                                    Here is how to become a lender in, answer the following
                                </p>
                            </div>
                            <!-- End Title -->

                            <!-- List -->
                            <ul role="list" class="space-y-2 sm:space-y-4">
                                <li class="flex space-x-3">
                                    <!-- Solid Check -->
                                    <span class="mt-0.5 h-5 w-5 flex justify-center items-center rounded-full bg-blue-50 text-blue-600 dark:bg-blue-800/30 dark:text-blue-500">
                                        <svg class="flex-shrink-0 h-3.5 w-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="20 6 9 17 4 12" />
                                        </svg>
                                    </span>
                                    <!-- End Solid Check -->

                                    <span class="text-sm sm:text-base text-blue-950">
                                        Have <span class="font-bold">something to share</span> with your friends and family?
                                    </span>
                                </li>

                                <li class="flex space-x-3">
                                    <!-- Solid Check -->
                                    <span class="mt-0.5 h-5 w-5 flex justify-center items-center rounded-full bg-blue-50 text-blue-600 dark:bg-blue-800/30 dark:text-blue-500">
                                        <svg class="flex-shrink-0 h-3.5 w-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="20 6 9 17 4 12" />
                                        </svg>
                                    </span>
                                    <!-- End Solid Check -->

                                    <span class="text-sm sm:text-base text-blue-950">
                                        Looking for an online rental store for your customers?
                                    </span>
                                </li>

                                <li class="flex space-x-3">
                                    <!-- Solid Check -->
                                    <span class="mt-0.5 h-5 w-5 flex justify-center items-center rounded-full bg-blue-50 text-blue-600 dark:bg-blue-800/30 dark:text-blue-500">
                                        <svg class="flex-shrink-0 h-3.5 w-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="20 6 9 17 4 12" />
                                        </svg>
                                    </span>
                                    <!-- End Solid Check -->

                                    <span class="text-sm sm:text-base text-blue-950">
                                        Need a closed group account for your <span class="font-bold">community?</span>
                                    </span>
                                </li>
                            </ul>
                            <!-- End List -->
                        </div>
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Grid -->
            </div>
        </section>
        <section id="contact" class="bg-white dark:bg-gray-900">
            <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
                <div class="mx-auto max-w-screen-sm text-center">
                    <h2 class="mb-4 text-4xl tracking-tight font-extrabold leading-tight text-blue-950 dark:text-white">Join our waiting list</h2>
                    <p class="mb-6 font-light text-blue-950 dark:text-gray-400 md:text-lg">Reserve a place for your tools on our platform, you will be contacted once you are off the wait list.</p>
                    <!-- <a href="#" class="text-white bg-primary hover:bg-primary focus:ring-4 focus:ring-primary font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-primary dark:hover:bg-primary focus:outline-none dark:focus:ring-primary">Join wait list</a> -->
                    <div class="grid grid-col-2  text-blue-950">
                        <div>
                            <span class="flex items-center"> <span class="material-icons text-primary mr-2">email</span> Email:&nbsp; contact@recoup.ng</span> <br>

                            Want to get in touch with us?<br>
                            For investment, partnership, press & media, and general inquiries: contact@recoup.ng or call +2348068897177
                        </div>

                    </div>
                </div>
            </div>


        </section>
        <footer class=" w-full p-4 bg-white border-t border-gray-200 shadow md:flex md:items-center md:justify-between md:p-6 dark:bg-gray-800 dark:border-gray-600">
            <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© {{ now()->format('Y') }} ReKoop™. All Rights Reserved.
            </span>
            <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0">
                <li>
                    <a href="#home" class="hover:underline me-4 md:me-6">About</a>
                </li>
                <li>
                    <a href="#home" class="hover:underline me-4 md:me-6">Privacy Policy</a>
                </li>
                <li>
                    <a href="#" class="hover:underline me-4 md:me-6">Licensing</a>
                </li>
                <li>
                    <a href="#contact" class="hover:underline">Contact</a>
                </li>
            </ul>
        </footer>
    </div>


</body>

</html>