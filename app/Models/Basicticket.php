<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Basicattachment;

class Basicticket extends Model
{
    use HasFactory;

    public function basicattachments()
    {
        return $this->hasMany(Basicattachment::class);
    }
}
