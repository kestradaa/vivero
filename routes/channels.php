<?php

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

Broadcast::channel('App.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});

Broadcast::channel('App.Plant.{id}', function ($plant, $id) {
    return (int) $plant->id === (int) $id;
});

Broadcast::channel('App.Employee.{id}', function ($employee, $id) {
    return (int) $employee->id === (int) $id;
});

Broadcast::channel('App.Bag.{id}', function ($bag, $id) {
    return (int) $bag->id === (int) $id;
});

Broadcast::channel('App.Loss.{id}', function ($loss, $id) {
    return (int) $loss->id === (int) $id;
});

Broadcast::channel('App.Withdrawal.{id}', function ($Withdrawal, $id) {
    return (int) $Withdrawal->id === (int) $id;
});