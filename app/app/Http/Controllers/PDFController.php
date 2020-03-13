<?php

namespace App\Http\Controllers;

use App\Note;
use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function download()
    {
        $notes = Note::all();
        $pdf = \PDF::loadView('pdf.pdf', ['notes' => $notes]);
        return $pdf->stream('invoice.pdf');
    }
}
