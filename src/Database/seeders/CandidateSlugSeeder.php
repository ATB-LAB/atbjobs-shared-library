<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Candidate;
use Cviebrock\EloquentSluggable\Services\SlugService;
class CandidateSlugSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Candidate::orderBy('id')->chunk(100, function ($candidates) {
            foreach ($candidates as $candidate) {
                $slug_str = $candidate->first_name ?? $candidate->id;
                $slug = SlugService::createSlug(Candidate::class, 'slug', $slug_str);
                Candidate::where('id', $candidate->id)->update(['slug' => $slug]);

            }
        });
       
    }
}
