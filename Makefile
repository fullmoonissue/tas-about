.DEFAULT_GOAL := install

install:
	composer install

server-start:
	symfony server:start