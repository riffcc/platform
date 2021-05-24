@extends('layout.default')

@section('title')
	<title>Promo Signup Links - @lang('staff.staff-dashboard') - {{ config('other.title') }}</title>
@endsection

@section('meta')
	<meta name="description" content="Promo Signup Links - @lang('staff.staff-dashboard')">
@endsection

@section('breadcrumb')
	<li>
		<a href="{{ route('staff.dashboard.index') }}" itemprop="url" class="l-breadcrumb-item-link">
			<span itemprop="title" class="l-breadcrumb-item-link-title">@lang('staff.staff-dashboard')</span>
		</a>
	</li>
	<li class="active">
		<a href="{{ route('staff.promos.index') }}" itemprop="url" class="l-breadcrumb-item-link">
			<span itemprop="title" class="l-breadcrumb-item-link-title">Promo Links</span>
		</a>
	</li>
@endsection

@section('content')
	<div class="container">
		<div class="block">
			<div class="row">
				<div class="col-sm-12">
					<h2>
						<span class="text-blue">
							<strong>
								<i class="{{ config('other.font-awesome') }} fa-note"></i> {{ $promoLinks->count() }}
							</strong>
							Promo Links Found
							<button class="btn btn-md btn-success pull-right" data-toggle="modal" data-target="#create">Create Link</button>
						</span>
					</h2>
					<div class="table-responsive">
						<table class="table table-condensed table-striped table-bordered table-hover">
							<thead>
							<tr>
								<th>Creator</th>
								<th>Link</th>
								<th>Uses</th>
								<th>Max Uses</th>
								<th>Action</th>
							</tr>
							</thead>
							<tbody>
								@foreach ($promoLinks as $promoLink)
									<tr>
										<td>
											<a href="{{ route('users.show', ['username' => $promoLink->user->username]) }}">
												<span class="text-bold" style="color:{{ $promoLink->user->group->color }}; ">
													<i class="{{ $promoLink->user->group->icon }}"></i>
													{{ $promoLink->user->username }}
												</span>
											</a>
										</td>
										<td>
											<a href="{{ route('registrationForm', ['code' => $promoLink->code]) }}">
												{{ route('registrationForm', ['code' => $promoLink->code]) }}
											</a>
										</td>
										<td>
											{{ $promoLink->uses }}
										</td>
										<td>
											{{ $promoLink->max_uses }}
										</td>
										<td>
											<form action="{{ route('staff.promos.destroy', ['id' => $promoLink->id]) }}" method="POST">
												@csrf
												@method('DELETE')
												<button type="submit" class="btn btn-xs btn-danger">@lang('common.delete')</button>
											</form>
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="create">
		<div class="modal-dialog modal-dark" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="@lang('common.close')">
						<span aria-hidden="true">&times;</span>
					</button>
					<h2>
						<i class="{{ config('other.font-awesome') }} fa-thumbs-up"></i> Create A New Promo Signup Link
					</h2>
				</div>
				<form role="form" method="POST" action="{{ route('staff.promos.store') }}">
					@csrf
					<div class="modal-body text-center">
						<p>Max Uses?</p>
						<fieldset>
							<label>
								<input class="form-control" type="number" tabindex="3" name='max_uses' min='1' value="1">
							</label>
						</fieldset>
						<br>
						<div class="btns">
							<button type="button" class="btn btn-default" data-dismiss="modal">@lang('common.cancel')</button>
							<button type="submit" class="btn btn-success">Generate Link!</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection
