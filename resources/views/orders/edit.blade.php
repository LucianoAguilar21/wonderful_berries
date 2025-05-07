<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Order') }}
        </h2>
    </x-slot>

    {{-- @section('content') --}}
    <div class="container mx-auto p-4 max-w-xl">
        <h1 class="text-2xl font-bold mb-4">Edit Order</h1>

        <form action="{{ route('orders.update', $order) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')

            <div>
                <label class="block">Client</label>
                <input type="text" name="client" value="{{ $order->client }}" class="w-full border rounded p-2" required>
            </div>

            <div>
                <label class="block">Destination</label>
                <input type="text" name="destination" value="{{ $order->destination }}" class="w-full border rounded p-2">
            </div>

            <div>
                <label class="block">Exporter</label>
                <input type="text" name="exporter" value="{{ $order->exporter }}" class="w-full border rounded p-2">
            </div>

            <div>
                <label class="block">Date</label>
                <input type="date" name="date" value="{{ $order->date }}" class="w-full border rounded p-2">
            </div>

            <div>
                <label class="block">Notes</label>
                <textarea name="notes" class="w-full border rounded p-2">{{ $order->notes }}</textarea>
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                Update
            </button>
        </form>
    </div>
    {{-- @endsection --}}
</x-app-layout>
