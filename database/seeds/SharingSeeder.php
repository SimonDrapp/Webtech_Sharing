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


        $firstmodelBMW7 = amodell::create(array(
            'aModellname' => '7er Limousine',
            'idaMarke' => $firstAMarke2->id,
            'idKraftstoff' => $kraftstoff1->id
        ));
        $this->command->info('AModell angelegt!!');






        $firstmodelM2 = amodell::create(array(
            'aModellname' => 'S65 AMG',
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

        $firstmodelP3 = amodell::create(array(
            'aModellname' => 'Panamera',
            'idaMarke' => $firstAMarke4->id,
            'idKraftstoff' => $kraftstoff1->id
        ));
        $this->command->info('AModell angelegt!!');

        $firstmodelP5 = amodell::create(array(
            'aModellname' => 'Cayenne S',
            'idaMarke' => $firstAMarke4->id,
            'idKraftstoff' => $kraftstoff2->id
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

        $fmarke6 = fmarke:: create(array(
            'name'=> 'Ghost',
            'idArt' => $fart2->id,
        ));

        $fmarke2 = fmarke:: create(array(
            'name'=> 'Carver',
            'idArt' => $fart3->id,
        ));

        $fmarke9 = fmarke:: create(array(
            'name'=> 'Serious',
            'idArt' => $fart3->id,
        ));

        $fmarke4 = fmarke:: create(array(
            'name'=> 'Scott',
            'idArt' => $fart4->id,
        ));

        $fmarke8 = fmarke:: create(array(
            'name'=> 'Bellini',
            'idArt' => $fart1->id,
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
