<?php

namespace App\Http\Controllers;

use App\Confirmation;
use Faker\Factory;
use PDF;

class ConfirmationPrintPreviewController extends Controller
{
    function show(Confirmation $confirmation)
    {
        $confirmation->load('sponsors');

        $faker = Factory::create();

        $config = config('confirmation');

        $watermark = asset('flame.svg');

        $sponsors = $confirmation->sponsors->pluck('name')->all();

        $sponsors = array_chunk($sponsors, 4);

        $pdf = PDF::loadView('confirmation.print-preview.index', [
            'confirmation' => $confirmation,
            'config' => $config,
            'faker' => $faker,
            'watermark' => $watermark,
            'purposes' => ['Work', 'Medical', 'Multi'],
            'sponsors' => $sponsors
        ])
            ->setPaper('A4')
            ->setOption('margin-bottom', 5)
            ->setOption('margin-left', 5)
            ->setOption('margin-right', 5)
            ->setOption('margin-top', 5);


        return $pdf->stream('Confirmation.pdf');
    }
}
