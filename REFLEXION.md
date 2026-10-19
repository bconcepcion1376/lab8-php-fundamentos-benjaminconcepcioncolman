# Reflexión (Etapa 4)

Responde con tus palabras (mínimo 40 palabras por respuesta). Ver README, Etapa 4.

## Pregunta 1
mi codigo 95191792
gettype($codigo) devuelve string.
Es texto porque hash() devuelve texto y substr() corta un pedazo de ese texto. Siempre devuelve string, aunque lo que corte sean solo números.
Si lo usas en una suma, por ejemplo $codigo + 1, PHP lo convierte a número porque todos sus caracteres son dígitos, y da 95191793. Es un caso curioso: a muchos compañeros les sale un código con letras (es hexadecimal), y en ese caso la suma daría advertencia o error.
## Pregunta 2
$precio = 481.38. Que gettype() diga double en vez de float es por historia: viene del tipo “double precision” del lenguaje C. En PHP float y double son exactamente lo mismo.
0.1 + 0.2 == 0.3 da false porque la computadora guarda los decimales en binario y no puede representar 0.1 exacto. La suma da 0.30000000000000004.
$n1 = 50, de tipo integer.
50 / 85 da 0.588..., un decimal (double). intdiv(50, 85) hace división entera: se queda solo con la parte entera, que es 0, y descarta el res
## Pregunta 3
define() es una función: se ejecuta mientras el programa corre, así que puede usarse dentro de un if o con un nombre armado en una variable.
const es una palabra del lenguaje: se resuelve antes de ejecutar y solo va en el nivel principal del archivo o dentro de clases, no dentro de un if.
En tu instalación, redefinir dio false: una constante no se puede volver a definir. El @ oculta la advertencia que PHP mostraría.
Tu entorno: PHP 8.2.12 con Apache/2.4.58 (Win64) de XAMPP. Son los datos que salieron en tu entorno.php.
