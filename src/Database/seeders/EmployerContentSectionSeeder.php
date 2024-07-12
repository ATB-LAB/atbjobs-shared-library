<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class EmployerContentSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contentSections = [
            [
                
                "title" => "Company Overview"
                
            ],
            [
                
                "title" => "What We Do?"
                
            ],
            [
                
                "title" => "Why We Do?"
                
            ],
            [
                
                "title" => "How We Do?"
                
            ],
            [
                
                "title" => "Join Us"
                
            ],
            
        ];
        DB::table('employer_content_sections')->insert($contentSections);
    }
}