<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Employer;
use Cviebrock\EloquentSluggable\Services\SlugService;
class EmployerSlugSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Employer::orderBy('id')->chunk(100, function ($employers) {
            foreach ($employers as $employer) {
                $slug_str   = $employer->employer_name ?? $employer->id;
                $slug       = SlugService::createSlug(Employer::class, 'slug', $slug_str);
                Employer::where('id', $employer->id)->update(['slug' => $slug]);

            }
        });
       
    }
}
