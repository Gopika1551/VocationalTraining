<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    public function run(): void
    {
        Student::query()->updateOrCreate(
            ['national_id' => '1234567890'],
            [
                'name' => 'Ahmed Hassan',
                'otp' => '1234',
            ]
        );
    }
}
