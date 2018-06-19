<?php

namespace App\Jobs\Customer;

use App\Customer;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use App\Http\Requests\CustomerRequest;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Auth;

class CreateCustomerJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @param $request
     */
    public function __construct($request)
    {
        $this->request = $request;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $customer = Customer::create([
            'name' => $this->request->name,
            'fname' => $this->request->fname,
            'fees' => $this->request->fees,
            'phone' => $this->request->phone,
            'locker' => $this->request->locker,
            'category' => $this->request->category,
            'date' => $this->request->date,
            'gender' => $this->request->gender,
        ]);
    }
}
