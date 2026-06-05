@php
    $navItems = collect(Route::getRoutes())->map(function ($route) {
        $name = $route->getName();
        $uri = $route->uri();

        // 1. Skip if the route has no name, is an API route, or is a system route
        if (!$name || Str::startsWith($uri, ['api/', '_', 'sanctum/'])) {
            return null;
        }

        // 2. Skip routes that require parameters (e.g., {id}, {path})
        if (!empty($route->parameterNames())) {
            return null;
        }

        // 3. Safely generate the URL for clean, parameterless routes
        return [
            'label' => ucwords(str_replace(['.', '-'], ' ', $name)),
            'url' => route($name),
        ];
    })->filter()->unique('url')->values();
@endphp

<nav {{ $attributes->merge(['class' => 'dynamic-navigation']) }}>
    <ul>
        @foreach ($navItems as $item)
            <li>
                <a href="{{ $item['url'] }}" 
                   class="{{ request()->url() == $item['url'] ? 'active' : '' }}">
                    {{ $item['label'] }}
                </a>
            </li>
        @endforeach
    </ul>
</nav>
