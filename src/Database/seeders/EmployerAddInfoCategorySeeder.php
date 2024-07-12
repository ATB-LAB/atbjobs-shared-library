<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\EmployerAddInfoCategory;
use App\Models\EmployerAddInfoOption;
class EmployerAddInfoCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // employer additional info category
         EmployerAddInfoCategory::updateOrCreate([
            'title' => "MNC, International, Forbes"
        ],[
            
            'title' => "MNC, International, Forbes",
        ]);

        $infoCategory = EmployerAddInfoCategory::updateOrCreate([
            'title' => "MNC, International, Forbes"
        ],[
            
            'title' => "MNC, International, Forbes",
        ]);
       EmployerAddInfoOption::updateOrCreate([
            'title' => "Group companies"
        ],[
             'employer_add_info_category_id'=>$infoCategory->id,
            'title' => "Group companies",
        ]);
        EmployerAddInfoOption::updateOrCreate([
            'title' => "Foreign Affiliated Company"
        ],[
             'employer_add_info_category_id'=>$infoCategory->id,
            'title' => "Foreign Affiliated Company",
        ]);
        EmployerAddInfoOption::updateOrCreate([
            'title' => "Public Organization"
        ],[
             'employer_add_info_category_id'=>$infoCategory->id,
            'title' => "Public Organization",
        ]);
        EmployerAddInfoOption::updateOrCreate([
            'title' => "BtoB service (1981)"
        ],[
             'employer_add_info_category_id'=>$infoCategory->id,
            'title' => "BtoB service (1981)",
        ]);
        EmployerAddInfoOption::updateOrCreate([
            'title' => "BtoC service (940)"
        ],[
             'employer_add_info_category_id'=>$infoCategory->id,
            'title' => "BtoC service (940)",
        ]);
        EmployerAddInfoOption::updateOrCreate([
            'title' => "women only (114)"
        ],[
             'employer_add_info_category_id'=>$infoCategory->id,
            'title' => "women only (114)",
        ]);
        EmployerAddInfoOption::updateOrCreate([
            'title' => "Listed and stock public companies"
        ],[
             'employer_add_info_category_id'=>$infoCategory->id,
            'title' => "Listed and stock public companies",
        ]);
        EmployerAddInfoOption::updateOrCreate([
            'title' => "Listed company group company"
        ],[
             'employer_add_info_category_id'=>$infoCategory->id,
            'title' => "Listed company group company",
        ]);
        EmployerAddInfoOption::updateOrCreate([
            'title' => " startup member (280)"
        ],[
             'employer_add_info_category_id'=>$infoCategory->id,
            'title' => " startup member (280)",
        ]);
        EmployerAddInfoOption::updateOrCreate([
            'title' => "Foreign -funded enterprise"
        ],[
             'employer_add_info_category_id'=>$infoCategory->id,
            'title' => "Foreign -funded enterprise",
        ]);

        $employeeSpeciality = EmployerAddInfoCategory::updateOrCreate([
            'title' => "Employee Specialty"
        ],[
            
            'title' => "Employee Specialty",
        ]);
        EmployerAddInfoOption::updateOrCreate([
            'title' => "Average age in 20s"
        ],[
             'employer_add_info_category_id'=>$employeeSpeciality->id,
            'title' => "Average age in 20s",
        ]);
        EmployerAddInfoOption::updateOrCreate([
            'title' => "Average age 30s"
        ],[
             'employer_add_info_category_id'=>$employeeSpeciality->id,
            'title' => "Average age 30s",
        ]);
        EmployerAddInfoOption::updateOrCreate([
            'title' => "Average age in 40s"
        ],[
             'employer_add_info_category_id'=>$employeeSpeciality->id,
            'title' => "Average age in 40s",
        ]);
        EmployerAddInfoOption::updateOrCreate([
            'title' => "Higher percentage of women than other companies"
        ],[
             'employer_add_info_category_id'=>$employeeSpeciality->id,
            'title' => "Higher percentage of women than other companies",
        ]);
        EmployerAddInfoOption::updateOrCreate([
            'title' => "Foreign management"
        ],[
             'employer_add_info_category_id'=>$employeeSpeciality->id,
            'title' => "Foreign management",
        ]);
        EmployerAddInfoOption::updateOrCreate([
            'title' => "Young management team"
        ],[
             'employer_add_info_category_id'=>$employeeSpeciality->id,
            'title' => "Young management team",
        ]);
        EmployerAddInfoOption::updateOrCreate([
            'title' => "Female managers"
        ],[
             'employer_add_info_category_id'=>$employeeSpeciality->id,
            'title' => "Female managers",
        ]);
        EmployerAddInfoOption::updateOrCreate([
            'title' => "Resignation rate below 5 %"
        ],[
             'employer_add_info_category_id'=>$employeeSpeciality->id,
            'title' => "Resignation rate below 5 %",
        ]);
        EmployerAddInfoOption::updateOrCreate([
            'title' => "Average age 20s"
        ],[
             'employer_add_info_category_id'=>$employeeSpeciality->id,
            'title' => "Average age 20s",
        ]);
        EmployerAddInfoOption::updateOrCreate([
            'title' => "Mid -career joining 50 % or more"
        ],[
             'employer_add_info_category_id'=>$employeeSpeciality->id,
            'title' => "Mid -career joining 50 % or more",
        ]);
        EmployerAddInfoOption::updateOrCreate([
            'title' => "Mid -career joining 50 % or more"
        ],[
             'employer_add_info_category_id'=>$employeeSpeciality->id,
            'title' => "Mid -career joining 50 % or more",
        ]);
        EmployerAddInfoOption::updateOrCreate([
            'title' => "Women are active"
        ],[
             'employer_add_info_category_id'=>$employeeSpeciality->id,
            'title' => "Women are active",
        ]);
        EmployerAddInfoOption::updateOrCreate([
            'title' => "Women's management appointment available"
        ],[
             'employer_add_info_category_id'=>$employeeSpeciality->id,
            'title' => "Women's management appointment available",
        ]);
        EmployerAddInfoOption::updateOrCreate([
            'title' => "Female employees over 40 %"
        ],[
             'employer_add_info_category_id'=>$employeeSpeciality->id,
            'title' => "Female employees over 40 %",
        ]);
        EmployerAddInfoOption::updateOrCreate([
            'title' => "Child -rearing mom is active"
        ],[
             'employer_add_info_category_id'=>$employeeSpeciality->id,
            'title' => "Child -rearing mom is active",
        ]);
        EmployerAddInfoOption::updateOrCreate([
            'title' => "Utilize language such as English and Chinese"
        ],[
             'employer_add_info_category_id'=>$employeeSpeciality->id,
            'title' => "Utilize language such as English and Chinese",
        ]);
        EmployerAddInfoOption::updateOrCreate([
            'title' => "Urgent recruitment"
        ],[
             'employer_add_info_category_id'=>$employeeSpeciality->id,
            'title' => "Urgent recruitment",
        ]);
        
        EmployerAddInfoOption::updateOrCreate([
            'title' => "Number of applicants 10 or more"
        ],[
             'employer_add_info_category_id'=>$employeeSpeciality->id,
            'title' => "Number of applicants 10 or more",
        ]);
        EmployerAddInfoOption::updateOrCreate([
            'title' => "Industry experienced person preferential treatment"
        ],[
             'employer_add_info_category_id'=>$employeeSpeciality->id,
            'title' => "Industry experienced person preferential treatment",
        ]);
        EmployerAddInfoOption::updateOrCreate([
            'title' => "Welcome for over 20 years"
        ],[
             'employer_add_info_category_id'=>$employeeSpeciality->id,
            'title' => "Welcome for over 20 years",
        ]);
        EmployerAddInfoOption::updateOrCreate([
            'title' => "Active recruitment of people with disabilities"
        ],[
             'employer_add_info_category_id'=>$employeeSpeciality->id,
            'title' => "Active recruitment of people with disabilities",
        ]);
        EmployerAddInfoOption::updateOrCreate([
            'title' => "Women's Works is being posted"
        ],[
             'employer_add_info_category_id'=>$employeeSpeciality->id,
            'title' => "Women's Works is being posted",
        ]);
        EmployerAddInfoOption::updateOrCreate([
            'title' => "Working mothers are enrolled"
        ],[
             'employer_add_info_category_id'=>$employeeSpeciality->id,
            'title' => "Working mothers are enrolled",
        ]);
        EmployerAddInfoOption::updateOrCreate([
            'title' => "Managers are promoted to management positions in their 20s"
        ],[
             'employer_add_info_category_id'=>$employeeSpeciality->id,
            'title' => "Managers are promoted to management positions in their 20s",
        ]);
        EmployerAddInfoOption::updateOrCreate([
            'title' => "Friendly and helpful staff."
        ],[
             'employer_add_info_category_id'=>$employeeSpeciality->id,
            'title' => "Friendly and helpful staff.",
        ]);
        EmployerAddInfoOption::updateOrCreate([
            'title' => "Many of the managers are engineers."
        ],[
             'employer_add_info_category_id'=>$employeeSpeciality->id,
            'title' => "Many of the managers are engineers.",
        ]);
        EmployerAddInfoOption::updateOrCreate([
            'title' => "Many management-level contacts"
        ],[
             'employer_add_info_category_id'=>$employeeSpeciality->id,
            'title' => "Many management-level contacts",
        ]);
        EmployerAddInfoOption::updateOrCreate([
            'title' => "The management is very supportive."
        ],[
             'employer_add_info_category_id'=>$employeeSpeciality->id,
            'title' => "The management is very supportive.",
        ]);
        EmployerAddInfoOption::updateOrCreate([
            'title' => "10 years+ Employee"
        ],[
             'employer_add_info_category_id'=>$employeeSpeciality->id,
            'title' => "10 years+ Employee ",
        ]);
        EmployerAddInfoOption::updateOrCreate([
            'title' => "50 % or more female employees"
        ],[
             'employer_add_info_category_id'=>$employeeSpeciality->id,
            'title' => "50 % or more female employees",
        ]);
        EmployerAddInfoOption::updateOrCreate([
            'title' => "Multiple Interns"
        ],[
             'employer_add_info_category_id'=>$employeeSpeciality->id,
            'title' => "Multiple Interns",
        ]);
        $workCulture = EmployerAddInfoCategory::updateOrCreate([
            'title' => "Work Culture"
        ],[
            
            'title' => "Work Culture ",
        ]);
        EmployerAddInfoOption::updateOrCreate([
            'title' => "Can make use of languages (English, Chinese, Japanese, etc.)"
        ],[
             'employer_add_info_category_id'=>$workCulture->id,
            'title' => "Can make use of languages (English, Chinese, Japanese, etc.)",
        ]);
        EmployerAddInfoOption::updateOrCreate([
            'title' => "Can make use of languages (English, Chinese, Japanese, etc.)"
        ],[
             'employer_add_info_category_id'=>$workCulture->id,
            'title' => "Can make use of languages (English, Chinese, Japanese, etc.)",
        ]);
        EmployerAddInfoOption::updateOrCreate([
            'title' => "Good evaluation system"
        ],[
             'employer_add_info_category_id'=>$workCulture->id,
            'title' => "Good evaluation system",
        ]);
        EmployerAddInfoOption::updateOrCreate([
            'title' => "Mid -Level employee 50 % or more"
        ],[
             'employer_add_info_category_id'=>$workCulture->id,
            'title' => "Mid -Level employee 50 % or more",
        ]);
        EmployerAddInfoOption::updateOrCreate([
            'title' => "Manager in his 20s Management"
        ],[
             'employer_add_info_category_id'=>$workCulture->id,
            'title' => "Manager in his 20s Management",
        ]);
        EmployerAddInfoOption::updateOrCreate([
            'title' => "Friendly and helpful staff."
        ],[
             'employer_add_info_category_id'=>$workCulture->id,
            'title' => "Friendly and helpful staff.",
        ]);
        EmployerAddInfoOption::updateOrCreate([
            'title' => "English Speaking"
        ],[
             'employer_add_info_category_id'=>$workCulture->id,
            'title' => "English Speaking",
        ]);
        $careerGrowth = EmployerAddInfoCategory::updateOrCreate([
            'title' => "Career Growth"
        ],[
            
            'title' => "Career Growth",
        ]);
        EmployerAddInfoOption::updateOrCreate([
            'title' => "360 degree Evaluation"
        ],[
             'employer_add_info_category_id'=>$careerGrowth->id,
            'title' => "360 degree Evaluation",
        ]);
        EmployerAddInfoOption::updateOrCreate([
            'title' => "Annual twice evaluation"
        ],[
             'employer_add_info_category_id'=>$careerGrowth->id,
            'title' => "Annual twice evaluation",
        ]);
        EmployerAddInfoOption::updateOrCreate([
            'title' => "Work directly under management"
        ],[
             'employer_add_info_category_id'=>$careerGrowth->id,
            'title' => "Work directly under management",
        ]);
        EmployerAddInfoOption::updateOrCreate([
            'title' => "Retention rate 95 % or more (353)"
        ],[
             'employer_add_info_category_id'=>$careerGrowth->id,
            'title' => "Retention rate 95 % or more (353)",
        ]);
        EmployerAddInfoOption::updateOrCreate([
            'title' => "Low Turnover Rate"
        ],[
             'employer_add_info_category_id'=>$careerGrowth->id,
            'title' => "Low Turnover Rate",
        ]);
        EmployerAddInfoOption::updateOrCreate([
            'title' => "Position Bounce (Junior to Senior)"
        ],[
             'employer_add_info_category_id'=>$careerGrowth->id,
            'title' => "Position Bounce (Junior to Senior)",
        ]);
        EmployerAddInfoOption::updateOrCreate([
            'title' => "Side job OK"
        ],[
             'employer_add_info_category_id'=>$careerGrowth->id,
            'title' => "Side job OK",
        ]);
        EmployerAddInfoOption::updateOrCreate([
            'title' => "New projects are brought in one after another."
        ],[
             'employer_add_info_category_id'=>$careerGrowth->id,
            'title' => "New projects are brought in one after another.",
        ]);
        EmployerAddInfoOption::updateOrCreate([
            'title' => "They have a clear vision."
        ],[
             'employer_add_info_category_id'=>$careerGrowth->id,
            'title' => "They have a clear vision.",
        ]);
        EmployerAddInfoOption::updateOrCreate([
            'title' => "No transfer to other branches"
        ],[
             'employer_add_info_category_id'=>$careerGrowth->id,
            'title' => "No transfer to other branches",
        ]);
        EmployerAddInfoOption::updateOrCreate([
            'title' => "No transfer (2270)"
        ],[
             'employer_add_info_category_id'=>$careerGrowth->id,
            'title' => "No transfer (2270)",
        ]);
        EmployerAddInfoOption::updateOrCreate([
            'title' => "High -growth enterprise (993 pieces)"
        ],[
             'employer_add_info_category_id'=>$careerGrowth->id,
            'title' => "High -growth enterprise (993 pieces)",
        ]);
        $salaryRange = EmployerAddInfoCategory::updateOrCreate([
            'title' => "Salary Range"
        ],[
            
            'title' => "Salary Range",
        ]);
        EmployerAddInfoOption::updateOrCreate([
            'title' => "10000"
        ],[
             'employer_add_info_category_id'=>$salaryRange->id,
            'title' => "10000",
        ]);
        EmployerAddInfoOption::updateOrCreate([
            'title' => "20000"
        ],[
             'employer_add_info_category_id'=>$salaryRange->id,
            'title' => "20000",
        ]);
        EmployerAddInfoOption::updateOrCreate([
            'title' => "30000"
        ],[
             'employer_add_info_category_id'=>$salaryRange->id,
            'title' => "30000",
        ]);
        EmployerAddInfoOption::updateOrCreate([
            'title' => "50000"
        ],[
             'employer_add_info_category_id'=>$salaryRange->id,
            'title' => "50000",
        ]);
        EmployerAddInfoOption::updateOrCreate([
            'title' => "100000+"
        ],[
             'employer_add_info_category_id'=>$salaryRange->id,
            'title' => "100000+",
        ]);
        $interviewSystem = EmployerAddInfoCategory::updateOrCreate([
            'title' => "Interview System"
        ],[
            
            'title' => "Interview System",
        ]);
        EmployerAddInfoOption::updateOrCreate([
            'title' => "One interview"
        ],[
             'employer_add_info_category_id'=>$interviewSystem->id,
            'title' => "One interview",
        ]);
        EmployerAddInfoOption::updateOrCreate([
            'title' => "More than One interview"
        ],[
             'employer_add_info_category_id'=>$interviewSystem->id,
            'title' => "More than One interview",
        ]);
        EmployerAddInfoOption::updateOrCreate([
            'title' => "Two Interviews"
        ],[
             'employer_add_info_category_id'=>$interviewSystem->id,
            'title' => "Two Interviews",
        ]);
        EmployerAddInfoOption::updateOrCreate([
            'title' => "Online Interviews"
        ],[
             'employer_add_info_category_id'=>$interviewSystem->id,
            'title' => "Online Interviews",
        ]);
        EmployerAddInfoOption::updateOrCreate([
            'title' => "Walk in Interviews "
        ],[
             'employer_add_info_category_id'=>$interviewSystem->id,
            'title' => "Walk in Interviews ",
        ]);
        EmployerAddInfoOption::updateOrCreate([
            'title' => "Interview with Top Management"
        ],[
             'employer_add_info_category_id'=>$interviewSystem->id,
            'title' => "Interview with Top Management",
        ]);
        EmployerAddInfoOption::updateOrCreate([
            'title' => "Interview with CEO"
        ],[
             'employer_add_info_category_id'=>$interviewSystem->id,
            'title' => "Interview with CEO",
        ]);
        EmployerAddInfoOption::updateOrCreate([
            'title' => "Weekday evening and weekend interviews available"
        ],[
             'employer_add_info_category_id'=>$interviewSystem->id,
            'title' => "Weekday evening and weekend interviews available",
        ]);
        EmployerAddInfoOption::updateOrCreate([
            'title' => "10 or more people to be hired"
        ],[
             'employer_add_info_category_id'=>$interviewSystem->id,
            'title' => "10 or more people to be hired",
        ]);
        EmployerAddInfoOption::updateOrCreate([
            'title' => "Interview with all applicants"
        ],[
             'employer_add_info_category_id'=>$interviewSystem->id,
            'title' => "Interview with all applicants",
        ]);
        $others = EmployerAddInfoCategory::updateOrCreate([
            'title' => "Others"
        ],[
            
            'title' => "Others",
        ]);
        EmployerAddInfoOption::updateOrCreate([
            'title' => "Various company events"
        ],[
             'employer_add_info_category_id'=>$others->id,
            'title' => "Various company events",
        ]);
        EmployerAddInfoOption::updateOrCreate([
            'title' => "Media coverage"
        ],[
             'employer_add_info_category_id'=>$others->id,
            'title' => "Media coverage",
        ]);
       
    }
}
