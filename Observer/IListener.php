<?php

namespace Observer;


interface IListener
{
    function react($string);
}