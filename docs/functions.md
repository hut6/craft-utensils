# Functions

#### gist( id, file=null )
Embeds a gist.
```jinja
{{ gist(6316404) }}
{# '<script src="https://gist.github.com/6316404.js"></script>' #}

{{ gist(6316404, 'default.conf') }}
{# '<script src="https://gist.github.com/6316404.js?file=default.conf"></script>' #}
```

#### lipsum( paragraphs=5, html=true, min=20, max=100 )
Generates some [lorem ipsum](http://www.lipsum.com/) for the template.
```jinja
{{ lipsum() }}
```

#### pastebin()
Embeds a pastebin.
```jinja
{{ pastebin(zVeDKvz2) }}
{# '<script src="http://pastebin.com/embed_js.php?i=zVeDKvz2"></script>' #}
```
