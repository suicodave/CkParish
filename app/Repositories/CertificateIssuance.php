<?php

namespace App\Repositories;

use App\Baptismal;
use App\CertificateIssuance as AppCertificateIssuance;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class CertificateIssuance extends BaseRepository
{
    protected $model = AppCertificateIssuance::class;

    function paginate($items = 15)
    {
        return $this->model::with([
            'issuable' => function (MorphTo $morphTo) {
                $morphTo->morphWith([
                    Baptismal::class => ['customer'],
                    Confirmation::class => ['customer'],
                    Marriage::class => ['participants']
                ]);
            }
        ])
            ->latest()
            ->paginate($items);
    }
}
