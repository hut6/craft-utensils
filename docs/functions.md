# Functions

### gist

Embeds a Github Gist.

| Argument | Description                          |
| -------- | ------------------------------------ |
| `id`     | The Gist id                          |
| `file`   | The filename (e.g. 'default.conf')   |

```jinja
{{ gist(6316404) }}
{# '<script src="https://gist.github.com/6316404.js"></script>' #}

{{ gist(6316404, 'default.conf') }}
{# '<script src="https://gist.github.com/6316404.js?file=default.conf"></script>' #}
```

### lipsum

| Argument     | Default | Description                          |
| ------------ | ------- | ------------------------------------ |
| `paragraphs` | 5       | The number of paragraphs to generate |
| `html`       | true    | HTML, or not                         |
| `min`        | 20      | Minimum words per paragraph          |
| `max`        | 100     | Minimum words per paragraph          |

```jinja
{{ lipsum() }}
```

### pastebin

Embeds a Pastebin.

| Argument | Description                          |
| -------- | ------------------------------------ |
| `id`     | The Pastebin id                      |

```jinja
{{ pastebin(zVeDKvz2) }}
{# '<script src="http://pastebin.com/embed_js.php?i=zVeDKvz2"></script>' #}
```
