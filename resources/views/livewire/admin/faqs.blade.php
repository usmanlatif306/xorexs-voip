<div class="table-responsive">
    <table class="table table-sm table-bordered table-striped table-hover">
        <thead>
            <tr>
                <th style="width: 5%;">#</th>
                <th>Question</th>
                <th style="width: 10%;">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($faqs as $faq)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $faq->question }}</td>
                    <td>
                        {{-- <a class="fs-16" href="{{ route('admin.faqs.show', $faq->id) }}" title="Show FAQ"><i
                                class="fa fa-eye"></i></a> --}}
                        <span class="fs-16 pointer" onclick="show({{ $faq }})" title="Show FAQ"><i
                                class="fa fa-eye"></i></span>
                        <a class="mx-2 fs-16" href="{{ route('admin.faqs.edit', $faq->id) }}" title="Edit FAQ"><i
                                class="fa fa-edit"></i></a>
                        <span class="pointer fs-16" title="Delete FAQ"
                            onclick="confirmDelete('faq',{{ $faq->id }})"><i
                                class="fa fa-trash text-danger"></i></span>
                        <form action="{{ route('admin.faqs.destroy', $faq->id) }}" method="post"
                            id='faq-{{ $faq->id }}' onsubmit="return confirm('Are you sure?')">
                            @csrf
                            @method('delete')
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">No faq</td>
                </tr>
            @endforelse

        </tbody>
    </table>
    {{ $faqs->links() }}
</div>
