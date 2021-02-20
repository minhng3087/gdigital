<div class="comment pt-50">
    <div class="title-cmt">Để lại bình luận của bạn </div>
    <div class="form-cmt">
        <form action="{{ route('home.post.comment', $data->id) }}" method="post">
        @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="item">
                        <textarea name="content" id="" cols="30" rows="10" placeholder="Viết bình luận"></textarea>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item"><input type="text" name="name" placeholder="Họ & tên *" class="inp-cmt"></div>
                </div>
                <div class="col-md-4">
                    <div class="item"><input type="text" name="email" placeholder="Email *" class="inp-cmt"></div>
                </div>
                <div class="col-md-4">
                    <div class="item"><input type="text" name="phone" placeholder="Số điện thoại" class="inp-cmt"></div>
                </div>
                <div class="col-md-12">
                    <div class="item item-check">
                        <input type="checkbox" id="1"><label for="1">Lưu Tên và Mail của bạn cho lần đăng nhập tiếp theo</label>
                    </div>
                </div>
                @if (route('home.post.single', ['slug' => $data->slug]) === url()->full())
                <input type="hidden" name="cate" value="blog">
                @else
                <input type="hidden" name="cate" value="product">
                @endif
                <div class="col-md-12">
                    <div class="item">
                        <div class="btn-cmt">
                            <button type="submit">Đăng bình luận</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>