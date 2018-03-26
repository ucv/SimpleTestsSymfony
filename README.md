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
Roadmap:
https://docs.google.com/document/d/1IzU4heNKYG0tRrcCz4XxVRd9J1lCS7bxBEk0rjS53YY/edit
