@extends('user.layout.app')
@section('content')
    <div class="profile container">
        <div class="top">
            <ion-icon name="person" ></ion-icon>
            <h1><a href="{{url('/')}}" >Home</a><span>></span> Bill</h1>
        </div>
        <div class="billsimg text-center">
            <img src="{{url('/image/Nulogo.svg')}}" width="70px">
            <img src="{{url('/image/inspire.png')}}" width="100px">
        </div>
        @foreach ($bill as $item)
        <section class="bills-div">
            <div class="bills-flex " >
                <div class="sub-div1 d-flex">
                    <div class="left">
                        <h1>RECEipt NO: </h1>
                        <h1>RECEipt DATE: </h1>
                        <h1>DUE DATE: </h1>
                    </div>
                    <div class="right">
                        <h1>ID-{{$item->receipt}}</h1>
                        <h1>{{$item->receiptdate}}</h1>
                        <h1>{{$item->due}}</h1>
                    </div>
                </div>
                <div class="sub-div2">
                    <h2>National University - Laguna</h2>
                    <p>Km. 53, Pan Philippine Highway, Brgy. Milagrosa, Calamba City, Laguna 4027</p>
                </div>
            </div>
            <div class="bils-info">
                <h2>Month: {{$item->month}}</h2>
                <h1>Name: {{$customer->name}} </h1>
                <h1>Unit: {{$customer->unit}}</h1>
            </div>
            <div class="total-bills-div d-flex">
                <table class="total-table table w-100">
                    <tr>
                        <th>BILLS</th>
                        <th>AMOUNT</th>
                    </tr>
                    <tr>
                        <td>RENT</td>
                        <td>{{$item->rent}}</td>
                    </tr>
                    <tr>
                        <td>WATER</td>
                        <td>{{$item->water}}</td>
                    </tr>
                    <tr>
                        <td>INTERNET</td>
                        <td>{{$item->internet}}</td>
                    </tr>
                    <tr>
                        <td>ELECTRICITY</td>
                        <td>{{$item->electricity}}</td>
                    </tr>
                    <tr>
                        <th>TOTAL</th>
                        <th>{{$item->total}}</th>
                    </tr>
                </table>
                <div class="terms w-100" style="margin-bottom: 150px ">
                    <form action="">
                       <div class="text-center w-100">
                          <button class="text-center btn-dark" disabled>PAID</button>
                       </div>
                    </form>
                </div>
            </div>
        </section>
        @endforeach
    </div>
@endsection
