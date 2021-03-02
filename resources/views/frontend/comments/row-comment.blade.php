@if ($item->status == 1)
<div class="anser">
	<div class="avarta"><img src="{{ __BASE_URL__ }}/images/user.png" class="img-fluid" alt="images"></div>
	<div class="info">
		@if ($item->type == 1)
			<h5>
				<?php $userAdmin = \App\User::find($item->id_customers); ?>
				@if (!empty($userAdmin))
					{{ $userAdmin->name }}
				@else
					Administrator
				@endif
				<span class="badge badge-success">Quản trị viên</span>
			</h5>
		@else
			<h5>{{ @$item->Customers->name }}</h5>
		@endif
		<div class="desc">
			{!! $item->content !!}
		</div>
		<div class="date-btn">
			<ul class="list-inline">
				<li class="list-inline-item">
					<a title=""	class="reply-cmt btn btn-primary" data-id="{{ $item->id }}">Trả lời</a>
				</li>
				<li class="list-inline-item">{{ $item->created_at->diffForHumans() }}</li>
			</ul>
		</div>
	</div>
</div>
<div class="action-cmt {{ $item->id }}">
	<form action="{{ route('home.post.reply.comment', $idProduct) }}" method="POST" class="form_reply">
		@csrf
		<input type="hidden" name="cate"  value= {{ $arr->category()->first()->type == 'post_category' ? 'blog' : 'product' }}>
		<input type="hidden" name="parent_id" value="{{ $item->id }}">
		<div class="box-cmt">
			<div class="item-box">
				<div class="form-group">
					<textarea name="content" required="" maxlength="300" cols="30" rows="10" placeholder="">{{ $item->type == 0  ? '@'.$item->Customers->name : '@Quản trị viên' }}:</textarea>
				</div>
			</div>
			<p>Nhập thông tin của bạn</p>
			<ul class="list-inline">
				<li class="list-inline-item">
					<div class="gt">
						<div class="gt-rd">
							<input type="radio" id="gt-{{ $item->id }}-1" name="gioitinh" value="1" checked>
							<label for="gt-{{ $item->id }}-1">Anh</label>
						</div>
						<div class="gt-rd">
							<input type="radio" id="gt-{{ $item->id }}-2" name="gioitinh" value="2">
							<label for="gt-{{ $item->id }}-2">Chị</label>
						</div>
					</div>
				</li>
				<li class="list-inline-item">
					<div class="form-group">
						<input type="text" placeholder="Họ tên" name="name" min="5" max="50" required="">
					</div>
					
				</li>
				<li class="list-inline-item">
					<div class="form-group">
						<input type="email" placeholder="Email"  name="email" required="">
					</div>
				</li>

				<li class="list-inline-item">
					<div class="form-group">
						<input type="phone" placeholder="phone" name="phone" >
					</div>
				</li>
			</ul>
			
			<input type="submit" value="Hoàn tất & gửi" class="btn-sent">
		</div>
	</form>
</div>
@endif

@section('scripts')
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$('.reply-cmt').click(function() {
				var id = $(this).attr('data-id');
		
				$('div.action-cmt.'+id).show();
			})
		});

	</script>


@stop