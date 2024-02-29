		<div class="modal fade sosmed" id="modal-id">
			<div class="modal-dialog">
				<div class="modal-content bg-blue-dark">
					<div class="modal-header" style="border-bottom: 0px;padding: 5px 10px;">
						<button type="button" class="close" style="color: #fff;opacity: 1;" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body" style="padding: 5px 10px;">
						<ul>
							<li><a href="https://www.facebook.com/dialog/share?app_id=226272481260211&href={{ route('post_detail',array('detail'=>$post->id)) }}" target="_blank" style="color: #fff;"><i class="fa fa-facebook"></i> Facebook</a></li>
							<li><a href="https://twitter.com/intent/tweet?url={{ route('post_detail',array('detail'=>$post->id)) }}&text={{ str_limit($post->post, 10) }}&via=skill_link_inc&related=skill_link_inc" style="color: #fff;" target="_blank"><i class="fa fa-twitter"></i> Twitter</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>