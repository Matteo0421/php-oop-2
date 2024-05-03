<?php


$db = [
    new Foods('1', 'Croccantini per Cani', 'Croccantini completi e bilanciati per cani di tutte le taglie', 15.99, 'img/croccantini.jpg', new Categories('1', 'Cani', 'Golden'), 'Secco'),
    new Foods('2', 'Paté per Gatti', 'Paté gustoso e nutriente per gatti di tutte le razze', 10.49, 'img/patè.jpg', new Categories('2', 'Gatti', 'London'), 'Umido'),
    new Games('3', 'Pallina Rimbalzante', 'Pallina in gomma naturale che rimbalza per stimolare il gioco del tuo cane', 5.99, 'img/pallina.jpg', new Categories('1', 'Cani', 'Aski'), 'Gomma'),
    new Games('4', 'Topo Peluche', 'Peluche morbido a forma di topo, perfetto per il tuo gatto', 3.49, 'img/topo.jpg', new Categories('2', 'Gatti' ,'Siberiano'), 'Peluche'),
    new Kennels('5', 'Cuccia Termica', 'Cuccia imbottita e termica per offrire comfort e calore al tuo cane durante l\'inverno', 39.99, 'img/cuccia.jpg', new Categories('1', 'Cani', 'tutti'), 'Grande'),
    new Kennels('6', 'Casetta in Tessuto', 'Casetta in tessuto pieghevole, ideale per i momenti di relax del tuo gatto', 29.99, 'img/casetta.jpg', new Categories('2', 'Gatti', 'tutti'), 'Media')
];

?>
