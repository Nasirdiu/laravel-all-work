@extends('dashboard')
@section('content')
    <div style="text-align: center; margin-left: 350px">
        <div class="d-grid mx-auto" style="margin-bottom: 50px" >
            <a href="{{url('dateIncome')}}" class="btn btn-primary btn-block w-50">Income Filter By Date</a>
        </div>

        <div class="d-grid mx-auto" style="margin-bottom: 50px" >
            <a href="{{url('amountIncomeAsc')}}" style="margin-bottom: 20px" class="btn btn-dark btn-danger w-50">Income Filter By Asc Amount</a>
            <a href="{{url('amountIncomeDsc')}}" class="btn btn-dark btn-dark w-50">Income Filter By Dsc Amount</a>
        </div>

        <div class="d-grid mx-auto" style="margin-bottom: 60px" >
            <a href="{{url('filterIncomeCat')}}" class="btn btn-warning btn-block w-50">Income Filter By Category</a>
        </div>
    </div>
@endsection
