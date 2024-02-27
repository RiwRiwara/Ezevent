<?php

namespace App\Constants;

class Time
{

    public const Month = [
        [
            "id" => 1,
            "name_th" => "มกราคม",
            "name_en" => "January",
        ],
        [
            "id" => 2,
            "name_th" => "กุมภาพันธ์",
            "name_en" => "February",
        ],
        [
            "id" => 3,
            "name_th" => "มีนาคม",
            "name_en" => "March",
        ],
        [
            "id" => 4,
            "name_th" => "เมษายน",
            "name_en" => "April",
        ],
        [
            "id" => 5,
            "name_th" => "พฤษภาคม",
            "name_en" => "May",
        ],
        [
            "id" => 6,
            "name_th" => "มิถุนายน",
            "name_en" => "June",
        ],
        [
            "id" => 7,
            "name_th" => "กรกฎาคม",
            "name_en" => "July",
        ],
        [
            "id" => 8,
            "name_th" => "สิงหาคม",
            "name_en" => "August",
        ],
        [
            "id" => 9,
            "name_th" => "กันยายน",
            "name_en" => "September",
        ],
        [
            "id" => 10,
            "name_th" => "ตุลาคม",
            "name_en" => "October",
        ],
        [
            "id" => 11,
            "name_th" => "พฤศจิกายน",
            "name_en" => "November",
        ],
        [
            "id" => 12,
            "name_th" => "ธันวาคม",
            "name_en" => "December",
        ],

    ];
    public const Day = [
        [
            "id" => 1,
            "name_th" => "อาทิตย์",
            "name_en" => "Sunday",
        ],
        [
            "id" => 2,
            "name_th" => "จันทร์",
            "name_en" => "Monday",
        ],
        [
            "id" => 3,
            "name_th" => "อังคาร",
            "name_en" => "Tuesday",
        ],
        [
            "id" => 4,
            "name_th" => "พุธ",
            "name_en" => "Wednesday",
        ],
        [
            "id" => 5,
            "name_th" => "พฤหัสบดี",
            "name_en" => "Thursday",
        ],
        [
            "id" => 6,
            "name_th" => "ศุกร์",
            "name_en" => "Friday",
        ],
        [
            "id" => 7,
            "name_th" => "เสาร์",
            "name_en" => "Saturday",
        ],
    ];


    private string $date;
    private bool $isThai;
    private string $day;
    private string $month;
    private string $year;
    private string $show_date;


    public function __construct(string $date, bool $isThai = false)
    {
        $this->date = $date;
        $this->isThai = $isThai;
        $this->show_date = $this->convertDateToShowFormat();
        $this->month = $this->getMonth()['id'];
        $this->day = $this->getDay();
        $this->year = $this->getYear();
    }

    /** 
     * get month 
     * @return array
     * 
     */
    public function getMonth(): array
    {
        $date = explode('-', $this->date);
        $month = $date[1];
        return self::Month[$month - 1];
    }

    /** 
     * get day name
     * @return string
     */
    public function getDayName(): string
    {
        $date = explode('-', $this->date);
        $year = $date[0];
        $month = $date[1];
        $day = $date[2];
        $date = $year . '-' . $month . '-' . $day;
        $day = date('N', strtotime($date));
        if ($this->isThai) {
            return self::Day[$day - 1]['name_th'];
        } else {
            return self::Day[$day - 1]['name_en'];
        }
    }

    /** 
     * get day
     * @return string
     */
    public function getDay(): string
    {
        $date = explode('-', $this->date);
        $day = explode(' ', $date[2])[0];
        return $day;
    }

    /** 
     * get year
     * @return string
     */

    public function getYear(): string
    {
        $date = explode('-', $this->date);
        return $date[0];
    }

    /** 
     * convert date to show format
     * @return string
     */
    public function convertDateToShowFormat(): string
    {
        $monthByLang = $this->isThai ? $this->getMonth()['name_th'] : $this->getMonth()['name_en'];
        return $this->getDay() . ' ' . $monthByLang . ' ' . $this->getYear();
    }

    /** 
     * get date of birth object
     * @return array
     */

    public function getDateBirthObject(): array
    {
        $day = sprintf('%02d', $this->day); // Ensure leading zero if less than 10
        $month = sprintf('%02d', $this->month); // Ensure leading zero if less than 10

        return [
            'day' => $day,
            'month' => $month,
            'year' => explode('-', $this->date)[0],
            'date' => $month . '/' . $day . '/' . explode('-', $this->date)[0],
            'show' => $this->show_date,
        ];
    }
}
