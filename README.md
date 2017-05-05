This repository is a comprehensive demonstration and test-suite for Agile Data and some related components. There are several real-life examples modeled with a provided database schemas. You can set up each example individually, go through examples and the test-suites.

## Installation

1. Clone this repository
2. `composer install`
3. Set up empty MySQL database
4. `cp config-example.php config.php` and edit as necessary


Next pick one of the examples described below.

## About Examples

Each example is located in it's own namespace and has it's own database schema file. This way you can clear your database from previous tables when you start working with a new example.

Most examples will include Console: 

```
php console.php
```

Other examples can also include some UI demos. Typically you can find them in file `index.php`.

http://localhost/data-primer/1-ui-table

Some examples may require additional extensions to be installed.

## Contributing Examples

Are you using Agile Data inside your project? Contribute your model implementation as an example here.

## List of examples

| Name       | Keywords                                 | Description                              | Level |
| ---------- | ---------------------------------------- | ---------------------------------------- | ----- |
| freelancer | client, conditions, traversing, expressions | Client list with projects and invoices. If you are a software consultant you are likely using a similar data structure to keep track of your projects. | 2     |
| acct       | accounting, document types, joins, invoice, payment, reports, contact, disjoint sub-types | Implementation of "document type" system. Main model "Document" is augmented into Invoice, Payment, etc. Use of joins and inheritance makes system extensible. There are also various Report models to illustrate data aggregation. | 3     |
| twitter    |                                          | Simple model structure if you are implementing twitter clone | 1     |
| leding     |                                          | Simple model structure for system to account for money lent from one person to another. | 1     |
| p2p        | methods, transactions                    | Peer-to-peer crowd lending. Single loan can be funded by multiple lenders. If fully funded, it can be converted into a repayment schedule. | 3     |

## Tests

Examples may contain PHPUnit and Behat BDD tests. Each one must execute with the initial database structure, but will not actually modify the database contents.