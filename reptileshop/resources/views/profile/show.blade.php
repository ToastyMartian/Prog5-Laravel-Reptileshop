@extends('layouts.layout')

@section('content')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            @livewire('profile.update-profile-information-form')
            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                <x-jet-section-border />

                <div class="mt-10 sm:mt-0">
                    @livewire('profile.update-password-form')
                </div>
            @endif

            @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                <x-jet-section-border />

                <div class="mt-10 sm:mt-0">
                    @livewire('profile.two-factor-authentication-form')
                </div>
            @endif

            <x-jet-section-border />



            <div class="mt-10 sm:mt-0">
                @livewire('profile.delete-user-form')
            </div>
        </div>
    </div>
    <link rel="stylesheet" href="public/css/switch.css">
    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
        <h2><b>Change profile preferences</b></h2><br>
        <p>Breeding/selling reptiles</p>
            <label class="switch">
                No
                <input type="checkbox">
                <span class="lever"></span> Yes
            </label>
        <p>Breeding/selling amphibians</p>
            <label class="switch">
                No
                <input type="checkbox">
                <span class="lever"></span> Yes
            </label>
        <p>Producing/selling supplies</p>
            <label class="switch">
                No
                <input type="checkbox">
                <span class="lever"></span> Yes
            </label>
        <p>Fostering exotic animals</p>
            <label class="switch">
                No
                <input type="checkbox">
                <span class="lever"></span> Yes
            </label>
        <p>Rescuing exotic animals</p>
            <label class="switch">
                No
                <input type="checkbox">
                <span class="lever"></span> Yes
            </label>
        <p>Educational shows</p>
            <label class="switch">
                No
                <input type="checkbox">
                <span class="lever"></span> Yes
            </label>
        <p>Herping</p>
            <label class="switch">
                No
                <input type="checkbox">
                <span class="slider"></span> Yes
            </label>
    </div>
</x-app-layout>

@endsection
