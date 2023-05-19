<?php

namespace Database\Seeders;

use App\Models\Subject;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $core = [
            'English Language',
            'Integrated Science',
            'Mathematics',
            'Social Studies'
        ];
        $electives = [
            'Chemistry',
            'Physics',
            'Elective Mathematics',
            'Elective ICT',
            'Biology',
            'Geography',
            'English Literature',
            'Economics',
            'History',
            'Government',
            'Religious Studies',
            'French',
            'Financial Accounting',
            'Cost Accounting',

            'Food & Nutrition',
            'Arts',
            'Textiles',
            'Management in Living',
            'Graphic Design',
            'Basketry',
            'Leatherwork',
            'Sculpture',
            'Ceramics',
            'General Agriculture',
            'Animal Husbandry',
            'Building Construction',
            'Engineering',
            'Woodwork'
        ];
        sort($core);
        foreach ($core as $item) {
            Subject::query()->create([
                'name' => $item,
                'type' => 'core'
            ]);
        }

        sort($electives);
        foreach ($electives as $item) {
            Subject::query()->create([
                'name' => $item,
                'type' => 'elective'
            ]);
        }
    }
}
