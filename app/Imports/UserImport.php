<?php

namespace App\Imports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Facades\Hash;

class UserImport implements ToModel, WithHeadingRow
{
    use Importable;

    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

    public function model(array $row)
    {
        return new User([
            'role_id' => $row['role_id'],
            'department_id' => $row['department_id'],
            'name' => $row['name'],
            'email' => $row['email'],
            'password' => Hash::make($row['password']),
            'idNum' => $row['idnum']
        ]);
    }
}
