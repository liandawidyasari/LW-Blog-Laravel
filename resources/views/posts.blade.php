@extends('layouts.main')

@section('container')
    <header class="py-5" style="background-color: #483434 ;">
             <div class="container px-8">
                <div class="row gx-8 justify-content-center">
                    <div class="col-lg-9">
                        <div class="text-center my-5">
                            <h1 class="display-5 fw-bolder text-white mb-2">This is My Portfolio</h1>
                            <h3 class="lead text-white-50 mb-4">Nice To Meet You</h3>
                            <p class="lead text-white-50 mb-4">This Portfolio can also be viewed directly on my github account, </p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </header>
    @foreach ($posts as $post)
    {{-- @foreach ($certifs as $certif) --}}
    {{-- <article class="mb-5">
        <h2><a href="{{ $post["url"] }}">{{ $post["title"] }}</a></h2>
        <p>{{ $post->program }}</p>
        {{ $post->body }}
        </article> --}}
        @include('partials.portfolio')
        {{-- @include('partials.porto') --}}
    {{-- @endforeach --}}
    @endforeach
    
@endsection