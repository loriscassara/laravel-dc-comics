<footer>
    <section class="container-fluid upper-footer">
        <div class="d-flex justify-content-around overflow-y-hidden">
            <div class="d-flex p-5">
                <ul class="footer-item">
                    <h5 class="text-white">{{ $dati['DCCOMICS'][0]['class'] }}</h5>
                    @foreach ($dati['DCCOMICS'] as $DCcomic)
                        <li class="text-secondary"><a class="footer-link" href="#">{{ $DCcomic['title'] }}</a></li>
                    @endforeach
                    <ul class="footer-item ps-0">
                        <h5 class="text-white mt-2">{{ $dati['SHOPS'][0]['class'] }}</h5>
                        @foreach ($dati['SHOPS'] as $Shop)
                            <li class="text-secondary"><a class="footer-link" href="#">{{ $Shop['title'] }}</a></li>
                        @endforeach
                    </ul>
                </ul>
                <ul class="footer-item">
                    <h5 class="text-white">{{ $dati['DC'][0]['class'] }}</h5>
                    @foreach ($dati['DC'] as $DClink)
                        <li class="text-secondary"><a class="footer-link" href="#">{{ $DClink['title'] }}</a></li>
                    @endforeach
                </ul>
                <ul class="footer-item">
                    <h5 class="text-white">{{ $dati['SITES'][0]['class'] }}</h5>
                    @foreach ($dati['SITES'] as $site)
                        <li class="text-secondary"><a class="footer-link" href="#">{{ $site['title'] }}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="footer-wrapper-img">
                <img class="footer-bg" src="/assets/img/dc-logo-bg.png" alt="">
            </div>
        </div>
    </section>

    <section class="lower-footer">
        <div class="container d-flex justify-content-between h-100 align-items-center">
            <div>
                <button class="btn btn-outline-light my-footer-btn">SIGN-UP NOW!</button>
            </div>
            <div class="d-flex align-items-center">
                <h5 class="mb-0 pe-3 lower-text">FOLLOW US</h5>
                <img class="lower-footer-img" src="../assets/img/footer-facebook.png" alt="">
                <img class="lower-footer-img" src="../assets/img/footer-periscope.png" alt="">
                <img class="lower-footer-img" src="../assets/img/footer-pinterest.png" alt="">
                <img class="lower-footer-img" src="../assets/img/footer-twitter.png" alt="">
                <img class="lower-footer-img" src="../assets/img/footer-youtube.png" alt="">
            </div>
        </div>
    </section>
</footer>