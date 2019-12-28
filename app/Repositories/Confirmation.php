<?php

namespace App\Repositories;

use App\Confirmation as AppConfirmation;

class Confirmation extends BaseRepository
{
    protected $model = AppConfirmation::class;

    function create($attributes)
    {
        $customer = $this->createCustomer($attributes);

        $attributes['customer_id'] = $customer->id;

        $confirmation = $this->model::create($attributes);

        $sponsors = $this->prepareSponsorNames($attributes['sponsors']);

        $confirmation->sponsors()->createMany($sponsors);

        return $confirmation;
    }

    function update($attributes, $id)
    {
        $confirmation = $this->model::find($id);

        $confirmation->update($attributes);

        $confirmation->customer->update($attributes);

        $sponsors = $this->prepareSponsorNames($attributes['sponsors']);

        $confirmation->sponsors()->delete();

        $confirmation->sponsors()->createMany($sponsors);

        return $confirmation;
    }

    function getConfirmation($id)
    {
        $confirmation = $this->model::find($id);

        $sponsors = $confirmation
            ->load(['sponsors'])
            ->sponsors
            ->pluck('name')
            ->map(function ($sponsor) {
                return [
                    'value' => $sponsor
                ];
            })
            ->all();

        return [
            'confirmation' => $confirmation,
            'sponsors' => $sponsors
        ];
    }
}
