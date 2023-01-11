<div>
    <input class="form-control" type="search" wire:model="search" placeholder="Search by subscription number or username">

    <div class="table-responsive mt-2">
        <table class="table table-sm table-bordered table-striped table-hover text-center">
            <thead>
                <tr>
                    <th class="text-center">#</th>
                    <th class="text-center">User Name</th>
                    <th class="text-center">Package Name</th>
                    <th class="text-center">Ending At</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($subscriptions as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->user->name }}</td>
                        <td>{{ $item->package->name }}</td>
                        <td>{{ $item->ends_at?->format('d/m/Y H:i A') }}</td>
                        <td>{{ $item->status ? 'Active' : 'Disable' }}</td>
                        <td>
                            <a href="{{ route('admin.subscriptions.show', $item) }}" class="pr-2 fs-16"
                                title="View Subscription"><i class="fas fa-eye"></i></a>
                            <span class="pointer fs-16" title="Edit Subscription" data-toggle="modal"
                                data-target="#viewModel{{ $item->id }}"><i class="fas fa-edit"></i></span>
                        </td>
                    </tr>

                    <!-- Edit Model -->
                    @include('admin.subscriptions.edit', ['subscription' => $item])
                @empty
                    <tr>
                        <td colspan="8">No subscriptions available</td>
                    </tr>
                @endforelse

            </tbody>
        </table>
        {{ $subscriptions->links() }}
    </div>
</div>
