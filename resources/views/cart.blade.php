@extends('layout')
@section('content')
    <style>
        #cart table tr {
            text-align: center;
        }

        #cart table tr th {
            padding: 4px 0;
            border-bottom: 1px solid #dee2e6;
        }

        #cart table tr td {
            vertical-align: center;
            border-bottom: 1px solid #dee2e6;
        }

        #summery table tr {
            border-bottom: 1px solid #dee2e6;
        }

        #summery table tr td {
            padding: 14px;
        }
    </style>
    <div>
        <img src="{{ url('images/home/YOUR SHOPPING CART.jpg') }}" alt="" class="w-100">
    </div>

    <div class=" mb-5" style="width: 90%; margin:auto;">
        <div class="row g-5 ">
            <div class="col-lg-8">
                <div id="cart" style=" overflow-x:auto; padding-top:85px;">
                    <table class=" table-striped table-hover w-100" style="min-width: 700px;">
                        <thead>
                            <tr style="background-color: rgb(169, 194, 194);">
                                <th scope="col" style="width: 60px;">IMAGE</th>
                                <th scope="col">PRODUCT</th>
                                <th scope="col">PRICE</th>
                                <th scope="col">QUANTITY</th>
                                <th scope="col">TOTAL</th>
                                <th scope="col">ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="width: 60px;"><img src="{{ asset('images/home/JES56131H-W-2.webp') }}"
                                        alt="" style="width: 100%; object-fit:cover"></td>
                                <td>Solitaire Ring
                                    purple</td>
                                <td>$39.00</td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <button wire:click="decrementQty()" class="custom-btn btn-5"style="width: 30px;"><i
                                                class="icon fas fa-minus"></i></button>
                                        <div class="border text-center" style="width: 30px;">
                                            2</div>
                                        <button wire:click="incrementQty()" class="custom-btn btn-5"style="width: 30px;"><i
                                                class="icon fas fa-plus"></i></button>
                                    </div>
                                </td>
                                <td>$39.0</td>
                                <td>
                                    <button data-bs-toggle="modal" href="#exampleModalToggle"
                                        class="border-0 rounded-circle" style="width: 35px; height:35px;"><i
                                            class="fas fa-times text-danger"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 150px;"><img src="{{ asset('images/home/JES56131H-W-2.webp') }}"
                                        alt="" style="width: 100%; object-fit:cover"></td>
                                <td>Solitaire Ring
                                    purple</td>
                                <td>$39.00</td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <button wire:click="decrementQty()" class="custom-btn btn-5"style="width: 30px;"><i
                                                class="icon fas fa-minus"></i></button>
                                        <div class="border text-center" style="width: 30px;">
                                            2</div>
                                        <button wire:click="incrementQty()" class="custom-btn btn-5"style="width: 30px;"><i
                                                class="icon fas fa-plus"></i></button>
                                    </div>
                                </td>
                                <td>$39.0</td>
                                <td>
                                    <button class=" border-0 rounded-circle " style="width: 35px; height:35px;"><i
                                            class="fas fa-times text-danger"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 60px;"><img src="{{ asset('images/home/JES56131H-W-2.webp') }}"
                                        alt="" style="width: 100%; object-fit:cover"></td>
                                <td>Solitaire Ring
                                    purple</td>
                                <td>$39.00</td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <button wire:click="decrementQty()" class="custom-btn btn-5"style="width: 30px;"><i
                                                class="icon fas fa-minus"></i></button>
                                        <div class="border text-center" style="width: 30px;">
                                            2</div>
                                        <button wire:click="incrementQty()" class="custom-btn btn-5"style="width: 30px;"><i
                                                class="icon fas fa-plus"></i></button>
                                    </div>
                                </td>
                                <td>$39.0</td>
                                <td>
                                    <button class="border-0 rounded-circle" style="width: 35px; height:35px;"><i
                                            class="fas fa-times text-danger"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 150px;"><img src="{{ asset('images/home/JES56131H-W-2.webp') }}"
                                        alt="" style="width: 100%; object-fit:cover"></td>
                                <td>Solitaire Ring
                                    purple</td>
                                <td>$39.00</td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <button wire:click="decrementQty()" class="custom-btn btn-5"style="width: 30px;"><i
                                                class="icon fas fa-minus"></i></button>
                                        <div class="border text-center" style="width: 30px;">
                                            2</div>
                                        <button wire:click="incrementQty()" class="custom-btn btn-5"style="width: 30px;"><i
                                                class="icon fas fa-plus"></i></button>
                                    </div>
                                </td>
                                <td>$39.0</td>
                                <td>
                                    <button class=" border-0 rounded-circle " style="width: 35px; height:35px;"><i
                                            class="fas fa-times text-danger"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-4 ">
                <div style="position: -webkit-sticky; position: sticky; top:0; padding-top:85px;">
                    <div class=" text-center py-1" style="background-color: rgb(169, 194, 194);">
                        <h5 class="m-0">CART SUMMERY</h5>
                    </div>
                    <div class="border p-2">
                        <div id="summery">
                            <table class="mb-3 w-100">
                                <tr>
                                    <td>Subtotal</td>
                                    <td>$39</td>
                                </tr>
                                <tr>
                                    <td>Sale Tax</td>
                                    <td>$0</td>
                                </tr>
                                <tr style="border:none;">
                                    <td>Grand Total</td>
                                    <td>$39</td>
                                </tr>
                            </table>
                        </div>
                        <div class="text-end">
                            <span>Congrats you are eligible for shopping <i class="fa-solid fa-truck-fast"></i></span>
                            <a href="{{ asset('checkout') }}">
                                <button class="my-4 px-5  py-2 custom-btn btn-5"> CHECKOUT</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- <div class="row my-5">
            <div class="col-lg-7 mb-5">
                <div class="d-lg-flex">
                    <button class="m-1 px-3 py-2 custom-btn btn-5"> CONTINUE SHOPPING</button>
                    <button class="m-1 px-3 py-2 custom-btn btn-5"> CLEAR CART</button>
                </div>
            </div>
            <div class="col-lg-5">


            </div>
        </div> --}}
    </div>

    <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
        tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content p-3 position-relative">
                <button type="button" class="btn-close position-absolute" style="top:12px; right:15px; z-index:1;"
                    data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    <div class="text-center">
                        <img class="border" src="{{ asset('images/home/JES56131H-W-2.webp') }}" alt=""
                            style="width: 100px; object-fit:cover">
                        <h5 class="mt-3"> Move product from Cart</h5>
                        <p>Are you sure you want to move this product from the cart?</p>
                    </div>
                    <div class="d-flex align-items-center justify-content-center">
                        <button class="px-3  py-2 mx-3"
                            style="border:1px solid rgb(110, 60, 51); font-size: 14px;">REMOVE</button>
                        <button class="px-4  py-2 custom-btn btn-5">MOVE TO WISHLIST</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
