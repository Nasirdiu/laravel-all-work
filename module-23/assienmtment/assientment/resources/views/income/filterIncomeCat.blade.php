@extends('dashboard')
@section('content')
    <main class="login-form">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card">
                        <h3 class="card-header text-center">Income Filter By Category</h3>
                        <div class="card-body">
                            <form method="POST" action="{{url('incomeFilterByCat')}}">
                                @csrf
                                <div class="form-group mb-3">
                                    <select class="form-control" name="category" >
                                        <option disabled >-Select Category--</option>
                                        <option value="DailyIncome">Daily Income</option>
                                        <option value="MonthlyIncome">Monthly Income</option>
                                        <option value="YearlyIncome">Yearly Income</option>
                                    </select>
                                </div>

                                <div class="d-grid mx-auto">
                                    <button type="submit" class="btn btn-dark btn-block">Search</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
