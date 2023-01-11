<div class="table-responsive">
    <table class="table table-sm table-bordered table-striped table-hover">
        <thead>
            <tr>
                <th style="width: 5%;">#</th>
                <th>Type</th>
                <th>Title</th>
                <th style="width: 10%;">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($services as $service)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ ucfirst($service->type) }}</td>
                    <td>{{ $service->title }}</td>
                    <td>
                        <span class="fs-16 pointer" data-toggle="modal" data-target="#showService"
                            onclick="showService({{ $service }})" title="Show Service"><i
                                class="fas fa-eye"></i></span>
                        <a class="mx-2 fs-16" href="{{ route('admin.services.edit', $service->id) }}"
                            title="Edit Service"><i class="fas fa-edit"></i></a>
                        <span class="pointer fs-16" title="Delete Service"
                            onclick="confirmDelete('service',{{ $service->id }})"><i
                                class="fas fa-trash text-danger"></i></span>
                        <form action="{{ route('admin.services.destroy', $service->id) }}" method="post"
                            id='service-{{ $service->id }}' onsubmit="return confirm('Are you sure?')">
                            @csrf
                            @method('delete')
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">No service</td>
                </tr>
            @endforelse

        </tbody>
    </table>
    {{ $services->links() }}
</div>
