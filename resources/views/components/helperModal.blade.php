<div class="modal fade" id="helperModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
        <div class="modal-content modalStyle">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{ $title }}</h5>
                {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
            </div>
            <div class="modal-body">
                 {{ $content }}
                @if(isset($testData))
                    @foreach($testData as $key => $val)
                        <li> {{ $key }}  - {!! $val !!}</li>
                    @endforeach
                @endif
            </div>
            <div class="modal-footer">
                <button id="logoutButton" type="button"  data-bs-dismiss="modal">close</button>
            </div>
        </div>
    </div>
</div>
