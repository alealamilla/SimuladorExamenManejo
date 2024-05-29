<?php

namespace App\Exports;

use App\Models\clientes;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class ClientsExport implements FromArray, WithHeadings, ShouldAutoSize, WithStyles, WithMapping
{
    protected $data;

    public function __construct($data)
    {
        $this->data = $data;
    }
    //     /**
    //     * @return \Illuminate\Support\Collection
    //     */
    //     public function collection()
    //     {
    //         return clientes::all();
    //     }
    // }

    public function headings(): array
    {
        $headings = [];
        foreach ($this->data->toArray()[0] as $key => $value) {
            $headings[] = clientes::HEADINGS[$key];
        }

        return $headings;
    }

    /**
     * @return array
     * */
    public function array(): array
    {
        return $this->data->toArray();
    }


    public function styles(Worksheet $sheet)
    {
        $sheet->getStyle('1')->getFont()->setBold(true);
        $sheet->getStyle('A1:I1')->getFill()->setFillType('solid')->getStartColor()->setARGB('88A9D2');
        $sheet->getStyle('A1:I' . ($this->data->count() + 1))->getBorders()->getAllBorders()->setBorderStyle('thin');
    }

    public function map($row): array
    {
        
        return [
            $row['id'],
            $row['compañia'],
            $row['representante'],
            $row['telefono'],
            $row['movil'],
            $row['email'],
            $row['rfc'],
            $row['notas'],
            $row['empleado']['nombres'],

        ];
    }
}
