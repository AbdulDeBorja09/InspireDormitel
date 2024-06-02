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
        <section class="bills-div">
            <div class="bills-flex " >
                <div class="sub-div1 d-flex">
                    <div class="left">
                        <h1>RECIPEt NO: </h1>
                        <h1>RECIPEt DATE: </h1>
                        <h1>DUE DATE: </h1>
                    </div>
                    <div class="right">
                        <h1>ID-12312312</h1>
                        <h1>06/12/24</h1>
                        <h1>06/12/24</h1>
                    </div>
                </div>
                <div class="sub-div2">
                    <h2>National University - Laguna</h2>
                    <p>Km. 53, Pan Philippine Highway, Brgy. Milagrosa, Calamba City, Laguna 4027</p>
                </div>
            </div>
            <div class="bils-info">
                <h2>Month: Janauary</h2>
                <h1>Name: Juan Miguel</h1>
                <h1>Unit: 3f1</h1>
            </div>
            <div class="total-bills-div d-flex">
                <table class="total-table table">
                    <tr>
                        <th>BILLS</th>
                        <th>AMOUNT</th>
                    </tr>
                    <tr>
                        <td>RENT</td>
                        <td>50000</td>
                    </tr>
                    <tr>
                        <td>WATER</td>
                        <td>50000</td>
                    </tr>
                    <tr>
                        <td>INTERNET</td>
                        <td>50000</td>
                    </tr>
                    <tr>
                        <td>ELECTRICITY</td>
                        <td>50000</td>
                    </tr>
                </table>
                <div class="terms ">
                    <form action="">
                        <p>I hereby confirm that I have thoroughly reviewed all the bills presented to me. I have carefully examined each item and found them to be accurate and satisfactory. I have no concerns or objections regarding any of the bills. Therefore, I approve these bills for printing.</p>
                        <input id="check" type="checkbox" required>
                        <label for="check">Confrim</label>
                       <div class="text-center">
                        <button class="text-center">PRINT</button>
                       </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection
