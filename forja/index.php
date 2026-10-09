<?php
/**
 * =====================================================================
 *  ficha.php · Forja de Héroes · UD2 · Reto evaluable
 * =====================================================================
 *  Autor/a: TODO · Variante: TODO
 *
 *  Estructura OBLIGATORIA (como en el paso 09 del caso guiado):
 *   1) directiva strict_types
 *   2) carga de inc/heroe.php con require_once y __DIR__
 *   3) CÁLCULOS: aquí arriba, sin HTML
 *   4) PRESENTACIÓN: HTML con los valores incrustados
 *
 *  PROHIBIDO en este reto: if, else, switch, match, bucles, arrays propios
 *  y funciones propias (llegan en la UD3 y la UD4). Usa operadores,
 *  el ternario y los operadores ?? y ?:.
 */

// TODO 1. strict_types
declare(strict_types=1);

// TODO 2. require_once del fichero de datos
require_once __DIR__ . '/inc/heroe.php';

// ---------------------------------------------------------------------
// TODO 3. CÁLCULOS (sigue el orden del enunciado: R1 a R8)
// ---------------------------------------------------------------------
// R1 · Conversión de tipos
$fuerza = (int) $fuerzaTxt;
$destreza = (int) $destrezaTxt;
$inteligencia = (int) $inteligenciaTxt;
$constitucion = (int) $constitucionTxt;
$experiencia = (int) $experienciaTxt;
$vidaActual = (int) $vidaActualTxt;
$oro = (float) $oroTxt;
$esVeterano = (bool) $esVeteranoTxt;



// R2 · Progresión (nivel, xpEnNivel, xpParaSubir, pctNivel)
$nivel = $experiencia / XP_POR_NIVEL;
$xpEnNivel = $experiencia % XP_POR_NIVEL; $xpParaSubir = XP_POR_NIVEL - $xpEnNivel;
$pctNivel = round($xpEnNivel / XP_POR_NIVEL * 100, 2);

// R3 · Vida (vidaMax, pctVida)
$vidaMax = 100;
$tVidaMax = VIDA_BASE + ($constitucion * $nivel * MULT_VIDA);
$danio = round(($fuerza + $destreza + $inteligencia) / 3 * 1.2, 1);
$poder = round ($danio + $nivel);
$comparacion = $poder <=> PODER_RIVAL;

// R4 · Combate (daño, estadística especial, poder, comparación con el rival)
$pctVida = round ($vidaActual / $vidaMax * 100);

// R5 · Estado y decisiones
// Si la vida actual es mayor que 0, esta en peligro, en cambio, si la $pctVida es <35 es pie.
$estado = $vidaActual > 0 ? 'En peligro' : 'En Pie';
$puedeAscender = $pctVida > 5;
$insignia = $esVeterano ? 'Veterano' : 'Novato';

// R6 · Barras de progreso
$bloquesvida = (int) round($pctVida / 100 * BLOQUES_BARRA);
$barra_xp = (int) round($pctVida / 100 * BLOQUES_BARRA);



// R7 · Textos (htmlspecialchars, ?? , ?: , number_format, .= , heredoc)
htmlspecialchars(number_format(1.520,75));
get_debug_type($experienciaTxt);
get_debug_type($experiencia);
var_dump($oroTxt, $esVeterano, $apodo);

$experienciaTxt === $experienciaTxt;


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TODO: "Ficha de " + Brunhilda <Martillo de  Hierro> </title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
<main>
    <!-- TODO: insignia VETERANO/NOVATO, usando la etiqueta LARGA con echo -->
    <span class="insignia">Ficha de Brunhilda</span>
    <!-- TODO: a partir de aquí, usa la etiqueta CORTA de salida -->
    <h1>Brunhilda  </h1>
    <p class="subtitulo"> Guerrera ·Brunhilda · lema</p>

    <h2>Estadísticas</h2>
    <div class="rejilla">
        <div class="stat"><div class="etq">Nivel</div><div class="val">6</div></div>
        <div class="stat"><div class="etq">Vida</div><div class="val">118</div></div>
        <div class="stat"><div class="etq">Daño</div><div class="val">57,8</div></div>
        <div class="stat"><div class="etq">TODO estadística especial</div><div class="val">51</div></div>
        <div class="stat"><div class="etq">Poder</div><div class="val">200</div></div>
        <div class="stat"><div class="etq">Oro</div><div class="val">1520.75 mo</div></div>
    </div>
    <table>
        <tr><th>Fuerza</th><th>Destreza</th><th>Inteligencia</th><th>Constitución</th></tr>
        <tr><td>17</td><td>9</td><td>6</td><td>15</td></tr>
    </table>

    <h2>Progreso</h2>
    <p class="barra vida">0,03 %</p>
    <p class="barra xp">XP 325/400 (falta 50)</p>

    <h2>Estado y decisiones</h2>
    <table>
        <tr><td>Estado</td><td> En Pie</td></tr>
        <tr><td>¿Puede ascender de rango? (nivel ≥ 5 y vida ≥ 50 %)</td><td> No</td></tr>
        <tr><td>¿Necesita poción? (vida  40 % o no veterano)</td><td>No</td></tr>
        <tr><td>Rival: TODO nombre (poder TODO)</td><td> 1 --> Ventaja: ¡a la carga!</td></tr>
    </table>

    <h2>Crónica</h2>
    <pre>Brunhilda <Martillo de Hierro> es Guerrera de nivel 6. 
        Le faltan 50 puntos de experiencia para subir de nivel.
        Estado actual: En Pie.

    </pre>
    <p><em>TODO registro de combate (.=)</em></p>

    <h2>Modo depuración</h2>
    <pre> experienciaTxt - string
        experiencia - int
        float (1520.75)
        float (36.875)
        bool (true)
        NULL
        bool (true)
        bool (false)
    </pre>

    <footer>TODO fecha y hora de generación · versión de PHP ·
        <a href="diagnostico.php">Diagnóstico del servidor</a></footer>
</main>
</body>
</html>
