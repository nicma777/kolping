<?php

namespace App\Http\Controllers;

use App\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\TemplateProcessor;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $patient = Patient::where('id',$id)->first();
        $patient->ready = TRUE;
        $patient->save();

        $template = new \PhpOffice\PhpWord\TemplateProcessor('template.docx');
        $template->setValue('name', $patient->name." ". $patient->lastname);
        $template->setValue('svnr', $patient->svnr);
        $template->setValue('todayDate', Carbon::now()->format('d-m-Y'));
        $template->setValue('billnumber', "00".$patient->billnumber);
        $template->setValue('boss', $patient->boss);
        $template->setValue('street', $patient->street);
        $template->setValue('town', $patient->town);
        $template->setValue('date1', $patient->date1);
        $template->setValue('date2', $patient->date2);
        $template->setValue('date3', $patient->date3);
        $template->setValue('date4', $patient->date4);
        $template->setValue('date5', $patient->date5);
        $template->setValue('date6', $patient->date6);
        $template->setValue('date7', $patient->date7);
        $template->setValue('date8', $patient->date8);
        $template->setValue('date9', $patient->date9);
        $template->setValue('date10', $patient->date10);
        $template->setValue('lnbn', $patient->lastname."00".$patient->billnumber);

        $this->renewPatient($id);

        $fileName = $patient->name."_".$patient->lastname.'.docx';
        $template->saveAs(public_path('Klijenti/'.$fileName));
        return back();
        //return response()->download(public_path($patient->name."_".$patient->lastname.'.docx'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function renewPatient($id)
    {
        $patient = Patient::where('id',$id)->first();
        $maxBill = Patient::max('billnumber');
        $phenix = new Patient;
        $phenix->billnumber = $maxBill+1;
        $phenix->name = $patient->name;
        $phenix->lastname = $patient->lastname;
        $phenix->svnr = $patient->svnr;
        $phenix->boss = $patient->boss;
        $phenix->street = $patient->street;
        $phenix->town = $patient->town;
        $phenix->save();
        // return $request;
        // $template = new \PhpOffice\PhpWord\TemplateProcessor('Rechnung-Berger.docx');
        // $template->setValue('name', 'nadsadasdme');
       
        // $section = $phpWord->addSection();
        // $text = $section->addText($request->get('name'));
        // $text = $section->addText($request->get('email'));
        // $text = $section->addText($request->get('number'),array('name'=>'Arial','size' => 20,'bold' => true)); 
        // $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
        // $template->saveAs('Appdividend.docx');
        // return response()->download(public_path('Appdividend.docx'));
    }
}
