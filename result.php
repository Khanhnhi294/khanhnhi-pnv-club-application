<link rel="stylesheet" href="style.css">
<div class="result">
    <img src="https://png.pngtree.com/element_our/20190529/ourlarge/pngtree-golden-vector-medal-hand-drawn-cartoon-material-free-download-image_1192100.jpg" class="img"> <br><br>

    <?php
    echo "Thx you " . $_POST["name"] . "!! <br> <br>";
    echo "We receive your application for the " . $_POST["lang"] . "<br> <br>";

    if (isset($_POST["submit"])) {
        echo "You are ";
        $count = count($_POST["skill"]);
        $i = 1;

        foreach ($_POST["skill"] as $value) {
            echo $value;
            if ($i < $count) {
                echo ", ";
            }
            $i++;
        }
        echo "<br><br>";
    }

    if (isset($_POST["submit"])) {
        echo "You will be available on " . $_POST["time"] . "<br><br>";
    }
    ?>

</div>