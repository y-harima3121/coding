@extends('codepen.layouts.app')

@section('page_class', 'l-body l-accessibleTabsAnimation')
@section('description', '')
@section('title', 'Accessible Tabs ( Animation )')

@section('content')
  @component('codepen.layouts.frame._default')
    @slot('head')
      <h1><span>Table</span> of content</h1>
    @endslot
    @slot('body')
    <section class="p-accessibleTabsAnimation">
      <div class="p-accessibleTabsAnimation__body">
        <ul class='p-accessibleTabsAnimation__indexes'>
          <li data-index='0'>01</li>
          <li data-index='1'>02</li>
          <li data-index='2'>03</li>
          <li data-index='3'>04</li>
        </ul>
        <ul class='p-accessibleTabsAnimation__tabs'>
          <li class='tab'>
            <article class='tab-content'>
              <p class="ttl">Midnight Station</p>
              <p class="desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
              Voluptas nihil sequi doloribus obcaecati. Aut vel, recusandae ipsa
              voluptate blanditiis nemo magnam sit modi architecto officia
              maiores magni. Necessitatibus, iste aut.</p>
              <button>Read More</button>
            </article>
            <div class='tab-image'><img src='https://picsum.photos/id/345/1000/600'></div>
          </li>
          <li class='tab'>
            <article class='tab-content'>
              <p class="ttl">The Hitchhiker</p>
              <p class="desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
              Voluptas nihil sequi doloribus obcaecati. Aut vel, recusandae ipsa
              voluptate blanditiis nemo magnam sit modi architecto officia
              maiores magni. Necessitatibus, iste aut.</p>
              <button>Read More</button>
            </article>
            <div class='tab-image'><img src='https://picsum.photos/id/352/1000/600'></div>
          </li>
          <li class='tab'>
            <article class='tab-content'>
              <p class="ttl">Missing Pages</p>
              <p class="desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
              Voluptas nihil sequi doloribus obcaecati. Aut vel, recusandae ipsa
              voluptate blanditiis nemo magnam sit modi architecto officia
              maiores magni. Necessitatibus, iste aut.</p>
              <button>Read More</button>
            </article>
            <div class='tab-image'><img src='https://picsum.photos/id/444/1000/600'></div>
          </li>
          <li class='tab'>
            <article class='tab-content'>
              <p class="ttl">Uninvited Guests</p>
              <p class="desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
              Voluptas nihil sequi doloribus obcaecati. Aut vel, recusandae ipsa
              voluptate blanditiis nemo magnam sit modi architecto officia
              maiores magni. Necessitatibus, iste aut.</p>
              <button>Read More</button>
            </article>
            <div class='tab-image'><img src='https://picsum.photos/id/451/1000/600'></div>
          </li>
        </ul>
      </div>
    </section>
    <a href="https://codepen.io/noirsociety/pen/abXNVPB" class="c-button__text" target="_blank" rel="noopener noreferrer">Accessible Tabs ( Animation )</a>
    <script>
      const indexes = document.querySelectorAll('.p-accessibleTabsAnimation__indexes li');
      const tabs = document.querySelectorAll('.p-accessibleTabsAnimation__tabs .tab');
      const contents = document.querySelectorAll('.p-accessibleTabsAnimation__tabs .tab-content');

      function reset() {
        for (let i = 0; i < tabs.length; i++) {
          indexes[i].style.borderColor = 'transparent';
          tabs[i].style.zIndex = 0;
          tabs[i].classList.remove('active');
          contents[i].classList.remove('active');
        }
      }

      function showTab(i) {
        indexes[i].style.borderColor = 'rgba(211,38,38,0.6)';
        tabs[i].style.opacity = 1;
        tabs[i].style.zIndex = 5;
        tabs[i].classList.add('active');
        contents[i].classList.add('active');
      }

      function activate(e) {
        if (!e.target.matches('.p-accessibleTabsAnimation__indexes li')) return;
        reset();
        showTab(e.target.dataset.index);
      }

      const init = () => showTab(0);

      window.addEventListener('load',init,false);
      window.addEventListener('click',activate,false);
    </script>
    @endslot
  @endcomponent
@endsection