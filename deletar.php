<?php
error_reporting(0);
include "../conn.php";

$id_anexo = base64_decode($_GET['ida']);
$id_imobiliaria = base64_decode($_GET['id']);

$tp = $_GET['tp'];

if (!empty($id_anexo)) {
    $limpa_fatura = mysql_query("DELETE FROM anexo WHERE id = '$id_anexo' ");
    if ($limpa_fatura) {
        $erro = "10";
    } else {
        $erro = "11";
    }

    $mensagem = "imobiliaria_new.php?id=".base64_encode($id_imobiliaria)."&erro=$erro";

} ?>
<script>
    window.location = "<?php echo $mensagem; ?>";
</script>
