<x-app-layout>
    <x-slot name="header">
        List des produits
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                {{-- component product-list --}}
                <div class="bg-white">
                    <div class="max-w-2xl px-4 py-16 mx-auto sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
                      <h2 class="text-2xl font-bold tracking-tight text-gray-900">Customers also purchased</h2>

                      <div class="grid grid-cols-1 mt-6 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                        @foreach ($products as $product)
                            <div class="relative group">
                                <img src="{{$product->image}}" alt="Front of men&#039;s Basic Tee in black." class="object-cover w-full bg-gray-200 rounded-md aspect-square group-hover:opacity-75 lg:aspect-auto lg:h-80 dark:bg-gray-700">
                                <div class="flex justify-between mt-4">
                                    <div>
                                    <h3 class="text-sm text-gray-700">
                                        <a href="#">
                                        <span aria-hidden="true" class="absolute inset-0"></span>
                                        {{$product->name}}
                                        </a>
                                    </h3>
                                    <p class="mt-1 text-sm text-gray-500">{{$product->description}}</p>
                                    </div>
                                    <p class="text-sm font-medium text-gray-900">{{$product->price}}</p>
                                </div>
                                <div class="flex items-center justify-between mt-4 space-x-4 ">
                                    <button class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                        Add to cart
                                    </button>
                                </div>
                            </div>

                        @endforeach

                        <!-- More products... -->
                      </div>
                    </div>
                  </div>

            </div>
        </div>
    </div>



</x-app-layout>