@extends('admin.layout.app')
@section('content')
  <div class="tenants container" style="background-color: #fcfcfc">
        <div style="height: 70px"></div>
        <div class="top">
            <ion-icon name="person" ></ion-icon>
            <h1><a href="{{url('/admin/home')}}" >Home</a><span>></span> Tenants</h1>
        </div>
       
  </div>
@endsection
