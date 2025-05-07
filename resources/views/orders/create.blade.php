<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create new Order') }}
        </h2>
    </x-slot>
    {{-- @section('content') --}}
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="container mx-auto p-4 max-w-xl">
                        <a href="{{ route('orders.index') }}" class="bg-blue-500 text-white px-2 py-1 rounded hover:bg-blue-600 mb-4 inline-block">
                            Back to Orders
                        </a>
                        <h1 class="text-2xl font-bold mb-4">New Order</h1>

                        <form action="{{ route('orders.store') }}" method="POST" class="space-y-4">
                            @csrf

                            <div>
                                <label class="block">Client</label>
                                <input type="text" name="client" class="w-full border rounded p-2" required>
                            </div>

                            <div>
                                <label class="block">Destination</label>
                                <input type="text" name="destination" class="w-full border rounded p-2">
                            </div>

                            <div>
                                <label class="block">Exporter</label>
                                <input type="text" name="exporter" class="w-full border rounded p-2">
                            </div>

                            <div>
                                <label class="block">Date</label>
                                <input type="date" name="date" class="w-full border rounded p-2">
                            </div>

                            <div>
                                <label class="block">Notes</label>
                                <textarea name="notes" class="w-full border rounded p-2"></textarea>
                            </div>

                            <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">
                                Save
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- @endsection --}}
</x-app-layout>