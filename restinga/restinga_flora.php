<?php
// Carregar dados do JSON
$json_data = file_get_contents('./data/restinga_flora.json');
$conteudo = json_decode($json_data, true);
?>
<?php include '../template_galeria.php' ?>
<?php include './restinga_flora_modal.php' ?>

<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
<!-- SB Forms JS-->
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>