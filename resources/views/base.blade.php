<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI Workout Suggester</title>
    @vite(['resources/css/app.css'])
    <link href="https://cdn.jsdelivr.net/npm/@ionic/core@latest/css/ionic.bundle.css" rel="stylesheet">
    <meta name="color-scheme" content="dark"/>
    @yield('css')
</head>
<body>

    <ion-app>
        @yield('content')
    </ion-app>

    <script src="https://cdn.jsdelivr.net/npm/@ionic/core@latest/dist/ionic/ionic.js"></script>
    @yield('js')
</body>
</html>
