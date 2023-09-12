<?php

$company_Name= "HP";
$Email = "hp5500@gmail.com";
$phone = "01711111111";
$location = "Chittagong";
$companyStatus = "true";

$HP_Company = [ "HP", "hp5500@gmail.com", "01711111111", "Chittagong", "true" ];

echo '<pre>';
   print_r ($HP_Company);
echo '</pre>';
echo "<br>";



$company_Name= "HP";
$Email = "hp5500@gmail.com";
$phone = "01711111111";
$location = "Chittagong";
$companyStatus = "true";

$HP_Company =[
    'Company_Name' =>"HP",
    'Email' =>"hp5500@gmail.com",
    'phpne' =>01711111111,
    'location' =>"Chittagong",
    'companyStatus' =>"true"
];
echo '<pre>';
   print_r ($HP_Company);
echo '</pre>';



echo "<br>";

echo "<h1> Multidimensional Arrays</h1>";
echo "<hr><br>";


$Student_List =[
    [
         'Name' => 'Korim',
         'id'   =>   '01',
         'class'=>'07',
         'phone'=>'01811111111',
        'total present'=>'80%',
        'total absent '=> '20%',
    ],
    [
        'Name' => 'Rohim',
        'id'   =>   '02',
        'class'=>'07',
        'phone'=>'01811111112',
       'total present'=>'85',
       'total absent '=> '25%',
   ],
   [
      'Name' => 'Azad',
      'id'   =>   '03',
      'class'=>'02',
      'phone'=>'01811111113',
      'total present'=>'80%',
      'total absent '=> '20%',
   ],
   'goodStudent'=>[
    'Name' => 'Abdul',
    'id'   =>   '04',
    'class'=>'10',
    'phone'=>'01811111114',
    'total present'=>'90%',
    'total absent '=> '10%',
 ],
  
    

];

echo '<pre>';
   print_r ($Student_List);
echo '</pre>';
echo '<hr>';
echo "<br>";

$Student_List =[
    'goodStudent'=>[
        'Name' => 'Abdul',
        'id'   =>   '04',
        'class'=>'10',
        'phone'=>'01811111114',
        'total present'=>'90%',
        'total absent '=> '10%',
     ],
      

];

   echo $Student_List ['goodStudent'] ['Name'];
   echo "<br>";


$list=[

   'Name' => 'Korim',
   'id'   =>   '01',
   'class'=>'07',
   'phone'=>'01811111111',
   'email'=> 'korim1212@gmail.com'
];
echo strtoupper($list['Name']);
echo "<br>";
echo strtolower($list['email']);
echo "<hr>";
echo "<br>";

$list=[

    'Name' => 'rohim ahmed',
    'id'   =>   '01',
    'class'=>'07',
    'phone'=>'01811111111',
    'email'=> 'korim1212@gmail.com'
 ];


 echo ucwords ($list['Name']);
 echo "<br>";
 echo ucwords ($list['email']);
