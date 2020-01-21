<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Auth\AuthenticationException;
// use Illuminate\Contracts\Auth\Factory as Customer;

class Pelanggan extends Model
{
    // protected $customer;

    // public function __construct(Customer $customer)
    // {
    //     $this->customer = $customer;
    // }
    
    protected $timestamp = true;

    protected $table = 'pelanggan';

    protected  $fillable = ['nama_pelanggan','email_pelanggan','password_pelanggan','telpon_pelanggan','alamat_pelanggan'];

    protected $hidden = ['password_pelanggan'];

    // protected $guard = 'customer';


}
