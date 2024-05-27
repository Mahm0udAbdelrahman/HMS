@extends('dashboard.layout.app')
@section('content')
    <div class="main-content app-content">
        <div class="container-fluid">
            <div class="row ">
                <div class="col">
                    <div class="card custom-card">
                        <div class="card-header justify-content-between">
                            <div class="card-title">
                                Add Category
                            </div>

                        </div>
                        <div class="card-body">
                            <form method="post" action="{{ route('admin.categories.store') }}" enctype="multipart/form-data">
                                @csrf

                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                aria-expanded="false" aria-controls="collapseOne">
                                                {{ __('Lang') }} <i class="arrow down"></i>
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse"
                                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">

                                                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                                        <li>
                                                            <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                                                {{ $properties['native'] }}
                                                            </a>
                                                        </li>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>


                                        @if(App::getLocale()=='en')

                                            <label for="" class="form-label">{{ __('name') }}
                                                *</label>
                                            <input type="text" name="name_en" class="form-control"
                                                value="{{ old('name_en') }}" autocomplete="off" required>
                                            @error('name_en')
                                                @foreach ($errors->get('name_en') as $error)
                                                    <div class="text-danger">
                                                        {{ $error }}</div>
                                                @endforeach
                                            @enderror
                                        @endif

                                        @if(App::getLocale()=='ar')

                                            <label for="" class="form-label">{{ __('name') }}
                                                *</label>
                                            <input type="text" name="name_ar" class="form-control"
                                                value="{{ old('name_ar') }}" autocomplete="off" required>
                                            @error('name_ar')
                                                @foreach ($errors->get('name_ar') as $error)
                                                    <div class="text-danger">
                                                        {{ $error }}</div>
                                                @endforeach
                                            @enderror
                                        @endif

                                        @if(App::getLocale()=='fr')

                                            <label for="" class="form-label">{{ __('name') }}
                                                *</label>
                                            <input type="text" name="name_fr" class="form-control"
                                                value="{{ old('name_fr') }}" autocomplete="off" required>
                                            @error('name_fr')
                                                @foreach ($errors->get('name_fr') as $error)
                                                    <div class="text-danger">
                                                        {{ $error }}</div>
                                                @endforeach
                                            @enderror
                                        @endif











                                    </div>
                                </div>



















                                <button type="submit" class="btn btn-primary">{{ __('Add') }}</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
