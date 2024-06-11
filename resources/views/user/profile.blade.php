@extends('user.layout.app')
@section('content')
    <div class="profile container">
        <div class="top">
            <ion-icon name="person" ></ion-icon>
            <h1><a href="{{url('/')}}" >Home</a><span>></span> Profile</h1>
        </div>
        @foreach ($profile as $item)
        <div class="profile-div">
            <div class="image">
                <img src="{{ Storage::url($item->image) }}" alt="">
            </div>
            <div class="biography">
                <h1>{{$item->name}}</h1>
                <h2>{{$item->email}}</h2>
                <h2>{{$item->formatted_since }}</h2>
            </div>
        </div>
        <div class="information-div">
            <h2>Basic information</h2>
            <div class="row" >
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <h1>Full Name:</h1>
                </div>
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <p>{{$item->name}}</p>
                </div>

                <div class="col-lg-5 col-md-6 col-sm-12">
                    <h1>Email:</h1>
                </div>
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <p>{{$item->email}}</p>
                </div>

                <div class="col-lg-5 col-md-6 col-sm-12">
                    <h1>Age:</h1>
                </div>
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <p>{{$item->age}}</p>
                </div>

                <div class="col-lg-5 col-md-6 col-sm-12">
                    <h1>Unit Number:</h1>
                </div>
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <p>{{$item->unit}}</p>
                </div>

                <div class="col-lg-5 col-md-6 col-sm-12">
                    <h1>Tenant Since:</h1>
                </div>
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <p>{{$item->formatted_since }}</p>
                </div>
                
            </div>
        </div>
        @endforeach
        <div class="text-center">
           <button onclick="history.back()" class="back-button"><< BACK</button>
        </div>
    </div>
@endsection
