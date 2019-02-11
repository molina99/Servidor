<?php

//Users
$router->post('/users', ['uses' => 'UsersController@create']);
$router->put('/users', ['uses' => 'UsersController@update']);
$router->delete('/users', ['uses' => 'UsersController@delete']);
$router->get('/users', ['uses' => 'UsersController@getAll']);

//Books
$router->post('/books', ['uses' => 'BooksController@create']);
$router->put('/books', ['uses' => 'BooksController@update']);
$router->delete('/books', ['uses' => 'BooksController@delete']);
$router->get('/books', ['uses' => 'BooksController@getAll']);

//BookCopies
$router->post('/book_copies', ['uses' => 'BookCopiesController@create']);
$router->put('/book_copies', ['uses' => 'BookCopiesController@update']);
$router->delete('/book_copies', ['uses' => 'BookCopiesController@delete']);
$router->get('/book_copies', ['uses' => 'BookCopiesController@getAll']);

//Sanctions
$router->post('/sanctions', ['uses' => 'SanctionsController@create']);
$router->put('/sanctions', ['uses' => 'SanctionsController@update']);
$router->delete('/sanctions', ['uses' => 'SanctionsController@delete']);
$router->get('/sanctions', ['uses' => 'SanctionsController@getAll']);

//Reservations
$router->post('/reservations', ['uses' => 'ReservationsController@create']);
$router->put('/reservations', ['uses' => 'ReservationsController@update']);
$router->delete('/reservations', ['uses' => 'ReservationsController@delete']);
$router->get('/reservations', ['uses' => 'ReservationsController@getAll']);

//Detail Reservations
$router->post('/detail_reservations', ['uses' => 'DetailReservationsController@create']);
$router->put('/detail_reservations', ['uses' => 'DetailReservationsController@update']);
$router->delete('/detail_reservations', ['uses' => 'DetailReservationsController@delete']);
$router->get('/detail_reservations', ['uses' => 'DetailReservationsController@getAll']);

?>