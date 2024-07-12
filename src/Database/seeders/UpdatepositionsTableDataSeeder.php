<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UpdatePositionsTableDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Array of positions to update
        $positions = [
            'CTO' => 'CTO (Chief Technology Officer)',
            'CEO' => 'CEO (Chief Executive Officer)',
            'CMO' => 'CMO (Chief Marketing Officer)',
            'CFO' => 'CFO (Chief Financial Officer)',
            'CRM' => 'CRM (Customer Relationship Manager)',
            'CA' => 'CA (Chartered Accountants)',
            'CG' => 'CG (Commanding General)',
        ];

        // Iterate over each position and update if it exists
        foreach ($positions as $shortName => $fullName) {
            DB::table('positions')
                ->where('name', $shortName)
                ->update(['name' => $fullName]);
        }
    }
}
