<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TPS3RModel extends Model
{
    use HasFactory;
    protected $table = 'tps3r';

    protected $fillable = [
        "tps3r_name",
        "phone_number",
        "daily_open",
        "number_of_employees"
    ];
}
