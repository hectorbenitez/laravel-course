@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>Delete Expense Report {{ $report->id }}</h1>
        </div>
    </div>
    <row>
        <div class="col">
            <form action="/expense_reports/{{ $report->id }}" method="POST">
                {{ method_field('DELETE') }}
                @csrf
                <button type="submit" class="btn btn-primary">Delete</button>
                <a href="/expense_reports" class="btn btn-secondary">Back</a>
            </form>
        </div>
    </row>
@endsection
