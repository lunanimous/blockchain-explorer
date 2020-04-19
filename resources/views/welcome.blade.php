@extends('layouts.default')

@section('title', 'Nimiq Blockchain Explorer')

@section('content')
    <h2 class="text-center text-2xl text-blue-600 font-bold">Nimiq</h2>
    <h3 class="mt-2 text-center text-4xl font-bold">Blockchain Explorer</h3>

    <div class="mt-8">
        <form class="mx-auto w-full max-w-lg relative">
            <input
                class="w-full rounded-md border-2 border-gray-200 h-12 px-3 focus:outline-none focus:border-teal-300"
                type="text" id="search" name="search"
                placeholder="Search for an address, a transaction or a block hash"
            />
            <div class="absolute right-0 top-0">
                <button class="h-12 w-12 rounded-r-md flex items-center justify-center bg-teal-400 border-2 border-teal-300 text-white focus:outline-none focus:border-teal-600" type="submit">
                    <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                </button>
            </div>
        </form>
    </div>

    <div class="mt-12">
        <div class="flex bg-white rounded-md">
            <div class="w-full sm:w-1/3 p-4">
                <h3 class="text-gray-500 mb-2">Block height</h3>
                <p class="text-gray-500 text-sm"><span class="text-3xl text-teal-900">654654</span></p>
            </div>
            <div class="w-full sm:w-1/3 p-4 border-l border-gray-100">
                <h3 class="text-gray-500 mb-2">Transactions</h3>
                <p class="text-gray-500 text-sm"><span class="text-3xl text-teal-900">6542 M</span> (1.2 TPS)</p>
            </div>
            <div class="w-full sm:w-1/3 p-4 border-l border-gray-100">
                <h3 class="text-gray-500 mb-2">Supply</h3>
                <p class="text-gray-500 text-sm"><span class="text-3xl text-teal-900">6 624 456</span> NIM</p>
            </div>
            <div class="w-full sm:w-1/3 p-4 border-l border-gray-100">
                <h3 class="text-gray-500 mb-2">Hashrate</h3>
                <p class="text-gray-500 text-sm"><span class="text-3xl text-teal-900">2.34</span> GH/s</p>
            </div>
        </div>
    </div>

    <div class="mt-6 flex -mx-2">
        <div class="flex-1 bg-white rounded-md m-2">
            <header class="p-4 w-full flex items-center justify-between">
                <h4 class="text-gray-500">Latest blocks</h4>
                <a href="#" class="text-sm text-teal-500 font-bold hover:underline">View all</a>
            </header>
            <main>
                <div class="flex p-4 text-sm border-t border-gray-100">
                    <div class="w-1/3">
                        <a href="#" class="text-teal-500 font-bold hover:underline">954652</a>
                        <p class="text-gray-500">50 seconds ago</p>
                    </div>
                    <div class="w-1/3">
                        <p class="text-gray-500">Miner <a href="#" class="text-teal-500 font-bold hover:underline">Icemining.ca</a></p>
                        <p>5 <span class="text-gray-500">transactions</span></p>
                    </div>
                    <div class="w-1/3 flex items-center justify-end">
                        <p class="py-2 px-3 bg-teal-100 text-teal-600 rounded-md"><span class="font-bold">53587</span> NIM</p>
                    </div>
                </div>
                <div class="flex p-4 text-sm border-t border-gray-100">
                    <div class="w-1/3">
                        <a href="#" class="text-teal-500 font-bold hover:underline">954652</a>
                        <p class="text-gray-500">50 seconds ago</p>
                    </div>
                    <div class="w-1/3">
                        <p class="text-gray-500">Miner <a href="#" class="text-teal-500 font-bold hover:underline">Icemining.ca</a></p>
                        <p>5 <span class="text-gray-500">transactions</span></p>
                    </div>
                    <div class="w-1/3 flex items-center justify-end">
                        <p class="py-2 px-3 bg-teal-100 text-teal-600 rounded-md"><span class="font-bold">53587</span> NIM</p>
                    </div>
                </div>
            </main>
        </div>

        <div class="flex-1 bg-white rounded-md m-2">
            <header class="p-4 w-full flex items-center justify-between">
                <h4 class="text-gray-500">Latest transactions</h4>
                <a href="#" class="text-sm text-teal-500 font-bold hover:underline">View all</a>
            </header>
            <main>
                <div class="flex p-4 text-sm border-t border-gray-100">
                    <div class="w-1/3">
                        <a href="#" class="text-teal-500 font-bold hover:underline">b5409b7278ad...</a>
                        <p class="text-gray-500">50 seconds ago</p>
                    </div>
                    <div class="w-1/3">
                        <p class="text-gray-500">From <a href="#" class="text-teal-500 font-bold hover:underline">NQ45 45 ... 4667</a></p>
                        <p class="text-gray-500">To <a href="#" class="text-teal-500 font-bold hover:underline">NQ87 98 ... 3656</a></p>
                    </div>
                    <div class="w-1/3 flex items-center justify-end">
                        <p class="py-2 px-3 bg-teal-100 text-teal-600 rounded-md"><span class="font-bold">53587</span> NIM</p>
                    </div>
                </div>
                <div class="flex p-4 text-sm border-t border-gray-100">
                    <div class="w-1/3">
                        <a href="#" class="text-teal-500 font-bold hover:underline">b5409b7278ad...</a>
                        <p class="text-gray-500">50 seconds ago</p>
                    </div>
                    <div class="w-1/3">
                        <p class="text-gray-500">From <a href="#" class="text-teal-500 font-bold hover:underline">NQ45 45 ... 4667</a></p>
                        <p class="text-gray-500">To <a href="#" class="text-teal-500 font-bold hover:underline">NQ87 98 ... 3656</a></p>
                    </div>
                    <div class="w-1/3 flex items-center justify-end">
                        <p class="py-2 px-3 bg-teal-100 text-teal-600 rounded-md"><span class="font-bold">53587</span> NIM</p>
                    </div>
                </div>
            </main>
        </div>
    </div>
@endsection
