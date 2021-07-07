<?php

namespace Stolentine\Excel\Export;

use Stolentine\Excel\Table;
use Illuminate\Contracts\Support\Responsable;

interface IExcelExport extends Responsable
{
    public function setTable(Table $table): IExcelExport;

    public function setFileName(string $fileName): IExcelExport;
}
