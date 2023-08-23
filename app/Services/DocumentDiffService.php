<?php
namespace App\Services;

use App\Models\Document;
use App\Models\DocumentUser;

class DocumentDiffService
{
    public function generateAndStoreDiffs()
    {
        $users = User::active()->get();

        foreach ($users as $user) {
            $viewedDocuments = $user->viewedDocuments()->get();

            foreach ($viewedDocuments as $document) {
                $latestVersion = $document->latestVersion();

                if (!$document->hasViewedLatestDiff($user)) {
                    $diff = $this->generateDiff($document, $user);
                    $this->storeDiff($document, $user, $diff, $latestVersion);
                }
            }
        }
    }

    private function generateDiff($document, $user)
    {
        // Logic to generate the diff based on document versions and user data
        // Use a diffing library or algorithm here
    }

    private function storeDiff($document, $user, $diff, $latestVersion)
    {
        // Logic to store the diff in the database
        DocumentUser::create([
            'user_id' => $user->id,
            'document_id' => $document->id,
            'last_viewed_version' => $latestVersion->version,
            'diff_content' => $diff,
        ]);
    }
}
