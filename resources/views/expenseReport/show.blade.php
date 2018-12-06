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

    </row>
@endsection
