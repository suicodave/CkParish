<?php

namespace App\Http\Controllers;

use App\Baptismal;
use Illuminate\Http\Request;
use PDF;

class BaptismalPrintPreviewController extends Controller
{
    function show(Baptismal $baptismal, Request $request)
    {
        $baptismal->load(['sponsors', 'customer.parents']);

        $config = config('confirmation');

        $parents = implode(
            ' and ',
            $baptismal
                ->customer
                ->parents
                ->pluck('name')
                ->all()
        );

        $watermark = asset('baptism.png');

        $sponsors = $baptismal->sponsors
            ->pluck('name')
            ->all();

        $sponsors = array_chunk($sponsors, 4);

        $pdf = PDF::loadView('baptismal.print-preview.index', [
            'baptismal' => $baptismal,
            'config' => $config,
            'priest' => ucwords($request->priest),
            'watermark' => $watermark,
            'purpose' => ucwords($request->purpose),
            'sponsors' => $sponsors,
            'issueId' => $request->issueId,
            'parents' => $parents
        ])
            ->setPaper('A4')
            ->setOption('margin-bottom', 5)
            ->setOption('margin-left', 5)
            ->setOption('margin-right', 5)
            ->setOption('margin-top', 5);

        return $pdf->stream('Baptismal.pdf');
    }
}
