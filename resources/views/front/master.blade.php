<!DOCTYPE html>
<html class="" lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @stack('before-styles')
    <link rel="icon" href="{{ asset('assets/images/logos/favicon.svg') }}" type="image/x-icon" id="favicon" />
    <link href="{{ asset('output.css') }}" rel="stylesheet" />
    <link href="{{ asset('main.css') }}" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet" />

    @stack('after-styles')
</head>

@yield('content')

@stack('before-scripts')
<script src="https://cdn.tailwindcss.com"></script>
<script>
    tailwind.config = {
        darkMode: "class",
    }
</script>
<script>
    // Get necessary elements
    const darkModeToggle = document.getElementById('darkModeToggle');
    const favicon = document.getElementById('favicon');
    const prefersDarkScheme = window.matchMedia("(prefers-color-scheme: dark)");

    // Function to update the favicon based on the current theme
    function updateFavicon(theme) {
        if (theme === "dark") {
            favicon.href = "{{ asset('assets/images/logos/favicon-dark.svg') }}";
        } else {
            favicon.href = "{{ asset('assets/images/logos/favicon.svg') }}";
        }
    }

    // Function to initialize the theme based on localStorage or system preference
    function initializeTheme() {
        const currentTheme = localStorage.getItem("theme");

        if (currentTheme === "dark" || (!currentTheme && prefersDarkScheme.matches)) {
            document.documentElement.classList.add("dark");
            updateFavicon("dark");
        } else {
            document.documentElement.classList.remove("dark");
            updateFavicon("light");
        }
    }

    // Function to toggle the theme
    function toggleTheme() {
        document.documentElement.classList.toggle("dark");
        const newTheme = document.documentElement.classList.contains("dark") ? "dark" : "light";
        localStorage.setItem("theme", newTheme);
        updateFavicon(newTheme);
    }

    // Initialize the theme on page load
    initializeTheme();

    // Add event listener for dark mode toggle
    darkModeToggle.addEventListener("click", toggleTheme);
</script>

@stack('after-scripts')

<x-footer />

</html>
