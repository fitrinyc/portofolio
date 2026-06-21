<div {{ $attributes->merge(['class' => 'card']) }}>
    @if(isset($image))
        <img src="{{ $image }}" class="card-img-top" alt="{{ $title ?? 'Card image' }}" style="height: 250px; object-fit: cover; object-position: top;">
    @endif
    
    @if(isset($icon))
        <div class="p-4 text-center pb-0">
            <div class="icon-box">
                <i class="{{ $icon }}"></i>
            </div>
        </div>
    @endif

    <div class="card-body {{ isset($icon) ? 'text-center pt-2' : '' }}">
        @if(isset($title))
            <h5 class="card-title">{{ $title }}</h5>
        @endif
        
        @if(isset($description))
            <p class="card-text text-muted small">{{ $description }}</p>
        @endif

        {{ $slot }}
    </div>
</div>
