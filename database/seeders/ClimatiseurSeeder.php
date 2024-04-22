<?php

        namespace Database\Seeders;

        use Illuminate\Database\Console\Seeds\WithoutModelEvents;
        use Illuminate\Database\Seeder;
        use App\Models\Climatiseur;


        class ClimatiseurSeeder extends Seeder
        {
            /**
            * Run the database seeds.
            *
            * @return void
            */
            public function run()
            {
                Climatiseur::insert([
                    ['marque'=> 'Panasonic', 'modele' => 'CS/CU-UZ12SKE','puissance'=> '12000','surfaceMin'=> '25', 'surfaceMax'=>'35', 'numSalle'=>'4'],
                    ['marque'=> 'Panasonic', 'modele' =>'CS/CU-UZ18SKE', 'puissance'=>'18000','surfaceMin'=> '35', 'surfaceMax'=>'50', 'numSalle'=>'2'],
                    ['marque'=> 'Panasonic', 'modele' =>'CU-UZ9SKE', 'puissance'=>'9000', 'surfaceMin'=>'15', 'surfaceMax'=>'25', 'numSalle'=>'3'],
                    ['marque'=> 'Panasonic', 'modele' =>'CS/CU-Z71TKEW', 'puissance'=>'24000', 'surfaceMin'=>'50', 'surfaceMax'=>'70', 'numSalle'=>'1'],

                    ['marque'=> 'Midéa','modele' =>'MSAEBU/MOB31-12H','puissance'=> '12000', 'surfaceMin'=>'25', 'surfaceMax'=>'35', 'numSalle'=>'5'],
                    ['marque'=> 'Midéa','modele' =>'MSAECU/MOB31-18H', 'puissance'=>'18000', 'surfaceMin'=>'35', 'surfaceMax'=>'50', 'numSalle'=>'6'],
                    ['marque'=> 'Midéa','modele' =>'MSMADU/MOCA02-24C', 'puissance'=>'24000', 'surfaceMin'=>'50', 'surfaceMax'=>'70', 'numSalle'=>'7'],
                    ['marque'=> 'Midéa','modele' =>'Btu/h MSEAAU/MOA01-09C', 'puissance'=>'9000', 'surfaceMin'=>'15', 'surfaceMax'=>'25', 'numSalle'=>'8'],

                    ['marque'=> 'Westpoint','modele' =>'WIM-092116.LHE', 'puissance'=>'9000', 'surfaceMin'=>'15', 'surfaceMax'=>'25', 'numSalle'=>'9'],
                    ['marque'=> 'Westpoint','modele' =>'WIM-242116.LHE', 'puissance'=>'24000', 'surfaceMin'=>'50', 'surfaceMax'=>'70', 'numSalle'=>'1'],
                    ['marque'=> 'Westpoint','modele' =>'WIM-182116.LHE', 'puissance'=>'18000', 'surfaceMin'=>'35', 'surfaceMax'=>'50', 'numSalle'=>'11'],
                    ['marque'=> 'Westpoint','modele' =>'WIM-122116.LHE', 'puissance'=>'12000', 'surfaceMin'=>'25', 'surfaceMax'=>'35', 'numSalle'=>'11']

                ]);
            }
        }


                   