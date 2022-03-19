<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Employee;

class fetch_data extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fetch_data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'The data will be fetched from API and store into database.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(){

        $curl = curl_init();

            curl_setopt_array($curl, array(
              CURLOPT_URL => "http://dummy.restapiexample.com/api/v1/employees",
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_ENCODING => "",
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 30,
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              CURLOPT_CUSTOMREQUEST => "GET",
              CURLOPT_HTTPHEADER => array(
                "Cache-Control: no-cache",
              ),
            ));

            $response = curl_exec($curl);
            $err = curl_error($curl);

            curl_close($curl);

            if ($err) {
              echo "cURL Error #:" . $err;
            } else {
              $data_tmp = json_decode($response, true);
                if (isset($data_tmp['data'])){
                    $dataa = array();
                    foreach ($data_tmp['data'] as $each){
                        $dataa[] = array("name"=>$each['employee_name'],"age"=>$each['employee_age'],"salary"=>$each['employee_salary'],"image"=>$each['profile_image']);
                    }
                    if(!empty($dataa) && count($dataa)>0){
                        echo'71'; print_r($dataa); echo '71a';
                        $employeess = Employee::insert($dataa);
                        if($employeess){
                            echo 'success';
                        }else{
                            echo 'failure';
                        }    
                    }else{
                        echo 'Not';
                    }
                    
                }
            }

                
    }
}
