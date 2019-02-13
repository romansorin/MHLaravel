<!-- TODO: make sure this is "accessible" for screen readers and such -->
<!-- TODO: find the icons i want -->

<div class="nav-wrapper">
    <nav class="navbar justify-content-center" id="header">
        <div class="container-fluid">
            <button class="btn mr-auto header-menu-toggle"><span class="oi oi-menu" id="header-menu-open"></span>
            </button> <!-- TODO: turn this into a different button with an 'is-active' class -->
            <a class="navbar-brand" id="header-brand" href="/">Text</a>
            <button class="btn ml-auto"><span class="oi oi-magnifying-glass" id="search-display-toggle"></span></button>

        </div>
    </nav>
    <nav id="menu">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
        </ul>
    </nav>
</div>

<!-- TODO: using vue instead? -->
<script>
    $('.header-menu-toggle').on('click', function () {
        $('#menu').toggle();
    });
</script>