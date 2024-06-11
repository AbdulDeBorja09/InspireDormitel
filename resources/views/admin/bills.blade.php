@extends('admin.layout.app')
@section('content')
  <div class="addtenants container" style="background-color: #fcfcfc">
        <div style="height: 70px"></div>
        <div class="top">
            <ion-icon name="receipt" ></ion-icon>
            <h1><a href="{{url('/admin/home')}}" >Home</a><span>></span> Bills</h1>
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
                    <a class="btn" href="/admin/bills/{{$item->user_id}}">Add Bill</a>
                </div>
           </div>
            
        @endforeach
        
  </div>
@endsection
