<?php
function fibonacci($n) {
    $fib = [];
    $fib[0] = "0"; 
    $fib[1] = "1";
    
    for ($i = 2; $i < $n; $i++) {
        $fib[$i] = bcadd($fib[$i - 1], $fib[$i - 2]); 
    }
    return $fib;
}

$fibonacci_series = fibonacci(2049);
?>

<html>
<head>
    <title>Secuencia de Fibonacci</title>
</head>
<body>
    <h1>Gomez Fonseca Alexis</h1>
    <h1>primeros 2048 numeros de fibonacci</h1>
    <p><b>F<sub>0</sub></b> = 0</p>
    <p><b>F<sub>1</sub></b> = 1</p>

    
</body>
</html>