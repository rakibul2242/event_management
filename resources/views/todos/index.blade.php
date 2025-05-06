<x-app-layout>
    <div class="max-w-xl mx-auto mt-10 px-4 bg-gray-200 shadow-md py-6 rounded-md dark:bg-gray-800 dark:text-white">
        <h1 class="text-2xl font-bold text-center text-indigo-700 mb-6 dark:text-indigo-500">📝 To-Do List</h1>

        <form method="POST" action="{{ route('todos.store') }}" class="flex items-center gap-3 mb-6">
            @csrf
            <input type="text" name="title" placeholder="Add a new task..." required
                class="flex-1 rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-indigo-400 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-indigo-500 dark:text-white">
            <button class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-lg flex items-center gap-2 dark:bg-indigo-500 dark:hover:bg-indigo-600">
                ➕ <span>Add</span>
            </button>
        </form>

        <ul class="space-y-2">
            @foreach($todos as $todo)
            <li class="flex items-center justify-between bg-white px-3 py-2 rounded-md shadow hover:bg-gray-100 border dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600">
                <form method="POST" action="{{ route('todos.update', $todo) }}" class="flex items-center gap-3 w-full">
                    @csrf
                    @method('PUT')
                    <input type="checkbox" name="completed" onchange="this.form.submit()" title="Completed" class="cursor-pointer accent-indigo-600 w-5 h-5 dark:accent-indigo-500" {{ $todo->completed ? 'checked' : '' }}>
                    @if($todo->completed)
                    <del class="text-gray-600 font-medium dark:text-gray-400">{{ $todo->title }}</del>
                    @else
                    <span class="text-gray-800 font-medium dark:text-gray-200">{{ $todo->title }}</span>
                    @endif
                </form>

                <form method="POST" action="{{ route('todos.destroy', $todo) }}">
                    @csrf
                    @method('DELETE')
                    <button class="text-red-600 hover:text-red-700 dark:text-red-400 dark:hover:text-red-500" title="Delete">🗑️</button>
                </form>
            </li>
            @endforeach
        </ul>
    </div>
</x-app-layout>
