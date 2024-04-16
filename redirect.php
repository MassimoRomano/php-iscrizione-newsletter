<?php
session_start(); 
include "function.php";

$status = isset($_SESSION['status']) ? $_SESSION['status'] : '';
$message = isset($_SESSION['message']) ? $_SESSION['message'] : '';


unset($_SESSION['status']);
unset($_SESSION['message']);

?>
<?php
include __DIR__ . '/assets/head.php'
?>

<main>
<div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <?php if ($status === 'success'): ?>
                            <h5 class="card-title text-success">Email Accettata</h5>
                        <?php elseif ($status === 'danger'): ?>
                            <h5 class="card-title text-danger">Email Non Accettata</h5>
                        <?php endif; ?>
                        <p class="card-text"><strong><?php echo $message; ?></strong></p>
                        <p>Verrai reindirizzato alla pagina iniziale tra poco oppure premi su Home per tornare adesso</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
ob_start();
header( "refresh:7;url=index.php" );
ob_end_flush();
?>


