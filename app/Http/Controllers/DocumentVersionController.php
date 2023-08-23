<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Document;
use App\Models\DocumentVersion;

class DocumentVersionController extends Controller
{
    public function showSubmitDocumentVersionForm()
    {
        $documents = Document::active()->get();

        return view('submit_document_version', compact('documents'));
    }

    public function submitDocumentVersion(Request $request)
    {
        $validatedData = $request->validate([
            'document_id' => 'required|exists:documents,id',
            'version' => 'required',
            'body_content' => 'required',
            'tags_content' => 'required',
        ]);

        // Create a new document version
        DocumentVersion::create([
            'document_id' => $validatedData['document_id'],
            'version' => $validatedData['version'],
            'body_content' => $validatedData['body_content'],
            'tags_content' => $validatedData['tags_content'],
        ]);

        return redirect()->route('submit-document-version')
            ->with('success', 'Document version submitted successfully!');
    }
}
