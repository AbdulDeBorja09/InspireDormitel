@extends('user.layout.app')
@section('content')
    <div class="profile container">
        <div class="top">
            <ion-icon name="stats-chart" ></ion-icon>
            <h1><a href="{{url('/')}}" >Home</a><span>></span> Transaction</h1>
        </div>
        <div class="transaction-div">
            <h1>Transactions</h1>
            
            <div class="table-container">
                <table class="table w-100">
                    <thead>
                        <tr>
                            <th>Recipt No.</th>
                            <th>Month</th>
                            <th>Amount</th>
                            <th colspan="2">Date Paid</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($bill as $item)
                        <tr>
                            <td>ID-{{$item->receipt}}</td>
                            <td>{{$item->bmonth}}</td>
                            <td>{{$item->total}}.00</td>
                            <td>{{$item->paid}}</td>
                            <td>
                                <a type="submit" href="history/{{$item->id}}"><ion-icon name="eye"></ion-icon></a>
                            </td>
                        </tr>
    
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection
