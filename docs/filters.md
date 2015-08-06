# Filters

- [Cryptographic](#cryptographic)
- [Date](#date)
- [Inflection](#inflection)
- [Internationalization](#internationalization)
- [Text](#text)

<!-- ************************************************************ -->

## Cryptographic

### md5
Converts a string to an md5 hash.
```jinja
{{ 'foo' | md5 }}
{# 'acbd18db4cc2f85cedef654fccc4a4d8' #}
```

### sha1
Converts a string to an sha1 hash.
```jinja
{{ 'foo' | sha1 }}
{# '0beec7b5ea3f0fdbc95d0dd47f3c5bc275da8a33' #}
```

### sha512
Converts a string to an sha512 hash.
```jinja
{{ 'foo' | sha512 }}
{# '2c26b46b68ffc68ff99b453c1d30413413422d706483bfa0f98a5e886266e7ae' #}
```

<!-- ************************************************************ -->

## Date

### time_diff
Use the `time_diff` filter to render the difference between a date and now.
```jinja
{{ entry.postDate | time_diff }}
{# '2 days ago' #}
```

<!-- ************************************************************ -->

## Inflection

### pluralize( num=2 )
Converts a string to the plural form.
```jinja
{{ 'result' | pluralize }}
{# 'results' #}

{{ 'results' | pluralize(1) }}
{# 'result' #}

{{ entries|length }} {{ 'results' | pluralize(entries|length) }}
{# '1 result' or '2 results' #}
```

### singularize
Converts a string to the singular form.
```jinja
{{ 'cars' | singularize }}
{# 'car' #}
```

### camelize
<!-- no description -->
```jinja
{{ 'foo_bar' | camelize }}
{# 'FooBar' #}
```

### dasherize
<!-- no description -->
```jinja
{{ 'foo_bar' | dasherize }}
{# 'foo-bar' #}
```

### humanize
<!-- no description -->
```jinja
{{ 'employee_salary' | humanize }}
{# 'Employee salary' #}

{{ 'author_id' | humanize }}
{# 'Author' #}
```

### ordinalize
<!-- no description -->
```jinja
{{ 1 | ordinalize }}
{# '1st' #}

{{ 2 | ordinalize }}
{# '2nd' #}

{{ loop.index | ordinalize }}
{# '3rd' #}
```

### titleize
<!-- no description -->
```jinja
{{ 'x-men: the last stand' | titleize }}
{# 'X Men: The Last Stand' #}

{{ 'raiders_of_the_lost_ark' | titleize }}
{# 'Raiders Of The Lost Ark' #}
```

### underscore
<!-- no description -->
```jinja
{{ 'FooBar' | underscore }}
{# 'foo_bar' #}
```

<!-- ************************************************************ -->

## Internationalization

### localizedcurrency
_Needs documentation_

### localizeddate

Use the `localizeddate` filter to format dates into a localized string representating the date.

```jinja
{{ entry.postDate | localizeddate('medium', 'none', locale) }}
{# 'Nov 13, 2012' #}
```

<table>
  <tr>
    <th>Argument</th>
    <th colspan="2">Options</th>
    <th>Default</th>
    <th>Description</th>
  </tr>
  <tr>
    <td rowspan="5"><code>date_format</code></td>
    <td><code>'none'</code></td>
    <td>Do not include this element</td>
    <td rowspan="5"><code>'medium'</code></td>
    <td rowspan="5">The date format.</td>
  </tr>
  <tr>
    <td><code>'short'</code></td>
    <td>Most abbreviated style, only essential data (12/13/52 or 3:30pm)</td>
  </tr>
  <tr>
    <td><code>'medium'</code></td>
    <td>Medium style (Jan 12, 1952)</td>
  </tr>
  <tr>
    <td><code>'long'</code></td>
    <td>Long style (January 12, 1952 or 3:30:32pm)</td>
  </tr>
  <tr>
    <td><code>'full'</code></td>
    <td>Completely specified style (Tuesday, April 12, 1952 AD or 3:30:42pm PST)</td>
  </tr>
  <tr>
    <td><code>time_format</code></td>
    <td colspan="2">Same formats as listed above.</td>
    <td><code>'medium'</code></td>
    <td>The time format.</td>
  </tr>
  <tr>
    <td><code>locale</code></td>
    <td colspan="2">-</td>
    <td><code>null</code></td>
    <td>The locale used for the format. If NULL is given, Twig will use Locale::getDefault().</td>
  </tr>
  <tr>
    <td><code>timezone</code></td>
    <td colspan="2">-</td>
    <td><code>null</code></td>
    <td>The date timezone</td>
  </tr>
  <tr>
    <td><code>format</code></td>
    <td colspan="2">-</td>
    <td><code>null</code></td>
    <td>Optional pattern to use when formatting or parsing. Possible patterns are documented in the <a href="http://userguide.icu-project.org/formatparse/datetime" target="_blank">ICU user guide</a>.</td>
  </tr>
</table>

Internally, this filter uses the PHP <a href="http://php.net/manual/en/intldateformatter.create.php" target="_blank">IntlDateFormatter::create()</a> function for the date.

### localizednumber
_Needs documentation_

<!-- ************************************************************ -->

## Text

### center( width=80 )
Centers the value in a field of a given width.
```jinja
{{ 'middle' | center(40) }}
{# '                 middle                 ' #}
```

### truncate( length=30, preserve=false, separator='...' )
Use the `truncate` filter to cut off a string after limit is reached.
```jinja
{{ "Hello World!" | truncate(5) }}
{# 'Hello...' #}

{{ "Hello World!" | truncate(7, true) }}
{# 'Hello World!' #}

{{ "Hello World!" | truncate(7, false, "??") }}
{# 'Hello W??' #}
```

### wordwrap( length=80, separator="\n" )
Use the `wordwrap` filter to split your text in lines with equal length.
```jinja
{{ "Lorem ipsum dolor sit amet, consectetur adipiscing" | wordwrap(10) }}
```
```
Lorem ipsu
m dolor si
t amet, co
nsectetur
adipiscing
```
