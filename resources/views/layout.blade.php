<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="{{ asset('images/icons/fevicon.png') }}">
    <title>Theme -5</title>
    {{-- ---------------font-awesome------------ --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- ---------------font-family------------ --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Slabo+27px&display=swap" rel="stylesheet">

    {{-- ---------------jquery------------ --}}
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
        crossorigin="anonymous"></script>

    {{-- ---------------toastr------------ --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    {{-- ---------------bootstrap------------ --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrapm.css') }}">

    {{-- ---------------Style------------ --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/allstyle.css') }}">

    {{-- ---------------livewire------------ --}}
    <script src="//unpkg.com/alpinejs" defer></script>

    {{-- @livewireStyles --}}


    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            list-style: none;
            text-decoration: none;
            font-family: 'Slabo 27px', serif;
            font-size: 16px;
            /* color: rgb(110, 60, 51); */
        }

        .custom-btn {
            color: #fff;
            font-family: 'Lato', sans-serif;
            font-weight: 500;
            background: transparent;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            display: inline-block;
            box-shadow: inset 2px 2px 2px 0px rgba(255, 255, 255, .5),
                7px 7px 20px 0px rgba(0, 0, 0, .1),
                4px 4px 5px 0px rgba(0, 0, 0, .1);
            outline: none;
        }

        /* 5 */
        .btn-5 {
            padding: 0;
            border: none;
            background: rgb(110, 60, 51);
            background: linear-gradient(0deg, rgb(124, 20, 9) 0%, rgb(245, 154, 115) 100%);
            color: #fff;
            font-size: 14px;
        }

        .btn-5:hover {
            background: #fff;
            box-shadow: none;
            color: rgb(110, 60, 51);
        }

        .btn-5:before,
        .btn-5:after {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            height: 2px;
            width: 0;
            background: rgb(110, 60, 51);
            box-shadow:
                -1px -1px 5px 0px #fff,
                7px 7px 20px 0px #0003,
                4px 4px 5px 0px #0002;
            transition: 400ms ease all;
        }

        .btn-5:after {
            right: inherit;
            top: inherit;
            left: 0;
            bottom: 0;
        }

        .btn-5:hover:before,
        .btn-5:hover:after {
            width: 100%;
            transition: 800ms ease all;
        }
    </style>
</head>

<body>
    @include('header')
    @yield('content')
    @include('footer')


    {{-- ---------------scrollToTop------------ --}}
    <button id="scroll_top" onclick="scrollToTop()" title="Go To Top" class="position-fixed custom-btn btn-5"
        style="display: none; z-index:3;bottom:15px; right:15px;  font-size: 22px; width:50px; height:50px;">
        <i class="fa-solid fa-arrow-up"></i>
    </button>
    <script>
        function scrollToTop() {
            window.scrollTo(0, 0);
        }
        var $logo = $('#scroll_top');
        $(document).scroll(function() {
            if ($(this).scrollTop() > 300) {
                $('#scroll_top').css("display", "block");
            } else {
                $('#scroll_top').css("display", "none");
            }
        });
    </script>

    {{-- @livewireScripts --}}
    {{-- ---------------bootstrap------------ --}}
    <script src="{{ asset('js/bootstrapm.js') }}"></script>

</body>

</html>
