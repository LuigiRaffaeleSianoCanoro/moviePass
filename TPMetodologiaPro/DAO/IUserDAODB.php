<?php
namespace DAO;
use Models\User as User;
interface IUserDAODB
{
    function Add(User $user);
    function Delete($username);
    function GetAll();
}
?>