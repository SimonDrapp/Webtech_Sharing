<?php

use App\Auto;
use App\Vermieten;
use App\AModell;
use App\AMarke;
use App\Baujahr;
use App\Kraftstoff;

use App\Farbe;

use App\Art;
use App\FMarke;
use App\FModell;

use Illuminate\Database\Seeder;

class SharingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Ort')->delete();
        DB::table('Auto')->delete();
        DB::table('AModell')->delete();
        DB::table('AMarke')->delete();
        DB::table('Kraftstoff')->delete();
        DB::table('Baujahr')->delete();
        DB::table('Farbe')->delete();
        DB::table('Vermieten')->delete();






        // INSERTS FÜR ORTE
        /*        DB::insert("INSERT INTO Ort VALUES (1, 'Deutschland', NOW(), NOW())");

                //INSERT FÜR AMarke
                DB::insert("INSERT INTO AMarke VALUES (1, 'Alfa Romeo', NOW(), NOW())");
                DB::insert("INSERT INTO AMarke VALUES (2, 'Aston Martin', NOW(), NOW())");
                DB::insert("INSERT INTO AMarke VALUES (3, 'Audi', NOW(), NOW())");
                DB::insert("INSERT INTO AMarke VALUES (4, 'Bentley', NOW(), NOW())");
                DB::insert("INSERT INTO AMarke VALUES (5, 'BMW', NOW(), NOW())");
                DB::insert("INSERT INTO AMarke VALUES (6, 'Bugatti', NOW(), NOW())");
                DB::insert("INSERT INTO AMarke VALUES (7, 'Chevrolet', NOW(), NOW())");
                DB::insert("INSERT INTO AMarke VALUES (8, 'Corvette', NOW(), NOW())");
                DB::insert("INSERT INTO AMarke VALUES (9, 'Dacia', NOW(), NOW())");
                DB::insert("INSERT INTO AMarke VALUES (10, 'Dodge', NOW(), NOW())");
                DB::insert("INSERT INTO AMarke VALUES (11, 'Ferrari', NOW(), NOW())");
                DB::insert("INSERT INTO AMarke VALUES (12, 'Fiat', NOW(), NOW())");
                DB::insert("INSERT INTO AMarke VALUES (13, 'Ford', NOW(), NOW())");
                DB::insert("INSERT INTO AMarke VALUES (14, 'Honda', NOW(), NOW())");
                DB::insert("INSERT INTO AMarke VALUES (15, 'Hummer', NOW(), NOW())");
                DB::insert("INSERT INTO AMarke VALUES (16, 'Hyundai', NOW(), NOW())");
                DB::insert("INSERT INTO AMarke VALUES (17, 'Infiniti', NOW(), NOW())");
                DB::insert("INSERT INTO AMarke VALUES (18, 'Jaguar', NOW(), NOW())");
                DB::insert("INSERT INTO AMarke VALUES (19, 'Jeep', NOW(), NOW())");
                DB::insert("INSERT INTO AMarke VALUES (20, 'Kia', NOW(), NOW())");
                DB::insert("INSERT INTO AMarke VALUES (22, 'Lamborghini', NOW(), NOW())");
                DB::insert("INSERT INTO AMarke VALUES (23, 'Land Rower', NOW(), NOW())");
                DB::insert("INSERT INTO AMarke VALUES (24, 'Lotus', NOW(), NOW())");
                DB::insert("INSERT INTO AMarke VALUES (25, 'Maserati', NOW(), NOW())");
                DB::insert("INSERT INTO AMarke VALUES (26, 'Maybach', NOW(), NOW())");
                DB::insert("INSERT INTO AMarke VALUES (27, 'Mazda', NOW(), NOW())");
                DB::insert("INSERT INTO AMarke VALUES (28, 'McLaren', NOW(), NOW())");
                DB::insert("INSERT INTO AMarke VALUES (29, 'Mercedes-Benz', NOW(), NOW())");
                DB::insert("INSERT INTO AMarke VALUES (30, 'MINI', NOW(), NOW())");
                DB::insert("INSERT INTO AMarke VALUES (31, 'Mitsubishi', NOW(), NOW())");
                DB::insert("INSERT INTO AMarke VALUES (32, 'Nissan', NOW(), NOW())");
                DB::insert("INSERT INTO AMarke VALUES (33, 'Opel', NOW(), NOW())");
                DB::insert("INSERT INTO AMarke VALUES (34, 'Peugeot', NOW(), NOW())");
                DB::insert("INSERT INTO AMarke VALUES (35, 'Porsche', NOW(), NOW())");
                DB::insert("INSERT INTO AMarke VALUES (36, 'Renault', NOW(), NOW())");
                DB::insert("INSERT INTO AMarke VALUES (37, 'Rolls-Royce', NOW(), NOW())");
                DB::insert("INSERT INTO AMarke VALUES (38, 'Rover', NOW(), NOW())");
                DB::insert("INSERT INTO AMarke VALUES (39, 'Seat', NOW(), NOW())");
                DB::insert("INSERT INTO AMarke VALUES (40, 'Skoda', NOW(), NOW())");
                DB::insert("INSERT INTO AMarke VALUES (41, 'Smart', NOW(), NOW())");
                DB::insert("INSERT INTO AMarke VALUES (42, 'Subaru', NOW(), NOW())");
                DB::insert("INSERT INTO AMarke VALUES (43, 'Suzuki', NOW(), NOW())");
                DB::insert("INSERT INTO AMarke VALUES (44, 'Tesla', NOW(), NOW())");
                DB::insert("INSERT INTO AMarke VALUES (45, 'Volkswagen', NOW(), NOW())");
                DB::insert("INSERT INTO AMarke VALUES (46, 'Volvo', NOW(), NOW())");
                DB::insert("INSERT INTO AMarke VALUES (47, 'Citroen', NOW(), NOW())");
                DB::insert("INSERT INTO AMarke VALUES (48, 'Toyota', NOW(), NOW())");

                //INERT FÜR KRAFTSTOFF
                DB::insert("INSERT INTO Kraftstoff VALUES (1,'Benzin', NOW(), NOW())");
                DB::insert("INSERT INTO Kraftstoff VALUES (2,'Diesel', NOW(), NOW())");
                DB::insert("INSERT INTO Kraftstoff VALUES (3,'Elektro', NOW(), NOW())");
                DB::insert("INSERT INTO Kraftstoff VALUES (4,'Hybrid(Benzin/Elektro)', NOW(), NOW())");
                DB::insert("INSERT INTO Kraftstoff VALUES (5,'Hybrid(Diesel/Elektro)', NOW(), NOW())");
                DB::insert("INSERT INTO Kraftstoff VALUES (6,'Autogas (LPG)', NOW(), NOW())");
                DB::insert("INSERT INTO Kraftstoff VALUES (7,'Erdgas (CNG)', NOW(), NOW())");

                //INSERT FÜR BAUJAHR
                DB::insert("INSERT INTO Baujahr VALUES (1990, NOW(), NOW())");
                DB::insert("INSERT INTO Baujahr VALUES ((SELECT MAX(jahr)+1 FROM Baujahr), NOW(), NOW())");
                DB::insert("INSERT INTO Baujahr VALUES ((SELECT MAX(id)+1 FROM Baujahr),(SELECT MAX(jahr)+1 FROM Baujahr ), NOW(), NOW())");
                DB::insert("INSERT INTO Baujahr VALUES ((SELECT MAX(id)+1 FROM Baujahr),(SELECT MAX(jahr)+1 FROM Baujahr), NOW(), NOW())");
                DB::insert("INSERT INTO Baujahr VALUES ((SELECT MAX(id)+1 FROM Baujahr),(SELECT MAX(jahr)+1 FROM Baujahr), NOW(), NOW())");
                DB::insert("INSERT INTO Baujahr VALUES ((SELECT MAX(id)+1 FROM Baujahr),(SELECT MAX(jahr)+1 FROM Baujahr), NOW(), NOW())");
                DB::insert("INSERT INTO Baujahr VALUES ((SELECT MAX(id)+1 FROM Baujahr),(SELECT MAX(jahr)+1 FROM Baujahr), NOW(), NOW())");
                DB::insert("INSERT INTO Baujahr VALUES ((SELECT MAX(id)+1 FROM Baujahr),(SELECT MAX(jahr)+1 FROM Baujahr), NOW(), NOW())");
                DB::insert("INSERT INTO Baujahr VALUES ((SELECT MAX(id)+1 FROM Baujahr),(SELECT MAX(jahr)+1 FROM Baujahr), NOW(), NOW())");
                DB::insert("INSERT INTO Baujahr VALUES ((SELECT MAX(id)+1 FROM Baujahr),(SELECT MAX(jahr)+1 FROM Baujahr), NOW(), NOW())");
                DB::insert("INSERT INTO Baujahr VALUES ((SELECT MAX(id)+1 FROM Baujahr),(SELECT MAX(jahr)+1 FROM Baujahr), NOW(), NOW())");
                DB::insert("INSERT INTO Baujahr VALUES ((SELECT MAX(id)+1 FROM Baujahr),(SELECT MAX(jahr)+1 FROM Baujahr), NOW(), NOW())");
                DB::insert("INSERT INTO Baujahr VALUES ((SELECT MAX(id)+1 FROM Baujahr),(SELECT MAX(jahr)+1 FROM Baujahr), NOW(), NOW())");
                DB::insert("INSERT INTO Baujahr VALUES ((SELECT MAX(id)+1 FROM Baujahr),(SELECT MAX(jahr)+1 FROM Baujahr), NOW(), NOW())");
                DB::insert("INSERT INTO Baujahr VALUES ((SELECT MAX(id)+1 FROM Baujahr),(SELECT MAX(jahr)+1 FROM Baujahr), NOW(), NOW())");
                DB::insert("INSERT INTO Baujahr VALUES ((SELECT MAX(id)+1 FROM Baujahr),(SELECT MAX(jahr)+1 FROM Baujahr), NOW(), NOW())");
                DB::insert("INSERT INTO Baujahr VALUES ((SELECT MAX(id)+1 FROM Baujahr),(SELECT MAX(jahr)+1 FROM Baujahr), NOW(), NOW())");
                DB::insert("INSERT INTO Baujahr VALUES ((SELECT MAX(id)+1 FROM Baujahr),(SELECT MAX(jahr)+1 FROM Baujahr), NOW(), NOW())");
                DB::insert("INSERT INTO Baujahr VALUES ((SELECT MAX(id)+1 FROM Baujahr),(SELECT MAX(jahr)+1 FROM Baujahr), NOW(), NOW())");
                DB::insert("INSERT INTO Baujahr VALUES ((SELECT MAX(id)+1 FROM Baujahr),(SELECT MAX(jahr)+1 FROM Baujahr), NOW(), NOW())");
                DB::insert("INSERT INTO Baujahr VALUES ((SELECT MAX(id)+1 FROM Baujahr),(SELECT MAX(jahr)+1 FROM Baujahr), NOW(), NOW())");
                DB::insert("INSERT INTO Baujahr VALUES ((SELECT MAX(id)+1 FROM Baujahr),(SELECT MAX(jahr)+1 FROM Baujahr), NOW(), NOW())");
                DB::insert("INSERT INTO Baujahr VALUES ((SELECT MAX(id)+1 FROM Baujahr),(SELECT MAX(jahr)+1 FROM Baujahr), NOW(), NOW())");
                DB::insert("INSERT INTO Baujahr VALUES ((SELECT MAX(id)+1 FROM Baujahr),(SELECT MAX(jahr)+1 FROM Baujahr), NOW(), NOW())");
                DB::insert("INSERT INTO Baujahr VALUES ((SELECT MAX(id)+1 FROM Baujahr),(SELECT MAX(jahr)+1 FROM Baujahr), NOW(), NOW())");
                DB::insert("INSERT INTO Baujahr VALUES ((SELECT MAX(id)+1 FROM Baujahr),(SELECT MAX(jahr)+1 FROM Baujahr), NOW(), NOW())");
                DB::insert("INSERT INTO Baujahr VALUES ((SELECT MAX(id)+1 FROM Baujahr),(SELECT MAX(jahr)+1 FROM Baujahr), NOW(), NOW())");
                DB::insert("INSERT INTO Baujahr VALUES ((SELECT MAX(id)+1 FROM Baujahr),(SELECT MAX(jahr)+1 FROM Baujahr), NOW(), NOW())");


                //INSERT FÜR AModell
                DB::insert("INSERT INTO AModell VALUES (1,'A1',(SELECT id FROM AMarke WHERE name='Audi'),(SELECT id FROM Kraftstoff where name='Benzin'), NOW(), NOW())");
                DB::insert("INSERT INTO AModell VALUES ((SELECT MAX(id)+1 FROM AModell),'A2',(SELECT id FROM AMarke WHERE name='Audi'),(SELECT id FROM Kraftstoff where name='Benzin'), NOW(), NOW())");
                DB::insert("INSERT INTO AModell VALUES ((SELECT MAX(id)+1 FROM AModell),'A3',(SELECT id FROM AMarke WHERE name='Audi'),(SELECT id FROM Kraftstoff where name='Benzin'), NOW(), NOW())");
                DB::insert("INSERT INTO AModell VALUES ((SELECT MAX(id)+1 FROM AModell),'A4',(SELECT id FROM AMarke WHERE name='Audi'),(SELECT id FROM Kraftstoff where name='Benzin'), NOW(), NOW())");
                DB::insert("INSERT INTO AModell VALUES ((SELECT MAX(id)+1 FROM AModell),'A5',(SELECT id FROM AMarke WHERE name='Audi'),(SELECT id FROM Kraftstoff where name='Benzin'), NOW(), NOW())");
                DB::insert("INSERT INTO AModell VALUES ((SELECT MAX(id)+1 FROM AModell),'A6',(SELECT id FROM AMarke WHERE name='Audi'),(SELECT id FROM Kraftstoff where name='Benzin'), NOW(), NOW())");
                DB::insert("INSERT INTO AModell VALUES ((SELECT MAX(id)+1 FROM AModell),'A7',(SELECT id FROM AMarke WHERE name='Audi'),(SELECT id FROM Kraftstoff where name='Benzin'), NOW(), NOW())");
                DB::insert("INSERT INTO AModell VALUES ((SELECT MAX(id)+1 FROM AModell),'A8',(SELECT id FROM AMarke WHERE name='Audi'),(SELECT id FROM Kraftstoff where name='Benzin'), NOW(), NOW())");
                DB::insert("INSERT INTO AModell VALUES ((SELECT MAX(id)+1 FROM AModell),'Q5',(SELECT id FROM AMarke WHERE name='Audi'),(SELECT id FROM Kraftstoff where name='Benzin'), NOW(), NOW())");
                DB::insert("INSERT INTO AModell VALUES ((SELECT MAX(id)+1 FROM AModell),'Q7',(SELECT id FROM AMarke WHERE name='Audi'),(SELECT id FROM Kraftstoff where name='Benzin'), NOW(), NOW())");


                DB::insert("INSERT INTO FMarke VALUES(1,'Fischer', NOW(),NOW())");

        */

 /*       $farbe1 = farbe:: create(array(
            'name'=> 'rot'
        ));

*/




        $kraftstoff1 = kraftstoff:: create(array(
            'name'=> 'Benzin'
        ));

        $kraftstoff2 = kraftstoff:: create(array(
            'name'=> 'Diesel'
        ));



        $farbe1 = Farbe:: create(array(
            'name'=> 'rot'
        ));

        $farbe2 = farbe:: create(array(
            'name'=> 'gelb'
        ));




        $firstbaujahr1 = Baujahr:: create(array(
            'jahr' => 2017
        ));

        $firstbaujahr2 = Baujahr:: create(array(
            'jahr' => 2016
        ));

        $firstbaujahr3 = Baujahr:: create(array(
            'jahr' => 2015
        ));

        $firstbaujahr4 = Baujahr:: create(array(
            'jahr' => 2014
        ));




        $firstAMarke1 = AMarke:: create(array(
            'name' => 'Audi'
        ));
        $firstAMarke2 = AMarke:: create(array(
            'name' => 'BMW'
        ));
        $firstAMarke3 = AMarke:: create(array(
            'name' => 'Mercedes'
        ));





        $firstmodelA1 = AModell::create(array(
            'aModellname' => 'A1',
            'idaMarke' => $firstAMarke1->id,
            'idKraftstoff' => $kraftstoff1->id
        ));
        $this->command->info('AModell angelegt!!');

        $firstmodelA2 = AModell::create(array(
            'aModellname' => 'A2',
            'idaMarke' => $firstAMarke1->id,
            'idKraftstoff' => $kraftstoff2->id
        ));
        $this->command->info('AModell angelegt!!');

        $firstmodelA3 = AModell::create(array(
            'aModellname' => 'A3',
            'idaMarke' => $firstAMarke1->id,
            'idKraftstoff' => $kraftstoff2->id
        ));
        $this->command->info('AModell angelegt!!');

        $firstmodelA4 = AModell::create(array(
            'aModellname' => 'A4',
            'idaMarke' => $firstAMarke1->id,
            'idKraftstoff' => $kraftstoff1->id
        ));
        $this->command->info('AModell angelegt!!');

        $firstmodelBMW1 = AModell::create(array(
            'aModellname' => 'BMW 3er',
            'idaMarke' => $firstAMarke2->id,
            'idKraftstoff' => $kraftstoff1->id
        ));
        $this->command->info('AModell angelegt!!');

        $firstmodelBMW2 = AModell::create(array(
            'aModellname' => 'BMW 1er',
            'idaMarke' => $firstAMarke2->id,
            'idKraftstoff' => $kraftstoff1->id
        ));
        $this->command->info('AModell angelegt!!');

        $firstmodelM1 = AModell::create(array(
            'aModellname' => 'CLS',
            'idaMarke' => $firstAMarke3->id,
            'idKraftstoff' => $kraftstoff1->id
        ));
        $this->command->info('AModell angelegt!!');

        $firstmodelM2 = AModell::create(array(
            'aModellname' => 'S63',
            'idaMarke' => $firstAMarke3->id,
            'idKraftstoff' => $kraftstoff1->id
        ));
        $this->command->info('AModell angelegt!!');





        $firstAuto1 = Auto::create(array(
            'details' => 'Sportback',
            'idFarbe' => $farbe1->id,
            'idAModell'=> $firstmodelA1->id,
            'idBaujahr' => $firstbaujahr1->id
        ));
        $this->command->info('Auto angelegt!!');

        $firstAuto2 = Auto::create(array(
            'details' => 'Kleinwagen',
            'idFarbe' => $farbe1->id,
            'idAmodell'=> $firstmodelA2->id,
            'idBaujahr' => $firstbaujahr2->id
        ));
        $this->command->info('Auto angelegt!!');


        $firstAuto3 = Auto::create(array(
            'details' => 'Limousine',
            'idFarbe' => $farbe2->id,
            'idAModell'=> $firstmodelA3->id,
            'idBaujahr' => $firstbaujahr3->id
        ));
        $this->command->info('Auto angelegt!!');

        $firstAuto4 = Auto::create(array(
            'details' => 'Kombi',
            'idFarbe' => $farbe2->id,
            'idAModell'=> $firstmodelA4-> id,
            'idBaujahr' => $firstbaujahr4->id
        ));
        $this->command->info('Auto angelegt!!');

        $firstAuto5 = Auto::create(array(
            'details' => 'Coupe',
            'idFarbe' => $farbe1->id,
            'idAModell'=> $firstmodelBMW1->id,
            'idBaujahr' => $firstbaujahr1->id
        ));
        $this->command->info('Auto angelegt!!');

        $firstAuto6 = Auto::create(array(
            'details' => 'Coupe',
            'idFarbe' => $farbe1->id,
            'idAmodell'=> $firstmodelBMW2->id,
            'idBaujahr' => $firstbaujahr1->id
        ));
        $this->command->info('Auto angelegt!!');

        $firstAuto6 = Auto::create(array(
            'details' => 'Coupe',
            'idFarbe' => $farbe1->id,
            'idAmodell'=> $firstmodelM1->id,
            'idBaujahr' => $firstbaujahr1->id
        ));
        $this->command->info('Auto angelegt!!');

        $firstAuto6 = Auto::create(array(
            'details' => 'Sportwagen',
            'idFarbe' => $farbe1->id,
            'idAmodell'=> $firstmodelM2->id,
            'idBaujahr' => $firstbaujahr1->id
        ));
        $this->command->info('Auto angelegt!!');
