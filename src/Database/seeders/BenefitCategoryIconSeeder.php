<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BenefitCategory;
use App\Models\BenefitOption;

class BenefitCategoryIconSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $parent = BenefitCategory::where('title', 'Benefits at Work')->first();
        if ($parent) {
            $parent->update([
                'category_icon' => "benefit/category/benefit_at_work.png",
            ]);
        }
        $workingAndLeaveBenefit = BenefitCategory::where('title', 'Working Hours and Leave')->first();
        if ($workingAndLeaveBenefit) {
            $workingAndLeaveBenefit->update([
                'category_icon' => "benefit/category/working_hours_leave_icon.png",
            ]);
        }
        $employeeActivitiesBenefit = BenefitCategory::where('title', 'Emplouyee clubs, Activities, Housing & Gifts')->first();
        if ($employeeActivitiesBenefit) {
            $employeeActivitiesBenefit->update([
                'category_icon' => "benefit/category/Gifts-icon.png",
            ]);
        }
        $personalBenefit = BenefitCategory::where('title', 'Personal Financial Benefit')->first();
        if ($personalBenefit) {
            $personalBenefit->update([
                'category_icon' => "benefit/category/personal_financial_benefit.png",
            ]);
        }

        $skillBenefit = BenefitCategory::where('title', 'Skill Development')->first();
        if ($skillBenefit) {
            $skillBenefit->update([
                'category_icon' => "benefit/category/Skill_Development-icon.png",
            ]);
        }

        $foodBenefit = BenefitCategory::where('title', 'Food & Beverage')->first();
        if ($foodBenefit) {
            $foodBenefit->update([
                'category_icon' => "benefit/category/Food_&_Beverage-icon.png",
            ]);
        }

        $healthBenefit = BenefitCategory::where('title', 'Benefits for Health')->first();
        if ($healthBenefit) {
            $healthBenefit->update([
                'category_icon' => "benefit/category/benefits_for_health_icon.png",
            ]);
        }
        // Benefits for Financial Security
        $pensionBenefit = BenefitCategory::where('title', 'Benefits for Financial Security')->first();
        if ($pensionBenefit) {
            $pensionBenefit->update([
                'category_icon' => "benefit/category/Benefits_for_Financial_Security-icon.png",
            ]);
        }

        // Lifestyle Benefits
        $lifeStyleBenefit = BenefitCategory::where('title', 'Lifestyle Benefits')->first();
        if ($lifeStyleBenefit) {
            $lifeStyleBenefit->update([
                'category_icon' => "benefit/category/Lifestyle_Benefits-icon.png",
            ]);
        }

        // Mobility Benefits
        $mobilityBenefit = BenefitCategory::where('title', 'Mobility')->first();
        if ($mobilityBenefit) {
            $mobilityBenefit->update([
                'category_icon' => "benefit/category/mobility_icon.png",
            ]);
        }
         // Pension Benefits
         $pensionBenefit = BenefitCategory::where('title', 'Pension Plan')->first();
         if ($pensionBenefit) {
             $pensionBenefit->update([
                 'category_icon' => "benefit/category/pension_plan_icon.png",
             ]);
         }
          // Requirement Flexibility
          $requirementFlexibility = BenefitCategory::where('title', 'Requirement Flexibility')->first();
          if ($requirementFlexibility) {
              $requirementFlexibility->update([
                  'category_icon' => "benefit/category/requirement_flexibility_icon.png",
              ]);
          }
            // Work-life Balance
            $WorklifeBalance = BenefitCategory::where('title', 'Work-life Balance')->first();
            if ($WorklifeBalance) {
                $WorklifeBalance->update([
                    'category_icon' => "benefit/category/worklife_balance_icon.png",
                ]);
            }
        // Health and Welness
        $HealthandWellness = BenefitCategory::where('title', 'Health and Wellness')->first();
        if ($HealthandWellness) {
            $HealthandWellness->update([
                'category_icon' => "benefit/category/health_wellness_icon.png",
            ]);
        }
        // Healthcare & Insurenace
        $HealthcareInsurenace = BenefitCategory::where('title', 'Healthcare & Insurenace')->first();
        if ($HealthcareInsurenace) {
            $HealthcareInsurenace->update([
                'category_icon' => "benefit/category/healthcare_insurance_icon.png",
            ]);
        }

         // Financial Benefits 
         $FinancialBenefits  = BenefitCategory::where('title', 'Financial Benefits')->first();
         if ($FinancialBenefits) {
             $FinancialBenefits->update([
                 'category_icon' => "benefit/category/financial_benefits_icon-1.png",
             ]);
         }
    }
}
