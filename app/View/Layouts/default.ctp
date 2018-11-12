<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'digital notes';
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css(array('bootstrap.min.css', 'estilos.css', 'areas.css'));
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
	<style>
            .carousel-inner > .item > img,
            .carousel-inner > .item > a > img {
                width: 50%;
                margin: auto;
            }
        </style>
</head>
<body>
	 <header>
          <div style="height: 5px;"></div>  
            <div class="container" id="logo">
                <img src="/digital/img/Cabecera 860.gif" class="img-responsive" alt="Logo1" width="1500" height="500">
            </div>
            <div style="height: 10px;"></div>
            <div class="container">
                <div id="botones">
                    <ul class="nav nav-pills nav-justified ">
                        <li role="presentation" class="active"><a href="#">Inicio</a></li>
                        <li role="presentation"><a href="/digital/areas">Institución</a></li>
                        <li role="presentation"><a href="#">Calendario</a></li>
                        <li role="presentation"><a href="#">Contactenos</a></li>
                        <li role="presentation"><a href="#">Digital Notes</a></li>
                        <li role="presentation"><a href="#">Admisiones</a></li>
                        <li role="presentation"><a href="#">Noticias</a></li>
                        <li role="presentation"><a href="#">Galerias</a></li>
                    </ul>
                </div>
              </div>
            <div style="height: 5px;"></div>
        </header>

   
    <?php echo $this->Flash->render(); ?>

			<?php echo $this->fetch('content'); ?>
       
        
        <footer id="pie_pag">
            <div class="container-fluid">
            <table>
                <tr>
                    <td>
                        <img id="imagen_pie" src="/digital/img/EscudoMaux.png" class="img-responsive img-rounded">
                        <div> <p id="pie">Colegio De María Auxiliadora</p></div>
                    </td>
                    <td >
                        <div><p id="pie_col">Carrera 13 N° 30 - 99 Barrio Teusaquillo</p></div>
                        <div><p id="pie_col">Teléfono: (57)(1) 285 33 81.</p></div>
                        <div><p id="pie_col">BOGOTÁ D.C. COLOMBIA.</p></div>
                    </td>
                </tr>
            </table>
        </footer>
        <?php echo $this->Html->script(array('jquery.min.js','bootstrap.min.js')); ?>
    </body>
</html>
