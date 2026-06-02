@props(['width', 'height', 'fill'])

<svg width="{{ $width }}" height="{{ $height }}" viewBox="0 0 {{ $width }} {{ $height }}" fill="none" xmlns="http://www.w3.org/2000/svg" {{ $attributes }}>
    <path d="M0 0.84L1.03218 0L7.00578 4.85333L12.9794 0L14.0116 0.84L7.00578 6.53333L0 0.84Z" fill="{{ $fill }}"/>
</svg>
