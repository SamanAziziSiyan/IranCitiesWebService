# Iran Cities Web Service

## Overview

A small PHP web service for serving Iranian province and city data through versioned API endpoints.

## Architecture

- `api/v1/provinces/` — province endpoint
- `api/v1/cities/` — city endpoint
- `App/Services/CityService.php` — service layer
- `App/Utilities/CacheUtility.php` — caching helper
- `App/Utilities/Response.php` — API response handling
- `composer.json` — dependency definition

## Technology

PHP, Composer, HTTP APIs, caching utilities, and JWT-related dependency support.

## Scope

This repository demonstrates a compact service/API architecture. It should not be interpreted as evidence of a larger platform beyond the code included here.

## Development

Install dependencies with `composer install`, configure the local web server to point at the project, and use the versioned API paths under `api/v1/`.

## Status

Historical portfolio project. The checked-in dependency tree is retained for historical reproducibility; a future cleanup can move fully to Composer-installed dependencies.
