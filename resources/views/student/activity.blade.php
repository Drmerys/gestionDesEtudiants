@extends('layouts.app')

@section('content')
    <h1 class="text-center">{{$title}}</h1>

    <div class="flex space-x-2 justify-center mt-4">
        <a href="{{route('students.create')}}" class="inline-block px-6 py-2.5 bg-green-500 font-bold text-xs leading-tight uppercase rounded shadow-md hover:bg-green-600 hover:shadow-lg focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-lg transition duration-150 ease-in-out">Ajouter une activité</a>
    </div>

    @if($activities->count() > 0)
        <div class="flex flex-col items-center">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-4 inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="overflow-hidden">
                        <table class="min-w-full text-center">
                            <thead class="border-b bg-gray-800">
                            <tr>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                    ID
                                </th>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                    Activité
                                </th>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                    Date
                                </th>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                    Voir
                                </th>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                    Modifier
                                </th>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                    Supprimer
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($activities as $activity)
                                <tr class="bg-white border-b">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{$activity->id}}</td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        {{$activity->activity}}
                                    </td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        {{$activity->created_at}}
                                    </td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        <form method="POST">
                                            @csrf
                                            <a href="{{route('students.show', $activity->id)}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Voir plus</a>
                                        </form>
                                    </td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        <form method="POST">
                                            @csrf
                                            <a href="{{route('students.edit', $activity->id)}}" class="font-medium text-green-600 dark:text-green-500 hover:underline">Modifier</a>
                                        </form>
                                    </td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        <form method="POST">
                                            @csrf
                                            <a href="{{route('students.destroy', $activity->id)}}" class="font-medium text-red-600 dark:text-red-500 hover:underline">Supprimer</a>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="bg-orange-100 border-orange-500 text-orange-700 p-4" role="alert">
            <p class="font-bold">Liste Vide</p>
            <p>Il y a pas de notes disponible !</p>
        </div>
    @endif

@endsection
