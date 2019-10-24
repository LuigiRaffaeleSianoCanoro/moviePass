<?php

namespace Controllers;

// Meter las peliculas en los cines
use Models\Cinema as Cinema;
use DAO\CinemaDAO as CinemaDAO;
use DAO\CinemaDAODB as CinemaDAODB;

class CinemaController
{

    //private $CinemaDAO; js
    private $CinemaDAODB;

    function __construct()
    {
       // $this->CinemaDAO = new CinemaDAO(); js
       $this->CinemaDAODB = new CinemaDAODB();
       
    }

    public function ShowCinemaView()
    {
        require_once(VIEWS_PATH . "Cinema-add.php");
    }
    public function ShowCinemaModify()
    {
        require_once(VIEWS_PATH . "Cinema-Modify.php");
    }

    public function ShowCinemaListView()
    {
        //$cinemasList = $this->CinemaDAO->GetAll();js
        $cinemasList = $this->CinemaDAODB->GetAll();

        require_once(VIEWS_PATH . "CinemaList.php");
    }


    
    public function Add($cinemaName,$address,$capacity,$ticketValue){
        $cinema = new Cinema();
        $cinema->setCinemaName($cinemaName);
        $cinema->setAddress($address);
        $cinema->setCapacity($capacity);
        $cinema->setTicketValue($ticketValue);
        $cinema->setRooms(null);
        

        try{
          $repo = $this->CinemaDAODB;
           $repo->Add($cinema);
           echo "<script>alert('Cinema agregado exitosamente!');</script>";
           $this->ShowCinemaListView();
        }catch(PDOException $e)
        {
            $e->getmessage();
            echo "<script>alert('$e->getmessage()');</script>";
            $this->ShowCinemaView();
        }
    }

    public function showModify()
    {
        require_once(VIEWS_PATH . "Cinema-Modify.php");

    }
    public function Delete($cinemaName)
    {
        try{
            $repo = $this->CinemaDAODB;
           $repo->DeleteCinema($cinemaName);
           echo "<script>alert ('Cines Actualizados');</script>";
           $this->ShowCinemaListView();
        }catch (PDOException $e)
        {
            $e->getmessage();
        }
    }

    public function ShowAddRoom()
    {
        require_once(VIEWS_PATH."RoomAdd.php");
    }

    public function AddRoom($roomName,$seatings)
    {
        $room = new Room();
        $room->setRoom_name($roomName);
        $room->setSeating($seatings);

        $repo = $this->CinemaDAODB;
        $repo->ModifyRoom($_SESSION['idCinema'],$room);
        unset($_SESSION['idCinema']);
    }


    public function Modify($currentCinema,$cinemaName,$address,$capacity,$ticketValue)
    {

        $updatedCinema = new Cinema();
        $updatedCinema->setCapacity($capacity);
        $updatedCinema->setAddress($address);
        $updatedCinema->setCinemaName($cinemaName);
        $updatedCinema->setTicketValue($ticketValue);
        $_SESSION['idCinema'] = $currentCinema->getIdCinema();



            try{
                $repo = $this->CinemaDAODB;
                $repo->ModifyCinema($currentCinema,$updatedCinema);
                echo "<script>alert ('Cines Actualizados');</script>";
                $this->ShowCinemaListView();

                }catch (PDOException $e){
                $e->getMessage();
            }
        }


    
}
?>