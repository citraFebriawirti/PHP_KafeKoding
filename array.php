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
       
        'nama'=>'Thilo Kehrer',
        'posisi'=>'DF',
        'nomor'=>4,
        'negara'=>'Jerman'
      ],
     // dan sebagainya
   ]
];
echo 'Citra Febriawirti'.'<br>'.'2011100032';
echo '<hr>';
echo '<br>';

echo $klub['nama'].' adalah salah satu klub dari '.$klub['negara'].' yang bermain di ' .$klub['liga'].'. Dengan daftar pemain sebagai berikut  '.$klub['pemain'][0]['nama'] .' ,'.$klub['pemain'][1]['nama'] .' ,'.$klub['pemain'][2]['nama'] .' ,'.' dan sebagainya';

?>