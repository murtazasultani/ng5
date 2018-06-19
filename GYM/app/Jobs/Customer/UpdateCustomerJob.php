<?php

namespace App\Jobs\Customer;

use App\Customer;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use App\Http\Requests\CustomerRequest;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class UpdateCustomerJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @param $request
     */
    public function __construct(Customer $customer, $request)
    {
        $this->customer = $customer;
        $this->request = $request;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $this->customer->update([
            'name' => $this->request->name,
            'fname' => $this->request->fname,
            'fees' => $this->request->fees,
            'phone' => $this->request->phone,
            'locker' => $this->request->locker,
            'category' => $this->request->category,
            'date' => $this->request->date,
            'gender' => $this->request->gender,
        ]);
        return $this->customer;
    }
}
