install:
	@docker compose up -d --build

up:
	@docker compose up -d

stop:
	@docker compose stop