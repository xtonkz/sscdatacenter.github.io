<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class afi extends Model
{
    use HasFactory;

    public $table = 'afi';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'cust_name',
        'cust_address',
        'cust_address2',
        'chasis',
        'branch',
        'jenis_chasis',
        'modem_date',
        'faktur_turun'
    ];
}
