<?php

namespace App\Faker;

use Faker\Provider\Base;

class NomePastel extends Base
{
    protected static $nome = [

        'Pastel de 3 queijos',
        'Pastel de 4 queijos',
        'Pastel de atum',
        'Pastel de calabresa com catupiry',
        'Pastel de calabresa com cebola',
        'Pastel de calabresa com queijo',
        'Pastel de carne',
        'Pastel de carne com azeitona',
        'Pastel de carne com bacon',
        'Pastel de carne com milho',
        'Pastel de carne com ovo cozido',
        'Pastel de catupiry',
        'Pastel de frango',
        'Pastel de frango com catupiry',
        'Pastel de frango com cheddar',
        'Pastel de frango e milho',
        'Pastel de frango e queijo',
        'Pastel de frango, catupiry e milho',
        'Pastel de palmito',
        'Pastel de pizza (presunto, muçarela, tomate e orégano)',
        'Pastel de banana com queijo',
        'Pastel de bananada com passas',
        'Pastel de beijinho',
        'Pastel de Bis (recheio de Bis picado)',
        'Pastel de bombom (recheio de bombons picados)',
        'Pastel de brigadeiro',
        'Pastel de chocolate ao leite e chocolate branco',
        'Pastel de chocolate branco',
        'Pastel de chocolate com morango',
        'Pastel de chocolate e cereja',
        'Pastel de creme de avelã (Nutella)',
        'Pastel de doce de leite',
        'Pastel de doce de leite com ameixa',
        'Pastel de doce de leite com coco',
        'Pastel de doce de leite com damasco',
        'Pastel de doce de leite com nozes',
        'Pastel de doce de leite com paçoca',
        'Pastel de doce de leite e banana',
        'Pastel de doce de leite e chocolate',
        'Pastel de KitKat',
        'Pastel de leite condensado',
        'Pastel de Leite Ninho com Nutella',
        'Pastel de M&amp;Ms',
        'Pastel de Nutella com banana',
        'Pastel de Ovomaltine',
        'Pastel de sorvete',
        'Pastel alho poró com bacon',
        'Pastel de aliche',
        'Pastel de bacalhau',
        'Pastel de brócolis com bacon',
        'Pastel de brócolis com catupiry',
        'Pastel de brócolis com queijo fresco',
        'Pastel de camarão',
        'Pastel de carne louca',
        'Pastel de carne seca',
        'Pastel de carne seca com catupiry',
        'Pastel de carne seca com queijo',
        'Pastel de catupiry com milho',
        'Pastel de champignon',
        'Pastel de cogumelos frescos',
        'Pastel de costela desfiada',
        'Pastel de escarola com bacon',
        'Pastel de linguiça caseira com queijo coalho',
        'Pastel de lombo com catupiry',
        'Pastel marguerita (muçarela, tomate e manjericão)',
        'Pastel de peito de peru',
        'Pastel de peito de peru com catupiry',
        'Pastel de peito de peru com cream cheese',
        'Pastel de peito de peru com muçarela',
        'Pastel de pepperoni',
        'Pastel de provolone',
        'Pastel de ragu de costela',
        'Pastel de salame',
        'Pastel de salame com cream cheese',
        'Pastel de siri',
        'Pastel de strogonoff',
        'Pastel de tomate seco com queijo',
        'Pastel tropical (recheio de alface americana, bacon e queijo)',
        'Pastel de berinjela com catupiry',
        'Pastel de berinjela com queijo',
        'Pastel de carbonara (recheio de ovo cozido com bacon)',
        'Pastel de cheddar e bacon',
        'Pastel de creme de milho',
        'Pastel de feijoada (recheio de feijoada mais grossa e com menos caldo)',
        'Pastel de frango com quiabo',
        'Pastel de hambúrguer (recheio com carne de hambúrguer e queijo)',
        'Pastel de hot-dog (recheio com salsicha e outros ingredientes de cachorro quente)',
        'Pastel de mortadela com azeitona',
        'Pastel de mortadela com tomate',
        'Pastel de polenta com rabada',
        'Pastel de rúcula com catupiry',

    ];

    public function nomePastel(): string
    {
        return static::randomElement(static::$nome);
    }
}
