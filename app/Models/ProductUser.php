<?php

namespace App\Models;

use Database\Factories\ProductUserFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductUser extends Model
{
    use HasFactory;

    protected $table = 'products_users';
}
