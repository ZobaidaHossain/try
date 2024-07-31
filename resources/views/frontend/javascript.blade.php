@extends('frontend.master')
@push('content')

<div class="javascript">
    <div class="c-magic-area c-magic-area--content" data-target-class=".c-article__link" data-tween-back="false" aria-hidden="true"></div>

    <section class="o-main-section">
        <article class="c-article">
          <a class="c-article__link" href="#">
            <div>
              <header>
                <h3 class="c-article__heading">Ink transition with PNG sprite</h3>
              </header>
              <div class="c-article__content">
                Animate images with ink transition in PNG sprite.
              </div>
            </div>
            <div class="c-article__img-wrapper">
              <img class="c-article__img" src="https://assets.codepen.io/204808/shin-yun-bok-ink.png" alt="Ink transition with PNG sprite" />
            </div>
          </a>
        </article>

        <article class="c-article">
          <a class="c-article__link" href="#">
            <div>
              <header>
                <h3 class="c-article__heading">Responsive Mondrian art with CSS grid</h3>
              </header>
              <div class="c-article__content">
                Make a responsive Mondrian art with CSS grid layout.
              </div>
            </div>
            <div class="c-article__img-wrapper">
              <img class="c-article__img" src="https://assets.codepen.io/204808/css-grid-mondrian.png" alt="Responsive Mondrian art with CSS grid" />
            </div>
          </a>
        </article>

        <article class="c-article">
          <a class="c-article__link" href="#">
            <div>
              <header>
                <h3 class="c-article__heading">Space rocket with requestAnimationFrame</h3>
              </header>
              <div class="c-article__content">
                Create the space rocket animation with stars in different perspective.
              </div>
            </div>
            <div class="c-article__img-wrapper">
              <img class="c-article__img" src="https://assets.codepen.io/204808/17.Space-Rocket-with-requestAnimationFrame.png" alt="Responsive Mondrian art with CSS grid" />
            </div>
          </a>
        </article>
    </section>
    <script src="https://unpkg.co/gsap@3/dist/gsap.min.js"></script>
    <script src="script.js"></script>
</div>

@endpush

@push('js')

<script>


    </script>
@endpush
