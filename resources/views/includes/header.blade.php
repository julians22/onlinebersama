<header class="top-0 right-0 left-0 z-10 fixed bg-blue-primary px-36 py-6">
    <nav class="flex justify-between items-center">
        <a href="{{ route('index') }}">
            <img src="{{ asset('img/dotcom-logo.svg') }}" alt="OnlineBersama" width="126">
        </a>

        <div class="flex items-center space-x-4">
            <ul class="flex space-x-4">
                <li><a class="font-medium text-white" href="{{ route('email') }}">Email</a></li>
                <li><a class="font-medium text-white" href="{{ route('domain') }}">Domain</a></li>
                <li><a class="font-medium text-white" href="{{ route('website') }}">Website</a></li>
                <li><a class="font-medium text-white" href="{{ route('resources.index') }}">Resources</a></li>
            </ul>

            <a href="{{ route('find-a-com') }}" class="bg-amber-300 px-3.5 py-2 rounded-full font-medium text-lg">Find a .com</a>
        </div>
    </nav>
</header>
