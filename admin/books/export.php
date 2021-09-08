<?php
include('../../functions.php');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xls;


$column_alphanumerics = range('B', 'G');
$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->setActiveSheetIndex(0);
$column = 2;
$number = 1;
// Set Header
foreach ($column_alphanumerics as $column_alphanumeric) {
    $sheet->setCellValue("B$column", "No")
        ->setCellValue("C$column", "Penulis")
        ->setCellValue("D$column", "Judul")
        ->setCellValue("E$column", "Kategori")
        ->setCellValue("F$column", "Jumlah Halaman")
        ->setCellValue("G$column", "Status")->getColumnDimension($column_alphanumeric)->setAutoSize(true);
}
$column++;
$books = all("books");
foreach($books as $book) {
    $sheet->setCellValue("B$column", $number)
    ->setCellValue("C$column", $book['author'])
    ->setCellValue("D$column", $book['title'])
    ->setCellValue("E$column", $book['category'])
    ->setCellValue("F$column", $book['pages'])
    ->setCellValue("G$column", $book['is_borrowed'] == "0" ? 'Tersedia' : 'Dipinjam')->getColumnDimension($column_alphanumeric)->setAutoSize(true);
    $number++;
    $column++;
}


$file_name = '[PERPUSTAKAAN - DAFTAR BUKU]' . date('d-m-Y');
ob_end_clean();
header('Content-Disposition: attachment;filename="' . $file_name . '.xls"');
$writer = new Xls($spreadsheet);
$writer->save('php://output');