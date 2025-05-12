<section class="">
    <header>
        <h2 class="text-lg font-medium  text-center text-gray-900">
            {{ __('Create Offer') }}
        </h2>
    </header>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="title" :value="__('Title')" />
            <x-text-input id="title" name="title" type="text" class="mt-1 block w-full" :value="old('name')" required
                autofocus autocomplete="title" />
            <x-input-error class="mt-2" :messages="$errors->get('title')" />
        </div>

        <div>
            <x-input-label for="price" :value="__('Price')" />
            <x-text-input id="price" name="price" type="text" class="mt-1 block w-full" :value="old('name')"
                required autofocus autocomplete="price" />
            <x-input-error class="mt-2" :messages="$errors->get('price')" />
        </div>

        <div>
            <x-input-label for="category" :value="__('Category')" />

            <x-select-dropdown id="category" name="category" :options="['0' => 'Men', '1' => 'Women']" :selected="old('category', '0')"
                placeholder="Choose a category" />

            <x-input-error class="mt-2" :messages="$errors->get('category')" />
        </div>

        <div>
            <x-input-label for="location" :value="__('Location')" />

            <x-select-dropdown id="location" name="location" :options="['0' => 'Men', '1' => 'Women']" :selected="old('location', '0')"
                placeholder="Choose a location" />

            <x-input-error class="mt-2" :messages="$errors->get('location')" />
        </div>

        <div>
            <x-input-label for="image" :value="__('image')" />
            <x-text-input id="image" name="image" type="file" class="mt-1 block w-full" required autofocus
                autocomplete="image" />
            <x-input-error class="mt-2" :messages="$errors->get('image')" />
        </div>

        <div>
            <x-input-label for="description" :value="__('Description')" />
            <x-text-area
                id="description"
                name="description"
                class="mt-1 block w-full"
                rows="5"
                required autofocus
                autocomplete="description"
                placeholder="Enter your description here..." />
            <x-input-error class="mt-2" :messages="$errors->get('description')" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600">{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
