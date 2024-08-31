<?php

namespace App\Models\HR_system;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class marks extends Model
{
    use HasFactory;
    protected $fillable = [
        'student_id',
        'exam_id',
        'marks_amount',
        'marks_start_date',
        'marks_end_date',
    ];
    public function exam()
    {
        return $this->belongsTo(exams::class, 'exam_id');
    }
    public function student()
    {
        return $this->belongsTo(Students::class, 'student_id');
    }
}
