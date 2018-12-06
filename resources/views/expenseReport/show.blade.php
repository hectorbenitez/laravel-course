@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>Expense Report {{ $report->id }}: {{ $report->title }}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a href="/expense_reports" class="btn btn-primary">Back</a>
        </div>
    </div>
    <row>
        <div class="col">
            <h2>Expenses</h2>
            <table class="table">
                <tr>
                    <th>Description</th>
                    <th>Amount</th>
                    <th>Date</th>
                </tr>
                @foreach($report->expenses as $expense)
                    <tr>
                        <td>{{ $expense->description }}</td>
                        <td>{{ $expense->amount }}</td>
                        <td>{{ $expense->created_at }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </row>
@endsection
