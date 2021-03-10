<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use League\Csv\Reader;
use Illuminate\Support\Facades\DB;

class OfficeDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //load the CSV document from a file path
$csv = Reader::createFromPath('database\seeds\csvs\office-data.csv', 'r');
$csv->setHeaderOffset(0);

$headers = $csv->getHeader(); //returns the CSV header record
$records = $csv->getRecords(); //returns all the CSV records as an Iterator object


foreach ($records as $record) {
    //do something here

    $name = $priceVal = $officesVal = $tablesVal = $sqmVal =null; 
    foreach($record as $x => $x_value) {
        $x = trim($x);
        switch ($x) {
            case (strcasecmp('Name', $x) == 0):
                $name = $x_value;
                break;
              case (strcasecmp('Price', $x) == 0):
                $priceVal = $x_value;
                break;
              case (strcasecmp('Offices', $x) == 0):
                $officesVal = $x_value;
                break;
              case (strcasecmp('Tables', $x) == 0):
                $tablesVal = $x_value;
                break;
                case (strcasecmp('Sqm', $x) == 0):
                    $sqmVal = $x_value;
                    break;
          }



      }

      DB::table('office_data')->insert([
        'Name' => $name,
        'Price' => $priceVal,
        'Offices' => $officesVal,
        'Tables' => $tablesVal,
        'Sqm' => $sqmVal,
    ]);

        }   

    }
}
