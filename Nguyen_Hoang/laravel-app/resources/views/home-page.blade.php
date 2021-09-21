<x-my-app-layout>

  @include('partials.slide')
  
  <section class="ftco-section">
    <div class="container">
      <div class="row no-gutters ftco-services">
        <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services mb-md-0 mb-4">
            <div class="icon bg-color-1 active d-flex justify-content-center align-items-center mb-2">
              <span class="flaticon-shipped"></span>
            </div>
            <div class="media-body">
              <h3 class="heading">Free Shipping</h3>
              <span>On order over $100</span>
            </div>
          </div>
        </div>
        <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services mb-md-0 mb-4">
            <div class="icon bg-color-2 d-flex justify-content-center align-items-center mb-2">
              <span class="flaticon-diet"></span>
            </div>
            <div class="media-body">
              <h3 class="heading">Always Fresh</h3>
              <span>Product well package</span>
            </div>
          </div>
        </div>
        <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services mb-md-0 mb-4">
            <div class="icon bg-color-3 d-flex justify-content-center align-items-center mb-2">
              <span class="flaticon-award"></span>
            </div>
            <div class="media-body">
              <h3 class="heading">Superior Quality</h3>
              <span>Quality Products</span>
            </div>
          </div>
        </div>
        <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services mb-md-0 mb-4">
            <div class="icon bg-color-4 d-flex justify-content-center align-items-center mb-2">
              <span class="flaticon-customer-service"></span>
            </div>
            <div class="media-body">
              <h3 class="heading">Support</h3>
              <span>24/7 Support</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="ftco-section ftco-category ftco-no-pt">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="row">
            <div class="col-md-6 order-md-last align-items-stretch d-flex">
              <div class="category-wrap-2 ftco-animate img align-self-stretch d-flex" style="background-image: url(/themes/vegefoods/images/category.jpg);">
                <div class="text text-center">
                  <h2>Vegetables</h2>
                  <p>Protect the health of every home</p>
                  <p>
                    <a href="#" class="btn btn-primary">Shop now</a>
                  </p>
                </div>
              </div>
            </div>
            @php
              $categoriesFruit = $categories->where('name', 'Fruits')->first();
              $categoriesVegetables = $categories->where('name', 'Vegetables')->first();
              $categoriesJuices = $categories->where('name', 'Juices')->first();
              $categoriesDried = $categories->where('name', 'Dried')->first();
            @endphp
            <div class="col-md-6">
              <div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(/themes/vegefoods/images/{{$categoriesFruit->image}});">
                <div class="text px-3 py-1">
                  <h2 class="mb-0">
                    <a href="{{ route('category.show', [ 'id' => $categoriesFruit->id ]) }}">{{$categoriesFruit->name}}</a>
                  </h2>
                </div>
              </div>
              <div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url(/themes/vegefoods/images/{{$categoriesVegetables->image}});">
                <div class="text px-3 py-1">
                  <h2 class="mb-0">
                    <a href="{{ route('category.show', [ 'id' => $categoriesVegetables->id ])}}">{{$categoriesVegetables->name}}</a>
                  </h2>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(/themes/vegefoods/images/{{$categoriesJuices->image}});">
            <div class="text px-3 py-1">
              <h2 class="mb-0">
                <a href="{{ route('category.show', [ 'id' => $categoriesJuices->id ])}}">{{$categoriesJuices->name}}</a>
              </h2>
            </div>
          </div>
          <div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url(/themes/vegefoods/images/{{$categoriesDried->image}});">
            <div class="text px-3 py-1">
              <h2 class="mb-0">
                <a href="{{ route('category.show', [ 'id' => $categoriesDried->id ])}}">{{$categoriesDried->name}}</a>
              </h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="ftco-section">
    <div class="container">
      <div class="row justify-content-center mb-3 pb-3">
        <div class="col-md-12 heading-section text-center ftco-animate">
          <span class="subheading">Featured Products</span>
          <h2 class="mb-4">Our Products</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        @foreach ($products as $product)
        <div class="col-md-6 col-lg-3 ftco-animate">
          <div class="product">
            <a href="#" class="img-prod">
              <img class="img-fluid" src="{{ $product->image }}" alt="Colorlib Template">
              @if ($product->sale_off > 0)
              <span class="status">{{ $product->sale_off }}%</span>
              @endif
              <div class="overlay"></div>
            </a>
            <div class="text py-3 pb-4 px-3 text-center">
              <h3>
                <a href="#">{{ $product->name }}</a>
              </h3>
              <div class="d-flex">
                <div class="pricing">
                  <p class="price">
                    @if ($product->sale_off > 0)
                    <span class="mr-2 price-dc">${{ $product->price }}</span>
                    <span class="price-sale">${{ $product->price }}</span>
                    @else
                    <span>{{ $product->price }}</span>
                    @endif
                  </p>
                </div>
              </div>
              <div class="bottom-area d-flex px-3">
                <div class="m-auto d-flex">
                  <a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                    <span>
                      <i class="ion-ios-menu"></i>
                    </span>
                  </a>
                  <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
                    <span>
                      <i class="ion-ios-cart"></i>
                    </span>
                  </a>
                  <a href="#" class="heart d-flex justify-content-center align-items-center ">
                    <span>
                      <i class="ion-ios-heart"></i>
                    </span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach

        <!-- <div class="col-md-6 col-lg-3 ftco-animate">
          <div class="product">
            <a href="#" class="img-prod">
              <img class="img-fluid" src="/themes/vegefoods/images/product-2.jpg" alt="Colorlib Template">
              <div class="overlay"></div>
            </a>
            <div class="text py-3 pb-4 px-3 text-center">
              <h3>
                <a href="#">Strawberry</a>
              </h3>
              <div class="d-flex">
                <div class="pricing">
                  <p class="price">
                    <span>$120.00</span>
                  </p>
                </div>
              </div>
              <div class="bottom-area d-flex px-3">
                <div class="m-auto d-flex">
                  <a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                    <span>
                      <i class="ion-ios-menu"></i>
                    </span>
                  </a>
                  <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
                    <span>
                      <i class="ion-ios-cart"></i>
                    </span>
                  </a>
                  <a href="#" class="heart d-flex justify-content-center align-items-center ">
                    <span>
                      <i class="ion-ios-heart"></i>
                    </span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div> -->

    </div>

    {{ $products->links('partials.my-paginate') }}

  </section>
  <section class="ftco-section img" style="background-image: url(/themes/vegefoods/images/bg_3.jpg);">
    <div class="container">
      <div class="row justify-content-end">
        <div class="col-md-6 heading-section ftco-animate deal-of-the-day ftco-animate">
          <span class="subheading">Best Price For You</span>
          <h2 class="mb-4">Deal of the day</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          <h3>
            <a href="#">Spinach</a>
          </h3>
          <span class="price">$10 <a href="#">now $5 only</a>
          </span>
          <div id="timer" class="d-flex mt-5">
            <div class="time" id="days"></div>
            <div class="time pl-3" id="hours"></div>
            <div class="time pl-3" id="minutes"></div>
            <div class="time pl-3" id="seconds"></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="ftco-section testimony-section">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-7 heading-section ftco-animate text-center">
          <span class="subheading">Testimony</span>
          <h2 class="mb-4">Our satisfied customer says</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
        </div>
      </div>
      <div class="row ftco-animate">
        <div class="col-md-12">
          <div class="carousel-testimony owl-carousel">
            <div class="item">
              <div class="testimony-wrap p-4 pb-5">
                <div class="user-img mb-5" style="background-image: url(/themes/vegefoods/images/person_1.jpg)">
                  <span class="quote d-flex align-items-center justify-content-center">
                    <i class="icon-quote-left"></i>
                  </span>
                </div>
                <div class="text text-center">
                  <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  <p class="name">Garreth Smith</p>
                  <span class="position">Marketing Manager</span>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap p-4 pb-5">
                <div class="user-img mb-5" style="background-image: url(/themes/vegefoods/images/person_2.jpg)">
                  <span class="quote d-flex align-items-center justify-content-center">
                    <i class="icon-quote-left"></i>
                  </span>
                </div>
                <div class="text text-center">
                  <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  <p class="name">Garreth Smith</p>
                  <span class="position">Interface Designer</span>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap p-4 pb-5">
                <div class="user-img mb-5" style="background-image: url(/themes/vegefoods/images/person_3.jpg)">
                  <span class="quote d-flex align-items-center justify-content-center">
                    <i class="icon-quote-left"></i>
                  </span>
                </div>
                <div class="text text-center">
                  <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  <p class="name">Garreth Smith</p>
                  <span class="position">UI Designer</span>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap p-4 pb-5">
                <div class="user-img mb-5" style="background-image: url(/themes/vegefoods/images/person_1.jpg)">
                  <span class="quote d-flex align-items-center justify-content-center">
                    <i class="icon-quote-left"></i>
                  </span>
                </div>
                <div class="text text-center">
                  <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  <p class="name">Garreth Smith</p>
                  <span class="position">Web Developer</span>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap p-4 pb-5">
                <div class="user-img mb-5" style="background-image: url(/themes/vegefoods/images/person_1.jpg)">
                  <span class="quote d-flex align-items-center justify-content-center">
                    <i class="icon-quote-left"></i>
                  </span>
                </div>
                <div class="text text-center">
                  <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  <p class="name">Garreth Smith</p>
                  <span class="position">System Analyst</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <hr>
  <section class="ftco-section ftco-partner">
    <div class="container">
      <div class="row">
        <div class="col-sm ftco-animate">
          <a href="#" class="partner">
            <img src="/themes/vegefoods/images/partner-1.png" class="img-fluid" alt="Colorlib Template">
          </a>
        </div>
        <div class="col-sm ftco-animate">
          <a href="#" class="partner">
            <img src="/themes/vegefoods/images/partner-2.png" class="img-fluid" alt="Colorlib Template">
          </a>
        </div>
        <div class="col-sm ftco-animate">
          <a href="#" class="partner">
            <img src="/themes/vegefoods/images/partner-3.png" class="img-fluid" alt="Colorlib Template">
          </a>
        </div>
        <div class="col-sm ftco-animate">
          <a href="#" class="partner">
            <img src="/themes/vegefoods/images/partner-4.png" class="img-fluid" alt="Colorlib Template">
          </a>
        </div>
        <div class="col-sm ftco-animate">
          <a href="#" class="partner">
            <img src="/themes/vegefoods/images/partner-5.png" class="img-fluid" alt="Colorlib Template">
          </a>
        </div>
      </div>
    </div>
  </section>
  <section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
    <div class="container py-4">
      <div class="row d-flex justify-content-center py-5">
        <div class="col-md-6">
          <h2 style="font-size: 22px;" class="mb-0">Subcribe to our Newsletter</h2>
          <span>Get e-mail updates about our latest shops and special offers</span>
        </div>
        <div class="col-md-6 d-flex align-items-center">
          <form action="#" class="subscribe-form">
            <div class="form-group d-flex">
              <input type="text" class="form-control" placeholder="Enter email address">
              <input type="submit" value="Subscribe" class="submit px-3">
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
</x-my-app-layout>
