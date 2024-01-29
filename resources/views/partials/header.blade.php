<header class="d-flex container justify-content-between">
    <img class="p-4 header-logo" src="../assets/img/dc-logo.png" alt="">
    <nav class="d-flex align-items-center myNav">
        @foreach ($dati['navPages'] as $navPage)
            <a class="{{ $navPage['page'] == 'COMICS' ? 'mx-3 active' : 'mx-3' }}"
                href="#">{{ $navPage['page'] }}</a>
        @endforeach
    </nav>
</header>