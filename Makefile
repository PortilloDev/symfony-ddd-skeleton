api_port := 8081

start:
	@docker-compose -f docker-compose-dev.yaml up -d
	@echo 'App api started at:  http://localhost:$(api_port)'

deploy:
	@docker-compose run sas bin/deploy.sh

console:
	@docker-compose exec sas bash

stop:
	@docker-compose stop

destroy: stop
	@docker-compose down --rmi all