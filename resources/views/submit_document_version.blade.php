<!DOCTYPE html>
<html>
<head>
    <title>Submit Document Version</title>
</head>
<body>
    <h1>Submit Document Version</h1>

    <form action="{{ route('submit-document-version') }}" method="post">
        @csrf

        <label for="document_id">Select Document:</label>
        <select name="document_id" id="document_id">
            @foreach ($documents as $document)
                <option value="{{ $document->id }}">{{ $document->title }}</option>
            @endforeach
        </select>

        <label for="version">Version:</label>
        <input type="text" name="version" id="version">

        <label for="body_content">Body Content:</label>
        <textarea name="body_content" id="body_content" rows="5"></textarea>

        <label for="tags_content">Tags Content:</label>
        <textarea name="tags_content" id="tags_content" rows="3"></textarea>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
