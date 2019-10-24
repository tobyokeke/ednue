<?php

namespace App\Http\Controllers;

use App\member;
use Carbon\Carbon;
use Illuminate\Http\Request;
use PHPExcel;
use PHPExcel_IOFactory;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
    	$members = member::paginate(30);
        return view('home',[
        	'members' => $members,
	        'from' => collect($members)->get('from')
        ]);
    }

	public function exportRegistrations(Request $request)
	{

		$start = $request->input('start');
		$end = $request->input('end');

		if (!empty($start)) {
			// parse start date
			$date = explode("-", $start);
			$startDate = Carbon::createFromDate("20" .$date[2], $date[0], $date[1]);
		} else $startDate = Carbon::now()->startOfYear();

		// 2-2-2019
		if (!empty($end)) {
			// parse end date
			$date = explode("-", $end);
			$endDate = Carbon::createFromDate("20" . $date[2], $date[0], $date[1]);

		} else $endDate = Carbon::now();


		$data = member::where('created_at', '>=', $startDate->startOfDay())->where('created_at', '<=', $endDate->endOfDay())->get();

		$serialNumber = 1;

		$count = count($data);

		$objPHPExcel = new PHPExcel();

		$objPHPExcel->getProperties()->setCreator("System")
		            ->setTitle("$count - Registrations from $start - $end - ")
		            ->setSubject("Ednue Registrations Export");

		$cell = 2;

		foreach ($data as $member) {



//				try {

					$objPHPExcel->setActiveSheetIndex(0)->setCellValue('A1', "S/N");
					$objPHPExcel->setActiveSheetIndex(0)->setCellValue('A' . $cell, $serialNumber);

					$objPHPExcel->setActiveSheetIndex(0)->setCellValue('B1', "NAME");
					$objPHPExcel->setActiveSheetIndex(0)->setCellValue('B' . $cell, $member->name);

					$objPHPExcel->setActiveSheetIndex(0)->setCellValue('C1', "PHONE");
					$objPHPExcel->setActiveSheetIndex(0)->setCellValueExplicit('C' . $cell, $member->phone,\PHPExcel_Cell_DataType::TYPE_STRING);

					$objPHPExcel->setActiveSheetIndex(0)->setCellValue('D1', "EMAIL");
					$objPHPExcel->setActiveSheetIndex(0)->setCellValue('D' . $cell, $member->email);

					$objPHPExcel->setActiveSheetIndex(0)->setCellValue('E1', "DOB");
					$objPHPExcel->setActiveSheetIndex(0)->setCellValue('E' . $cell, $member->dob);

					$objPHPExcel->setActiveSheetIndex(0)->setCellValue('F1', "ADDRESS");
					$objPHPExcel->setActiveSheetIndex(0)->setCellValue('F' . $cell, $member->address);

					$objPHPExcel->setActiveSheetIndex(0)->setCellValue('G1', "POLITICALLY INCLINED");
					$objPHPExcel->setActiveSheetIndex(0)->setCellValue('G' . $cell, $member->politically_inclined);

					$objPHPExcel->setActiveSheetIndex(0)->setCellValue('H1', "HIGHEST EDUCATION");
					$objPHPExcel->setActiveSheetIndex(0)->setCellValue('H' . $cell, $member->highest_education);

					$objPHPExcel->setActiveSheetIndex(0)->setCellValue('I1', "WISH");
					$objPHPExcel->setActiveSheetIndex(0)->setCellValue('I' . $cell, $member->wish);

					$objPHPExcel->setActiveSheetIndex(0)->setCellValue('J1', "DATE REGISTERED");
					$objPHPExcel->setActiveSheetIndex(0)->setCellValue('J' . $cell, $member->created_at->toDateString());



//				} catch (\Exception $exception) {
//				}
				$cell++;
				$serialNumber++;

		}

		$fileName = "Ednue Registrations Export_" . $start . "-" . $end . ".xlsx";

		// Set active sheet index to the first sheet, so Excel opens this as the first sheet
		$objPHPExcel->setActiveSheetIndex(0);

		$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
		$objWriter->save($fileName);

		rename($fileName, 'exports/' . $fileName);
		return response()->download('exports/' . $fileName);

	}

	public function logout() {
		auth()->logout();
		session()->flash('success','Logged Out.');
		return redirect('/');
	}

}
