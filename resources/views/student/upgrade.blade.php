@extends('layouts.app')

@section('content')
    <h1 class="text-center">{{$title}}</h1>

    @if($upgrades->count() > 0)
        <table class="table-auto">
            <thead>
            <tr>
                <th>Matière</th>
                <th>Note</th>
                <th>date</th>
            </tr>
            </thead>
            <tbody>
                @foreach($upgrades as $upgrade)
                    <tr>
                        <td>{{$upgrade->matter}}</td>
                        <td>{{$upgrade->upgrade}}</td>
                        <td>{{$upgrade->date}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <div class="bg-orange-100 border-orange-500 text-orange-700 p-4" role="alert">
            <p class="font-bold">Liste Vide</p>
            <p>Il y a pas de notes disponible !</p>
        </div>
    @endif

@endsection
