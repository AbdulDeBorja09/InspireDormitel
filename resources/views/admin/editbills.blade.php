
@extends('admin.layout.app')
@section('content')
<div class="addtenants container" style="background-color: #fcfcfc">
    <div style="height: 70px"></div>
    <div class="top">
        <ion-icon name="stats-chart"></ion-icon>
        <h1><a href="{{ url('/admin/home') }}">Home</a><span>></span> <a href="{{ url('/admin/bills') }}">Bills</a><span>></span> Edit Bill</h1>
    </div>
    @foreach ($tenant as $item)
    <div class="profile-div">
        <div class="image">
            <img src="{{ Storage::url($customer->image) }}" alt="">
        </div>
        <div class="biography">
            <h1>{{ $customer->name }}</h1>
            <h2>{{ $customer->email }}</h2>
            <h2>{{ $customer->formatted_since }}</h2>
        </div>
    </div>
    <div class="container p-4">
        <div class="text-center">
            <h1 style="font-weight: 700">Edit BILL</h1>
        </div>
        <form class="row add-bills p-3" action="{{ route('admin.UpdateBills') }}" method="POST">
            @csrf
            @method('POST')
            <input type="hidden" name="user_id" id="" value="{{ $item->user_id }}">
            <div class="col-lg-6 col-md-12 col-sm-12 text-center">
                <h3>BILLS</h3>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 text-center">
                <h3>AMOUNT</h3>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <h3>RENT: </h3>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <input class="form-control rent" type="number" name="rent" id="rent" required value="{{$item->rent}}">
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <h3>WATER: </h3>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <input class="form-control water" type="number" name="water" id="water" required value="{{$item->water}}">
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <h3>INTERNET: </h3>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <input class="form-control internet" type="number" name="internet" id="internet" required value="{{$item->internet}}">
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <h3>ELECTRICITY: </h3>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <input class="form-control electricity" type="number" name="electricity" id="electricity" required value="{{$item->electricity}}">
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <h3>DUE DATE: </h3>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <input class="form-control" type="date" name="due" id="due" required value="{{$item->due}}">
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <h3>MONTH: </h3>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <select name="month" class="form-control" required style="text-transform: capitalize">
                    <option value="{{$item->month}}">Select Month</option>
                    <option value="01">january</option>
                    <option value="02">february</option>
                    <option value="03">march</option>
                    <option value="04">april</option>
                    <option value="05">may</option>
                    <option value="06">june</option>
                    <option value="07">july</option>
                    <option value="08">august</option>
                    <option value="09">september</option>
                    <option value="10">october</option>
                    <option value="11">november</option>
                    <option value="12">december</option>
                </select>
            </div>
            <hr>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <h3>TOTAL: </h3>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <h3 id="total">: {{$item->total}}.00</h3>
            </div>
            <div class="text-center p-5">
                <button class="btn w-50 btn-success" type="submit">SUBMIT</button>
            </div>
        </form>
        <div class="status-change-div d-flex ">
            <form action="{{route('admin.paid')}}" method="POST">
                @csrf
                @method('POST')
                <input type="hidden" name="id" value="{{$item->id}}">
                <button class="status-btn btn" type="submit">PAID</button>
            </form>

            <form action="{{route('admin.pending')}}" method="POST">
                @csrf
                @method('POST')
                <input type="hidden" name="id" value="{{$item->id}}">
                <button class="status-btn btn" type="submit">PENDING</button>
            </form>
        </div>
    </div>
    @endforeach
</div>
@endsection

