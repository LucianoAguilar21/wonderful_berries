@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4 max-w-xl">
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
@endsection
