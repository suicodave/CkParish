<?php

namespace App\Repositories;

use App\Customer;
use App\Interfaces\IssuesCertificates;

class BaseRepository implements IssuesCertificates
{
    protected $model;

    function all($columns = [])
    {
        return $this->model::latest()->all();
    }

    function paginate($items = 15)
    {
        return $this->model::latest()->paginate($items);
    }

    function find($id)
    {
        return $this->model::find($id);
    }

    function createCustomer($attributes)
    {
        $customer = Customer::create($attributes);

        return $customer;
    }

    function prepareNameList($names)
    {
        $names = array_filter($names, function ($name) {
            return trim($name) != '';
        });
        return array_map(function ($name) {
            return [
                'name' => $name
            ];
        }, $names);
    }

    function prepareSponsorNames($names)
    {
        return $this->prepareNameList($names);
    }

    function prepareParentNames($names)
    {
        return $this->prepareNameList($names);
    }

    function create($attributes)
    {
        $customer = $this->createCustomer($attributes);

        $attributes['customer_id'] = $customer->id;

        $model = $this->model::create($attributes);

        $sponsors = $this->prepareSponsorNames($attributes['sponsors']);

        $parents = $this->prepareParentNames($attributes['parents']);

        $model->sponsors()->createMany($sponsors);

        $model->parents()->createMany($parents);

        return $model;
    }

    function update($attributes, $id)
    {
        $model = $this->model::find($id);

        $model->update($attributes);

        $model->customer->update($attributes);

        $parents = $this->prepareParentNames($attributes['parents']);

        $sponsors = $this->prepareSponsorNames($attributes['sponsors']);

        $model->sponsors()->delete();

        $model->parents()->delete();

        $model->sponsors()->createMany($sponsors);

        $model->parents()->createMany($parents);

        return $model;
    }

    function show($id)
    {
        $model = $this->model::find($id);

        $sponsors = $model
            ->load(['sponsors'])
            ->sponsors
            ->pluck('name')
            ->map(function ($sponsor) {
                return [
                    'value' => $sponsor
                ];
            })
            ->all();

        $parents = $model
            ->load(['parents'])
            ->parents
            ->pluck('name')
            ->map(function ($sponsor) {
                return [
                    'value' => $sponsor
                ];
            })
            ->all();


        return [
            'model' => $model,
            'sponsors' => $sponsors,
            'parents' => $parents
        ];
    }

    function issueCertificate($id, $attributes)
    {
        $model = $this->find($id);

        $certificate = $model->issuances()->create($attributes);

        return $certificate;
    }
}
