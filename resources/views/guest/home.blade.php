@extends('guest.template.base')

@section('title', 'DC Comics - Home')

@section('content')
    {{-- @dd($comics) --}}
    <ul>

        @foreach ($comics as $item)

            <li>
               {{ $item['title'] }}
            </li>

        @endforeach

    </ul>
@endsection
