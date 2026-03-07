
<!doctype html>
<html lang="es" dir="ltr" class="{{ $html_class ?? '' }}">
    <head>
        <meta charset="UTF-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, viewport-fit=cover"
        />
        <!-- Primary Meta Tags -->
        <title>{{ $title ?? '' }}</title>
        <meta name="title" content="{{ $title ?? '' }}" />
        <meta
            name="description"
            content="Entrena artes marciales tradicionales japonesas en Panama"
        />
        <link rel="canonical" href="https://bujinkanpanama.com/" />
        <meta name="robots" content="index, follow" />

        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website" />
        <meta property="og:url" content="https://bujinkanpanama.com/" />
        <meta property="og:title" content="{{ $title ?? '' }}" />
        <meta
            property="og:description"
            content="Entrena artes marciales tradicionales japonesas en Panama"
        />
        <meta
            property="og:image"
            content="https://bujinkanpanama.com/media/social-preview.png"
        />

        <!-- Twitter -->
        <meta property="twitter:card" content="summary_large_image" />
        <meta property="twitter:url" content="https://bujinkanpanama.com/" />
        <meta
            property="twitter:title"
            content="{{ $title ?? '' }}"
        />
        <meta
            property="twitter:description"
            content="Entrena artes marciales tradicionales japonesas en Panama"
        />
        <meta
            property="twitter:image"
            content="https://bujinkanpanama.com/media/social-preview.png"
        />

        <link
            rel="apple-touch-icon"
            sizes="180x180"
            href="/media/apple-touch-icon.png"
        />
        <link
            rel="icon"
            type="image/png"
            sizes="32x32"
            href="/media/favicon-32x32.png"
        />
        <link
            rel="icon"
            type="image/png"
            sizes="16x16"
            href="/media/favicon-16x16.png"
        />
        <link rel="manifest" href="/media/site.webmanifest" />

        @if(Vite::running())
            {{ Vite::assets(['resources/assets/app.css']) }}
        @else
            <link rel="stylesheet" href="{{ asset('media/app.css') }}">
        @endif

        <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
        <script
            defer
            src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"
        ></script>
    </head>

    <body class="{{ $body_class ?? '' }}">
        {{ $slot }}
    </body>
</html>
