<?php
include('../../functions.php');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xls;


$column_alphanumerics = range('B', 'H');
$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->setActiveSheetIndex(0);
$column = 2;
$number = 1;
// Set Header
foreach ($column_alphanumerics as $column_alphanumeric) {
    $sheet->setCellValue("B$column", "No")
        ->setCellValue("C$column", "ID Pinjaman")
        ->setCellValue("D$column", "ID Anggota Peminjam")
        ->setCellValue("E$column", "Nama Peminjam")
        ->setCellValue("F$column", "Tanggal Peminjaman")
        ->setCellValue("G$column", "Tanggal Pengembalian")
        ->setCellValue("H$column", "Daftar Buku")->getColumnDimension($column_alphanumeric)->setAutoSize(true);
}
$column++;

$extra_query = $_GET['type'] == "lend" ? "" : "WHERE lends.return_date IS NOT NULL";
$results = query("SELECT *, lends.id as lend_id
  FROM lends
  JOIN members ON lends.member_id = members.id
  $extra_query"
);
foreach($results as $result) {
    $books = lend_books($result['lend_id']);
    $book_titles = [];
    foreach($books as $book) {
      $book_titles[] = $book['title'];
    }
    $book_titles = join(", ", $book_titles);
    $sheet->setCellValue("B$column", $number)
    ->setCellValue("C$column", $result['number'])
    ->setCellValue("D$column", $result['member_number'])
    ->setCellValue("E$column", $result['name'])
    ->setCellValue("F$column", format_date($result['lend_date']))
    ->setCellValue("G$column", format_date($result['return_date']))
    ->setCellValue("H$column", $book_titles)->getColumnDimension($column_alphanumeric)->setAutoSize(true);
    $number++;
    $column++;
}

$file_name = '[PERPUSTAKAAN - DAFTAR TRANSAKSI]' . date('d-m-Y');
ob_end_clean();
header('Content-Disposition: attachment;filename="' . $file_name . '.xls"');
$writer = new Xls($spreadsheet);
$writer->save('php://output');