<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
            {{ isset($task) ? 'Edit Task' : 'Create Task' }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8 bg-white p-6 rounded-lg shadow-md">
            <form action="{{ isset($task) ? route('tasks.update', $task) : route('tasks.store') }}" method="POST">
                @csrf
                @if(isset($task))
                    @method('PUT')
                @endif

                <div class="space-y-4">
                    <!-- Title Input -->
                    <div>
                        <label for="title" class="block text-sm font-medium text-gray-700">Task Title</label>
                        <input type="text" name="title" id="title" value="{{ old('title', $task->title ?? '') }}" 
                               class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500" 
                               required>
                               @error('title')
                        <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                    @enderror
                    </div>

                    <!-- Description Input -->
                    <div>
                        <label for="description" class="block mt-2 text-sm font-medium text-gray-700">Description</label>
                        <textarea name="description" id="description" rows="4" 
                                  class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500" 
                                  required>{{ old('description', $task->description ?? '') }}</textarea>
                        @error('description')
                            <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                        @enderror

                    </div>

                    <!-- Status Checkbox -->
                    <div>
                        <label for="completed" class="inline-flex items-center mt-2">
                        <input type="checkbox" name="completed" id="completed" class="form-checkbox text-indigo-600 h-5 w-5" {{ old('completed', $task->completed) ? 'checked' : '' }}>
                        <span class="ml-2 text-sm text-gray-700"> Mark as Completed</span>
                        </label>
                        @error('completed')
                            <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                        @enderror

                    </div>
                </div>

                <div class="mt-6 flex justify-between items-center">
                    <button type="submit" class="px-6 py-2 bg-indigo-600 text-black rounded-md shadow-md hover:bg-indigo-700 transition duration-300">
                        {{ isset($task) ? 'Update Task' : 'Create Task' }}
                    </button>

                    <a href="{{ route('tasks.index') }}" class="px-6 py-2 bg-gray-300 text-gray-800 rounded-md shadow-md hover:bg-gray-400 transition duration-300">
                        Cancel
                    </a>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
