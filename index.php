<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
  <?php
declare(strict_types=1);

function sayHi(string $firstName): void
{
	echo 'Bonjour, ' . $firstName . ' !' . PHP_EOL;
}

sayHi('John');
sayHi(12345);


     ?> 

  <script src="https://replit.com/public/js/replit-badge-v2.js" theme="dark" position="bottom-right"></script>
  </body>
</html>