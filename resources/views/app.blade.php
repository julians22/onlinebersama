<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="csrf-param-name" content="_token">
    <!-- Meta -->
    <meta name="description" content="@yield('meta_description', config('app.name', 'Laravel'))">
    <meta name="keywords" content="@yield('meta_keywords', '')">
    <meta name="author" content="@yield('meta_author', '')">

    <!-- Analytics Scripts -->
    @env(['staging', 'local', 'testing'])
        <!-- OneTrust Cookies Consent Notice start for onlinebersama.com -->
        <script src="https://cdn.cookielaw.org/scripttemplates/otSDKStub.js"  type="text/javascript" charset="UTF-8" data-domain-script="019dac2e-6419-7678-bb88-2fce4bccca28-test" ></script>
        <script type="text/javascript">
        function OptanonWrapper() { }
        </script>
        <!-- OneTrust Cookies Consent Notice end for onlinebersama.com -->

        <!-- ADOBE SCRIPT -->
        <script type="text/plain" class="optanon-category-C0001" src="//assets.adobedtm.com/1d6e8340b68d/b0c6093737cf/launch-adacc40eeb69-staging.min.js" defer></script>

        <script type="text/plain" class="optanon-category-C0002">
        (() => {

            document.addEventListener('name-studio.verisign', function(evt) {

                let {type, data} = evt.detail,
                    actionType = data['action-type'],
                    target = evt

                if (actionType == 'submit') {
                    const posts = JSON.stringify(data.query);
                    console.log('Search');
                    searchDomain();
                }

                if (actionType == 'action-performed') {
                    console.log('registrationIntent');
                    registrationIntent();
                }

            });
        })();
        </script>
    @endenv

    <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset('fonts/webfont/font.css') }}">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    <!-- Vite scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles

    <!-- NameStudio start-->
    <script async type="module" src="https://nswm-service.verisign.com/3.0/name-studio.js"></script>
    <!-- NameStudio end-->

    @env(['staging', 'local', 'testing'])

    <script type="text/javascript">
    // New script same like bereadywith.com
    (() => {
        window.activeFour = false;
        let isReady = false;

        document.addEventListener('name-studio.verisign', function({target: $ns, detail: {type, data}}) {
            let actionType = data['action-type'];

            if('ready' === type) {
                isReady = true;
            }

            if (actionType == 'submit') {
                const posts = JSON.stringify(data.query);
            }

            const $controls = $ns.shadowRoot.querySelector('namestudio-controls');
            const $search = $controls.querySelector('input[type=search]');
            const $terms = $controls.querySelector('button[data-type=terms],.controls-menu-terms');
            const $button = $controls.querySelector('button[part-suffix=btnsubmit]');

            console.log({$controls, $search, $terms, $button});

            let attributes = {
                'data-analytics-level1': 'body',
                'data-analytics-level2': 'cari',
                'data-analytics-name': {
                    'search': 'cari',
                    'terms': 'persyaratan-layanan'
                }
            }

            Object.keys(attributes).forEach((key) => {

                if (key === 'data-analytics-name') {
                    $terms.setAttribute('data-analytics-name', attributes[key]['terms']);
                    $button.setAttribute('data-analytics-name', attributes[key]['search']);
                }else{
                    $button.setAttribute(key, attributes[key]);
                    $terms.setAttribute(key, attributes[key]);
                }

            });


        });

        window.OptanonWrapper = function () {
            const ANALYTICS_GROUP = 'C0002',
                FUNCTIONAL_GROUP = 'C0003',
                TARGETING_GROUP = 'C0004';
                userGroupsStr = window.OptanonActiveGroups,
                userGroups = userGroupsStr.substring(1, userGroupsStr.length - 1).split(','),
                updatePrivacySettings = () => {
                    const $ns = document.querySelector('name-studio');

                    const settings = {
                        analytic: false,
                        functional: userGroups.includes(FUNCTIONAL_GROUP)
                    }

                    if(isReady) {
                        $ns.api.privacy.updateSettings(settings);
                    } else {
                        setTimeout(updatePrivacySettings, 250);
                    }
                };

            updatePrivacySettings();

            const $ns = document.querySelector('name-studio');

            if (!window.analyticsInitialized && userGroups.includes(ANALYTICS_GROUP)) {
                window.analyticsInitialized = true;
            }

            if(userGroups.includes(TARGETING_GROUP)) {
                window.activeFour = true;
                console.log('enter "c0004"');
            }
        }
    })();
    </script>

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

    <!-- Scripts -->
    <script>
        (() => {
            class NameStudioSearchProcessor {
                constructor(paramName) {
                    this.paramName = paramName || 'search';
                    this.params = new URLSearchParams(location.search);
                }

                get term() {
                    return this.params.get(this.paramName);
                }

                get component() {
                    return document.querySelector('name-studio');
                }

                isTermAvailable() {
                    return this.params.has(this.paramName) && /.+/.test(this.term);
                }

                configureComponent(callback) {
                    const listener = () => {
                        if ('interactive' === document.readyState) {
                            document.removeEventListener('readystatechange', listener);
                            callback?.(this.component, this.params);
                        }
                    };

                    document.addEventListener('readystatechange', listener);
                }

                executeSearch(waitFor) {
                    const preconditions = Promise.all([...[waitFor].flat(), this.whenReady()]);

                    let result = Promise.resolve();

                    if (this.isTermAvailable()) {
                        result = preconditions.then(() => {
                            this.component.submit(this.term);

                            const $scroll_target = document.querySelector('#cari-com');
                            $scroll_target.scrollIntoView(true, {
                                behavior: 'smooth',
                                block: 'start',
                                inline: 'nearest'
                            });
                        });
                    }

                    return result;
                }

                whenReady() {
                    return new Promise((resolve) => {
                        const readyListener = ({
                            detail: {
                                type
                            }
                        }) => {
                            if ('ready' === type) {
                                resolve();
                                document.removeEventListener(
                                    'name-studio.verisign',
                                    readyListener
                                );
                            }
                        };

                        document.addEventListener('name-studio.verisign', readyListener);
                    });
                }

                static process({
                    configureComponent = () => {},
                    preconditions = [],
                    searchParamName = 'search'
                }) {
                    const instance = new NameStudioSearchProcessor(searchParamName);

                    instance.configureComponent(configureComponent);

                    return instance.executeSearch(preconditions);
                }
            }

            //the processor can be configured to wait for one or more preconditions by supplying promises to the waitFor param.
            const waitForAnalytics = new Promise((resolve) => setTimeout(resolve, 0));

            //the configureComponent option allows the component configuration to be modified prior to loading. EG. changing the view
            const configureComponent = ($ns, params) => {
                const view = params.get('nswm-views');

                if (view && ['keyword', 'list'].includes(view)) {
                    $ns.setAttribute('views', view);
                }
            };

            const processorConfig = {
                preconditions: [waitForAnalytics],
                configureComponent,
                searchParamName: 'cari-domain' //changes the name of the query parameter containing the search term
            };

            NameStudioSearchProcessor.process(processorConfig).then(() => {

            });
        })();
    </script>

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
                    <x-icons.close width="24" height="24" fill="#000" class="w-8 h-8" />
                </button>
                <div id="vjs-video-render"></div>
            </div>
        </div>
    <x-footer />
    @livewireScripts
    @stack('scripts')
</body>
</html>
