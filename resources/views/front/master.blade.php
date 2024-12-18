<!DOCTYPE html>
<html class="transition-all duration-300 ease-in-out" lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @stack('before-styles')
    <link rel="icon" href="{{ asset('assets/images/logos/favicon.svg') }}" type="image/x-icon" id="favicon" />
    <link href="{{ asset('output.css') }}" rel="stylesheet" />
    <link href="{{ asset('main.css') }}" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('flickity.min.css') }}">
    @vite('resources/css/app.css')

    @stack('after-styles')
</head>

@yield('content')

@stack('before-scripts')
<script src="https://cdn.tailwindcss.com"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Get necessary elements
        const darkModeToggle = document.getElementById("darkModeToggle");
        const favicon = document.getElementById("favicon");
        const logo = document.getElementById("logo");
        const prefersDarkScheme = window.matchMedia("(prefers-color-scheme: dark)");

        // URLs for light and dark theme assets
        const lightLogo = "{{ asset('assets/images/logos/logo.svg') }}";
        const darkLogo = "{{ asset('assets/images/logos/logo_dark.svg') }}";
        const lightFavicon = "{{ asset('assets/images/logos/favicon.svg') }}";
        const darkFavicon = "{{ asset('assets/images/logos/favicon_dark.svg') }}";

        // Function to update logo and favicon based on theme
        function updateThemeAssets(theme) {
            if (theme === "dark") {
                logo.src = darkLogo;
                favicon.href = darkFavicon;
            } else {
                logo.src = lightLogo;
                favicon.href = lightFavicon;
            }
        }

        // Function to initialize the theme based on localStorage or system preference
        function initializeTheme() {
            const currentTheme = localStorage.getItem("theme");

            if (
                currentTheme === "dark" ||
                (!currentTheme && prefersDarkScheme.matches)
            ) {
                document.documentElement.classList.add("dark");
                updateThemeAssets("dark");
            } else {
                document.documentElement.classList.remove("dark");
                updateThemeAssets("light");
            }
        }

        // Function to toggle the theme
        function toggleTheme() {
            document.documentElement.classList.toggle("dark");
            const newTheme = document.documentElement.classList.contains("dark") ?
                "dark" :
                "light";
            localStorage.setItem("theme", newTheme);
            updateThemeAssets(newTheme);
        }

        // Initialize the theme on page load
        initializeTheme();

        // Add event listener for dark mode toggle
        darkModeToggle.addEventListener("click", toggleTheme);

        // Monitor system preference changes and apply theme dynamically
        prefersDarkScheme.addEventListener("change", (e) => {
            const systemPrefersDark = e.matches;
            if (!localStorage.getItem("theme")) {
                const theme = systemPrefersDark ? "dark" : "light";
                document.documentElement.classList.toggle(
                    "dark",
                    systemPrefersDark
                );
                updateThemeAssets(theme);
            }
        });
    });

    
</script>
<script src="{{ asset('js/two-lines-text.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="{{ asset('js/flickity.pkgd.min.js') }}"></script>
<script src="{{ asset('js/carousel.js') }}"></script>


@stack('after-scripts')

<x-footer />

</html>
