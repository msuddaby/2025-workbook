<!-- 
    NOTE: even though this particular demo has exactly 10 inputs, all of which are required,
    the soltion for other possibilities (an odd number of inputs, or a different number of inputs)
    is included down below. Students will need code like this in their upcoming labs.
-->

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nums = array();
    for ($i = 1; $i <= 10; $i++) {
        $nums[] = $_POST["number$i"];
    }

    // Mean
    // sort(): https://www.php.net/manual/en/function.sort.php
    // Sorts array in ascending order

    sort($nums);

    $count = count($nums); // counts the number of items in an array

    $sum = array_sum($nums); // adds up all the values in an array

    $mean = $sum / $count;
    $meanAlert = <<<HTML
    <div class="alert alert-primary">
        <p class="m-0 p-0">The mean is $mean</p>
    </div>
    HTML;

    echo $meanAlert;

    // Median
    /* The medican calc depends on wheter the number of elements in the array is odd or even.
     * If the number of elements is odd, the median is the middle value.
     * If the number of elements is even, the median is the average of the two middle values.
     */

    if ($count % 2 == 0) {
        // Even
        $middle = $count / 2;
        $median = ($nums[$middle] + $nums[$middle - 1]) / 2;
    } else {
        // Odd
        $middle = floor($count / 2);
        $median = $nums[$middle];
    }

    $medianAlert = <<<HTML
    <div class="alert alert-primary">
        <p class="m-0 p-0">The median is $median</p>
    </div>
    HTML;

    echo $medianAlert;

    // Mode
    // array_count_values(): https://www.php.net/manual/en/function.array-count-values.php
    // Counts all the values of an array
    $counts = array_count_values($nums);

    // arsort(): https://www.php.net/manual/en/function.arsort.php
    // Sorts an array in descending order, according to the value
    arsort($counts);

    // array_keys(): https://www.php.net/manual/en/function.array-keys.php
    // Returns all the keys or a subset of the keys of an array
    $keys = array_keys($counts, max($counts));

    $modeString = implode(", ", $keys);

    $modeAlert = <<<HTML
    <div class="alert alert-primary">
        <p class="m-0 p-0">The mode is $modeString</p>
    </div>
    HTML;

    echo $modeAlert;
}


?>