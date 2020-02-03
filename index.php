
<?php require_once 'php/config.php'; ?>

<!DOCTYPE html>
<html lang="<?php echo $idioma[0] ?>" class="<?php echo $seccion; ?>">
<head>

	<?php require_once BASE_FILE . 'php/inc/head_basico.php';	?>

</head>
<body class="<?php echo $seccion; ?>">

	<?php require_once BASE_FILE . 'php/secciones/' . $seccion . '.php'; ?>

</body>
</html>