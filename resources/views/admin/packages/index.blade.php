@extends('layouts.admin')
@section('title', 'Packages')
@include('partials.admin-breadcrumb', [
    'title' => 'Packages',
    'links' => [['title' => 'Packages']],
])
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                @include('partials.flash')
                <div class="card">
                    @include('partials.card-header', [
                        'title' => 'Packages',
                        'link_title' => 'New Package',
                        'link' => route('admin.packages.create'),
                    ])
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-sm table-bordered table-striped table-hover text-center">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th class="text-center">Peckage Name</th>
                                        <th class="text-center">#Lines</th>
                                        <th class="text-center">#Minutes</th>
                                        <th class="text-center">Billing Period</th>
                                        <th class="text-center">Price</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($packages as $package)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $package->name }}</td>
                                            <td>{{ $package->lines }}</td>
                                            <td>{{ $package->minutes }}</td>
                                            <td>{{ $package->period }}</td>
                                            <td>{{ $package->price }}</td>
                                            <td>{{ $package->status === 1 ? 'Active' : 'Disable' }}</td>
                                            <td>
                                                <a href="{{ route('admin.packages.edit', $package->id) }}"
                                                    title="Edit Peckage"><i class="fas fa-edit"></i></a>
                                                <span class="mx-2 pointer" title="Delete Peckage"
                                                    onclick="confirmDelete('package',{{ $package->id }})"><i
                                                        class="fas fa-trash text-danger"></i></span>
                                                <form action="{{ route('admin.packages.destroy', $package->id) }}"
                                                    method="post" id='package-{{ $package->id }}'>
                                                    @csrf
                                                    @method('delete')
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="8">No package available</td>
                                        </tr>
                                    @endforelse

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
