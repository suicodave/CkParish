<?php

namespace App\Repositories;

use App\Confirmation;
use App\Interfaces\IssuesCertificates;

class ConfirmationCertificateIssuance extends BaseRepository implements IssuesCertificates
{

    protected $model = Confirmation::class;

    function issueCertificate($id, $attributes)
    {
        $model = $this->find($id);

        $certificate = $model->issuances()->create($attributes);

        return $certificate;
    }
}
