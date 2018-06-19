<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
     protected $fillable = ['name','fname','fees','phone','locker','category','date','gender'];

     /**
     * @return mixed
     */
    public static function getCustomers()
    {
        return static::latest();
    }

    /**
     * @param int $id
     * @return Customer
     */
    public static function getCustomer(int $id): Customer
    {
        return static::where('id', $id)->firstOrFail();
    }
}
