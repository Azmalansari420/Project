<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller; 
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use App\Helper\Helpers;


use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;


class AdminExcelController extends Controller
{
    public function export(Request $request)
    {
        $columns = "Name,Email,Mobile";
            $fileName = "client.xlsx";
            $where = array();
            $employeeData = DB::table('users')->limit(10)->get();

            $spreadsheet = new Spreadsheet();
            $sheet = $spreadsheet->getActiveSheet();
            $a_to_z = Helpers::a_to_z();
            
            $columns_array = explode(",", $columns);
            $i = 0;
            $j = 1;
            foreach ($columns_array as $key => $value)
            {
                $excel_field = $a_to_z[$i].$j;
                $col_name = ucfirst(str_replace("_", " ", $value));
                $sheet->setCellValue($excel_field, $col_name);
                $i++;
            }
            $rows = 2;
            foreach ($employeeData as $value)
            {
                $sheet->setCellValue("A" . $rows, $value->name);
                $sheet->setCellValue("B" . $rows, $value->email);
                $sheet->setCellValue("C" . $rows, $value->phone);
               
               $rows++;
            } 
            $writer = new Xlsx($spreadsheet);
            $writer->save("excel/".$fileName);
            header("Content-Type: application/vnd.ms-excel");
            $response_data['url'] = url('/')."excel/".$fileName;
            $response_data['status'] = '200';
            $response_data['message'] = 'Export Successfully';
            echo json_encode($response_data);
    }
    
}