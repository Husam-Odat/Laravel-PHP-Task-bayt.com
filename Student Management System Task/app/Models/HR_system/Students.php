<?php

namespace App\Models\HR_system;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
        'username',
        'email',
        'date_of_birth',
        'gender',
        'phone',
    ];

    public function Marks()
    {
        return $this->hasMany(marks::class);
    }
    public function Vacation()
    {
        return $this->hasMany(Vacations::class);
    }
    public function Attendance()
    {
        return $this->hasMany(Attendance::class);
    }
}
