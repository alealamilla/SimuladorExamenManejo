<?php

namespace App\Exports;

use App\Models\Usuario;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class UsersExport implements FromArray, ShouldAutoSize, WithHeadings, WithMapping, WithStyles
{
    protected $data;

    public function __construct($data)
    {
        $this->data = $data;
    }
    /**
     * @return array
     * */

    public function headings(): array
    {
        $headings = [];
        foreach ($this->data->toArray()[0] as $key => $value) {
            $headings[] = Usuario::HEADINGS[$key];
        }

        return $headings;
    }

    public function array(): array
    {
        return $this->data->toArray();
    }

    public function map($row): array
    {

        return [
            $row['id'],
            $row['nombres'],
            $row['apellidos'],
            $row['correo'],
            $row['descripcion'],
            $row['titulo'],
            $row['area']['area'],
            $row['cargo']['cargo'],

        ];
    }

    public function styles(Worksheet $sheet)
    {
        $sheet->getStyle('1')->getFont()->setBold(true);
        $sheet->getStyle('A1:H1')->getFill()->setFillType('solid')->getStartColor()->setARGB('88A9D2');
        $sheet->getStyle('A1:H' . ($this->data->count() + 1))->getBorders()->getAllBorders()->setBorderStyle('thin');
    }
}
