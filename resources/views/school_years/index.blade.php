<x-document>
    <x-navbar></x-navbar>
    <div class="grid place-items-center pb-10">
        <div class="mt-10 min-w-1/3">
            @if (session('onCreate'))
                <x-alert-success>School Year Successfully Created</x-alert-success>
            @endif

            <div class="mb-3 mt-10 flex">
                <div class="flex-1"></div>
                <a href="{{ route('school_years.create') }}" class="btn btn-success btn-sm rounded-none">
                    <x-calendar-icon></x-calendar-icon>
                    New
                </a>
            </div>
            @if ($schoolYears->count() > 0)
                <x-school-year-table>
                    @foreach ($schoolYears as $index => $schoolYear)
                        <x-school-year-row no="{{ $schoolYears->firstItem() + $index }}" :schoolYear="$schoolYear">
                        </x-school-year-row>
                    @endforeach
                </x-school-year-table>
            @else
                <div class="h-32 w-full bg-base-100 grid place-items-center">
                    No School Years Found.
                </div>
            @endif

            <div class="mt-6 flex flex-col gap-2">
                <div class="flex">
                    {{ $schoolYears->links() }}
                </div>
                <x-pagination-status :paginator="$schoolYears"></x-pagination-status>
            </div>


        </div>
    </div>
</x-document>
