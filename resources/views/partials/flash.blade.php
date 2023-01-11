@if (session('success') || session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }} {{ session('status') }}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger" role="alert">
        {{ session('error') }}
    </div>
@endif
