<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;
class ReportUserExcelController implements FromCollection
{
    use Exportable;

    public function collection()
    {
        return User::all();
    }
}
