<?php

namespace ItauParser\Transaction;

class AbstractTransactionTest extends \PHPUnit_Framework_TestCase
{
    public function testAmount()
    {
        $transfer = new TransferTransaction();
        $transfer->setAmount(123.45);

        $this->assertEquals($transfer->getAmount(), 123.45);
    }

    public function testAmountType()
    {
        $transfer = new TransferTransaction();
        $transfer->setAmountType(AbstractTransaction::AMOUNT_TYPE_DEBIT);

        $this->assertEquals($transfer->getAmountType(), AbstractTransaction::AMOUNT_TYPE_DEBIT);

        $transfer->setAmountType(AbstractTransaction::AMOUNT_TYPE_CREDIT);

        $this->assertEquals($transfer->getAmountType(), AbstractTransaction::AMOUNT_TYPE_CREDIT);
    }

    public function testDate()
    {
        $originalDate = new \DateTime();
        $clonedDate = clone $originalDate;

        $transfer = new TransferTransaction();
        $transfer->setDate($clonedDate);

        $this->assertEquals($transfer->getDate()->getTimestamp(), $originalDate->getTimestamp());
    }

    public function testDescription()
    {
        $transfer = new TransferTransaction();
        $transfer->setDescription('ASDFGHH ');

        $this->assertEquals($transfer->getDescription(), 'ASDFGHH ');
    }

    public function testChannel()
    {
        $transfer = new TransferTransaction();
        $transfer->setChannel(TransferTransaction::CHANNEL_INTERNET);

        $this->assertEquals($transfer->getChannel(), TransferTransaction::CHANNEL_INTERNET);
    }
}