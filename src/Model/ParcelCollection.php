<?php

namespace JouwWeb\SendCloud\Model;

use JouwWeb\SendCloud\Utility;

class ParcelCollection
{
    /** @var Parcel[] */
    protected $parcels = [];

    public function getParcels()
    {
        return $this->parcels;
    }

    public function addParcel(Parcel $parcel)
    {
        $this->parcels[] = $parcel;
    }
}
