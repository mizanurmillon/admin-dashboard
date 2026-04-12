<div class="card-header pb-0 card-no-border">
    <h4>{{ $title }}</h4>
    @isset($subtitle)
    <span>{{ $subtitle }}</span>
    @endisset
    @isset($route)
    <a href="{{ $route }}" class="btn btn-primary float-right mt-3">+ {{ $buttonText ?? 'Add New' }}</a>
    @endisset
</div>



