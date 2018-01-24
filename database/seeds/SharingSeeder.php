<?php


use App\amodell;
use App\amarke;
use App\baujahr;
use App\kraftstoff;
use App\ort;
use App\farbe;
use App\art;
use App\fmarke;
use App\fmodell;
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
        DB::table('ort')->delete();
        DB::table('amodell')->delete();
        DB::table('amarke')->delete();
        DB::table('kraftstoff')->delete();
        DB::table('baujahr')->delete();
        DB::table('farbe')->delete();


          ort:: create(array(
          'Name'=> 'Konstanz Petershausen-West',
          'plz'=> '78467'
      ));
          ort:: create(array(
          'Name'=> 'Konstanz Wollmatingen',
          'plz'=> '78467'
      ));
          ort:: create(array(
          'Name'=> 'Konstanz Paradies',
          'plz'=> '78462'
      ));
          ort:: create(array(
          'Name'=> 'Konstanz Petershausen-Ost',
          'plz'=> '78464'
      ));
          ort:: create(array(
          'Name'=> 'Konstanz Dettingen',
          'plz'=> '78465'
      ));
          ort:: create(array(
          'Name'=> 'Singen',
          'plz'=> '78224'
      ));
          ort:: create(array(
          'Name'=> 'Baden-Baden',
          'plz'=> '76530'
      ));
        ort:: create(array(
          'Name'=> 'Varnhalt',
          'plz'=> '76534'
      ));
          ort:: create(array(
          'Name'=> 'Stuttgart',
          'plz'=> '70173'
      ));
          ort:: create(array(
          'Name'=> 'Sindelfingen',
          'plz'=> '71034'
      ));

        autovermietung:: create(array(
            'name' => 'Auto',
            'marke' => 'Audi',
            'modell' => 'A3',
            'baujahr' => '2014',
            'farbe' => 'silber',
            'kraftstoff' => 'Benzin',
            'preis' => 50,
            'bild' => 'audiA3.jpg',
            'details' => 'neuer Audi A3',
            'postleitzahl' => '78462',
            'ort' => 'Konstanz',
            'strasseNr' => 'Alfred-Wachtel-Straße 8',
            'startdate' => '2018-01-09',
            'enddate' => '2018-01-18'
        ));

        autovermietung:: create(array(
            'name' => 'Auto',
            'marke' => 'Audi',
            'modell' => 'A5',
            'baujahr' => '2016',
            'farbe' => 'rot',
            'kraftstoff' => 'Benzin',
            'preis' => 100,
            'bild' => 'audiA5.jpg',
            'details' => 'neuer Audi A5',
            'postleitzahl' => '78462',
            'ort' => 'Konstanz',
            'strasseNr' => 'Bodanstraße 15',
            'startdate' => '2018-01-10',
            'enddate' => '2018-01-20'
        ));

        autovermietung:: create(array(
            'name' => 'Auto',
            'marke' => 'BMW',
            'modell' => '3er',
            'baujahr' => '2015',
            'farbe' => 'silber',
            'kraftstoff' => 'Benzin',
            'preis' => 30,
            'bild' => 'audiA3.jpg',
            'details' => 'neuer Audi A3',
            'postleitzahl' => '78479',
            'ort' => 'Reichenau',
            'strasseNr' => 'Priminstraße 45',
            'startdate' => '2018-01-11',
            'enddate' => '2018-01-30'
        ));

        autovermietung:: create(array(
            'name' => 'Auto',
            'marke' => 'Mercedes',
            'modell' => 'CLS',
            'baujahr' => '2017',
            'farbe' => 'silber',
            'kraftstoff' => 'Benzin',
            'preis' => 50,
            'bild' => 'audiA3.jpg',
            'details' => 'neuer Audi A3',
            'postleitzahl' => '78467',
            'ort' => 'Konstanz',
            'strasseNr' => 'Fürstenbergstraße 87',
            'startdate' => '2018-01-12',
            'enddate' => '2018-01-15'
        ));

        fahrradvermietung:: create(array(
            'name' => 'Fahrrad',
            'art' => 'Freizeitbike',
            'marke' => 'Alpina',
            'modell' => 'Mountainbike',
            'farbe' => 'schwarz',
            'preis' => 5,
            'bild' => 'mountainbikeAlpina.jpg',
            'details' => 'guter Zustand',
            'postleitzahl' => '78464',
            'ort' => 'Konstanz',
            'strasseNr' => 'Universitätsstraße 10',
            'startdate' => '2018-01-10',
            'enddate' => '2018-01-18'
        ));
        fahrradvermietung:: create(array(
            'name' => 'Fahrrad',
            'art' => 'Freizeitbike',
            'marke' => 'Alpina',
            'modell' => 'Mountainbike',
            'farbe' => 'schwarz',
            'preis' => 10,
            'bild' => 'mountainbikeAlpina.jpg',
            'details' => 'guter Zustand',
            'postleitzahl' => '78464',
            'ort' => 'Konstanz',
            'strasseNr' => 'Sonnenbühlstraße 5',
            'startdate' => '2018-01-13',
            'enddate' => '2018-01-25'
        ));
        fahrradvermietung:: create(array(
            'name' => 'Fahrrad',
            'art' => 'Freizeitbike',
            'marke' => 'Alpina',
            'modell' => 'Mountainbike',
            'farbe' => 'schwarz',
            'preis' => 12,
            'bild' => 'mountainbikeAlpina.jpg',
            'details' => 'guter Zustand',
            'postleitzahl' => '78467',
            'ort' => 'Konstanz',
            'strasseNr' => 'Hindenburgstraße 5',
            'startdate' => '2018-01-11',
            'enddate' => '2018-01-17'
        ));

        fahrradvermietung:: create(array(
            'name' => 'Fahrrad',
            'art' => 'Freizeitbike',
            'marke' => 'Alpina',
            'modell' => 'Mountainbike',
            'farbe' => 'schwarz',
            'preis' => 15,
            'bild' => 'mountainbikeAlpina.jpg',
            'details' => 'guter Zustand',
            'postleitzahl' => '78462',
            'ort' => 'Konstanz',
            'strasseNr' => 'Schreibergasse 2',
            'startdate' => '2018-01-10',
            'enddate' => '2018-01-18'
        ));




        $kraftstoff1 = kraftstoff:: create(array(
            'name'=> 'Benzin'
        ));

        $kraftstoff2 = kraftstoff:: create(array(
            'name'=> 'Diesel'
        ));



        $farbe1 = farbe:: create(array(
            'name'=> 'rot'
        ));

        $farbe2 = farbe:: create(array(
            'name'=> 'silber'
        ));

        $farbe3 = farbe:: create(array(
            'name'=> 'grau'
        ));

        $farbe4 = farbe:: create(array(
            'name'=> 'schwarz'
        ));

        $farbe5 = farbe:: create(array(
            'name'=> 'gelb'
        ));

        $farbe6 = farbe:: create(array(
            'name'=> 'blau'
        ));

        $farbe7 = farbe:: create(array(
            'name'=> 'grün'
        ));

        $farbe8 = farbe:: create(array(
            'name'=> 'grau'
        ));



        $firstbaujahr0 = baujahr:: create(array(
            'jahr' => 2018
        ));

        $firstbaujahr1 = baujahr:: create(array(
            'jahr' => 2017
        ));

        $firstbaujahr2 = baujahr:: create(array(
            'jahr' => 2016
        ));

        $firstbaujahr3 = baujahr:: create(array(
            'jahr' => 2015
        ));

        $firstbaujahr4 = baujahr:: create(array(
            'jahr' => 2014
        ));

        $firstbaujahr5 = baujahr:: create(array(
            'jahr' => 2013
        ));

        $firstbaujahr6 = baujahr:: create(array(
            'jahr' => 2012
        ));

        $firstbaujahr7 = baujahr:: create(array(
            'jahr' => 2011
        ));

        $firstbaujahr8 = baujahr:: create(array(
            'jahr' => 2010
        ));




        $firstAMarke1 = amarke:: create(array(
            'name' => 'Audi'
        ));
        $firstAMarke2 = amarke:: create(array(
            'name' => 'BMW'
        ));
        $firstAMarke3 = amarke:: create(array(
            'name' => 'Mercedes'
        ));
        $firstAMarke4 = amarke:: create(array(
            'name' => 'Porsche'
        ));
        $firstAMarke5 = amarke:: create(array(
            'name' => 'Toyota'
        ));
        $firstAMarke6 = amarke:: create(array(
            'name' => 'Ford'
        ));



        $firstmodelA1 = amodell::create(array(
            'aModellname' => 'A1 Sportback',
            'idaMarke' => $firstAMarke1->id,
            'idKraftstoff' => $kraftstoff2->id
        ));
        $this->command->info('AModell angelegt!!');

        $firstmodelA3 = amodell::create(array(
            'aModellname' => 'A3 Cabriolet',
            'idaMarke' => $firstAMarke1->id,
            'idKraftstoff' => $kraftstoff2->id
        ));
        $this->command->info('AModell angelegt!!');

        $firstmodelA4 = amodell::create(array(
            'aModellname' => 'A4 Limousine',
            'idaMarke' => $firstAMarke1->id,
            'idKraftstoff' => $kraftstoff1->id
        ));
        $this->command->info('AModell angelegt!!');

        $firstmodelA5 = AModell::create(array(
            'aModellname' => 'A5 Coupé',
            'idaMarke' => $firstAMarke1->id,
            'idKraftstoff' => $kraftstoff1->id
        ));
        $this->command->info('AModell angelegt!!');

        $firstmodelA7 = amodell::create(array(
            'aModellname' => 'A7 Sportback',
            'idaMarke' => $firstAMarke1->id,
            'idKraftstoff' => $kraftstoff1->id
        ));
        $this->command->info('AModell angelegt!!');



        $firstmodelBMW2 = amodell::create(array(
            'aModellname' => '2er Coupé',
            'idaMarke' => $firstAMarke2->id,
            'idKraftstoff' => $kraftstoff2->id
        ));
        $this->command->info('AModell angelegt!!');

        $firstmodelBMW3 = amodell::create(array(
            'aModellname' => '3er Touring',
            'idaMarke' => $firstAMarke2->id,
            'idKraftstoff' => $kraftstoff1->id
        ));
        $this->command->info('AModell angelegt!!');

        $firstmodelBMW4 = amodell::create(array(
            'aModellname' => '4er Gran Coupé',
            'idaMarke' => $firstAMarke2->id,
            'idKraftstoff' => $kraftstoff2->id
        ));
        $this->command->info('AModell angelegt!!');

        $firstmodelBMW5 = amodell::create(array(
            'aModellname' => '5er Limousine',
            'idaMarke' => $firstAMarke2->id,
            'idKraftstoff' => $kraftstoff1->id
        ));
        $this->command->info('AModell angelegt!!');

        $firstmodelBMW7 = amodell::create(array(
            'aModellname' => '7er Limousine',
            'idaMarke' => $firstAMarke2->id,
            'idKraftstoff' => $kraftstoff1->id
        ));
        $this->command->info('AModell angelegt!!');





        $firstmodelM1 = amodell::create(array(
            'aModellname' => 'CLA Coupé',
            'idaMarke' => $firstAMarke3->id,
            'idKraftstoff' => $kraftstoff1->id
        ));
        $this->command->info('AModell angelegt!!');

        $firstmodelM2 = amodell::create(array(
            'aModellname' => 'S65 AMG',
            'idaMarke' => $firstAMarke3->id,
            'idKraftstoff' => $kraftstoff1->id
        ));
        $this->command->info('AModell angelegt!!');

        $firstmodelM3 = amodell::create(array(
            'aModellname' => 'GLE Coupé',
            'idaMarke' => $firstAMarke3->id,
            'idKraftstoff' => $kraftstoff1->id
        ));
        $this->command->info('AModell angelegt!!');

        $firstmodelM4 = amodell::create(array(
            'aModellname' => 'C-350',
            'idaMarke' => $firstAMarke3->id,
            'idKraftstoff' => $kraftstoff2->id
        ));
        $this->command->info('AModell angelegt!!');

        $firstmodelM5 = amodell::create(array(
            'aModellname' => 'E-200',
            'idaMarke' => $firstAMarke3->id,
            'idKraftstoff' => $kraftstoff2->id
        ));
        $this->command->info('AModell angelegt!!');





        $firstmodelP1 = amodell::create(array(
            'aModellname' => '911 Carrera',
            'idaMarke' => $firstAMarke4->id,
            'idKraftstoff' => $kraftstoff1->id
        ));
        $this->command->info('AModell angelegt!!');

        $firstmodelP2 = amodell::create(array(
            'aModellname' => '911 Turbo',
            'idaMarke' => $firstAMarke4->id,
            'idKraftstoff' => $kraftstoff1->id
        ));
        $this->command->info('AModell angelegt!!');

        $firstmodelP3 = amodell::create(array(
            'aModellname' => 'Panamera',
            'idaMarke' => $firstAMarke4->id,
            'idKraftstoff' => $kraftstoff1->id
        ));
        $this->command->info('AModell angelegt!!');

        $firstmodelP4 = amodell::create(array(
            'aModellname' => 'Macan Turbo',
            'idaMarke' => $firstAMarke4->id,
            'idKraftstoff' => $kraftstoff2->id
        ));
        $this->command->info('AModell angelegt!!');

        $firstmodelP5 = amodell::create(array(
            'aModellname' => 'Cayenne S',
            'idaMarke' => $firstAMarke4->id,
            'idKraftstoff' => $kraftstoff2->id
        ));
        $this->command->info('AModell angelegt!!');




        $firstmodelT1 = amodell::create(array(
            'aModellname' => 'GT86',
            'idaMarke' => $firstAMarke5->id,
            'idKraftstoff' => $kraftstoff1->id
        ));
        $this->command->info('AModell angelegt!!');

        $firstmodelT2 = amodell::create(array(
            'aModellname' => 'Avensis',
            'idaMarke' => $firstAMarke5->id,
            'idKraftstoff' => $kraftstoff1->id
        ));
        $this->command->info('AModell angelegt!!');

        $firstmodelT3 = amodell::create(array(
            'aModellname' => 'Corolla',
            'idaMarke' => $firstAMarke5->id,
            'idKraftstoff' => $kraftstoff2->id
        ));
        $this->command->info('AModell angelegt!!');

        $firstmodelT4 = amodell::create(array(
            'aModellname' => 'Yaris',
            'idaMarke' => $firstAMarke5->id,
            'idKraftstoff' => $kraftstoff2->id
        ));
        $this->command->info('AModell angelegt!!');

        $firstmodelT5 = amodell::create(array(
            'aModellname' => 'Auris',
            'idaMarke' => $firstAMarke5->id,
            'idKraftstoff' => $kraftstoff2->id
        ));
        $this->command->info('AModell angelegt!!');




        $firstmodelFo1 = amodell::create(array(
            'aModellname' => 'Fiesta',
            'idaMarke' => $firstAMarke6->id,
            'idKraftstoff' => $kraftstoff2->id
        ));
        $this->command->info('AModell angelegt!!');

        $firstmodelFo1 = amodell::create(array(
            'aModellname' => 'Focus',
            'idaMarke' => $firstAMarke6->id,
            'idKraftstoff' => $kraftstoff2->id
        ));
        $this->command->info('AModell angelegt!!');

        $firstmodelFo1 = amodell::create(array(
            'aModellname' => 'GT',
            'idaMarke' => $firstAMarke6->id,
            'idKraftstoff' => $kraftstoff1->id
        ));
        $this->command->info('AModell angelegt!!');

        $firstmodelFo1 = amodell::create(array(
            'aModellname' => 'Mustang',
            'idaMarke' => $firstAMarke6->id,
            'idKraftstoff' => $kraftstoff1->id
        ));
        $this->command->info('AModell angelegt!!');

        $firstmodelFo1 = amodell::create(array(
            'aModellname' => 'Edge',
            'idaMarke' => $firstAMarke6->id,
            'idKraftstoff' => $kraftstoff1->id
        ));
        $this->command->info('AModell angelegt!!');




        $fart1 = art:: create(array(
            'name'=> 'Kinderräder'
        ));
        $fart2 = art:: create(array(
            'name'=> 'E-Bike'
        ));
        $fart3 = art:: create(array(
            'name'=> 'Mountainbike'
        ));
        $fart4 = art:: create(array(
            'name'=> 'Rennräder'
        ));



        $fmarke1 = fmarke:: create(array(
            'name'=> 'Bergamont',
            'idArt' => $fart2->id,
        ));

        $fmarke2 = fmarke:: create(array(
            'name'=> 'Carver',
            'idArt' => $fart3->id,
        ));

        $fmarke4 = fmarke:: create(array(
            'name'=> 'Scott',
            'idArt' => $fart4->id,
        ));

        $fmarke5 = fmarke:: create(array(
            'name'=> 'Cannondale',
            'idArt' => $fart4->id,
        ));

        $fmarke6 = fmarke:: create(array(
            'name'=> 'Ghost',
            'idArt' => $fart2->id,
        ));

        $fmarke7 = fmarke:: create(array(
            'name'=> 'Cube',
            'idArt' => $fart1->id,
        ));

        $fmarke8 = fmarke:: create(array(
            'name'=> 'Bellini',
            'idArt' => $fart1->id,
        ));

        $fmarke9 = fmarke:: create(array(
            'name'=> 'Serious',
            'idArt' => $fart3->id,
        ));

        $fmarke10 = fmarke:: create(array(
            'name'=> 'Leaderfox',
            'idArt' => $fart1->id,
        ));

        $fmarke11 = fmarke:: create(array(
            'name'=> 'Diamant',
            'idArt' => $fart2->id,
        ));

        $fmarke12 = fmarke:: create(array(
            'name'=> 'BMC',
            'idArt' => $fart3->id,
        ));

        $fmarke13 = fmarke:: create(array(
            'name'=> 'Focus',
            'idArt' => $fart4->id,
        ));



        $firstmodelF1 = fmodell::create(array(
            'name' => 'Bellini Resi',
            'idMarke' => $fmarke8->id
        ));
        $this->command->info('FModell angelegt!!');

        $firstmodelF2 = fmodell::create(array(
            'name' => 'Bellini Carlo',
            'idMarke' => $fmarke8->id
        ));
        $this->command->info('FModell angelegt!!');

        $firstmodelF3 = fmodell::create(array(
            'name' => 'Bellini Emma',
            'idMarke' => $fmarke8->id
        ));
        $this->command->info('FModell angelegt!!');



        $firstmodelF5 = fmodell::create(array(
            'name' => 'E-Ville C XT500',
            'idMarke' => $fmarke1->id
        ));
        $this->command->info('FModell angelegt!!');

        $firstmodelF6 = fmodell::create(array(
            'name' => 'E-Ville C N330',
            'idMarke' => $fmarke1->id
        ));
        $this->command->info('FModell angelegt!!');

        $firstmodelF7 = fmodell::create(array(
            'name' => 'E-Horizon 9.0',
            'idMarke' => $fmarke1->id
        ));
        $this->command->info('FModell angelegt!!');



        $firstmodelF8 = fmodell::create(array(
            'name' => 'Provo Trail',
            'idMarke' => $fmarke9->id
        ));
        $this->command->info('FModell angelegt!!');

        $firstmodelF9 = fmodell::create(array(
            'name' => 'Shoreline',
            'idMarke' => $fmarke9->id
        ));
        $this->command->info('FModell angelegt!!');

        $firstmodelF10 = fmodell::create(array(
            'name' => 'Eight Ball',
            'idMarke' => $fmarke9->id
        ));
        $this->command->info('FModell angelegt!!');



        $firstmodelF11 = fmodell::create(array(
            'name' => 'CAAD12 Ultegra',
            'idMarke' => $fmarke5->id
        ));
        $this->command->info('FModell angelegt!!');

        $firstmodelF12 = fmodell::create(array(
            'name' => 'Slate Ultegra',
            'idMarke' => $fmarke5->id
        ));
        $this->command->info('FModell angelegt!!');

        $firstmodelF13 = fmodell::create(array(
            'name' => 'CAAD12 Disc Ultegra',
            'idMarke' => $fmarke5->id
        ));
        $this->command->info('FModell angelegt!!');



        $firstmodelF14 = fmodell::create(array(
            'name' => 'Speedster 30 Compact',
            'idMarke' => $fmarke4->id
        ));
        $this->command->info('FModell angelegt!!');

        $firstmodelF15 = fmodell::create(array(
            'name' => 'Speedster SE',
            'idMarke' => $fmarke4->id
        ));
        $this->command->info('FModell angelegt!!');

        $firstmodelF16 = fmodell::create(array(
            'name' => 'Contessa Solace 15',
            'idMarke' => $fmarke4->id
        ));
        $this->command->info('FModell angelegt!!');




        $firstmodelF17 = fmodell::create(array(
            'name' => 'PHT 100',
            'idMarke' => $fmarke2->id
        ));
        $this->command->info('FModell angelegt!!');

        $firstmodelF18 = fmodell::create(array(
            'name' => 'Transalpin 902',
            'idMarke' => $fmarke2->id
        ));
        $this->command->info('FModell angelegt!!');

        $firstmodelF19 = fmodell::create(array(
            'name' => 'CCB 01',
            'idMarke' => $fmarke2->id
        ));
        $this->command->info('FModell angelegt!!');



        $firstmodelF20 = fmodell::create(array(
            'name' => 'Teru 6',
            'idMarke' => $fmarke6->id
        ));
        $this->command->info('FModell angelegt!!');

        $firstmodelF21 = fmodell::create(array(
            'name' => 'E-Hybrid Kato 4',
            'idMarke' => $fmarke6->id
        ));
        $this->command->info('FModell angelegt!!');

        $firstmodelF22 = fmodell::create(array(
            'name' => 'Kato Hybrid S',
            'idMarke' => $fmarke6->id
        ));
        $this->command->info('FModell angelegt!!');




        $firstmodelF23 = fmodell::create(array(
            'name' => 'Kid 200 Street',
            'idMarke' => $fmarke7->id
        ));
        $this->command->info('FModell angelegt!!');

        $firstmodelF24 = fmodell::create(array(
            'name' => 'Kid 240 Disc',
            'idMarke' => $fmarke7->id
        ));
        $this->command->info('FModell angelegt!!');

        $firstmodelF25 = fmodell::create(array(
            'name' => 'Kato 200 Allroad',
            'idMarke' => $fmarke7->id
        ));
        $this->command->info('FModell angelegt!!');




        $firstmodelF26 = fmodell::create(array(
            'name' => 'Snake Boy',
            'idMarke' => $fmarke10->id
        ));
        $this->command->info('FModell angelegt!!');

        $firstmodelF27 = fmodell::create(array(
            'name' => 'Keno',
            'idMarke' => $fmarke10->id
        ));
        $this->command->info('FModell angelegt!!');

        $firstmodelF28 = fmodell::create(array(
            'name' => 'Spide Girl',
            'idMarke' => $fmarke10->id
        ));
        $this->command->info('FModell angelegt!!');



        $firstmodelF29 = fmodell::create(array(
            'name' => 'Ubari Super Deluxe',
            'idMarke' => $fmarke11->id
        ));
        $this->command->info('FModell angelegt!!');

        $firstmodelF30 = fmodell::create(array(
            'name' => 'Zouma S',
            'idMarke' => $fmarke11->id
        ));
        $this->command->info('FModell angelegt!!');

        $firstmodelF31 = fmodell::create(array(
            'name' => 'Elan Sport',
            'idMarke' => $fmarke11->id
        ));
        $this->command->info('FModell angelegt!!');


        $firstmodelF32 = fmodell::create(array(
            'name' => 'Fourstroke 02 XT',
            'idMarke' => $fmarke12->id
        ));
        $this->command->info('FModell angelegt!!');

        $firstmodelF33 = fmodell::create(array(
            'name' => 'Teamelite 02 XT',
            'idMarke' => $fmarke12->id
        ));
        $this->command->info('FModell angelegt!!');

        $firstmodelF34 = fmodell::create(array(
            'name' => 'Sportelite SLX-XT',
            'idMarke' => $fmarke12->id
        ));
        $this->command->info('FModell angelegt!!');



        $firstmodelF35 = fmodell::create(array(
            'name' => 'Izalco Chrono',
            'idMarke' => $fmarke13->id
        ));
        $this->command->info('FModell angelegt!!');

        $firstmodelF36 = fmodell::create(array(
            'name' => 'Paralane Ultegra',
            'idMarke' => $fmarke13->id
        ));
        $this->command->info('FModell angelegt!!');

        $firstmodelF37 = fmodell::create(array(
            'name' => 'Mares AL',
            'idMarke' => $fmarke13->id
        ));
        $this->command->info('FModell angelegt!!');




        $role_user = new Role();
        $role_user->name = 'Gast';
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


        $role_user = Role::where('name', 'Gast')->first();
        $role_benutzer = Role::where('name', 'Benutzer')->first();
        $role_admin = Role::where('name', 'Admin')->first();

        $user = new User();
        $user->name = 'Gast';
        $user->email = 'gast@hotmail.de';
        $user->password = bcrypt('Gast');
        $user->telephonenumber = '01745916905';
        $user->save();
        $user->roles()->attach($role_user);

        $author = new User();
        $author->name = 'Benutzer';
        $author->email = 'benutzer@hotmail.de';
        $author->password = bcrypt('Benutzer');
        $author->telephonenumber = '01745916905';
        $author->save();
        $author->roles()->attach($role_benutzer);

        $admin = new User();
        $admin->name = 'Rindrit Bislimi';
        $admin->email = 'admin@hotmail.de';
        $admin->password = bcrypt('Admin');
        $admin->telephonenumber = '01745916905';
        $admin->save();
        $admin->roles()->attach($role_admin);

    }
}
