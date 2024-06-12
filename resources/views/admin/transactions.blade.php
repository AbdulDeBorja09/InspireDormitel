@extends('admin.layout.app')
@section('content')
  <div class="tenants container" style="background-color: #fcfcfc">
        <div style="height: 70px"></div>
        <div class="top">
            <ion-icon name="stats-chart" ></ion-icon>
            <h1><a href="{{url('/admin/home')}}" >Home</a><span>></span> Transactions</h1>
        </div>
        <div class="transaction-div">
            <h1>Transactions</h1>
            
            <div class="table-container">
                <table class="table w-100">
                    <thead>
                        <tr>
                            <th>Recipt No.</th>
                            <th>Name</th>
                            <th>Month</th>
                            <th>Status</th>
                            <th colspan="2">Created Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($bills as $item)
                        <tr>
                            <td>ID-{{$item->receipt}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->month}}</td>
                            <td>{{$item->status}}</td>
                            <td style="width: 200px;">{{$item->receiptdate}}</td>
                            <td class="d-flex">
                                <a type="submit" href="bills/edit/{{$item->id}}"><ion-icon name="eye"></ion-icon></a>
                                <button class="btn" onclick="event.preventDefault(); document.getElementById('delete').submit()">Delete</button>
                                <form action="{{route('admin.deleteBills')}}" id="delete" method="POST">
                                    @csrf
                                    @method('POST')
                                    <input type="hidden" name="user_id" value="{{$item->user_id}}">
                                  </form>
                            </td>
                        </tr>
    
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
  </div>
@endsection

        