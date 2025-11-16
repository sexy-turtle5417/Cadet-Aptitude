 <div>
     <p class="text-sm text-base-content">
         Showing
         @if ($paginator->firstItem())
             <span class="font-medium">{{ $paginator->firstItem() }}</span>
             to
             <span class="font-medium">{{ $paginator->lastItem() }}</span>
         @else
             {{ $paginator->count() }}
         @endif
         of
         <span class="font-medium">{{ $paginator->total() }}</span>
         results
     </p>
 </div>
