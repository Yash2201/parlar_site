@php
    use Illuminate\Support\Str;
@endphp
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Manage Testimonials') }}
        </h2>
        <div class="flex items-center justify-end">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('testimonials.create') }}">
                <x-primary-button class="ms-4">
                    {{ __('Create New Testimonial') }}
                </x-primary-button>
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="text-2xl font-bold mb-4">Testimonials</h1>
                    <div class="overflow-x-auto">
                        @if(count($testimonials) > 0)
                            <table class="table-auto w-full border border-collapse border-gray-200">
                                <thead>
                                    <tr>
                                        <th class="px-4 py-2 bg-gray-100 border">Name</th>
                                        <th class="px-4 py-2 bg-gray-100 border">Feedback</th>
                                        <th class="px-4 py-2 bg-gray-100 border">Photos</th>
                                        <th class="px-4 py-2 bg-gray-100 border">Rating</th>
                                        <th class="px-4 py-2 bg-gray-100 border">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($testimonials as $testimonial)
                                        <tr>
                                            <td class="px-4 py-2 border">{{ $testimonial->name }}</td>
                                            <td class="px-4 py-2 border">{{ Str::limit($testimonial->feedback, 40, '.....') }}</td>
                                            <td class="px-4 py-2 border">
                                                <img src="{{ asset(asset('/uploads/'. $testimonial->photos_or_video)) }}" width="100" height="100" class="img-fluid" alt="Image">
                                            </td>

                                            <td class="px-4 py-2 border">{{ $testimonial->rating }}</td>
                                            <!-- Add more fields as needed -->
                                            <td class="px-4 py-2 border">
                                                <a href="{{ route('testimonials.edit', $testimonial->id) }}">
                                                    <x-primary-button class="ms-4">
                                                        Edit
                                                    </x-primary-button>
                                                </a>
                                                
                                                <!-- Add delete button if needed -->
                                                <form action="{{ route('testimonials.delete', $testimonial->id) }}" method="post" class="inline" onsubmit="return confirm('Are you sure you want to delete this testimonial?')">
                                                    @csrf
                                                    @method('delete')
                                                    <x-primary-button class="ms-4">
                                                        Delete
                                                    </x-primary-button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                            <div class="text-center py-4 text-gray-600 dark:text-gray-400">
                                No testimonials available.
                            </div>
                        @endif
                    </div>    
                </div>    
            </div>    
        </div>
    </div>
</x-app-layout>    