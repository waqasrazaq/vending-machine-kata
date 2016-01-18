<?php

namespace spec;

use Dime;
use Dollar;
use Nickel;
use PhpSpec\ObjectBehavior;
use ProductA;
use Prophecy\Argument;

class VendingMachineSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('VendingMachine');
    }

    function it_accepts_money_and_keeps_a_record_of_inserted_money()
    {
        $nickel = new Nickel();
        $dime = new Dime();
        $dollar = new Dollar();

        $this->insertMoney($nickel);
        $this->insertMoney($dime);
        $this->insertMoney($dollar);

        $this->displayInsertedTotal()->shouldReturn('[nickel,dime,dollar]-[$1.15]');
    }

    function it_allows_the_user_to_select_a_product_from_its_catalogue()
    {
        $product = new ProductA();
        $this->selectProduct($product);

        $this->displaySelectedProduct()->shouldReturn('Product A: $0.65');
    }

    function it_dispenses_the_selected_product_and_gives_correct_change()
    {
        $nickel = new Nickel();
        $dime = new Dime();
        $dollar = new Dollar();

        $this->insertMoney($nickel);
        $this->insertMoney($dime);
        $this->insertMoney($dollar);

        $product = new ProductA();
        $this->selectProduct($product);

        $this->dispenseProduct()->shouldReturn('[Product A]-[Change:$0.65]');
    }

    function it_returns_inserted_money_when_return_coin_is_pressed()
    {
        $nickel = new Nickel();
        $dime = new Dime();
        $dollar = new Dollar();

        $this->insertMoney($nickel);
        $this->insertMoney($dime);
        $this->insertMoney($dollar);

        $this->returnMoney()->shouldReturn('[nickel,dime,dollar]-[$1.15]');
    }
}
