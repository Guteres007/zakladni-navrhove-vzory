<?php
use App\Factory\CarFactory;
use \App\Facade\CarFacade;
use \App\Adapter\CarAdapter;
use \App\Proxy\CarProxy;
require __DIR__ . '/../vendor/autoload.php';

//phpinfo();

//Factory Slouží ideálně pro vytváření třídy s více parametry v controlleru (které chci mít předvyplněné) a nebo na více místech v aplikaci.
//$car = CarFactory::createCar('Combi');
//echo $car->getType();

// Facade statické přistupování 
//Fasády slouží k jednoduššímu přístupu k nejpožívanějším službám. Jde o jakýsi obal nad existující službou dostupný přes statickou třídu.
//echo CarFacade::getType();

//Adapter, obaluje cizí kod vlastní třídou. Pokud se změní cizí kod, tak ve vlastní aplikaci k datům přistupuji stále stejně pomocí vlastní třídy. 
//print_r( (new CarAdapter)->downloadData());

//Proxy (zástupce) komunikace například se vzdalenou servisou.  
//$carProxy = new CarProxy();
//echo $carProxy->createCar();
//echo $carProxy->setColor();