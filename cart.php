<?php require 'inc/head.php'; ?>
<?php require 'inc/data/products.php'; ?>

<?php
if(!isset($_SESSION['loginname'])){
    header('Location: login.php');
}
if($_SERVER['REQUEST_METHOD']= $_GET) {
    $_SESSION['products'][] = $_GET['id_cookie'];
}
?>

<section class="cookies container-fluid">
    <div class="row">
        <?php if (!empty($_SESSION['products'])) {
            echo "<h3> In my cart </h3>";
            echo "<ul>";
            $totalCookies = 0;
            foreach ($_SESSION['products'] as $product) {
                echo "<li>" . $catalog[$product]['name'] .'<br>' ;
                echo 'Description :' . $catalog[$product]['description'] . '</li>' . '<br>';
                $totalCookies += $product;
            }
            echo "</ul>";
            echo "<h3> Total Cookies :" . $totalCookies . "</h3>";
        }


      ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
