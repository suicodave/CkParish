<?php

namespace App\Interfaces;

interface IssuesCertificates
{
    function issueCertificate($issuableId, $inputs);
}
