@extends('layouts.app')

@section('content')
    <x-guest-layout>
        <x-auth-card>

            <h3 class="text-center">Ajout de note </h3>
            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <form method="POST" action="{{route('upgrade_create')}}" enctype="multipart/form-data">
                @csrf
                <!-- Matter -->
                <div>
                    <x-label for="matter" :value="__('Module')" />

                    <x-input id="matter" class="block mt-1 w-full" type="text" name="matter" :value="old('matter')" required autofocus />
                </div>

                <!-- Upgrade -->
                <div>
                    <x-label for="upgrade" :value="__('Note')" />

                    <x-input id="upgrade" class="block mt-1 w-full" type="text" name="upgrade" :value="old('upgrade')" required autofocus />
                </div>

                <!-- Date -->
                <div class="relative">
                    <x-label for="date" :value="__('Date')" />
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                    </div>
                    <input datepicker id="date" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="date" placeholder="Select date">
                </div>

                <!-- Student -->
                <div>
                    <x-label for="student" :value="__('Etudiant')" />

                    <x-input id="student" class="block mt-1 w-full" type="text" name="student" :value="old('student')" required autofocus />
                </div>

                <div class="flex items-center justify-end mt-4">

                    <x-button class="ml-4">
                        {{ __('Ajouter') }}
                    </x-button>
                </div>

            </form>

        </x-auth-card>
    </x-guest-layout>
@endsection
