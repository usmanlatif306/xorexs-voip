<div class="table-responsive">
    <table class="table table-sm table-bordered table-striped table-hover text-center">
        <thead>
            <tr>
                <th class="text-center">No</th>
                <th class="text-center">Code</th>
                <th class="text-center">Discount (%)</th>
                <th class="text-center">Status</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($coupons as $coupon)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $coupon->name }}</td>
                    <td>{{ $coupon->value }}</td>
                    <td>{{ $coupon->status === 1 ? 'Active' : 'Disable' }}</td>
                    <td>
                        <a class="fs-16" href="{{ route('admin.coupons.show', $coupon->id) }}" title="Show Peckage"><i
                                class="fas fa-eye"></i></a>
                        <a class="mx-2 fs-16" href="{{ route('admin.coupons.edit', $coupon->id) }}"
                            title="Edit Peckage"><i class="fas fa-edit"></i></a>
                        <span class="pointer fs-16" title="Delete Peckage"
                            onclick="confirmDelete('coupon',{{ $coupon->id }})"><i
                                class="fas fa-trash text-danger"></i></span>
                        <form action="{{ route('admin.coupons.destroy', $coupon->id) }}" method="post"
                            id='coupon-{{ $coupon->id }}' onsubmit="return confirm('Are you sure?')">
                            @csrf
                            @method('delete')
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">No coupon code</td>
                </tr>
            @endforelse

        </tbody>
    </table>
    {{ $coupons->links() }}
</div>
