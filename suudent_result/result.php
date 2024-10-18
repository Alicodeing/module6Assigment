<?php
$math = 98;
$english = 99;
$bangla = 80;
$science = 96;
$business = 88;
switch($math){
    case ($math < 33):
        echo "You are Fail in this Exam";
        break;
    
}
switch($english){
    case ($english < 33):
        echo "You are Fail in this Exam";
        break;
    
}
switch($bangla){
    case ($bangla < 33):
        echo "You are Fail in this Exam";
        break;
    
}
switch($science){
    case ($science < 33):
        echo "You are Fail in this Exam";
        break;
    
}
switch($business){
    case ($business < 33):
        echo "You are Fail in this Exam";
        break;
    
}
echo "\n";
echo "\n";
switch($math){
    case ($math >= 80 && $math <= 100): 
        echo "You get A+ Grade in Math";
        break;     
    case ($math >=70 && $math <= 79):
        echo "You get A Grade in Math";
        break;     
    case ($math >=60 && $math <= 69):
        echo "You get A- Grade in Math";
        break;     
    case ($math >=50 && $math <= 59):
        echo "You get B Grade in Math";
        break;     
    case ($math >=40 && $math <= 49):
        echo "You get C Grade in Math";
        break;     
    case ($math >=33 && $math <= 39):
        echo "You get D Grade in Math";
        break;     
    default:
        echo "You are F Grade in Math";   
}
echo "\n";
switch($english){
    case ($english >= 80 && $english <= 100): 
        echo "You get A+ Grade in English";
        break;     
    case ($english >=70 && $english <= 79):
        echo "You get A Grade in English";
        break;     
    case ($english >=60 && $english <= 69):
        echo "You get A- Grade in English";
        break;     
    case ($english >=50 && $english <= 59):
        echo "You get B Grade in English";
        break;     
    case ($english >=40 && $english <= 49):
        echo "You get C Grade in English";
        break;     
    case ($english >=33 && $english <= 39):
        echo "You get D Grade in English";
        break;    
    default:
    echo "You are F Grade in English";   
}
echo "\n";
switch($bangla){
    case ($bangla >= 80 && $bangla <= 100): 
        echo "You get A+ Grade in Bangla";
        break;     
    case ($bangla >=70 && $bangla <= 79):
        echo "You get A Grade in Bangla";
        break;     
    case ($bangla >=60 && $bangla <= 69):
        echo "You get A- Grade in Bangla";
        break;     
    case ($bangla >=50 && $bangla <= 59):
        echo "You get B Grade in Bangla";
        break;     
    case ($bangla >=40 && $bangla <= 49):
        echo "You get C Grade in Bangla";
        break;     
    case ($bangla >=33 && $bangla <= 39):
        echo "You get D Grade in Bangla";
        break;    
    default:
    echo "You are F Grade in Bangla";   
}
echo "\n";
switch($science){
    case ($science >= 80 && $science <= 100): 
        echo "You get A+ Grade in Science";
        break;     
    case ($science >=70 && $science <= 79):
        echo "You get A Grade in Science";
        break;     
    case ($science >=60 && $science <= 69):
        echo "You get A- Grade in Science";
        break;     
    case ($science >=50 && $science <= 59):
        echo "You get B Grade in Science";
        break;     
    case ($science >=40 && $science <= 49):
        echo "You get C Grade in Science";
        break;     
    case ($science >=33 && $science <= 39):
        echo "You get D Grade in Science";
        break;    
    default:
    echo "You are F Grade in Science";   
}
echo "\n";
switch($business){
    case ($business >= 80 && $business <= 100): 
        echo "You get A+ Grade in Business";
        break;     
    case ($business >=70 && $business <= 79):
        echo "You get A Grade in Business";
        break;     
    case ($business >=60 && $business <= 69):
        echo "You get A- Grade in Business";
        break;     
    case ($business >=50 && $business <= 59):
        echo "You get B Grade in Business";
        break;     
    case ($business >=40 && $business <= 49):
        echo "You get C Grade in Business";
        break;     
    case ($business >=33 && $business <= 39):
        echo "You get D Grade in Business";
        break;    
    default:
    echo "You are F Grade in Business";   
}

echo"\n";

function totalMark($math, $englis, $bangla, $business, $science){
    $result = $math + $englis + $bangla + $business + $science;
    return $result;
}

echo "Total Mark: " . totalMark($math, $english, $bangla, $business, $science);

echo "\n";
 
$average = totalMark($math, $english, $bangla, $business, $science) / 100;

echo "Average mark: ". $average;

echo "\n";

switch($average){
    case($average >= 1.0 && $average <= 1.99):
        echo "Your Grade is 'D'";
        break;
    case($average >= 2.0 && $average <= 2.99):
        echo "Your Grade is 'C'";
        break;
    case($average >= 3.0 && $average <= 3.49):
        echo "Your Grade is 'B'";
        break;
    case($average >= 3.50 && $average <= 3.99):
        echo "Your Grade is 'A-'";
        break;
    case($average >= 4.0 && $average <= 4.99):
        echo "Your Grade is 'A'";
        break;
    case($average === 5):
        echo "Your Grade is 'A+'";
        break;
    default: 
    echo "You are file";    
}