@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>New Expense Reports</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a href="/expense_reports" class="btn btn-primary">Back</a>
        </div>
    </div>
    <row>
        <div class="col">
            <form action="/expense_reports/{{ $report->id }}" method="POST">
                {{ method_field('PATCH') }}
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter title" value="{{ $report->title }}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </row>
@endsection
