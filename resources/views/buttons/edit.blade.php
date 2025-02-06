<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Button</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="bg-white p-6 rounded-lg shadow-lg w-1/3">
        <h2 class="text-xl font-bold mb-4">Customize Button</h2>
        <form method="POST" action="{{ route('buttons.update', $button->id) }}">
            @csrf
            @method('PUT')

            <label class="block mb-2">Title:</label>
            <input type="text" name="title" value="{{ old('title', $button->title) }}" class="w-full p-2 border rounded-lg mb-3">

            <label class="block mb-2">Link:</label>
            <input type="url" name="link" value="{{ old('link', $button->link) }}" class="w-full p-2 border rounded-lg mb-3">

            <label class="block mb-2">Color:</label>
            <select name="color" class="w-full p-2 border rounded-lg mb-3">
                @foreach ($colors as $color)
                    <option value="{{ $color }}" {{ $button->color == $color ? 'selected' : '' }}>
                        {{ ucfirst($color) }}
                    </option>
                @endforeach
            </select>

            <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded-lg">Save</button>
        </form>
    </div>
</body>
</html>
