@extends('layouts.app')

@section('content')
    <h1>{{$title}}</h1>

    @if($upgrades->count() > 0)
        @foreach($upgrades as $upgrade)
            <h1>{{$upgrade->matter}} || {{$upgrade->upgrade}} || {{$upgrade->date}} || </h1>
        @endforeach
    @else
        <h2>Pas de notes disponible pour cette étudiant !</h2>
    @endif


    <table class="table-auto">
    <thead>
    <tr>
        <th>Song</th>
        <th>Artist</th>
        <th>Year</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>The Sliding Mr. Bones (Next Stop, Pottersville)</td>
        <td>Malcolm Lockyer</td>
        <td>1961</td>
    </tr>
    <tr>
        <td>Witchy Woman</td>
        <td>The Eagles</td>
        <td>1972</td>
    </tr>
    <tr>
        <td>Shining Star</td>
        <td>Earth, Wind, and Fire</td>
        <td>1975</td>
    </tr>
    </tbody>
    </table>
@endsection
