@extends('template')

@section('title')
    @if (isset($title))
        - {{ $title }}
    @endif
@endsection

@section('content')
    <br>
    <div class="container">
        <h2>Specjalizacje</h2>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($specializations as $specialization)

            <tr>
                <th scope="row">{{ $specialization->id }}</th>
                <td>{{ $specialization->name  }}</td>
            </tr>

        @endforeach
        </tbody>
    </table>
    </div>
@endsection('content')
