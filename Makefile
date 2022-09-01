all:	up

up:		mkdir -p /home/fuserwyn/data/db
		mkdir -p /home/fuserwyn/data/wp
		docker-compose -f srcs/docker-compose.yml up -d
down:
		docker-compose -f srcs/docker-compose.yml down

# Список контейнеров
ps:
		docker-compose -f srcs/docker-compose.yml ps
fclean:	down
		docker rmi -f $$(docker images -qa);\
		docker volume rm $$(docker volume ls -q);\
		docker system prune -a --force
		sudo rm -Rf /home/fuserwyn/data/db
		sudo rm -Rf /home/fuserwyn/data/wp
		mkdir /home/fuserwyn/data/db
		mkdir /home/fuserwyn/data/wp

re:
		@mkdir -p ../data/wp
		@mkdir -p ../data/db
		@docker-compose -f srcs/docker-compose.yml build
		docker-compose -f srcs/docker-compose.yml up

.PHONY:	all up down ps fclean re