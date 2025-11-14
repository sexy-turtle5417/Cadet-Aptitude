<?php

namespace App\View\Components;

use App\Models\SchoolYear;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SchoolYearRow extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public int $no,
        public SchoolYear $schoolYear
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $schoolYear = $this->schoolYear;
        return view('components.school-year-row', compact('schoolYear'));
    }
}
