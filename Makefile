.DEFAULT_GOAL := help

LOCALE=en_GB.utf8

# SERVER_DEST is defined in a `.env` file and follow this format: user@server.url:/path/to/website
include .env

.PHONY: build
build: ## Build the website with Boop! generator
	env LC_ALL=$(LOCALE) boop.py --development

.PHONY: clean
clean: ## Clean site files
	rm -rf ./_site ./_cache

.PHONY: open
open: build  ## Open the built site in a web browser
	xdg-open _site/index.html

.PHONY: publish
publish: clean  ## Publish the website online (rsync)
	env LC_ALL=$(LOCALE) boop.py
	rsync -P -rvzc --cvs-exclude --delete ./_site/ $(SERVER_DEST)
	rm -rf ./_cache

.PHONY: tree
tree:  ## Display the structure of the website
	tree -I '_site|_cache' --dirsfirst -CA

.PHONY: help
help:
	@grep -h -E '^[a-zA-Z_-]+:.*?## .*$$' $(MAKEFILE_LIST) | sort | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[36m%-30s\033[0m %s\n", $$1, $$2}'
