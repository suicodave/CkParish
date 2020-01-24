<?php

namespace App\Http\Controllers;

use App\Repositories\Marriage;
use App\StaticPermission;
use App\Traits\IssuesCertificate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MarriageIssuanceController extends Controller
{
    use IssuesCertificate;

    private $marriage;

    protected $key = 'marriage';

    protected $redirectCertificate = 'MarriagePrintPreviewController@show';

    function __construct(Marriage $marriage)
    {
        $this->checkRoleOrPermissions(StaticPermission::ISSUE_MARRIAGE_CERTIFICATE);

        $this->marriage = $marriage;
    }

    function create($marriage)
    {
        $data = [
            'marriage' => $marriage
        ];

        return view('marriage.issuance.create', $data);
    }

    public function store(Request $request)
    {
        $inputs = $request->all();

        $userId = Auth::id();

        $inputs['user_id'] = $userId;

        return $this->issueCertificate(
            $this->marriage,
            $request->marriage,
            $inputs
        );
    }
}
