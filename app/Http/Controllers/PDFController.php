<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Automovel;
use PDF;
  
class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generateUserPDF()
    {
        $users = User::get();
  
        $data = [
     
            'date' => date('m/d/Y'),
            'users' => $users
        ]; 
            
        $pdf = PDF::loadView('userPDF', $data);
     
        return $pdf->download('Relatório_Usuarios_Jagunço.pdf');
    }

    public function generateAutomovelPDF()
    {
        $automoveis = Automovel::get();
  
        $data = [
     
            'date' => date('m/d/Y'),
            'automoveis' => $automoveis,
        ]; 
            
        $pdf = PDF::loadView('automovelPDF', $data);
     
        return $pdf->download('Relatório_Automoveis_Jagunço.pdf');
    }
}