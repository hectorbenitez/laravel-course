@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>Expense Reports</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a href="/expense_reports/create" class="btn btn-primary">New expense report...</a>
        </div>
    </div>
    <row>
        <div class="col">
            <table class="table">
                <tr>
                    <th>Title</th>
                </tr>
                @foreach($expenseReports as $expenseReport)
                    <tr>
                        <td>{{ $expenseReport->title }}</td>
                        <td><a href="/expense_reports/{{ $expenseReport->id }}/edit">Edit</a></td>
                        <td><a href="/expense_reports/{{ $expenseReport->id }}/confirmDelete">Delete</a></td>
                    </tr>
                @endforeach
            </table>
        </div>
    </row>
@endsection
