@extends('dashboard')
@section('content')
    <main class="login-form">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card">
                        <h3 class="card-header text-center">Filter By Date</h3>
                        <div class="card-body">
                            <form method="POST" action="{{url('filterByDateIncome')}}">
                                @csrf
                                <div class="form-group mb-3">
                                    <input type="date"  class="form-control" name="start_date" required>
                                </div>
                                <div class="form-group mb-3">
                                    <input type="date"  class="form-control" name="end_date" required>
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
