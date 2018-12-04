@extends('layouts.base')

@section('content')
    <table class="table">
        <tr>
            <th>Title</th>
        </tr>
        @foreach($expenseReports as $expenseReport)
            <tr>
                <td>{{ $expenseReport->title }}</td>
            </tr>
        @endforeach
    </table>
@endsection
