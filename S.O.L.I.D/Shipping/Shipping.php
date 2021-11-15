<?php

abstract class Shipping {

    public abstract function getCost(Order $order) :float;

}