<!-- TODO: make sure this is "accessible" for screen readers and such -->
<!-- TODO: find the icons i want -->

<div class="nav-wrapper">
    <nav class="navbar justify-content-center header">
        <div class="container-fluid">
            <button class="btn mr-auto header-menu-toggle"><span class="oi oi-menu"></span>
            </button> <!-- TODO: turn this into a different button with an 'is-active' class; turns into an x -->
            <a class="navbar-brand" id="header-brand" href="/">Text</a>
            <button class="btn ml-auto search-display-toggle"><span class="oi oi-magnifying-glass"></span></button>
            <!-- also turns into an x -->

        </div>
    </nav>
    <nav id="menu">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="/academics">Academics</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/campus">Campus Life</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/the-arts">The Arts</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/resources">Resources</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/about">About</a>
            </li>
        </ul>
    </nav>
    <div id="search-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <form id="search-form" role="search" action="#">
                        <input name="search" class="search-input" placeholder="Type to search" autocomplete="off"
                               type="text">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="base">
    <nav class="navbar justify-content-center header">
        <div class="container-fluid">
            <button class="btn mr-auto header-menu-toggle"><span class="oi oi-menu"></span>
            </button> <!-- TODO: turn this into a different button with an 'is-active' class -->
            <a class="navbar-brand" id="header-brand" href="/">Text</a>
            <button class="btn ml-auto search-display-toggle"><span class="oi oi-magnifying-glass"></span></button>
        </div>
    </nav>
</div>

<!-- TODO: using vue instead? -->
<script>
    $('.header-menu-toggle').on('click', function () {
        $('.nav-wrapper').toggleClass('is-open');
        $('#menu').toggle();
    });
    $('.search-display-toggle').on('click', function () {
        $('.nav-wrapper').toggleClass('is-open');
        $('#search-wrapper').toggle();
    });
</script>
