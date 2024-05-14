<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emailed List</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-yellow-400 p-4">
    <div class="container mx-auto">
        <div class="max-w-xl mx-auto">
            @if ($items->isNotEmpty())
            <table class="mt-4 w-full">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="px-4 py-2">Item</th>
                        <th class="px-4 py-2">Description</th>
                        <th class="px-4 py-2">Due Date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($items as $item)
                    <tr class="bg-white hover:bg-gray-100">
                        <td class="px-4 py-2">{{ $item->name }}</td>
                        <td class="px-4 py-2">{{ $item->description }}</td>
                        <td class="px-4 py-2">{{ $item->due_date }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @else
            <p class="italic text-gray-500 mt-4">No items added yet!</p>
            @endif
            <div class="mt-8">
                <a href="/listbuilder" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold rounded-md py-2 px-4">Back to List Builder</a>
            </div>
        </div>
    </div>
</body>

</html>