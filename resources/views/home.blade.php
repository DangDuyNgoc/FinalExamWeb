@extends('front.master')
@section('content')

    <!-- Products Start -->
    <div class="row tspbox">
        <div class="col-3 tsp-left">
            <div class="filter">
                <div class="filter__block">
                    <div class="filter__title">Hãng sản xuất</div>
                    <div class="filter__checklist">
                        <div class="checkbox checkbox-all frowitem active">
                            <a href="" title="Tất cả">
                                <i class="fa-regular fa-square checkbox-icon"></i>
                                Tất cả
                            </a>
                        </div>
                        <div class="checkbox frowitem">
                            <a href="" >
                                <i class="fa-regular fa-square checkbox-icon"></i>
                                <label for="">Apple</label>
                            </a>
                        </div>
                        <div class="checkbox frowitem">
                            <a href="" >
                                <i class="fa-regular fa-square checkbox-icon"></i>
                                <label for="">Asus</label>
                            </a>
                        </div>
                        <div class="checkbox frowitem">
                            <a href="" >
                                <i class="fa-regular fa-square checkbox-icon"></i>
                                <label for="">HP</label>
                            </a>
                        </div>
                        <div class="checkbox frowitem">
                            <a href="" >
                                <i class="fa-regular fa-square checkbox-icon"></i>
                                <label for="">Dell</label>
                            </a>
                        </div>
                        <div class="checkbox frowitem">
                            <a href="" >
                                <i class="fa-regular fa-square checkbox-icon"></i>
                                <label for="">LG</label>
                            </a>
                        </div>
                        <div class="checkbox frowitem">
                            <a href="" >
                                <i class="fa-regular fa-square checkbox-icon"></i>
                                <label for="">MSI</label>
                            </a>
                        </div>
                        <div class="checkbox frowitem">
                            <a href="" >
                                <i class="fa-regular fa-square checkbox-icon"></i>
                                <label for="">Lenovo</label>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="filter__block">
                    <div class="filter__title"> Mức giá</div>
                    <div class="filter__checklist">
                        <div class="checkbox checkbox-all frowitem">
                            <a href="" title="Tất cả">
                                <i class="fa-regular fa-square checkbox-icon"></i>
                                Tất cả
                            </a>
                        </div>
                        <div class="checkbox frowitem">
                            <a href="" >
                                <i class="fa-regular fa-square checkbox-icon"></i>
                                <label for="">Dưới 10 triệu</label>
                            </a>
                        </div>
                        <div class="checkbox frowitem">
                            <a href="" >
                                <i class="fa-regular fa-square checkbox-icon"></i>
                                <label for="">Từ 10 - 15 triệu</label>
                            </a>
                        </div>
                        <div class="checkbox frowitem">
                            <a href="" >
                                <i class="fa-regular fa-square checkbox-icon"></i>
                                <label for="">Từ 15 - 20 triệu</label>
                            </a>
                        </div>
                        <div class="checkbox frowitem">
                            <a href="" >
                                <i class="fa-regular fa-square checkbox-icon"></i>
                                <label for="">Từ 20 - 25 triệu</label>
                            </a>
                        </div>
                        <div class="checkbox frowitem">
                            <a href="" >
                                <i class="fa-regular fa-square checkbox-icon"></i>
                                <label for="">Trên 25 triệu</label>
                            </a>
                        </div>
                    </div>
                </div>
                 <div class="filter__block">
                    <div class="filter__title">Màn hình</div>
                    <div class="filter__checklist">
                        <div class="checkbox checkbox-all frowitem">
                            <a href="" title="Tất cả">
                                <i class="fa-regular fa-square checkbox-icon"></i>
                                Tất cả
                            </a>
                        </div>
                        <div class="checkbox frowitem">
                            <a href="" >
                                <i class="fa-regular fa-square checkbox-icon"></i>
                                <label for="">Khoảng 13 inch</label>
                            </a>
                        </div>
                        <div class="checkbox frowitem">
                            <a href="" >
                                <i class="fa-regular fa-square checkbox-icon"></i>
                                <label for="">Khoảng 14 inch</label>
                            </a>
                        </div>
                        <div class="checkbox frowitem">
                            <a href="" >
                                <i class="fa-regular fa-square checkbox-icon"></i>
                                <label for="">Trên 15 inch</label>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-9 tsp-right">
            <div class="sp-card tspheadbox">
                <div class="card-header">
                    <div class="pt-head">
                        <div class="pt-head__title">Laptop</div>
                        <span>(262 sản phẩm)</span>
                    </div>
                </div>
                <div class="card-body brand-pt">
                    <div class="row brand-img">
                        <div class="owl-carousel vendor-carousel">
                            <div class="vendor-item">
                                <a href="">
                                    {{-- <img src="https://images.fpt.shop/unsafe/fit-in/108x40/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2022/1/4/637769104385571970_Macbook-Apple@2x.jpg" alt="Macbook-Apple"> --}}
                                     <img src="https://images.fpt.shop/unsafe/fit-in/125x125/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2022/9/19/637991745714018004_img-thietkedohoa.png" alt="">
                                </a>
                            </div>
                            <div class="vendor-item">
                                <a href="">
                                    <img src="https://images.fpt.shop/unsafe/fit-in/108x40/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2021/11/22/637732077455069770_Asus@2x.jpg" alt="Asus">
                                </a>
                            </div>
                            <div class="vendor-item">
                                <a href="">
                                    <img src="https://images.fpt.shop/unsafe/fit-in/108x40/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2021/7/15/637619564183327279_HP@2x.png" alt="HP">
                                </a>
                            </div>
                            <div class="vendor-item">
                                <a href="">
                                     <img src="https://images.fpt.shop/unsafe/fit-in/125x125/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2022/9/19/637991745714018004_img-thietkedohoa.png" alt="">
                                </a>
                            </div>
                            <div class="vendor-item">
                                <a href="">
                                    <img src="https://images.fpt.shop/unsafe/fit-in/108x40/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2020/8/26/637340493755614653_MSI@2x.jpg" alt="MSI">
                                </a>
                            </div>
                            <div class="vendor-item">
                                <a href="">
                                    <img src="https://images.fpt.shop/unsafe/fit-in/108x40/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2020/8/26/637340494668267616_Lenovo@2x.jpg" alt="lenovo">
                                </a>
                            </div>
                            <div class="vendor-item">
                                <a href="">
                                    <img src="https://images.fpt.shop/unsafe/fit-in/108x40/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2020/8/26/637340494666861275_Dell@2x.jpg" alt="Dell">
                                </a>
                            </div>
                            <div class="vendor-item">
                                <a href="">
                                    <img src="https://images.fpt.shop/unsafe/fit-in/108x40/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2022/9/14/637987475787766575_LG.jpg" alt="LG">
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="sp-card order-lap">
                <div class="card-body order-lap-container">
                    <div class="order-lap-header">
                        <div class="order-lap-title">
                            <h2>Laptop theo nhu cầu</h2>
                        </div>
                    </div>
                    <div class="order-lap-list">
                        <div class="row-flex">
                            <div class="col5-no">
                                <div class="order-lap-item text-center">
                                    <a href="#">
                                        <picture class="picture m-10">
                                            <img src="https://images.fpt.shop/unsafe/fit-in/125x125/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2022/9/19/637991744177742277_img-gaming.png" alt="">
                                        </picture>
                                        <div class="order-lap-name">Gaming</div>
                                    </a>
                                </div>
                            </div>
                            <div class="col5-no">
                                <div class="order-lap-item text-center">
                                    <a href="#">
                                        <picture class="picture m-10">
                                            <img src="https://images.fpt.shop/unsafe/fit-in/125x125/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2022/9/6/637980583313032986_SV-V%C4%83n%20ph%C3%B2ng.png" alt="">
                                        </picture>
                                        <div class="order-lap-name">Sinh viên - Văn phòng</div>
                                    </a>
                                </div>
                            </div>
                            <div class="col5-no">
                                <div class="order-lap-item text-center">
                                    <a href="#">
                                        <picture class="picture m-10">
                                            <img src="https://images.fpt.shop/unsafe/fit-in/125x125/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2022/9/19/637991745714018004_img-thietkedohoa.png" alt="">
                                        </picture>
                                        <div class="order-lap-name">Thiết kế đồ hoạ</div>
                                    </a>
                                </div>
                            </div>
                            <div class="col5-no">
                                <div class="order-lap-item text-center">
                                    <a href="#">
                                        <picture class="picture m-10">
                                            <img src="https://images.fpt.shop/unsafe/fit-in/125x125/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2022/9/19/637991744678844250_img-mongnhe.png" alt="">
                                        </picture>
                                        <div class="order-lap-name">Mòng nhẹ</div>
                                    </a>
                                </div>
                            </div>
                            <div class="col5-no">
                                <div class="order-lap-item text-center">
                                    <a href="#">
                                        <picture class="picture m-10">
                                            <img src="https://images.fpt.shop/unsafe/fit-in/125x125/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2022/9/19/637991745141508369_img-doanhnhan.png" alt="">
                                        </picture>
                                        <div class="order-lap-name">Doanh nhân</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="sp-card content-box">
                <div class="card-body content-pd">
                    <div class="cd-header">
                        <div class="cd-list-tab">
                            <span>Ưu tiên xem: </span>
                            <div class="btn-group">
                                <ul class="btn-option">
                                    <li class="sort group-option active">
                                        <a class="btn btn-secondary">Bán chạy nhất</a>
                                    </li>
                                    <li class="sort group-option">
                                        <a class="btn btn-secondary">Trả góp 0%</a>
                                    </li>
                                    <li class="sort group-option">
                                        <a class="btn btn-secondary">Giá thấp</a>
                                    </li>
                                    <li class="sort group-option">
                                        <a class="btn btn-secondary">Giá cao</a>
                                    </li>
                                    <li class="sort group-option">
                                        <a class="btn btn-secondary">Ưu đãi online</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="cd-grid-list">
                            <label class="cd-dropdown">
                                <div class="cd-dropdown-btn">Bán chạy nhất</div>
                                <div class="cd-dropdown-menu">
                                    <li class="sort dropdown-items active">Bán chạy nhất</li>
                                    <li class="sort dropdown-items">Trả góp 0%</li>
                                    <li class="sort dropdown-items">Giá thấp </li>
                                    <li class="sort dropdown-items">Giá cao</li>
                                    <li class="sort dropdown-items">Ưu đãi online</li>
                                </div>
                            </label>
                        </div>
                    </div>
                    {{-- @for($i=1; $i <=6; $i++) --}}
                    @foreach( $products as $product )
                        <div class="cd-product-wrapper">
                            {{-- <div class="cd-product pd-sale">
                                    <div class="cd-product__img" >
                                        <a href="">
                                            <img src="https://images.fpt.shop/unsafe/fit-in/240x215/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2021/10/20/637703173013037856_macbook-pro-14-2021-xam-dd.jpg"
                                            alt="MacBook Pro 14 2021 M1 Pro Ram 32GB" height="215">
                                        </a>
                                        <div class="cd-product__label">
                                            <span class="badge badge-installment">Trả góp 0%</span>
                                            <span class="badge badge-discount">Giảm 6.000.000đ</span>
                                        </div>
                                    </div>
                                    <div class="cd-product__infor">
                                        <h3>
                                            <a href="" class="cd-product__name">MacBook Pro 14" 2021 M1 Pro Ram 32GB</a>
                                        </h3>
                                        <div class="cd-product__show-promo">
                                            <div class="cd-product__price">23.690.000₫</div>
                                            <div class="strike-price">
                                                <strike>63.990.000₫</strike>
                                            </div>
                                        </div>
                                        <div class="cd-product__btn">
                                            <a href="" class="btn btn-sm btn-main btn-primary btn-add-to-cart">
                                                <svg enable-background="new 0 0 15 15"
                                                    viewBox="0 0 15 15" x="0" y="0"
                                                    class="svg-icon icon-add-to-cart">
                                                    <g><g>
                                                    <polyline fill="none" points=".5 .5 2.7 .5 5.2 11 12.4 11 14.5 3.5 3.7 3.5"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        stroke-miterlimit="10">
                                                    </polyline>
                                                    <circle cx="6" cy="13.5" r="1" stroke="none"></circle>
                                                    <circle cx="11.5" cy="13.5" r="1" stroke="none"></circle>
                                                    </g><line fill="none" stroke-linecap="round" stroke-miterlimit="10" x1="7.5" x2="10.5" y1="7" y2="7"></line>
                                                    <line fill="none" stroke-linecap="round" stroke-miterlimit="10" x1="9" x2="9" y1="8.5" y2="5.5"></line></g>
                                                </svg>
                                                <span>Add to cart</span>
                                            </a>
                                            <a href="" class="btn btn-sm btn-main btn-primary btn-solid-primary">Mua ngay</a>
                                        </div>
                                    </div>
                            </div> --}}
                                <div class="cd-product pd-sale">
                                    <div class="cd-product__img" >
                                        <a href="">
                                            <img src="{{ $product->img_path }}"
                                            alt="MacBook Pro 14 2021 M1 Pro Ram 32GB" height="215">
                                        </a>
                                        <div class="cd-product__label">
                                            <span class="badge badge-installment">Trả góp 0%</span>
                                            <span class="badge badge-discount">Giảm 6.000.000đ</span>
                                        </div>
                                    </div>
                                    <div class="cd-product__infor">
                                        <h3>
                                            <a href="" class="cd-product__name">{{$product->name}}</a>
                                        </h3>
                                        <div class="cd-product__show-promo">
                                            <div class="cd-product__price">{{$product->price}}₫</div>
                                            <div class="strike-price">
                                                <strike>{{$product->old_price}}₫</strike>
                                            </div>
                                        </div>
                                        <div class="cd-product__btn">
                                            <a href="" class="btn btn-sm btn-main btn-primary btn-add-to-cart">
                                                <svg enable-background="new 0 0 15 15"
                                                    viewBox="0 0 15 15" x="0" y="0"
                                                    class="svg-icon icon-add-to-cart">
                                                    <g><g>
                                                    <polyline fill="none" points=".5 .5 2.7 .5 5.2 11 12.4 11 14.5 3.5 3.7 3.5"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        stroke-miterlimit="10">
                                                    </polyline>
                                                    <circle cx="6" cy="13.5" r="1" stroke="none"></circle>
                                                    <circle cx="11.5" cy="13.5" r="1" stroke="none"></circle>
                                                    </g><line fill="none" stroke-linecap="round" stroke-miterlimit="10" x1="7.5" x2="10.5" y1="7" y2="7"></line>
                                                    <line fill="none" stroke-linecap="round" stroke-miterlimit="10" x1="9" x2="9" y1="8.5" y2="5.5"></line></g>
                                                </svg>
                                                <span>Add to cart</span>
                                            </a>
                                            <a href="" class="btn btn-sm btn-main btn-primary btn-solid-primary">Mua ngay</a>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="cd-product pd-sale">
                                    <div class="cd-product__img" >
                                        <a href="">
                                            <img src="https://images.fpt.shop/unsafe/fit-in/240x215/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2021/10/20/637703173013037856_macbook-pro-14-2021-xam-dd.jpg"
                                            alt="MacBook Pro 14 2021 M1 Pro Ram 32GB" height="215">
                                        </a>
                                        <div class="cd-product__label">
                                            <span class="badge badge-installment">Trả góp 0%</span>
                                            <span class="badge badge-discount">Giảm 6.000.000đ</span>
                                        </div>
                                    </div>
                                    <div class="cd-product__infor">
                                        <h3>
                                            <a href="" class="cd-product__name">MacBook Pro 14" 2021 M1 Pro Ram 32GB</a>
                                        </h3>
                                        <div class="cd-product__show-promo">
                                            <div class="cd-product__price">23.690.000₫</div>
                                            <div class="strike-price">
                                                <strike>63.990.000₫</strike>
                                            </div>
                                        </div>
                                        <div class="cd-product__btn">
                                            <a href="" class="btn btn-sm btn-main btn-primary btn-add-to-cart">
                                                <svg enable-background="new 0 0 15 15"
                                                    viewBox="0 0 15 15" x="0" y="0"
                                                    class="svg-icon icon-add-to-cart">
                                                    <g><g>
                                                    <polyline fill="none" points=".5 .5 2.7 .5 5.2 11 12.4 11 14.5 3.5 3.7 3.5"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        stroke-miterlimit="10">
                                                    </polyline>
                                                    <circle cx="6" cy="13.5" r="1" stroke="none"></circle>
                                                    <circle cx="11.5" cy="13.5" r="1" stroke="none"></circle>
                                                    </g><line fill="none" stroke-linecap="round" stroke-miterlimit="10" x1="7.5" x2="10.5" y1="7" y2="7"></line>
                                                    <line fill="none" stroke-linecap="round" stroke-miterlimit="10" x1="9" x2="9" y1="8.5" y2="5.5"></line></g>
                                                </svg>
                                                <span>Add to cart</span>
                                            </a>
                                            <a href="" class="btn btn-sm btn-main btn-primary btn-solid-primary">Mua ngay</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="cd-product pd-sale">
                                    <div class="cd-product__img" >
                                        <a href="">
                                            <img src="https://images.fpt.shop/unsafe/fit-in/240x215/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2021/10/20/637703173013037856_macbook-pro-14-2021-xam-dd.jpg"
                                            alt="MacBook Pro 14 2021 M1 Pro Ram 32GB" height="215">
                                        </a>
                                        <div class="cd-product__label">
                                            <span class="badge badge-installment">Trả góp 0%</span>
                                            <span class="badge badge-discount">Giảm 6.000.000đ</span>
                                        </div>
                                    </div>
                                    <div class="cd-product__infor">
                                        <h3>
                                            <a href="" class="cd-product__name">MacBook Pro 14" 2021 M1 Pro Ram 32GB</a>
                                        </h3>
                                        <div class="cd-product__show-promo">
                                            <div class="cd-product__price">23.690.000₫</div>
                                            <div class="strike-price">
                                                <strike>63.990.000₫</strike>
                                            </div>
                                        </div>
                                        <div class="cd-product__btn">
                                            <a href="" class="btn btn-sm btn-main btn-primary btn-add-to-cart">
                                                <svg enable-background="new 0 0 15 15"
                                                    viewBox="0 0 15 15" x="0" y="0"
                                                    class="svg-icon icon-add-to-cart">
                                                    <g><g>
                                                    <polyline fill="none" points=".5 .5 2.7 .5 5.2 11 12.4 11 14.5 3.5 3.7 3.5"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        stroke-miterlimit="10">
                                                    </polyline>
                                                    <circle cx="6" cy="13.5" r="1" stroke="none"></circle>
                                                    <circle cx="11.5" cy="13.5" r="1" stroke="none"></circle>
                                                    </g><line fill="none" stroke-linecap="round" stroke-miterlimit="10" x1="7.5" x2="10.5" y1="7" y2="7"></line>
                                                    <line fill="none" stroke-linecap="round" stroke-miterlimit="10" x1="9" x2="9" y1="8.5" y2="5.5"></line></g>
                                                </svg>
                                                <span>Add to cart</span>
                                            </a>
                                            <a href="" class="btn btn-sm btn-main btn-primary btn-solid-primary">Mua ngay</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="cd-product pd-sale">
                                    <div class="cd-product__img" >
                                        <a href="">
                                            <img src="https://images.fpt.shop/unsafe/fit-in/240x215/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2021/10/20/637703173013037856_macbook-pro-14-2021-xam-dd.jpg"
                                            alt="MacBook Pro 14 2021 M1 Pro Ram 32GB" height="215">
                                        </a>
                                        <div class="cd-product__label">
                                            <span class="badge badge-installment">Trả góp 0%</span>
                                            <span class="badge badge-discount">Giảm 6.000.000đ</span>
                                        </div>
                                    </div>
                                    <div class="cd-product__infor">
                                        <h3>
                                            <a href="" class="cd-product__name">MacBook Pro 14" 2021 M1 Pro Ram 32GB</a>
                                        </h3>
                                        <div class="cd-product__show-promo">
                                            <div class="cd-product__price">23.690.000₫</div>
                                            <div class="strike-price">
                                                <strike>63.990.000₫</strike>
                                            </div>
                                        </div>
                                        <div class="cd-product__btn">
                                            <a href="" class="btn btn-sm btn-main btn-primary btn-add-to-cart">
                                                <svg enable-background="new 0 0 15 15"
                                                    viewBox="0 0 15 15" x="0" y="0"
                                                    class="svg-icon icon-add-to-cart">
                                                    <g><g>
                                                    <polyline fill="none" points=".5 .5 2.7 .5 5.2 11 12.4 11 14.5 3.5 3.7 3.5"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        stroke-miterlimit="10">
                                                    </polyline>
                                                    <circle cx="6" cy="13.5" r="1" stroke="none"></circle>
                                                    <circle cx="11.5" cy="13.5" r="1" stroke="none"></circle>
                                                    </g><line fill="none" stroke-linecap="round" stroke-miterlimit="10" x1="7.5" x2="10.5" y1="7" y2="7"></line>
                                                    <line fill="none" stroke-linecap="round" stroke-miterlimit="10" x1="9" x2="9" y1="8.5" y2="5.5"></line></g>
                                                </svg>
                                                <span>Add to cart</span>
                                            </a>
                                            <a href="" class="btn btn-sm btn-main btn-primary btn-solid-primary">Mua ngay</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="cd-product pd-sale">
                                    <div class="cd-product__img" >
                                        <a href="">
                                            <img src="https://images.fpt.shop/unsafe/fit-in/240x215/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2021/10/20/637703173013037856_macbook-pro-14-2021-xam-dd.jpg"
                                            alt="MacBook Pro 14 2021 M1 Pro Ram 32GB" height="215">
                                        </a>
                                        <div class="cd-product__label">
                                            <span class="badge badge-installment">Trả góp 0%</span>
                                            <span class="badge badge-discount">Giảm 6.000.000đ</span>
                                        </div>
                                    </div>
                                    <div class="cd-product__infor">
                                        <h3>
                                            <a href="" class="cd-product__name">MacBook Pro 14" 2021 M1 Pro Ram 32GB</a>
                                        </h3>
                                        <div class="cd-product__show-promo">
                                            <div class="cd-product__price">23.690.000₫</div>
                                            <div class="strike-price">
                                                <strike>63.990.000₫</strike>
                                            </div>
                                        </div>
                                        <div class="cd-product__btn">
                                            <a href="" class="btn btn-sm btn-main btn-primary btn-add-to-cart">
                                                <svg enable-background="new 0 0 15 15"
                                                    viewBox="0 0 15 15" x="0" y="0"
                                                    class="svg-icon icon-add-to-cart">
                                                    <g><g>
                                                    <polyline fill="none" points=".5 .5 2.7 .5 5.2 11 12.4 11 14.5 3.5 3.7 3.5"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        stroke-miterlimit="10">
                                                    </polyline>
                                                    <circle cx="6" cy="13.5" r="1" stroke="none"></circle>
                                                    <circle cx="11.5" cy="13.5" r="1" stroke="none"></circle>
                                                    </g><line fill="none" stroke-linecap="round" stroke-miterlimit="10" x1="7.5" x2="10.5" y1="7" y2="7"></line>
                                                    <line fill="none" stroke-linecap="round" stroke-miterlimit="10" x1="9" x2="9" y1="8.5" y2="5.5"></line></g>
                                                </svg>
                                                <span>Add to cart</span>
                                            </a>
                                            <a href="" class="btn btn-sm btn-main btn-primary btn-solid-primary">Mua ngay</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="cd-product pd-sale">
                                    <div class="cd-product__img" >
                                        <a href="">
                                            <img src="https://images.fpt.shop/unsafe/fit-in/240x215/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2021/10/20/637703173013037856_macbook-pro-14-2021-xam-dd.jpg"
                                            alt="MacBook Pro 14 2021 M1 Pro Ram 32GB" height="215">
                                        </a>
                                        <div class="cd-product__label">
                                            <span class="badge badge-installment">Trả góp 0%</span>
                                            <span class="badge badge-discount">Giảm 6.000.000đ</span>
                                        </div>
                                    </div>
                                    <div class="cd-product__infor">
                                        <h3>
                                            <a href="" class="cd-product__name">MacBook Pro 14" 2021 M1 Pro Ram 32GB</a>
                                        </h3>
                                        <div class="cd-product__show-promo">
                                            <div class="cd-product__price">23.690.000₫</div>
                                            <div class="strike-price">
                                                <strike>63.990.000₫</strike>
                                            </div>
                                        </div>
                                        <div class="cd-product__btn">
                                            <a href="" class="btn btn-sm btn-main btn-primary btn-add-to-cart">
                                                <svg enable-background="new 0 0 15 15"
                                                    viewBox="0 0 15 15" x="0" y="0"
                                                    class="svg-icon icon-add-to-cart">
                                                    <g><g>
                                                    <polyline fill="none" points=".5 .5 2.7 .5 5.2 11 12.4 11 14.5 3.5 3.7 3.5"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        stroke-miterlimit="10">
                                                    </polyline>
                                                    <circle cx="6" cy="13.5" r="1" stroke="none"></circle>
                                                    <circle cx="11.5" cy="13.5" r="1" stroke="none"></circle>
                                                    </g><line fill="none" stroke-linecap="round" stroke-miterlimit="10" x1="7.5" x2="10.5" y1="7" y2="7"></line>
                                                    <line fill="none" stroke-linecap="round" stroke-miterlimit="10" x1="9" x2="9" y1="8.5" y2="5.5"></line></g>
                                                </svg>
                                                <span>Add to cart</span>
                                            </a>
                                            <a href="" class="btn btn-sm btn-main btn-primary btn-solid-primary">Mua ngay</a>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    @endforeach
                </div>
                {{-- @endfor --}}
        </div>
    </div>
@endsection
