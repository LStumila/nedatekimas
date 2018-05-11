<?php
$produktai =[
  [
      'title' => 'Knyga kaip suvalgyti meleona',
      'price' => 4.3457 ,
  ],
    [
        'title' => 'Knyga vienuolis stumde koksa',
    'price' => 16.1457 ,
    ]

];
echo '<ul>';

foreach ($produktai as $product)
{
echo  '<li>' . $product ['title'] .'  ' .' Kaina: '.
   formatPrice( $product ['price']) .'</li>';
}
echo '</ul>';
function formatPrice($price)
{
 $ret = round($price, 2). 'Jewrai';
 return $ret;
}