<?php

namespace App\Http\Controllers;

use App\Confirmation;
use Faker\Factory;
use PDF;

class ConfirmationPrintPreviewController extends Controller
{
    function show(Confirmation $confirmation)
    {
        $faker = Factory::create();

        $config = config('confirmation');

        $watermark = asset('flame.svg');

        $sponsors = [];

        for ($i = 0; $i < 15; $i++) {
            $sponsors[] = $faker->name;
        }

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

        // return view('confirmation.print-preview.index', [
        //     'confirmation' => $confirmation,
        //     'config' => $config,
        //     'faker' => $faker
        // ]);
    }
}
