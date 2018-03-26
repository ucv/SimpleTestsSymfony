`$ phpunit` It works out of the box!

First Thing:
```yaml
doctrine:
    dbal:
        default_connection: default
        connections:
            default:
                driver:   pdo_sqlite
                memory:   true
```
