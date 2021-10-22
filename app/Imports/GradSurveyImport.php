<?php

namespace App\Imports;

use App\Models\GradSurvey;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\ToModel;

class GradSurveyImport implements ToModel, WithHeadingRow
{
    use Importable;
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new GradSurvey([
            'lastname' => $row['lastname'],
            'firstname' => $row['givenname'],
            'middlename' => $row['middlename'],
            'maidenname' => $row['maidenname'],
            'gender' => $row['gender'],
            'civilstatus' => $row['civilstatus'],
            'age' => $row['age'],
            'contact' => $row['contactnumber'],
            'email' => $row['emailaddress'],
            'yearGrad' => $row['year_grad'],
            'license' => $row['license'],
            'certifications' => $row['certificate'],
            'afterGrad' => $row['after_grad'],
            'empStatus' => $row['emp_status'],
            'reasonUnemployment' => $row['reason_unemployment'],
            'company' => $row['company'],
            'nature' => $row['nature'],
            'busType' => $row['bus_type'],
            'position' => $row['position'],
            'jobLevel' => $row['joblevel'],
            'dateStarted' => $row['date_started'],
            'salary' => $row['salary'],
            'inlineJob' => $row['inline'],
            'howLongAfterGrad' => $row['how_long'],
            'projs'=> $row['projs'],
            'proSuccess' => $row['pro_success'],
            'lifeLongLearning' => $row['life_long'],
            'projsWithLaws' => $row['projs_law'],
            'goodExample' => $row['good_example'],
            'personalStandards' => $row['personal_standard']
        ]);
    }
}
