<?php

namespace App\Models\HR_system;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class exams extends Model
{
    use HasFactory;
    protected $fillable = [
        'exam_title',
        'exam_desc',
        'marks',
        'marks_start_date',
        'marks_end_date',
    ];

    public function Marks()
    {
        return $this->hasMany(marks::class);
    }
}
