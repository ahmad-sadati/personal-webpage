@extends('layouts.main')
@section('title' , 'Home')
@section('page' , 'Ahmad.developer')
@section('content')
<!-- main -->
    <section class="my-5">
      <div class="contaienr">
        <div class="text-center mt-5 py-5">
          <div>
            <img
              src="/img/avatar.webp"
              class="img-fulid object-fit-contain rounded-circle"
              style="width: 120px; height: 120px"
              alt="logo"
            />
          </div>
          <p class="mt-4 text-secondary fs-0">Hi, i'm Ahmad👋</p>
          <h1 class="show-title lh-3 mb-5 txtgrdint1">
            Building digital products<br />
            Turning your ideas<br />
            into codes.
          </h1>
          <a class="btn btn-outline-secondary" href="/lastshots">
            Last shots<i class="bi bi-arrow-up-right"></i>
          </a>
        </div>
      </div>
    </section>
    <!-- logo -->
    <div class="container-fluid">
      <div
        class="row gy-5 py-5 py-sm-5 gy-sm-3 align-items-center justify-content-center bg-brands text-center brands"
      >
        <div class="col-12 col-sm-6 col-lg-4 col-xl-2">
          <img src="/img/1.svg" alt="svg" />
        </div>
        <div class="col-12 col-sm-6 col-lg-4 col-xl-2">
          <img src="/img/2.svg" alt="svg" />
        </div>
        <div class="col-12 col-sm-6 col-lg-4 col-xl-2">
          <img src="/img/3.svg" alt="svg" />
        </div>
        <div class="col-12 col-sm-6 col-lg-4 col-xl-2">
          <img src="/img/4.svg" alt="svg" />
        </div>
        <div class="col-12 col-sm-6 col-lg-4 col-xl-2">
          <img src="/img/5.svg" alt="svg" />
        </div>
        <div class="col-12 col-sm-6 col-lg-4 col-xl-2">
          <img src="/img/6.svg" alt="svg" />
        </div>
      </div>
    </div>
    <div class="container my-5 py-5">
      <div class="row text-center">
        <h3 class="fw-semibold show-title txtgrdint1">
          Collaborate with brands and agancies to <br>
          create impactful results.
        </h3>
      </div>
      <!-- cards -->
      <div class="row text-sm gy-2 gx-4 gx-sm-3 mt-5">
        <div class="col-12 col-sm-6 col-lg-6 col-xl-3">
          <div class="card">
            <div class="card-body">
              <i style="font-size: 30px;" class="bi bi-pencil"></i>
              <h4 class="card-title my-3">UX & UI</h4>
              <p class="card-text">
                Designing interfaces that are <br>
                intuitive, efficient, and <br>
                enjoyable to use.
              </p>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-6 col-xl-3">
          <div class="card">
            <div class="card-body">
              <i style="font-size: 30px;" class="bi bi-phone"></i>
              <h4 class="card-title my-3">Web & Mobile App</h4>
              <p class="card-text">
                Transforming ideas into <br>
                exeptional web and mobile <br>
                app experiences.
              </p>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-6 col-xl-3">
          <div class="card">
            <div class="card-body">
              <i style="font-size: 30px;" class="bi bi-laptop"></i>
              <h4 class="card-title my-3">Design & Creative</h4>
              <p class="card-text">
                Crafting visually stunning <br>
                designs that connect with <br>
                your audience.
              </p>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-6 col-xl-3">
          <div class="card">
            <div class="card-body">
              <i style="font-size: 30px;" class="bi bi-lightning"></i>
              <h4 class="card-title my-3">Developement</h4>
              <p class="card-text">
                 Bringing your vision to life <br>
                 with the latest technology <br>
                 and design trends.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- section below cards -->
    <div class="container text-center my-5">
      <h2 class="pb-4 mb-4 txtgrdint1">Tell me about your<br>
      next project</h2>
      <a href="/contact"
        class="show-btn btn btn-outline-secondary"
      >
          Get In Touch <i class="bi bi-envelope-fill me-1"></i
      ></a>
      @endsection
