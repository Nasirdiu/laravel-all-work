@extends('dashboard')
@section('content')
    <div style="text-align: center; margin-left: 350px">
        <div class="d-grid mx-auto" style="margin-bottom: 50px" >
            <a href="{{url('addIncome')}}" class="btn btn-primary btn-block w-50">Add Income</a>
        </div>

        <div class="d-grid mx-auto" style="margin-bottom: 50px" >
            <a href="{{url('incomeView')}}" class="btn btn-danger btn-block w-50">View Income</a>
        </div>

        <div class="d-grid mx-auto" >
            <a href="{{url('filterIncome')}}" class="btn btn-dark btn-block w-50">Filter Income</a>
        </div>
    </div>
@endsection
