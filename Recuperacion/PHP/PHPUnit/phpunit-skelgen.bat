@echo off
set PHPBIN=C:\wamp\bin\php\php5.4.3\php.exe
"%PHPBIN%" -d safe_mode=Off "C:\PHP\PHPUnit\phpunit-skelgen.phar" %*