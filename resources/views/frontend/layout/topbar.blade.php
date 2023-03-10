@php

use EasyBanglaDate\Types\BnDateTime;

    $bangladatetime = new BnDateTime('now', new DateTimeZone('Asia/Dhaka'));
    $englishDate = $bangladatetime->getDateTime()->format('l | jS F Y'); // English Date
    $banglahDate = $bangladatetime->format('jS F Y');

@endphp


<section>
    <div>
        <h1 class="paragraph-item" style="font-size: 25px !important;color:red; ">পরীক্ষা মূলক সম্প্রচার</h1>
    </div>
    <div class="header-top">
        <div class="container top-bar-container">
            <div class="row align-items-center">
                <div class="col-xl-7 col-lg-6 col-md-6 col-12 ">
                    <div class="top-bar-link ">
                        <ul>
                            <li>যশোর</li>
                            <li>{{ $englishDate }}</li>
                            <li>{{ $banglahDate }}</li>

                        </ul>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 col-md-6 col-12 col-sm-12" id="searchdiv">
                    <div class="top-header-right">
                        <div class="search-container d-lg-block d-none">
                            <form action="{{ route('search.page') }}" method="GET">
                                <input name="keyword" type="text" placeholder="কী খুঁজতে চান ?" name="search">
                                <button type="submit"><i class="fas fa-search"></i>সার্চ</button>
                            </form>
                        </div>
                        <div class="top-bar-social-icon d-sm-block ">
                            <a href="https://www.facebook.com/dailypradarshak" target="_blank"><i class="fab fa-facebook-square"></i></a>
                            <a href=""><i class="fab fa-instagram-square"></i></a>
                            <a href=""><i class="fab fa-twitter-square"></i></a>
                            <a href=""><i class="fab fa-linkedin"></i></a>
                            <a href=""><i class="fab fa-pinterest-square"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="mobile-search-show d-lg-none mt-2 ">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <form action="{{ route('search.page') }}" method="GET">
                        <div class="input-group">
                            <input name="keyword" type="text" class="form-control" placeholder="কী খুঁজতে চান ?"
                                aria-describedby="button-addon2">
                            <button class="btn btn-outline-secondary" type="submit" id="button-addon2">সার্স</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@push('style')
<style>
    li.paragraph-item {
    float: right;
}
</style>
@endpush
