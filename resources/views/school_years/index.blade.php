<x-document>
    @vite('resources/js/school-years-chart.js')
    <x-navbar></x-navbar>


    <div class="grid place-items-center">
        <div class="flex gap-2 w-3/4 mt-10">
            <div class="flex-1">
                <div class="w-full h-80">
                    <canvas id="chart"></canvas>
                </div>
            </div>
            <div class="">
                <div>
                    <div class="stats stats-vertical shadow">
                        <div class="stat">
                            <div class="stat-figure text-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    class="inline-block h-8 w-8 stroke-current">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                    </path>
                                </svg>
                            </div>
                            <div class="stat-title">Total Likes</div>
                            <div class="stat-value text-primary">25.6K</div>
                            <div class="stat-desc">21% more than last month</div>
                        </div>

                        <div class="stat">
                            <div class="stat-figure text-secondary">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    class="inline-block h-8 w-8 stroke-current">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                            </div>
                            <div class="stat-title">Page Views</div>
                            <div class="stat-value text-secondary">2.6M</div>
                            <div class="stat-desc">21% more than last month</div>
                        </div>
                        <div class="stat">
                            <div class="stat-figure text-secondary">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    class="inline-block h-8 w-8 stroke-current">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                            </div>
                            <div class="stat-title">Cadets Enrolled</div>
                            <div class="stat-value text-secondary">2.6M</div>
                            <div class="stat-desc">From 1949 to 2025</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="place-items-start">
            <h1 class="text-sm font-medium">Recent school years</h1>
        </div>
        <div class="w-3/4 pb-10 mt-6">
            <x-school-year-table>
                @foreach ($schoolYears as $index => $schoolYear)
                    <x-school-year-row no="{{ $schoolYear->id }}" :schoolYear="$schoolYear">
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
