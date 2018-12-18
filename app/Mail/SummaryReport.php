<?php

namespace App\Mail;

use App\ExpenseReport;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SummaryReport extends Mailable
{
    use Queueable, SerializesModels;

    private $expenseReport;

    /**
     * Create a new message instance.
     *
     * @param ExpenseReport $expenseReport
     */
    public function __construct(ExpenseReport $expenseReport)
    {
         $this->expenseReport = $expenseReport;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.expenseReport', [
            'report' => $this->expenseReport
        ]);
    }
}
