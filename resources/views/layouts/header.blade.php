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
    <!--<div class="menu-footer container">
        <div class="flex-row justify-content-start" id="menu-footer-row">
            <a>Some</a>
            <a>Filler</a>
            <a>Text</a>
            <a>Footer</a>
        </div>
    </div>-->
</div>

<div id="search-wrapper">
    <div class="close-search"><button class="btn btn-light"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/><path d="M0 0h24v24H0z" fill="none"/></svg></button></div>
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
            <button class="btn ml-auto search-display-toggle"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/><path d="M0 0h24v24H0z" fill="none"/></svg></button>
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
