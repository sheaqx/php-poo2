<?php

class truck extends Vehicle
{
    private int $capacityStorage;
    private int $load = 0;

    public function __construct(string $color, int $nbSeats, string $energy, int $capacityStorage)
    {
        parent::__construct($color, $nbSeats, $energy);
        $this->capacityStorage = $capacityStorage;
    }


    public function getCapacityStorage(): int
    {
        return $this->capacityStorage;
    }
    public function setCapacityStorage(int $capacityStorage)
    {
        $this->capacityStorage = $capacityStorage;
    }

    public function getLoad(): int
    {
        return $this->load;
    }
    public function setLoad(int $load)
    {
        $this->load = $load;
    }

    public function full()
    {
        if ($this->load === 0) {
            return "Empty";
        } elseif ($this->load === 100) {
            return "full";
        } else {
            return "is filling";
        }
    }
}
