@extends('layouts.main')

@section('container')
{{-- @include('partials.header') --}}
    <header class="py-5" style="background-color: #6B4F4F ;">
    <img class="masthead-avatar rounded-circle mx-auto d-block" style="width:20%" src="img/{{ $image }}" alt="..." />
             <div class="container px-8">
                <div class="row gx-8 justify-content-center">
                    <div class="col-lg-9">
                        <div class="text-center my-5">
                            <h1 class="display-5 fw-bolder text-white mb-2">Hai, It's Me Lianda</h1>
                            <h3 class="lead text-white-50 mb-4">Nice To Meet You</h3>
                            <p class="lead text-white-50 mb-4">{{ $summary }}</p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </header>
@endsection
