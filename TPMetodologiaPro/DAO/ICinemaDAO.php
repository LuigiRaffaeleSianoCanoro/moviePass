<?php
namespace DAO;
use Models\Cinema as Cinema;
interface ICinemaDAO 
{
    function Add(Cinema $newCinema);

}
?>