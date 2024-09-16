@extends('layouts.main')

@section('content')

    <div class="container my-5">
        <h1>I TRENI</h1>

        @if ($trains)
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Compagnia</th>
                        <th scope="col">Stazione di partenza</th>
                        <th scope="col">Stazione di arrivo</th>
                        <th scope="col">Orario Partenza</th>
                        <th scope="col">Giorno di Partenza</th>
                        <th scope="col">Orario Arrivo</th>
                        <th scope="col">Giorno di Arrivo</th>
                        <th scope="col">Codice treno</th>
                        <th scope="col">Numero Carrozze</th>
                        <th scope="col">In Orario</th>
                        <th scope="col">Cancellato</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($trains as $train)
                        <tr>
                            <td>{{ $train->id }}</td>
                            <td>{{ $train->company }}</td>
                            <td>{{ $train->departure_station }}</td>
                            <td>{{ $train->arrival_station }}</td>
                            <td>{{ $train->departure_time }}</td>
                            <td>{{ \Carbon\Carbon::parse($train->departure_date)->format('d-m-Y') }}</td>
                            <td>{{ $train->arrival_time }}</td>
                            <td>{{ \Carbon\Carbon::parse($train->departure_date)->format('d-m-Y') }}</td>
                            <td>{{ $train->train_code }}</td>
                            <td>{{ $train->carriage_number }}</td>
                            <td>
                                {{ $train->in_time ? 'SI' : 'NO' }}
                            </td>
                            <td>{{ $train->deleted ? 'SI' : 'NO' }}</td>

                        </tr>
                    @endforeach

                </tbody>
            </table>
        @else
            <h2>Non ci sono treni programmati !!!</h2>
        @endif



    </div>
@endsection

@section('titlePage')
    Trains
@endsection
