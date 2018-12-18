<div class="row">
    <div class="col">
        <h1>Expense Report {{ $report->id }}: {{ $report->title }}</h1>
    </div>
</div>
<div class="row">
    <div class="col">
        <h2>Expenses</h2>
        <table class="table">
            @foreach($report->expenses as $expense)
                <tr>
                    <td>{{ $expense->description }}</td>
                    <td>{{ $expense->created_at }}</td>
                    <td>{{ $expense->amount }}</td>
                    <td></td>
                </tr>
            @endforeach
        </table>
    </div>
</div>