<?php

namespace App\Http\Controllers;

use App\Repositories\ConfirmationCertificateIssuance;
use App\Repositories\Confirmation;
use App\StaticPermission;
use App\Traits\IssuesCertificate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConfirmationIssuanceController extends Controller
{
    use IssuesCertificate;

    private $confirmation;

    protected $redirectCertificate = 'confirmations.print-preview';

    function __construct(Confirmation $confirmation)
    {
        $this->checkRoleOrPermissions(StaticPermission::ISSUE_CONFIRMATION_CERTIFICATE);

        $this->confirmation = $confirmation;

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

        return $this->issueCertificate($this->confirmation, $request->confirmation, $inputs);
    }
}
