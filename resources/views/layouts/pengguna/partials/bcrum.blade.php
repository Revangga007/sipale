<section class="breadcrumbs no-print">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h2>{{$title ?? null}}</h2>
            <ol>
                <li><a href="{{ $bcrum['url-first'] }}">{{ $bcrum['name-first'] }}</a></li>
                @if(isset($bcrum['url-second']))
                <li><a href="{{ $bcrum['url-second'] }}">{{ $bcrum['name-second'] }}</a></li>
                @endif
                <li class="breadcrumb-item">{{ $bcrum['current'] }}</li>
            </ol>
        </div>
    </div>
</section>