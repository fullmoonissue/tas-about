.DEFAULT_GOAL := install

install:
	composer install

server-start:
	symfony server:start

cs-fix:
	./vendor/bin/php-cs-fixer fix