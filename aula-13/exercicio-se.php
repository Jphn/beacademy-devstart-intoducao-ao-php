<?php

$n = 10;

echo $n > 0 ? "Positivo" : ($n < 0 ? "Negativo" : "Zero");

// Ou

if ($n > 0) {
	echo "Positivo";
} else if ($n < 0) {
	echo "Negativo";
} else {
	echo "Zero";
}
