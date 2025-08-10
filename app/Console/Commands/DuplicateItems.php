<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use App\models\Category;
class DuplicateItems extends Command
{
    protected $signature = 'import:categories';
    protected $description = 'Import categories from Excel file into database';

    public function handle()
    {
        $filePath = storage_path('app/public/categories.xlsx'); // مسیر فایل Excel

        if (!file_exists($filePath)) {
            $this->error("فایل یافت نشد: $filePath");
            return Command::FAILURE;
        }

        $spreadsheet = IOFactory::load($filePath);
        $sheet = $spreadsheet->getActiveSheet();
        $rows = $sheet->toArray();

        foreach ($rows as $row) {
            $title = trim($row[0]);
            if (!empty($title)) {
                Category::create([
                    'title' => $title,
                    'type' => 'productcat',
					'slug'	=> $title,
                    'published' => 1,
                    'category_id' => null,
                ]);
            }
        }

        $this->info('دسته‌بندی‌ها با موفقیت وارد شدند.');
        return Command::SUCCESS;
    }
}
