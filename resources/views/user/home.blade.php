@extends('user.layout.app')
@section('content')
    <div class="homepage" style="background-color: #fcfcfc">
      <h1 class="greetings">Good day <span class="user">{{ Auth::user()->name }}</span>,  welcome to your dashboard!</h1>
      <div class="container">
        <div class="top">
          <ion-icon name="home"></ion-icon>
          <h1>Home</h1>
        </div>
        <div class="homemenu-row ">
          <a class="homemenu-box shadow-sm d-flex" href="{{url('profile')}}">
            <ion-icon class="profile-icon" name="person"></ion-icon>
            <div class="description ">
              <h6><ion-icon name="folder-outline"></ion-icon> Profile</h6>
              <p>A brief summary of you. Including your name, photo, and address. You can edit your login credentials here. </p>
            </div>
          </a>
          <a class="homemenu-box shadow-sm d-flex"  href="{{url('bill')}}" >
            <ion-icon class="profile-icon" name="receipt"></ion-icon>
            <div class="description ">
              <h6><ion-icon name="folder-outline"></ion-icon> Bill</h6>
              <p>A place where your bill will show. Including your water bill, electric bill, rent bill, and internet bill.</p>
            </div>
          </a>
          <a class="homemenu-box shadow-sm d-flex" href="{{url('transaction')}}">
            <ion-icon class="profile-icon" name="stats-chart" style="font-size: 40px; margin-top: -7px"></ion-icon>
            <div class="description ">
              <h6><ion-icon name="folder-outline"></ion-icon> Transactions</h6>
              <p>Stores and tracks all tenant payment information.</p>
            </div>
          </a>
    </div>
@endsection
