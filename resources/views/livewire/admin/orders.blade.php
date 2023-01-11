<div>
    <input class="form-control" type="search" wire:model="search" placeholder="Search by order number or username">

    <div class="table-responsive mt-2">
        <table class="table table-sm table-bordered table-striped table-hover text-center">
            <thead>
                <tr>
                    <th class="text-center">#</th>
                    <th class="text-center">User Name</th>
                    <th class="text-center">Type</th>
                    <th class="text-center">Package Name</th>
                    <th class="text-center">Price</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Created at</th>
                    <th class="text-center">Paid at</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($orders as $order)
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->user->name }}</td>
                        <td>{{ $order->package_id ? 'Package' : 'DID' }}</td>
                        <td>{{ $order->package->name }}</td>
                        <td>{{ setting('currency_sign') }}{{ $order->price }}</td>
                        <td class="text-capitalize">{{ $order->status }}</td>
                        <td>{{ $order->created_at->format('d/m/Y H:i A') }}</td>
                        <td>{{ $order->paid_at?->format('d/m/Y H:i A') ?? '-' }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8">No orders available</td>
                    </tr>
                @endforelse

            </tbody>
        </table>
        {{ $orders->links() }}
    </div>
</div>
