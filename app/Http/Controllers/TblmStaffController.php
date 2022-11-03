<?php

namespace App\Http\Controllers;

use App\Services\TblmStaffService;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Mail;

class TblmStaffController extends Controller
{
    public function __construct(
        protected TblmStaffService $tblmStaffService
    ) {
    }

    public function index()
    {    
        return view('admin.user.index');
    }

    public function show(Request $request)
    {            
        $users = $this->tblmStaffService->getAllFromTo($request);

        return view('admin.user.show', compact('users','request'));
    }

    public function pdfDownload(Request $request)
    {
        $users = $this->tblmStaffService->getAllFromTo($request);
        $pdf = Pdf::loadView('admin.user.pdfview', compact('users'));
        // Mail::send('admin.user.mail', compact('request'), function ($message) use ($request, $pdf) {
        //     $message->to($request->email, $request->email)
        //         ->subject("Test send mail Staff")
        //         ->attachData($pdf->output(), 'tblmstaff-'.$request->from.'-'. $request->to .'.pdf');
        // });         
        // return $pdf->download('tblmstaff-'.$request->from.'-'. $request->to .'.pdf');
        return $pdf->stream('tblmstaff-'.$request->from.'-'. $request->to .'.pdf');
    }
}