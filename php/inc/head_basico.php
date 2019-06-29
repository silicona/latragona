
<title><?php echo $lexico[$seccion]['title']; ?></title>

<meta charset="utf-8">
<meta name="author" content="alejoizquierdomartinez@gmail.com">
<meta name="keywords" content="<?php echo $lexico['meta']['keywords'] ?>">
<meta name="description" content ="<?php echo $lexico['meta']['description'] ?>">
<meta http-equiv="content-language" content="<?php echo $idioma[0] ?>">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="cache-control" content="no-cache">

<link rel="shortcut icon" href="media/icono.ico" type="image/x-icon">
<link rel="icon" href="media/icono.ico" type="image/x-icon">

<link rel="stylesheet" type="text/css" href="<?php  echo BASE_URL ?>css/lib/tripoli_index.min.css">
<link rel="stylesheet" type="text/css" href="<?php  echo BASE_URL ?>css/lib/jquery.fancybox.min.css">
<link rel="stylesheet" type="text/css" href="<?php  echo BASE_URL ?>css/lib/camera.min.css">


<script type="text/javascript" src="<?php  echo BASE_URL ?>js/libs/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="<?php  echo BASE_URL ?>js/libs/jquery.fancybox.min.js"></script>

<script type="text/javascript" src="<?php  echo BASE_URL ?>js/libs/camera.min.js"></script>
<script type="text/javascript" src="<?php  echo BASE_URL ?>js/libs/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="<?php  echo BASE_URL ?>js/libs/jquery.mobile.customized.min.js"></script>


<script type="text/javascript">
	BASE_URL = "<?php echo BASE_URL ?>";
	BASE_FILE = "<?php echo BASE_FILE ?>";
	idioma = "<?php echo $idioma[0] ?>";
</script>
 
<?php 

	$idioma[0] = $idioma[0] == 'es' ? '' : $idioma[0] . '/';

	if( $seccion == 'tragar' || $seccion == 'empujar' ){
?>

	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL ?>css/lib/lightbox.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL ?>css/lib/tcal.min.css">
	<script type="text/javascript" src="<?php echo BASE_URL ?>js/libs/lightbox.min.js"></script>
	<script type="text/javascript" src="<?php echo BASE_URL ?>js/libs/tcal.js"></script>

	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL ?>css/carta.min.css">

<?php } else { ?>


	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL ?>css/global.min.css">

<?php } ?>

<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL . 'css/' . $seccion . '.min.css' ?>">


<script type="text/javascript" src="<?php echo BASE_URL ?>js/global.ugly.js"></script> 
<!-- 
<script type="text/javascript" src="<?php echo BASE_URL ?>js/global.js"></script>
-->

<!--Global site tag (gtag.js) - Google Analytics-->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-111252472-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-111252472-1');
</script>

