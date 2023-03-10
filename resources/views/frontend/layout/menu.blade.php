@php
// use App\Http\Controllers\Frontend\CategoryNewsController;
$categories = App\Models\Blog\Category::with('subcategories')->get();

@endphp
<div class="main-menu " style="background-color: #215837; ">
    <div class="container-fluid my-1">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light p-0">
                <div class="container-fluid">
                    <a class="navbar-brand" href="{{ route('homepage') }}">
                        <img src="{{ asset('frontend/asset/img/dailypradarshak.png') }}"
                            class="img-fluid" style="height: 50px;" alt="">
                    </a>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        @foreach (array_slice(json_decode($categories), 0, 9) as $category)


                            <ul class="navbar-nav me-auto mb-2 mb-lg-0 main-menu">
                                <li><a href="{{ route('category.news', $category->id) }}">{{ $category->name }} <i
                                            class="@if (count($category->subcategories) > 0) fa fa-angle-down @endif"></i> </a>
                                    @if (count($category->subcategories) > 0)
                                        <ul class="submenu">
                                            @foreach ($category->subcategories as $subcategory)
                                                <li><a
                                                        href="{{ route('subcategory.news', $subcategory->id) }}">{{ $subcategory->name }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </li>

                                {{-- </ul> --}}
                        @endforeach

                    </div>
                    <div class="col-lg-2 ps-0 ps-md-3">
                        <div class="right-menu-item" style="float: right;">
                            <div class="more-menu" id="more-menu">
                                <i class="fas fa-bars"></i> ?????????
                            </div>
                        </div>
                    </div>
                </div>
                <!-- mega menu  section-start -->
                <div class="row mega-menu" id="mega-menu" style="display: none; ">
                    <div class="col-lg-12">
                        <div class="row">
                            @foreach ($categories as $category)
                                <div class="col-lg-2">
                                    <a href="{{ route('category.news', $category->id) }}">{{ $category->name }}</a>
                                </div>
                            @endforeach

                        </div>
                        {{-- <div class="row mega-menu-bottom">
                            <div class="col-lg-2">
                                <a href=""><i class="fas fa-file-alt text-success"></i> ??????????????? ?????????????????????</a>
                            </div>
                            <div class="col-lg-2">
                                <a href=""><i class="fas fa-file-alt"></i> ????????????????????? ?????????????????????</a>
                            </div>
                            <div class="col-lg-2">
                                <a href=""> <i class="far fa-newspaper text-info"></i> ???-???????????????</a>
                            </div>
                            <div class="col-lg-2">
                                <a href=""> <i class="far fa-image text-info"></i> ?????????</a>
                            </div>
                            <div class="col-lg-2">
                                <a href=""><i class="fas fa-file-video"></i> ???????????????</a>
                            </div>
                            <div class="col-lg-2">

                                <a href=""> <i class="fas fa-archive text-danger"></i> ?????????????????????</a>
                            </div>
                            <div class="col-lg-2">

                                <a href=""> <i class="fab fa-android text-success"></i> ????????????????????????????????????</a>
                            </div>
                            <div class="col-lg-2">

                                <a href=""> <i class="fas fa-briefcase text-success"></i> ????????????????????????</a>
                            </div>

                        </div> --}}
                    </div>
                </div>
                <!-- mega menu  section-end -->
        </div>
        </nav>
    </div>
</div>
