<div class="card">

    @isset($header)
        <div class="card-header pb-0 card-no-border">
            {{$header}}
        </div>
    @endisset
    
    <div class="card-body">
        @if (@isset($body))
            {{$body}}    
        @else
            {{$slot}}
        @endif
    </div>

    @isset($footer)
        <div class="card-footer pb-0 card-no-border">
            {{$footer}}
        </div>
    @endisset

</div>