<?php

namespace App\Http\Controllers;

use App\Repositories\ConfirmationCertificateIssuance;
use App\Repositories\Confirmation;
use App\Traits\IssuesCertificate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConfirmationIssuanceController extends Controller
{
    use IssuesCertificate;

    private $confirmation;
    private $certificate;

    protected $redirectCertificate = 'confirmations.print-preview';

    function __construct(Confirmation $confirmation, ConfirmationCertificateIssuance $certificate)
    {
        $this->middleware('auth');

        $this->confirmation = $confirmation;

        $this->certificate = $certificate;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($confirmation)
    {
        $data = [
            'confirmation' => $confirmation
        ];
        return view('confirmation.issuance.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inputs = $request->all();

        $userId = Auth::id();

        $inputs['user_id'] = $userId;

        return $this->issueCertificate($this->certificate, $request->confirmation, $inputs);
    }
}
