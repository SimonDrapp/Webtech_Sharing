<?php

use App\Auto;
use App\Vermieten;
use App\AModell;
use App\AMarke;
use App\Baujahr;
use App\Kraftstoff;
use App\Ort;
use App\Farbe;
use App\Bilder;
use App\Art;
use App\FMarke;
use App\FModell;
use App\autovermietung;
use App\fahrradvermietung;
use App\User;
use App\Role;

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
            Ort:: create(array(
            'Name'=> 'Konstanz Petershausen-West',
            'plz'=> '78467'
        ));
            Ort:: create(array(
            'Name'=> 'Konstanz Wollmatingen',
            'plz'=> '78467'
        ));
            Ort:: create(array(
            'Name'=> 'Konstanz Paradies',
            'plz'=> '78462'
        ));
            Ort:: create(array(
            'Name'=> 'Konstanz Petershausen-Ost',
            'plz'=> '78464'
        ));
            Ort:: create(array(
            'Name'=> 'Konstanz Dettingen',
            'plz'=> '78465'
        ));
            Ort:: create(array(
            'Name'=> 'Singen',
            'plz'=> '78224'
        ));
            Ort:: create(array(
            'Name'=> 'Baden-Baden',
            'plz'=> '76530'
        ));
            Ort:: create(array(
            'Name'=> 'Varnhalt',
            'plz'=> '76534'
        ));
            Ort:: create(array(
            'Name'=> 'Stuttgart',
            'plz'=> '70173'
        ));
            Ort:: create(array(
            'Name'=> 'Sindelfingen',
            'plz'=> '71034'
        ));

        autovermietung:: create(array(
            'marke'=> 'Audi',
            'modell'=> 'Audi A3',
            'baujahr'=> '2014',
            'farbe'=> 'silber',
            'kraftstoff'=> 'Benzin',
            'preis'=> 50,
            'bild'=> 'audiA3.jpg',
            'details'=> 'neuer Audi A3',
            'postleitzahl'=>'78462',
            'ort'=>'Konstanz',
            'strasseNr'=>'Alfred-Wachtel-Straße 8',
            'startdate'=>'2018-01-09',
            'enddate'=>'2018-01-18'
        ));

        autovermietung:: create(array(
            'marke'=> 'Audi',
            'modell'=> 'Audi A5',
            'baujahr'=> '2016',
            'farbe'=> 'rot',
            'kraftstoff'=> 'Benzin',
            'preis'=> 100,
            'bild'=> 'audiA5.jpg',
            'details'=> 'neuer Audi A5',
            'postleitzahl'=>'78462',
            'ort'=>'Konstanz',
            'strasseNr'=>'Bodanstraße 15',
            'startdate'=>'2018-01-10',
            'enddate'=>'2018-01-20'
        ));

        autovermietung:: create(array(
        'marke'=> 'BMW',
        'modell'=> 'BMW 3er',
        'baujahr'=> '2015',
        'farbe'=> 'silber',
        'kraftstoff'=> 'Benzin',
        'preis'=> 30,
        'bild'=> 'audiA3.jpg',
        'details'=> 'neuer Audi A3',
        'postleitzahl'=>'78479',
        'ort'=>'Reichenau',
        'strasseNr'=>'Priminstraße 45',
        'startdate'=>'2018-01-11',
        'enddate'=>'2018-01-30'
    ));

        autovermietung:: create(array(
            'marke'=> 'Mercedes',
            'modell'=> 'CLS',
            'baujahr'=> '2017',
            'farbe'=> 'silber',
            'kraftstoff'=> 'Benzin',
            'preis'=> 50,
            'bild'=> 'audiA3.jpg',
            'details'=> 'neuer Audi A3',
            'postleitzahl'=>'78467',
            'ort'=>'Konstanz',
            'strasseNr'=>'Fürstenbergstraße 87',
            'startdate'=>'2018-01-12',
            'enddate'=>'2018-01-15'
        ));

        fahrradvermietung:: create(array(
        'art'=> 'Freizeitbike',
        'marke'=> 'Alpina',
        'modell'=> 'Mountainbike',
        'farbe'=> 'schwarz',
        'preis'=> 5,
        'bild'=> 'mountainbikeAlpina.jpg',
        'details'=> 'guter Zustand',
        'postleitzahl'=> '78464',
        'ort'=> 'Konstanz',
        'strasseNr'=> 'Universitätsstraße 10',
        'startdate'=>'2018-01-10',
        'enddate'=>'2018-01-18'
    ));
        fahrradvermietung:: create(array(
            'art'=> 'Freizeitbike',
            'marke'=> 'Alpina',
            'modell'=> 'Mountainbike',
            'farbe'=> 'schwarz',
            'preis'=> 10,
            'bild'=> 'mountainbikeAlpina.jpg',
            'details'=> 'guter Zustand',
            'postleitzahl'=> '78464',
            'ort'=> 'Konstanz',
            'strasseNr'=> 'Sonnenbühlstraße 5',
            'startdate'=>'2018-01-13',
            'enddate'=>'2018-01-25'
        ));
        fahrradvermietung:: create(array(
            'art'=> 'Freizeitbike',
            'marke'=> 'Alpina',
            'modell'=> 'Mountainbike',
            'farbe'=> 'schwarz',
            'preis'=> 12,
            'bild'=> 'mountainbikeAlpina.jpg',
            'details'=> 'guter Zustand',
            'postleitzahl'=> '78467',
            'ort'=> 'Konstanz',
            'strasseNr'=> 'Hindenburgstraße 5',
            'startdate'=>'2018-01-11',
            'enddate'=>'2018-01-17'
        ));

        fahrradvermietung:: create(array(
            'art'=> 'Freizeitbike',
            'marke'=> 'Alpina',
            'modell'=> 'Mountainbike',
            'farbe'=> 'schwarz',
            'preis'=> 15,
            'bild'=> 'mountainbikeAlpina.jpg',
            'details'=> 'guter Zustand',
            'postleitzahl'=> '78462',
            'ort'=> 'Konstanz',
            'strasseNr'=> 'Schreibergasse 2',
            'startdate'=>'2018-01-10',
            'enddate'=>'2018-01-18'
        ));



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


