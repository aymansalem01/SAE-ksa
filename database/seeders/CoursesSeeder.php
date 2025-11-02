<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $diploma = Category::create([
            'name' => 'دبلومة (1-2 سنة)',
            'name_en' => 'Diploma (1-2 years)',
        ]);
        $short = Category::create([
            'name' => 'الدورات القصيرة',
            'name_en' => 'Short Course',
        ]);
        Course::create([
            'name' => 'هندسة الصوت',
            'name_en' => 'Audio Engineering',
            'category_id' => $diploma->id,
        ]);
        Course::create([
            'name' => 'صناعة الأفلام',
            'name_en' => ' Filmmaking',
            'category_id' => $diploma->id,
        ]);
        Course::create([
            'name' => 'الوسائط الرقمية',
            'name_en' => 'Digital Media',
            'category_id' => $diploma->id,
        ]);
        Course::create([
            'name' => 'المؤثرات البصرية',
            'name_en' => 'Visual Effects',
            'category_id' => $diploma->id,
        ]);
        Course::create([
            'name' => 'تصميم وتطوير الألعاب',
            'name_en' => 'Game Design and Development',
            'category_id' => $short->id,
        ]);
    }
    }

