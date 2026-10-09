<?php
/**
 * =====================================================================
 *  inc/heroe.php · Reglas del juego y datos del héroe          [CE 2.c]
 * =====================================================================
 *  Autor/a: TODO (tu nombre) · Variante: TODO (A, B o C)
 *
 *  Este fichero contiene SOLO PHP. Recuerda la regla sobre la etiqueta
 *  de cierre en este tipo de ficheros.
 */

// TODO 1. Directiva strict_types (primera instrucción del fichero).
declare(strict_types=1);

// TODO 2. Constantes con const: CLASE_HEROE, XP_POR_NIVEL, VIDA_BASE,
//         MULT_VIDA, BLOQUES_BARRA y NOMBRE_RIVAL.
//         PODER_RIVAL, con define().
//         (Valores: tabla de tu variante en el enunciado.)
 const CLASE_HEROE = 'Guerrera';
const  XP_POR_NIVEL = 400;
const VIDA_BASE = 50;
const MULT_VIDA = 3;
const BLOQUES_BARRA = 20;
const NOMBRE_RIVAL = 'Ogro de las Cavernas';




define('PODER_RIVAL', 200);

// TODO 3. Datos del héroe. Las estadísticas se escriben como TEXTO,
//         entre comillas, tal como aparecen en el enunciado:
//         $nombreHeroe, $apodo (null), $lema (''), $fuerzaTxt,
//         $destrezaTxt, $inteligenciaTxt, $constitucionTxt,
//         $experienciaTxt, $vidaActualTxt, $oroTxt, $esVeterano (bool).

$nombreHeroe='Brunhilda <Martillo de  Hierro>';
$apodo = null;
$lema = '';

$fuerzaTxt = '17';
$destrezaTxt = '9';
$inteligenciaTxt = '6';
$constitucionTxt = '15';
$experienciaTxt = '2350';
$vidaActualTxt = '118';
$oroTxt = '1520.75';
$esVeteranoTxt = 'true';



