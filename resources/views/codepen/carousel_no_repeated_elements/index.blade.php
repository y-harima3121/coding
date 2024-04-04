@extends('codepen.layouts.app')

@section('page_class', 'l-body l-carouselNoRepeatedElements')
@section('description', '')
@section('title', 'Infinite marquee/carousel no repeated elements 🫶')

@section('content')
  @component('codepen.layouts.frame._default')
    @slot('head')
    
    @endslot
    @slot('body')
    <div class="p-carouselNoRepeatedElements">
      <div class="p-carouselNoRepeatedElements__box">
        <div class="p-carouselNoRepeatedElements__head">
          <h2><span>CSS</span><span>Masters</span></h2>
          <p>
            All the skills you need to take your styling to the next level.
            Learn to think with a CSS first mindset. Approach problems
            leveraging the platform. Use the platform. Embrace the platform.
          </p>
        </div>
        <div class="p-carouselNoRepeatedElements__window">
          <div class="p-carouselNoRepeatedElements__scene">
            <ul class="p-carouselNoRepeatedElements__grid">
              <li>
                <div class="item">
                  <div class="item_image">
                    <img src="{{asset('/img/codepen/carouselNoRepeatedElements/image1.png')}}" alt="">
                  </div>
                </div>
              </li>
              <li>
                <div class="item">
                  <div class="item_image">
                    <img src="{{asset('/img/codepen/carouselNoRepeatedElements/image2.png')}}" alt="">
                  </div>
                </div>
              </li>
              <li>
                <div class="item">
                  <div class="item_image">
                    <img src="{{asset('/img/codepen/carouselNoRepeatedElements/image3.png')}}" alt="">
                  </div>
                </div>
              </li>
              <li>
                <div class="item">
                  <div class="item_image">
                    <img src="{{asset('/img/codepen/carouselNoRepeatedElements/image4.png')}}" alt="">
                  </div>
                </div>
              </li>
              <li>
                <div class="item">
                  <div class="item_image">
                    <img src="{{asset('/img/codepen/carouselNoRepeatedElements/image5.png')}}" alt="">
                  </div>
                </div>
              </li>
              <li>
                <div class="item">
                  <div class="item_image">
                    <img src="{{asset('/img/codepen/carouselNoRepeatedElements/image6.png')}}" alt="">
                  </div>
                </div>
              </li>
              <li>
                <div class="item">
                  <div class="item_image">
                    <img src="{{asset('/img/codepen/carouselNoRepeatedElements/image7.png')}}" alt="">
                  </div>
                </div>
              </li>
              <li>
                <div class="item">
                  <div class="item_image">
                    <img src="{{asset('/img/codepen/carouselNoRepeatedElements/image8.png')}}" alt="">
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <a href="https://codepen.io/jh3y/pen/RwdPvvz" class="c-button__text" target="_blank" rel="noopener noreferrer">Infinite marquee/carousel no repeated elements 🫶</a>
    @endslot
  @endcomponent
@endsection
