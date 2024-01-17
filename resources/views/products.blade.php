@extends('layout')
@section('content')
    <style>
        input[type="checkbox"] {
            position: relative;
            border: 2px solid #000;
            border-radius: 2px;
            background: none;
            cursor: pointer;
            line-height: 0;
            margin: 0 0.6em 0 0;
            outline: 0;
            padding: 0 !important;
            vertical-align: text-top;
            height: 20px;
            width: 20px;
            -webkit-appearance: none;
            opacity: 0.5;
        }

        input[type="checkbox"]:hover {
            opacity: 1;
        }

        input[type="checkbox"]:checked {
            background-color: #000;
            opacity: 1;
        }

        input[type="checkbox"]:before {
            content: "";
            position: absolute;
            right: 50%;
            top: 50%;
            width: 4px;
            height: 10px;
            border: solid #fff;
            border-width: 0 2px 2px 0;
            margin: -1px -1px 0 -1px;
            transform: rotate(45deg) translate(-50%, -50%);
            z-index: 2;
        }
    </style>
    <img src="{{ url('images/home/product-banner.jpg') }}" alt="" class="w-100">


    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">FILTERS</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="accordion" id="myAccordion">
                <div class="accrdian-border" style="border-top:1px solid rgb(224, 223, 223);">
                    <div class="accordion-item border-0">
                        <h2 class="accordion-header" id="headingOne">
                            <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne">Product Type</button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                            <div class="card-body ">
                                <div class="mt-2">
                                    <p class="comment-form-cookies-consent">
                                        <input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent"
                                            type="checkbox" value="yes">
                                        <label for="wp-comment-cookies-consent">Ring
                                        </label>
                                    </p>

                                    <p class="comment-form-cookies-consent">
                                        <input id="wp-comment-cookies-consent2" name="wp-comment-cookies-consent2"
                                            type="checkbox" value="yes">
                                        <label for="wp-comment-cookies-consent2">Ring
                                        </label>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion-item border-0">
                    <h2 class="accordion-header" id="headingTwo">
                        <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo">Metal</button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                        <div class="card-body">
                            <div class="mt-2 d-flex align-items-center">
                                <div class="color-body mx-1" title="Gold">
                                    <img src="{{ url('images/gold.jpg') }}" alt="">
                                </div>
                                <div class="color-body mx-1" title="Silver">
                                    <img src="{{ url('images/silver.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion-item border-0">
                    <h2 class="accordion-header" id="headingThree">
                        <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree">Color</button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                        <div class="card-body">
                            <div class="mt-2 d-flex align-items-center">
                                <div class="color-body mx-1">
                                    <img src="{{ url('images/1.jpg') }}" alt="">
                                </div>
                                <div class="color-body mx-1">
                                    <img src="{{ url('images/2.jpg') }}" alt="">
                                </div>
                                <div class="color-body mx-1">
                                    <img src="{{ url('images/4.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion-item border-0">
                    <h2 class="accordion-header" id="headingFour">
                        <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour">Price</button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                        <div class="card-body">
                            <p>HTML stands for HyperText Markup Language. HTML is the standard markup language for

                            </p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item border-0">
                    <h2 class="accordion-header" id="headingFive">
                        <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                            data-bs-target="#collapseFive">Size</button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                        <div class="card-body">
                            <p>HTML stands for HyperText Markup Language. HTML is the standard markup language for

                            </p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>


    <div style="border-bottom:1px solid rgb(224, 223, 223);">
        <div style="width:95%; margin:auto; ">
            <div class="row">
                <div class="col-lg-3 col-md-6 " style="border-right:1px solid rgb(224, 223, 223);">
                    <button data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
                        aria-controls="offcanvasExample" class="p-2 w-100 border-0 my-1  filter-btn">
                        FILTERS
                    </button>
                </div>
                <div class="col-lg-6 d-none d-lg-block" style="border-right:1px solid rgb(224, 223, 223);">
                    <div class="p-2 w-100 text-center my-1">
                        100 PRODUCTS
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <select wire:model="sortBy" wire:change="filter" class="p-2 w-100 border-0 filter-btn my-1">
                        <option value="">Sort By</option>
                        <option value="highest">High to Low</option>
                        <option value="lowest">Low to High</option>
                        <option value="newtoold">New to Old</option>
                        <option value="oldtonew">Old to New</option>
                        <option value="atoz">A to Z Alphabeticaly </option>
                        <option value="ztoa">Z to A Alphabeticaly </option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div style="width:95%; margin:auto;">
        <br>
        <br>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6 text-center">
                <div class="product-wrapper">
                    <a href="">
                        <img src="{{ url('images/home/JES56131H-W-2.webp') }}" alt="" class="w-100">
                    </a>
                    <div class="my-1">She's an Icon Heart Necklace</div>
                    <div class="d-flex justify-content-center align-items-center">
                        <div>
                            @for ($i = 1; $i <= 5; $i++)
                                <span style="font-size:14px;">&#9734;</span>
                            @endfor
                        </div>
                        <a class="mx-2" style="color: #000; font-size:14px;" href="#"> No Review</a>
                    </div>
                    <div class="my-1">Rs: 5000</div>
                    <div class="d-flex pb-3  justify-content-center align-items-center my-2">
                        <div class="d-flex align-items-center">
                            <div class="color-body mx-1">
                                <img src="{{ url('images/1.jpg') }}" alt="">
                            </div>
                            <div class="color-body mx-1">
                                <img src="{{ url('images/2.jpg') }}" alt="">
                            </div>
                            <div class="color-body mx-1">
                                <img src="{{ url('images/4.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="product-wrapper">
                    <a href="">
                        <img src="{{ url('images/home/JES56131H-W-2.webp') }}" alt="" class="w-100">
                    </a>
                    <div class="my-1">She's an Icon Heart Necklace</div>
                    <div class="d-flex justify-content-center align-items-center">
                        <div>
                            @for ($i = 1; $i <= 5; $i++)
                                <span style="font-size:14px;">&#9734;</span>
                            @endfor
                        </div>
                        <a class="mx-2" style="color: #000; font-size:14px;" href="#"> No Review</a>
                    </div>
                    <div class="my-1">Rs: 5000</div>
                    <div class="d-flex pb-3  justify-content-center align-items-center my-2">
                        <div class="d-flex align-items-center">
                            <div class="color-body mx-1">
                                <img src="{{ url('images/1.jpg') }}" alt="">
                            </div>
                            <div class="color-body mx-1">
                                <img src="{{ url('images/2.jpg') }}" alt="">
                            </div>
                            <div class="color-body mx-1">
                                <img src="{{ url('images/4.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="product-wrapper">
                    <a href="">
                        <img src="{{ url('images/home/JES56131H-W-2.webp') }}" alt="" class="w-100">
                    </a>
                    <div class="my-1">She's an Icon Heart Necklace</div>
                    <div class="d-flex justify-content-center align-items-center">
                        <div>
                            @for ($i = 1; $i <= 5; $i++)
                                <span style="font-size:14px;">&#9734;</span>
                            @endfor
                        </div>
                        <a class="mx-2" style="color: #000; font-size:14px;" href="#"> No Review</a>
                    </div>
                    <div class="my-1">Rs: 5000</div>
                    <div class="d-flex pb-3  justify-content-center align-items-center my-2">
                        <div class="d-flex align-items-center">
                            <div class="color-body mx-1">
                                <img src="{{ url('images/1.jpg') }}" alt="">
                            </div>
                            <div class="color-body mx-1">
                                <img src="{{ url('images/2.jpg') }}" alt="">
                            </div>
                            <div class="color-body mx-1">
                                <img src="{{ url('images/4.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="product-wrapper">
                    <a href="">
                        <img src="{{ url('images/home/JES56131H-W-2.webp') }}" alt="" class="w-100">
                    </a>
                    <div class="my-1">She's an Icon Heart Necklace</div>
                    <div class="d-flex justify-content-center align-items-center">
                        <div>
                            @for ($i = 1; $i <= 5; $i++)
                                <span style="font-size:14px;">&#9734;</span>
                            @endfor
                        </div>
                        <a class="mx-2" style="color: #000; font-size:14px;" href="#"> No Review</a>
                    </div>
                    <div class="my-1">Rs: 5000</div>
                    <div class="d-flex pb-3  justify-content-center align-items-center my-2">
                        <div class="d-flex align-items-center">
                            <div class="color-body mx-1">
                                <img src="{{ url('images/1.jpg') }}" alt="">
                            </div>
                            <div class="color-body mx-1">
                                <img src="{{ url('images/2.jpg') }}" alt="">
                            </div>
                            <div class="color-body mx-1">
                                <img src="{{ url('images/4.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="product-wrapper">
                    <a href="">
                        <img src="{{ url('images/home/JES56131H-W-2.webp') }}" alt="" class="w-100">
                    </a>
                    <div class="my-1">She's an Icon Heart Necklace</div>
                    <div class="d-flex justify-content-center align-items-center">
                        <div>
                            @for ($i = 1; $i <= 5; $i++)
                                <span style="font-size:14px;">&#9734;</span>
                            @endfor
                        </div>
                        <a class="mx-2" style="color: #000; font-size:14px;" href="#"> No Review</a>
                    </div>
                    <div class="my-1">Rs: 5000</div>
                    <div class="d-flex pb-3  justify-content-center align-items-center my-2">
                        <div class="d-flex align-items-center">
                            <div class="color-body mx-1">
                                <img src="{{ url('images/1.jpg') }}" alt="">
                            </div>
                            <div class="color-body mx-1">
                                <img src="{{ url('images/2.jpg') }}" alt="">
                            </div>
                            <div class="color-body mx-1">
                                <img src="{{ url('images/4.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
        <br>
        <br>
    </div>
    <hr>
    <div style="width:95%; margin:auto; ">
        <div class="text-center">
            <h3> Recently viewed</h3>
        </div>
        <br>
        <div class="row g-4">
            <div class="col-lg-2 col-md-4 col-6 text-center">
                <div class="product-wrapper">
                    <a href="">
                        <img src="{{ url('images/home/JES56131H-W-2.webp') }}" alt="" class="w-100">
                    </a>
                    <div class="my-1">She's an Icon Heart Necklace</div>
                    <div class="pb-2">Rs: 5000</div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6 text-center">
                <div class="product-wrapper">
                    <a href="">
                        <img src="{{ url('images/home/JES56131H-W-2.webp') }}" alt="" class="w-100">
                    </a>
                    <div class="my-1">She's an Icon Heart Necklace</div>
                    <div class="pb-2">Rs: 5000</div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6 text-center">
                <div class="product-wrapper">
                    <a href="">
                        <img src="{{ url('images/home/JES56131H-W-2.webp') }}" alt="" class="w-100">
                    </a>
                    <div class="my-1">She's an Icon Heart Necklace</div>
                    <div class="pb-2">Rs: 5000</div>
                </div>
            </div>

        </div>

        <br>
        <br>
    </div>
@endsection
