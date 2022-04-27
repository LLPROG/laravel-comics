@extends('guest.template.base')

@section('title', 'DC Comics - Home')

@section('content')
    {{-- @dd($comics) --}}
    <div class="container">
        <div class="cards">
            @foreach ($comics as $item)
                <div class="card">


                    <img src="{{ $item['thumb'] }}" alt="{{ $item['title'] }}">

                    <h3>
                        {{ $item['series'] }}
                    </h3>
                </div>
            @endforeach
        </div>
    </div>
@endsection
