<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buttons Grid</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="grid grid-cols-3 gap-4 w-3/4">
        @foreach ($buttons as $button)
            <a href="{{ $button->set ? $button->link : route('buttons.edit', $button->id) }}" 
                class="flex items-center justify-center p-4 text-white rounded-lg shadow-md transition duration-300 transform hover:scale-105"
                style="background-color: {{ $button->color }}">
                    {{ $button->title }}
            </a>
        @endforeach
    </div>
</body>
</html>
