# Filters

- [General](#General)
- [Inflection](#Inflection)


## General

#### center( width=80 )
Centers the value in a field of a given width.
```jinja
{{ 'middle' | center(40) }}
{# '                 middle                 ' #}
```

#### filesizeformat
Converts a numeric value into a human-readable file size (e.g. 26&nbsp;kB, 5.6&nbsp;MB, etc.).
```jinja
{{ 26000 | filesizeformat }}
{# '26 kB' #}
```

#### markdown
Transform markdown into HTML. Markdown is parsed using [kzykhys/ciconia](https://github.com/kzykhys/ciconia).
```jinja
{{ '# Headline' | markdown }}
{# '<h1>Headline</h1>' #}
```

#### md5
Converts a string to an md5 hash.
```jinja
{{ 'foo' | md5 }}
{# 'acbd18db4cc2f85cedef654fccc4a4d8' #}
```

#### sha1
Converts a string to an sha1 hash.
```jinja
{{ 'foo' | sha1 }}
{# '0beec7b5ea3f0fdbc95d0dd47f3c5bc275da8a33' #}
```

#### sha512
Converts a string to an sha512 hash.
```jinja
{{ 'foo' | sha512 }}
{# '2c26b46b68ffc68ff99b453c1d30413413422d706483bfa0f98a5e886266e7ae' #}
```


## Inflection

#### pluralize( num=2 )
Converts a string to the plural form.
```jinja
{{ 'result' | pluralize }}
{# 'results' #}

{{ 'results' | pluralize(1) }}
{# 'result' #}

{{ entries|length }} {{ 'results' | pluralize(entries|length) }}
{# '1 result' or '2 results' #}
```

#### singularize
Converts a string to the singular form.
```jinja
{{ 'cars' | singularize }}
{# 'car' #}
```

#### camelize
<!-- no description -->
```jinja
{{ 'foo_bar' | camelize }}
{# 'FooBar' #}
```

#### dasherize
<!-- no description -->
```jinja
{{ 'foo_bar' | dasherize }}
{# 'foo-bar' #}
```

#### humanize
<!-- no description -->
```jinja
{{ 'employee_salary' | humanize }}
{# 'Employee salary' #}

{{ 'author_id' | humanize }}
{# 'Author' #}
```

#### ordinalize
<!-- no description -->
```jinja
{{ 1 | ordinalize }}
{# '1st' #}

{{ 2 | ordinalize }}
{# '2nd' #}

{{ loop.index | ordinalize }}
{# '3rd' #}
```

#### titleize
<!-- no description -->
```jinja
{{ 'x-men: the last stand' | titleize }}
{# 'X Men: The Last Stand' #}

{{ 'raiders_of_the_lost_ark' | titleize }}
{# 'Raiders Of The Lost Ark' #}
```

#### underscore
<!-- no description -->
```jinja
{{ 'FooBar' | underscore }}
{# 'foo_bar' #}
```
