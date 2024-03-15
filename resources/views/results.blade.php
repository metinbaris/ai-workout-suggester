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

        <ion-row class="ion-justify-content-center">
            <ion-col size="auto">
                <ion-button id="start-new-form-btn" type="button" expand="block" color="light">Start New Form</ion-button>
            </ion-col>
            <ion-col size="auto">
                <form id="refresh-suggestion-form" method="post" action="/refresh-suggestion">
                    @csrf
                    <ion-button id="refresh-suggestion-btn" type="button" expand="block">Refresh Suggestion</ion-button>
                </form>
            </ion-col>
        </ion-row>
    </div>
</ion-content>

@endsection

@section('js')
    @vite(['resources/js/results.js'])
@endsection