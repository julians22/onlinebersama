<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="csrf-param-name" content="_token">
    <!-- Primary Meta Tags -->
    <meta name="title" content="@yield('title')" />
    <meta name="description" content="@yield('meta_description')" />
    <meta name="keywords" content="@yield('meta_keywords')" />
    <meta name="author" content="@yield('meta_author')" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:title" content="@yield('title')" />
    <meta property="og:description" content="@yield('meta_description')" />
    <meta property="og:image" content="@yield('meta_image')" />

    <!-- X (Twitter) -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="{{ url()->current() }}" />
    <meta property="twitter:title" content="@yield('title')" />
    <meta property="twitter:description" content="@yield('meta_description')" />
    <meta property="twitter:image" content="@yield('meta_image')" />

    <!-- Analytics Scripts -->
    @env(['staging', 'local', 'testing'])
        <!-- OneTrust Cookies Consent Notice start for onlinebersama.com -->
        <script src="https://cdn.cookielaw.org/scripttemplates/otSDKStub.js"  type="text/javascript" charset="UTF-8" data-domain-script="019dac2e-6419-7678-bb88-2fce4bccca28-test" ></script>
        <script type="text/javascript">
            function OptanonWrapper(){}
        </script>

        <script>
            (() => {
                window.activeFour = false;
                let isReady = false;

                document.addEventListener('name-studio.verisign', ({ detail: { type } }) => {
                    if (type === 'ready') isReady = true;
                });

                window.OptanonWrapper = function () {
                    const FUNCTIONAL_GROUP = 'C0003';
                    const TARGETING_GROUP  = 'C0004';

                    const raw = (window.OptanonActiveGroups || '').trim();
                    const userGroups = raw
                    ? raw.replace(/^\s*,|,\s*$/g,'').split(',').map(s => s.trim())
                    : [];

                    const updatePrivacySettings = () => {
                    const $ns = document.querySelector('name-studio');
                    if (!$ns) return;

                    const settings = {
                        analytic: false,
                        functional: userGroups.includes(FUNCTIONAL_GROUP)
                    };

                    if (isReady && $ns.api?.privacy?.updateSettings) {
                        $ns.api.privacy.updateSettings(settings);
                    } else {
                        setTimeout(updatePrivacySettings, 250);
                    }
                    };

                    updatePrivacySettings();

                    if (userGroups.includes(TARGETING_GROUP)) {
                    window.activeFour = true;
                    console.log('enter "c0004"');
                    }
                };
            })();
        </script>
        <!-- OneTrust Cookies Consent Notice end for onlinebersama.com -->

        <!-- NameStudio start-->
        <script async type="module" src="https://nswm-service.verisign.com/3.0/name-studio.js"></script>
        <!-- NameStudio end-->

        <!-- ADOBE SCRIPT -->
        <script type="text/plain" class="optanon-category-C0001" src="//assets.adobedtm.com/1d6e8340b68d/b0c6093737cf/launch-adacc40eeb69-staging.min.js" defer></script>

        <script type="text/plain" class="optanon-category-C0002">
        (() => {
            const addClickHandlers = ({target: $ns, detail: {type}}) => {
                if (type !== "ready") return;

                if('ready' === type) {
                    const $controls = $ns.shadowRoot.querySelector('namestudio-controls');

                    const searchEl = $controls.querySelector('input[type=search]');
                    if (searchEl) {
                        searchEl.addEventListener('click', () => (window.s_objectID='domainsearchapi - search'));
                    }

                    $controls.querySelector('button[data-type=terms],.controls-menu-terms')
                            .addEventListener('click', () => (window.s_objectID='domainsearchapi - termsofservice'));

                    document.removeEventListener('name-studio.verisign', addClickHandlers);
                }
            };

            document.addEventListener('name-studio.verisign', addClickHandlers);
        })();
        </script>
    @endenv

    <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset('fonts/webfont/font.css') }}">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    <!-- Vite scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles

    @env(['staging', 'local', 'testing'])

    <script type="text/javascript">

        window.adobeDataLayer = window.adobeDataLayer || [];

        document.addEventListener('name-studio.verisign', function (evt) {

            const { target: $ns, detail: { type, data }} = evt;

            const eventString = type + ":" + data["action-type"] + ":" + data["event-type"];

            const eventMessage = {
                "event": type,
                "data": {
                    "eventString": eventString,
                    "details": data,
                    "version": $ns.version.actual
                }
            };

            adobeDataLayer.push(eventMessage);

        });

    </script>

    <!-- Google Tag Manager -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-708118123"></script>
    <script type="text/plain" class="optanon-category-C0004">
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'AW-708118123');
    </script>

    @endenv

    <script id="namestudio-scripts" data-ns-revision="2026-06-13">
        (() => {
            document.addEventListener('DOMContentLoaded', () => {
                const $ns = document.querySelector('name-studio');
                const $close = $ns.querySelector('.btn-results-close');

                const observer = new MutationObserver(() => {
                    if($ns.hasAttribute('results') && !$ns.hasAttribute('error')) {
                        $close.style.setProperty('--btn-close-display', 'flex');
                        $close.style.setProperty('--btn-close-pointer-evts','all');
                    } else {
                        $close.style.setProperty('--btn-close-display', 'none');
                        $close.style.setProperty('--btn-close-pointer-evts','none');
                    }
                });
                observer.observe($ns,{attributes:true,attributeFilter:['results','error']});

                $ns.querySelector('button[slot="btn-results-close"]').addEventListener('click', () => {
                    $ns.clearQuery();
                    $ns.clear();
                });
            });
        })();
    </script>
</head>
<body class="antialiased">
    <x-navbar />
        @yield('content')
        <div x-data x-cloak x-init="$store.videoModal.init('{{ config('onlinebersama.brightcove_account_id') }}', '{{ config('onlinebersama.brightcove_player_id') }}')" x-show="$store.videoModal.open" class="fixed inset-0 flex items-center justify-center z-100 bg-black/50 px-4 md:px-16">
            <div class="relative bg-white max-w-240 w-full rounded-[10px] shadow-lg p-4 md:p-12">
                <button type="button" @click="$store.videoModal.closeModal()" class="absolute -top-10 right-0 cursor-pointer md:top-3 md:right-3">
                    <x-icons.close width="24" height="24" fill="#A7127E" class="w-8 h-8" />
                </button>
                <div id="vjs-video-render"></div>
            </div>
        </div>
    <x-footer />
    @livewireScripts
    @stack('scripts')

    <!-- Adoube launch scripts -->
    <script type="text/plain" class="optanon-category-C0001">
        const waitForAnalytics = new Promise((resolve, reject) => {
            const waitForAdobe = () => {
                if(typeof _satellite !== "undefined"){
                    resolve();
                } else {
                    setTimeout(waitForAdobe, 100);
                }
            }
            waitForAdobe();
        });

        waitForAnalytics.then(() => {
            _satellite.pageBottom();
        });
    </script>

</body>
</html>
