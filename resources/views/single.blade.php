 @extends('layout')
 @section('content')
     <img src="{{ url('images/home/product-banner.jpg') }}" alt="" class="w-100">
     <br>
     <br>
     <br>
     <div style="width:95%; margin:auto;">
         <div class="row">
             <div class="col-lg-7"></div>
             <div class="col-lg-5">
                 <h3 class="mb-3">She's an Icon Heart Necklace</h3>
                 <div class="d-flex  mb-2 align-items-center">
                     <div>
                         @for ($i = 1; $i <= 5; $i++)
                             <span style="font-size:18px;">&#9734;</span>
                         @endfor
                     </div>
                     <a class="mx-2" style="color: #000; font-size:14px;" href="#reviewbtn"> No Review</a>
                 </div>
                 <div>
                     Color: Gold
                 </div>
                 <div class="d-flex pb-3  align-items-center my-3">
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
                 <div class="row pb-3  align-items-center my-2">
                     <div class="col-10">
                         <button class="w-100 custom-btn btn-5  py-2 text-center">
                             ADD TO CART
                         </button>
                     </div>
                     <div class="col-2">
                         <i class="fa-regular fa-heart" style="font-size: 28px;"></i>
                     </div>
                 </div>

                 <div id="share-button">
                     <button title="Share" class="sharebtn border-0 px-3 py-2 mb-4"onclick="shareProduct()"><i
                             class="fas fa-share"></i>
                         &nbsp;Share
                     </button>
                 </div>

                 <div class="accordion" id="myAccordion">
                     <div class="accrdian-border" style="border-top:1px solid rgb(224, 223, 223);">
                         <div class="accordion-item border-0">
                             <h2 class="accordion-header" id="headingOne">
                                 <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                     data-bs-target="#collapseOne">Description</button>
                             </h2>
                             <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                                 <div class="card-body ">
                                     <div class="mt-2">
                                         Lorem ipsum, dolor sit amet consectetur adipisicing elit. Error deserunt ipsam,
                                         excepturi alias delectus nulla voluptas facere ea beatae nostrum assumenda
                                         accusantium magni voluptate corporis consectetur nam eius quae. Iure.
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>

                     <div class="accordion-item border-0">
                         <h2 class="accordion-header" id="headingTwo">
                             <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                 data-bs-target="#collapseTwo">Product Details</button>
                         </h2>
                         <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                             <div class="card-body">
                                 <div class="mt-2 d-flex align-items-center">
                                     Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam ducimus sint
                                     quibusdam blanditiis vero laudantium corrupti ea ratione voluptates soluta temporibus
                                     praesentium, animi placeat neque earum est. Aliquam, et consectetur?
                                 </div>
                             </div>
                         </div>
                     </div>

                     <div class="accordion-item border-0">
                         <h2 class="accordion-header" id="headingThree">
                             <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                 data-bs-target="#collapseThree">Materials</button>
                         </h2>
                         <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                             <div class="card-body">
                                 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio assumenda voluptates,
                                 incidunt sapiente recusandae molestias, tempora ipsa delectus mollitia rerum dolorum dicta
                                 atque cumque debitis placeat nobis libero reprehenderit commodi.
                             </div>
                         </div>
                     </div>


                 </div>
             </div>
         </div>
     </div>
     <br>
     <br>
     <hr>
     <div style="width:95%; margin:auto; ">
         <div class="text-center">
             <h3> You May Also Like</h3>
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
     </div>

     <br>
     <br>
     <hr>
     <div style="width:95%; margin:auto; ">
         <div class="text-center">
             <h3> Product Reviews</h3>
         </div>

         <div class="py-3" style=" border-bottom:1px solid rgb(110, 60, 51); border-top:1px solid rgb(110, 60, 51);">
             <div class="d-flex justify-content-between  align-items-center">
                 <div>
                     <div class="d-flex   align-items-center">
                         <div>
                             @for ($i = 1; $i <= 5; $i++)
                                 <span style="font-size:18px;">&#9734;</span>
                             @endfor
                         </div>
                         <a class="mx-2" style="color: #000; font-size:14px;" href="#"> No Review</a>
                     </div>
                 </div>
                 <div id="reviewbtn">
                     <button class="custom-btn btn-5  px-4 py-2">WRITE A REVIEW</button>
                 </div>
             </div>
             <div class="reviewform" style="display: none; ">
                 <div class="row g-4">
                     <div class="col-lg-6">
                         <div>Rating<span style="font-size:24px;">*</span></div>
                         <div class="rating">
                             <input type="radio" id="star5" wire:model="rating" value="5" /><label
                                 for="star5"></label>
                             <input type="radio" id="star4" wire:model="rating" value="4" /><label
                                 for="star4"></label>
                             <input type="radio" id="star3" wire:model="rating" value="3" /><label
                                 for="star3"></label>
                             <input type="radio" id="star2" wire:model="rating" value="2" /><label
                                 for="star2"></label>
                             <input type="radio" id="star1" wire:model="rating" value="1" /><label
                                 for="star1"></label>
                         </div>
                         @error('rating')
                             <div class="alert alert-danger py-1">{{ $message }}</div>
                         @enderror
                     </div>
                     <div class="col-lg-6">
                         <lable>Add a title <span style="font-size:24px;">*</span>
                         </lable>
                         <br>
                         <input class="  border py-2 px-2 w-100" type="text" wire:model="title" required><br>
                         @error('title')
                             <div class="alert alert-danger py-1">{{ $message }}</div>
                         @enderror
                     </div>
                 </div>
                 <lable>Add a review <span style="font-size:24px;">*</span> </lable><br>
                 <textarea class="  border py-1 px-2 w-100" wire:model="review" cols="30" rows="4" required></textarea>
                 @error('review')
                     <div class="alert alert-danger py-1">{{ $message }}</div>
                 @enderror


                 <div class="row g-4">
                     <div class="col-lg-4">
                         <lable> Add a photo <samp style="font-size:24px;"></samp></lable>
                         <input wire:model="image" class=" border py-1 px-4 w-100" type="file">
                         {{-- <div wire:loading wire:target="image"><i
                                     class="fa fa-spinner fa-spin mt-2 ml-2"></i>Uploading...
                             </div> --}}

                         {{-- @if ($image)
                         Photo Preview:

                         <div class="position-relative m-2">
                             <img style="width:100px" src="{{ $image->temporaryUrl() }}">

                             <div class="position-absolute" style="top:2px; right:0px;" title="Remove"
                                 wire:click.prevent="removepreview()"><i class="fas fa-times "
                                     style=" cursor:pointer; color:red"></i>
                             </div>
                         </div>
                     @endif --}}
                     </div>
                     <div class="col-lg-4">
                         <lable>Your name<span style="font-size:24px;">*</span> </lable>
                         <input wire:model="user_name" class="   border py-2 px-2 w-100 text-capitalize" type="text"
                             required>
                         @error('user_name')
                             <div class="alert alert-danger py-1">{{ $message }}</div>
                         @enderror
                     </div>
                     <div class="col-lg-4">
                         <lable> Email <span style="font-size:24px;">*</span></lable>
                         <input wire:model="user_email" class=" border  py-2 px-2 w-100" type="email" required>
                         @error('user_email')
                             <div class="alert alert-danger py-1">{{ $message }}</div>
                         @enderror
                     </div>
                 </div>

                 <div class="d-flex justify-content-end mt-4">
                     <button class="custom-btn btn-5  px-4 py-2" wire:click="writeReview()">Submit</button>
                 </div>
             </div>
         </div>

         <div class="my-5">
             <div class="d-flex border-bottom mb-4">
                 <div>
                     <div class="text-uppercase"
                         style="width:40px; height:40px; border-radius:50%; background-color:#071d49; color:#fff; line-height:40px; text-align:center; margin-right:10px;">
                         {{-- {{ substr($item->user_name, 0, 1) }} --}} R
                     </div>
                 </div>

                 <div class="w-100">
                     <div class="d-flex align-items-center justify-content-between">
                         <div>
                             {{-- <h5 class="text-capitalize">{{ $item->user_name }}</h5> --}}
                             Rohan
                         </div>
                         {{-- <div style="color: #bbb8b8">{{ $item->created_at->format('d/m/Y') }}</div> --}}
                         <div style="color: #bbb8b8">12-12-2024</div>
                     </div>
                     <div class="d-flex">
                         @for ($i = 1; $i <= 5; $i++)
                             <span style="font-size:22px;">&#9733;</span>
                         @endfor
                     </div>
                     {{-- <h6>{{ $item->title }}</h6> --}}
                     <h6>Nice Ring</h6>
                     {{-- <p style="color: #bbb8b8">{{ $item->review }}</p> --}}
                     <p style="color: #bbb8b8">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, repellendus.
                         Assumenda, expedita quod quibusdam tempore labore cumque totam repellendus ab, veniam sed corporis
                         dolores! Placeat maiores ab nemo nihil molestiae?</p>
                     {{-- <img src="{{ asset('storage/ReviewImage/' . $item->image) }}" alt=""
                            style="width: 200px;" /> --}}
                     <div class="d-flex align-items-center justify-content-end w-100">
                         <div class="d-flex align-items-center">
                             <div class="mx-2 d-flex align-items-center">
                                 {{-- <button class="border-0 bg-transparent" wire:click="isLike('like',{{ $item->id }})"
                                     class="mx-1">
                                     <i class="like_btn fas fa-thumbs-up"></i>
                                 </button>
                                 &nbsp;
                                 <span>{{ count($liks->where('likes', 'like')->where('review_id', $item->id)) }}</span> --}}
                             </div>
                         </div>

                         <div class="mx-2 d-flex align-items-center">
                             {{-- <button class="border-0 bg-transparent"
                                 wire:click="isDislike('dislike',{{ $item->id }})" class="mx-1 ">
                                 <i class="fas fa-thumbs-down pt-2"></i>
                             </button>&nbsp;
                             <span>{{ count($liks->where('dislikes', 'dislike')->where('review_id', $item->id)) }}</span> --}}
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <br>
     <br>


     {{-- ----------------share js---------- --}}
     <script>
         function shareProduct() {
             var url = window.location.href;
             var shareLink = url;
             if (navigator.share) {
                 navigator.share({
                         url: shareLink
                     })
                     .then(() => console.log('Product shared successfully.'))
                     .catch((error) => console.error('Error sharing product:', error));
             } else {
                 window.open(shareLink, '_blank');
             }
         }
     </script>
     {{-- ----------------star js---------- --}}
     <script>
         $(document).ready(function() {
             $("#reviewbtn").click(function() {
                 $(".reviewform").toggle("slow");
             });
         });

         const allStars = document.querySelectorAll('.star');
         allStars.forEach((star, i) => {
             star.onclick = function() {
                 let current_star_level = i + 1;
                 allStars.forEach((star, j) => {
                     if (current_star_level >= j + 1) {
                         star.innerHTML = '&#9733';
                     } else {
                         star.innerHTML = '&#9734';
                     }
                 })
             }
         });
     </script>
 @endsection
