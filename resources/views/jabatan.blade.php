@extends('layout.main')
@section('content')

    <div class="container-fluid py-4">
    <div class="col-xl-6">
        <div class="row">
        <div class="col-md-6">
            <div class="card">
            <div class="card-header mx-4 p-3 text-center">
                <div class="icon icon-shape icon-lg bg-gradient-primary shadow text-center border-radius-lg">
                <i class="fas fa-landmark opacity-10"></i>
                </div>
            </div>
            <div class="card-body pt-0 p-3 text-center">
                <h6 class="text-center mb-0">Salary</h6>
                <span class="text-xs">Belong Interactive</span>
                <hr class="horizontal dark my-3">
                <h5 class="mb-0">+$2000</h5>
            </div>
            </div>
        </div>
        <div class="col-md-6 mt-md-0 mt-4">
            <div class="card">
            <div class="card-header mx-4 p-3 text-center">
                <div class="icon icon-shape icon-lg bg-gradient-primary shadow text-center border-radius-lg">
                <i class="fab fa-paypal opacity-10"></i>
                </div>
            </div>
            <div class="card-body pt-0 p-3 text-center">
                <h6 class="text-center mb-0">Paypal</h6>
                <span class="text-xs">Freelance Payment</span>
                <hr class="horizontal dark my-3">
                <h5 class="mb-0">$455.00</h5>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>  
  </main>
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="fa fa-cog py-2"> </i>
    </a>
    <div class="card shadow-lg">
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0 overflow-auto">
        <hr class="horizontal dark my-sm-4">
        <div class="mt-2 mb-5 d-flex">
          <h6 class="mb-0">Light / Dark</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
          </div>
        </div>
      </div>
    </div>
  </div>


@endsection