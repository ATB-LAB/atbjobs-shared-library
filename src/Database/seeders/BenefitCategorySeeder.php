<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BenefitCategory;
use App\Models\BenefitOption;
use App\Models\EmployerAddInfoCategory;
use App\Models\EmployerAddInfoOption;
class BenefitCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $parent = BenefitCategory::updateOrCreate([
            'title' => "Benefits at Work"
        ],[
            'title' => "Benefits at Work",
        ]);
        
       $subParent = BenefitCategory::updateOrCreate([
            'title' => "Working Hours and Leave"
        ],[
            'parent'=> $parent->id,
            'title' => "Working Hours and Leave",
        ]);

        BenefitOption::updateOrCreate([
            'title' => "More than 120 days off per year"
        ],[
            'benefit_category_id'=> $subParent->id,
            'title' => "More than 120 days off per year",
        ]);
        BenefitOption::updateOrCreate([
            'title' => "Can leave the company by 17:00"
        ],[
            'benefit_category_id'=> $subParent->id,
            'title' => "Can leave the company by 17:00",
        ]);
        BenefitOption::updateOrCreate([
            'title' => "Long vacations available"
        ],[
            'benefit_category_id'=> $subParent->id,
            'title' => "Long vacations available",
        ]);
        BenefitOption::updateOrCreate([
            'title' => "No overtime work"
        ],[
            'benefit_category_id'=> $subParent->id,
            'title' => "No overtime work",
        ]);
        BenefitOption::updateOrCreate([
            'title' => "Maternity and paternity leave system"
        ],[
            'benefit_category_id'=> $subParent->id,
            'title' => "Maternity and paternity leave system",
        ]);
        BenefitOption::updateOrCreate([
            'title' => "Two days off per week"
        ],[
            'benefit_category_id'=> $subParent->id,
            'title' => "Two days off per week",
        ]);
        BenefitOption::updateOrCreate([
            'title' => "Leave the office by 5:00 p.m."
        ],[
            'benefit_category_id'=> $subParent->id,
            'title' => "Leave the office by 5:00 p.m.",
        ]);
        BenefitOption::updateOrCreate([
            'title' => "Shorter working hours OK"
        ],[
            'benefit_category_id'=> $subParent->id,
            'title' => "Shorter working hours OK",
        ]);
        BenefitOption::updateOrCreate([
            'title' => "Less than 7 hours of work"
        ],[
            'benefit_category_id'=> $subParent->id,
            'title' => "Less than 7 hours of work",
        ]);
        BenefitOption::updateOrCreate([
            'title' => "Remote work available"
        ],[
            'benefit_category_id'=> $subParent->id,
            'title' => "Remote work available",
        ]);
        BenefitOption::updateOrCreate([
            'title' => "120 days or more per holidays"
        ],[
            'benefit_category_id'=> $subParent->id,
            'title' => "120 days or more per holidays",
        ]);
        BenefitOption::updateOrCreate([
            'title' => "Can leave the company by 17:00"
        ],[
            'benefit_category_id'=> $subParent->id,
            'title' => "Can leave the company by 17:00",
        ]);
        BenefitOption::updateOrCreate([
            'title' => "Monthly average overtime hours within 20 hours"
        ],[
            'benefit_category_id'=> $subParent->id,
            'title' => "Monthly average overtime hours within 20 hours",
        ]);
        BenefitOption::updateOrCreate([
            'title' => "Operating hours within 7 hours"
        ],[
            'benefit_category_id'=> $subParent->id,
            'title' => "Operating hours within 7 hours",
        ]);
        BenefitOption::updateOrCreate([
            'title' => "Annual holiday 120 days or more"
        ],[
            'benefit_category_id'=> $subParent->id,
            'title' => "Annual holiday 120 days or more",
        ]);
        BenefitOption::updateOrCreate([
            'title' => "Continuous vacation for 5 days or more OK"
        ],[
            'benefit_category_id'=> $subParent->id,
            'title' => "Continuous vacation for 5 days or more OK",
        ]);
        BenefitOption::updateOrCreate([
            'title' => "There is a continuous leave system for 5 days or more"
        ],[
            'benefit_category_id'=> $subParent->id,
            'title' => "There is a continuous leave system for 5 days or more",
        ]);
        BenefitOption::updateOrCreate([
            'title' => "There is a continuous leave system for 2 weeks or more"
        ],[
            'benefit_category_id'=> $subParent->id,
            'title' => "There is a continuous leave system for 2 weeks or more",
        ]);
        BenefitOption::updateOrCreate([
            'title' => "Opening time after 10 am"
        ],[
            'benefit_category_id'=> $subParent->id,
            'title' => "Opening time after 10 am",
        ]);
        BenefitOption::updateOrCreate([
            'title' => "Night Shift Available"
        ],[
            'benefit_category_id'=> $subParent->id,
            'title' => "Night Shift Available",
        ]);
        BenefitCategory::updateOrCreate([
            'title' => "Skill Development"
        ],[
            'parent'=> $parent->id,
            'title' => "Skill Development ",
        ]);
        $skillBenefit = BenefitCategory::updateOrCreate([
            'title' => "Skill Development"
        ],[
            'parent'=> $parent->id,
            'title' => "Skill Development",
        ]);
        BenefitOption::updateOrCreate([
            'title' => "Training program available"
        ],[
            'benefit_category_id'=> $skillBenefit->id,
            'title' => "Training program available",
        ]);
        BenefitOption::updateOrCreate([
            'title' => "Opportunities to experience cutting-edge technology"
        ],[
            'benefit_category_id'=> $skillBenefit->id,
            'title' => "Opportunities to experience cutting-edge technology",
        ]);
        BenefitOption::updateOrCreate([
            'title' => "Enhancement of training system"
        ],[
            'benefit_category_id'=> $skillBenefit->id,
            'title' => "Enhancement of training system",
        ]);
        BenefitOption::updateOrCreate([
            'title' => "There are qualification acquisition support and allowance"
        ],[
            'benefit_category_id'=> $skillBenefit->id,
            'title' => "There are qualification acquisition support and allowance",
        ]);
        BenefitOption::updateOrCreate([
            'title' => "Acquire specialized skills"
        ],[
            'benefit_category_id'=> $skillBenefit->id,
            'title' => "Acquire specialized skills",
        ]);
        BenefitOption::updateOrCreate([
            'title' => "Language Courses"
        ],[
            'benefit_category_id'=> $skillBenefit->id,
            'title' => "Language Courses",
        ]);
        $foodBenefit = BenefitCategory::updateOrCreate([
            'title' => "Food & Beverage "
        ],[
            'parent'=> $parent->id,
            'title' => "Food & Beverage",
        ]);
        BenefitOption::updateOrCreate([
            'title' => "Lunch subsidy available"
        ],[
            'benefit_category_id'=> $foodBenefit->id,
            'title' => "Lunch subsidy available",
        ]);
        BenefitOption::updateOrCreate([
            'title' => "All-you-can-drink tea and coffee"
        ],[
            'benefit_category_id'=> $foodBenefit->id,
            'title' => "All-you-can-drink tea and coffee",
        ]);
        BenefitOption::updateOrCreate([
            'title' => "Employee cafeteria / meal assistance"
        ],[
            'benefit_category_id'=> $foodBenefit->id,
            'title' => "Employee cafeteria / meal assistance",
        ]);
        $employeeClubbenefit = BenefitCategory::updateOrCreate([
            'title' => "Emplouyee clubs, Activities, Housing & Gifts"
        ],[
            'parent'=> $parent->id,
            'title' => "Emplouyee clubs, Activities, Housing & Gifts",
        ]);
        BenefitOption::updateOrCreate([
            'title' => "Free dress code"
        ],[
            'benefit_category_id'=> $employeeClubbenefit->id,
            'title' => "Free dress code",
        ]);
        BenefitOption::updateOrCreate([
            'title' => "Training and play facilities available"
        ],[
            'benefit_category_id'=> $employeeClubbenefit->id,
            'title' => "Training and play facilities available",
        ]);
        BenefitOption::updateOrCreate([
            'title' => "Good Office environment"
        ],[
            'benefit_category_id'=> $employeeClubbenefit->id,
            'title' => "Good Office environment",
        ]);
        BenefitOption::updateOrCreate([
            'title' => "There is an office tour"
        ],[
            'benefit_category_id'=> $employeeClubbenefit->id,
            'title' => "There is an office tour",
        ]);
        BenefitOption::updateOrCreate([
            'title' => "Overseas Tour"
        ],[
            'benefit_category_id'=> $employeeClubbenefit->id,
            'title' => "Overseas Tour",
        ]);
        BenefitOption::updateOrCreate([
            'title' => "Freedom of clothing"
        ],[
            'benefit_category_id'=> $employeeClubbenefit->id,
            'title' => "Freedom of clothing",
        ]);
        BenefitOption::updateOrCreate([
            'title' => "Company housing"
        ],[
            'benefit_category_id'=> $employeeClubbenefit->id,
            'title' => "Company housing",
        ]);
        BenefitOption::updateOrCreate([
            'title' => "Company Apartments"
        ],[
            'benefit_category_id'=> $employeeClubbenefit->id,
            'title' => "Company Apartments",
        ]);
        BenefitOption::updateOrCreate([
            'title' => "Qualification for support system"
        ],[
            'benefit_category_id'=> $employeeClubbenefit->id,
            'title' => "Qualification for support system",
        ]);
        BenefitOption::updateOrCreate([
            'title' => "Enhancement of training system"
        ],[
            'benefit_category_id'=> $employeeClubbenefit->id,
            'title' => "Enhancement of training system",
        ]);
        BenefitOption::updateOrCreate([
            'title' => "Smoking Zone"
        ],[
            'benefit_category_id'=> $employeeClubbenefit->id,
            'title' => "Smoking Zone",
        ]);
        BenefitOption::updateOrCreate([
            'title' => "Multiple Smoking Zone"
        ],[
            'benefit_category_id'=> $employeeClubbenefit->id,
            'title' => "Multiple Smoking Zone",
        ]);
        BenefitOption::updateOrCreate([
            'title' => "There are various events"
        ],[
            'benefit_category_id'=> $employeeClubbenefit->id,
            'title' => "There are various events",
        ]);
        BenefitOption::updateOrCreate([
            'title' => "Company Picnic"
        ],[
            'benefit_category_id'=> $employeeClubbenefit->id,
            'title' => "Company Picnic",
        ]);
        BenefitOption::updateOrCreate([
            'title' => "Annual Picnic"
        ],[
            'benefit_category_id'=> $employeeClubbenefit->id,
            'title' => "Annual Picnic",
        ]);
        BenefitOption::updateOrCreate([
            'title' => "Every month Team Outing Dinner"
        ],[
            'benefit_category_id'=> $employeeClubbenefit->id,
            'title' => "Every month Team Outing Dinner",
        ]);
        BenefitOption::updateOrCreate([
            'title' => "Many of the managers are well-known people."
        ],[
            'benefit_category_id'=> $employeeClubbenefit->id,
            'title' => "Many of the managers are well-known people.",
        ]);
        $requirmentBenefit = BenefitCategory::updateOrCreate([
            'title' => "Requirement Flexibility"
        ],[
            'parent'=> $parent->id,
            'title' => "Requirement Flexibility",
        ]);
        BenefitOption::updateOrCreate([
            'title' => "Management experience welcome"
        ],[
            'benefit_category_id'=> $requirmentBenefit->id,
            'title' => "Management experience welcome",
        ]);
        BenefitOption::updateOrCreate([
            'title' => "No academic background required"
        ],[
            'benefit_category_id'=> $requirmentBenefit->id,
            'title' => "No academic background required",
        ]);
        BenefitOption::updateOrCreate([
            'title' => "No previous experience in the job market"
        ],[
            'benefit_category_id'=> $requirmentBenefit->id,
            'title' => "No previous experience in the job market",
        ]);
        BenefitOption::updateOrCreate([
            'title' => "No experience in the industry is welcome"
        ],[
            'benefit_category_id'=> $requirmentBenefit->id,
            'title' => "No experience in the industry is welcome",
        ]);
        BenefitOption::updateOrCreate([
            'title' => "Work from home OK"
        ],[
            'benefit_category_id'=> $requirmentBenefit->id,
            'title' => "Work from home OK",
        ]);
        BenefitOption::updateOrCreate([
            'title' => "Regardless of the educational background"
        ],[
            'benefit_category_id'=> $requirmentBenefit->id,
            'title' => "Regardless of the educational background",
        ]);
        BenefitOption::updateOrCreate([
            'title' => "Inexperienced occupation welcome"
        ],[
            'benefit_category_id'=> $requirmentBenefit->id,
            'title' => "Inexperienced occupation welcome",
        ]);
        BenefitOption::updateOrCreate([
            'title' => "Inexperienced industry welcome"
        ],[
            'benefit_category_id'=> $requirmentBenefit->id,
            'title' => "Inexperienced industry welcome",
        ]);
        BenefitOption::updateOrCreate([
            'title' => "Welcome inexperienced adults"
        ],[
            'benefit_category_id'=> $requirmentBenefit->id,
            'title' => "Welcome inexperienced adults",
        ]);
        BenefitOption::updateOrCreate([
            'title' => "No educational background"
        ],[
            'benefit_category_id'=> $requirmentBenefit->id,
            'title' => "No educational background",
        ]);
        BenefitOption::updateOrCreate([
            'title' => "Inexperienced job welcome"
        ],[
            'benefit_category_id'=> $requirmentBenefit->id,
            'title' => "Inexperienced job welcome",
        ]);
        BenefitOption::updateOrCreate([
            'title' => "Inexperienced industry welcome"
        ],[
            'benefit_category_id'=> $requirmentBenefit->id,
            'title' => "Inexperienced industry welcome",
        ]);
        BenefitOption::updateOrCreate([
            'title' => "Full -time employee"
        ],[
            'benefit_category_id'=> $requirmentBenefit->id,
            'title' => "Full -time employee",
        ]);
        BenefitOption::updateOrCreate([
            'title' => "Contract employee"
        ],[
            'benefit_category_id'=> $requirmentBenefit->id,
            'title' => "Contract employee",
        ]);
        BenefitOption::updateOrCreate([
            'title' => "Part -time job part"
        ],[
            'benefit_category_id'=> $requirmentBenefit->id,
            'title' => "Part -time job part",
        ]);
        $healthBenefit = BenefitCategory::updateOrCreate([
            'title' => "Benefits for Health "
        ],[
            'title' => "Benefits for Health ",
        ]);

        $wellnessBenefit = BenefitCategory::updateOrCreate([
            'title' => "Health and Wellness"
        ],[
            'parent'=> $healthBenefit->id,
            'title' => "Health and Wellness",
        ]);
       
        BenefitOption::updateOrCreate([
            'title' => "There is childcare support / nursery"
        ],[
            'benefit_category_id'=> $wellnessBenefit->id,
            'title' => "There is childcare support / nursery",
        ]);
        BenefitOption::updateOrCreate([
            'title' => "Childcare / childcare support system"
        ],[
            'benefit_category_id'=> $wellnessBenefit->id,
            'title' => "Childcare / childcare support system",
        ]);
        BenefitOption::updateOrCreate([
            'title' => "Bicycle commuting is possible"
        ],[
            'benefit_category_id'=> $wellnessBenefit->id,
            'title' => "Bicycle commuting is possible",
        ]);
        BenefitOption::updateOrCreate([
            'title' => "Motorcycle commuting is possible"
        ],[
            'benefit_category_id'=> $wellnessBenefit->id,
            'title' => "Motorcycle commuting is possible",
        ]);

        //Health care and insurance

        $healthCareBenefit = BenefitCategory::updateOrCreate([
            'title' => "Healthcare & Insurenace"
        ],[
            'parent'=> $healthBenefit->id,
            'title' => "Healthcare & Insurenace",
        ]);
       
        BenefitOption::updateOrCreate([
            'title' => "Childcare and long -term care leave"
        ],[
            'benefit_category_id'=> $healthCareBenefit->id,
            'title' => "Childcare and long -term care leave",
        ]);
        BenefitOption::updateOrCreate([
            'title' => "Childcare support and daycare available"
        ],[
            'benefit_category_id'=> $healthCareBenefit->id,
            'title' => "Childcare support and daycare available",
        ]);
        BenefitOption::updateOrCreate([
            'title' => "Health insurance, available"
        ],[
            'benefit_category_id'=> $healthCareBenefit->id,
            'title' => "Health insurance, available",
        ]);
        BenefitOption::updateOrCreate([
            'title' => "Various medical low wages, yes"
        ],[
            'benefit_category_id'=> $healthCareBenefit->id,
            'title' => "Various medical low wages, yes",
        ]);
        BenefitOption::updateOrCreate([
            'title' => "Family health insurance"
        ],[
            'benefit_category_id'=> $healthCareBenefit->id,
            'title' => "Family health insurance",
        ]);

        //Benefits for Financial Security

        $pensionBenefit = BenefitCategory::updateOrCreate([
            'title' => "Benefits for Financial Security"
        ],[
            'title' => "Benefits for Financial Security",
        ]);
        
       $pensionPlan = BenefitCategory::updateOrCreate([
            'title' => "Pension Plan"
        ],[
            'parent'=> $pensionBenefit->id,
            'title' => "Pension Plan",
        ]);

        BenefitOption::updateOrCreate([
            'title' => "Retirement allowance, available"
        ],[
            'benefit_category_id'=> $pensionPlan->id,
            'title' => "Retirement allowance, available",
        ]);

        //Financial Benefits
        $financialBenefit = BenefitCategory::updateOrCreate([
            'title' => "Financial Benefits "
        ],[
            'parent'=> $pensionBenefit->id,
            'title' => "Financial Benefits ",
        ]);

        BenefitOption::updateOrCreate([
            'title' => "Comission"
        ],[
            'benefit_category_id'=> $financialBenefit->id,
            'title' => "Comission",
        ]);
        BenefitOption::updateOrCreate([
            'title' => "Stock options available"
        ],[
            'benefit_category_id'=> $financialBenefit->id,
            'title' => "Stock options available",
        ]);
        BenefitOption::updateOrCreate([
            'title' => "Festival bonus"
        ],[
            'benefit_category_id'=> $financialBenefit->id,
            'title' => "Festival bonus",
        ]);
        BenefitOption::updateOrCreate([
            'title' => "Performance bonus available"
        ],[
            'benefit_category_id'=> $financialBenefit->id,
            'title' => "Performance bonus available",
        ]);
        BenefitOption::updateOrCreate([
            'title' => "Project-specific incentives available"
        ],[
            'benefit_category_id'=> $financialBenefit->id,
            'title' => "Project-specific incentives available",
        ]);
        BenefitOption::updateOrCreate([
            'title' => "Annual salary review"
        ],[
            'benefit_category_id'=> $financialBenefit->id,
            'title' => "Annual salary review",
        ]);
        BenefitOption::updateOrCreate([
            'title' => "Overtime allowance available"
        ],[
            'benefit_category_id'=> $financialBenefit->id,
            'title' => "Overtime allowance available",
        ]);
        BenefitOption::updateOrCreate([
            'title' => "Cell phone allowance"
        ],[
            'benefit_category_id'=> $financialBenefit->id,
            'title' => "Cell phone allowance",
        ]);
        BenefitOption::updateOrCreate([
            'title' => "Tour allowance"
        ],[
            'benefit_category_id'=> $financialBenefit->id,
            'title' => "Tour allowance",
        ]);
        BenefitOption::updateOrCreate([
            'title' => "With stock option"
        ],[
            'benefit_category_id'=> $financialBenefit->id,
            'title' => "With stock option",
        ]);

        //Personal Financial Benefit

        $PersonalfinancialBenefit = BenefitCategory::updateOrCreate([
            'title' => "Personal Financial Benefit"
        ],[
            'parent'=> $pensionBenefit->id,
            'title' => "Personal Financial Benefit",
        ]);

        BenefitOption::updateOrCreate([
            'title' => "Loan"
        ],[
            'benefit_category_id'=> $PersonalfinancialBenefit->id,
            'title' => "Loan",
        ]);
        BenefitOption::updateOrCreate([
            'title' => "There is a company house / rent subsidy system"
        ],[
            'benefit_category_id'=> $PersonalfinancialBenefit->id,
            'title' => "There is a company house / rent subsidy system",
        ]);
        BenefitOption::updateOrCreate([
            'title' => "Profit sharing"
        ],[
            'benefit_category_id'=> $PersonalfinancialBenefit->id,
            'title' => "Profit sharing",
        ]);

        BenefitOption::updateOrCreate([
            'title' => "There is an incentive"
        ],[
            'benefit_category_id'=> $PersonalfinancialBenefit->id,
            'title' => "There is an incentive",
        ]);
        BenefitOption::updateOrCreate([
            'title' => "There is a commission"
        ],[
            'benefit_category_id'=> $PersonalfinancialBenefit->id,
            'title' => "There is a commission",
        ]);

        //Lifestyle Benefits

        $lifeStyleBenefit = BenefitCategory::updateOrCreate([
            'title' => "Lifestyle Benefits"
        ],[
            'title' => "Lifestyle Benefits",
        ]);
        
       $workLifeBalance = BenefitCategory::updateOrCreate([
            'title' => "Work-life Balance"
        ],[
            'parent'=> $lifeStyleBenefit->id,
            'title' => "Work-life Balance",
        ]);

        BenefitOption::updateOrCreate([
            'title' => "Paid vacation days"
        ],[
            'benefit_category_id'=> $workLifeBalance->id,
            'title' => "Paid vacation days",
        ]);
        BenefitOption::updateOrCreate([
            'title' => "Company trip at least once a year"
        ],[
            'benefit_category_id'=> $workLifeBalance->id,
            'title' => "Company trip at least once a year",
        ]);

        //Mobility
        $mobility = BenefitCategory::updateOrCreate([
            'title' => "Mobility "
        ],[
            'parent'=> $lifeStyleBenefit->id,
            'title' => "Mobility ",
        ]);

        BenefitOption::updateOrCreate([
            'title' => "Full commuter transportation expenses payment"
        ],[
            'benefit_category_id'=> $mobility->id,
            'title' => "Full commuter transportation expenses payment",
        ]);
        BenefitOption::updateOrCreate([
            'title' => "5 minutes walk from the station"
        ],[
            'benefit_category_id'=> $mobility->id,
            'title' => "5 minutes walk from the station",
        ]);
        BenefitOption::updateOrCreate([
            'title' => "Company Bus Available"
        ],[
            'benefit_category_id'=> $mobility->id,
            'title' => "Company Bus Available",
        ]);
        BenefitOption::updateOrCreate([
            'title' => "Car Parking available"
        ],[
            'benefit_category_id'=> $mobility->id,
            'title' => "Car Parking available",
        ]);
        
    }
}
