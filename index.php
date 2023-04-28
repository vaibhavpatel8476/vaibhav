<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>start php</title>
</head>
<body>
        Starting Php <br><br><br><br>
        <?php
        // class boy{
        //     public $fname;
        //     public $lname;
        //     public function __construct($fname,$lname)
        //     {
        //         $this->fname=$fname;
        //         $this->lname=$lname;
        //     } 
        //     function printname(){
        //         echo "my name is". $this->fname.$this->lname;
        //     }
        // }

        // $myname=new boy("vaibhav","Patel");
        // echo $myname->printname();  
        //
        // $str ="Shounty";
   
        // $status= empty($str)? 'true':'false';
        // echo $status;
        
        // $x = 0;

        // while($x <= 100) {
        //   echo "The number is: $x <br>";
        //   $x++;
        // }
       
        
        // echo $_SERVER['SERVER_SOFTWARE'];
//  echo $_SERVER['SERVER_ADMIN'];
//         echo $_SERVER['PHP_SELF'];
// echo "<br>";
// echo $_SERVER['SERVER_NAME'];
// echo "<br>";
// echo $_SERVER['HTTP_HOST'];
// echo "<br>";
// echo $_SERVER['HTTP_REFERER'];
// echo "<br>";
// echo "<br>";
// echo $_SERVER['SCRIPT_NAME'];


// echo $_SERVER['HTTP_USER_AGENT'];

// -----------loops----------

// for loop

// for($a=0;$a<=5;$a++){
//         echo '*';
//         for($b=0;$b<$a;$b++){
//                 echo '*';
//         }
//         echo "<br>";
        
// }

// while loop 

// $d=1;
// while($d<6){
       
//         if($d<=3){
//                 echo"<br>";
//         }
//         echo"*";
//         $d++;

// do while loop

// $a=1;
// do{
//         echo "abc<br>";
//         $a++;
// }while($a<4)


// foreach loop
 // $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

        // foreach($age as $x => $val) {
        //   echo "$x = $val<br>";
        // }

//    ---------switch case--------------


// }
// $a=10;
// $b=2;

// $option=49;
// switch ($option){
//         case '1':
//                echo $a + $b;
//                 break;
//         case '2':
//                echo $a - $b;
//                 break;
//         case '3':
//                echo $a * $b;
//                 break;
//         case '4':
//                echo $a / $b;
//                 break;
        
//         default:
//                 echo 'default';
//                 break;
// }

// ----------math functions-----------

// echo pi();
// echo '<br>';
// echo abs(7521.255);
// echo '<br>';
// echo round(7521.255);
// echo '<br>';
// echo ceil(7521.255);
// echo '<br>';
// echo floor(7521.255);
// echo '<br>';
// echo min(12,45,45,45,45,4,54,8,5,15);
// echo '<br>';
// echo max(12,45,45,45,45,4,54,8,5,15);
// echo '<br>';
// echo sqrt(555);
// echo '<br>';
// echo rand(50,500);
// echo '<br>';

// -------------if else statements----------
// $age=8;
// if($age==18){
//         echo "You are grown up now<br>";
// }else if($age<18){
//         echo "you are just a kid<br>";
// }else{
//         echo"you are an adult<br>";
// }

// ---------array----------

// $fruits=array("apple","banana","mango","kiwi","Grapes");
// echo $fruits[3]."<br>";

// foreach($fruits as $val){
//         echo $val."<br>";
// }
// echo count($fruits);

// $fruits=array("a"=>"apple","b"=>"banana","m"=>"mango","k"=>"kiwi","g"=>"Grapes");

// foreach($fruits as $key => $val){
//         echo $key.":". $val."<br>";
// }

// function add(int $a , int $b): string  {
//         return $a+$b;
// }
// // echo add(3,4);

// echo var_dump(add(2,3));

// function add($value){
//         $value +=5;
// }
// $num=5;
// add($num);
// echo $num;

// -----------task---------

// $count =0;
// for($a=0;$a<=5;$a++){ 
//         for($b=0;$b<$a;$b++){
//                 echo $count;
//         }
//         $count++;
//         echo "<br>";
        
// }

// echo '<br>';
// echo '<br>';
// echo '<br>';
// echo '<br>';

// $num=1562;

// $rev=0;
// while($num>0){

//         $temp= $num%10;
//         $rev=($temp*10)+$temp;
//         $num= (int)($num/10);
//         $rev= (int)($rev/10);

//         echo $rev;

// }

// echo '<br>';
// echo '<br>';

// for($a=0;$a<=5;$a++){  
//         for($b=5;$b>=$a;$b--){  
//         echo "&nbsp;";  
//         }  
//         for($c=1;$c<=$a;$c++){  
//         echo "*";  
//         }  
//         echo "<br>";  
// }  
       
        ?>
</body>
</html>