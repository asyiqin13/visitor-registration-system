@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header d-flex flex-wrap align-items-center justify-content-between gap-2">
                    <span>{{ __('Notifications') }}</span>
                    <div class="d-flex flex-wrap gap-2">
                        @if (auth()->user()->unreadNotifications()->exists())
                            <form action="{{ route('notifications.read-all') }}" method="post" class="d-inline">
                                @csrf
                                <button type="submit" class="btn btn-sm btn-outline-primary">{{ __('Mark all as read') }}</button>
                            </form>
                        @endif
                        @if (auth()->user()->notifications()->exists())
                            <form action="{{ route('notifications.destroy-all') }}" method="post" class="d-inline"
                                  onsubmit="return confirm('{{ __('Delete all notifications? This cannot be undone.') }}');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline-danger">{{ __('Delete all') }}</button>
                            </form>
                        @endif
                    </div>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success mb-3">{{ session('status') }}</div>
                    @endif

                    @if ($notifications->isEmpty())
                        <p class="text-muted mb-0">{{ __('You have no notifications yet.') }}</p>
                    @else
                        <ul class="list-group list-group-flush">
                            @foreach ($notifications as $notification)
                                <li class="list-group-item px-0 d-flex flex-wrap align-items-start justify-content-between gap-2">
                                    <div>
                                        <a href="{{ route('notifications.show', $notification->id) }}" class="fw-semibold text-decoration-none">
                                            {{ \Illuminate\Support\Str::headline(class_basename($notification->type)) }}
                                        </a>
                                        @if ($notification->read_at === null)
                                            <span class="badge bg-primary ms-1">{{ __('Unread') }}</span>
                                        @endif
                                        @php
                                            $data = $notification->data;
                                            $message = is_array($data) && isset($data['message']) ? $data['message'] : null;
                                        @endphp
                                        @if ($message)
                                            <div class="small text-muted mt-1">{{ $message }}</div>
                                        @endif
                                        <div class="small text-muted mt-1">{{ $notification->created_at->diffForHumans() }}</div>
                                    </div>
                                    <a href="{{ route('notifications.show', $notification->id) }}" class="btn btn-sm btn-outline-secondary flex-shrink-0">{{ __('View') }}</a>
                                </li>
                            @endforeach
                        </ul>
                        <div class="mt-3">
                            {{ $notifications->links() }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
