//Zadanie 1
class Pipeline {
    public static function make(...$functions) {
        return function($arg) use ($functions) {
            $result = $arg;

            foreach ($functions as $func) {
                $result = $func($result);
            }

            return $result;
        };
    }
}

// Przykład użycia:
$pipelineFunction = Pipeline::make(
    function($var) { return $var * 3; },
    function($var) { return $var + 1; },
    function($var) { return $var / 2; }
);

$result = $pipelineFunction(3);
echo $result; // Wypisze 5