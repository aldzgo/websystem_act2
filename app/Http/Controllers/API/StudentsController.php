<?php

namespace App\Http\Controllers\API;

use App\http\Controllers\Controller;
use App\Models\Students;
use Illuminate\Http\Request;
use Flash;
use Response;
class StudentsController extends Controller {

    const succesCode = 200;
    public function studentsAPI(){
        $students = Students::all();

        if (count($students) > 0){
            return response()->json($students, $this->successStatus);
        }else{
            return response()->json(['Error' => 'There is no students in the database'], 404);
        }
    }

}


?>