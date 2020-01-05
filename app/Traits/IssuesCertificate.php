<?php

namespace App\Traits;

use App\Interfaces\IssuesCertificates;

trait IssuesCertificate
{

    function issueCertificate(IssuesCertificates $repository, $issuableId, $inputs)
    {

        $certificate = $repository->issueCertificate($issuableId, $inputs);

        return redirect()->action($this->redirectCertificate, [
            $this->key => request()->{$this->key},
            'purpose' => request()->purpose,
            'priest' => request()->priest_name,

        ])->with(['issueId' => $certificate->id]);
    }
}
