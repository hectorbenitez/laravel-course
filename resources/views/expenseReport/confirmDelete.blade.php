@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Delete Expense Report {{ $report->id }}</h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <form action="/expense_reports/{{ $report->id }}" method="POST">
                    {{ method_field('DELETE') }}
                    @csrf
                    <button type="submit" class="btn btn-danger">Delete</button>
                    <a href="/expense_reports" class="btn btn-secondary">Back</a>
                </form>
            </div>
        </div>
    </div>
@endsection
