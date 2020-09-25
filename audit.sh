#!/bin/sh
grep --exclude=Safelity.php -rE '(file_get_contents|(include|require)(_once)?|exec|fopen|unlink)[[:space:]]*\(.*\$' $1
