#!/bin/sh
echo
echo "[*] Looking for use of unsafe functions"
grep --colour=always --exclude=Safelity.php -rE '(file_get_contents|(include|require)(_once)?|exec|fopen|unlink)[[:space:]]*\(.*\$' $1
echo
echo "[*] Looking for unsafe invocation of Safelity file operations"
grep --colour=always --exclude=Safelity.php -rE '(file_get_contents|include|fopen|unlink)_safely[[:space:]]*\(.*\$.*\,.*\$.*' $1
echo
echo "[*] Looking for exec_safely without argument termination (--)"
grep  --colour=always --exclude=Safelity.php -r exec_safely $1 | grep -v -- '--'
