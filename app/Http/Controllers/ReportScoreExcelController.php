<?php

namespace App\Http\Controllers;

use App\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;
class ReportScoreExcelController implements FromCollection
{
    use Exportable;

    public function collection()
    {
        return User::all();
    }
}
