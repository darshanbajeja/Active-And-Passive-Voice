  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Direct or Indirect Speech</title>
    <style>
        h4 {
            font-size: 20px;
        }

        h3 {
            font-size: 24px;
        }

        body {
            font-family: monospace;
        }
    </style>
</head>
<body>
    <center>
        <h1>
            Active and Passive
        </h1>
        <hr>
        <hr>
    </center>

    <h3>Reqrite the following sentences according to the instructons given after each of them:</h3>

    <!-- Question a -->
    <div class="question">
        <h4>(a) Why did he deprive you of your property? Begin: Why were you</h4>
        <form action="index.php" method="post">
            Ans. <input type="text" name="a">
            <input type="submit"  name="sa">
        </form>
        <?php 
            if(isset($_POST['sa'])) {
                $c = "Why were you deprived of your property by him?";
                $u = $_POST['a'];

                if($u == $c) {
                    echo "<span style='color: green; font-size: 20px;'> Your answer '$u' is correct. </span>";
                }

                else {
                    echo "<span style='color: red; font-size: 20px;'> OOPS! Your answer '$u' is wrong. The correct answer is '$c' </span>";
                }
            }
        ?>
    </div>

    <!-- Question b -->
    <div class="question">
        <h4>(b) No one ought ever to make so false an assumption. End: ought never to be made</h4>
        <form action="index.php" method="post">
            Ans. <input type="text" name="b">
            <input type="submit"  name="sb">
        </form>
        <?php 
            if(isset($_POST['sb'])) {
                $c = "Such an false assumption ought never to be made.";
                $u = $_POST['b'];

                if($u == $c) {
                    echo "<span style='color: green; font-size: 20px;'> Your answer '$u' is correct. </span>";
                }

                else {
                    echo "<span style='color: red; font-size: 20px;'> OOPS! Your answer '$u' is wrong. The correct answer is '$c' </span>";
                }
            }
        ?>
    </div>

    <!-- Question c -->
    <div class="question">
        <h4>(c) It is usually found that the trouble is caused by overeating. Use: finds that overeating</h4>
        <form action="index.php" method="post">
            Ans. <input type="text" name="c">
            <input type="submit"  name="sc">
        </form>
        <?php 
            if(isset($_POST['sc'])) {
                $c = "Everyone finds that overeating causes trouble.";
                $u = $_POST['c'];

                if($u == $c) {
                    echo "<span style='color: green; font-size: 20px;'> Your answer '$u' is correct. </span>";
                }

                else {
                    echo "<span style='color: red; font-size: 20px;'> OOPS! Your answer '$u' is wrong. The correct answer is '$c' </span>";
                }
            }
        ?>
    </div>

        <!-- Question d -->
        <div class="question">
        <h4>(d) Three men are loading the cart. Begin: The cart</h4>
        <form action="index.php" method="post">
            Ans. <input type="text" name="d">
            <input type="submit"  name="sd">
        </form>
        <?php 
            if(isset($_POST['sd'])) {
                $c = "The cart is being loaded by three men.";
                $u = $_POST['d'];

                if($u == $c) {
                    echo "<span style='color: green; font-size: 20px;'> Your answer '$u' is correct. </span>";
                }

                else {
                    echo "<span style='color: red; font-size: 20px;'> OOPS! Your answer '$u' is wrong. The correct answer is '$c' </span>";
                }
            }
        ?>
    </div>

        <!-- Question e -->
        <div class="question">
        <h4>(e) He was known to be a kind man. End: him to be a kind man.</h4>
        <form action="index.php" method="post">
            Ans. <input type="text" name="e">
            <input type="submit"  name="se">
        </form>
        <?php 
            if(isset($_POST['se'])) {
                $c = "Everyone knows him to be a kind man.";
                $u = $_POST['e'];

                if($u == $c) {
                    echo "<span style='color: green; font-size: 20px;'> Your answer '$u' is correct. </span>";
                }

                else {
                    echo "<span style='color: red; font-size: 20px;'> OOPS! Your answer '$u' is wrong. The correct answer is '$c' </span>";
                }
            }
        ?>
    </div>

        <!-- Question f -->
        <div class="question">
        <h4>(f) Alas! We shall hear his voice no more. Begin: Alas! His voice</h4>
        <form action="index.php" method="post">
            Ans. <input type="text" name="f">
            <input type="submit"  name="sf">
        </form>
        <?php 
            if(isset($_POST['sf'])) {
                $c = "Alas! His voice will be heard no more.";
                $u = $_POST['f'];

                if($u == $c) {
                    echo "<span style='color: green; font-size: 20px;'> Your answer '$u' is correct. </span>";
                }

                else {
                    echo "<span style='color: red; font-size: 20px;'> OOPS! Your answer '$u' is wrong. The correct answer is '$c' </span>";
                }
            }
        ?>
    </div>

        <!-- Question g -->
        <div class="question">
        <h4>(g) We must listen to his music. Begin: His music</h4>
        <form action="index.php" method="post">
            Ans. <input type="text" name="g">
            <input type="submit"  name="sg">
        </form>
        <?php 
            if(isset($_POST['sg'])) {
                $c = "His music must be listened by us.";
                $u = $_POST['g'];

                if($u == $c) {
                    echo "<span style='color: green; font-size: 20px;'> Your answer '$u' is correct. </span>";
                }

                else {
                    echo "<span style='color: red; font-size: 20px;'> OOPS! Your answer '$u' is wrong. The correct answer is '$c' </span>";
                }
            }
        ?>
    </div>

        <!-- Question h -->
        <div class="question">
        <h4>(h) There is reason to believe that they have saved the crew. Begin: It is </h4>
        <form action="index.php" method="post">
            Ans. <input type="text" name="h">
            <input type="submit"  name="sh">
        </form>
        <?php 
            if(isset($_POST['sh'])) {
                $c = "It is believed that the crew has been saved by them.";
                $u = $_POST['h'];

                if($u == $c) {
                    echo "<span style='color: green; font-size: 20px;'> Your answer '$u' is correct. </span>";
                }

                else {
                    echo "<span style='color: red; font-size: 20px;'> OOPS! Your answer '$u' is wrong. The correct answer is '$c' </span>";
                }
            }
        ?>
    </div>

        <!-- Question i -->
        <div class="question">
        <h4>(i) He will be elected Secretary by the group. Begin: The group</h4>
        <form action="index.php" method="post">
            Ans. <input type="text" name="i">
            <input type="submit"  name="si">
        </form>
        <?php 
            if(isset($_POST['si'])) {
                $c = "The group will elect him secretary.";
                $u = $_POST['i'];

                if($u == $c) {
                    echo "<span style='color: green; font-size: 20px;'> Your answer '$u' is correct. </span>";
                }

                else {
                    echo "<span style='color: red; font-size: 20px;'> OOPS! Your answer '$u' is wrong. The correct answer is '$c' </span>";
                }
            }
        ?>
    </div>

        <!-- Question j -->
        <div class="question">
        <h4>(j) Short dresses are now being worn again. Begin: Ladies are</h4>
        <form action="index.php" method="post">
            Ans. <input type="text" name="j">
            <input type="submit"  name="sj">
        </form>
        <?php 
            if(isset($_POST['sj'])) {
                $c = "Ladies are wearing short dresses again.";
                $u = $_POST['j'];

                if($u == $c) {
                    echo "<span style='color: green; font-size: 20px;'> Your answer '$u' is correct. </span>";
                }

                else {
                    echo "<span style='color: red; font-size: 20px;'> OOPS! Your answer '$u' is wrong. The correct answer is '$c' </span>";
                }
            }
        ?>
    </div>

</body>
</html>
