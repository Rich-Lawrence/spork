<div class="modal">
    <div class="modal-header">
        <h2>{{ $title }}</h2> <!-- This pulls in the title slot -->
    </div>

    <div class="modal-body">
        <p>{{ $content }}</p> <!-- This pulls in the content slot -->
    </div>

    <!-- If any controls were passed into the component, use them here -->
    @if(isset($controls))
        <div class="modal-footer">
            {!! $controls !!}
        </div>
    @endif
</div>
