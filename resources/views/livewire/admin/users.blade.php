<div>
    <input class="form-control" type="search" wire:model="search" placeholder="Search...">

    <div class="table-responsive mt-2">
        <table class="table table-sm table-bordered table-striped table-hover text-center">
            <thead>
                <tr>
                    <th class="text-center">#</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Phone</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($users as $user)
                    <tr>
                        <td>{{ iteration($users, $loop->index) }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->phone }}</td>
                        <td>{{ $user->status ? 'Active' : 'Disable' }}</td>
                        <td>
                            <a href="{{ route('admin.users.show', $user) }}" class="pr-2 fs-16" title="View User"><i
                                    class="fas fa-eye"></i></a>
                            <span class="pointer fs-16" title="Edit User" data-toggle="modal"
                                data-target="#viewModel{{ $user->id }}"><i class="fas fa-edit"></i></span>
                        </td>
                    </tr>

                    <!-- Edit Model -->
                    @include('admin.users.edit', ['user' => $user])
                @empty
                    <tr>
                        <td colspan="8">No subscriptions available</td>
                    </tr>
                @endforelse

            </tbody>
        </table>
        {{ $users->links() }}
    </div>
</div>
