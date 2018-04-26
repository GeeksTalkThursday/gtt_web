<div class="m-modal-box" id="newsletterModal">
        <div class="m-modal-overlay"></div>
        <div class="m-modal-content small">
            <div class="m-modal-header">
                <h3 class="m-modal-title">Newsletter</h3>
                <span class="m-modal-close"><i class="material-icons">&#xE5CD;</i></span>
            </div>
            <div class="m-modal-body">
                <p>Submit to our newsletter to receive exclusive stories delivered to you inbox!</p>
                <form action="{{route('subscribe')}}" method="POST" data-parsley-validate>{{ csrf_field() }}
                    <div class="frm-row">
                        <input required="" class="frm-input" type="email" name="email" placeholder="Email address">
                    </div>
                    <div class="frm-row">
                        <button class="frm-button material-button full" type="submit">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>