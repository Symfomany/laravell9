<?php


class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->visit('/')
             ->see('Dashboard');
    }

    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testContact()
    {
        $this->visit('/contact')
             ->see('Contact');
    }

    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testFaq()
    {
        $this->visit('/about-us')
             ->see('FAQ');
    }
}
