@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Expense Reports</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <a href="/expense_reports/create" class="btn btn-primary">New expense report...</a>
                <br><br>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <tr>
                        <th>Title</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    @foreach($expenseReports as $expenseReport)
                        <tr>
                            <td><a href="/expense_reports/{{ $expenseReport->id }}">{{ $expenseReport->title }}</a></td>
                            <td><a href="/expense_reports/{{ $expenseReport->id }}/edit">Edit</a></td>
                            <td><a href="/expense_reports/{{ $expenseReport->id }}/confirmDelete">Delete</a></td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
