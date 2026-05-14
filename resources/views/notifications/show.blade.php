@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <span>{{ __('Notification') }}</span>
                    <a href="{{ route('notifications.index') }}" class="btn btn-sm btn-outline-secondary">{{ __('Back to list') }}</a>
                </div>

                <div class="card-body">
                    <h5 class="card-title">{{ \Illuminate\Support\Str::headline(class_basename($notification->type)) }}</h5>
                    @php
                        $data = $notification->data;
                        $message = is_array($data) && isset($data['message']) ? $data['message'] : null;
                    @endphp
                    @if ($message)
                        <p class="card-text">{{ $message }}</p>
                    @endif

                    <dl class="row small mb-0">
                        <dt class="col-sm-3">{{ __('Received') }}</dt>
                        <dd class="col-sm-9">{{ $notification->created_at->format('Y-m-d H:i') }} <span class="text-muted">({{ $notification->created_at->diffForHumans() }})</span></dd>
                        @if ($notification->read_at)
                            <dt class="col-sm-3">{{ __('Read at') }}</dt>
                            <dd class="col-sm-9">{{ $notification->read_at->format('Y-m-d H:i') }}</dd>
                        @endif
                    </dl>

                    @if (is_array($data) && count($data) > ($message ? 1 : 0))
                        <details class="mt-3">
                            <summary class="small text-muted">{{ __('Additional data') }}</summary>
                            <pre class="small bg-light p-2 rounded mt-2 mb-0"><code>{{ json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE) }}</code></pre>
                        </details>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
