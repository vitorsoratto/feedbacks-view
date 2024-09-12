<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Feedbacks</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <!-- Tailwind CSS -->
    @vite('resources/css/app.css')
</head>

<body>
    <div class="flex flex-col min-h-screen px-4 py-12 bg-gray-800 text-white sm:px-6 lg:px-8">
        <div class="flex flex-col items-center justify-center w-full mb-12">
            <h1 class="text-6xl font-bold">Feedbacks Apps - Koala Mob</h1>
            <p class="text-2xl">
                {{ $feedbacks->count() }} feedbacks
            </p>
        </div>

        <div class="flex flex-col w-full">
            @foreach ($apps as $app)
                <div class="flex flex-row items-center justify-between w-full border border-gray-600 rounded-lg p-4">
                    <div class="flex flex-col">
                        <p class="text-xl font-bold mb-2">
                            {{ $app }}
                        </p>
                        @foreach ($feedbacks as $feedback)
                            <div class="flex flex-row items-center justify-between w-full">
                                <div class="flex flex-col">
                                    <p class="text-gray-300 my-2">
                                        {{ $feedback->created_at->format('d/m/Y') }} - {{ $feedback->feedback }}
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</body>

</html>
