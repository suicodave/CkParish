<?php

namespace App\Http\Controllers;

use App\Repositories\Baptismal;
use App\StaticPermission;
use App\Traits\IssuesCertificate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BaptismIssuanceController extends Controller
{
    use IssuesCertificate;

    private $baptismal;

    protected $key = 'baptismal';

    protected $redirectCertificate = 'BaptismalPrintPreviewController@show';

    function __construct(Baptismal $baptismal)
    {
        $this->checkRoleOrPermissions(StaticPermission::ISSUE_BAPTISMAL_CERTIFICATE);

        $this->baptismal = $baptismal;
    }

    function create($baptismal)
    {
        $data = [
            'baptismal' => $baptismal
        ];

        return view('baptismal.issuance.create', $data);
    }

    public function store(Request $request)
    {
        $inputs = $request->all();

        $userId = Auth::id();

        $inputs['user_id'] = $userId;

        return $this->issueCertificate(
            $this->baptismal,
            $request->baptismal,
            $inputs
        );
    }
}
