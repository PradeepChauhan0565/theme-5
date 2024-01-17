 @extends('layout')
 @section('content')
     <div>
         <img src="{{ asset('images/home/hero-banner.jpg') }}" alt="" class="w-100">
     </div>

     <a href="">
         <div class="slider">
             <div class="slide-track">
                 <div class="slide">
                     hello
                 </div>
                 <div class="slide">
                     hello
                 </div>
                 <div class="slide">
                     hello
                 </div>
                 <div class="slide">
                     hello
                 </div>
                 <div class="slide">
                     hello
                 </div>
                 <div class="slide">
                     hello
                 </div>
                 <div class="slide">
                     hello
                 </div>
                 <div class="slide">
                     hello
                 </div>
                 <div class="slide">
                     hello
                 </div>
                 <div class="slide">
                     hello
                 </div>
                 <div class="slide">
                     hello
                 </div>
                 <div class="slide">
                     hello
                 </div>
                 <div class="slide">
                     hello
                 </div>
                 <div class="slide">
                     hello
                 </div>
             </div>
         </div>
     </a>

     <div class="my-5">
         {{-- <div class="my-5">
             <h1>shsjahjhjf hsajhfj sanfnjehf </h1> <button class="buttonload">
                 <i class="fa fa-spinner fa-spin"></i>Loading
             </button>
             <button class="buttonload">
                 <i class="fa fa-refresh fa-spin"></i>Loading
             </button>
         </div> --}}

         <div class="px-3 index_category">
             <table class="w-100">
                 <tr class="d-none d-lg-block">
                     <td colspan="3">
                         <a href=""><img src="{{ asset('images/home/collecton.jpg') }}" alt=""
                                 class="w-100"></a>
                     </td>
                     <td colspan="3">
                         <a href=""><img src="{{ asset('images/home/tending.jpg') }}" alt=""
                                 class="w-100"></a>
                     </td>
                 </tr>
                 <tr class="d-block d-lg-none">
                     <td colspan="2">
                         <a href=""><img src="{{ asset('images/home/collecton.jpg') }}" alt=""
                                 class="w-100"></a>
                     </td>
                 </tr>
                 <tr class="d-block d-lg-none">
                     <td colspan="2">
                         <a href=""><img src="{{ asset('images/home/tending.jpg') }}" alt=""
                                 class="w-100"></a>
                     </td>
                 </tr>
                 <tr class="d-none d-lg-block">
                     <td>
                         <div class=" position-relative hover-body">
                             <img src="{{ asset('images/home/1.jpg') }}" alt="" class="w-100">
                             <div class="position-absolute bottom-0 left-0 px-2 py-1 hover-btn">
                                 <a href="">Ring</a>
                             </div>
                         </div>
                     </td>
                     <td>
                         <div class=" position-relative hover-body">
                             <img src="{{ asset('images/home/2.jpg') }}" alt="" class="w-100">
                             <div class="position-absolute bottom-0 left-0 px-2 py-1 hover-btn">
                                 <a href="">Earring</a>
                             </div>
                         </div>
                     </td>
                     <td>
                         <div class=" position-relative hover-body">
                             <img src="{{ asset('images/home/3.jpg') }}" alt="" class="w-100">
                             <div class="position-absolute bottom-0 left-0 px-2 py-1 hover-btn">
                                 <a href="">Earring</a>
                             </div>
                         </div>
                     </td>
                     <td>
                         <div class=" position-relative hover-body">
                             <img src="{{ asset('images/home/4.jpg') }}" alt="" class="w-100">
                             <div class="position-absolute bottom-0 left-0 px-2 py-1 hover-btn">
                                 <a href="">Earring</a>
                             </div>
                         </div>
                     </td>
                     <td>
                         <div class=" position-relative hover-body">
                             <img src="{{ asset('images/home/5.jpg') }}" alt="" class="w-100">
                             <div class="position-absolute bottom-0 left-0 px-2 py-1 hover-btn">
                                 <a href="">Earring</a>
                             </div>
                         </div>
                     </td>
                     <td>
                         <div class=" position-relative hover-body">
                             <img src="{{ asset('images/home/6.jpg') }}" alt="" class="w-100">
                             <div class="position-absolute bottom-0 left-0 px-2 py-1 hover-btn">
                                 <a href="">Earring</a>
                             </div>
                         </div>
                     </td>
                 </tr>

                 <tr class="d-block d-lg-none">
                     <td>
                         <div class=" position-relative hover-body">
                             <img src="{{ asset('images/home/1.jpg') }}" alt="" class="w-100">
                             <div class="position-absolute bottom-0 left-0 px-2 py-1 hover-btn">
                                 <a href="">Ring</a>
                             </div>
                         </div>
                     </td>
                     <td>
                         <div class=" position-relative hover-body">
                             <img src="{{ asset('images/home/2.jpg') }}" alt="" class="w-100">
                             <div class="position-absolute bottom-0 left-0 px-2 py-1 hover-btn">
                                 <a href="">Earring</a>
                             </div>
                         </div>
                     </td>
                 </tr>
                 <tr class="d-block d-lg-none">
                     <td>
                         <div class=" position-relative hover-body">
                             <img src="{{ asset('images/home/3.jpg') }}" alt="" class="w-100">
                             <div class="position-absolute bottom-0 left-0 px-2 py-1 hover-btn">
                                 <a href="">Earring</a>
                             </div>
                         </div>
                     </td>
                     <td>
                         <div class=" position-relative hover-body">
                             <img src="{{ asset('images/home/4.jpg') }}" alt="" class="w-100">
                             <div class="position-absolute bottom-0 left-0 px-2 py-1 hover-btn">
                                 <a href="">Earring</a>
                             </div>
                         </div>
                     </td>
                 </tr>
                 <tr class="d-block d-lg-none">
                     <td>
                         <div class=" position-relative hover-body">
                             <img src="{{ asset('images/home/5.jpg') }}" alt="" class="w-100">
                             <div class="position-absolute bottom-0 left-0 px-2 py-1 hover-btn">
                                 <a href="">Earring</a>
                             </div>
                         </div>
                     </td>
                     <td>
                         <div class=" position-relative hover-body">
                             <img src="{{ asset('images/home/6.jpg') }}" alt="" class="w-100">
                             <div class="position-absolute bottom-0 left-0 px-2 py-1 hover-btn">
                                 <a href="">Earring</a>
                             </div>
                         </div>
                     </td>
                 </tr>
             </table>
         </div>
         <br>
         <br>
         <br>

         <div class="px-3">
             <h2>Brand Spotlight</h2>
         </div>
         <br>
         <div class="row g-4" style="margin-left:0; margin-right:0;">
             <div class="col-lg-6 ">
                 <img src="{{ asset('images/home/1_Shop_Gemstones-Wide.jpg') }}" alt="" class="w-100">
             </div>
             <div class="col-lg-6">
                 <img src="{{ asset('images/home/Canaria-RS_PaoerClipBanner_2000x800.jpg') }}" alt=""
                     class="w-100">
             </div>
             <div class="col-lg-6">
                 <img src="{{ asset('images/home/3_Shop_Silver-Wide.jpg') }}" alt="" class="w-100">
             </div>
             <div class="col-lg-6">
                 <img src="{{ asset('images/home/1_Shop_Gemstones-Wide.jpg') }}" alt="" class="w-100">
             </div>
         </div>
         <br>
         <br>
         <br>
         <div class="px-3">
             <h2>Brand Spotlight</h2>
         </div>

         <div class="mx-1">
             <div class="row g-3 my-3" style="margin-left:0; margin-right:0;">
                 <div class="col-lg-4 category_image">
                     <img src="{{ asset('images/home/Emerald.jpg') }}" alt="" class="w-100  ">
                 </div>
                 <div class="col-lg-4 category_image">
                     <img src="{{ asset('images/home/Emerald.jpg') }}" alt="" class="w-100  ">
                 </div>
                 <div class="col-lg-4 category_image">
                     <img src="{{ asset('images/home/Emerald.jpg') }}" alt="" class="w-100  ">
                 </div>
             </div>

             <div class="row g-3" style="margin-left:0; margin-right:0;">
                 <div class="col-lg-4  category_image ">
                     <img src="{{ asset('images/home/Emerald.jpg') }}" alt="" class="w-100  ">
                 </div>
                 <div class="col-lg-8   category_image">
                     <img src="{{ asset('images/home/big-gemstone.jpg') }}" alt="" class="w-100  ">
                 </div>
             </div>
         </div>

     </div>
     <div class="row g-4 my-3 mx-1  align-items-center" style="margin-left:0; margin-right:0;">
         <div class="col-lg-8">
             <img src="images/home/jewelry-store.jpg" alt="" class="w-100">
         </div>
         <div class="col-lg-4 text-center">
             <h3>OUR JEWELRY STORE</h3>
             <br>
             <p style="color:rgb(110, 60, 51);">
                 Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur
                 minima vel quae? Mollitia at provident iste quod facilis eum .
             </p>
             <button class="custom-btn btn-5 px-4 py-2  mt-2"> ABOUT US </button>
         </div>
     </div>
     <br>
     <br>
 @endsection
