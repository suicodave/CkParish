<?php

namespace App\Http\Controllers;

use App\Charts\CertificateIssuanceChart;

class CertificateIssuanceChartController extends Controller
{

    function index()
    {
        $chart = new CertificateIssuanceChart();

        $chart->labels(['Jan', 'Feb', 'Mar']);

        $chart->dataset('Baptismal', 'bar', [24, 6, 30])
            ->color("rgb(255, 99, 132)")
            ->backgroundcolor("rgb(255, 99, 132)");

        $chart->dataset('Confirmation', 'bar', [22, 62, 4])
            ->color("rgb(115, 99, 172)")
            ->backgroundcolor("rgb(115, 99, 172)");

        $chart->dataset('Marriage', 'bar', [12, 6, 16])
        ->color("rgb(213, 59, 72)")
            ->backgroundcolor("rgb(213, 59, 72)");

        return view('issuance-chart.index', [
            'chart' => $chart
        ]);
    }
}
