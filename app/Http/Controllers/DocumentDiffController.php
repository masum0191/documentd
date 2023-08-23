<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DocumentDiffController extends Controller
{
    public function showDocumentDiffs()
    {
        $user = User::find(1); 
        // You can fetch the user based on authentication
        return view('document_diff', compact('user'));
    }
}
