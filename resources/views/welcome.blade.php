<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buttons Grid</title>
    <link
      href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css"
      rel="stylesheet"
    />
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="grid grid-cols-3 gap-4 w-3/4">
        @foreach ($buttons as $button)
            <a href="{{ $button->set ? $button->link : route('buttons.edit', $button->id) }}" 
                class="flex items-center justify-center  p-4 rounded-lg border-4 border-black relative"
                style="background-color: {{ $button->color }}">
                    {{ $button->title }}
            </a>
        @endforeach
    </div>
</body>
</html>