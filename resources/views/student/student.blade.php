@extends('layouts.app')

@section('content')
{{--    @if($message = session::get('success'))--}}
{{--        <p style="color: green">{{$message}}</p>--}}
{{--    @endif--}}

    <h1 class="text-center">Liste des étudiants </h1><br>

    <div class="flex space-x-2 justify-center">
        <a href="{{route('students.create')}}" class="inline-block px-6 py-2.5 bg-green-500 font-bold text-xs leading-tight uppercase rounded shadow-md hover:bg-green-600 hover:shadow-lg focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-lg transition duration-150 ease-in-out">Ajouter un étudiant</a>
    </div>

    <div class="items-end mt-4">
        <form>
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-gray-300">Search</label>
            <div class="relative">
                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                </div>
                <input type="search" id="default-search" class="block p-4 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Mockups, Logos..." required>
                <button type="submit" class="text-black absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
            </div>
        </form>
    </div>

    @if($students->count() > 0)
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
{{--                                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">--}}
{{--                                        Nom--}}
{{--                                    </th>--}}
                                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                        Prénom
                                    </th>
{{--                                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">--}}
{{--                                        Email--}}
{{--                                    </th>--}}
                                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                        Filière
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                        Niveau d'étude
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                        Téléphone
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
                                @foreach($students as $student)
                                    <tr class="bg-white border-b">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{$student->id}}</td>
{{--                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">--}}
{{--                                            {{$student->lastName}}--}}
{{--                                        </td>--}}
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            {{$student->firstName}}
                                        </td>
{{--                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">--}}
{{--                                            {{$student->email}}--}}
{{--                                        </td>--}}
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            {{$student->educationSector}}
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            {{$student->educationLevel}}
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            {{$student->phone}}
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            <form method="POST">
                                                @csrf
                                                <a href="{{route('students.show', $student->id)}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Voir plus</a>
                                            </form>
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            <form method="POST">
                                                @csrf
                                                <a href="{{route('students.edit', $student->id)}}" class="font-medium text-green-600 dark:text-green-500 hover:underline">Modifier</a>
                                            </form>
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            <form method="POST">
                                                @csrf
                                                <a href="{{route('students.destroy', $student->id)}}" class="font-medium text-red-600 dark:text-red-500 hover:underline">Supprimer</a>
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
            <p class="font-bold">Liste d'étudiant vide</p>
            <p>Il y a pas de d'étudiants inscrit !</p>
        </div>
    @endif
@endsection
