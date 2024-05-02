<x-layout>
    <div class="note-container">
        <a href="{{ route('note.create') }}" class="new-note-btn">
            New note
        </a><!-- new-note-btn -->
        <div class="notes">
            @foreach ($notes as $note)
            <div class="note">
                <div class="note-body">
                    {{ Str::words($note->note, 30) }}
                </div><!-- note-body -->
                <div class="note-buttons">
                    <a href="{{ route('note.show', $note) }}" class="note-edit-button">View</a><!-- note-edit-button -->
                    <a href="{{ route('note.edit', $note) }}" class="note-edit-button">Edit</a><!-- note-edit-button -->
                    <button class="note-delete-button">Delete</button><!-- note-delete-button -->
                </div><!-- note-buttons -->
            </div><!-- note -->
            @endforeach
        </div><!-- notes -->
    </div><!-- note-container -->
</x-layout>