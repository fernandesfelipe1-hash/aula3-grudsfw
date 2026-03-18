<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>{{ $titulo }}</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    @foreach ($breadcrumbs as $key => $value)
                        <li class="breadcrumb-item">
                            <a href="{{ $value }}">{{ $key }}</a>
                        </li>
                    @endforeach
                    {{--
                        <!-- @for ($i = 0; $i < count($breadcrumbs); $i++)
                        <li class="breadcrumb-item">
                            <a href="#">{{ $breadcrumbs[$i] }}</a>
                        </li>
                            @endfor -->
                    --}}
                </ol>
            </div>
        </div>
    </div>
</section>