<?php

namespace ItauParser\Transaction;

class DebitTransactionTest extends \PHPUnit_Framework_TestCase
{
    public function testDateEffected()
    {
        $originalDate = new \DateTime();
        $clonedDate = clone $originalDate;

        $debit = new DebitTransaction();
        $debit->setDateEffected($clonedDate);

        $this->assertEquals($originalDate->getTimestamp(), $debit->getDateEffected()->getTimestamp());
    }

    public function testName()
    {
        $debit = new DebitTransaction();

        $this->assertEquals($debit->getName(), '@TODO');
    }

    public function testType()
    {
        $debit = new DebitTransaction();

        $this->assertEquals($debit->getType(), 'debit');
    }
}
 