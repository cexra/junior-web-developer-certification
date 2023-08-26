<form action="ctrl.php" method="post">
    <input type="number" name="n">
    <input type="submit" value="Submit">
</form>
 
<?php
/**
 * Calculates the sum of numbers from 1 to n using the formula n*(n+1)/2.
 *
 * @param int $n The upper limit of the sum.
 * @return int The sum of numbers from 1 to n.
 */
function hitung_jumlah(int $n): int {
    return ($n * ($n + 1)) / 2;
}
 
/**
 * Calculates the sum of numbers from 1 to n using a loop.
 *
 * @param int $n The upper limit of the sum.
 * @return int The sum of numbers from 1 to n.
 */
function hitung_jumlah2(int $n): int {
    $hasil = 0;
    for ($i = 1; $i <= $n; $i++) {
        $hasil += $i;
    }
    return $hasil;
}
 
if (isset($_POST["n"])) {
    $n = (int) $_POST["n"];
    $hasil1 = hitung_jumlah($n);
    $hasil2 = hitung_jumlah2($n);
 
    /**
     * The sum of numbers from 1 to n using method 1.
     *
     * @var int $hasil1
     */
    echo "Sum using method 1: " . $hasil1 . "<br>";
 
    /**
     * The sum of numbers from 1 to n using method 2.
     *
     * @var int $hasil2
     */
    echo "Sum using method 2: " . $hasil2;
}
?>