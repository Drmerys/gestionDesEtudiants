@extends('layouts.app')

@section('content')
    <x-guest-layout>
        <x-auth-card>

            <h3>Ajouter un étudiant </h3>
            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <form method="POST" action="{{route('students.store')}}" enctype="multipart/form-data">
                @csrf

                <!-- Last Name -->
                <div>
                    <x-label for="lastName" :value="__('LastName')" />

                    <x-input id="lastName" class="block mt-1 w-full" type="text" name="lastName" :value="old('lastName')" required autofocus />
                </div>

                <!-- First Name -->
                <div>
                    <x-label for="firstName" :value="__('FirstName')" />

                    <x-input id="firstName" class="block mt-1 w-full" type="text" name="firstName" :value="old('firstName')" required autofocus />
                </div>

                <!-- Age -->
                <div>
                    <x-label for="age" :value="__('Age')" />
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                    </div>
                    <input datepicker type="text" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
                </div>

                <!-- Email Address -->
                <div class="mt-4">
                    <x-label for="email" :value="__('Email')" />

                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                </div>

                <!-- Education Sector -->
                <div>
                     <x-label for="educationSector" :value="__('Education Sector')" />

                     <x-input id="educationSector" class="block mt-1 w-full" type="text" name="educationSector" :value="old('educationSector')" required autofocus />
                </div>

                <!-- Education Level -->
                <div>
                     <x-label for="educationLevel" :value="__('Education Level')" />

                     <x-input id="educationLevel" class="block mt-1 w-full" type="text" name="educationLevel" :value="old('educationLevel')" required autofocus />
                </div>

                <!-- Phone -->
                <div>
                     <x-label for="phone" :value="__('FirstName')" />

                     <x-input id="phone" class="block mt-1 w-full" type="tel" name="phone" :value="old('phone')" required autofocus />
                </div>

                <!-- Image -->
                <div class="flex justify-center">
                    <div class="mb-3 w-96">
                        <label for="formFileSm" class="form-label inline-block mb-2 text-gray-700">Small file input example</label>
                        <input class="form-control
                        block
                        w-full
                        px-2
                        py-1
                        text-sm
                        font-normal
                        text-gray-700
                        bg-white bg-clip-padding
                        border border-solid border-gray-300
                        rounded
                        transition
                        ease-in-out
                        m-0
                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="formFileSm" type="file" name="image">
                    </div>
                </div>

                <div class="flex items-center justify-end mt-4">
                     <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                         {{ __('Already registered?') }}
                     </a>

                     <x-button class="ml-4">
                         {{ __('Ajouter') }}
                     </x-button>
                </div>

            </form>

        </x-auth-card>
    </x-guest-layout>
@endsection
