<?php

namespace App\Charts;

use App\CertificateIssuance;
use Carbon\Carbon;
use ConsoleTVs\Charts\Classes\Chartjs\Chart;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class CertificateIssuanceChart extends Chart
{
    public $months = [];
    /**
     * Initializes the chart.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();

        $this->getMonths();
    }

    public function getIssuableTypes()
    {
        return CertificateIssuance::groupBy('issuable_type')
            ->orderBy('issuable_type', 'asc')
            ->get()
            ->map(function ($issuable) {
                return str_replace('App\\', '', $issuable->issuable_type);
            })->all();
    }

    function getLast3Months()
    {
        $now = now();

        $last3Months =  now()->subMonths(3);

        $months = [];

        while ($last3Months->lessThanOrEqualTo($now)) {
            $month = $last3Months->addMonths(1);

            Log::info($last3Months);
            Log::info($month);

            array_push($months, $month->format('M-Y'));
        }

        return $months;
    }

    function getMonths()
    {
        $months = array_map(function ($month) {

            return Carbon::parse($month)->format('F-Y');
        }, $this->getLast3Months());

        $this->months = $months;
    }

    function getData($date, $type)
    {
        $type = "App\\" . $type;

        $date = Carbon::parse($date);

        return DB::select(
            "SELECT 

            COUNT(a.issuable_type) count
            
            FROM certificate_issuances a 
            
            WHERE Year(a.created_at) = ? AND MONTH(a.created_at) = ?

            and a.issuable_type= ?
             
            GROUP BY a.issuable_type ORDER BY a.issuable_type
            ",
            [
                $date->year,
                $date->month,
                $type
            ]
        )[0]->count ?? 0;
    }
}
