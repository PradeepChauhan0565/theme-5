@extends('layout')
@section('content')
    <style>
        tr {
            text-align: center;
        }

        th {
            padding: 15px 0;
            border-bottom: 1px solid gray;
        }

        td {
            vertical-align: center;
            border-bottom: 1px solid gray;
        }
    </style>
    <div>
        <img src="{{ url('images/home/YOUR SHOPPING WISHLIST.jpg') }}" alt="" class="w-100">
    </div>

    <div class="container my-5">
        <div style=" overflow-x:auto;">
            <table class=" table-striped table-hover w-100" style="min-width: 800px;">
                <thead>
                    <tr style="background-color: rgb(169, 194, 194);">
                        <th scope="col" style="width: 150px;">IMAGE</th>
                        <th scope="col">PRODUCT</th>
                        <th scope="col">PRICE</th>
                        <th scope="col">PURCHASE</th>
                        <th scope="col">REMOVE</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="width: 150px;"><img src="{{ asset('images/home/JES56131H-W-2.webp') }}" alt=""
                                style="width: 100%; object-fit:cover"></td>
                        <td>Solitaire Ring
                            purple</td>
                        <td>$39.00</td>
                        <td>
                            <a href="">
                                <button class=" px-3 py-2 custom-btn btn-5 my-1">ADD TO CART &nbsp;<i
                                        class="fas fa-plus"></i></button>
                            </a>
                        </td>
                        <td>
                            <button class="border-0 rounded-circle" style="width: 35px; height:35px;"><i
                                    class="fas fa-times text-danger"></i></button>
                        </td>
                    </tr>


                </tbody>

            </table>


        </div>

    </div>
@endsection
