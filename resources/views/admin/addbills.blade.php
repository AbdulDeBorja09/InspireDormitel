
@extends('admin.layout.app')
@section('content')
<div class="addtenants container" style="background-color: #fcfcfc">
    <div style="height: 70px"></div>
    <div class="top">
        <ion-icon name="receipt"></ion-icon>
        <h1><a href="{{ url('/admin/home') }}">Home</a><span>></span> <a href="{{ url('/admin/bills') }}">Bills</a><span>></span> Add Bill</h1>
    </div>
    @foreach ($tenant as $item)
    <div class="profile-div">
        <div class="image">
            <img src="{{ Storage::url($item->image) }}" alt="">
        </div>
        <div class="biography">
            <h1>{{ $item->name }}</h1>
            <h2>{{ $item->email }}</h2>
            <h2>{{ $item->formatted_since }}</h2>
        </div>
    </div>
    <div class="container p-4">
        <div class="text-center">
            <h1 style="font-weight: 700">ADD BILL</h1>
        </div>
        <form class="row add-bills p-3" action="{{ route('admin.SubmitBills') }}" method="POST">
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
                <input class="form-control rent" type="number" name="rent" id="rent" required>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <h3>WATER: </h3>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <input class="form-control water" type="number" name="water" id="water" required>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <h3>INTERNET: </h3>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <input class="form-control internet" type="number" name="internet" id="internet" required>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <h3>ELECTRICITY: </h3>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <input class="form-control electricity" type="number" name="electricity" id="electricity" required>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <h3>DUE DATE: </h3>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <input class="form-control" type="date" name="due" id="due" required>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <h3>MONTH: </h3>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <select name="month" class="form-control" required style="text-transform: capitalize">
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
                <h3 id="total">: 0.00</h3>
            </div>
            <div class="text-center p-5">
                <button class="btn" type="submit">SUBMIT</button>
            </div>
        </form>
    </div>
    @endforeach
</div>
@endsection

@section('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        console.log("DOM fully loaded and parsed");
        function calculateTotal() {
    const rents = document.querySelectorAll('.rent');
    const waters = document.querySelectorAll('.water');
    const internets = document.querySelectorAll('.internet');
    const electricities = document.querySelectorAll('.electricity');
    let total = 0;

    rents.forEach(rent => {
        total += parseFloat(rent.value) || 0;
    });

    waters.forEach(water => {
        total += parseFloat(water.value) || 0;
    });

    internets.forEach(internet => {
        total += parseFloat(internet.value) || 0;
    });

    electricities.forEach(electricity => {
        total += parseFloat(electricity.value) || 0;
    });

    document.getElementById('total').innerText = ': ' + total.toFixed(2);
    console.log("Total: ", total);
    }

    document.querySelectorAll('.rent, .water, .internet, .electricity').forEach(input => {
        input.addEventListener('input', calculateTotal);
    });

    });
</script>
@endsection
