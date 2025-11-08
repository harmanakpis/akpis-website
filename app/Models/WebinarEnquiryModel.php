<?php

namespace App\Models;

use CodeIgniter\Model;

class WebinarEnquiryModel extends Model
{
    protected $table = 'webinar_enquiries'; // Table name
    protected $primaryKey = 'id';

    protected $useTimestamps = true; // Auto handle created_at & updated_at
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    // Fields allowed for insert/update
    protected $allowedFields = [
        'course_id',
        'name',
        'email',
        'contact',
        'qualification',
        'work_experience',
        'pursuing_course',
        'salary',
        'placement_assistance',
        'state_id',
        'cityname',
        'preferred_time',
        'comment'
    ];

        public function getEnquiriesWithCourse()
    {
        return $this->select('webinar_enquiries.*, akpiscourses.title as course_name')
                    ->join('akpiscourses', 'akpiscourses.id = webinar_enquiries.course_id', 'left')
                    ->findAll();
    }
}
