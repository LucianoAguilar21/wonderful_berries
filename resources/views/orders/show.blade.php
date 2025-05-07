<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Details Order') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a href="{{ route('orders.index') }}" class="bg-blue-500 text-white px-2 py-1 rounded hover:bg-blue-600 mb-4 inline-block">
                        Back to Orders
                    </a>
                
                    
                        <h1 class="text-2xl font-bold mb-4">Order #{{ $order->id }}</h1>
                
                        <p><strong>Client:</strong> {{ $order->client }}</p>
                        <p><strong>Destination:</strong> {{ $order->destination }}</p>
                        <p><strong>Exporter:</strong> {{ $order->exporter }}</p>
                        <p><strong>Date:</strong> {{ $order->date }}</p>
                        <p><strong>Notes:</strong> {{ $order->notes }}</p>
                
                        <hr class="my-6">
                
                        <h2 class="text-xl font-semibold mb-2">Pallets</h2>
                
                        @if($order->pallets->isEmpty())
                            <p class="text-gray-500">No pallets for this order yet.</p>
                        @else
                            <div class="overflow-x-auto">
                                <table class="w-full table-auto text-left border border-gray-300">
                                    <thead class="bg-gray-100">
                                        <tr>
                                            <th class="p-2 border">#</th>
                                            <th class="p-2 border">Field Number</th>
                                            <th class="p-2 border">Box Count</th>
                                            <th class="p-2 border">Lot Number</th>
                                            <th class="p-2 border">Pot Size</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($order->pallets as $pallet)
                                            <tr class="border-t">
                                                <td class="p-2 border">{{ $pallet->number }}</td>
                                                <td class="p-2 border">{{ $pallet->field_number }}</td>
                                                <td class="p-2 border">{{ $pallet->box_count }}</td>
                                                <td class="p-2 border">{{ $pallet->lot_number }}</td>
                                                <td class="p-2 border">{{ $pallet->pot_size }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @endif
                    
                </div>
            </div>
        </div>
    </div> 
    
</x-app-layout>
