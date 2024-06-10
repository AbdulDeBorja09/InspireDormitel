@extends('admin.layout.app')
@section('content')
  <div class="addtenants container" style="background-color: #fcfcfc">
        <div style="height: 70px"></div>
        <div class="top">
            <ion-icon name="person" ></ion-icon>
            <h1><a href="{{url('/admin/home')}}" >Home</a><span>></span> <a href="{{url('/admin/tenants')}}" >Tenats</a><span>></span>Add Tenants</h1>
        </div>
        <div class="information-div">
            <h2>Basic information</h2>
            <form class="row" method="POST" enctype="multipart/form-data">
                @csrf
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
                    <input class="form-control" type="text" name="name" id="" required>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <h1>Password:</h1>
                </div>
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <input class="form-control" type="text" name="name" id="" required>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <h1>Age:</h1>
                </div>
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <input class="form-control" type="text" name="name" id="" required>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <h1>Unit Number:</h1>
                </div>
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <select class="form-control" name="" id="">
                
                    </select>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <h1>Tenant Since:</h1>
                </div>
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <input class="form-control" type="date" name="name" id="" required>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <h1>Image:</h1>
                </div>
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <input class="form-control" type="file" name="name" id="" required>
                </div>
                <div class="text-center">
                    <button type="submit" class="back-button">SUBMIT</button>
                 </div>
            </form>
        </div>
  </div>
@endsection
