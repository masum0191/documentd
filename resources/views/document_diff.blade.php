<!DOCTYPE html>
<html>
<head>
    <title>Document Diffs</title>
</head>
<body>
    <h1>Document Diffs</h1>

    @foreach ($user->viewedDocuments as $document)
        <h2>{{ $document->title }}</h2>
        
        @foreach ($document->documentUsers as $documentUser)
            <h3>Diff Version: {{ $documentUser->last_viewed_version }}</h3>
            <div>
                {!! $documentUser->diff_content !!}
            </div>
        @endforeach
    @endforeach
</body>
</html>
