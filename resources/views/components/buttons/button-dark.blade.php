@if($href)
    <a href="{{ $href }}" class="btn btn-dark btn-sm">
        <span class="small fw-medium">{{ $slot }}</span>
    </a>
@else
    <button type="submit" class="btn btn-dark btn-sm">
        <span class="small fw-medium">{{ $slot }}</span>
    </button>
@endif