@section('breadcrumbs')
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="page-header-title">
                        <h5 class="m-b-10">{{ $title }}</h5>
                        <p class="m-b-0">{{ isset($subtitle) ? $subtitle : 'Welcome to ' . config('app.name', 'Laravel') }}
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="{{ route('admin.dashboard') }}"> <i class="fa fa-home"></i> </a>
                        </li>
                        @foreach ($links as $link)
                            <li class="breadcrumb-item">
                                <a
                                    href="{{ isset($link['url']) ? $link['url'] : 'javascript:void(0)' }}">{{ $link['title'] }}</a>
                            </li>
                        @endforeach

                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
