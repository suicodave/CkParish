<?php

namespace App\Http\Controllers;

use App\Repositories\CertificateIssuance;
use Illuminate\Http\Request;

class CertificateIssuanceController extends Controller
{
    private $certificateIssuance;

    function __construct(CertificateIssuance $certificateIssuance)
    {
        $this->certificateIssuance = $certificateIssuance;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $certificates = $this->certificateIssuance->paginate();

        return view('certificate-issuance.index', [
            'certificates' => $certificates
        ]);
    }
}
