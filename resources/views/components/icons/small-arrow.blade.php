@props(['width', 'height', 'fill'])

<svg width="{{ $width }}" height="{{ $height }}" viewBox="0 0 {{ $width }} {{ $height }}" fill="none" xmlns="http://www.w3.org/2000/svg" {{ $attributes }}>
    <path d="M1.41 3.42706e-05L-2.62268e-07 1.41003L6 7.41003L12 1.41003L10.59 3.38694e-05L6 4.58003L1.41 3.42706e-05Z" fill="{{ $fill }}"/>
</svg>
