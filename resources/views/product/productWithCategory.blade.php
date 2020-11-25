<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight px-3">
            Product for {{ $category->name }} Category
        </h2>
    </x-slot>

    <div class="py-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4">

                <div class="row">
                    @foreach($productWithCategory as $product)
                        <div class="col-4 py-3">
                            <div class="card shadow">
                                <img class="card-img-top" src="http://codeskulptor-demos.commondatastorage.googleapis.com/descent/person2.png" alt="Product image">
                                <div class="card-body my-3">
                                    <h4 class="card-title">{{ $product->name }}</h4>
                                    <p class="card-text h-10">{{ $product->description }}</p>
                                </div>
                                <div class="card-body flex justify-end mr-2">
                                    <a href="" class="card-link">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
