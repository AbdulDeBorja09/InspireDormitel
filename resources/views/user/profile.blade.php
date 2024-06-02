@extends('user.layout.app')
@section('content')
    <div class="profile container">
        <div class="top">
            <ion-icon name="person" ></ion-icon>
            <h1><a href="{{url('/')}}" >Home</a><span>></span> Profile</h1>
        </div>
        <div class="profile-div">
            <div class="image">
                <img src="{{url('/image/profile.jpg')}}" alt="">
            </div>
            <div class="biography">
                <h1>Dela Cruz, Juan Miguel</h1>
                <h2>08121 Purok 4 dila bay laguna </h2>
                <h2>Juanmiguel@gmail.com</h2>
            </div>
        </div>
        <div class="information-div">
            <h2>Basic information</h2>
            <div class="row" >
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <h1>Full Name:</h1>
                </div>
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <p>Juan Dela Cruz</p>
                </div>

                <div class="col-lg-5 col-md-6 col-sm-12">
                    <h1>Email:</h1>
                </div>
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <p>Juanmiguel@gmail.com</p>
                </div>

                <div class="col-lg-5 col-md-6 col-sm-12">
                    <h1>Age:</h1>
                </div>
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <p>20</p>
                </div>

                <div class="col-lg-5 col-md-6 col-sm-12">
                    <h1>Floor Number:</h1>
                </div>
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <p>3rd Floor</p>
                </div>

                <div class="col-lg-5 col-md-6 col-sm-12">
                    <h1>Unit Number:</h1>
                </div>
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <p>3F1</p>
                </div>

                <div class="col-lg-5 col-md-6 col-sm-12">
                    <h1>Tenant Since:</h1>
                </div>
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <p>June 20, 2023</p>
                </div>
                
            </div>
        </div>
        <div class="text-center">
           <button onclick="history.back()" class="back-button"><< BACK</button>
        </div>
    </div>
@endsection
