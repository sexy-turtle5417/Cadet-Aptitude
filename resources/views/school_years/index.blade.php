<x-document>
    <x-navbar></x-navbar>
    <div class="grid place-items-center">
        <div class=" pb-10 mt-10">
            <x-school-year-table>
                @foreach ($schoolYears as $index => $schoolYear)
                    <x-school-year-row no="{{ $schoolYears->firstItem() + $index }}" :schoolYear="$schoolYear">
                    </x-school-year-row>
                @endforeach
            </x-school-year-table>

            <div class="mt-6">
                <div class="flex">
                    {{ $schoolYears->links() }}
                </div>
            </div>
        </div>
    </div>
</x-document>
