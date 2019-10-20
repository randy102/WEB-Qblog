<!--Title-->

<h2 class="page-header">Thống kê</h2>

<!--/Title-->

<!--/Statistic Wrap-->
<div class="row">
	<!--Statistic view Item-->
	<div class="col-sm-6">
		<div class="panel panel-primary">

			<div class="panel-heading">
				<div class="row">
					<div class="col-sm-3">
						<i class="fa fa-eye fa-5x"></i>
					</div>
					<div class="col-sm-9 text-right">
						<div class="sta-num">
							{{$views}}
						</div>
						<div>Lượt xem</div>
					</div>
				</div>
			</div>

			<a href="blogList">
				<div class="panel-footer">
					<span class="pull-left">Xem thêm</span>
					<span class="pull-right">
						<i class="fa fa-arrow-circle-right"></i>
					</span>
					<div class="clearfix"></div>
				</div>
			</a>

		</div>
	</div>
	<!--/Statistic view Item-->

	<!--Statistic blog Item-->
	<div class="col-sm-6">
		<div class="panel panel-green">

			<div class="panel-heading">
				<div class="row">
					<div class="col-sm-3">
						<i class="fa fa-pencil fa-5x"></i>
					</div>
					<div class="col-sm-9 text-right">
						<div class="sta-num">
							{{$num_blog}}
						</div>
						<div>Bài viết</div>
					</div>
				</div>
			</div>

			<a href="blogList">
				<div class="panel-footer">
					<span class="pull-left">Xem thêm</span>
					<span class="pull-right">
						<i class="fa fa-arrow-circle-right"></i>
					</span>
					<div class="clearfix"></div>
				</div>
			</a>

		</div>
	</div>
	<!--/Statistic blog Item-->

	<!--Statistic member Item-->
	<div class="col-sm-6">
		<div class="panel panel-red">

			<div class="panel-heading">
				<div class="row">
					<div class="col-sm-3">
						<i class="fa fa-user fa-5x"></i>
					</div>
					<div class="col-sm-9 text-right">
						<div class="sta-num">
							{{$num_user}}
						</div>
						<div>Thành viên</div>
					</div>
				</div>
			</div>

			<a href="memberList">
				<div class="panel-footer">
					<span class="pull-left">Xem thêm</span>
					<span class="pull-right">
						<i class="fa fa-arrow-circle-right"></i>
					</span>
					<div class="clearfix"></div>
				</div>
			</a>

		</div>
	</div>
	<!--/Statistic member Item-->

	<!--Statistic comment Item-->
	<div class="col-sm-6">
		<div class="panel panel-violet">

			<div class="panel-heading">
				<div class="row">
					<div class="col-sm-3">
						<i class="fa fa-commenting fa-5x"></i>
					</div>
					<div class="col-sm-9 text-right">
						<div class="sta-num">
							{{$num_comment}}
						</div>
						<div>Bình luận</div>
					</div>
				</div>
			</div>

			<a href="commentList">
				<div class="panel-footer">
					<span class="pull-left">Xem thêm</span>
					<span class="pull-right">
						<i class="fa fa-arrow-circle-right"></i>
					</span>
					<div class="clearfix"></div>
				</div>
			</a>

		</div>
	</div>
	<!--/Statistic view Item-->
</div>
<!--/Statistic Wrap-->


<!--Most View-->
<div class="panel panel-info">

	<div class="panel-heading">
		<i class="fa fa-bar-chart-o"></i> Bài viết có lượt xem nhiều nhất
	</div>

	<div class="panel-body">
		<div class="table-responsive">
			<table class="table table-bordered table-hover table-striped">
				<thead>
					<tr>
						
						<th>Tiêu đề</th>
						<th>Số lượt xem</th>
					</tr>
				</thead>
				<tbody>
					@foreach($most_views as $blog)
					<tr>
						
						<td>{{$blog->title}}</td>
						<td>{{$blog->views}}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
<!--/Most View-->

<!--Most Comments-->
<div class="panel panel-success">

	<div class="panel-heading">
		<i class="fa fa-commenting"></i> Bình luận mới nhất
	</div>

	<div class="panel-body">
		<div class="table-responsive">
			<table class="table table-bordered table-hover table-striped">
				<thead>
					<tr>
						
						<th>Bình luận</th>
						<th>Người đăng</th>
						<th>Bài viết</th>
						<th>Ngày đăng</th>
					</tr>
				</thead>
				<tbody>
					@foreach($newest_comment as $comment)
					<tr>
						<td>{{$comment->content}}</td>
						<td>{{$comment->user->name}}</td>
						<td>{{$comment->blog->title}}</td>
						<td>{{$comment->created_at}}</td>
					</tr>
					@endforeach
					
				</tbody>
			</table>
		</div>
	</div>
</div>
<!--Most Comments-->

<div class="panel panel-warning">

	<div class="panel-heading">
		<i class="fa fa-commenting"></i> Phản hồi
	</div>

	<div class="panel-body">
		<div class="chart-wrap">
			<canvas id="myChart" width="200" height="200"></canvas>
		</div>
	</div>
</div>


<script>
 var ctx = document.getElementById("myChart").getContext('2d');
	var myDoughnutChart = new Chart(ctx, {

    	type: 'doughnut',
    	data: {
    		labels: ['Quá tệ','Bình thường','Tuyệt vời'],

    		datasets: [{
    			data:['{{$bad}}','{{$normal}}','{{$good}}'],
    			backgroundColor: [
    			'#ef3f3f',
                '#49abe2',
                '#34d44f',
    			]
    		}],
    		

    	},
    	options: Chart.defaults.doughnut

	});
</script>



