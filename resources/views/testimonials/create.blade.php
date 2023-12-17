<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create New Testimonials') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">    
                    <form method="POST" action="{{ route('testimonials.save_testimonials') }}" enctype="multipart/form-data">
                        @csrf

                        <!-- Name -->
                        <div>
                            <x-input-label for="name" :value="__('Name')" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <!-- Feedback -->
                        <div class="mt-4">
                            <x-input-label for="feedback" :value="__('Feedback')" />
                            <x-text-input id="feedback" class="block mt-1 w-full" type="text" name="feedback" :value="old('feedback')" required autofocus autocomplete="feedback" />
                            <x-input-error :messages="$errors->get('feedback')" class="mt-2" />
                        </div>

                        <!-- photos_or_video -->
                        <div class="mt-4">
                            <x-input-label for="photos_or_video" :value="__('Photos')" />
                            <x-text-input id="photos_or_video" class="block mt-1 w-full" type="file" name="photos_or_video" :value="old('photos_or_video')" required autofocus autocomplete="photos_or_video" />
                            <x-input-error :messages="$errors->get('photos_or_video')" class="mt-2" />
                        </div>

                        <!-- rating -->
                        <div class="mt-4">
                            <x-input-label for="rating" :value="__('Rating')" />
                            <x-text-input id="rating" class="block mt-1 w-full" type="number" name="rating" :value="old('rating')" required autofocus autocomplete="rating" />
                            <x-input-error :messages="$errors->get('rating')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('testimonials.testimonials_list') }}">
                                {{ __('Cancel') }}
                            </a>

                            <x-primary-button class="ms-4">
                                {{ __('Submit') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>    
            </div>    
        </div>    
    </div>
</x-app-layout>