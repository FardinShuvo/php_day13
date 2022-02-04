<?php
namespace App\classes;
use App\classes\User;
class Series
{
    protected $staringNumber;
    protected $endingNumber;
    protected $result;
    protected $i;
    protected $oddEven;
    protected $user;


    public function __construct($post=null)
    {
        $this->staringNumber = $post['starting_number'];
        $this->endingNumber  = $post['ending_number'];
        if(isset($post['odd_even']))
        {
            $this->oddEven = $post['odd_even'];
        }
    }

    public function index()
    {

        header('Location: pages/index.php');
    }
    public function makeSeries()
    {
        if($this->staringNumber > $this->endingNumber)
        {
            return $this->bigToSmallSeries();
        }
        else
        {
            if($this->oddEven=='odd')
            {
                return $this->smallToBigOddSeries();
            }
            elseif ($this->oddEven=='even')
            {
                return $this->smallToBigEvenSeries();
            }
            else
            {
                return $this->smallToBigSeries();
            }

        }

    }
    protected function smallToBigOddSeries()
    {
        for ($this->i = $this->staringNumber; $this->i <= $this->endingNumber; $this-> i++)
        {
           if($this->i%2 != 0)
           {
               $this->result .=$this->i .' ';
           }
        }
        return $this->result;
    }
    protected function smallToBigEvenSeries()
    {
        for ($this->i = $this->staringNumber; $this->i <= $this->endingNumber; $this-> i++)
        {
            if($this->i%2 !== 0)
            {
                $this->result .=$this->i .' ';
            }
        }
        return $this->result;
    }
    protected function smallToBigSeries()
    {
        for ($this->i = $this->staringNumber; $this->i <= $this->endingNumber; $this-> i++)
        {
            $this->result .=$this->i .' ';
        }
        return $this->result;
    }
    protected function bigToSmallSeries()
    {
        for($this->i = $this->staringNumber; $this->i >= $this->endingNumber; $this->i--)
        {
            $this->result .=$this->i .' ';
        }
        return $this->result;
    }

}