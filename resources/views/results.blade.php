@extends('base')
@section('css')
    @vite(['resources/css/results.css'])
@endsection

@section('content')

<ion-header>
    <ion-toolbar>
        <ion-title>AI Workout Suggester</ion-title>
    </ion-toolbar>
</ion-header>

<ion-content>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    @foreach($results as $day => $workout)
                        <th>{{ $day }}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach($results as $day => $workout)
                        <td class="workout-title">{{ $workout->ExerciseTitle }}</td>
                    @endforeach
                </tr>
                <tr>
                @foreach($results as $day => $workout)
                    <td>
                        @foreach($workout->WarmUp as $warmup)
                            <li>{{ $warmup->Name }} <span class="description">{{ $warmup->Description}} Warmup</span></li>
                        @endforeach
                        @foreach($workout->MainExercises as $exercise)
                            <li>{{ $exercise->Name }} <span class="description">{{ $exercise->Description}}</span></li>
                        @endforeach
                    </td>
                @endforeach
            </tr>
            </tbody>
        </table>
    </div>
   
    <ion-row>
        <ion-col size="3" offset="3">
            <ion-button id="start-new-form-btn" type="button" expand="full" color="light">Start New</ion-button>
        </ion-col>
        <ion-col size="3">
            <form id="refresh-suggestion-form" method="post" action="/refresh-suggestion">
                @csrf
                <ion-button id="refresh-suggestion-btn" type="button" expand="full">Refresh</ion-button>
            </form>
        </ion-col>
    <ion-row>
</ion-content>

@endsection

@section('js')
    @vite(['resources/js/results.js'])
@endsection