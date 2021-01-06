<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InterviewController extends Controller
{
    public function getNextStep(Request $request)
    {
        $url = env('DOCASSEMBLE_URL') . "/interview?i=docassemble.braverinterviews:data/questions/stub.yml";
        switch ($request->input('status_needs')){
            case "Children":
                break;
            case "Eviction":
                break;
            case "Pregnancy":
                break;
            case "Prison Leaver":
                break;
            case "Relationship Breakdown":
                $url = env('DOCASSEMBLE_URL') . "/interview?i=docassemble.playground1:RelationshipBreakdown.yml&immigration_status=" . $request->input('immigration_status');
                break;
            case "Repossession":
                break;
            default:
                $url = env('DOCASSEMBLE_URL') . "/interview?i=docassemble.braverinterviews:data/questions/stub.yml";

        }

        $array = $request->all();
        $array = array_merge($array, array('redirect' => $url));
        return response()->json($array);
    }
}