/*
        $firstvermieten1 = FModell::create(array(
            'idArt'=> $fart1,
            'idMarke' => $fmarke1->id,
            'idModell'=> $firstmodelF1,
            'idFarbe'=> $farbe1
        ));
        $this->command->info('FVermietung angelegt!!');

        $firstvermieten2 = FModell::create(array(
            'idArt'=> $fart2,
            'idMarke' => $fmarke2->id,
            'idModell'=> $firstmodelF2,
            'idFarbe'=> $farbe1
        ));
        $this->command->info('FVermietung angelegt!!');

        $firstvermieten3 = FModell::create(array(
            'idArt'=> $fart3,
            'idMarke' => $fmarke2->id,
            'idModell'=> $firstmodelF3,
            'idFarbe'=> $farbe2
        ));
        $this->command->info('FVermietung angelegt!!');


        */

        $role_user = new Role();
        $role_user->name = 'User';
        $role_user->description = 'Ein angemeldeter User';
        $role_user->save();

        $role_benutzer = new Role();
        $role_benutzer->name = 'Benutzer';
        $role_benutzer->description = 'Ein Benutzer';
        $role_benutzer->save();

        $role_admin = new Role();
        $role_admin->name = 'Admin';
        $role_admin->description = 'Ein Administrator';
        $role_admin->save();


        $role_user = Role::where('name', 'User')->first();
        $role_benutzer = Role::where('name', 'Benutzer')->first();
        $role_admin = Role::where('name', 'Admin')->first();

        $user = new User();
        $user->name = 'Rindrit Bislimi';
        $user->email = 'visitor@hotmail.de';
        $user->password = bcrypt('visitor');
        $user->telephonenumber = '01745916905';
        $user->save();
        $user->roles()->attach($role_user);

        $author = new User();
        $author->name = 'Rindrit Bislimi2';
        $author->email = 'benutzer@hotmail.de';
        $author->password = bcrypt('author');
        $author->telephonenumber = '01745916905';
        $author->save();
        $author->roles()->attach($role_benutzer);

        $admin = new User();
        $admin->name = 'Rindrit Bislimi2';
        $admin->email = 'admin@hotmail.de';
        $admin->password = bcrypt('admin');
        $admin->telephonenumber = '01745916905';
        $admin->save();
        $admin->roles()->attach($role_admin);




    }
}
