<?php

namespace Stolentine\Excel\Export\Adaptors;

use Stolentine\Excel\Export\IExcelExport;
use Stolentine\Excel\Table;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Excel;

class MaatwebsiteAdaptor implements IExcelExport, FromArray, WithHeadings
{
    use Exportable;

    private ?Table $table = null;

    /**
     * Тип данных.
     */
    private $writerType = Excel::CSV; //todo

    /**
     * Заголовки.
     */
    private $headers = [
        'Content-Type' => 'text/csv'
    ];

    public function setTable(Table $table): IExcelExport
    {
        $this->table = $table;

        return $this;
    }

    public function setFileName(string $fileName): IExcelExport
    {
        $this->fileName = $fileName;

        return $this;
    }

    public function headings(): array
    {
        return $this->table->headings;
    }

    public function array(): array
    {
        return $this->table->rows;
    }
}
