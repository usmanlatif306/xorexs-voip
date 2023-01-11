<div class="card-header center-between">
    <h5>{{ $title }}</h5>
    @if (isset($link_title))
        <a href="{{ $link }}" class="btn btn-sm btn-primary">{{ $link_title }}</a>
    @endif
</div>
