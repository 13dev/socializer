env=dev
compose=docker-compose

.PHONY: cs
cs: ## executes coding standards
		$(compose) run --rm php sh -lc './vendor/bin/ecs check src tests --fix'

.PHONY: cs-check
cs-check: ## executes coding standards in dry run mode
		$(compose) run --rm php sh -lc './vendor/bin/ecs check src tests'

.PHONY: layer
layer: ## Check issues with layers
		$(compose) run --rm php sh -lc 'php bin/deptrac.phar analyze --formatter-graphviz=0 --no-cache'