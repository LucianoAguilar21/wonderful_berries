<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Orders') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                        <div class="container mx-auto p-4">
                            <h1 class="text-2xl font-bold mb-4">Orders</h1>

                            <a href="{{ route('orders.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 mb-4 inline-block">
                                + New Order
                            </a>

                            <table class="min-w-full bg-white border border-gray-200 shadow rounded">
                                <thead>
                                    <tr class="bg-gray-100 text-left">
                                        <th class="p-2 border-b">Client</th>
                                        <th class="p-2 border-b">Date</th>
                                        <th class="p-2 border-b">Status</th>
                                        <th class="p-2 border-b">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $order)
                                    <tr class="border-t">                                        
                                        <td class="p-2">{{ $order->client }}</td>
                                        <td class="p-2">{{ $order->date }}</td>
                                        <td class="p-2">{{ ucfirst($order->status) }}</td>
                                        <td class="p-2">
                                            <a href="{{ route('orders.edit', $order) }}" class="text-blue-500 hover:underline">Edit</a>
                                            <a href="{{ route('orders.show', $order) }}" class="text-blue-500 hover:underline">Ver</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    

                </div>
            </div>
        </div>
    </div>
</x-app-layout>


