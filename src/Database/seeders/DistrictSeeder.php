<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $districts = [
            [
                
                "name" => "Anywhere in Bangladesh",
                
            ],
            [
                
                "name" => "Dhaka",
                
            ],
            [
               
                "name" => "Faridpur",
               
            ],
            [
               
                "name" => "Gazipur",
               
            ],
            [
               
                "name" => "Gopalganj",
            ],
            [
               
                "name" => "Jamalpur",
              
            ],
            [
               
                "name" => "Kishoreganj",
               
            ],
            [
                
                "name" => "Madaripur",
               
            ],
            [
               
                "name" => "Manikganj",
              
            ],
            [
               
                "name" => "Munshiganj",
            ],
            [
               
                "name" => "Mymensingh",
               
            ],
            [
               
                "name" => "Narayanganj",
               
            ],
            [
                "name" => "Narsingdi",
              
            ],
            [
               
                "name" => "Netrokona",
               
            ],
            [
                
                "name" => "Rajbari",
                
            ],
            [
                
                "name" => "Shariatpur",
               
            ],
            [
               
                "name" => "Sherpur",
               
            ],
            [
               
                "name" => "Tangail",
               
            ],
            [
               
                "name" => "Bogura",
               
            ],
            [
               
                "name" => "Naogaon",
               
            ],
            [
               
                "name" => "Natore",
               
            ],
            [
               
                "name" => "Nawabganj",
              
            ],
            [
                "name" => "Pabna",
            
            ],
            [
               
                "name" => "Rajshahi",
               
            ],
            [
               
                "name" => "Sirajgonj",
               
            ],
            [
              
                "name" => "Dinajpur",
              
            ],
            [
               
                "name" => "Gaibandha",
               
            ],
            [
               
                "name" => "Kurigram",
              
            ],
            [
               
                "name" => "Lalmonirhat",
               
            ],
            [
               
                "name" => "Nilphamari",
               
            ],
            [
               
                "name" => "Panchagarh",
               
            ],
            [
               
                "name" => "Rangpur",
               
            ],
            [
              
                "name" => "Thakurgaon",
               
            ],
            [
               
                "name" => "Barguna",
               
            ],
            [
                
                "name" => "Barishal",
               
            ],
            [
               
                "name" => "Bhola",
              
            ],
            [
                
                "name" => "Jhalokati",
               
            ],
            [
               
                "name" => "Patuakhali",
               
            ],
            [
               
                "name" => "Pirojpur",
               
            ],
            [
               
                "name" => "Bandarban",
               
            ],
            [
                "name" => "Brahmanbaria",
               
            ],
            [
               
                "name" => "Chandpur",
               
            ],
            [
               
                "name" => "Chattogram",
              
            ],
            [
               
                "name" => "Cumilla",
               
            ],
            [
               
                "name" => "Cox's Bazar",
               
            ],
            [
              
                "name" => "Feni",
               
            ],
            [
               
                "name" => "Khagrachari",
               
            ],
            [
               
                "name" => "Lakshmipur",
               
            ],
            [
               
                "name" => "Noakhali",
              
            ],
            [
               
                "name" => "Rangamati",
              
            ],
            [
               
                "name" => "Habiganj",
               
            ],
            [
               
                "name" => "Maulvibazar",
                
            ],
            [
               
                "name" => "Sunamganj",
               
            ],
            [
               
                "name" => "Sylhet",
              
            ],
            [
               
                "name" => "Gujarati",
               
            ],
            [
               
                "name" => "Bagerhat",
              
            ],
            [
               
                "name" => "Chuadanga",
               
            ],
            [
               
                "name" => "Jashore",
                
            ],
            [
               
                "name" => "Jhenaidah",
                
            ],
            [
                
                "name" => "Khulna",
                
            ],
            [
               
                "name" => "Kushtia",
              
            ],
            [
              
                "name" => "Magura",
            
            ],
            [
               
                "name" => "Meherpur",
               
            ],
            [
               
                "name" => "Narail",
            ],
            [
                
                "name" => "Satkhira",
            ],
        ];
        DB::table('districts')->insert($districts);
    }
}