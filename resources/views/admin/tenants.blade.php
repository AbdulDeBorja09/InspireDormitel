@extends('admin.layout.app')
@section('content')
  <div class="tenants container" style="background-color: #fcfcfc">
        <div style="height: 70px"></div>
        <div class="top">
            <ion-icon name="person" ></ion-icon>
            <h1><a href="{{url('/admin/home')}}" >Home</a><span>></span> Tenants</h1>
        </div>
        <div class="add">
          <a href="{{url('/admin/tenants/add')}}">Add Tenants</a>
        </div>
        @foreach ($tenants as $item)
           <div class="customers-div row">
               <div class="col-lg-2 col-md-2 col-sm-12 text-center">
                    <img src="{{ Storage::url($item->image) }}" alt="">  
               </div>
               <div class="col-lg-7 col-md-7 col-sm-12">
                    <h1>{{$item->name}}</h1>
                    <h2>{{$item->unit}}</h2>
                </div>

                <div class="button col-lg-3 col-md-3 col-sm-12 text-center">
                    <a class="btn" href="/admin/tenants/{{$item->user_id}}">Edit Tenant</a>
                    <button class="btn" onclick="event.preventDefault(); document.getElementById('delete').submit()">Delete</button>

                </div>
                <form action="{{route('admin.deleteTenant')}}" id="delete" method="POST">
                  @csrf
                  @method('POST')
                  <input type="hidden" name="user_id" value="{{$item->user_id}}">
                </form>
           </div>
            
        @endforeach
  </div>
@endsection
