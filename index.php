<?php
$stock =0;
$ordered = 3;

if ($stock > 0){
    $message = "In stock";
} elseif($ordered > 0){
    $message = "Coming soon";
} else {
    $message = "Sold out!";
}
$day ='Tuesday';
switch($day){
    case 'Monday':
        $offer = "20% off chocolates";
        break;
    case 'Tuesday':
        $offer = "20% off mints";
        break;
    default:
        $offer = '3+1 mints';
}
//match문
$month = 'March, April';

$mth_offer = match($month){
    'January, February' => '20% off mints',
    'March, April'      => '30% off chocolates',
    default             => '10% off whole order',
}
?>
<?php require_once 'includes/header.php'?>
        <h2>Chocolate</h2>
        <p><?=$message ?></p>

        <h2>Offers in <?=$month; ?></h2>

<?php include 'includes/footer.php'?>
    