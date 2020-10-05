<?php
require_once 'classes/Dipendenti.php';

// DIPENDENTE 0
$dipendente0 = new Dipendenti('Matteo', 'Belli');
$dipendente0->dateOfBirth = '23/03/1976';
$dipendente0->placeOfBirth = 'Milano';
$dipendente0->setCodFisc('BLLMTT76P23G039S');
$code = $dipendente0->getCodFisc();
$dipendente0->setMatrInps('AS039SD');
$matr = $dipendente0->getMatrInps();
$dipendente0->setReparto('Marketing');
$rep = $dipendente0->getReparto();
$dipendente0->setStipendio(300,10);
$wage = $dipendente0->getStipendio();
$dipendente0->ruolo = 'Direttore Marketing';
// Stampa a schermo Dipendente 1
echo "Nome: $dipendente0->nome";
echo "<br> Cognome: $dipendente0->cognome";
echo "<br> Data di nascita : $dipendente0->dateOfBirth";
echo "<br> Luogo di nascita : $dipendente0->placeOfBirth";
echo "<br> Codice Fiscale : $code";
echo "<br> Matricola Inps : $matr";
echo "<br> Reparto : $rep";
echo "<br> Stipendio : € $wage";
echo "<br> Ruolo : $dipendente0->ruolo";




// DIPENDENTE 1
$dipendente1 = new Dipendenti('Angelo', 'Infante');
$dipendente1->dateOfBirth = '22/01/1945';
$dipendente1->placeOfBirth = 'Salerno';
$dipendente1->setCodFisc('INFNGL45P22F035X');
$code = $dipendente1->getCodFisc();
$dipendente1->setMatrInps('AS009SD');
$matr = $dipendente1->getMatrInps();
$dipendente1->setReparto('Marketing');
$rep = $dipendente1->getReparto();
$dipendente1->setStipendio(200,10);
$wage = $dipendente1->getStipendio();
$dipendente1->ruolo = 'Category Manager';
// Stampa a schermo Dipendente 1
echo "<br> <br> Nome: $dipendente1->nome";
echo "<br> Cognome: $dipendente1->cognome";
echo "<br> Data di nascita : $dipendente1->dateOfBirth";
echo "<br> Luogo di nascita : $dipendente1->placeOfBirth";
echo "<br> Codice Fiscale : $code";
echo "<br> Matricola Inps : $matr";
echo "<br> Reparto : $rep";
echo "<br> Stipendio : € $wage";
echo "<br> Ruolo : $dipendente1->ruolo";

// DIPENDENTE 2
$dipendente2 = new Dipendenti('Filippo', 'Masi');
$dipendente2->dateOfBirth = '21/09/1972';
$dipendente2->placeOfBirth = 'Foggia';
$dipendente2->setCodFisc('MSSFLL72H21G039S');
$code = $dipendente2->getCodFisc();
$dipendente2->setMatrInps('AS43SD');
$matr = $dipendente2->getMatrInps();
$dipendente2->setReparto('Marketing');
$rep = $dipendente2->getReparto();
$dipendente2->setStipendio(150,10);
$wage = $dipendente2->getStipendio();
$dipendente2->ruolo = 'Impiegato Marketing';
// Stampa a schermo Dipendente 2
echo "<br> <br> Nome: $dipendente2->nome";
echo "<br> Cognome: $dipendente2->cognome";
echo "<br> Data di nascita : $dipendente2->dateOfBirth";
echo "<br> Luogo di nascita : $dipendente2->placeOfBirth";
echo "<br> Codice Fiscale : $code";
echo "<br> Matricola Inps : $matr";
echo "<br> Reparto : $rep";
echo "<br> Stipendio : € $wage";
echo "<br> Ruolo : $dipendente2->ruolo";

// DIPENDENTE 3
$dipendente3 = new Dipendenti('Marco', 'Rossi');
$dipendente3->dateOfBirth = '20/12/1998';
$dipendente3->placeOfBirth = 'Crotone';
$dipendente3->setCodFisc('RSSMRC98P20G034S');
$code = $dipendente3->getCodFisc();
$dipendente3->setMatrInps('AS00SD');
$matr = $dipendente3->getMatrInps();
$dipendente3->setReparto('Marketing');
$rep = $dipendente3->getReparto();
$dipendente3->setStipendio(50,10);
$wage = $dipendente3->getStipendio();
$dipendente3->ruolo = 'Call Center';
// Stampa a schermo Dipendente 2
echo "<br> <br> Nome: $dipendente3->nome";
echo "<br> Cognome: $dipendente3->cognome";
echo "<br> Data di nascita : $dipendente3->dateOfBirth";
echo "<br> Luogo di nascita : $dipendente3->placeOfBirth";
echo "<br> Codice Fiscale : $code";
echo "<br> Matricola Inps : $matr";
echo "<br> Reparto : $rep";
echo "<br> Stipendio : € $wage";
echo "<br> Ruolo : $dipendente3->ruolo";
