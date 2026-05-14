@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Authentication Logs') }}</div>

                <div class="card-body">
                    <p class="text-muted small mb-3">{{ __('Your recent sign-ins and sign-outs recorded by the system.') }}</p>
                    <table class="table table-sm align-middle">
                        <thead>
                            <tr>
                                <th>{{ __('Login') }}</th>
                                <th>{{ __('Logout') }}</th>
                                <th>{{ __('IP address') }}</th>
                                <th>{{ __('Browser / device') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($logs as $log)
                                <tr>
                                    <td>{{ $log->login_at?->format('Y-m-d H:i:s') ?? '—' }}</td>
                                    <td>{{ $log->logout_at?->format('Y-m-d H:i:s') ?? '—' }}</td>
                                    <td><code class="small">{{ $log->ip_address ?? '—' }}</code></td>
                                    <td class="small text-break" title="{{ $log->user_agent }}">{{ \Illuminate\Support\Str::limit($log->user_agent, 80) }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-muted">{{ __('No authentication activity has been recorded yet.') }}</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>

                    @if ($logs->hasPages())
                        <div class="d-flex justify-content-center mt-3">
                            {{ $logs->links() }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
