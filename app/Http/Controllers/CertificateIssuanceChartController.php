<?php

namespace App\Http\Controllers;

use App\Charts\CertificateIssuanceChart;

class CertificateIssuanceChartController extends Controller
{

    function index()
    {
        $chart = new CertificateIssuanceChart();

        $months = $chart->months;

        $chart->labels($months);

        $datasets = $chart->getIssuableTypes();

        if ($chart->hasIssuableTypes()) {
            foreach ($datasets as $dataset) {

                $counts = [];

                foreach ($months as $month) {
                    $counts[] = $chart->getData($month, $dataset) || 0;
                }

                $chart->dataset($dataset, 'bar', $counts)
                    ->color("rgb({$this->randomRGB()}}, {$this->randomRGB()},{$this->randomRGB()})")
                    ->backgroundcolor("rgb({$this->randomRGB()}, {$this->randomRGB()}, {$this->randomRGB()})");
            }




            return view('issuance-chart.index', [
                'chart' => $chart
            ]);
        }

        return view('issuance-chart.index');
    }


    private function randomRGB()
    {
        return mt_rand(0, 255);
    }
}
