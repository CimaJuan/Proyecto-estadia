<?php

namespace App\Exports;

use App\Models\Registros;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class RegistrosExport extends \PhpOffice\PhpSpreadsheet\Cell\StringValueBinder implements FromView, ShouldAutoSize
{
    public function view(): View
    {
        return view('exports.registros', [
            'registros' => Registros::all()
        ]);

    }

    
}
