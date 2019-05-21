<section class="row contact mt-5">
    <div class="content container">
        <h4 class="text-uppercase tt-name">Liên hệ</h4>
        <hr class="underlined">
        <div class="title">
            <p> Bạn còn thắc mắc? Gọi ngay
                <span>(+84) 0283 715 8010</span>
            </p>
            <p>Hoặc gửi yêu cầu của bạn đến<span>
                    contact@dfm-engineering.com</span></p>
        </div>
        <div class="container">
            <form action="{{ route('contact') }}" method="POST" class="frm-contact" id="frm_contact" >
                @csrf
                <div class="form-group row">
                    <div class="col-md-6">
                        <input type="text" name="name" placeholder="Họ và tên (*)" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <input type="email" name="email" placeholder="Email (*)" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6">
                        <input type="text" name="phone" placeholder="Số điện thoại (*)" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="field" placeholder="Lĩnh vực quan tâm (*)" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-12">
                        <textarea class="text-content" name="message" rows="10" placeholder="Nội dung"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="text-center mx-auto">
                        <button class="btn btn-seen" type="submit">Xác nhận</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

@push('scrips')
<script>
$(document).ready(function($){
    $('#frm_contact').on('submit', function(e){
        e.preventDefault();

        var url = $(this).attr('action');
        $.ajaxSetup({
            headers: {
                    'X-CSRF-TOKEN': $('input[name="_token"]').attr('value')
            }
        });
        $.ajax({
            type: 'POST',
            url: url,
            data : new FormData(this),
            cache:false,
            contentType: false,
            processData: false,
            success:function(data){
                if (data.error == 1) {
                    //toastr.error(data.message);
                    alert('errs');
                }
                else {
                    alert('ok');
                    //toastr.success(data.message);
                }
            },
            error: function (xhr, status, errors) {
                //toastr.error('Vous êtes déjà inscrit.');
                alert('tinpham');
            },
        });
    });

});
</script>
@endpush