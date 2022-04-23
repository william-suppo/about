.env:
	cp .env.example .env

.PHONY: up
up: .env
	docker-compose up --build -d

vendor: composer.lock composer.json up
	docker-compose exec app composer install

node_modules: package.json package-lock.json up
	docker-compose exec app npm ci

.PHONY: build-assets
build-assets: node_modules
	docker-compose exec app npm run dev

.PHONY: install
install: vendor build-assets

.PHONY: test
test: vendor
	docker-compose exec app php artisan test
