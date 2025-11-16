<x-document>
    <x-navbar></x-navbar>
    <div>
        <div class="place-items-center">
            <div class="w-1/3 mt-10 min-h-screen">
                <h1 class="text text-xl text-center font-bold mb-5">Create New School Year</h1>
                <form action="{{ route('school_years.store') }}" method="POST">
                    @csrf
                    <x-field-set legend="NICK NAME*" label="Example: Alpha, Bravo, Charlie etc">
                        @if ($message = $errors->first('nick_name'))
                            <input type="text" class="input border border-error rounded-none w-full" name="nick_name"
                                value={{ old('nick_name') }}>
                            <p class="label text text-error">{{ $message }}</p>
                        @else
                            <input type="text" class="input border-0 rounded-none w-full" name="nick_name"
                                value={{ old('nick_name') }}>
                        @endif
                    </x-field-set>
                    <x-field-set legend="DESCRIPTION*">
                        @if ($message = $errors->first('description'))
                            <input type="text" class="input border border-error rounded-none w-full"
                                name="description" value={{ old('description') }}>
                            <p class="label text text-error">{{ $message }}</p>
                        @else
                            <input type="text" class="input border-0 rounded-none w-full" name="description"
                                value={{ old('description') }}>
                        @endif
                    </x-field-set>
                    <div class="flex gap-2">
                        <div class="flex-1">
                            <x-field-set legend="DATE START*">
                                @if ($message = $errors->first('start_date'))
                                    <input type="date" class="input border border-error rounded-none"
                                        name="start_date">
                                    <p class="label text text-error">{{ $message }}</p>
                                @else
                                    <input type="date" class="input border-0 rounded-none" name="start_date"
                                        value={{ old('start_date') }}>
                                @endif
                            </x-field-set>
                        </div>
                        <div class="flex-1">
                            <x-field-set legend="DATE END" label="Can be added later">
                                @if ($message = $errors->first('end_date'))
                                    <input type="date" class="input border border-error" name="end_date"
                                        value={{ old('end_date') }}>
                                    <p class="label text text-error">{{ $message }}</p>
                                @else
                                    <input type="date" class="input border-0 rounded-none" name="end_date"
                                        value={{ old('end_date') }}>
                                @endif

                            </x-field-set>
                        </div>
                    </div>
                    <div class="mt-6 flex gap-2">
                        <div class="flex-1"></div>
                        <div>
                            <a href="{{ route('school_years.index') }}"
                                class="btn btn-error btn-ghost text-error-content font-bold  w-42 rounded-none">CANCEL</a>
                            <button
                                class="btn btn-success font-bold text-success-content w-42 rounded-none">CREATE</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>

</x-document>
