<?php
include('../../functions.php');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xls;


$column_alphanumerics = range('B', 'E');
$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->setActiveSheetIndex(0);
$column = 2;
$number = 1;
// Set Header
foreach ($column_alphanumerics as $column_alphanumeric) {
    $sheet->setCellValue("B$column", "No")
        ->setCellValue("C$column", "Nama")
        ->setCellValue("D$column", "Email")
        ->setCellValue("E$column", "No. HP")
        ->setCellValue("F$column", "Gender")->getColumnDimension($column_alphanumeric)->setAutoSize(true);
}
$column++;
$members = all("members");
foreach($members as $member) {
    $sheet->setCellValue("B$column", $number)
    ->setCellValue("C$column", $member['name'])
    ->setCellValue("D$column", $member['email'])
    ->setCellValue("E$column", $member['phone'])
    ->setCellValue("F$column", $member['gender'] == "0" ? 'Laki-laki' : 'Perempuan')->getColumnDimension($column_alphanumeric)->setAutoSize(true);
    $number++;
    $column++;
}


$file_name = '[PERPUSTAKAAN - DAFTAR ANGGOTA]' . date('d-m-Y');
ob_end_clean();
header('Content-Disposition: attachment;filename="' . $file_name . '.xls"');
$writer = new Xls($spreadsheet);
$writer->save('php://output');