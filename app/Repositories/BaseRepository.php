<?php

namespace App\Repositories;

use App\Customer;
use App\Interfaces\IssuesCertificates;
use Illuminate\Support\Facades\Auth;

class BaseRepository implements IssuesCertificates
{
    protected $model;

    protected $with = [];

    function with(array $with = [])
    {
        $this->with = $with;

        return $this;
    }

    function all($columns = [])
    {
        return $this->model::with($this->with)->latest()->all($columns);
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
            return count($name) != 0 || !isNull($name);
        });

        return array_map(function ($name) {
            return $name;
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
        $attributes = $this->sanitizeBlankArrayAttributes($attributes, ['sponsors', 'parents']);
        $userId = Auth::id();

        $attributes['created_by'] = $userId;

        $customer = $this->createCustomer($attributes);

        $attributes['customer_id'] = $customer->id;

        $model = $this->model::create($attributes);

        $sponsors = $this->prepareSponsorNames($attributes['sponsors']);

        $parents = $this->prepareParentNames($attributes['parents']);

        $model->sponsors()->createMany($sponsors);

        $customer->parents()->createMany($parents);


        return $model;
    }

    private function sanitizeBlankArrayAttributes($attributes, array $indexNames)
    {
        foreach ($indexNames as $indexName) {
            if (!array_key_exists($indexName, $attributes)) {
                $attributes[$indexName] = [];
            }
        }

        return $attributes;
    }

    function update($attributes, $id)
    {
        $attributes = $this->sanitizeBlankArrayAttributes($attributes, ['sponsors', 'parents']);

        $model = $this->model::find($id);

        $model->update($attributes);

        $model->customer->update($attributes);

        $parents = $this->prepareParentNames($attributes['parents']);

        $sponsors = $this->prepareSponsorNames($attributes['sponsors']);

        $model->sponsors()->delete();

        $model->customer->parents()->delete();

        $model->sponsors()->createMany($sponsors);

        $model->customer->parents()->createMany($parents);

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
            ->load(['customer.parents'])
            ->customer
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
