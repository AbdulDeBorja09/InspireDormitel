@extends('admin.layout.app')
@section('content')
  <div class="addtenants container" style="background-color: #fcfcfc">
        <div style="height: 70px"></div>
        <div class="top">
            <ion-icon name="person" ></ion-icon>
            <h1><a href="{{url('/admin/home')}}" >Home</a><span>></span> <a href="{{url('/admin/tenants')}}" >Tenats</a><span>></span> Add Tenants</h1>
        </div>
        <div class="information-div">
            <h2>Basic information</h2>
            <form class="row" action="{{ route('admin.SubmitTenant') }}" method="POST" enctype="multipart/form-data" >
                @csrf
                @method('post')
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <h1>Full Name:</h1>
                </div>
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <input class="form-control" type="text" name="name" id="" required>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <h1>Email:</h1>
                </div>
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <input class="form-control" type="text" name="email" id="" required>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <h1>Password:</h1>
                </div>
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <input class="form-control" type="text" name="password" id="" required>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <h1>Age:</h1>
                </div>
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <input class="form-control" type="text" name="age" id="" required>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <h1>Unit Number:</h1>
                </div>
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <select class="form-control" name="unit" id="" required>
                        <option value="3F1" selected>3F1</option>
                    </select>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <h1>Tenant Since:</h1>
                </div>
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <input class="form-control" type="date" name="since" id="" required>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <h1>Image:</h1>
                </div>
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <input class="form-control" type="file" name="image" id="" required>
                </div>
                <div class="text-center">
                    <button type="submit" name="submit" class="back-button">SUBMIT</button>
                 </div>
                 @if (session('success'))
                    <div class="alert compute-alert" role="alert">*{{ session('success') }} </div>
                @endif
                @if (session('error'))
                    <div class="alert compute-alert text-red-950" role="alert">*{{ session('error') }}
                    </div>
                @endif
            </form>
        </div>
  </div>
@endsection
