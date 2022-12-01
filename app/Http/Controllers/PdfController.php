<?php

namespace App\Http\Controllers;

use App\Models\Detail;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{
    public function users(){
        $user=User::where('role',3)->get();
        $pdf = Pdf::loadView('pdf.users', compact('user'));
        return $pdf->download('users.pdf');
    }

    public function firms(){
      
        $firm=Detail::join('users','users.id','=','details.user_id')->where('users.role',1)->get();
       
        $pdf = Pdf::loadView('pdf.firms', compact('firm'));
        return $pdf->download('firms.pdf');
    }

    public function technicians(){
        $technician=Detail::join('users','users.id','=','details.user_id')->where('users.role',2)->get();
        $pdf = Pdf::loadView('pdf.technicians', compact('technician'));
        return $pdf->download('technician.pdf');
    }

    public function services(){
        $service=Service::get();
        $pdf = Pdf::loadView('pdf.services', compact('service'));
        return $pdf->download('service.pdf');
    }
}
