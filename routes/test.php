<?php

use Illuminate\Support\Facades\Route; // Use this package for Routing.

// IF users are to direct within /testroute URL, ('http://127.0.0.1:8000/testing/testroute')
// Then return the view of that route.
Route::get("/testroute", function(){
    return view('testroute');
});


?>