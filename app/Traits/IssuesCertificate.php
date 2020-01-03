<?php

namespace App\Traits;

use App\Interfaces\IssuesCertificates;

trait IssuesCertificate
{

    function issueCertificate(IssuesCertificates $repository, $issuableId, $inputs)
    {

        $certificate = $repository->issueCertificate($issuableId, $inputs);

        return redirect()->route($this->redirectCertificate, [
            'confirmation' => request()->confirmation,
            'purpose' => request()->purpose,
            'priest' => request()->priest_name,
            'issueId' => $certificate->id
        ]);
    }
}
