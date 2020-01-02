<?php

namespace App\Http\Controllers;

use App\Confirmation;
use App\StaticPermission;
use Faker\Factory;
use Illuminate\Http\Request;
use PDF;

class ConfirmationPrintPreviewController extends Controller
{
    function __construct()
    {
        $this->checkRoleOrPermissions(StaticPermission::ISSUE_CONFIRMATION_CERTIFICATE);
    }

    function show(Confirmation $confirmation, Request $request)
    {
        $confirmation->load(['sponsors', 'parents']);

        $faker = Factory::create();

        $config = config('confirmation');

        $watermark = asset('flame.svg');

        $parents = implode(' and ', $confirmation->parents->pluck('name')->all());

        $sponsors = $confirmation->sponsors->pluck('name')->all();

        $sponsors = array_chunk($sponsors, 4);

        $pdf = PDF::loadView('confirmation.print-preview.index', [
            'confirmation' => $confirmation,
            'config' => $config,
            'priest' => ucwords($request->priest),
            'faker' => $faker,
            'watermark' => $watermark,
            'purpose' => ucwords($request->purpose),
            'sponsors' => $sponsors,
            'parents' => $parents
        ])
            ->setPaper('A4')
            ->setOption('margin-bottom', 5)
            ->setOption('margin-left', 5)
            ->setOption('margin-right', 5)
            ->setOption('margin-top', 5);


        return $pdf->stream('Confirmation.pdf');
    }
}
