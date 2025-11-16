<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Pagination\LengthAwarePaginator;

class PaginationStatus extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public LengthAwarePaginator $paginator)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $paginator = $this->paginator;
        return view('components.pagination-status', compact('paginator'));
    }
}
