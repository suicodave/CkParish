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

        foreach ($datasets as $dataset) {

            $counts = [];

            foreach ($months as $month) {
                $counts[] = $chart->getData($month, $dataset);
            }

            $chart->dataset($dataset, 'bar', $counts)
                ->color("rgb({$this->randomRGB()}}, {$this->randomRGB()},{$this->randomRGB()})")
                ->backgroundcolor("rgb({$this->randomRGB()}, {$this->randomRGB()}, {$this->randomRGB()})");
        }



        // $chart->dataset('Confirmation', 'bar', $dataset[1])
        //     ->color("rgb(115, 99, 172)")
        //     ->backgroundcolor("rgb(115, 99, 172)");

        // $chart->dataset('Marriage', 'bar', $dataset[2])
        //     ->color("rgb(213, 59, 72)")
        //     ->backgroundcolor("rgb(213, 59, 72)");



        return view('issuance-chart.index', [
            'chart' => $chart
        ]);
    }


    private function randomRGB()
    {
        return mt_rand(0, 255);
    }
}
