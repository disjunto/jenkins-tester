<?php


class ModelTest extends \Codeception\TestCase\Test
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testMe()
    {
        $model = new \ci\Model();

        $this->assertEquals(2, $model->getVal());
    }

}