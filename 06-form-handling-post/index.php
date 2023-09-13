<?php
//Mean, Median and Mode calculator
include "../includes/header.php";


?>


<body>

    <main class="container mt-5">
        <section class="row justify-content-center">
            <div class="col-md-10 col-lg-9 col-xxl-8">
                <h1 class="mb-5 text-center">Mean, Median, &amp; Mode Calculator</h1>
                <div class="row">
                    <div class="col-md-6">
                        <?php include "process.php" ?>
                        <aside class="card">
                            <div class="card-header bg-info">
                                <h2>What are Mean, Median, and Mode?</h2>
                            </div>
                            <div class="card-body">
                                <p>The mean, median and mode are simple statistics you can apply to a set of numerical values. Together, the three reveal central tendencies of a distribution of numbers. The mean is the average of all numbers in a set. The median is the middle value in a set of numbers ordered from least to greatest. The mode is the most frequently occurring value in a set. The mean, median and mode are all valid measures of central tendency, but under different conditions, some measures of central tendency become more appropriate to use than others.</p>

                                <dl>
                                    <dt>Mean</dt>
                                    <dd>
                                        The mean is the average of all numbers in a set. To calculate the mean, add up all values and divide by the number of values. For example, if a set of numbers is 2, 7, 4, 9, 3, the mean, or average, is 5. The mean is often used in research, academics and in sports.

                                    </dd>
                                    <dt>Median</dt>
                                    <dd>
                                        The median is the middle value in a set of numbers ordered from least to greatest. To calculate the median, first order the numbers from least to greatest. If there is an odd number of values, the median is the middle number. If there is an even number of values, the median is the average of the two middle numbers. For example, if a set of numbers is 2, 7, 4, 9, 3, the median is 4. If a set of numbers is 2, 7, 4, 9, 3, 8, the median is 5.5. The median is often used in finance and economics.
                                    </dd>
                                    <dt>Mode</dt>
                                    <dd>
                                        The mode is the most frequently occurring value in a set. To calculate the mode, order the numbers from least to greatest and count how many times each number occurs. The mode is the number that occurs the most often. For example, if a set of numbers is 2, 7, 4, 9, 3, 8, 4, 7, 2, the mode is 2. The mode is often used in science and politics.
                                    </dd>
                                </dl>


                            </div>
                        </aside>
                    </div>

                    <div class="col-md-6">
                        <form action="" method="post">
                            <?php
                            // Dynamically write some form elements
                            // for ($i = 1; $i <= 10; $i++) {
                            //     echo "<div class=\"mb-3\">";
                            //     echo "<label for=\"number$i\">Number $i</label>";
                            //     echo "<input type=\"number\" class=\"form-control\" id=\"number$i\" name=\"number$i\" placeholder=\"Enter a number\">";
                            //     echo "</div>";
                            // }


                            // Use alternative syntax for control structures
                            for ($i = 1; $i <= 10; $i++) :
                            ?>
                                <div class="mb-3">
                                    <label for="number<?php echo $i ?>">Number <?php echo $i ?></label>
                                    <input type="number" class="form-control" id="number<?php echo $i ?>" name="number<?php echo $i ?>" placeholder="Enter a number" value="<?php echo rand(1, 100) ?>" />
                                </div>
                            <?php
                            endfor;
                            ?>

                            <div class="mb-3 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary">Calculate</button>
                            </div>


                        </form>
                    </div>
                </div>

            </div>
        </section>
    </main>

</body>


</html>