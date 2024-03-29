<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Board;

class BoardController extends Controller
{
    public function index(Request $request)
    {
        $item = Board::with('person')->get();
        return view('board.index',['items' => $item]);
    }

    public function add(Request $request)
    {   
        return view('board.add');
    }

    public function create(Request $request)
    {
        $this->validate($request,Board::$rules);
        $board = new Board;
        $form = $request->all();
        unset($form['_token']);
        $board->fill($form)->save();
        return redirect('/board');
    }
}
