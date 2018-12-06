@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>Send mail for Expense Reports</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a href="/expense_reports/{{ $report->id }}" class="btn btn-primary">Back</a>
        </div>
    </div>
    <row>
        <div class="col">
            @if($errors->any())
                <div class="alert alert-danger" role="alert">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="/expense_reports/{{ $report->id }}/sendMail" method="POST">
                @csrf
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required value="{{ old('email') }}">
                </div>
                <button type="submit" class="btn btn-primary">Send</button>
            </form>
        </div>
    </row>
@endsection
