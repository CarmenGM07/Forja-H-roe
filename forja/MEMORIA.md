# Memoria · Reto UD2 «Forja de Héroes»

**Alumno/a:** TODO · **Variante:** TODO · **Fecha:** TODO

> Las capturas van en la carpeta `capturas/` y se enlazan así: `![descripción](capturas/nombre.png)`

## 1. Comprobación de resultados (CE 2.e)

Rellena la tabla con los valores que muestra TU ficha y compáralos con la tabla de comprobación del enunciado.

| Dato | Valor esperado (enunciado) | Valor de mi ficha | ¿Coincide? |
|---|---|---|---|
| Nivel | | | |
| Vida máxima | | | |
| % de vida | | | |
| Daño | | | |
| Estadística especial | | | |
| Poder | | | |
| Resultado frente al rival | | | |

Mi ficha:
El nivel de vida de mi ficha es 6, la vida máxima es de 118, el daño 57,8, todo estadísitca especial 51, el poder de 200 y oro 1520.75 mo.

El porcentaje de vida es 0,03%

## 2. El código fuente y el documento resultante (CE 2.e · CE 2.c)

- Captura de `ficha.php` en el editor (parte de cálculos) y captura del **Ctrl+U** de la página.
- Explica con tus palabras **tres diferencias** entre ambas.
- ¿Qué ha pasado con el nombre del héroe en el Ctrl+U? ¿Por qué?

Las tres diferencias, en la página principal, sale la barra de progreso, y en la mía, no se muestra.

Al darle al Ctrl + U, me muestra el código de la página.


## 3. Experimento: cambio un dato y predigo el efecto (CE 2.e)

1. Dato que cambio en `inc/heroe.php` (valor antiguo → valor nuevo):
2. **Predicción** (antes de recargar): qué valores de la ficha cambiarán y cuánto valdrán:
Cambiará el nivel de y las vidas que tiene ese héroe.
3. **Resultado** real (captura):
4. ¿Acertaste? Si no, ¿por qué?
No, porque no me sube ni me baja los niveles.

## 4. Experimento con strict_types (CE 2.f)

1. Quita el `(int)` del cálculo de los bloques de la barra de vida. Recarga. Captura del error.
2. Explica qué dice el mensaje (tipo de error, función, argumento, línea).
Me daba error, porque no tenía las variables declaradas
3. Comenta la línea `declare(strict_types=1);` (manteniendo el cambio anterior) y recarga. ¿Qué pasa? ¿Por qué?
Que va aumentando las vidas.
4. Deja el código como estaba. ¿Qué opción prefieres para un proyecto real y por qué?
La opción que prefiero es la opción de ir aumentando la vida cuanto te quede 2 vidas.

## 5. Directivas (CE 2.f)

- Captura de `diagnostico.php`.
- ¿Qué valor pondrías en `display_errors` en un servidor de producción? ¿Por qué?
Podría valor cero, porque así no comete ningún error.

## 6. Uso de IA (obligatorio declararlo)

¿Has usado alguna IA? ¿Para qué? Copia una respuesta que te diera y explica si era correcta o qué tuviste que corregir.
No he utilizado ninguna IA.