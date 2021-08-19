<?php

namespace App\Helpers;

use App\Models\SantriModel;
use CodeIgniter\HTTP\Files\UploadedFile;
use PhpOffice\PhpSpreadsheet\IOFactory;

class SantriHelper
{
    public static $santri = [];

    public static function importExcel(UploadedFile $excel)
    {
        $spreadsheet = IOFactory::load($excel->getTempName());
        $sheets = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);
        array_shift($sheets);

        array_map(function ($sheet) {
            static::$santri[] = [
                'registration_number' => $sheet['A'],
                'fullname' => $sheet['B'],
                'born_place' => $sheet['C'],
                'born_date' => $sheet['D'],
                'domicile_block' => $sheet['E'],
                'educational_institute' => $sheet['F']
            ];
        }, $sheets);

        return model(SantriModel::class)->insertBatch(static::$santri);
    }
}
