<?php


class MoviesTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->visit('/movies/index')
             ->see('Liste de mes films')
             ->see('Le seigneur des anneaux');
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
