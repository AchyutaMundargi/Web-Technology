<?php
// Sample array of student records
$students = array(
    array("name" => "John", "age" => 20, "grade" => 85),
    array("name" => "Mary", "age" => 18, "grade" => 92),
    array("name" => "Bob", "age" => 19, "grade" => 78),
    array("name" => "Alice", "age" => 21, "grade" => 90)
);

// Selection sort algorithm to sort by grade in descending order
for($i=0; $i<count($students)-1; $i++){
    $maxIndex = $i;
    for($j=$i+1; $j<count($students); $j++){
        if($students[$j]["grade"] > $students[$maxIndex]["grade"]){
            $maxIndex = $j;
        }
    }
    // Swapping the current element with the max element
    $temp = $students[$i];
    $students[$i] = $students[$maxIndex];
    $students[$maxIndex] = $temp;
}

// Displaying the sorted student records
foreach($students as $student){
    echo "Name: ".$student["name"]." | Age: ".$student["age"]." | Grade: ".$student["grade"]."<br>";
}
?> 

