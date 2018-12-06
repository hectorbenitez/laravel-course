@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Expense Report {{ $report->id }}: {{ $report->title }}</h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <a href="/expense_reports" class="btn btn-secondary">Back</a>
                <br><br>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <a href="/expense_reports/{{ $report->id }}/confirmSendMail" class="btn btn-info">Send via email</a>
                <br><br>
            </div>
        </div>
        <div class="row">
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
        </div>
        <div class="row">
            <div class="col">
                <a href="/expense_reports/{{ $report->id }}/expenses/create" class="btn btn-info">Add expense</a>
            </div>
        </div>
    </div>
@endsection
