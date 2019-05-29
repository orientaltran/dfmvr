@push('stylesheets')
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
@endpush
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
            <form action="{{ route('contact') }}" method="POST" class="frm-contact" id="id_contact" >
                @csrf
                <div class="form-group row">
                    <div class="col-md-6">
                        <input type="text" name="name" placeholder="Họ và tên (*)" class="form-control" >
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="email" placeholder="Email (*)" class="form-control" >
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6">
                        <input type="text" name="phone" placeholder="Số điện thoại (*)" class="form-control" >
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="field" placeholder="Lĩnh vực quan tâm (*)" class="form-control" >
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-12">
                        <textarea class="text-content" name="message" rows="10" placeholder="Nội dung"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="text-center mx-auto">
                        <button class="btn btn-seen" type="submit">Xác nhận</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script>
    $(document).ready(function($){
        $('#id_contact').on('submit', function(e){
            e.preventDefault();

            var url = $(this).attr('action');
            console.log(url);
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
                        toastr.error(data.message);
                    }
                    else {
                        toastr.success(data.message);
                        document.getElementById("id_contact").reset();
                    }
                },
                error: function (xhr, status, errors) {
                    toastr.error('Erros !!!');
                },
            });
        });

    });
</script>
@endpush