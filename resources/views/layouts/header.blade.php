<!-- TODO: make sure this is "accessible" for screen readers and such -->
<!-- TODO: find the icons i want -->

<div class="nav-wrapper">
    <nav id="menu">
        <div class="nav flex-column" id="menu-box">
            <a class="nav-link" href="/academics">Academics</a>
            <a class="nav-link" href="/campus">Campus Life</a>
            <a class="nav-link" href="/the-arts">The Arts</a>
            <a class="nav-link" href="/resources">Resources</a>
            <a class="nav-link" href="/about">About</a>
        </div>
    </nav>
    <div class="menu-footer">
        <div class="flex-row justify-content-start" id="menu-footer-row">
            <a>Hello</a>
            <a>Hello</a>
            <a>Hello</a>
            <a>Hello</a>
        </div>
    </div>
</div>

<div id="search-wrapper">
    <div class="close-search"><button class="btn btn-light">Close</button></div>
    <div class="container search-container">
        <div class="row">
            <div class="col-lg-12">
                <p class="search-date-label">Sunday, November 4th</p>
                <form id="search-form" role="search" action="#">
                    <input name="search" class="search-input" placeholder="Type to search" autocomplete="off" type="text">
                </form>
            </div>
        </div>
    </div>
    <div class="container search-results-container">
        <div class="row">
            <div class="col-lg-12 error-search-container">
                <p class="error-search">Nothing found. Try using different keywords.</p>
            </div>
        </div>
    </div>
</div>

<div class="base">
    <nav class="navbar justify-content-center header">
        <div class="container-fluid">
            <button class="hamburger hamburger--collapse header-menu-toggle mr-auto" type="button">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
            <a class="navbar-brand" id="header-brand" href="/">Mentor</a>
            <button class="btn ml-auto search-display-toggle"><span class="oi oi-magnifying-glass"></span></button>
        </div>
    </nav>
</div>

<!-- TODO: using vue instead? -->
<script>
    const menu_toggle = document.querySelector('.header-menu-toggle');
    const search_toggle = document.querySelector('.search-display-toggle');
    const nav = document.querySelector('.nav-wrapper');
    const menu = document.getElementById('menu');
    const search = document.getElementById('search-wrapper');

    menu_toggle.addEventListener('click', e => {
        menu_toggle.classList.toggle('is-active');
        nav.classList.toggle('is-open');
        menu.classList.toggle('active');
    });
    search_toggle.addEventListener('click', e => {
        nav.classList.toggle('is-open');
        search.style.display === '' ? search.style.display = 'block' : '';
    });

    document.querySelector('.close-search').addEventListener('click', e => {
        search.style.display = '';
    });
</script>
