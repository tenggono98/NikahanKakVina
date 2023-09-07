<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MTamu extends Model
{
    use HasFactory;

    public function getNextId() {
        $statement = DB::select("show table status like 'users'");
        return $statement[0]->Auto_increment;
    }
}
