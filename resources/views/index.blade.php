<x-guest-layout>
    <div class="mt-10 max-w-4xl mx-auto">
        <h1 class="text-4xl font-semibold">
            <a href="{{ route('home') }}" class="text-gray-800">Random Persons</a>
        </h1>

            <div class="mt-4 border rounded-md">
                <div class="p-6 flex flex-col gap-4">
                    @foreach ($persons as $person)
                    <div>
                        <h2 class="text-2xl font-semibold">{{ $person->firstname }} {{ $person->lastname }}</h2>
                        <p class="text-gray-600">{{ $person->country }}</p>
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="mt-4">
                {{ $persons->links() }}
            </div>

    </div>
</x-guest-layout>
