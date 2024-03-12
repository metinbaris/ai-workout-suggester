@extends('base')
@section('content')

<ion-header>
    <ion-toolbar>
        <ion-title>AI Workout Suggester</ion-title>
    </ion-toolbar>
</ion-header>

<ion-content>
    <ion-grid>
        <ion-row>
            <ion-col size-md="6" offset-md="3">
                @include('forms/form-1')
                @include('forms/form-2')
            </ion-col>
        </ion-row>
    </ion-grid>
</ion-content>

@endsection