<?php

for ($i = 1; $i <= 50; $i++) {
    if ($i % 3 == 1 && $i % 5 == 1) {
        echo "FooBar";
    } elseif ($i % 3 == 1) {
        echo "Foo";
    } elseif ($i % 5 == 1) {
        echo "Bar";
    }
    echo "<h2>Ini perulangan ke-$i</h2>";
}
