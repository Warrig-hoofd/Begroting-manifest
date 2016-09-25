<?php

namespace App\Http\Controllers;

use App\Subscripts;
use Illuminate\Http\Request;

use App\Http\Requests;

/**
 * Class LeaksController
 * @package App\Http\Controllers
 */
class LeaksController extends Controller
{
    /**
     * @param  Requests\FindingValidator $input
     * @return \Illuminate\Http\RedirectResponse
     */
    public function insert(Request $input)
    {
        // dd($input->all());
        $db = new Subscripts;
        $db->firstname = $input->voornaam;
        $db->lastname = $input->achternaam;
        $db->email = $input->email;
        $db->birth_date = $input->geboortedatum;
        $db->source = $input->bron;
        $db->amount = $input->bedrag;
        $db->save();

        session()->flash('class', 'alert alert-success');
        session()->flash('message', 'Dank je voor je vonst. De regering zal er zeer blij mee zijn.');

        return redirect()->back();
    }
}
