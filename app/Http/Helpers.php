<?php

/*use App\Enum\CompanyEnum;*/

/**
 * Created by PhpStorm.
 * User: rejvi
 * Date: 21/3/19
 * Time: 10:10 AM
 */
function ramtest()
{
    exit('its ram');
}
function managePagination($obj)
{
    $serial = 1;
    if ($obj->currentPage() > 1) {
        $serial = (($obj->currentPage() - 1) * $obj->perPage()) + 1;
    }
    return $serial;
}
/*
function divisionName($id)
{
    $division = \App\Model\Division::where('id', $id)->select('name')->first();
    return $division->name;
}

function districtName($id)
{
    $division = \App\Model\District::where('id', $id)->select('name')->first();
    return $division->name;
}

function upazilaName($id)
{
    $division = \App\Model\Upazila::where('id', $id)->select('name')->first();
    return $division->name;
}

function setStartDateEndDate($start_date, $end_date, $format = "Y-m-d H:i:s")
{
    $start_date = str_replace('/', '-', $start_date);
    $end_date   = str_replace('/', '-', $end_date);

    if ($start_date) {
        $date       = new \DateTime($start_date);
        $start_date = $date->format($format);
    }

    if ($end_date) {
        $date     = new \DateTime($end_date);
        $end_date = $date->format($format);
    }

    if (isset($start_date) && isset($end_date)) {
        if ($start_date > $end_date) {
            $tempDate   = $start_date;
            $start_date = $end_date;
            $end_date   = $tempDate;
        }
    } else if (isset($start_date) && !isset($end_date)) {
        $start_date = $start_date;
        $end_date   = $start_date;
    } else {
        $start_date = $end_date;
        $end_date   = $end_date;
    }

    return ['from' => $start_date, 'to' => $end_date];
}*/

/**
 * convert date to Y-M-D format from USER DEFINED format
 *
 * @param  $date
 * @return Y-M-D format date
 */
/*if (!function_exists('getYMD')) {
    function getYMD($date)
    {
        return !empty($date) ? date("Y-m-d", strtotime(str_replace('/', '-', $date))) : null;
    }
}*/

/**
 * convert date to Y-M-D format from USER DEFINED format
 *
 * @param  $date
 * @return Y-M-D format date
 */
/*if (!function_exists('getDMY')) {
    function getDMY($date)
    {
        return !empty($date) ? date("d/m/Y", strtotime($date)) : '';
    }
}*/

/**
 * convert date to Y-M-D format from USER DEFINED format
 */
/*if (!function_exists('reportHead')) {
    function reportHead()
    {
        return '
            <p class="text-center"><img src="'.asset('images/logo.png') .'" style="height: 50px;" class="img-responsive" alt=""></p>
            <p style="margin: 0; font-size: 12px;" class="text-center">'.CompanyEnum::Address.'</p>
            <p style="font-size: 12px;" class="text-center">Phone : '.CompanyEnum::Phone.' Email : '.CompanyEnum::Email.'</p>
        ';
    }
}*/

/*if (!function_exists('getExcelColumn')) {
    function getExcelColumn($num) {
        $numeric = $num % 26;
        $letter = chr(65 + $numeric);
        $num2 = intval($num / 26);
        if ($num2 > 0) {
            return getExcelColumn($num2 - 1) . $letter;
        } else {
            return $letter;
        }
    }
}*/
