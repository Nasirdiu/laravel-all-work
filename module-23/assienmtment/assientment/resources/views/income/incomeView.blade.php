@extends('dashboard')
@section('content')
    <main class="login-form">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <h3 class="card-header text-center">View Income</h3>
                        <div class="card-body">
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                <tr>
                                    <th>Amount</th>
                                    <th>Description</th>
                                    <th>Date</th>
                                    <th>Category</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $data)
                                <tr>
                                    <td>{{$data->amount}}</td>
                                    <td>{{$data->description}}</td>
                                    <td>{{$data->date}}</td>
                                    <td>{{$data->category}}</td>
                                    <td><a href="{{url('editIncome',$data->id)}}" class="btn btn-primary">Edit</a>
                                        <a href="{{url('deleteIncome',$data->id)}}" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                @endforeach

                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Total Amount = {{$sum}}</th>
                                    <th>Total Count = {{$count}}</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                </tfoot>
                            </table>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
<script>

</script>
