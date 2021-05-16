<?php 	
// soal : Paris St. Germain adalah salah satu klub dari Prancis yang bermain di Ligue 1. Dengan daftar pemain sebagai berikut Keylor Navas, Presnel Kimpembe, Thilo kehrer dan sebagainya
$klub =[
   'nama'=> 'Paris St. Germain',
   'negara'=>'Prancis',
   'liga'=>'Ligue 1',
   'pemain'=>[
      [
         'nama'=> 'Keylor Navas',
         'posisi'=>'GK',
         'nomor'=>1,
         'negara'=>'Kosta Rika'
      ],
      [
     
        'nama'=>'Presnel Kimpembe',
        'posisi'=>'DF',
        'nomor'=>3,
        'negara'=>'Prancis'
      ],
      [
       
        'nama'=>'Ihilo Kehrer',
        'posisi'=>'DF',
        'nomor'=>4,
        'negara'=>'Jerman'
      ],
     // dan sebagainya
   ]
];

echo $klub['pemain'][0]['nama'];
echo $klub['pemain'][0]['negara'];
echo "<br>";
echo $klub['pemain'][1]['nama'];
echo $klub['pemain'][1]['negara'];




 ?>