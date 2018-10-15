clean-redis:
	php bin/console redis:flushall --client=default -n

clean-symfony:
	rm -rf var/cache/*
	rm -rf var/logs/*
	rm -rf reports/*
	chmod -R 777 var/

clean-all:
	make clean-redis
	make clean-symfony

install:
	composer install