<div>
    <!-- I have not failed. I've just found 10,000 ways that won't work. - Thomas Edison -->
    <div class="me-1 mb-1 d-inline-block">
        <!--large size Modal -->
        <div class="modal fade text-left" id="{{$modalId}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel17">{{ $title }}</h4>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <i data-feather="x"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        {{ $slot }}
                    </div>
                    {{-- <div class="modal-footer">
                        <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                            <i class="bx bx-x d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Close</span>
                        </button>
                        <button type="button" class="btn btn-primary ml-1" data-bs-dismiss="modal" id="{{$btnId}}">
                            <i class="bx bx-check d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Submit</span>
                        </button>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
