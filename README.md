Welcome to Agile Data primer application. This repository illustrates the usage of Agile Data using hands-on example. **START HERE if you are new to ATK**. It's recommended that you follow all the steps.

See also: https://www.udemy.com/course/web-apps-with-php-and-atk/ for a video course. 

## Requiremetns

You'll need a PHP verison (7.2+), just a command-line interpreter is enough. Also you need MySQL or SQLite (whichever you are more comfortable with). Finally, install PsySH, which will help with interractive bits.

## Installation

1. Clone this repository
2. Import _docs/mysql.sql_ into a new MySQL database
3. In a terminal, `cp config-example.php config.php`
4. Edit `config.php`, specify how to connect to the database you have just imported.

### What's inside

There are few example projects in this repository. They are located under `src/<project>`:

- `school`: contains entity for school/class management: Student, Course, Teacher and Class are the main entities. Documentation is in [docs/school.md](docs/school.md)
- `consultancy`: entities for invoicing clients: Client, Invoice, InvoiceLine as well as Payment are here. Documentation is in [docs/consultancy.md](docs/consultancy.md)
- `cinema`: some entries for a cinema site: Movie, Venue, Showtime, Ticket are the base entities. Documentation is in [docs/cinema.md](docs/cinema.md)

## Usage

```shell
php console.php
```

This will connect you to the database and launch interractive PsySH session. Here are some things to try:

``` php
var_dump($db);
```

Create new "Client" collection object:

``` php
$client = new consultancy\Client($db);

// Lists client names
$client->export(['name']);
```

We can make use of chaining:

``` php
$client->loadBy('name', 'Pear Company')
  ->ref('Invoices')
  ->addCondition('is_paid', false)
  ->each('send_reminder');
```

### ATK UI - Optional

This primer has optional dependency to some ATK UI:

- `brew require atk4/masterCRUD`
- open `admin/index.php` in your browser.
- log-in with u: `demo` and p: `demo`.

Refer to "Agile UI - Getting Started guide" in the official documentation.

### ATK API - Optional

This primer has optional dependency on ATK API:

- `brew require atk4/api`
- Use `api/consultancy.php/client` as the end-point for your GET request

Refer to "ATK API - Getting Started Guide" in the official documentation.

