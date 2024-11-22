<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight">Tasks</h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-between items-center mb-6">
                <a href="{{ route('tasks.create') }}" class="px-6 py-3 bg-indigo-600 text-white rounded-lg shadow-md hover:bg-indigo-700 transition duration-300 ease-in-out">
                    Add Task
                </a>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($tasks as $task)
                    <div class="bg-white shadow-lg rounded-lg p-6 hover:shadow-xl transition duration-300 ease-in-out transform hover:scale-105">
                        <h3 class="font-semibold text-xl text-gray-800 mb-4">{{ $task->title }}</h3>
                        <p class="text-gray-600 mb-4">{{ $task->description }}</p>
                        <p class="text-sm text-gray-500">
                            <span class="font-bold">Status:</span> 
                            <span class="{{ $task->completed ? 'text-green-500' : 'text-red-500' }}">
                                {{ $task->completed ? 'Completed' : 'Incomplete' }}
                            </span>
                        </p>

                        <div class="mt-4 flex space-x-3">
                            <!-- Edit Button with clear visible text -->
                            <a href="{{ route('tasks.edit', $task) }}" class="px-6 py-2 bg-yellow-600 text-black rounded-lg shadow-md hover:bg-yellow-700 transition duration-300">
                                Edit
                            </a>
                            <!-- Delete Button -->
                            <form action="{{ route('tasks.destroy', $task) }}" method="POST" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="px-6 py-2 bg-red-600 text-white rounded-lg shadow-md hover:bg-red-700 transition duration-300">
                                    Delete
                                </button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="mt-6">
                {{ $tasks->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
