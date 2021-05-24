<div class="ratio-bar">
    <div class="container-fluid">
        <ul class="list-inline">
            <li>
                <a href="{{ route('users.show', ['username' => auth()->user()->username]) }}">
                    <span class="badge-user text-bold" style="color:{{ auth()->user()->group->color }};">
                        <strong>{{ auth()->user()->username }}</strong>
                        @if (auth()->user()->getWarning() > 0)
                            <i class="{{ config('other.font-awesome') }} fa-exclamation-circle text-orange"
                                aria-hidden="true" data-toggle="tooltip"
                                data-original-title="@lang('common.active-warning')"></i>
                        @endif
                    </span>
                </a>
            </li>
            <li>
                <span class="badge-user text-bold"
                    style="color:{{ auth()->user()->group->color }}; background-image:{{ auth()->user()->group->effect }};">
                    <i class="{{ auth()->user()->group->icon }}"></i>
                    <strong> {{ auth()->user()->group->name }}</strong>
                </span>
            </li>
            <li>
                <span class="badge-user text-bold">
                    <i class="{{ config('other.font-awesome') }} fa-arrow-up text-green"></i>
                    @lang('common.uploaded') : {{ auth()
                        ->user()
                        ->getUploaded() }}
                </span>
            </li>
            <li>
                <span class="badge-user text-bold">
                    <i class="{{ config('other.font-awesome') }} fa-arrow-down text-red"></i>
                    @lang('common.downloaded') : {{ auth()
                        ->user()
                        ->getDownloaded() }}
                </span>
            </li>
            <li>
                <span class="badge-user text-bold">
                    <i class="{{ config('other.font-awesome') }} fa-upload text-green"></i>
                    <a href="{{ route('user_active', ['username' => auth()->user()->username]) }}"
                        title="@lang('torrent.my-active-torrents')">
                        <span class="text-blue"> @lang('torrent.seeding'):</span>
                    </a>
                    {{ auth()
                        ->user()
                        ->getSeeding() }}
                </span>
            </li>
            <li>
                <span class="badge-user text-bold">
                    <i class="{{ config('other.font-awesome') }} fa-download text-red"></i>
                    <a href="{{ route('user_active', ['username' => auth()->user()->username]) }}"
                        title="@lang('torrent.my-active-torrents')">
                        <span class="text-blue"> @lang('torrent.leeching'):</span>
                    </a>
                    {{ auth()
                        ->user()
                        ->getLeeching() }}
                </span>
            </li>
            <li>
                <span class="badge-user text-bold">
                    <i class="{{ config('other.font-awesome') }} fa-coins text-gold"></i>
                    <a href="{{ route('bonus') }}" title="@lang('user.my-bonus-points')">
                        <span class="text-blue"> @lang('bon.bon'):</span>
                    </a>
                    {{ auth()
                        ->user()
                        ->getSeedbonus() }}
                </span>
            </li>
        </ul>
    </div>
</div>