/*
        $secondcar1= Auto:: create(array(
            'details' => 'ausprobieren',
            'idFarbe' => $farbe1->id,
            'idAmodell' => $firstmodelA1->id,
            'idBaujahr' => $firstbaujahr1->id
        ));
        $this->command->info('Vermietung angelegt!!');

        $secondcar2= Auto:: create(array(
            'details' => 'ausprobieren',
            'idFarbe' => $farbe1->id,
            'idAmodell' => $firstmodelA2->id,
            'idBaujahr' => $firstbaujahr2->id
        ));
        $this->command->info('Vermietung angelegt!!');

        $secondcar3= Auto:: create(array(
            'details' => 'ausprobieren',
            'idFarbe' => $farbe1->id,
            'idAmodell' => $firstmodelA3->id,
            'idBaujahr' => $firstbaujahr3->id
        ));
        $this->command->info('Vermietung angelegt!!');

        $secondcar4= Auto:: create(array(
            'details' => 'ausprobieren',
            'idFarbe' => $farbe1->id,
            'idAmodell' => $firstmodelA4->id,
            'idBaujahr' => $firstbaujahr4->id
        ));
        $this->command->info('Vermietung angelegt!!');




        $firstRental = Vermieten:: create(array(
            'preis' => 10.0,
            'von' => '2017-11-10',
            'bis' => '2017-11-22',
            'idBenutzer' => null,
            'idFahrrad' => null,
            'idAuto' => $secondcar2->id
        ));
*/




        $fart1 = Art:: create(array(
            'name'=> 'Kinderräder'
        ));
        $fart2 = Art:: create(array(
            'name'=> 'Sporträder'
        ));
        $fart3 = Art:: create(array(
            'name'=> 'Freizeitbike'
        ));




        $fmarke1 = FMarke:: create(array(
            'name'=> 'Bavaria',
            'idArt' => $fart1->id,
        ));

        $fmarke2 = FMarke:: create(array(
            'name'=> 'Bernds',
            'idArt' => $fart3->id,
        ));

        $fmarke3 = FMarke:: create(array(
            'name'=> 'Alpina',
            'idArt' => $fart2->id,
        ));




        $firstmodelF1 = FModell::create(array(
            'name' => 'Junior Bike',
            'idMarke' => $fmarke1->id
        ));
        $this->command->info('FModell angelegt!!');

        $firstmodelF2 = FModell::create(array(
            'name' => 'Mountainbike',
            'idMarke' => $fmarke3->id
        ));
        $this->command->info('FModell angelegt!!');

        $firstmodelF3 = FModell::create(array(
            'name' => 'Rennrad',
            'idMarke' => $fmarke2->id
        ));
        $this->command->info('FModell angelegt!!');


    }
}
