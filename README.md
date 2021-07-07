Пакет-прослойка для работы с файлами EXCEL.

Позволяет абстрагироваться от конкретных реализаций библиотек.

## Пример создания экспорта.

```php
use Stolentine\Excel\Export\IExcelExport;
use Stolentine\Excel\Table;

class ExportController extends \Illuminate\Routing\Controller {
    
    public function export(IExcelExport $excelExport){
        // любые данные
        $data = [
            ['foo0', 'baz0', 'bar0'],
            ['foo1', 'baz1', 'bar1'],
            ['foo2', 'baz2', 'bar2'],
        ];
        
        // заголовки колонок
        $headings = [
            'FooHeader',
            'BazHeader',
            'BarHeader',
        ];
        
        // скачивание файла. В конце файл удалится.
        return $excelExport->setTable(
            new Table($data, $headings)
        )->setFileName('examplName.csv');
    }
}
```
Содержание файла:
```csv
"FooHeader","BazHeader","BarHeader"
"foo0","baz0","bar0"
"foo1","baz1","bar1"
"foo2","baz2","bar2"
```

####Todo
* добавить тип возвращаемого значения
* сохранение файла в файловой системе
* установку заголовков