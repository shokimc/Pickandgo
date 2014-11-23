#!/bin/bash
if [ -f "composer.json" ];
then
	php app/console doctrine:generate:entities PickandgoAppBundle
	php app/console doctrine:schema:update --force
else
	echo "Error. Sitúese en el directorio raíz de Symfony";
fi