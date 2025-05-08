<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pallet') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                        <a href="{{ route('orders.index') }}" class="bg-blue-500 text-white px-2 py-1 rounded hover:bg-blue-600 mb-4 inline-block">
                            Back to Orders
                        </a>
                   
                        <h1 class="text-2xl font-bold mb-6">Add Pallet to Order #{{ $order->id }}</h1>

                        <form action="{{ route('pallets.store', $order) }}" method="POST" class="space-y-4">
                            @csrf

                            <div>
                                <label class="block text-sm font-medium text-gray-700">Pallet Number</label>
                                <input type="number" name="number" required class="w-full mt-1 border rounded-md p-2" />
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700">Field Number</label>
                                <input type="number" name="field_number" required class="w-full mt-1 border rounded-md p-2" />
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700">Box Count</label>
                                <input type="number" name="box_count" required class="w-full mt-1 border rounded-md p-2" />
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700">Lot Number</label>
                                <input type="text" name="lot_number" required class="w-full mt-1 border rounded-md p-2" />
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700">Pot Size</label>
                                <input type="text" name="pot_size" required class="w-full mt-1 border rounded-md p-2" />
                            </div>

                            <div class="pt-4">
                                <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded hover:bg-indigo-700">
                                    Save Pallet
                                </button>
                            </div>
                        </form>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
